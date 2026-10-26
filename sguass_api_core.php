<?php
// =========================================================================
// SGUASS - MOTOR CENTRAL DE APIs REST POR TABLA, SECRET KEYS (4 DÍAS) Y SQLITE
// =========================================================================
// Dominio de producción: https://uass.serviciostms.com/
// Archivo personalizado independiente (no modifica archivos de PHPRunner).

ini_set('memory_limit', '512M');

// Cargar dbcommon.php SIEMPRE en el ámbito global (requerido por PHPRunner para $cman y $dal)
$sguass_dbcommon_path = dirname(__FILE__) . '/include/dbcommon.php';
if (file_exists($sguass_dbcommon_path)) {
    require_once($sguass_dbcommon_path);
}

// Compatibilidad con PHP 5.4 / 5.5 del servidor embebido de PHPRunner 10.0
if (!function_exists('hash_equals')) {
    function hash_equals($str1, $str2) {
        if (strlen($str1) !== strlen($str2)) {
            return false;
        }
        $res = $str1 ^ $str2;
        $ret = 0;
        for ($i = strlen($res) - 1; $i >= 0; $i--) {
            $ret |= ord($res[$i]);
        }
        return !$ret;
    }
}

define('SGUASS_BASE_URL', 'https://uass.serviciostms.com');
define('SGUASS_KEY_ROTATION_SECONDS', 4 * 86400); // 4 días exactos (345,600 segundos)
define('SGUASS_DAEMON_INTERVAL_SECONDS', 10 * 60); // 10 minutos (600 segundos)
define('SGUASS_MASTER_SEED', 'SGUASS_UASS_SERVICIOSTMS_2026_SECRET_SEED_V1');

/**
 * Adaptador universal SQLite3 -> Interfaz PDO (para servidores con extensión sqlite3 pero sin pdo_sqlite)
 */
class SguassSQLite3Stmt {
    private $db;
    private $sql;
    private $res;

    public function __construct($db, $sql) {
        $this->db = $db;
        $this->sql = $sql;
    }

    public function execute($params = array()) {
        $q = $this->sql;
        if (!empty($params)) {
            // Reemplazar parámetros con nombre de mayor a menor longitud
            $keys = array_keys($params);
            usort($keys, array($this, 'sortKeysByLen'));
            foreach ($keys as $k) {
                $v = $params[$k];
                $paramName = (strpos($k, ':') === 0) ? $k : (':' . $k);
                if ($v === null) {
                    $rep = 'NULL';
                } elseif (is_int($v) || is_float($v)) {
                    $rep = (string)$v;
                } else {
                    $rep = "'" . $this->db->escapeString((string)$v) . "'";
                }
                $q = str_replace($paramName, $rep, $q);
            }
        }
        $this->res = @$this->db->query($q);
        return ($this->res !== false);
    }

    private function sortKeysByLen($a, $b) {
        return strlen($b) - strlen($a);
    }

    public function fetch($mode = null) {
        if (!$this->res || is_bool($this->res)) return false;
        return $this->res->fetchArray(SQLITE3_ASSOC);
    }

    public function fetchAll($mode = null) {
        $rows = array();
        if (!$this->res || is_bool($this->res)) return $rows;
        while ($r = $this->res->fetchArray(SQLITE3_ASSOC)) {
            $rows[] = $r;
        }
        return $rows;
    }
}

class SguassSQLite3PDOAdapter {
    private $db;
    public function __construct($file) {
        $this->db = new SQLite3($file);
        $this->db->exec('PRAGMA journal_mode = WAL');
        $this->db->exec('PRAGMA synchronous = NORMAL');
    }
    public function exec($sql) {
        return @$this->db->exec($sql);
    }
    public function query($sql) {
        $stmt = new SguassSQLite3Stmt($this->db, $sql);
        $stmt->execute();
        return $stmt;
    }
    public function prepare($sql) {
        return new SguassSQLite3Stmt($this->db, $sql);
    }
    public function beginTransaction() {
        return @$this->db->exec('BEGIN TRANSACTION');
    }
    public function commit() {
        return @$this->db->exec('COMMIT');
    }
}

/**
 * Motor de respaldo local cuando el servidor embebido de Windows (PHPRunner EmbeddedServer)
 * no tiene habilitada la DLL pdo_sqlite ni sqlite3 en su php.ini.
 * Almacena la caché sincronizada en sguass_cache.db (formato serializado estructurado)
 * y resuelve las consultas SQL relacionales apoyándose en la caché y en MariaDB.
 */
class SguassFallbackStmt {
    private $rows = array();
    private $pos = 0;

    public function __construct($rows = array()) {
        $this->rows = is_array($rows) ? array_values($rows) : array();
        $this->pos = 0;
    }

    public function execute($params = array()) {
        return true;
    }

    public function fetch($mode = null) {
        if ($this->pos < count($this->rows)) {
            return $this->rows[$this->pos++];
        }
        return false;
    }

    public function fetchAll($mode = null) {
        return $this->rows;
    }
}

class SguassFallbackPreparedStmt {
    private $adapter;
    private $sql;
    private $resultRows = array();
    private $pos = 0;

    public function __construct($adapter, $sql) {
        $this->adapter = $adapter;
        $this->sql = trim($sql);
    }

    public function execute($params = array()) {
        $this->pos = 0;
        $this->resultRows = $this->adapter->runPrepared($this->sql, $params);
        return true;
    }

    public function fetch($mode = null) {
        if ($this->pos < count($this->resultRows)) {
            return $this->resultRows[$this->pos++];
        }
        return false;
    }

    public function fetchAll($mode = null) {
        return $this->resultRows;
    }
}

class SguassFallbackCacheAdapter {
    private $file;
    public $store = array();
    private $inTx = false;

    public function __construct($file) {
        $this->file = $file . '.json';
        if (file_exists($this->file)) {
            $raw = @file_get_contents($this->file);
            $dec = @json_decode($raw, true);
            if (is_array($dec)) {
                $this->store = $dec;
            }
        }
    }

    public function saveStore() {
        @file_put_contents($this->file, json_encode($this->store));
    }

    public function beginTransaction() {
        $this->inTx = true;
        return true;
    }

    public function commit() {
        $this->inTx = false;
        $this->saveStore();
        return true;
    }

    public function exec($sql) {
        $sql = trim($sql);
        if (preg_match('/^CREATE\s+TABLE\s+IF\s+NOT\s+EXISTS\s+([a-zA-Z0-9_]+)/i', $sql, $m)) {
            $t = $m[1];
            if (!isset($this->store[$t])) {
                $this->store[$t] = array();
            }
            if (!$this->inTx) $this->saveStore();
        } elseif (preg_match('/^DELETE\s+FROM\s+([a-zA-Z0-9_]+)$/i', $sql, $m)) {
            $t = $m[1];
            $this->store[$t] = array();
            if (!$this->inTx) $this->saveStore();
        }
        return true;
    }

    public function query($sql) {
        $rows = $this->runPrepared($sql, array());
        return new SguassFallbackStmt($rows);
    }

    public function prepare($sql) {
        return new SguassFallbackPreparedStmt($this, $sql);
    }

