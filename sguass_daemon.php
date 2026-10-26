<?php
// =========================================================================
// SGUASS - DEMONIO Y MIDDLEWARE DE SINCRONIZACIÓN A SQLITE (CADA 10 MINUTOS)
// =========================================================================
// Modos de ejecución:
// 1. Demonio continuo CLI (cada 10 min): php sguass_daemon.php --daemon
// 2. Tarea Cron (cada 10 min):           0,10,20,30,40,50 * * * * php /ruta/sguass_daemon.php
// 3. Ejecución Web JSON:                 https://uass.serviciostms.com/sguass_daemon.php
// 4. Monitor Web auto-recargable (10m):  https://uass.serviciostms.com/sguass_daemon.php?monitor=1

ini_set('memory_limit', '512M');
set_time_limit(0);

$currentDir = dirname(__FILE__);
require_once($currentDir . '/sguass_api_core.php');

if (!sguass_load_dbcommon()) {
    if (empty($GLOBALS['SGUASS_DAEMON_SILENT'])) {
        die(json_encode(array('success' => false, 'error' => 'No se encontró include/dbcommon.php.')));
    }
    return;
}

function sguass_inicializar_esquema_sqlite($pdo) {
    // 1. Metadatos del demonio y claves secretas rotativas (4 días)
    $pdo->exec("CREATE TABLE IF NOT EXISTS daemon_meta (
        meta_key TEXT PRIMARY KEY,
        meta_value TEXT,
        updated_at TEXT
    )");

    $pdo->exec("CREATE TABLE IF NOT EXISTS api_secret_keys (
        api_key_id TEXT PRIMARY KEY,
        api_name TEXT,
        tabla TEXT,
        url TEXT,
        secret_key TEXT,
        window_id INTEGER,
        valid_from TEXT,
        expires_at TEXT
    )");

    // 2. Ficha consolidada de estudiantes y docentes
    $pdo->exec("CREATE TABLE IF NOT EXISTS ficha_estudiantes (
        cedula TEXT PRIMARY KEY,
        estudiante_id INTEGER,
        nombre TEXT,
        matricula TEXT,
        carrera TEXT,
        email TEXT,
        estado_financiero TEXT,
        total_deuda INTEGER,
        total_mora INTEGER,
        porcentaje_asistencia INTEGER,
        materias_cursando INTEGER,
        promedio_calificaciones REAL,
        payload_json TEXT,
        actualizado_en TEXT
    )");
    $pdo->exec("CREATE INDEX IF NOT EXISTS idx_est_id ON ficha_estudiantes(estudiante_id)");

    $pdo->exec("CREATE TABLE IF NOT EXISTS ficha_profesores (
        cedula TEXT PRIMARY KEY,
        profesor_id INTEGER,
        usuario_id INTEGER,
        nombre TEXT,
        email TEXT,
        especialidad TEXT,
        cursos_activos INTEGER,
        payload_json TEXT,
        actualizado_en TEXT
    )");

    // 3. Tablas espejo para las 20 tablas de serviciostms_uass
    $pdo->exec("CREATE TABLE IF NOT EXISTS cache_asistencias (
        id INTEGER PRIMARY KEY, inscripcion_id INTEGER, fecha TEXT, estado TEXT, observacion TEXT
    )");
    $pdo->exec("CREATE TABLE IF NOT EXISTS cache_avisos (
        id INTEGER PRIMARY KEY, curso_id INTEGER, titulo TEXT, descripcion TEXT, fecha_publicacion TEXT
    )");
    $pdo->exec("CREATE TABLE IF NOT EXISTS cache_carrera_materia (
        id INTEGER PRIMARY KEY, carrera_id INTEGER, materia_id INTEGER, semestre INTEGER
    )");
    $pdo->exec("CREATE TABLE IF NOT EXISTS cache_carreras (
        id INTEGER PRIMARY KEY, nombre TEXT, descripcion TEXT, costo_matricula INTEGER,
        costo_semestre INTEGER, cantidad_cuotas INTEGER, costo_derecho_examen INTEGER, estado TEXT
    )");
    $pdo->exec("CREATE TABLE IF NOT EXISTS cache_conceptos_pago (
        id INTEGER PRIMARY KEY, nombre TEXT, descripcion TEXT, monto INTEGER
    )");
    $pdo->exec("CREATE TABLE IF NOT EXISTS cache_cursos (
        id INTEGER PRIMARY KEY, carrera_id INTEGER, semestre INTEGER, materia_id INTEGER,
        profesor_id INTEGER, periodo_id INTEGER, cupo INTEGER, aula TEXT, horario TEXT, estado TEXT
    )");
    $pdo->exec("CREATE TABLE IF NOT EXISTS cache_estudiantes (
        id INTEGER PRIMARY KEY, usuario_id INTEGER, matricula TEXT, carrera_id INTEGER,
        fecha_ingreso TEXT, numero_cedula TEXT
    )");
    $pdo->exec("CREATE INDEX IF NOT EXISTS idx_cache_est_ced ON cache_estudiantes(numero_cedula)");
    $pdo->exec("CREATE TABLE IF NOT EXISTS cache_inscripciones (
        id INTEGER PRIMARY KEY, matricula_semestre_id INTEGER, estudiante_id INTEGER,
        curso_id INTEGER, fecha_inscripcion TEXT
    )");
    $pdo->exec("CREATE TABLE IF NOT EXISTS cache_materias (
        id INTEGER PRIMARY KEY, nombre TEXT, descripcion TEXT
    )");
    $pdo->exec("CREATE TABLE IF NOT EXISTS cache_matriculas_semestre (
        id INTEGER PRIMARY KEY, estudiante_id INTEGER, carrera_id INTEGER, periodo_id INTEGER,
        semestre INTEGER, fecha_matricula TEXT, estado TEXT, observaciones TEXT
    )");
    $pdo->exec("CREATE TABLE IF NOT EXISTS cache_notas (
        id INTEGER PRIMARY KEY, inscripcion_id INTEGER, tipo_evaluacion TEXT, nota INTEGER,
        descripcion TEXT, fecha_registro TEXT, Puntos_Trabajo_Practico INTEGER,
        Puntos_Primer_Parcial INTEGER, Puntos_Segundo_Parcial INTEGER, Puntos_Examen_Final INTEGER,
        Puntos_Examen_Extra_Ord INTEGER, Puntos_Examen_Extra_Extra_Ord INTEGER, Puntos_Asistencia INTEGER
    )");
    $pdo->exec("CREATE TABLE IF NOT EXISTS cache_pagos (
        id INTEGER PRIMARY KEY, estudiante_id INTEGER, matricula_semestre_id INTEGER, periodo_id INTEGER,
        concepto_id INTEGER, nro_cuota TEXT, monto INTEGER, descuento INTEGER, multa_mora INTEGER,
        fecha_vencimiento TEXT, fecha_pago TEXT, metodo_pago TEXT, nro_comprobante TEXT, estado TEXT
    )");
    $pdo->exec("CREATE TABLE IF NOT EXISTS cache_periodos (
        id INTEGER PRIMARY KEY, nombre TEXT, fecha_inicio TEXT, fecha_fin TEXT, activo TEXT
    )");
    $pdo->exec("CREATE TABLE IF NOT EXISTS cache_profesores (
        id INTEGER PRIMARY KEY, usuario_id INTEGER, especialidad TEXT, fecha_ingreso TEXT, numero_cedula TEXT
    )");
    $pdo->exec("CREATE INDEX IF NOT EXISTS idx_cache_prof_ced ON cache_profesores(numero_cedula)");
    $pdo->exec("CREATE TABLE IF NOT EXISTS cache_tarea_entregas (
        id INTEGER PRIMARY KEY, tarea_id INTEGER, estudiante_id INTEGER, archivo TEXT,
        comentario TEXT, fecha_entrega TEXT, calificacion REAL
    )");
    $pdo->exec("CREATE TABLE IF NOT EXISTS cache_tareas (
        id INTEGER PRIMARY KEY, curso_id INTEGER, titulo TEXT, descripcion TEXT, link TEXT, fecha_entrega TEXT
    )");
    $pdo->exec("CREATE TABLE IF NOT EXISTS cache_usuarios (
        id INTEGER PRIMARY KEY, nombre TEXT, email TEXT, password TEXT, activo TEXT, creado_en TEXT
    )");
    $pdo->exec("CREATE TABLE IF NOT EXISTS cache_sgui_uggroups (
        GroupID INTEGER PRIMARY KEY, Label TEXT
    )");
    $pdo->exec("CREATE TABLE IF NOT EXISTS cache_sgui_ugmembers (
        UserName TEXT, GroupID INTEGER, PRIMARY KEY (UserName, GroupID)
    )");
    $pdo->exec("CREATE TABLE IF NOT EXISTS cache_sgui_ugrights (
        TableName TEXT, GroupID INTEGER, AccessMask TEXT, PRIMARY KEY (TableName, GroupID)
    )");
}