    public function runPrepared($sql, $params = array()) {
        $sql = trim($sql);

        // 1. INSERT INTO / INSERT OR REPLACE INTO <tabla> (cols) VALUES (vals)
        if (preg_match('/^INSERT\s+(?:OR\s+REPLACE\s+)?INTO\s+([a-zA-Z0-9_]+)\s*\(([^)]+)\)\s*VALUES\s*\(([^)]+)\)/is', $sql, $m)) {
            $t = trim($m[1]);
            $cols = array_map('trim', explode(',', $m[2]));
            $vals = array_map('trim', explode(',', $m[3]));
            $row = array();
            foreach ($cols as $idx => $colName) {
                $ph = isset($vals[$idx]) ? $vals[$idx] : '';
                if (isset($params[$ph])) {
                    $row[$colName] = $params[$ph];
                } elseif (isset($params[ltrim($ph, ':')])) {
                    $row[$colName] = $params[ltrim($ph, ':')];
                } else {
                    $row[$colName] = trim($ph, "'\"");
                }
            }
            if (!isset($this->store[$t])) {
                $this->store[$t] = array();
            }
            // Usar primera columna como clave única para REPLACE
            $pkCol = $cols[0];
            $pkVal = isset($row[$pkCol]) ? (string)$row[$pkCol] : (string)count($this->store[$t]);
            $this->store[$t][$pkVal] = $row;
            if (!$this->inTx) $this->saveStore();
            return array();
        }

        // 2. Verificar existencia de tabla en sqlite_master
        if (stripos($sql, 'sqlite_master') !== false) {
            if (preg_match("/name='([a-zA-Z0-9_]+)'/i", $sql, $m)) {
                $t = $m[1];
                if (!empty($this->store[$t])) {
                    return array(array('name' => $t));
                }
            }
            return array();
        }

        // 3. Consultas sobre daemon_meta
        if (stripos($sql, 'FROM daemon_meta') !== false) {
            $rows = isset($this->store['daemon_meta']) ? array_values($this->store['daemon_meta']) : array();
            if (stripos($sql, "meta_key = 'last_sync_epoch'") !== false) {
                foreach ($rows as $r) {
                    if (isset($r['meta_key']) && $r['meta_key'] === 'last_sync_epoch') {
                        return array($r);
                    }
                }
                return array();
            }
            return $rows;
        }

        // 4. Consultas sobre ficha_estudiantes
        if (stripos($sql, 'FROM ficha_estudiantes') !== false) {
            $ced = isset($params[':cedula']) ? (string)$params[':cedula'] : '';
            if (isset($this->store['ficha_estudiantes'][$ced])) {
                return array($this->store['ficha_estudiantes'][$ced]);
            }
            return array();
        }

        // 5. Consultas sobre ficha_profesores
        if (stripos($sql, 'FROM ficha_profesores') !== false) {
            $ced = isset($params[':cedula']) ? (string)$params[':cedula'] : '';
            if (isset($this->store['ficha_profesores'])) {
                foreach ($this->store['ficha_profesores'] as $r) {
                    if ((string)$r['cedula'] === $ced || (string)$r['profesor_id'] === $ced) {
                        return array($r);
                    }
                }
            }
            return array();
        }

        // 6. Consultas sobre cache_estudiantes con JOIN a cache_usuarios
        if (stripos($sql, 'FROM cache_estudiantes') !== false) {
            $estList = isset($this->store['cache_estudiantes']) ? array_values($this->store['cache_estudiantes']) : array();
            $usrMap  = isset($this->store['cache_usuarios']) ? $this->store['cache_usuarios'] : array();
            $carMap  = isset($this->store['cache_carreras']) ? $this->store['cache_carreras'] : array();
            $ced     = isset($params[':ced']) ? (string)$params[':ced'] : null;

            $out = array();
            foreach ($estList as $e) {
                $uid = isset($e['usuario_id']) ? (string)$e['usuario_id'] : '';
                $cid = isset($e['carrera_id']) ? (string)$e['carrera_id'] : '';
                $u   = isset($usrMap[$uid]) ? $usrMap[$uid] : array();
                $c   = isset($carMap[$cid]) ? $carMap[$cid] : array();
                $merged = $e;
                $merged['nombre']         = isset($u['nombre']) ? $u['nombre'] : '';
                $merged['usuario_nombre'] = isset($u['nombre']) ? $u['nombre'] : '';
                $merged['usuario_email']  = isset($u['email']) ? $u['email'] : '';
                $merged['carrera']        = isset($c['nombre']) ? $c['nombre'] : '';
                if ($ced !== null) {
                    if ((string)$e['numero_cedula'] === $ced || (string)$e['matricula'] === $ced) {
                        return array($merged);
                    }
                } else {
                    $out[] = $merged;
                }
            }
            if (preg_match('/LIMIT\s+(\d+)/i', $sql, $lm)) {
                $out = array_slice($out, 0, intval($lm[1]));
            }
            return $out;
        }

        // 7. Consultas sobre cache_profesores con JOIN a cache_usuarios
        if (stripos($sql, 'FROM cache_profesores') !== false) {
            $profList = isset($this->store['cache_profesores']) ? array_values($this->store['cache_profesores']) : array();
            $usrMap   = isset($this->store['cache_usuarios']) ? $this->store['cache_usuarios'] : array();
            $ced      = isset($params[':ced']) ? (string)$params[':ced'] : null;

            $out = array();
            foreach ($profList as $p) {
                $uid = isset($p['usuario_id']) ? (string)$p['usuario_id'] : '';
                $u   = isset($usrMap[$uid]) ? $usrMap[$uid] : array();
                $merged = $p;
                $merged['nombre']         = isset($u['nombre']) ? $u['nombre'] : '';
                $merged['email']          = isset($u['email']) ? $u['email'] : '';
                $merged['usuario_nombre'] = isset($u['nombre']) ? $u['nombre'] : '';
                $merged['usuario_email']  = isset($u['email']) ? $u['email'] : '';
                if ($ced !== null) {
                    if ((string)$p['numero_cedula'] === $ced || (string)$p['id'] === $ced || (string)$p['usuario_id'] === $ced) {
                        return array($merged);
                    }
                } else {
                    $out[] = $merged;
                }
            }
            if (preg_match('/LIMIT\s+(\d+)/i', $sql, $lm)) {
                $out = array_slice($out, 0, intval($lm[1]));
            }
            return $out;
        }

        // 8. Para consultas relacionales complejas sobre cache_<tabla>, delegar transparentemente a MariaDB convirtiendo cache_<tabla> -> <tabla>
        if (class_exists('DB')) {
            $sqlMaria = str_replace('cache_', '', $sql);
            if (!empty($params)) {
                $keys = array_keys($params);
                usort($keys, create_function('$a,$b', 'return strlen($b)-strlen($a);'));
                foreach ($keys as $k) {
                    $v = $params[$k];
                    $pkName = (strpos($k, ':') === 0) ? $k : (':' . $k);
                    $sqlMaria = str_replace($pkName, db_prepare_string($v), $sqlMaria);
                }
            }
            $rs = DB::Query($sqlMaria);
            $rows = array();
            if ($rs) {
                while ($r = $rs->fetchAssoc()) {
                    $rows[] = $r;
                }
            }
            return $rows;
        }

        return array();
    }
}

/**
 * Abre conexión a la base de datos SQLite local (sguass_cache.db) usando PDO, SQLite3 nativo o Cache Local
 */
function sguass_get_sqlite_pdo() {
    static $cachedConn = null;
    if ($cachedConn !== null) {
        return $cachedConn;
    }

    $sqliteFile = dirname(__FILE__) . '/sguass_cache.db';

    // 1. Intentar con PDO SQLite si el driver está activo
    if (class_exists('PDO') && in_array('sqlite', PDO::getAvailableDrivers())) {
        $pdo = new PDO('sqlite:' . $sqliteFile);
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $pdo->exec('PRAGMA journal_mode = WAL');
        $pdo->exec('PRAGMA synchronous = NORMAL');
        $cachedConn = $pdo;
        return $cachedConn;
    }

    // 2. Intentar con la extensión nativa SQLite3
    if (class_exists('SQLite3')) {
        $cachedConn = new SguassSQLite3PDOAdapter($sqliteFile);
        return $cachedConn;
    }

    // 3. Fallback universal para el servidor embebido local de PHPRunner (sin pdo_sqlite habilitado)
    $cachedConn = new SguassFallbackCacheAdapter($sqliteFile);
    return $cachedConn;
}

/**
 * Definición integral del catálogo de tablas del esquema serviciostms_uass
 */
function sguass_get_tables_metadata() {
    return array(
        'asistencias' => array(
            'endpoint' => 'api_asistencias.php',
            'titulo' => 'API de Asistencias',
            'proposito' => 'Consulta, registra, actualiza o elimina asistencias por clase. Permite filtrar por cédula de Alumno (devuelve las asistencias del estudiante) o de Docente (devuelve las asistencias de todos los alumnos en los cursos dictados por ese docente).',
            'retorna' => 'Lista de asistencias enriquecida con fecha, estado (Presente, Ausente, Tardanza, Justificado), observación, datos del alumno/docente y el indicador explícito de rol (tipo_persona: Alumno o Docente).',
            'pk' => 'id',
            'rol_natural' => 'Alumno',
            'columns' => array('id', 'inscripcion_id', 'fecha', 'estado', 'observacion'),
            'required_post' => array('inscripcion_id', 'fecha'),
            'defaults' => array('estado' => 'Presente', 'observacion' => '')
        ),
        'avisos' => array(
            'endpoint' => 'api_avisos.php',
            'titulo' => 'API de Avisos Académicos',
            'proposito' => 'Gestiona el tablón de anuncios por curso. Filtrado por cédula de Alumno retorna los avisos de las materias donde está inscrito; por cédula de Docente retorna los avisos publicados en las cátedras a su cargo.',
            'retorna' => 'Registros de avisos con id, curso_id, titulo, descripcion, fecha_publicacion y especificación de tipo_persona (Alumno o Docente).',
            'pk' => 'id',
            'rol_natural' => 'Docente',
            'columns' => array('id', 'curso_id', 'titulo', 'descripcion', 'fecha_publicacion'),
            'required_post' => array('curso_id', 'titulo'),
            'defaults' => array('descripcion' => '', 'fecha_publicacion' => date('Y-m-d H:i:s'))
        ),
        'carrera_materia' => array(
            'endpoint' => 'api_carrera_materia.php',
            'titulo' => 'API de Malla Curricular (Carrera - Materia)',
            'proposito' => 'Administra la relación de asignaturas por carrera y semestre. Al filtrar por cédula de Alumno devuelve el plan de estudios de su carrera; por cédula de Docente devuelve las mallas donde están incluidas las materias que enseña.',
            'retorna' => 'Vínculos curriculares con id, carrera_id, materia_id, semestre y especificación de tipo_persona.',
            'pk' => 'id',
            'rol_natural' => 'Alumno / Docente',
            'columns' => array('id', 'carrera_id', 'materia_id', 'semestre'),
            'required_post' => array('carrera_id', 'materia_id'),
            'defaults' => array('semestre' => 1)
        ),
        'carreras' => array(
            'endpoint' => 'api_carreras.php',
            'titulo' => 'API de Carreras Universitarias',
            'proposito' => 'Gestiona el catálogo de carreras y sus costos arancelarios. Al filtrar por cédula de Alumno retorna la carrera que cursa; por cédula de Docente retorna las carreras en las que dicta cátedra.',
            'retorna' => 'Datos de carreras: id, nombre, descripcion, costo_matricula, costo_semestre, cantidad_cuotas, costo_derecho_examen, estado y especificación de tipo_persona.',
            'pk' => 'id',
            'rol_natural' => 'Alumno / Docente',
            'columns' => array('id', 'nombre', 'descripcion', 'costo_matricula', 'costo_semestre', 'cantidad_cuotas', 'costo_derecho_examen', 'estado'),
            'required_post' => array('nombre'),
            'defaults' => array('descripcion' => '', 'costo_matricula' => 0, 'costo_semestre' => 0, 'cantidad_cuotas' => 5, 'costo_derecho_examen' => 0, 'estado' => 'Activo')
        ),
        'conceptos_pago' => array(
            'endpoint' => 'api_conceptos_pago.php',
            'titulo' => 'API de Conceptos de Pago',
            'proposito' => 'Administra el catálogo de aranceles (Matrícula, Mensualidad, Exámenes). Si se filtra por cédula de Alumno, retorna los conceptos asociados a su estado de cuenta.',
            'retorna' => 'Catálogo de conceptos con id, nombre, descripcion, monto base y especificación de tipo_persona.',
            'pk' => 'id',
            'rol_natural' => 'Alumno',
            'columns' => array('id', 'nombre', 'descripcion', 'monto'),
            'required_post' => array('nombre', 'monto'),
            'defaults' => array('descripcion' => '')
        ),
        'cursos' => array(
            'endpoint' => 'api_cursos.php',
            'titulo' => 'API de Cursos / Cátedras',
            'proposito' => 'Gestiona las cátedras habilitadas por período, materia y profesor. Filtrado por cédula de Docente devuelve las cátedras que imparte; por cédula de Alumno devuelve los cursos en los que está inscrito.',
            'retorna' => 'Detalle de cursos con id, carrera_id, semestre, materia_id, profesor_id, nombre_docente, cedula_docente, periodo_id, cupo, aula, horario, estado y tipo_persona.',
            'pk' => 'id',
            'rol_natural' => 'Docente',
            'columns' => array('id', 'carrera_id', 'semestre', 'materia_id', 'profesor_id', 'periodo_id', 'cupo', 'aula', 'horario', 'estado'),
            'required_post' => array('materia_id', 'profesor_id', 'periodo_id', 'cupo'),
            'defaults' => array('carrera_id' => null, 'semestre' => 1, 'aula' => 'S/A', 'horario' => 'S/H', 'estado' => 'Activo')
        ),
        'estudiantes' => array(
            'endpoint' => 'api_estudiantes.php',
            'titulo' => 'API de Estudiantes',
            'proposito' => 'Administra el padrón de alumnos. Filtrado por cédula de Alumno devuelve su registro personal; por cédula de Docente devuelve la nómina de todos los estudiantes inscritos en los cursos de ese profesor.',
            'retorna' => 'Perfil del estudiante con id, usuario_id, nombre_alumno, matricula, carrera_id, fecha_ingreso, numero_cedula y tipo_persona.',
            'pk' => 'id',
            'rol_natural' => 'Alumno',
            'columns' => array('id', 'usuario_id', 'matricula', 'carrera_id', 'fecha_ingreso', 'numero_cedula'),
            'required_post' => array('usuario_id', 'matricula', 'carrera_id', 'numero_cedula'),
            'defaults' => array('fecha_ingreso' => date('Y-m-d'))
        ),
        'inscripciones' => array(
            'endpoint' => 'api_inscripciones.php',
            'titulo' => 'API de Inscripciones a Materias',
            'proposito' => 'Gestiona las inscripciones de alumnos a cátedras individuales. Filtrado por cédula de Alumno devuelve sus materias inscritas; por cédula de Docente devuelve las inscripciones de los alumnos en sus cátedras.',
            'retorna' => 'Registros de inscripción con id, matricula_semestre_id, estudiante_id, nombre_alumno, cedula_alumno, curso_id, fecha_inscripcion y tipo_persona.',
            'pk' => 'id',
            'rol_natural' => 'Alumno',
            'columns' => array('id', 'matricula_semestre_id', 'estudiante_id', 'curso_id', 'fecha_inscripcion'),
            'required_post' => array('estudiante_id', 'curso_id'),
            'defaults' => array('matricula_semestre_id' => null, 'fecha_inscripcion' => date('Y-m-d H:i:s'))
        ),
        'materias' => array(
            'endpoint' => 'api_materias.php',
            'titulo' => 'API de Materias / Asignaturas',
            'proposito' => 'Administra el catálogo general de asignaturas. Filtrado por cédula de Alumno devuelve las materias de su carrera/inscripción; por cédula de Docente devuelve las materias que dicta.',
            'retorna' => 'Listado de asignaturas con id, nombre, descripcion y especificación de tipo_persona.',
            'pk' => 'id',
            'rol_natural' => 'Alumno / Docente',
            'columns' => array('id', 'nombre', 'descripcion'),
            'required_post' => array('nombre'),
            'defaults' => array('descripcion' => '')
        ),
        'matriculas_semestre' => array(
            'endpoint' => 'api_matriculas_semestre.php',
            'titulo' => 'API de Matrículas de Semestre',
            'proposito' => 'Gestiona la matriculación semestral por período y carrera. Filtrado por cédula de Alumno devuelve su historial de matrículas semestrales; por cédula de Docente devuelve las matrículas de los alumnos de sus cursos.',
            'retorna' => 'Matrículas con id, estudiante_id, nombre_alumno, cedula_alumno, carrera_id, periodo_id, semestre, fecha_matricula, estado, observaciones y tipo_persona.',
            'pk' => 'id',
            'rol_natural' => 'Alumno',
            'columns' => array('id', 'estudiante_id', 'carrera_id', 'periodo_id', 'semestre', 'fecha_matricula', 'estado', 'observaciones'),
            'required_post' => array('estudiante_id', 'carrera_id', 'periodo_id', 'semestre'),
            'defaults' => array('fecha_matricula' => date('Y-m-d H:i:s'), 'estado' => 'Activo', 'observaciones' => '')
        ),
        'notas' => array(
            'endpoint' => 'api_notas.php',
            'titulo' => 'API de Calificaciones y Notas',
            'proposito' => 'Gestiona las calificaciones de proceso (TP, Parcial 1, Parcial 2, Asistencia) y exámenes finales. Filtrado por cédula de Alumno devuelve su boletín de calificaciones; por cédula de Docente devuelve la planilla de notas de sus alumnos.',
            'retorna' => 'Calificaciones detalladas con puntos de proceso, examen final, extraordinarios, nota definitiva (1-5), descripción y tipo_persona.',
            'pk' => 'id',
            'rol_natural' => 'Alumno',
            'columns' => array('id', 'inscripcion_id', 'tipo_evaluacion', 'nota', 'descripcion', 'fecha_registro', 'Puntos_Trabajo_Practico', 'Puntos_Primer_Parcial', 'Puntos_Segundo_Parcial', 'Puntos_Examen_Final', 'Puntos_Examen_Extra_Ord', 'Puntos_Examen_Extra_Extra_Ord', 'Puntos_Asistencia'),
            'required_post' => array('inscripcion_id'),
            'defaults' => array('tipo_evaluacion' => 'Final', 'nota' => 1, 'descripcion' => 'Pendiente', 'fecha_registro' => date('Y-m-d H:i:s'), 'Puntos_Trabajo_Practico' => 0, 'Puntos_Primer_Parcial' => 0, 'Puntos_Segundo_Parcial' => 0, 'Puntos_Examen_Final' => 0, 'Puntos_Examen_Extra_Ord' => 0, 'Puntos_Examen_Extra_Extra_Ord' => 0, 'Puntos_Asistencia' => 0)
        ),
        'pagos' => array(
            'endpoint' => 'api_pagos.php',
            'titulo' => 'API de Pagos y Estado de Cuenta',
            'proposito' => 'Administra cuotas, matrículas, cobros, descuentos y multas por mora. Filtrado por cédula de Alumno devuelve su estado de cuenta completo; por cédula de Docente devuelve los registros de los alumnos asociados a sus cátedras.',
            'retorna' => 'Movimientos financieros con id, estudiante_id, nro_cuota, monto, descuento, multa_mora, fecha_vencimiento, fecha_pago, metodo_pago, nro_comprobante, estado y tipo_persona.',
            'pk' => 'id',
            'rol_natural' => 'Alumno',
            'columns' => array('id', 'estudiante_id', 'matricula_semestre_id', 'periodo_id', 'concepto_id', 'nro_cuota', 'monto', 'descuento', 'multa_mora', 'fecha_vencimiento', 'fecha_pago', 'metodo_pago', 'nro_comprobante', 'estado'),
            'required_post' => array('estudiante_id', 'concepto_id', 'monto'),
            'defaults' => array('matricula_semestre_id' => null, 'periodo_id' => null, 'nro_cuota' => '01/01', 'descuento' => 0, 'multa_mora' => 0, 'fecha_vencimiento' => date('Y-m-d'), 'fecha_pago' => null, 'metodo_pago' => null, 'nro_comprobante' => null, 'estado' => 'Pendiente')
        ),
        'periodos' => array(
            'endpoint' => 'api_periodos.php',
            'titulo' => 'API de Períodos Académicos',
            'proposito' => 'Administra los ciclos lectivos semestrales. Filtrado por cédula de Alumno o Docente devuelve los períodos en los que registra actividad académica.',
            'retorna' => 'Períodos con id, nombre, fecha_inicio, fecha_fin, activo (Sí/No) y especificación de tipo_persona.',
            'pk' => 'id',
            'rol_natural' => 'Alumno / Docente',
            'columns' => array('id', 'nombre', 'fecha_inicio', 'fecha_fin', 'activo'),
            'required_post' => array('nombre'),
            'defaults' => array('fecha_inicio' => date('Y-m-d'), 'fecha_fin' => date('Y-m-d', strtotime('+6 months')), 'activo' => 'No')
        ),
        'profesores' => array(
            'endpoint' => 'api_profesores.php',
            'titulo' => 'API de Profesores / Docentes',
            'proposito' => 'Administra el plantel docente. Filtrado por cédula de Docente devuelve su ficha profesional; filtrado por cédula de Alumno devuelve todos los profesores que le dictan clases.',
            'retorna' => 'Ficha docente con id, usuario_id, nombre_docente, numero_cedula, especialidad, fecha_ingreso y especificación de tipo_persona (Docente o Alumno).',
            'pk' => 'id',
            'rol_natural' => 'Docente',
            'columns' => array('id', 'usuario_id', 'especialidad', 'fecha_ingreso'),
            'required_post' => array('usuario_id'),
            'defaults' => array('especialidad' => 'General', 'fecha_ingreso' => date('Y-m-d'))
        ),
        'tarea_entregas' => array(
            'endpoint' => 'api_tarea_entregas.php',
            'titulo' => 'API de Entregas de Tareas',
            'proposito' => 'Gestiona los envíos y calificaciones de trabajos prácticos. Filtrado por cédula de Alumno devuelve sus entregas realizadas; por cédula de Docente devuelve las entregas de los alumnos en sus cursos para corrección.',
            'retorna' => 'Entregas con id, tarea_id, estudiante_id, nombre_alumno, archivo, comentario, fecha_entrega, calificacion y tipo_persona.',
            'pk' => 'id',
            'rol_natural' => 'Alumno',
            'columns' => array('id', 'tarea_id', 'estudiante_id', 'archivo', 'comentario', 'fecha_entrega', 'calificacion'),
            'required_post' => array('tarea_id', 'estudiante_id'),
            'defaults' => array('archivo' => '', 'comentario' => '', 'fecha_entrega' => date('Y-m-d H:i:s'), 'calificacion' => null)
        ),
        'tareas' => array(
            'endpoint' => 'api_tareas.php',
            'titulo' => 'API de Tareas y Trabajos Prácticos',
            'proposito' => 'Gestiona las consignas de trabajos prácticos por curso. Filtrado por cédula de Docente devuelve las tareas asignadas en sus cursos; por cédula de Alumno devuelve las tareas de las materias que cursa.',
            'retorna' => 'Tareas con id, curso_id, titulo, descripcion, link, fecha_entrega y especificación de tipo_persona.',
            'pk' => 'id',
            'rol_natural' => 'Docente',
            'columns' => array('id', 'curso_id', 'titulo', 'descripcion', 'link', 'fecha_entrega'),
            'required_post' => array('curso_id', 'titulo'),
            'defaults' => array('descripcion' => '', 'link' => '', 'fecha_entrega' => date('Y-m-d 23:59:00', strtotime('+7 days')))
        ),
        'usuarios' => array(
            'endpoint' => 'api_usuarios.php',
            'titulo' => 'API de Usuarios del Sistema',
            'proposito' => 'Gestiona las cuentas de usuario y credenciales. Permite filtrar por cédula de Alumno o de Docente y determina automáticamente en cada registro si pertenece a un Docente o a un Alumno.',
            'retorna' => 'Cuentas con id, nombre, email, activo, creado_en, numero_cedula vinculado y especificación explícita de tipo_persona (Docente o Alumno).',
            'pk' => 'id',
            'rol_natural' => 'Alumno / Docente',
            'columns' => array('id', 'nombre', 'email', 'password', 'activo', 'creado_en'),
            'required_post' => array('nombre', 'email', 'password'),
            'defaults' => array('activo' => 'Sí', 'creado_en' => date('Y-m-d H:i:s'))
        ),
        'sgui_uggroups' => array(
            'endpoint' => 'api_sgui_uggroups.php',
            'titulo' => 'API de Grupos de Seguridad (Roles)',
            'proposito' => 'Consulta o administra los grupos de roles del sistema (Docente, Alumno, Secretaria). Filtrado por cédula devuelve el grupo al que pertenece ese Docente o Alumno.',
            'retorna' => 'Grupos con GroupID, Label y especificación de tipo_persona.',
            'pk' => 'GroupID',
            'rol_natural' => 'Alumno / Docente',
            'columns' => array('GroupID', 'Label'),
            'required_post' => array('Label'),
            'defaults' => array()
        ),
        'sgui_ugmembers' => array(
            'endpoint' => 'api_sgui_ugmembers.php',
            'titulo' => 'API de Membresía de Usuarios a Roles',
            'proposito' => 'Asigna o consulta qué usuarios pertenecen a cada grupo (1=Docente, 2=Alumno, 3=Secretaria, -1=Admin). Filtrado por cédula devuelve las membresías del Docente o Alumno.',
            'retorna' => 'Membresías con UserName, GroupID y tipo_persona (Docente o Alumno).',
            'pk' => 'UserName',
            'rol_natural' => 'Alumno / Docente',
            'columns' => array('UserName', 'GroupID'),
            'required_post' => array('UserName', 'GroupID'),
            'defaults' => array()
        ),
        'sgui_ugrights' => array(
            'endpoint' => 'api_sgui_ugrights.php',
            'titulo' => 'API de Permisos por Tabla y Rol',
            'proposito' => 'Consulta o administra la matriz de permisos (AccessMask: A, E, D, S, P, I) por tabla. Filtrado por cédula devuelve los permisos efectivos del grupo del Docente o Alumno.',
            'retorna' => 'Permisos con TableName, GroupID, AccessMask y especificación de tipo_persona.',
            'pk' => 'TableName',
            'rol_natural' => 'Alumno / Docente',
            'columns' => array('TableName', 'GroupID', 'AccessMask'),
            'required_post' => array('TableName', 'GroupID', 'AccessMask'),
            'defaults' => array()
        )
    );
}