function sguass_ejecutar_sincronizacion($pdo) {
    sguass_inicializar_esquema_sqlite($pdo);

    $tablesMeta = sguass_get_tables_metadata();
    $conteoTablas = array();

    $pdo->beginTransaction();

    // 1. Sincronizar las Secret Keys vigentes del ciclo de 4 días
    $pdo->exec("DELETE FROM api_secret_keys");
    $allKeys = sguass_get_all_secret_keys();
    $stKey = $pdo->prepare("INSERT INTO api_secret_keys (api_key_id, api_name, tabla, url, secret_key, window_id, valid_from, expires_at)
                            VALUES (:id, :name, :tabla, :url, :sk, :win, :vf, :ea)");
    foreach ($allKeys as $kId => $kData) {
        $stKey->execute(array(
            ':id' => $kId,
            ':name' => $kData['api_name'],
            ':tabla' => $kData['tabla'],
            ':url' => $kData['url'],
            ':sk' => $kData['secret_key'],
            ':win' => $kData['window_id'],
            ':vf' => $kData['valid_from'],
            ':ea' => $kData['expires_at']
        ));
    }

    // 2. Sincronizar espejo completo de las 20 tablas desde MariaDB
    // Mapa de usuarios para resolver cédula de profesores
    $mapUsuarios = array();
    $rsU = DB::Query("SELECT * FROM usuarios");
    if ($rsU) {
        while ($uRow = $rsU->fetchAssoc()) {
            $mapUsuarios[intval($uRow['id'])] = $uRow;
        }
    }

    foreach ($tablesMeta as $tName => $meta) {
        $cols = $meta['columns'];
        if ($tName === 'profesores' && !in_array('numero_cedula', $cols)) {
            $cols[] = 'numero_cedula';
        }

        $pdo->exec("DELETE FROM cache_{$tName}");
        $placeholders = array();
        foreach ($cols as $c) {
            $placeholders[] = ":{$c}";
        }
        $sqlIns = "INSERT OR REPLACE INTO cache_{$tName} (" . implode(', ', $cols) . ") VALUES (" . implode(', ', $placeholders) . ")";
        $stmt = $pdo->prepare($sqlIns);

        $rs = DB::Query("SELECT * FROM `{$tName}`");
        $count = 0;
        if ($rs) {
            while ($row = $rs->fetchAssoc()) {
                $bind = array();
                foreach ($cols as $c) {
                    if ($tName === 'profesores' && $c === 'numero_cedula') {
                        $uObj = isset($mapUsuarios[intval($row['usuario_id'])]) ? $mapUsuarios[intval($row['usuario_id'])] : null;
                        $bind[":{$c}"] = sguass_resolve_docente_cedula($row, $uObj);
                    } else {
                        $bind[":{$c}"] = isset($row[$c]) ? $row[$c] : null;
                    }
                }
                $stmt->execute($bind);
                $count++;
            }
        }
        $conteoTablas[$tName] = $count;
    }

    // 3. Sincronizar ficha_profesores consolidada
    $pdo->exec("DELETE FROM ficha_profesores");
    $stmtProfFicha = $pdo->prepare("INSERT OR REPLACE INTO ficha_profesores
        (cedula, profesor_id, usuario_id, nombre, email, especialidad, cursos_activos, payload_json, actualizado_en)
        VALUES (:cedula, :profesor_id, :usuario_id, :nombre, :email, :especialidad, :cursos_activos, :payload_json, :actualizado_en)");

    $rsProf = DB::Query("SELECT p.*, u.nombre, u.email, u.password, u.activo
                         FROM profesores p
                         INNER JOIN usuarios u ON u.id = p.usuario_id");
    $totalDocentes = 0;
    if ($rsProf) {
        while ($pr = $rsProf->fetchAssoc()) {
            $profId = intval($pr['id']);
            $cedProf = sguass_resolve_docente_cedula($pr);
            $rsCurP = DB::Query("SELECT c.*, m.nombre AS materia_nombre, per.nombre AS periodo_nombre
                                 FROM cursos c
                                 INNER JOIN materias m ON m.id = c.materia_id
                                 LEFT JOIN periodos per ON per.id = c.periodo_id
                                 WHERE c.profesor_id = {$profId}");
            $cursosArr = array();
            if ($rsCurP) {
                while ($cr = $rsCurP->fetchAssoc()) {
                    $cursosArr[] = $cr;
                }
            }
            $payloadProf = array(
                'tipo_persona' => 'Docente',
                'es_docente' => true,
                'es_alumno' => false,
                'docente' => array(
                    'id' => $profId,
                    'usuario_id' => intval($pr['usuario_id']),
                    'nombre' => $pr['nombre'],
                    'cedula' => $cedProf,
                    'email' => $pr['email'],
                    'especialidad' => $pr['especialidad'],
                    'fecha_ingreso' => $pr['fecha_ingreso'],
                    'activo' => $pr['activo']
                ),
                'cursos' => $cursosArr
            );
            $stmtProfFicha->execute(array(
                ':cedula' => $cedProf,
                ':profesor_id' => $profId,
                ':usuario_id' => intval($pr['usuario_id']),
                ':nombre' => $pr['nombre'],
                ':email' => $pr['email'],
                ':especialidad' => $pr['especialidad'],
                ':cursos_activos' => count($cursosArr),
                ':payload_json' => json_encode($payloadProf),
                ':actualizado_en' => date('Y-m-d H:i:s')
            ));
            $totalDocentes++;
        }
    }

    // 4. Sincronizar ficha_estudiantes consolidada
    $sql = "SELECT 
                e.id AS estudiante_id,
                e.numero_cedula,
                e.matricula,
                e.fecha_ingreso,
                u.nombre,
                u.email,
                u.activo,
                c.id AS carrera_id,
                c.nombre AS carrera_nombre
            FROM estudiantes e
            INNER JOIN usuarios u ON u.id = e.usuario_id
            LEFT JOIN carreras c ON c.id = e.carrera_id
            ORDER BY e.id ASC";

    $rs = DB::Query($sql);
    $totalAlumnos = 0;
    $hoy = date("Y-m-d");

    $stmtInsert = $pdo->prepare("INSERT OR REPLACE INTO ficha_estudiantes 
        (cedula, estudiante_id, nombre, matricula, carrera, email, estado_financiero, 
         total_deuda, total_mora, porcentaje_asistencia, materias_cursando, 
         promedio_calificaciones, payload_json, actualizado_en)
        VALUES 
        (:cedula, :estudiante_id, :nombre, :matricula, :carrera, :email, :estado_financiero, 
         :total_deuda, :total_mora, :porcentaje_asistencia, :materias_cursando, 
         :promedio_calificaciones, :payload_json, :actualizado_en)");

    if ($rs) {
        while ($est = $rs->fetchAssoc()) {
            $estId = intval($est["estudiante_id"]);
            $cedula = trim($est["numero_cedula"]);
            if (empty($cedula)) continue;

            $sqlPagos = "SELECT 
                            p.id, p.nro_cuota, p.monto, p.descuento, p.multa_mora, 
                            p.fecha_vencimiento, p.fecha_pago, p.metodo_pago, 
                            p.nro_comprobante, p.estado,
                            cp.nombre AS concepto_nombre,
                            COALESCE(per.nombre, 'General') AS periodo_nombre
                         FROM pagos p
                         INNER JOIN conceptos_pago cp ON cp.id = p.concepto_id
                         LEFT JOIN periodos per ON per.id = p.periodo_id
                         WHERE p.estudiante_id = $estId
                         ORDER BY p.fecha_vencimiento ASC, p.id ASC";

            $rsPagos = DB::Query($sqlPagos);
            $arrPagos = array();
            $totalDeuda = 0;
            $totalMora = 0;
            $cuotasVencidas = 0;
            $cuotasPendientes = 0;

            if ($rsPagos) {
                while ($p = $rsPagos->fetchAssoc()) {
                    $monto = intval($p["monto"]);
                    $desc  = intval($p["descuento"]);
                    $venc  = $p["fecha_vencimiento"];
                    $estado = $p["estado"];
                    $mora  = intval($p["multa_mora"]);

                    $estaVencida = false;
                    if ($estado != 'Pagado' && !empty($venc) && $venc < $hoy) {
                        $estaVencida = true;
                        $dias = (strtotime($hoy) - strtotime($venc)) / 86400;
                        $meses = max(1, ceil($dias / 30));
                        $mora = intval(round($monto * 0.02 * $meses));
                    }

                    $totalNeto = ($monto + $mora - $desc);

                    if ($estado == 'Pagado') {
                        $estadoTexto = 'Pagado';
                    } elseif ($estaVencida || $estado == 'Vencido') {
                        $estadoTexto = 'Vencido';
                        $totalDeuda += $totalNeto;
                        $totalMora  += $mora;
                        $cuotasVencidas++;
                    } else {
                        $estadoTexto = 'Pendiente';
                        $totalDeuda += $totalNeto;
                        $cuotasPendientes++;
                    }

                    $arrPagos[] = array(
                        "id"          => intval($p["id"]),
                        "concepto"    => $p["concepto_nombre"],
                        "nro_cuota"   => $p["nro_cuota"],
                        "periodo"     => $p["periodo_nombre"],
                        "monto_base"  => $monto,
                        "descuento"   => $desc,
                        "mora"        => $mora,
                        "total"       => $totalNeto,
                        "vencimiento" => $venc,
                        "fecha_pago"  => $p["fecha_pago"],
                        "metodo"      => $p["metodo_pago"],
                        "comprobante" => $p["nro_comprobante"],
                        "estado"      => $estadoTexto,
                        "tipo_persona"=> "Alumno"
                    );
                }
            }

            $estadoFinanciero = ($cuotasVencidas > 0) ? "En Mora (" . $cuotasVencidas . " vencidas)" : ($totalDeuda > 0 ? "Pendiente" : "Al Día");

            $sqlAsis = "SELECT 
                            COUNT(*) AS total_clases,
                            SUM(CASE WHEN a.estado = 'Presente' THEN 1 ELSE 0 END) AS presentes,
                            SUM(CASE WHEN a.estado = 'Ausente' THEN 1 ELSE 0 END) AS ausentes,
                            SUM(CASE WHEN a.estado = 'Tardanza' THEN 1 ELSE 0 END) AS tardanzas,
                            SUM(CASE WHEN a.estado = 'Justificado' THEN 1 ELSE 0 END) AS justificados
                        FROM asistencias a
                        INNER JOIN inscripciones i ON i.id = a.inscripcion_id
                        WHERE i.estudiante_id = $estId";

            $rsAsis = DB::Query($sqlAsis)->fetchAssoc();
            $totClases = intval($rsAsis["total_clases"]);
            $pres = intval($rsAsis["presentes"]);
            $porcAsistencia = ($totClases > 0) ? round(($pres / $totClases) * 100) : 100;

            $sqlMaterias = "SELECT 
                                i.id AS inscripcion_id,
                                c.id AS curso_id,
                                c.semestre,
                                c.aula,
                                c.horario,
                                m.nombre AS materia_nombre,
                                per.nombre AS periodo_nombre,
                                u_prof.nombre AS docente_nombre,
                                n.id AS nota_id,
                                COALESCE(n.Puntos_Primer_Parcial, 0) AS p1,
                                COALESCE(n.Puntos_Segundo_Parcial, 0) AS p2,
                                COALESCE(n.Puntos_Trabajo_Practico, 0) AS tp,
                                COALESCE(n.Puntos_Asistencia, 0) AS asis_puntos,
                                COALESCE(n.Puntos_Examen_Final, 0) AS final_ord,
                                COALESCE(n.Puntos_Examen_Extra_Ord, 0) AS extra_ord,
                                COALESCE(n.Puntos_Examen_Extra_Extra_Ord, 0) AS mesa_esp,
                                COALESCE(n.nota, 0) AS calificacion_final,
                                COALESCE(n.descripcion, 'En Curso') AS estado_materia
                            FROM inscripciones i
                            INNER JOIN cursos c ON c.id = i.curso_id
                            INNER JOIN materias m ON m.id = c.materia_id
                            LEFT JOIN periodos per ON per.id = c.periodo_id
                            LEFT JOIN profesores p ON p.id = c.profesor_id
                            LEFT JOIN usuarios u_prof ON u_prof.id = p.usuario_id
                            LEFT JOIN notas n ON n.inscripcion_id = i.id
                            WHERE i.estudiante_id = $estId
                            ORDER BY c.semestre ASC, m.nombre ASC";

            $rsMat = DB::Query($sqlMaterias);
            $arrMaterias = array();
            $sumaNotas = 0;
            $cantNotas = 0;

            if ($rsMat) {
                while ($m = $rsMat->fetchAssoc()) {
                    $p1 = intval($m["p1"]);
                    $p2 = intval($m["p2"]);
                    $tp = intval($m["tp"]);
                    $asP = intval($m["asis_puntos"]);
                    $proceso = $p1 + $p2 + $tp + $asP;
                    $final = intval($m["final_ord"]);
                    $calif = intval($m["calificacion_final"]);

                    if ($calif > 0) {
                        $sumaNotas += $calif;
                        $cantNotas++;
                    }

                    $arrMaterias[] = array(
                        "inscripcion_id"    => intval($m["inscripcion_id"]),
                        "materia"           => $m["materia_nombre"],
                        "semestre"          => intval($m["semestre"]),
                        "periodo"           => $m["periodo_nombre"],
                        "aula"              => $m["aula"] ? $m["aula"] : 'S/A',
                        "horario"           => $m["horario"] ? $m["horario"] : 'S/H',
                        "docente"           => $m["docente_nombre"] ? $m["docente_nombre"] : 'Sin Asignar',
                        "parcial_1"         => $p1,
                        "parcial_2"         => $p2,
                        "trabajo_practico"  => $tp,
                        "asistencia_puntos" => $asP,
                        "total_proceso"     => $proceso,
                        "habilitado"        => ($proceso >= 30),
                        "examen_final"      => $final,
                        "calificacion"      => $calif,
                        "estado"            => $m["estado_materia"],
                        "tipo_persona"      => "Alumno"
                    );
                }
            }

            $promedio = ($cantNotas > 0) ? round($sumaNotas / $cantNotas, 2) : 0.00;

            $payload = array(
                "tipo_persona" => "Alumno",
                "es_docente"   => false,
                "es_alumno"    => true,
                "estudiante" => array(
                    "id"            => $estId,
                    "nombre"        => $est["nombre"],
                    "cedula"        => $cedula,
                    "matricula"     => $est["matricula"],
                    "email"         => $est["email"],
                    "carrera"       => $est["carrera_nombre"],
                    "fecha_ingreso" => $est["fecha_ingreso"],
                    "activo"        => $est["activo"],
                    "tipo_persona"  => "Alumno"
                ),
                "resumen_kpi" => array(
                    "total_deuda"       => $totalDeuda,
                    "total_mora"        => $totalMora,
                    "cuotas_vencidas"   => $cuotasVencidas,
                    "cuotas_pendientes" => $cuotasPendientes,
                    "estado_financiero" => $estadoFinanciero,
                    "asistencia_porc"   => $porcAsistencia,
                    "total_clases"      => $totClases,
                    "clases_presente"   => $pres,
                    "materias_cursando" => count($arrMaterias),
                    "promedio_general"  => $promedio
                ),
                "pagos"    => $arrPagos,
                "materias" => $arrMaterias
            );

            $stmtInsert->execute(array(
                ":cedula"                  => $cedula,
                ":estudiante_id"           => $estId,
                ":nombre"                  => $est["nombre"],
                ":matricula"               => $est["matricula"],
                ":carrera"                 => $est["carrera_nombre"],
                ":email"                   => $est["email"],
                ":estado_financiero"       => $estadoFinanciero,
                ":total_deuda"             => $totalDeuda,
                ":total_mora"              => $totalMora,
                ":porcentaje_asistencia"   => $porcAsistencia,
                ":materias_cursando"       => count($arrMaterias),
                ":promedio_calificaciones" => $promedio,
                ":payload_json"            => json_encode($payload),
                ":actualizado_en"          => date("Y-m-d H:i:s")
            ));

            $totalAlumnos++;
        }
    }

    // 5. Actualizar metadatos de sincronización cada 10 minutos
    $nowTs = time();
    $nowStr = date('Y-m-d H:i:s', $nowTs);
    $nextStr = date('Y-m-d H:i:s', $nowTs + SGUASS_DAEMON_INTERVAL_SECONDS);

    $stMeta = $pdo->prepare("INSERT OR REPLACE INTO daemon_meta (meta_key, meta_value, updated_at) VALUES (:k, :v, :u)");
    $stMeta->execute(array(':k' => 'last_sync_epoch', ':v' => (string)$nowTs, ':u' => $nowStr));
    $stMeta->execute(array(':k' => 'last_sync_time', ':v' => $nowStr, ':u' => $nowStr));
    $stMeta->execute(array(':k' => 'next_sync_time', ':v' => $nextStr, ':u' => $nowStr));
    $stMeta->execute(array(':k' => 'interval_seconds', ':v' => (string)SGUASS_DAEMON_INTERVAL_SECONDS, ':u' => $nowStr));

    $pdo->commit();

    return array(
        'alumnos_procesados' => $totalAlumnos,
        'docentes_procesados' => $totalDocentes,
        'tablas_sincronizadas' => count($conteoTablas),
        'detalle_tablas' => $conteoTablas,
        'sincronizado_en' => $nowStr,
        'proxima_sincronizacion' => $nextStr,
        'intervalo_minutos' => 10
    );
}

// Si fue incluido silenciosamente desde sguass_api_core.php, solo ejecutar y retornar
if (!empty($GLOBALS['SGUASS_DAEMON_SILENT'])) {
    try {
        $pdo = sguass_get_sqlite_pdo();
        sguass_ejecutar_sincronizacion($pdo);
    } catch (Exception $e) {}
    return;
}

// Ejecución directa (CLI o Web)
try {
    $pdo = sguass_get_sqlite_pdo();
} catch (Exception $e) {
    die(json_encode(array("success" => false, "error" => "Error conectando con SQLite: " . $e->getMessage())));
}

if (php_sapi_name() === 'cli') {
    $args = isset($argv) ? $argv : array();
    $isLoop = in_array('--daemon', $args) || in_array('--loop', $args) || in_array('-d', $args);

    do {
        $res = sguass_ejecutar_sincronizacion($pdo);
        echo "[" . $res['sincronizado_en'] . "] Sincronización SQLite exitosa | Tablas: " . $res['tablas_sincronizadas'] . " | Alumnos: " . $res['alumnos_procesados'] . " | Docentes: " . $res['docentes_procesados'] . " | Próxima en 10 min (" . $res['proxima_sincronizacion'] . ")\n";
        if ($isLoop) {
            sleep(SGUASS_DAEMON_INTERVAL_SECONDS);
        }
    } while ($isLoop);
} else {
    $res = sguass_ejecutar_sincronizacion($pdo);
    if (!empty($_GET['monitor'])) {
        header("Content-Type: text/html; charset=utf-8");
        echo '<!DOCTYPE html><html lang="es"><head><meta charset="utf-8"><meta http-equiv="refresh" content="600"><title>SGUASS Daemon Monitor (10 min)</title>';
        echo '<style>body{font-family:system-ui,sans-serif;background:#0f172a;color:#f8fafc;padding:2rem;max-width:720px;margin:0 auto;}pre{background:#1e293b;padding:1rem;border-radius:6px;overflow:auto;color:#38bdf8;}</style></head><body>';
        echo '<h2>Demonio SQLite SGUASS — Activo (Ciclo automático: 10 minutos)</h2>';
        echo '<p>Esta ventana ejecuta y refresca automáticamente la sincronización hacia <code>sguass_cache.db</code> cada 10 minutos (600 segundos).</p>';
        echo '<pre>' . htmlspecialchars(json_encode($res, JSON_PRETTY_PRINT)) . '</pre>';
        echo '</body></html>';
    } else {
        header("Content-Type: application/json; charset=utf-8");
        echo json_encode(array(
            "success" => true,
            "message" => "Sincronización a SQLite completada con éxito (ciclo configurado cada 10 minutos).",
            "resultado" => $res
        ));
    }
}