/**
 * Calcula la ventana actual de 4 días y genera el Secret Key determinístico por API
 */
function sguass_get_key_window_info($timestamp = null) {
    if ($timestamp === null) {
        $timestamp = time();
    }
    $windowId = (int) floor($timestamp / SGUASS_KEY_ROTATION_SECONDS);
    $validFrom = $windowId * SGUASS_KEY_ROTATION_SECONDS;
    $expiresAt = ($windowId + 1) * SGUASS_KEY_ROTATION_SECONDS;
    return array(
        'window_id' => $windowId,
        'valid_from_ts' => $validFrom,
        'expires_at_ts' => $expiresAt,
        'valid_from' => date('Y-m-d H:i:s', $validFrom),
        'expires_at' => date('Y-m-d H:i:s', $expiresAt),
        'remaining_seconds' => max(0, $expiresAt - $timestamp),
        'rotation_days' => 4
    );
}

function sguass_generate_secret_key($apiIdentifier, $windowId = null) {
    if ($windowId === null) {
        $info = sguass_get_key_window_info();
        $windowId = $info['window_id'];
    }
    $cleanName = preg_replace('/[^a-z0-9_]/', '', strtolower(str_replace(array('api_', '.php'), '', $apiIdentifier)));
    $hmac = hash_hmac('sha256', "sguass_api_key|{$cleanName}|cycle_{$windowId}", SGUASS_MASTER_SEED);
    return 'sk_' . $cleanName . '_' . substr($hmac, 0, 20);
}

function sguass_get_all_secret_keys() {
    $info = sguass_get_key_window_info();
    $tables = sguass_get_tables_metadata();
    $keys = array();

    $keys['estudiante'] = array(
        'api_name' => 'api_estudiante.php',
        'tabla' => 'estudiante (Ficha 360° Consolidada)',
        'url' => SGUASS_BASE_URL . '/api_estudiante.php',
        'secret_key' => sguass_generate_secret_key('estudiante', $info['window_id']),
        'valid_from' => $info['valid_from'],
        'expires_at' => $info['expires_at'],
        'window_id' => $info['window_id']
    );

    foreach ($tables as $tName => $meta) {
        $keys[$tName] = array(
            'api_name' => $meta['endpoint'],
            'tabla' => $tName,
            'url' => SGUASS_BASE_URL . '/' . $meta['endpoint'],
            'secret_key' => sguass_generate_secret_key($tName, $info['window_id']),
            'valid_from' => $info['valid_from'],
            'expires_at' => $info['expires_at'],
            'window_id' => $info['window_id']
        );
    }
    return $keys;
}

/**
 * Obtiene la cédula asignada a un docente cuando la tabla profesores no tiene columna numero_cedula
 */
function sguass_resolve_docente_cedula($profesorRow, $usuarioRow = null) {
    if (isset($profesorRow['numero_cedula']) && trim($profesorRow['numero_cedula']) !== '') {
        return trim($profesorRow['numero_cedula']);
    }
    if (isset($profesorRow['cedula']) && trim($profesorRow['cedula']) !== '') {
        return trim($profesorRow['cedula']);
    }
    $pass = isset($profesorRow['password']) ? trim($profesorRow['password']) : ($usuarioRow && isset($usuarioRow['password']) ? trim($usuarioRow['password']) : '');
    if ($pass !== '' && preg_match('/^[0-9]{5,12}$/', $pass)) {
        return $pass;
    }
    $profId = isset($profesorRow['id']) ? intval($profesorRow['id']) : intval($profesorRow['profesor_id']);
    return (string)(2000000 + $profId);
}

/**
 * Verifica que las clases DB de PHPRunner estén disponibles
 */
function sguass_load_dbcommon() {
    return class_exists('DB');
}

/**
 * Verifica si han pasado más de 10 minutos (600s) desde la última sincronización SQLite y la ejecuta si es necesario
 */
function sguass_ensure_fresh_sqlite_cache($force = false) {
    try {
        $pdo = sguass_get_sqlite_pdo();
        $pdo->exec("CREATE TABLE IF NOT EXISTS daemon_meta (
            meta_key TEXT PRIMARY KEY,
            meta_value TEXT,
            updated_at TEXT
        )");
        if (!$force) {
            $stmt = $pdo->prepare("SELECT meta_value FROM daemon_meta WHERE meta_key = 'last_sync_epoch' LIMIT 1");
            $stmt->execute();
            $row = $stmt->fetch(PDO::FETCH_ASSOC);
            $lastEpoch = $row ? intval($row['meta_value']) : 0;

            $chk = $pdo->query("SELECT name FROM sqlite_master WHERE type='table' AND name='cache_estudiantes'")->fetch(PDO::FETCH_ASSOC);
            if ($chk && (time() - $lastEpoch) < SGUASS_DAEMON_INTERVAL_SECONDS) {
                return false;
            }
        }
        if (!function_exists('sguass_ejecutar_sincronizacion')) {
            $GLOBALS['SGUASS_DAEMON_SILENT'] = true;
            require_once(dirname(__FILE__) . '/sguass_daemon.php');
        } else {
            sguass_ejecutar_sincronizacion($pdo);
        }
        return true;
    } catch (Exception $e) {
        return false;
    }
}

/**
 * Extrae parámetros de entrada (Query string + JSON body + Form body)
 */
function sguass_get_request_params() {
    $params = $_GET;
    if (!empty($_POST)) {
        foreach ($_POST as $k => $v) {
            $params[$k] = $v;
        }
    }
    $rawBody = file_get_contents('php://input');
    if (!empty($rawBody)) {
        $json = json_decode($rawBody, true);
        if (is_array($json)) {
            foreach ($json as $k => $v) {
                $params[$k] = $v;
            }
        } else {
            parse_str($rawBody, $parsed);
            if (is_array($parsed)) {
                foreach ($parsed as $k => $v) {
                    $params[$k] = $v;
                }
            }
        }
    }
    return $params;
}

/**
 * Extrae el Secret Key enviado en GET, POST o Headers HTTP
 */
function sguass_extract_provided_secret_key($params) {
    if (!empty($params['secret_key'])) {
        return trim($params['secret_key']);
    }
    if (!empty($params['api_key'])) {
        return trim($params['api_key']);
    }
    if (function_exists('getallheaders')) {
        $headers = getallheaders();
        if (is_array($headers)) {
            foreach ($headers as $k => $v) {
                $low = strtolower($k);
                if ($low === 'x-secret-key' || $low === 'x-api-key' || $low === 'secret-key') {
                    return trim($v);
                }
                if ($low === 'authorization' && stripos($v, 'Bearer ') === 0) {
                    return trim(substr($v, 7));
                }
            }
        }
    }
    if (!empty($_SERVER['HTTP_X_SECRET_KEY'])) {
        return trim($_SERVER['HTTP_X_SECRET_KEY']);
    }
    if (!empty($_SERVER['HTTP_X_API_KEY'])) {
        return trim($_SERVER['HTTP_X_API_KEY']);
    }
    if (!empty($_SERVER['HTTP_AUTHORIZATION']) && stripos($_SERVER['HTTP_AUTHORIZATION'], 'Bearer ') === 0) {
        return trim(substr($_SERVER['HTTP_AUTHORIZATION'], 7));
    }
    return '';
}

/**
 * Identifica si una cédula corresponde a un Alumno, a un Docente, o a ambos
 */
function sguass_identificar_persona_por_cedula($cedula) {
    $cedula = trim((string)$cedula);
    if ($cedula === '') {
        return null;
    }

    $alumno = null;
    $docente = null;

    try {
        $pdo = sguass_get_sqlite_pdo();
        $chkEst = $pdo->query("SELECT name FROM sqlite_master WHERE type='table' AND name='cache_estudiantes'")->fetch(PDO::FETCH_ASSOC);
        if ($chkEst) {
            $stE = $pdo->prepare("SELECT e.*, u.nombre AS usuario_nombre, u.email AS usuario_email
                                  FROM cache_estudiantes e
                                  LEFT JOIN cache_usuarios u ON u.id = e.usuario_id
                                  WHERE e.numero_cedula = :ced OR e.matricula = :ced LIMIT 1");
            $stE->execute(array(':ced' => $cedula));
            $rowE = $stE->fetch(PDO::FETCH_ASSOC);
            if ($rowE) {
                $alumno = array(
                    'estudiante_id' => intval($rowE['id']),
                    'usuario_id' => intval($rowE['usuario_id']),
                    'carrera_id' => intval($rowE['carrera_id']),
                    'matricula' => $rowE['matricula'],
                    'numero_cedula' => $rowE['numero_cedula'],
                    'nombre' => $rowE['usuario_nombre'],
                    'email' => $rowE['usuario_email'],
                    'tipo_persona' => 'Alumno'
                );
            }

            $stP = $pdo->prepare("SELECT p.*, u.nombre AS usuario_nombre, u.email AS usuario_email
                                  FROM cache_profesores p
                                  LEFT JOIN cache_usuarios u ON u.id = p.usuario_id
                                  WHERE p.numero_cedula = :ced OR CAST(p.id AS TEXT) = :ced OR CAST(p.usuario_id AS TEXT) = :ced LIMIT 1");
            $stP->execute(array(':ced' => $cedula));
            $rowP = $stP->fetch(PDO::FETCH_ASSOC);
            if ($rowP) {
                $docente = array(
                    'profesor_id' => intval($rowP['id']),
                    'usuario_id' => intval($rowP['usuario_id']),
                    'especialidad' => $rowP['especialidad'],
                    'numero_cedula' => $rowP['numero_cedula'],
                    'nombre' => $rowP['usuario_nombre'],
                    'email' => $rowP['usuario_email'],
                    'tipo_persona' => 'Docente'
                );
            }
        }
    } catch (Exception $e) {}

    if (!$alumno && !$docente && sguass_load_dbcommon()) {
        $cedSql = db_prepare_string($cedula);
        $rsE = DB::Query("SELECT e.*, u.nombre AS usuario_nombre, u.email AS usuario_email
                          FROM estudiantes e
                          LEFT JOIN usuarios u ON u.id = e.usuario_id
                          WHERE e.numero_cedula = {$cedSql} OR e.matricula = {$cedSql} LIMIT 1");
        if ($rsE && ($rowE = $rsE->fetchAssoc())) {
            $alumno = array(
                'estudiante_id' => intval($rowE['id']),
                'usuario_id' => intval($rowE['usuario_id']),
                'carrera_id' => intval($rowE['carrera_id']),
                'matricula' => $rowE['matricula'],
                'numero_cedula' => $rowE['numero_cedula'],
                'nombre' => $rowE['usuario_nombre'],
                'email' => $rowE['usuario_email'],
                'tipo_persona' => 'Alumno'
            );
        }

        $rsP = DB::Query("SELECT p.*, u.nombre AS usuario_nombre, u.email AS usuario_email, u.password
                          FROM profesores p
                          INNER JOIN usuarios u ON u.id = p.usuario_id");
        if ($rsP) {
            while ($rowP = $rsP->fetchAssoc()) {
                $docCed = sguass_resolve_docente_cedula($rowP);
                if ($docCed === $cedula || (string)$rowP['id'] === $cedula || (string)$rowP['usuario_id'] === $cedula) {
                    $docente = array(
                        'profesor_id' => intval($rowP['id']),
                        'usuario_id' => intval($rowP['usuario_id']),
                        'especialidad' => $rowP['especialidad'],
                        'numero_cedula' => $docCed,
                        'nombre' => $rowP['usuario_nombre'],
                        'email' => $rowP['usuario_email'],
                        'tipo_persona' => 'Docente'
                    );
                    break;
                }
            }
        }
    }

    if (!$alumno && !$docente) {
        return null;
    }

    $tipoPersona = ($alumno && $docente) ? 'Docente y Alumno' : ($docente ? 'Docente' : 'Alumno');
    return array(
        'tipo_persona' => $tipoPersona,
        'es_docente' => ($docente !== null),
        'es_alumno' => ($alumno !== null),
        'cedula_consultada' => $cedula,
        'alumno' => $alumno,
        'docente' => $docente,
        'perfil' => $docente ? $docente : $alumno
    );
}

/**
 * Construye la consulta SQL enriquecida para una tabla dada (compatible con SQLite y MariaDB)
 */
function sguass_build_table_query($tableName, $personaInfo, $params, $useSqlite = true) {
    $tPrefix = $useSqlite ? 'cache_' : '';
    $whereParts = array();
    $bindParams = array();

    $metaAll = sguass_get_tables_metadata();
    $meta = $metaAll[$tableName];

    foreach ($meta['columns'] as $col) {
        if (isset($params[$col]) && $params[$col] !== '' && !is_array($params[$col])) {
            $whereParts[] = "t.{$col} = :col_{$col}";
            $bindParams[":col_{$col}"] = $params[$col];
        }
    }

    if ($personaInfo !== null) {
        $condPersona = array();

        if ($personaInfo['es_alumno'] && $personaInfo['alumno']) {
            $estId = intval($personaInfo['alumno']['estudiante_id']);
            $usrId = intval($personaInfo['alumno']['usuario_id']);
            $carId = intval($personaInfo['alumno']['carrera_id']);
            $uMail = addslashes((string)$personaInfo['alumno']['email']);

            switch ($tableName) {
                case 'estudiantes':
                    $condPersona[] = "t.id = {$estId}";
                    break;
                case 'profesores':
                    $condPersona[] = "t.id IN (SELECT c.profesor_id FROM {$tPrefix}cursos c INNER JOIN {$tPrefix}inscripciones i ON i.curso_id = c.id WHERE i.estudiante_id = {$estId})";
                    break;
                case 'usuarios':
                    $condPersona[] = "t.id = {$usrId}";
                    break;
                case 'carreras':
                    $condPersona[] = "t.id = {$carId}";
                    break;
                case 'carrera_materia':
                    $condPersona[] = "t.carrera_id = {$carId}";
                    break;
                case 'materias':
                    $condPersona[] = "(t.id IN (SELECT c.materia_id FROM {$tPrefix}inscripciones i INNER JOIN {$tPrefix}cursos c ON c.id = i.curso_id WHERE i.estudiante_id = {$estId}) OR t.id IN (SELECT cm.materia_id FROM {$tPrefix}carrera_materia cm WHERE cm.carrera_id = {$carId}))";
                    break;
                case 'periodos':
                    $condPersona[] = "(t.id IN (SELECT ms.periodo_id FROM {$tPrefix}matriculas_semestre ms WHERE ms.estudiante_id = {$estId}) OR t.id IN (SELECT c.periodo_id FROM {$tPrefix}inscripciones i INNER JOIN {$tPrefix}cursos c ON c.id = i.curso_id WHERE i.estudiante_id = {$estId}))";
                    break;
                case 'cursos':
                    $condPersona[] = "t.id IN (SELECT i.curso_id FROM {$tPrefix}inscripciones i WHERE i.estudiante_id = {$estId})";
                    break;
                case 'matriculas_semestre':
                    $condPersona[] = "t.estudiante_id = {$estId}";
                    break;
                case 'inscripciones':
                    $condPersona[] = "t.estudiante_id = {$estId}";
                    break;
                case 'asistencias':
                    $condPersona[] = "t.inscripcion_id IN (SELECT i.id FROM {$tPrefix}inscripciones i WHERE i.estudiante_id = {$estId})";
                    break;
                case 'notas':
                    $condPersona[] = "t.inscripcion_id IN (SELECT i.id FROM {$tPrefix}inscripciones i WHERE i.estudiante_id = {$estId})";
                    break;
                case 'tareas':
                    $condPersona[] = "t.curso_id IN (SELECT i.curso_id FROM {$tPrefix}inscripciones i WHERE i.estudiante_id = {$estId})";
                    break;
                case 'tarea_entregas':
                    $condPersona[] = "t.estudiante_id = {$estId}";
                    break;
                case 'avisos':
                    $condPersona[] = "t.curso_id IN (SELECT i.curso_id FROM {$tPrefix}inscripciones i WHERE i.estudiante_id = {$estId})";
                    break;
                case 'pagos':
                    $condPersona[] = "t.estudiante_id = {$estId}";
                    break;
                case 'conceptos_pago':
                    $condPersona[] = "t.id IN (SELECT p.concepto_id FROM {$tPrefix}pagos p WHERE p.estudiante_id = {$estId})";
                    break;
                case 'sgui_uggroups':
                    $condPersona[] = "t.GroupID = 2";
                    break;
                case 'sgui_ugmembers':
                    $condPersona[] = "LOWER(t.UserName) = LOWER('{$uMail}')";
                    break;
                case 'sgui_ugrights':
                    $condPersona[] = "t.GroupID = 2";
                    break;
            }
        }

        if ($personaInfo['es_docente'] && $personaInfo['docente']) {
            $profId = intval($personaInfo['docente']['profesor_id']);
            $usrId  = intval($personaInfo['docente']['usuario_id']);
            $uMail  = addslashes((string)$personaInfo['docente']['email']);

            switch ($tableName) {
                case 'profesores':
                    $condPersona[] = "t.id = {$profId}";
                    break;
                case 'estudiantes':
                    $condPersona[] = "t.id IN (SELECT i.estudiante_id FROM {$tPrefix}inscripciones i INNER JOIN {$tPrefix}cursos c ON c.id = i.curso_id WHERE c.profesor_id = {$profId})";
                    break;
                case 'usuarios':
                    $condPersona[] = "t.id = {$usrId}";
                    break;
                case 'carreras':
                    $condPersona[] = "(t.id IN (SELECT c.carrera_id FROM {$tPrefix}cursos c WHERE c.profesor_id = {$profId} AND c.carrera_id IS NOT NULL) OR t.id IN (SELECT cm.carrera_id FROM {$tPrefix}carrera_materia cm INNER JOIN {$tPrefix}cursos c ON c.materia_id = cm.materia_id WHERE c.profesor_id = {$profId}))";
                    break;
                case 'carrera_materia':
                    $condPersona[] = "t.materia_id IN (SELECT c.materia_id FROM {$tPrefix}cursos c WHERE c.profesor_id = {$profId})";
                    break;
                case 'materias':
                    $condPersona[] = "t.id IN (SELECT c.materia_id FROM {$tPrefix}cursos c WHERE c.profesor_id = {$profId})";
                    break;
                case 'periodos':
                    $condPersona[] = "t.id IN (SELECT c.periodo_id FROM {$tPrefix}cursos c WHERE c.profesor_id = {$profId})";
                    break;
                case 'cursos':
                    $condPersona[] = "t.profesor_id = {$profId}";
                    break;
                case 'matriculas_semestre':
                    $condPersona[] = "t.estudiante_id IN (SELECT i.estudiante_id FROM {$tPrefix}inscripciones i INNER JOIN {$tPrefix}cursos c ON c.id = i.curso_id WHERE c.profesor_id = {$profId})";
                    break;
                case 'inscripciones':
                    $condPersona[] = "t.curso_id IN (SELECT c.id FROM {$tPrefix}cursos c WHERE c.profesor_id = {$profId})";
                    break;
                case 'asistencias':
                    $condPersona[] = "t.inscripcion_id IN (SELECT i.id FROM {$tPrefix}inscripciones i INNER JOIN {$tPrefix}cursos c ON c.id = i.curso_id WHERE c.profesor_id = {$profId})";
                    break;
                case 'notas':
                    $condPersona[] = "t.inscripcion_id IN (SELECT i.id FROM {$tPrefix}inscripciones i INNER JOIN {$tPrefix}cursos c ON c.id = i.curso_id WHERE c.profesor_id = {$profId})";
                    break;
                case 'tareas':
                    $condPersona[] = "t.curso_id IN (SELECT c.id FROM {$tPrefix}cursos c WHERE c.profesor_id = {$profId})";
                    break;
                case 'tarea_entregas':
                    $condPersona[] = "t.tarea_id IN (SELECT ta.id FROM {$tPrefix}tareas ta INNER JOIN {$tPrefix}cursos c ON c.id = ta.curso_id WHERE c.profesor_id = {$profId})";
                    break;
                case 'avisos':
                    $condPersona[] = "t.curso_id IN (SELECT c.id FROM {$tPrefix}cursos c WHERE c.profesor_id = {$profId})";
                    break;
                case 'pagos':
                    $condPersona[] = "t.estudiante_id IN (SELECT i.estudiante_id FROM {$tPrefix}inscripciones i INNER JOIN {$tPrefix}cursos c ON c.id = i.curso_id WHERE c.profesor_id = {$profId})";
                    break;
                case 'conceptos_pago':
                    $condPersona[] = "1=1";
                    break;
                case 'sgui_uggroups':
                    $condPersona[] = "t.GroupID = 1";
                    break;
                case 'sgui_ugmembers':
                    $condPersona[] = "LOWER(t.UserName) = LOWER('{$uMail}')";
                    break;
                case 'sgui_ugrights':
                    $condPersona[] = "t.GroupID = 1";
                    break;
            }
        }

        if (!empty($condPersona)) {
            $whereParts[] = '(' . implode(' OR ', $condPersona) . ')';
        }
    }

    $whereSql = !empty($whereParts) ? (' WHERE ' . implode(' AND ', $whereParts)) : '';
    $limit = isset($params['limit']) ? max(1, min(1000, intval($params['limit']))) : 250;
    $offset = isset($params['offset']) ? max(0, intval($params['offset'])) : 0;

    $pk = $meta['pk'];
    $sql = "SELECT t.* FROM {$tPrefix}{$tableName} t {$whereSql} ORDER BY t.{$pk} ASC LIMIT {$limit} OFFSET {$offset}";

    return array('sql' => $sql, 'bind' => $bindParams);
}

/**
 * Enriquecimiento de cada fila devuelta con información de si es Docente o Alumno y cédulas vinculadas
 */
function sguass_enrich_rows_with_role($tableName, $rows, $personaInfo, $pdoSqlite = null) {
    $metaAll = sguass_get_tables_metadata();
    $rolNatural = isset($metaAll[$tableName]['rol_natural']) ? $metaAll[$tableName]['rol_natural'] : 'Alumno / Docente';

    $mapEstByUser = array();
    $mapProfByUser = array();
    $mapEstById = array();
    $mapProfById = array();

    if ($pdoSqlite) {
        try {
            $rsE = $pdoSqlite->query("SELECT e.id, e.usuario_id, e.numero_cedula, e.matricula, u.nombre FROM cache_estudiantes e LEFT JOIN cache_usuarios u ON u.id = e.usuario_id");
            if ($rsE) {
                while ($r = $rsE->fetch(PDO::FETCH_ASSOC)) {
                    $mapEstById[intval($r['id'])] = $r;
                    $mapEstByUser[intval($r['usuario_id'])] = $r;
                }
            }
            $rsP = $pdoSqlite->query("SELECT p.id, p.usuario_id, p.numero_cedula, p.especialidad, u.nombre FROM cache_profesores p LEFT JOIN cache_usuarios u ON u.id = p.usuario_id");
            if ($rsP) {
                while ($r = $rsP->fetch(PDO::FETCH_ASSOC)) {
                    $mapProfById[intval($r['id'])] = $r;
                    $mapProfByUser[intval($r['usuario_id'])] = $r;
                }
            }
        } catch (Exception $e) {}
    }

    $enriched = array();
    foreach ($rows as $row) {
        $rowTipo = $personaInfo ? $personaInfo['tipo_persona'] : $rolNatural;
        $esDocente = ($rowTipo === 'Docente' || $rowTipo === 'Docente y Alumno');
        $esAlumno  = ($rowTipo === 'Alumno'  || $rowTipo === 'Docente y Alumno');

        if ($tableName === 'usuarios') {
            $uid = intval($row['id']);
            if (isset($mapProfByUser[$uid])) {
                $rowTipo = 'Docente';
                $esDocente = true;
                $esAlumno = false;
                $row['numero_cedula'] = $mapProfByUser[$uid]['numero_cedula'];
                $row['profesor_id'] = intval($mapProfByUser[$uid]['id']);
            } elseif (isset($mapEstByUser[$uid])) {
                $rowTipo = 'Alumno';
                $esDocente = false;
                $esAlumno = true;
                $row['numero_cedula'] = $mapEstByUser[$uid]['numero_cedula'];
                $row['estudiante_id'] = intval($mapEstByUser[$uid]['id']);
            }
        } elseif ($tableName === 'estudiantes') {
            $rowTipo = $personaInfo ? $personaInfo['tipo_persona'] : 'Alumno';
            $esAlumno = true;
            $esDocente = ($personaInfo && $personaInfo['es_docente']);
            $estId = intval($row['id']);
            if (isset($mapEstById[$estId])) {
                $row['nombre_alumno'] = $mapEstById[$estId]['nombre'];
            }
        } elseif ($tableName === 'profesores') {
            $rowTipo = $personaInfo ? $personaInfo['tipo_persona'] : 'Docente';
            $esDocente = true;
            $esAlumno = ($personaInfo && $personaInfo['es_alumno']);
            $profId = intval($row['id']);
            if (isset($mapProfById[$profId])) {
                $row['nombre_docente'] = $mapProfById[$profId]['nombre'];
                if (empty($row['numero_cedula'])) {
                    $row['numero_cedula'] = $mapProfById[$profId]['numero_cedula'];
                }
            }
        } elseif (isset($row['estudiante_id']) && intval($row['estudiante_id']) > 0) {
            $estId = intval($row['estudiante_id']);
            if (isset($mapEstById[$estId])) {
                $row['nombre_alumno'] = $mapEstById[$estId]['nombre'];
                $row['cedula_alumno'] = $mapEstById[$estId]['numero_cedula'];
            }
            if (!$personaInfo) {
                $rowTipo = 'Alumno';
                $esAlumno = true;
                $esDocente = false;
            }
        } elseif (isset($row['profesor_id']) && intval($row['profesor_id']) > 0) {
            $profId = intval($row['profesor_id']);
            if (isset($mapProfById[$profId])) {
                $row['nombre_docente'] = $mapProfById[$profId]['nombre'];
                $row['cedula_docente'] = $mapProfById[$profId]['numero_cedula'];
            }
            if (!$personaInfo) {
                $rowTipo = 'Docente';
                $esDocente = true;
                $esAlumno = false;
            }
        } elseif ($tableName === 'sgui_ugmembers' || $tableName === 'sgui_uggroups' || $tableName === 'sgui_ugrights') {
            $gid = isset($row['GroupID']) ? intval($row['GroupID']) : 0;
            if ($gid === 1) {
                $rowTipo = 'Docente';
                $esDocente = true;
                $esAlumno = false;
            } elseif ($gid === 2) {
                $rowTipo = 'Alumno';
                $esDocente = false;
                $esAlumno = true;
            }
        }

        $row['tipo_persona'] = $rowTipo;
        $row['es_docente']   = $esDocente;
        $row['es_alumno']    = $esAlumno;
        $enriched[] = $row;
    }

    return $enriched;
}

/**
 * Ejecuta el controlador REST para la tabla indicada
 */
function sguass_handle_table_api_request($tableName) {
    header('Content-Type: application/json; charset=utf-8');
    header('Access-Control-Allow-Origin: *');
    header('Access-Control-Allow-Methods: GET, POST, PUT, DELETE, OPTIONS');
    header('Access-Control-Allow-Headers: Content-Type, Authorization, X-Secret-Key, X-API-Key');

    if ($_SERVER['REQUEST_METHOD'] === 'OPTIONS') {
        http_response_code(200);
        exit;
    }

    $tablesMeta = sguass_get_tables_metadata();
    if (!isset($tablesMeta[$tableName])) {
        http_response_code(404);
        echo json_encode(array(
            'success' => false,
            'error' => "La tabla '{$tableName}' no existe en el catálogo de APIs de SGUASS."
        ));
        exit;
    }

    $meta = $tablesMeta[$tableName];
    $params = sguass_get_request_params();

    // 1. Verificar Secret Key rotativa de 4 días para esta API
    $windowInfo = sguass_get_key_window_info();
    $expectedKey = sguass_generate_secret_key($tableName, $windowInfo['window_id']);
    $providedKey = sguass_extract_provided_secret_key($params);

    if ($providedKey === '' || !hash_equals($expectedKey, $providedKey)) {
        http_response_code(401);
        echo json_encode(array(
            'success' => false,
            'error' => 'Secret Key inválida, ausente o expirada para el endpoint ' . $meta['endpoint'] . '.',
            'instrucciones' => 'Envíe el parámetro secret_key (en GET, POST body o Header X-Secret-Key). Las claves rotan automáticamente cada 4 días.',
            'documentacion_swagger' => SGUASS_BASE_URL . '/swagger.php',
            'ciclo_actual_expira_en' => $windowInfo['expires_at']
        ));
        exit;
    }

    // 2. Asegurar que la base SQLite esté sincronizada (cada 10 minutos máximo)
    sguass_ensure_fresh_sqlite_cache(false);

    // 3. Determinar método HTTP efectivo
    $httpMethod = strtoupper($_SERVER['REQUEST_METHOD']);
    if ($httpMethod === 'POST') {
        if (!empty($params['_method'])) {
            $httpMethod = strtoupper(trim($params['_method']));
        } elseif (!empty($params['action'])) {
            $act = strtolower(trim($params['action']));
            if ($act === 'get' || $act === 'query' || $act === 'list' || $act === 'search') {
                $httpMethod = 'GET';
            } elseif ($act === 'update' || $act === 'edit' || $act === 'put') {
                $httpMethod = 'PUT';
            } elseif ($act === 'delete' || $act === 'remove') {
                $httpMethod = 'DELETE';
            } elseif ($act === 'create' || $act === 'insert' || $act === 'add') {
                $httpMethod = 'POST';
            }
        } else {
            $hasInsertColumns = false;
            foreach ($meta['columns'] as $col) {
                if ($col !== $meta['pk'] && isset($params[$col]) && $params[$col] !== '') {
                    $hasInsertColumns = true;
                    break;
                }
            }
            if (!$hasInsertColumns) {
                $httpMethod = 'GET';
            }
        }
    }

    // 4. Resolver filtro por Cédula (Alumno o Docente) si fue proporcionado
    $cedulaFiltro = isset($params['cedula']) ? trim((string)$params['cedula']) : (isset($params['numero_cedula']) && $httpMethod === 'GET' ? trim((string)$params['numero_cedula']) : '');
    $personaInfo = null;
    if ($cedulaFiltro !== '') {
        $personaInfo = sguass_identificar_persona_por_cedula($cedulaFiltro);
        if ($personaInfo === null) {
            http_response_code(404);
            echo json_encode(array(
                'success' => false,
                'tabla' => $tableName,
                'endpoint' => SGUASS_BASE_URL . '/' . $meta['endpoint'],
                'metodo' => $httpMethod,
                'filtro_cedula' => $cedulaFiltro,
                'tipo_persona' => 'No encontrado',
                'es_docente' => false,
                'es_alumno' => false,
                'message' => "No se encontró ningún Alumno ni Docente registrado con la cédula '{$cedulaFiltro}'."
            ));
            exit;
        }
    }

    // 5. Ejecutar operación según el método HTTP
    if ($httpMethod === 'GET') {
        $rows = array();
        $source = 'sqlite_cache';
        $pdoSqlite = null;

        try {
            $pdoSqlite = sguass_get_sqlite_pdo();
            $qInfo = sguass_build_table_query($tableName, $personaInfo, $params, true);
            $stmt = $pdoSqlite->prepare($qInfo['sql']);
            $stmt->execute($qInfo['bind']);
            $rows = $stmt->fetchAll(PDO::FETCH_ASSOC);
        } catch (Exception $ex) {
            $source = 'mariadb_live';
            if (sguass_load_dbcommon()) {
                $qInfo = sguass_build_table_query($tableName, $personaInfo, $params, false);
                $sqlLive = $qInfo['sql'];
                foreach ($qInfo['bind'] as $bk => $bv) {
                    $sqlLive = str_replace($bk, db_prepare_string($bv), $sqlLive);
                }
                $rsLive = DB::Query($sqlLive);
                if ($rsLive) {
                    while ($r = $rsLive->fetchAssoc()) {
                        $rows[] = $r;
                    }
                }
            }
        }

        $enrichedRows = sguass_enrich_rows_with_role($tableName, $rows, $personaInfo, $pdoSqlite);
        $topTipoPersona = $personaInfo ? $personaInfo['tipo_persona'] : $meta['rol_natural'];
        $topEsDocente = $personaInfo ? $personaInfo['es_docente'] : ($topTipoPersona === 'Docente' || $topTipoPersona === 'Alumno / Docente');
        $topEsAlumno  = $personaInfo ? $personaInfo['es_alumno']  : ($topTipoPersona === 'Alumno'  || $topTipoPersona === 'Alumno / Docente');

        echo json_encode(array(
            'success' => true,
            'tabla' => $tableName,
            'endpoint' => SGUASS_BASE_URL . '/' . $meta['endpoint'],
            'metodo' => 'GET',
            'source' => $source,
            'tipo_persona' => $topTipoPersona,
            'es_docente' => $topEsDocente,
            'es_alumno' => $topEsAlumno,
            'filtro_cedula' => $cedulaFiltro !== '' ? $cedulaFiltro : null,
            'persona_identificada' => $personaInfo ? $personaInfo['perfil'] : null,
            'total_registros' => count($enrichedRows),
            'data' => $enrichedRows
        ));
        exit;
    }

    if (!sguass_load_dbcommon()) {
        http_response_code(500);
        echo json_encode(array('success' => false, 'error' => 'No se pudo cargar la conexión a MariaDB (include/dbcommon.php).'));
        exit;
    }

    if ($httpMethod === 'POST') {
        $insertData = array();
        foreach ($meta['columns'] as $col) {
            if ($col === $meta['pk'] && !isset($params[$col])) {
                continue;
            }
            if (isset($params[$col]) && $params[$col] !== '') {
                $insertData[$col] = $params[$col];
            } elseif (array_key_exists($col, $meta['defaults'])) {
                $insertData[$col] = $meta['defaults'][$col];
            }
        }

        foreach ($meta['required_post'] as $reqCol) {
            if (!isset($insertData[$reqCol]) || $insertData[$reqCol] === '' || $insertData[$reqCol] === null) {
                http_response_code(400);
                echo json_encode(array(
                    'success' => false,
                    'tabla' => $tableName,
                    'metodo' => 'POST',
                    'tipo_persona' => $personaInfo ? $personaInfo['tipo_persona'] : $meta['rol_natural'],
                    'error' => "El campo '{$reqCol}' es obligatorio para crear un registro en '{$tableName}'.",
                    'campos_requeridos' => $meta['required_post']
                ));
                exit;
            }
        }

        $colsSql = array();
        $valsSql = array();
        foreach ($insertData as $c => $v) {
            $colsSql[] = "`{$c}`";
            $valsSql[] = ($v === null) ? "NULL" : db_prepare_string($v);
        }

        $sqlIns = "INSERT INTO `{$tableName}` (" . implode(', ', $colsSql) . ") VALUES (" . implode(', ', $valsSql) . ")";
        DB::Exec($sqlIns);
        $newId = DB::LastId();

        sguass_ensure_fresh_sqlite_cache(true);

        $topTipoPersona = $personaInfo ? $personaInfo['tipo_persona'] : $meta['rol_natural'];
        $insertData[$meta['pk']] = $newId ? intval($newId) : (isset($insertData[$meta['pk']]) ? $insertData[$meta['pk']] : null);
        $insertData['tipo_persona'] = $topTipoPersona;
        $insertData['es_docente'] = ($topTipoPersona === 'Docente' || $topTipoPersona === 'Alumno / Docente');
        $insertData['es_alumno']  = ($topTipoPersona === 'Alumno'  || $topTipoPersona === 'Alumno / Docente');

        http_response_code(201);
        echo json_encode(array(
            'success' => true,
            'tabla' => $tableName,
            'endpoint' => SGUASS_BASE_URL . '/' . $meta['endpoint'],
            'metodo' => 'POST',
            'tipo_persona' => $topTipoPersona,
            'es_docente' => $insertData['es_docente'],
            'es_alumno' => $insertData['es_alumno'],
            'message' => "Registro creado exitosamente en '{$tableName}'.",
            'data' => $insertData
        ));
        exit;
    }

    if ($httpMethod === 'PUT') {
        $pk = $meta['pk'];
        if (!isset($params[$pk]) || $params[$pk] === '') {
            http_response_code(400);
            echo json_encode(array(
                'success' => false,
                'tabla' => $tableName,
                'metodo' => 'PUT',
                'error' => "Debe proporcionar la clave primaria '{$pk}' para actualizar un registro en '{$tableName}'."
            ));
            exit;
        }

        $pkVal = $params[$pk];
        $sets = array();
        foreach ($meta['columns'] as $col) {
            if ($col === $pk) continue;
            if (array_key_exists($col, $params)) {
                $val = $params[$col];
                $sets[] = "`{$col}` = " . ($val === null ? "NULL" : db_prepare_string($val));
            }
        }

        if (empty($sets)) {
            http_response_code(400);
            echo json_encode(array(
                'success' => false,
                'tabla' => $tableName,
                'metodo' => 'PUT',
                'error' => 'No se enviaron columnas para actualizar.'
            ));
            exit;
        }

        $sqlUpd = "UPDATE `{$tableName}` SET " . implode(', ', $sets) . " WHERE `{$pk}` = " . db_prepare_string($pkVal);
        DB::Exec($sqlUpd);

        sguass_ensure_fresh_sqlite_cache(true);

        $topTipoPersona = $personaInfo ? $personaInfo['tipo_persona'] : $meta['rol_natural'];
        echo json_encode(array(
            'success' => true,
            'tabla' => $tableName,
            'endpoint' => SGUASS_BASE_URL . '/' . $meta['endpoint'],
            'metodo' => 'PUT',
            'tipo_persona' => $topTipoPersona,
            'es_docente' => ($topTipoPersona === 'Docente' || $topTipoPersona === 'Alumno / Docente'),
            'es_alumno' => ($topTipoPersona === 'Alumno' || $topTipoPersona === 'Alumno / Docente'),
            'message' => "Registro '{$pk}={$pkVal}' actualizado correctamente en '{$tableName}'."
        ));
        exit;
    }

    if ($httpMethod === 'DELETE') {
        $pk = $meta['pk'];
        if (!isset($params[$pk]) || $params[$pk] === '') {
            http_response_code(400);
            echo json_encode(array(
                'success' => false,
                'tabla' => $tableName,
                'metodo' => 'DELETE',
                'error' => "Debe proporcionar la clave primaria '{$pk}' para eliminar un registro en '{$tableName}'."
            ));
            exit;
        }

        $pkVal = $params[$pk];
        $sqlDel = "DELETE FROM `{$tableName}` WHERE `{$pk}` = " . db_prepare_string($pkVal);
        DB::Exec($sqlDel);

        sguass_ensure_fresh_sqlite_cache(true);

        $topTipoPersona = $personaInfo ? $personaInfo['tipo_persona'] : $meta['rol_natural'];
        echo json_encode(array(
            'success' => true,
            'tabla' => $tableName,
            'endpoint' => SGUASS_BASE_URL . '/' . $meta['endpoint'],
            'metodo' => 'DELETE',
            'tipo_persona' => $topTipoPersona,
            'es_docente' => ($topTipoPersona === 'Docente' || $topTipoPersona === 'Alumno / Docente'),
            'es_alumno' => ($topTipoPersona === 'Alumno' || $topTipoPersona === 'Alumno / Docente'),
            'message' => "Registro '{$pk}={$pkVal}' eliminado correctamente de '{$tableName}'."
        ));
        exit;
    }

    http_response_code(405);
    echo json_encode(array('success' => false, 'error' => 'Método HTTP no soportado.'));
    exit;
}
