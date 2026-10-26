<?php
@ini_set("display_errors","1");
@ini_set("display_startup_errors","1");

require_once("include/dbcommon.php");
require_once("classes/button.php");

$params = (array)my_json_decode(postvalue('params'));
$buttId = $params['buttId'];
$eventId = postvalue('event');
$table = $params['table'];
$page = $params['page'];

// todo security check

if($buttId=='btn_calificaciones_masivas')
{
	//  for login page users table can be turned off
	if( $table != GLOBAL_PAGES && GetTableURL( $table ) )
	{
		require_once("include/". GetTableURL( $table ) ."_variables.php");
		$cipherer = new RunnerCipherer( $table );
	}
	buttonHandler_btn_calificaciones_masivas($params);
}
if($buttId=='btn_inscripcion_rapida')
{
	//  for login page users table can be turned off
	if( $table != GLOBAL_PAGES && GetTableURL( $table ) )
	{
		require_once("include/". GetTableURL( $table ) ."_variables.php");
		$cipherer = new RunnerCipherer( $table );
	}
	buttonHandler_btn_inscripcion_rapida($params);
}
if($buttId=='btn_toma_asistencias')
{
	//  for login page users table can be turned off
	if( $table != GLOBAL_PAGES && GetTableURL( $table ) )
	{
		require_once("include/". GetTableURL( $table ) ."_variables.php");
		$cipherer = new RunnerCipherer( $table );
	}
	buttonHandler_btn_toma_asistencias($params);
}
if($buttId=='btn_cobro_rapido_caja')
{
	//  for login page users table can be turned off
	if( $table != GLOBAL_PAGES && GetTableURL( $table ) )
	{
		require_once("include/". GetTableURL( $table ) ."_variables.php");
		$cipherer = new RunnerCipherer( $table );
	}
	buttonHandler_btn_cobro_rapido_caja($params);
}
if($buttId=='btn_apertura_catedras')
{
	//  for login page users table can be turned off
	if( $table != GLOBAL_PAGES && GetTableURL( $table ) )
	{
		require_once("include/". GetTableURL( $table ) ."_variables.php");
		$cipherer = new RunnerCipherer( $table );
	}
	buttonHandler_btn_apertura_catedras($params);
}
if($buttId=='btn_publicar_tarea_expres')
{
	//  for login page users table can be turned off
	if( $table != GLOBAL_PAGES && GetTableURL( $table ) )
	{
		require_once("include/". GetTableURL( $table ) ."_variables.php");
		$cipherer = new RunnerCipherer( $table );
	}
	buttonHandler_btn_publicar_tarea_expres($params);
}
if($buttId=='btn_correccion_rapida_tp')
{
	//  for login page users table can be turned off
	if( $table != GLOBAL_PAGES && GetTableURL( $table ) )
	{
		require_once("include/". GetTableURL( $table ) ."_variables.php");
		$cipherer = new RunnerCipherer( $table );
	}
	buttonHandler_btn_correccion_rapida_tp($params);
}
if($buttId=='btn_aviso_multicurso')
{
	//  for login page users table can be turned off
	if( $table != GLOBAL_PAGES && GetTableURL( $table ) )
	{
		require_once("include/". GetTableURL( $table ) ."_variables.php");
		$cipherer = new RunnerCipherer( $table );
	}
	buttonHandler_btn_aviso_multicurso($params);
}
if($buttId=='Btn_Agregar_Docente')
{
	//  for login page users table can be turned off
	if( $table != GLOBAL_PAGES && GetTableURL( $table ) )
	{
		require_once("include/". GetTableURL( $table ) ."_variables.php");
		$cipherer = new RunnerCipherer( $table );
	}
	buttonHandler_Btn_Agregar_Docente($params);
}





// create table and non table handlers
function buttonHandler_btn_calificaciones_masivas($params)
{
	global $strTableName;
	$result = array();

	// create new button object for get record data
	$params["keys"] = (array)my_json_decode(postvalue('keys'));
	$params["isManyKeys"] = postvalue('isManyKeys');
	$params["location"] = postvalue('location');

	$button = new Button($params);
	$ajax = $button; // for examle from HELP
	$keys = $button->getKeys();

	$masterData = false;
	if ( isset($params['masterData']) && count($params['masterData']) > 0 )
	{
		$masterData = $params['masterData'];
	}
	else if ( isset($params["masterTable"]) )
	{
		$masterData = $button->getMasterData($params["masterTable"]);
	}
	
	$contextParams = array();
	if ( $params["location"] == PAGE_VIEW )
	{
		$contextParams["data"] = $button->getRecordData();
		$contextParams["masterData"] = $masterData;
	}
	else if ( $params["location"] == PAGE_EDIT )
	{
		$contextParams["data"] = $button->getRecordData();
		$contextParams["newData"] = $params['fieldsData'];
		$contextParams["masterData"] = $masterData;
	}
	else if ( $params["location"] == "grid" )
	{	
		$params["location"] = "list";
		$contextParams["data"] = $button->getRecordData();
		$contextParams["newData"] = $params['fieldsData'];
		$contextParams["masterData"] = $masterData;
	}
	else 
	{
		$contextParams["masterData"] = $masterData;
	}

	RunnerContext::push( new RunnerContextItem( $params["location"], $contextParams));
	$user = Security::getUserName();
$is_admin = Security::isAdmin() || (strtolower($user) == 'admin');
$rol = "Invitado";
$profesor_id = 0;

// 1. Validar Rol
if ($is_admin) {
    $rol = "Admin";
} else {
    $rsRol = DB::Query("SELECT g.Label FROM sgui_ugmembers m INNER JOIN sgui_uggroups g ON g.GroupID = m.GroupID WHERE m.UserName = " . db_prepare_string($user) . " LIMIT 1");
    if ($r = $rsRol->fetchAssoc()) {
        $rol = $r["Label"];
    }
}

// 2. Identificar al Docente a través de la tabla usuarios (Esquema Real)
if ($rol != "Admin") {
    $rsP = DB::Query("SELECT p.id FROM profesores p INNER JOIN usuarios u ON u.id = p.usuario_id WHERE u.email = " . db_prepare_string($user) . " OR u.nombre = " . db_prepare_string($user) . " LIMIT 1");
    if ($rP = $rsP->fetchAssoc()) {
        $profesor_id = intval($rP["id"]);
    }
}

// -------------------------------------------------------------
// ACCIÓN 1: Cargar Cursos Disponibles (INNER JOIN materias y periodos)
// -------------------------------------------------------------
if ($params["action"] == "load_courses") {
    $sql = "SELECT 
                c.id, 
                m.nombre AS materia_nombre, 
                COALESCE(c.semestre, 1) AS semestre, 
                COALESCE(p.nombre, '') AS periodo_nombre,
                COALESCE(car.nombre, '') AS carrera_nombre
            FROM cursos c 
            INNER JOIN materias m ON m.id = c.materia_id 
            LEFT JOIN periodos p ON p.id = c.periodo_id 
            LEFT JOIN carreras car ON car.id = c.carrera_id ";
    if ($rol != "Admin") {
        $sql .= " WHERE c.profesor_id = " . intval($profesor_id);
    }
    $sql .= " ORDER BY c.id DESC";

    $rs = DB::Query($sql);
    $cursos = array();
    while ($row = $rs->fetchAssoc()) {
        $desc = $row["materia_nombre"] . " - Sem. " . $row["semestre"];
        if (!empty($row["periodo_nombre"])) {
            $desc .= " (" . $row["periodo_nombre"] . ")";
        }
        if (!empty($row["carrera_nombre"])) {
            $desc .= " [" . $row["carrera_nombre"] . "]";
        }
        $cursos[] = array(
            "id" => $row["id"],
            "nombre" => $desc
        );
    }
    $result["success"] = true;
    $result["step"] = "courses_loaded";
    $result["cursos"] = $cursos;
}

// -------------------------------------------------------------
// ACCIÓN 2: Cargar Planilla con Bloqueo Financiero y Asistencias
// -------------------------------------------------------------
elseif ($params["action"] == "load_students") {
    $curso_id = intval($params["curso_id"]);

    $permitido = true;
    if ($rol != "Admin") {
        $rsCheck = DB::Query("SELECT id FROM cursos WHERE id = " . $curso_id . " AND profesor_id = " . intval($profesor_id));
        if (!$rsCheck->fetchAssoc()) {
            $permitido = false;
            $result["success"] = false;
            $result["message"] = "No tiene permisos asignados sobre este curso.";
        }
    }

    if ($permitido) {
        $sqlAlumnos = "SELECT 
            i.id AS inscripcion_id,
            e.id AS estudiante_id,
            e.matricula,
            u.nombre AS estudiante_nombre,
            COALESCE(n.id, 0) AS nota_id,
            COALESCE(n.Puntos_Primer_Parcial, 0) AS parcial_1,
            COALESCE(n.Puntos_Segundo_Parcial, 0) AS parcial_2,
            COALESCE(n.Puntos_Trabajo_Practico, 0) AS tp_laboratorio,
            COALESCE(n.Puntos_Asistencia, 0) AS puntos_asistencia,
            COALESCE(n.Puntos_Examen_Final, 0) AS examen_final,
            COALESCE(n.Puntos_Examen_Extra_Ord, 0) AS extraordinario,
            COALESCE(n.Puntos_Examen_Extra_Extra_Ord, 0) AS mesa_especial,
            COALESCE(n.nota, 0) AS calificacion,
            COALESCE(n.descripcion, 'Pendiente') AS estado,
            -- Asistencias vinculadas a inscripcion_id
            (SELECT COUNT(*) FROM asistencias a WHERE a.inscripcion_id = i.id AND a.estado = 'Presente') AS asist_presentes,
            (SELECT COUNT(*) FROM asistencias a WHERE a.inscripcion_id = i.id) AS asist_total,
            -- Bloqueo Financiero en Caja
            (SELECT COUNT(*) FROM pagos p 
             WHERE p.estudiante_id = e.id 
               AND (p.estado = 'Vencido' OR (p.estado = 'Pendiente' AND p.fecha_vencimiento < CURDATE()))
            ) AS cuotas_vencidas
        FROM inscripciones i
        INNER JOIN estudiantes e ON e.id = i.estudiante_id
        INNER JOIN usuarios u ON u.id = e.usuario_id
        LEFT JOIN notas n ON n.inscripcion_id = i.id
        WHERE i.curso_id = " . $curso_id . "
        ORDER BY u.nombre ASC";

        $rsAlumnos = DB::Query($sqlAlumnos);
        $alumnos = array();
        while ($row = $rsAlumnos->fetchAssoc()) {
            $p1 = intval($row["parcial_1"]);
            $p2 = intval($row["parcial_2"]);
            $tp = intval($row["tp_laboratorio"]);
            $as = intval($row["puntos_asistencia"]);
            $proceso = $p1 + $p2 + $tp + $as;

            $fn = intval($row["examen_final"]);
            $ex = intval($row["extraordinario"]);
            $me = intval($row["mesa_especial"]);
            $mejor_ex = max($fn, $ex, $me);

            $alumnos[] = array(
                "inscripcion_id"     => intval($row["inscripcion_id"]),
                "estudiante_id"      => intval($row["estudiante_id"]),
                "matricula"          => $row["matricula"],
                "nombre_completo"    => $row["estudiante_nombre"],
                "nota_id"            => intval($row["nota_id"]),
                "parcial_1"          => $p1,
                "parcial_2"          => $p2,
                "tp_laboratorio"     => $tp,
                "puntos_asistencia"  => $as,
                "proceso"            => $proceso,
                "examen_final"       => $fn,
                "extraordinario"     => $ex,
                "mesa_especial"      => $me,
                "nota_final"         => ($proceso + $mejor_ex),
                "calificacion"       => $row["calificacion"],
                "estado"             => $row["estado"],
                "asist_presentes"    => intval($row["asist_presentes"]),
                "asist_total"        => intval($row["asist_total"]),
                "cuotas_vencidas"    => intval($row["cuotas_vencidas"])
            );
        }

        $result["success"] = true;
        $result["step"] = "students_loaded";
        $result["curso_id"] = $curso_id;
        $result["alumnos"] = $alumnos;
    }
}

// -------------------------------------------------------------
// ACCIÓN 3: Guardar Calificaciones (Esquema Real de tabla notas)
// -------------------------------------------------------------
elseif ($params["action"] == "save_grades") {
    $curso_id = intval($params["curso_id"]);
    $data = json_decode($params["payload"], true);

    if (!is_array($data) || count($data) == 0) {
        $result["success"] = false;
        $result["message"] = "No se recibieron datos para guardar.";
    } else {
        $guardados = 0;
        foreach ($data as $item) {
            $inscripcion_id    = intval($item["inscripcion_id"]);
            $estudiante_id     = intval($item["estudiante_id"]);
            $p1                = intval($item["parcial_1"]);
            $p2                = intval($item["parcial_2"]);
            $tp                = intval($item["tp_laboratorio"]);
            $asist             = intval($item["puntos_asistencia"]);
            $proceso           = $p1 + $p2 + $tp + $asist;
            $final             = intval($item["examen_final"]);
            $extra             = intval($item["extraordinario"]);
            $mesa              = intval($item["mesa_especial"]);

            // Doble Seguridad: Bloqueo de Caja en el backend
            $rsB = DB::Query("SELECT COUNT(*) AS total FROM pagos WHERE estudiante_id = " . $estudiante_id . " AND (estado = 'Vencido' OR (estado = 'Pendiente' AND fecha_vencimiento < CURDATE()))");
            $esta_bloqueado = false;
            if ($rB = $rsB->fetchAssoc()) {
                if (intval($rB["total"]) > 0) {
                    $esta_bloqueado = true;
                    $final = 0;
                }
            }

            $mejor_examen = max($final, $extra, $mesa);
            $tipo_eval = "Final";
            if ($mesa > 0) {
                $tipo_eval = "Mesa Especial";
            } elseif ($extra > 0) {
                $tipo_eval = "Extraordinario";
            }

            // Escala Res. 24/18
            if ($proceso < 30) {
                $calif = 1;
                $estado = "Inhabilitado por Proceso";
            } else {
                $nota_final = $proceso + $mejor_examen;
                if ($nota_final >= 91) {
                    $calif = 5; $estado = "Aprobado";
                } elseif ($nota_final >= 81) {
                    $calif = 4; $estado = "Aprobado";
                } elseif ($nota_final >= 71) {
                    $calif = 3; $estado = "Aprobado";
                } elseif ($nota_final >= 60) {
                    $calif = 2; $estado = "Aprobado";
                } else {
                    $calif = 1;
                    $estado = ($mejor_examen > 0) ? "Reprobado" : "Pendiente";
                }
            }

            if ($esta_bloqueado) {
                $estado = "Bloqueado en Caja";
            }

            // Guardar en tabla notas vinculada a inscripcion_id
            $rsExiste = DB::Query("SELECT id FROM notas WHERE inscripcion_id = " . $inscripcion_id . " LIMIT 1");
            if ($rowEx = $rsExiste->fetchAssoc()) {
                $nota_id = intval($rowEx["id"]);
                $sqlUpdate = "UPDATE notas SET 
                    Puntos_Primer_Parcial = " . $p1 . ",
                    Puntos_Segundo_Parcial = " . $p2 . ",
                    Puntos_Trabajo_Practico = " . $tp . ",
                    Puntos_Asistencia = " . $asist . ",
                    Puntos_Examen_Final = " . $final . ",
                    Puntos_Examen_Extra_Ord = " . $extra . ",
                    Puntos_Examen_Extra_Extra_Ord = " . $mesa . ",
                    nota = " . $calif . ",
                    tipo_evaluacion = " . db_prepare_string($tipo_eval) . ",
                    descripcion = " . db_prepare_string($estado) . ",
                    fecha_registro = CURDATE()
                    WHERE id = " . $nota_id;
                DB::Exec($sqlUpdate);
            } else {
                $sqlInsert = "INSERT INTO notas (
                    inscripcion_id, Puntos_Primer_Parcial, Puntos_Segundo_Parcial, Puntos_Trabajo_Practico,
                    Puntos_Asistencia, Puntos_Examen_Final, Puntos_Examen_Extra_Ord, Puntos_Examen_Extra_Extra_Ord,
                    nota, tipo_evaluacion, descripcion, fecha_registro
                ) VALUES (
                    " . $inscripcion_id . ", " . $p1 . ", " . $p2 . ", " . $tp . ",
                    " . $asist . ", " . $final . ", " . $extra . ", " . $mesa . ",
                    " . $calif . ", " . db_prepare_string($tipo_eval) . ", " . db_prepare_string($estado) . ", CURDATE()
                )";
                DB::Exec($sqlInsert);
            }
            $guardados++;
        }

        $result["success"] = true;
        $result["step"] = "grades_saved";
        $result["guardados"] = $guardados;
    }
};
	RunnerContext::pop();
	echo my_json_encode($result);
}
function buttonHandler_btn_inscripcion_rapida($params)
{
	global $strTableName;
	$result = array();

	// create new button object for get record data
	$params["keys"] = (array)my_json_decode(postvalue('keys'));
	$params["isManyKeys"] = postvalue('isManyKeys');
	$params["location"] = postvalue('location');

	$button = new Button($params);
	$ajax = $button; // for examle from HELP
	$keys = $button->getKeys();

	$masterData = false;
	if ( isset($params['masterData']) && count($params['masterData']) > 0 )
	{
		$masterData = $params['masterData'];
	}
	else if ( isset($params["masterTable"]) )
	{
		$masterData = $button->getMasterData($params["masterTable"]);
	}
	
	$contextParams = array();
	if ( $params["location"] == PAGE_VIEW )
	{
		$contextParams["data"] = $button->getRecordData();
		$contextParams["masterData"] = $masterData;
	}
	else if ( $params["location"] == PAGE_EDIT )
	{
		$contextParams["data"] = $button->getRecordData();
		$contextParams["newData"] = $params['fieldsData'];
		$contextParams["masterData"] = $masterData;
	}
	else if ( $params["location"] == "grid" )
	{	
		$params["location"] = "list";
		$contextParams["data"] = $button->getRecordData();
		$contextParams["newData"] = $params['fieldsData'];
		$contextParams["masterData"] = $masterData;
	}
	else 
	{
		$contextParams["masterData"] = $masterData;
	}

	RunnerContext::push( new RunnerContextItem( $params["location"], $contextParams));
	$user = Security::getUserName();
$is_admin = Security::isAdmin() || (strtolower($user) == 'admin');
$rol = "Invitado";

// 1. Validar Rol del Operador
if ($is_admin) {
    $rol = "Admin";
} else {
    $rsRol = DB::Query("SELECT g.Label FROM sgui_ugmembers m INNER JOIN sgui_uggroups g ON g.GroupID = m.GroupID WHERE LOWER(m.UserName) = LOWER(" . db_prepare_string($user) . ") LIMIT 1");
    if ($r = $rsRol->fetchAssoc()) {
        $rol = $r["Label"];
    }
}

// Seguridad: Solo Admin o Secretaria pueden matricular alumnos
if ($rol != "Admin" && $rol != "Secretaria") {
    $result["error"] = "Acceso denegado: Solo el personal de Secretaría o Administración puede matricular estudiantes.";
    return;
}

// =========================================================================
// ACCIÓN 1: Cargar catálogo inicial de estudiantes, carreras y cátedras
// =========================================================================
if ($params["action"] == "load_initial_data") {
    // A. Estudiantes existentes con estado financiero
    $sqlEst = "SELECT 
                e.id, 
                u.nombre, 
                e.matricula, 
                e.numero_cedula, 
                e.carrera_id,
                (SELECT COUNT(*) FROM pagos p WHERE p.estudiante_id = e.id AND (p.estado = 'Vencido' OR (p.estado = 'Pendiente' AND p.fecha_vencimiento < CURDATE()))) AS cuotas_vencidas,
                (SELECT COALESCE(SUM(p.monto + p.multa_mora - p.descuento), 0) FROM pagos p WHERE p.estudiante_id = e.id AND (p.estado = 'Vencido' OR (p.estado = 'Pendiente' AND p.fecha_vencimiento < CURDATE()))) AS saldo_vencido
               FROM estudiantes e 
               INNER JOIN usuarios u ON u.id = e.usuario_id 
               ORDER BY u.nombre ASC";
    $rsEst = DB::Query($sqlEst);
    $estudiantes = array();
    while ($e = $rsEst->fetchAssoc()) {
        $estudiantes[] = array(
            "id"              => intval($e["id"]),
            "nombre"          => $e["nombre"],
            "matricula"       => $e["matricula"],
            "cedula"          => $e["numero_cedula"],
            "carrera_id"      => intval($e["carrera_id"]),
            "cuotas_vencidas" => intval($e["cuotas_vencidas"]),
            "saldo_vencido"   => intval($e["saldo_vencido"])
        );
    }

    // B. Carreras activas con costos
    $rsCar = DB::Query("SELECT id, nombre, costo_matricula, costo_semestre, cantidad_cuotas FROM carreras WHERE estado = 'Activo' ORDER BY nombre ASC");
    $carreras = array();
    while ($c = $rsCar->fetchAssoc()) {
        $carreras[] = array(
            "id"              => intval($c["id"]),
            "nombre"          => $c["nombre"],
            "costo_matricula" => intval($c["costo_matricula"]),
            "costo_semestre"  => intval($c["costo_semestre"]),
            "cantidad_cuotas" => intval($c["cantidad_cuotas"]) > 0 ? intval($c["cantidad_cuotas"]) : 5
        );
    }

    // C. Periodos lectivos
    $rsPer = DB::Query("SELECT id, nombre, activo FROM periodos ORDER BY id DESC");
    $periodos = array();
    while ($p = $rsPer->fetchAssoc()) {
        $periodos[] = array(
            "id"     => intval($p["id"]),
            "nombre" => $p["nombre"],
            "activo" => $p["activo"]
        );
    }

    // D. Cátedras abiertas con cálculo de cupos en tiempo real
    $sqlCursos = "SELECT 
                    c.id AS curso_id, 
                    cm.carrera_id, 
                    cm.semestre, 
                    m.nombre AS materia, 
                    COALESCE(u_doc.nombre, 'Sin Docente') AS profesor,
                    COALESCE(c.aula, 'S/A') AS aula, 
                    COALESCE(c.horario, 'S/H') AS horario, 
                    c.periodo_id,
                    c.cupo,
                    (SELECT COUNT(*) FROM inscripciones i WHERE i.curso_id = c.id) AS inscriptos
                  FROM cursos c 
                  INNER JOIN carrera_materia cm ON cm.materia_id = c.materia_id 
                  INNER JOIN materias m ON m.id = c.materia_id 
                  LEFT JOIN profesores prof ON prof.id = c.profesor_id 
                  LEFT JOIN usuarios u_doc ON u_doc.id = prof.usuario_id 
                  WHERE c.estado = 'Activo'";
    $rsCur = DB::Query($sqlCursos);
    $cursos = array();
    while ($cur = $rsCur->fetchAssoc()) {
        $cursos[] = array(
            "curso_id"   => intval($cur["curso_id"]),
            "carrera_id" => intval($cur["carrera_id"]),
            "semestre"   => intval($cur["semestre"]),
            "materia"    => $cur["materia"],
            "profesor"   => $cur["profesor"],
            "aula"       => $cur["aula"],
            "horario"    => $cur["horario"],
            "periodo_id" => intval($cur["periodo_id"]),
            "cupo"       => intval($cur["cupo"]),
            "inscriptos" => intval($cur["inscriptos"])
        );
    }

    $result["estudiantes"] = $estudiantes;
    $result["carreras"]    = $carreras;
    $result["periodos"]    = $periodos;
    $result["cursos"]      = $cursos;
    $result["success"]     = true;
}

// =========================================================================
// ACCIÓN 2: Guardar Matrícula (Nuevo Ingreso o Alumno Regular)
// =========================================================================
elseif ($params["action"] == "save_enrollment") {
    $data = json_decode($params["payload"], true);
    $es_nuevo_ingreso = ($data["tipo_inscripcion"] === "nuevo");
    
    $carrera_id   = intval($data["carrera_id"]);
    $periodo_id   = intval($data["periodo_id"]);
    $semestre     = intval($data["semestre"]);
    $cursos_sel   = is_array($data["cursos_ids"]) ? $data["cursos_ids"] : array();
    $generar_pago = $data["generar_pago"];
    $generar_cuot = $data["generar_cuotas"];
    $monto_pago   = intval($data["monto_pago"]);
    $estado_pago  = $data["estado_pago"];
    $metodo_pago  = $data["metodo_pago"];
    $comprobante  = trim($data["comprobante"]);

    if ($carrera_id <= 0 || $periodo_id <= 0 || $semestre <= 0) {
        $result["error"] = "Verifique que Carrera, Periodo y Semestre estén seleccionados.";
        return;
    }

    $estudiante_id = 0;
    $nombre_final  = "";
    $matricula_gen = "";

    // -------------------------------------------------------------
    // CASO A: ALTA INTEGRAL DE NUEVO INGRESANTE (Usuario + Legajo)
    // -------------------------------------------------------------
    if ($es_nuevo_ingreso) {
        $nuevo_nombre = trim($data["nuevo_nombre"]);
        $nueva_cedula = trim($data["nueva_cedula"]);
        $nuevo_email  = trim($data["nuevo_email"]);

        if (strlen($nuevo_nombre) < 3) {
            $result["error"] = "El nombre del postulante debe tener al menos 3 caracteres.";
            return;
        }
        if (empty($nueva_cedula)) {
            $result["error"] = "El número de cédula de identidad es obligatorio.";
            return;
        }
        if (!filter_var($nuevo_email, FILTER_VALIDATE_EMAIL)) {
            $result["error"] = "El correo electrónico no tiene un formato válido.";
            return;
        }

        // 1. Validar que la cédula no exista
        $rsCheckCed = DB::Query("SELECT id FROM estudiantes WHERE numero_cedula = " . db_prepare_string($nueva_cedula) . " LIMIT 1");
        if ($rsCheckCed->fetchAssoc()) {
            $result["error"] = "La cédula '$nueva_cedula' ya se encuentra registrada en el padrón de estudiantes.";
            return;
        }

        // 2. Validar que el email no exista en usuarios
        $rsCheckMail = DB::Query("SELECT id FROM usuarios WHERE LOWER(email) = LOWER(" . db_prepare_string($nuevo_email) . ") LIMIT 1");
        if ($rsCheckMail->fetchAssoc()) {
            $result["error"] = "El correo '$nuevo_email' ya pertenece a una cuenta de usuario existente.";
            return;
        }

        // 3. Crear Usuario (Contraseña temporal = su número de cédula)
        $insUsr = array();
        $insUsr["nombre"]    = $nuevo_nombre;
        $insUsr["email"]     = $nuevo_email;
        $insUsr["password"]  = $nueva_cedula;
        $insUsr["activo"]    = "Sí";
        $insUsr["creado_en"] = date("Y-m-d H:i:s");
        DB::Insert("usuarios", $insUsr);
        $usuario_id = DB::LastId();

        // 4. Asignar Rol Alumno/Estudiante de forma dinámica en sgui_ugmembers
        $rol_alumno_id = 2; // Valor base por defecto
        $rsGrp = DB::Query("SELECT GroupID FROM sgui_uggroups WHERE Label LIKE '%Alumno%' OR Label LIKE '%Estudiante%' LIMIT 1");
        if ($grp = $rsGrp->fetchAssoc()) {
            $rol_alumno_id = intval($grp["GroupID"]);
        }
        DB::Exec("INSERT INTO sgui_ugmembers (UserName, GroupID) VALUES (" . db_prepare_string($nuevo_email) . ", $rol_alumno_id)");

        // 5. Autogenerar Matrícula Oficial UASS
        $rsCount = DB::Query("SELECT COUNT(*) AS total FROM estudiantes");
        $rowCount = $rsCount->fetchAssoc();
        $matricula_gen = "UASS-" . date("Y") . "-" . str_pad(intval($rowCount["total"]) + 1, 4, "0", STR_PAD_LEFT);

        // 6. Crear Legajo en Estudiantes
        $insEst = array();
        $insEst["usuario_id"]    = $usuario_id;
        $insEst["matricula"]     = $matricula_gen;
        $insEst["carrera_id"]    = $carrera_id;
        $insEst["fecha_ingreso"] = date("Y-m-d");
        $insEst["numero_cedula"] = $nueva_cedula;
        DB::Insert("estudiantes", $insEst);
        $estudiante_id = DB::LastId();
        $nombre_final = $nuevo_nombre;

    } else {
        // -------------------------------------------------------------
        // CASO B: ALUMNO REGULAR EXISTENTE
        // -------------------------------------------------------------
        $estudiante_id = intval($data["estudiante_id"]);
        if ($estudiante_id <= 0) {
            $result["error"] = "Debe seleccionar a un estudiante registrado.";
            return;
        }
        $rsNom = DB::Query("SELECT u.nombre, e.matricula FROM estudiantes e INNER JOIN usuarios u ON u.id = e.usuario_id WHERE e.id = $estudiante_id");
        $rNom = $rsNom->fetchAssoc();
        $nombre_final = $rNom["nombre"];
        $matricula_gen = $rNom["matricula"];
    }

    // -------------------------------------------------------------
    // REGISTRO DE MATRÍCULA SEMESTRAL
    // -------------------------------------------------------------
    $rsMat = DB::Query("SELECT id FROM matriculas_semestre WHERE estudiante_id = $estudiante_id AND periodo_id = $periodo_id LIMIT 1");
    if ($m = $rsMat->fetchAssoc()) {
        $matricula_id = intval($m["id"]);
        DB::Exec("UPDATE matriculas_semestre SET semestre = $semestre, carrera_id = $carrera_id, estado = 'Activo' WHERE id = $matricula_id");
    } else {
        $insMat = array();
        $insMat["estudiante_id"]   = $estudiante_id;
        $insMat["carrera_id"]      = $carrera_id;
        $insMat["periodo_id"]      = $periodo_id;
        $insMat["semestre"]        = $semestre;
        $insMat["fecha_matricula"] = date("Y-m-d H:i:s");
        $insMat["estado"]          = "Activo";
        DB::Insert("matriculas_semestre", $insMat);
        $matricula_id = DB::LastId();
    }

    // -------------------------------------------------------------
    // ASIGNACIÓN DE CÁTEDRAS RESPETANDO CUPO
    // -------------------------------------------------------------
    $materias_count = 0;
    foreach ($cursos_sel as $cid) {
        $curso_id = intval($cid);

        $rsCupo = DB::Query("SELECT c.cupo, COUNT(i.id) AS inscriptos FROM cursos c LEFT JOIN inscripciones i ON i.curso_id = c.id WHERE c.id = $curso_id GROUP BY c.id, c.cupo");
        $rowCupo = $rsCupo->fetchAssoc();
        $hayCupo = intval($rowCupo["inscriptos"]) < intval($rowCupo["cupo"]);

        $rsDup = DB::Query("SELECT id FROM inscripciones WHERE estudiante_id = $estudiante_id AND curso_id = $curso_id LIMIT 1");
        if (!$rsDup->fetchAssoc() && $hayCupo) {
            $insM = array();
            $insM["matricula_semestre_id"] = $matricula_id;
            $insM["estudiante_id"]          = $estudiante_id;
            $insM["curso_id"]               = $curso_id;
            $insM["fecha_inscripcion"]      = date("Y-m-d H:i:s");
            DB::Insert("inscripciones", $insM);
            $materias_count++;
        }
    }

    // -------------------------------------------------------------
    // TESORERÍA: ARANCEL DE MATRÍCULA
    // -------------------------------------------------------------
    if ($generar_pago && $monto_pago > 0) {
        $concepto_id = 1;
        $rsCon = DB::Query("SELECT id FROM conceptos_pago WHERE nombre LIKE '%Matr%' LIMIT 1");
        if ($cRow = $rsCon->fetchAssoc()) {
            $concepto_id = intval($cRow["id"]);
        }

        $insPago = array();
        $insPago["estudiante_id"]         = $estudiante_id;
        $insPago["matricula_semestre_id"] = $matricula_id;
        $insPago["periodo_id"]            = $periodo_id;
        $insPago["concepto_id"]           = $concepto_id;
        $insPago["nro_cuota"]             = "Matrícula";
        $insPago["monto"]                 = $monto_pago;
        $insPago["descuento"]             = 0;
        $insPago["multa_mora"]            = 0;
        $insPago["fecha_vencimiento"]     = date("Y-m-d", strtotime("+10 days"));
        $insPago["estado"]                = $estado_pago;
        $insPago["nro_comprobante"]       = !empty($comprobante) ? $comprobante : null;
        
        if ($estado_pago == "Pagado") {
            $insPago["fecha_pago"]  = date("Y-m-d H:i:s");
            $insPago["metodo_pago"] = $metodo_pago;
        }
        DB::Insert("pagos", $insPago);
    }

    // -------------------------------------------------------------
    // TESORERÍA: PLAN DE CUOTAS DEL SEMESTRE
    // -------------------------------------------------------------
    $cuotas_count = 0;
    if ($generar_cuot) {
        $rsCarData = DB::Query("SELECT costo_semestre, cantidad_cuotas FROM carreras WHERE id = $carrera_id LIMIT 1");
        if ($carD = $rsCarData->fetchAssoc()) {
            $costo_sem  = intval($carD["costo_semestre"]);
            $cant_cuot  = intval($carD["cantidad_cuotas"]) > 0 ? intval($carD["cantidad_cuotas"]) : 5;
            $monto_cuot = intval(round($costo_sem / $cant_cuot));

            $concepto_cuota_id = 2;
            $rsConC = DB::Query("SELECT id FROM conceptos_pago WHERE nombre LIKE '%Mensual%' OR nombre LIKE '%Cuota%' LIMIT 1");
            if ($rCC = $rsConC->fetchAssoc()) {
                $concepto_cuota_id = intval($rCC["id"]);
            }

            $mes_base = date("m");
            $año_base = date("Y");

            for ($i = 1; $i <= $cant_cuot; $i++) {
                $pagoC = array();
                $pagoC["estudiante_id"]         = $estudiante_id;
                $pagoC["matricula_semestre_id"] = $matricula_id;
                $pagoC["periodo_id"]            = $periodo_id;
                $pagoC["concepto_id"]           = $concepto_cuota_id;
                $pagoC["nro_cuota"]             = sprintf("%02d/%02d", $i, $cant_cuot);
                $pagoC["monto"]                 = $monto_cuot;
                $pagoC["descuento"]             = 0;
                $pagoC["multa_mora"]            = 0;
                $pagoC["fecha_vencimiento"]     = date("Y-m-10", strtotime("+" . ($i - 1) . " month", strtotime("$año_base-$mes_base-01")));
                $pagoC["estado"]                = "Pendiente";
                DB::Insert("pagos", $pagoC);
                $cuotas_count++;
            }
        }
    }

    $result["enroll_ok"]        = true;
    $result["es_nuevo_ingreso"] = $es_nuevo_ingreso;
    $result["estudiante_nombre"]= $nombre_final;
    $result["matricula_gen"]    = $matricula_gen;
    $result["materias_count"]   = $materias_count;
    $result["cuotas_count"]     = $cuotas_count;
};
	RunnerContext::pop();
	echo my_json_encode($result);
}
function buttonHandler_btn_toma_asistencias($params)
{
	global $strTableName;
	$result = array();

	// create new button object for get record data
	$params["keys"] = (array)my_json_decode(postvalue('keys'));
	$params["isManyKeys"] = postvalue('isManyKeys');
	$params["location"] = postvalue('location');

	$button = new Button($params);
	$ajax = $button; // for examle from HELP
	$keys = $button->getKeys();

	$masterData = false;
	if ( isset($params['masterData']) && count($params['masterData']) > 0 )
	{
		$masterData = $params['masterData'];
	}
	else if ( isset($params["masterTable"]) )
	{
		$masterData = $button->getMasterData($params["masterTable"]);
	}
	
	$contextParams = array();
	if ( $params["location"] == PAGE_VIEW )
	{
		$contextParams["data"] = $button->getRecordData();
		$contextParams["masterData"] = $masterData;
	}
	else if ( $params["location"] == PAGE_EDIT )
	{
		$contextParams["data"] = $button->getRecordData();
		$contextParams["newData"] = $params['fieldsData'];
		$contextParams["masterData"] = $masterData;
	}
	else if ( $params["location"] == "grid" )
	{	
		$params["location"] = "list";
		$contextParams["data"] = $button->getRecordData();
		$contextParams["newData"] = $params['fieldsData'];
		$contextParams["masterData"] = $masterData;
	}
	else 
	{
		$contextParams["masterData"] = $masterData;
	}

	RunnerContext::push( new RunnerContextItem( $params["location"], $contextParams));
	$user = Security::getUserName();
$is_admin = Security::isAdmin() || (strtolower($user) == 'admin');
$rol = "Invitado";
$profesor_id = 0;

// 1. Validar Rol
if ($is_admin) {
    $rol = "Admin";
} else {
    $rsRol = DB::Query("SELECT g.Label FROM sgui_ugmembers m INNER JOIN sgui_uggroups g ON g.GroupID = m.GroupID WHERE m.UserName = " . db_prepare_string($user) . " LIMIT 1");
    if ($r = $rsRol->fetchAssoc()) {
        $rol = $r["Label"];
    }
}

// 2. Obtener profesor_id
if ($rol != "Admin") {
    $rsP = DB::Query("SELECT p.id FROM profesores p INNER JOIN usuarios u ON u.id = p.usuario_id WHERE u.email = " . db_prepare_string($user) . " OR u.nombre = " . db_prepare_string($user) . " LIMIT 1");
    if ($rP = $rsP->fetchAssoc()) {
        $profesor_id = intval($rP["id"]);
    }
}

// -------------------------------------------------------------
// ACCIÓN 1: Cargar Cátedras del Docente
// -------------------------------------------------------------
if ($params["action"] == "load_courses") {
    $sql = "SELECT 
                c.id, 
                m.nombre AS materia_nombre, 
                COALESCE(c.semestre, 1) AS semestre, 
                COALESCE(p.nombre, '') AS periodo_nombre,
                COALESCE(c.horario, 'S/H') AS horario,
                COALESCE(c.aula, 'S/A') AS aula
            FROM cursos c 
            INNER JOIN materias m ON m.id = c.materia_id 
            LEFT JOIN periodos p ON p.id = c.periodo_id ";
    if ($rol != "Admin") {
        $sql .= " WHERE c.profesor_id = " . intval($profesor_id);
    }
    $sql .= " ORDER BY c.id DESC";

    $rs = DB::Query($sql);
    $cursos = array();
    while ($row = $rs->fetchAssoc()) {
        $desc = $row["materia_nombre"] . " - Sem. " . $row["semestre"] . " (Aula: " . $row["aula"] . " | " . $row["horario"] . ")";
        $cursos[] = array(
            "id" => $row["id"],
            "nombre" => $desc
        );
    }
    $result["success"] = true;
    $result["step"] = "courses_loaded";
    $result["cursos"] = $cursos;
    $result["hoy"] = date("Y-m-d");
}

// -------------------------------------------------------------
// ACCIÓN 2: Cargar Alumnos de la Cátedra para la Fecha Elegida
// -------------------------------------------------------------
elseif ($params["action"] == "load_roster") {
    $curso_id = intval($params["curso_id"]);
    $fecha = !empty($params["fecha"]) ? $params["fecha"] : date("Y-m-d");

    // Consulta de Alumnos inscriptos + Estado de asistencia en esa fecha + Historial acumulado
    $sqlRoster = "SELECT 
        i.id AS inscripcion_id,
        e.matricula,
        u.nombre AS estudiante_nombre,
        COALESCE(a.id, 0) AS asistencia_id,
        COALESCE(a.estado, 'Presente') AS estado_asistencia,
        COALESCE(a.observacion, '') AS observacion,
        (SELECT COUNT(*) FROM asistencias a2 WHERE a2.inscripcion_id = i.id AND a2.estado = 'Presente') AS total_presentes,
        (SELECT COUNT(*) FROM asistencias a2 WHERE a2.inscripcion_id = i.id) AS total_clases
    FROM inscripciones i
    INNER JOIN estudiantes e ON e.id = i.estudiante_id
    INNER JOIN usuarios u ON u.id = e.usuario_id
    LEFT JOIN asistencias a ON a.inscripcion_id = i.id AND a.fecha = " . db_prepare_string($fecha) . "
    WHERE i.curso_id = " . $curso_id . "
    ORDER BY u.nombre ASC";

    $rsR = DB::Query($sqlRoster);
    $alumnos = array();
    $ya_tomada = false;

    while ($r = $rsR->fetchAssoc()) {
        if (intval($r["asistencia_id"]) > 0) {
            $ya_tomada = true;
        }
        $totClases = intval($r["total_clases"]);
        $totPres   = intval($r["total_presentes"]);
        $porc = ($totClases > 0) ? round(($totPres / $totClases) * 100) : 100;

        $alumnos[] = array(
            "inscripcion_id"   => intval($r["inscripcion_id"]),
            "estudiante_nombre"=> $r["estudiante_nombre"],
            "matricula"        => $r["matricula"],
            "estado"           => $r["estado_asistencia"],
            "observacion"      => $r["observacion"],
            "porcentaje"       => $porc,
            "resumen_clases"   => $totPres . "/" . $totClases
        );
    }

    $result["success"] = true;
    $result["step"] = "roster_loaded";
    $result["curso_id"] = $curso_id;
    $result["fecha"] = $fecha;
    $result["alumnos"] = $alumnos;
    $result["ya_tomada"] = $ya_tomada;
}

// -------------------------------------------------------------
// ACCIÓN 3: Guardar Asistencias de la Clase
// -------------------------------------------------------------
elseif ($params["action"] == "save_attendance") {
    $curso_id = intval($params["curso_id"]);
    $fecha = $params["fecha"];
    $data = json_decode($params["payload"], true);

    if (!is_array($data) || count($data) == 0) {
        $result["success"] = false;
        $result["message"] = "No se recibieron datos de asistencia.";
    } else {
        $guardados = 0;
        foreach ($data as $item) {
            $inscripcion_id = intval($item["inscripcion_id"]);
            $estado = in_array($item["estado"], array("Presente", "Ausente", "Justificado")) ? $item["estado"] : "Presente";
            $obs = db_prepare_string(trim($item["observacion"]));

            // INSERT o UPDATE en la tabla asistencias
            $rsExiste = DB::Query("SELECT id FROM asistencias WHERE inscripcion_id = " . $inscripcion_id . " AND fecha = " . db_prepare_string($fecha) . " LIMIT 1");
            if ($rowE = $rsExiste->fetchAssoc()) {
                $sqlUpd = "UPDATE asistencias SET 
                    estado = " . db_prepare_string($estado) . ",
                    observacion = " . $obs . "
                    WHERE id = " . intval($rowE["id"]);
                DB::Exec($sqlUpd);
            } else {
                $sqlIns = "INSERT INTO asistencias (inscripcion_id, fecha, estado, observacion) 
                           VALUES (" . $inscripcion_id . ", " . db_prepare_string($fecha) . ", " . db_prepare_string($estado) . ", " . $obs . ")";
                DB::Exec($sqlIns);
            }
            $guardados++;
        }

        $result["success"] = true;
        $result["step"] = "attendance_saved";
        $result["guardados"] = $guardados;
        $result["fecha"] = $fecha;
    }
};
	RunnerContext::pop();
	echo my_json_encode($result);
}
function buttonHandler_btn_cobro_rapido_caja($params)
{
	global $strTableName;
	$result = array();

	// create new button object for get record data
	$params["keys"] = (array)my_json_decode(postvalue('keys'));
	$params["isManyKeys"] = postvalue('isManyKeys');
	$params["location"] = postvalue('location');

	$button = new Button($params);
	$ajax = $button; // for examle from HELP
	$keys = $button->getKeys();

	$masterData = false;
	if ( isset($params['masterData']) && count($params['masterData']) > 0 )
	{
		$masterData = $params['masterData'];
	}
	else if ( isset($params["masterTable"]) )
	{
		$masterData = $button->getMasterData($params["masterTable"]);
	}
	
	$contextParams = array();
	if ( $params["location"] == PAGE_VIEW )
	{
		$contextParams["data"] = $button->getRecordData();
		$contextParams["masterData"] = $masterData;
	}
	else if ( $params["location"] == PAGE_EDIT )
	{
		$contextParams["data"] = $button->getRecordData();
		$contextParams["newData"] = $params['fieldsData'];
		$contextParams["masterData"] = $masterData;
	}
	else if ( $params["location"] == "grid" )
	{	
		$params["location"] = "list";
		$contextParams["data"] = $button->getRecordData();
		$contextParams["newData"] = $params['fieldsData'];
		$contextParams["masterData"] = $masterData;
	}
	else 
	{
		$contextParams["masterData"] = $masterData;
	}

	RunnerContext::push( new RunnerContextItem( $params["location"], $contextParams));
	$user = Security::getUserName();
$is_admin = Security::isAdmin() || (strtolower($user) == 'admin');
$rol = "Invitado";

// 1. Validar Rol
if ($is_admin) {
    $rol = "Admin";
} else {
    $rsRol = DB::Query("SELECT g.Label FROM sgui_ugmembers m INNER JOIN sgui_uggroups g ON g.GroupID = m.GroupID WHERE LOWER(m.UserName) = LOWER(" . db_prepare_string($user) . ") LIMIT 1");
    if ($r = $rsRol->fetchAssoc()) {
        $rol = $r["Label"];
    }
}

// Seguridad RLS: Solo Admin o Secretaria pueden cobrar en caja
if ($rol != "Admin" && $rol != "Secretaria") {
    $result["error"] = "Acceso denegado: Solo el personal de Tesorería o Administración puede registrar cobros.";
    return;
}

// =========================================================================
// ACCIÓN 1: Cargar estudiantes y todas las cuotas pendientes/vencidas
// =========================================================================
if ($params["action"] == "load_cash_data") {
    // A. Lista de Estudiantes con deuda total
    $sqlEst = "SELECT 
                e.id, 
                u.nombre, 
                e.matricula, 
                e.numero_cedula,
                (SELECT COUNT(*) FROM pagos p WHERE p.estudiante_id = e.id AND p.estado IN ('Pendiente', 'Vencido')) AS total_pendientes,
                (SELECT COUNT(*) FROM pagos p WHERE p.estudiante_id = e.id AND (p.estado = 'Vencido' OR (p.estado = 'Pendiente' AND p.fecha_vencimiento < CURDATE()))) AS total_vencidas
               FROM estudiantes e 
               INNER JOIN usuarios u ON u.id = e.usuario_id 
               ORDER BY u.nombre ASC";
    $rsEst = DB::Query($sqlEst);
    $estudiantes = array();
    while ($e = $rsEst->fetchAssoc()) {
        $estudiantes[] = array(
            "id"               => intval($e["id"]),
            "nombre"           => $e["nombre"],
            "matricula"        => $e["matricula"],
            "cedula"           => $e["numero_cedula"],
            "total_pendientes" => intval($e["total_pendientes"]),
            "total_vencidas"   => intval($e["total_vencidas"])
        );
    }

    // B. Detalle de Cuotas y Aranceles por Cobrar
    $sqlCuotas = "SELECT 
                    p.id, 
                    p.estudiante_id, 
                    p.nro_cuota, 
                    p.monto, 
                    p.descuento, 
                    p.multa_mora, 
                    p.fecha_vencimiento, 
                    p.estado,
                    cp.nombre AS concepto_nombre,
                    COALESCE(per.nombre, 'Sin Periodo') AS periodo_nombre
                  FROM pagos p 
                  INNER JOIN conceptos_pago cp ON cp.id = p.concepto_id 
                  LEFT JOIN periodos per ON per.id = p.periodo_id 
                  WHERE p.estado IN ('Pendiente', 'Vencido') 
                  ORDER BY p.estudiante_id ASC, p.fecha_vencimiento ASC, p.id ASC";
    $rsCuotas = DB::Query($sqlCuotas);
    $cuotas = array();
    $hoy = date("Y-m-d");

    while ($c = $rsCuotas->fetchAssoc()) {
        $monto = intval($c["monto"]);
        $venc  = $c["fecha_vencimiento"];
        $mora  = intval($c["multa_mora"]);

        // Recalcular mora exacta al día de hoy si venció
        $estaVencida = (!empty($venc) && $venc < $hoy);
        if ($estaVencida) {
            $dias = (strtotime($hoy) - strtotime($venc)) / 86400;
            $meses = max(1, ceil($dias / 30));
            $mora = intval(round($monto * 0.02 * $meses));
        }

        $cuotas[] = array(
            "id"                => intval($c["id"]),
            "estudiante_id"     => intval($c["estudiante_id"]),
            "nro_cuota"         => $c["nro_cuota"],
            "concepto"          => $c["concepto_nombre"],
            "periodo"           => $c["periodo_nombre"],
            "monto"             => $monto,
            "descuento"         => intval($c["descuento"]),
            "mora"              => $mora,
            "vencimiento"       => $venc,
            "esta_vencida"      => $estaVencida,
            "total_a_pagar"     => ($monto + $mora - intval($c["descuento"]))
        );
    }

    $result["estudiantes"] = $estudiantes;
    $result["cuotas"]      = $cuotas;
    $result["success"]     = true;
}

// =========================================================================
// ACCIÓN 2: Procesar la liquidación de las cuotas seleccionadas
// =========================================================================
elseif ($params["action"] == "process_payment") {
    $data = json_decode($params["payload"], true);
    $estudiante_id = intval($data["estudiante_id"]);
    $pagos_ids     = is_array($data["pagos_ids"]) ? $data["pagos_ids"] : array();
    $metodo_pago   = trim($data["metodo_pago"]);
    $comprobante   = trim($data["comprobante"]);
    $descuento_gen = intval($data["descuento_general"]);

    if ($estudiante_id <= 0 || count($pagos_ids) == 0) {
        $result["error"] = "No se seleccionó ninguna cuota para liquidar.";
        return;
    }

    if (empty($metodo_pago)) {
        $result["error"] = "Debe especificar el Método de Pago utilizado.";
        return;
    }

    if (empty($comprobante)) {
        $result["error"] = "Debe ingresar el N° de Comprobante / Recibo oficial emitido.";
        return;
    }

    $hoy = date("Y-m-d H:i:s");
    $total_liquidado = 0;
    $cuotas_cobradas = 0;

    foreach ($pagos_ids as $pid) {
        $pago_id = intval($pid);

        // Consultar registro original
        $rsP = DB::Query("SELECT monto, multa_mora, descuento, fecha_vencimiento FROM pagos WHERE id = $pago_id AND estudiante_id = $estudiante_id LIMIT 1");
        if ($rowP = $rsP->fetchAssoc()) {
            $monto_base = intval($rowP["monto"]);
            $mora       = intval($rowP["multa_mora"]);
            
            // Recalcular mora real
            if (!empty($rowP["fecha_vencimiento"]) && $rowP["fecha_vencimiento"] < date("Y-m-d")) {
                $dias = (strtotime(date("Y-m-d")) - strtotime($rowP["fecha_vencimiento"])) / 86400;
                $meses = max(1, ceil($dias / 30));
                $mora = intval(round($monto_base * 0.02 * $meses));
            }

            $subtotal = $monto_base + $mora - intval($rowP["descuento"]);

            // Actualizar cuota a PAGADO
            $sqlUpd = "UPDATE pagos SET 
                        estado = 'Pagado',
                        multa_mora = $mora,
                        fecha_pago = " . db_prepare_string($hoy) . ",
                        metodo_pago = " . db_prepare_string($metodo_pago) . ",
                        nro_comprobante = " . db_prepare_string($comprobante) . "
                       WHERE id = $pago_id";
            DB::Exec($sqlUpd);

            $total_liquidado += $subtotal;
            $cuotas_cobradas++;
        }
    }

    // Nombre del alumno para el acuse
    $rsNom = DB::Query("SELECT u.nombre FROM estudiantes e INNER JOIN usuarios u ON u.id = e.usuario_id WHERE e.id = $estudiante_id");
    $rNom = $rsNom->fetchAssoc();

    $result["payment_ok"]       = true;
    $result["estudiante_nombre"]= $rNom["nombre"];
    $result["cuotas_cobradas"]  = $cuotas_cobradas;
    $result["total_liquidado"]  = $total_liquidado;
    $result["comprobante"]      = $comprobante;
    $result["metodo_pago"]      = $metodo_pago;
};
	RunnerContext::pop();
	echo my_json_encode($result);
}
function buttonHandler_btn_apertura_catedras($params)
{
	global $strTableName;
	$result = array();

	// create new button object for get record data
	$params["keys"] = (array)my_json_decode(postvalue('keys'));
	$params["isManyKeys"] = postvalue('isManyKeys');
	$params["location"] = postvalue('location');

	$button = new Button($params);
	$ajax = $button; // for examle from HELP
	$keys = $button->getKeys();

	$masterData = false;
	if ( isset($params['masterData']) && count($params['masterData']) > 0 )
	{
		$masterData = $params['masterData'];
	}
	else if ( isset($params["masterTable"]) )
	{
		$masterData = $button->getMasterData($params["masterTable"]);
	}
	
	$contextParams = array();
	if ( $params["location"] == PAGE_VIEW )
	{
		$contextParams["data"] = $button->getRecordData();
		$contextParams["masterData"] = $masterData;
	}
	else if ( $params["location"] == PAGE_EDIT )
	{
		$contextParams["data"] = $button->getRecordData();
		$contextParams["newData"] = $params['fieldsData'];
		$contextParams["masterData"] = $masterData;
	}
	else if ( $params["location"] == "grid" )
	{	
		$params["location"] = "list";
		$contextParams["data"] = $button->getRecordData();
		$contextParams["newData"] = $params['fieldsData'];
		$contextParams["masterData"] = $masterData;
	}
	else 
	{
		$contextParams["masterData"] = $masterData;
	}

	RunnerContext::push( new RunnerContextItem( $params["location"], $contextParams));
	$user = Security::getUserName();
$is_admin = Security::isAdmin() || (strtolower($user) == 'admin');
$rol = "Invitado";

// 1. Validar Rol
if ($is_admin) {
    $rol = "Admin";
} else {
    $rsRol = DB::Query("SELECT g.Label FROM sgui_ugmembers m INNER JOIN sgui_uggroups g ON g.GroupID = m.GroupID WHERE LOWER(m.UserName) = LOWER(" . db_prepare_string($user) . ") LIMIT 1");
    if ($r = $rsRol->fetchAssoc()) {
        $rol = $r["Label"];
    }
}

// Solo Admin o Secretaría pueden aperturar cátedras
if ($rol != "Admin" && $rol != "Secretaria") {
    $result["error"] = "Acceso denegado: Solo Coordinación Académica, Secretaría o Administración pueden aperturar cátedras.";
    return;
}

// =========================================================================
// ACCIÓN 1: Cargar catálogo de Carreras, Periodos, Profesores y Mallas
// =========================================================================
if ($params["action"] == "load_initial_catalogs") {
    // A. Carreras activas
    $rsCar = DB::Query("SELECT id, nombre FROM carreras WHERE estado = 'Activo' ORDER BY nombre ASC");
    $carreras = array();
    while ($c = $rsCar->fetchAssoc()) {
        $carreras[] = array("id" => intval($c["id"]), "nombre" => $c["nombre"]);
    }

    // B. Periodos lectivos
    $rsPer = DB::Query("SELECT id, nombre, activo FROM periodos ORDER BY id DESC");
    $periodos = array();
    while ($p = $rsPer->fetchAssoc()) {
        $periodos[] = array("id" => intval($p["id"]), "nombre" => $p["nombre"], "activo" => $p["activo"]);
    }

    // C. Plantel Docente con especialidad
    $sqlProf = "SELECT p.id, u.nombre, COALESCE(p.especialidad, 'General') AS especialidad 
                FROM profesores p 
                INNER JOIN usuarios u ON u.id = p.usuario_id 
                WHERE u.activo = 'Sí' 
                ORDER BY u.nombre ASC";
    $rsProf = DB::Query($sqlProf);
    $profesores = array();
    while ($pr = $rsProf->fetchAssoc()) {
        $profesores[] = array(
            "id"     => intval($pr["id"]),
            "nombre" => $pr["nombre"] . " (" . $pr["especialidad"] . ")"
        );
    }

    // D. Malla Curricular completa (Carrera - Semestre - Materia)
    $sqlMalla = "SELECT cm.carrera_id, cm.semestre, m.id AS materia_id, m.nombre AS materia_nombre 
                 FROM carrera_materia cm 
                 INNER JOIN materias m ON m.id = cm.materia_id 
                 ORDER BY cm.carrera_id ASC, cm.semestre ASC, m.nombre ASC";
    $rsMalla = DB::Query($sqlMalla);
    $mallas = array();
    while ($m = $rsMalla->fetchAssoc()) {
        $mallas[] = array(
            "carrera_id"     => intval($m["carrera_id"]),
            "semestre"       => intval($m["semestre"]),
            "materia_id"     => intval($m["materia_id"]),
            "materia_nombre" => $m["materia_nombre"]
        );
    }

    // E. Cátedras que ya están abiertas actualmente (para alertar en el modal)
    $sqlAbiertas = "SELECT carrera_id, semestre, materia_id, periodo_id, aula, horario 
                    FROM cursos 
                    WHERE estado = 'Activo'";
    $rsAb = DB::Query($sqlAbiertas);
    $cursosAbiertos = array();
    while ($ab = $rsAb->fetchAssoc()) {
        $cursosAbiertos[] = array(
            "carrera_id" => intval($ab["carrera_id"]),
            "semestre"   => intval($ab["semestre"]),
            "materia_id" => intval($ab["materia_id"]),
            "periodo_id" => intval($ab["periodo_id"]),
            "aula"       => $ab["aula"],
            "horario"    => $ab["horario"]
        );
    }

    $result["carreras"]        = $carreras;
    $result["periodos"]        = $periodos;
    $result["profesores"]      = $profesores;
    $result["mallas"]          = $mallas;
    $result["cursos_abiertos"] = $cursosAbiertos;
    $result["success"]         = true;
}

// =========================================================================
// ACCIÓN 2: Guardar las Cátedras creadas en bloque
// =========================================================================
elseif ($params["action"] == "save_courses_batch") {
    $data = json_decode($params["payload"], true);
    $carrera_id = intval($data["carrera_id"]);
    $semestre   = intval($data["semestre"]);
    $periodo_id = intval($data["periodo_id"]);
    $catedras   = is_array($data["catedras"]) ? $data["catedras"] : array();

    if ($carrera_id <= 0 || $semestre <= 0 || $periodo_id <= 0 || count($catedras) == 0) {
        $result["error"] = "No se recibieron materias para aperturar.";
        return;
    }

    $creadas = 0;
    $conflictos = array();

    foreach ($catedras as $cat) {
        $materia_id  = intval($cat["materia_id"]);
        $profesor_id = intval($cat["profesor_id"]);
        $cupo        = intval($cat["cupo"]) > 0 ? intval($cat["cupo"]) : 30;
        $aula        = trim($cat["aula"]);
        $horario     = trim($cat["horario"]);

        if ($profesor_id <= 0) {
            continue; // Ignorar materias sin docente asignado
        }

        // Control de conflicto de aula en el mismo periodo
        if (!empty($aula) && !empty($horario)) {
            $sqlConf = "SELECT c.id, m.nombre AS materia 
                        FROM cursos c 
                        INNER JOIN materias m ON m.id = c.materia_id 
                        WHERE c.periodo_id = $periodo_id 
                          AND c.aula = " . db_prepare_string($aula) . " 
                          AND c.horario = " . db_prepare_string($horario) . " 
                          AND c.estado = 'Activo' LIMIT 1";
            $rsConf = DB::Query($sqlConf);
            if ($rowConf = $rsConf->fetchAssoc()) {
                $conflictos[] = "El Aula '$aula' en el horario '$horario' ya está ocupada por " . $rowConf["materia"];
                continue;
            }
        }

        // Insertar cátedra en tabla cursos
        $insCurso = array();
        $insCurso["carrera_id"]  = $carrera_id;
        $insCurso["semestre"]    = $semestre;
        $insCurso["materia_id"]  = $materia_id;
        $insCurso["profesor_id"] = $profesor_id;
        $insCurso["periodo_id"]  = $periodo_id;
        $insCurso["cupo"]        = $cupo;
        $insCurso["aula"]        = !empty($aula) ? $aula : "Aula " . $semestre;
        $insCurso["horario"]     = !empty($horario) ? $horario : "A convenir";
        $insCurso["estado"]      = "Activo";

        DB::Insert("cursos", $insCurso);
        $creadas++;
    }

    $result["batch_ok"]   = true;
    $result["creadas"]    = $creadas;
    $result["conflictos"] = $conflictos;
};
	RunnerContext::pop();
	echo my_json_encode($result);
}
function buttonHandler_btn_publicar_tarea_expres($params)
{
	global $strTableName;
	$result = array();

	// create new button object for get record data
	$params["keys"] = (array)my_json_decode(postvalue('keys'));
	$params["isManyKeys"] = postvalue('isManyKeys');
	$params["location"] = postvalue('location');

	$button = new Button($params);
	$ajax = $button; // for examle from HELP
	$keys = $button->getKeys();

	$masterData = false;
	if ( isset($params['masterData']) && count($params['masterData']) > 0 )
	{
		$masterData = $params['masterData'];
	}
	else if ( isset($params["masterTable"]) )
	{
		$masterData = $button->getMasterData($params["masterTable"]);
	}
	
	$contextParams = array();
	if ( $params["location"] == PAGE_VIEW )
	{
		$contextParams["data"] = $button->getRecordData();
		$contextParams["masterData"] = $masterData;
	}
	else if ( $params["location"] == PAGE_EDIT )
	{
		$contextParams["data"] = $button->getRecordData();
		$contextParams["newData"] = $params['fieldsData'];
		$contextParams["masterData"] = $masterData;
	}
	else if ( $params["location"] == "grid" )
	{	
		$params["location"] = "list";
		$contextParams["data"] = $button->getRecordData();
		$contextParams["newData"] = $params['fieldsData'];
		$contextParams["masterData"] = $masterData;
	}
	else 
	{
		$contextParams["masterData"] = $masterData;
	}

	RunnerContext::push( new RunnerContextItem( $params["location"], $contextParams));
	$user = Security::getUserName();
$is_admin = Security::isAdmin() || (strtolower($user) == 'admin');
$rol = "Invitado";
$profesor_id = 0;

// 1. Validar Rol
if ($is_admin) {
    $rol = "Admin";
} else {
    $rsRol = DB::Query("SELECT g.Label FROM sgui_ugmembers m INNER JOIN sgui_uggroups g ON g.GroupID = m.GroupID WHERE LOWER(m.UserName) = LOWER(" . db_prepare_string($user) . ") LIMIT 1");
    if ($r = $rsRol->fetchAssoc()) {
        $rol = $r["Label"];
    }
}

// 2. Obtener profesor_id si es docente
if ($rol != "Admin") {
    $rsP = DB::Query("SELECT p.id FROM profesores p INNER JOIN usuarios u ON u.id = p.usuario_id WHERE LOWER(u.email) = LOWER(" . db_prepare_string($user) . ") OR LOWER(u.nombre) = LOWER(" . db_prepare_string($user) . ") LIMIT 1");
    if ($rP = $rsP->fetchAssoc()) {
        $profesor_id = intval($rP["id"]);
    }
}

// Solo Admin o Docentes pueden publicar tareas
if ($rol != "Admin" && $rol != "Docente") {
    $result["error"] = "Acceso denegado: Solo los docentes asignados o administradores pueden publicar tareas.";
    return;
}

// =========================================================================
// ACCIÓN 1: Cargar las Cátedras activas donde el docente enseña
// =========================================================================
if ($params["action"] == "load_teacher_courses") {
    $sql = "SELECT 
                c.id AS curso_id, 
                m.nombre AS materia_nombre, 
                COALESCE(car.nombre, 'Todas las Carreras') AS carrera_nombre,
                COALESCE(c.semestre, 1) AS semestre, 
                COALESCE(per.nombre, '') AS periodo_nombre,
                COALESCE(c.aula, 'S/A') AS aula,
                COALESCE(c.horario, 'S/H') AS horario,
                (SELECT COUNT(*) FROM inscripciones i WHERE i.curso_id = c.id) AS total_alumnos
            FROM cursos c 
            INNER JOIN materias m ON m.id = c.materia_id 
            LEFT JOIN carreras car ON car.id = c.carrera_id 
            LEFT JOIN periodos per ON per.id = c.periodo_id 
            WHERE c.estado = 'Activo'";

    // Si es docente, filtrar estrictamente sus cursos
    if ($rol != "Admin") {
        $sql .= " AND c.profesor_id = " . intval($profesor_id);
    }
    $sql .= " ORDER BY c.periodo_id DESC, m.nombre ASC";

    $rs = DB::Query($sql);
    $cursos = array();
    while ($row = $rs->fetchAssoc()) {
        $cursos[] = array(
            "curso_id"      => intval($row["curso_id"]),
            "materia"       => $row["materia_nombre"],
            "carrera"       => $row["carrera_nombre"],
            "semestre"      => intval($row["semestre"]),
            "periodo"       => $row["periodo_nombre"],
            "aula"          => $row["aula"],
            "horario"       => $row["horario"],
            "total_alumnos" => intval($row["total_alumnos"])
        );
    }

    // Sugerencia de fecha límite: dentro de 7 días a las 23:59
    $sugerenciaFecha = date("Y-m-d\T23:59", strtotime("+7 days"));

    $result["cursos"]          = $cursos;
    $result["fecha_sugerida"]  = $sugerenciaFecha;
    $result["es_admin"]        = $is_admin;
    $result["success"]         = true;
}

// =========================================================================
// ACCIÓN 2: Publicar la tarea en todas las cátedras seleccionadas
// =========================================================================
elseif ($params["action"] == "publish_tasks") {
    $data = json_decode($params["payload"], true);
    $titulo        = trim($data["titulo"]);
    $descripcion   = trim($data["descripcion"]);
    $link          = trim($data["link"]);
    $fecha_entrega = trim($data["fecha_entrega"]);
    $cursos_sel    = is_array($data["cursos_ids"]) ? $data["cursos_ids"] : array();

    if (empty($titulo)) {
        $result["error"] = "El título de la tarea es obligatorio.";
        return;
    }

    if (count($cursos_sel) == 0) {
        $result["error"] = "Debe marcar al menos una cátedra donde publicar la tarea.";
        return;
    }

    if (empty($fecha_entrega)) {
        $fecha_entrega = date("Y-m-d 23:59:00", strtotime("+7 days"));
    } else {
        // Normalizar formato de fecha si viene de input datetime-local
        $fecha_entrega = str_replace("T", " ", $fecha_entrega);
        if (strlen($fecha_entrega) == 16) {
            $fecha_entrega .= ":00";
        }
    }

    $publicadas = 0;
    foreach ($cursos_sel as $cid) {
        $curso_id = intval($cid);

        // Seguridad: Verificar que el curso pertenezca al docente si no es admin
        if ($rol != "Admin") {
            $rsCheck = DB::Query("SELECT id FROM cursos WHERE id = $curso_id AND profesor_id = $profesor_id LIMIT 1");
            if (!$rsCheck->fetchAssoc()) {
                continue; // Omitir curso ajeno
            }
        }

        $insTarea = array();
        $insTarea["curso_id"]      = $curso_id;
        $insTarea["titulo"]        = $titulo;
        $insTarea["descripcion"]   = !empty($descripcion) ? $descripcion : null;
        $insTarea["link"]          = !empty($link) ? $link : null;
        $insTarea["fecha_entrega"] = $fecha_entrega;

        DB::Insert("tareas", $insTarea);
        $publicadas++;
    }

    $result["publish_ok"] = true;
    $result["publicadas"] = $publicadas;
    $result["titulo"]     = $titulo;
};
	RunnerContext::pop();
	echo my_json_encode($result);
}
function buttonHandler_btn_correccion_rapida_tp($params)
{
	global $strTableName;
	$result = array();

	// create new button object for get record data
	$params["keys"] = (array)my_json_decode(postvalue('keys'));
	$params["isManyKeys"] = postvalue('isManyKeys');
	$params["location"] = postvalue('location');

	$button = new Button($params);
	$ajax = $button; // for examle from HELP
	$keys = $button->getKeys();

	$masterData = false;
	if ( isset($params['masterData']) && count($params['masterData']) > 0 )
	{
		$masterData = $params['masterData'];
	}
	else if ( isset($params["masterTable"]) )
	{
		$masterData = $button->getMasterData($params["masterTable"]);
	}
	
	$contextParams = array();
	if ( $params["location"] == PAGE_VIEW )
	{
		$contextParams["data"] = $button->getRecordData();
		$contextParams["masterData"] = $masterData;
	}
	else if ( $params["location"] == PAGE_EDIT )
	{
		$contextParams["data"] = $button->getRecordData();
		$contextParams["newData"] = $params['fieldsData'];
		$contextParams["masterData"] = $masterData;
	}
	else if ( $params["location"] == "grid" )
	{	
		$params["location"] = "list";
		$contextParams["data"] = $button->getRecordData();
		$contextParams["newData"] = $params['fieldsData'];
		$contextParams["masterData"] = $masterData;
	}
	else 
	{
		$contextParams["masterData"] = $masterData;
	}

	RunnerContext::push( new RunnerContextItem( $params["location"], $contextParams));
	$user = Security::getUserName();
$is_admin = Security::isAdmin() || (strtolower($user) == 'admin');
$rol = "Invitado";
$profesor_id = 0;

// 1. Validar Rol
if ($is_admin) {
    $rol = "Admin";
} else {
    $rsRol = DB::Query("SELECT g.Label FROM sgui_ugmembers m INNER JOIN sgui_uggroups g ON g.GroupID = m.GroupID WHERE LOWER(m.UserName) = LOWER(" . db_prepare_string($user) . ") LIMIT 1");
    if ($r = $rsRol->fetchAssoc()) {
        $rol = $r["Label"];
    }
}

// 2. Obtener profesor_id si es docente
if ($rol != "Admin") {
    $rsP = DB::Query("SELECT p.id FROM profesores p INNER JOIN usuarios u ON u.id = p.usuario_id WHERE LOWER(u.email) = LOWER(" . db_prepare_string($user) . ") OR LOWER(u.nombre) = LOWER(" . db_prepare_string($user) . ") LIMIT 1");
    if ($rP = $rsP->fetchAssoc()) {
        $profesor_id = intval($rP["id"]);
    }
}

// Solo Admin o Docentes pueden calificar entregas
if ($rol != "Admin" && $rol != "Docente") {
    $result["error"] = "Acceso denegado: Solo docentes asignados o administradores pueden calificar entregas.";
    return;
}

// =========================================================================
// ACCIÓN 1: Cargar catálogo de Tareas activas del docente
// =========================================================================
if ($params["action"] == "load_teacher_tasks") {
    $sql = "SELECT 
                t.id, 
                t.titulo, 
                t.fecha_entrega,
                m.nombre AS materia,
                COALESCE(car.nombre, '') AS carrera,
                (SELECT COUNT(*) FROM tarea_entregas te WHERE te.tarea_id = t.id) AS total_entregas,
                (SELECT COUNT(*) FROM tarea_entregas te WHERE te.tarea_id = t.id AND te.calificacion IS NULL) AS pendientes_corregir
            FROM tareas t 
            INNER JOIN cursos c ON c.id = t.curso_id 
            INNER JOIN materias m ON m.id = c.materia_id 
            LEFT JOIN carreras car ON car.id = c.carrera_id ";

    if ($rol != "Admin") {
        $sql .= " WHERE c.profesor_id = " . intval($profesor_id);
    }
    $sql .= " ORDER BY t.id DESC";

    $rs = DB::Query($sql);
    $tareas = array();
    while ($row = $rs->fetchAssoc()) {
        $tareas[] = array(
            "id"                  => intval($row["id"]),
            "titulo"              => $row["titulo"],
            "materia"             => $row["materia"],
            "carrera"             => $row["carrera"],
            "fecha_limite"        => $row["fecha_entrega"],
            "total_entregas"      => intval($row["total_entregas"]),
            "pendientes_corregir" => intval($row["pendientes_corregir"])
        );
    }

    $result["step"]    = "tasks_loaded";
    $result["tareas"]  = $tareas;
    $result["success"] = true;
}

// =========================================================================
// ACCIÓN 2: Cargar entregas de la tarea seleccionada
// =========================================================================
elseif ($params["action"] == "load_submissions") {
    $tarea_id = intval($params["tarea_id"]);

    // Datos de la tarea
    $sqlT = "SELECT t.titulo, t.fecha_entrega, m.nombre AS materia 
             FROM tareas t 
             INNER JOIN cursos c ON c.id = t.curso_id 
             INNER JOIN materias m ON m.id = c.materia_id 
             WHERE t.id = $tarea_id";
    $rsT = DB::Query($sqlT);
    $infoTarea = $rsT->fetchAssoc();

    // Entregas de los alumnos
    $sqlEnt = "SELECT 
                te.id,
                te.estudiante_id,
                u.nombre AS alumno_nombre,
                e.matricula,
                te.archivo,
                te.comentario,
                te.fecha_entrega,
                te.calificacion
               FROM tarea_entregas te 
               INNER JOIN estudiantes e ON e.id = te.estudiante_id 
               INNER JOIN usuarios u ON u.id = e.usuario_id 
               WHERE te.tarea_id = $tarea_id 
               ORDER BY u.nombre ASC";
    $rsEnt = DB::Query($sqlEnt);
    $entregas = array();

    while ($r = $rsEnt->fetchAssoc()) {
        // Formateo del enlace al archivo
        $archivoUrl = "";
        $archivoNombre = "Sin Archivo";
        $rawArchivo = trim($r["archivo"]);

        if (!empty($rawArchivo)) {
            // PHPRunner suele guardar archivos como JSON
            $arrJson = json_decode($rawArchivo, true);
            if (is_array($arrJson) && isset($arrJson[0]["name"])) {
                $archivoUrl = $arrJson[0]["name"];
                $archivoNombre = isset($arrJson[0]["usrName"]) ? $arrJson[0]["usrName"] : "Descargar Trabajo";
            } else {
                $archivoUrl = $rawArchivo;
                $archivoNombre = basename($rawArchivo);
            }
        }

        // Auditoría de puntualidad
        $esRetraso = false;
        if (!empty($infoTarea["fecha_entrega"]) && !empty($r["fecha_entrega"])) {
            $esRetraso = ($r["fecha_entrega"] > $infoTarea["fecha_entrega"]);
        }

        $entregas[] = array(
            "id"             => intval($r["id"]),
            "alumno_nombre"  => $r["alumno_nombre"],
            "matricula"      => $r["matricula"],
            "archivo_url"    => $archivoUrl,
            "archivo_nombre" => $archivoNombre,
            "comentario"     => $r["comentario"],
            "fecha_entrega"  => $r["fecha_entrega"],
            "es_retraso"     => $esRetraso,
            "calificacion"   => $r["calificacion"] !== null ? floatval($r["calificacion"]) : ""
        );
    }

    $result["step"]        = "submissions_loaded";
    $result["tarea_id"]    = $tarea_id;
    $result["info_tarea"]  = $infoTarea;
    $result["entregas"]    = $entregas;
    $result["success"]     = true;
}

// =========================================================================
// ACCIÓN 3: Guardar Calificaciones y Comentarios en lote
// =========================================================================
elseif ($params["action"] == "save_grades_batch") {
    $data = json_decode($params["payload"], true);
    $tarea_id = intval($data["tarea_id"]);
    $correcciones = is_array($data["correcciones"]) ? $data["correcciones"] : array();

    if (count($correcciones) == 0) {
        $result["error"] = "No se recibieron correcciones para guardar.";
        return;
    }

    $guardadas = 0;
    foreach ($correcciones as $cor) {
        $entrega_id = intval($cor["id"]);
        $calif      = trim($cor["calificacion"]);
        $comentario = trim($cor["comentario"]);

        $califSql = ($calif === "" || !is_numeric($calif)) ? "NULL" : floatval($calif);

        $sqlUpd = "UPDATE tarea_entregas SET 
                    calificacion = $califSql,
                    comentario = " . db_prepare_string($comentario) . "
                   WHERE id = $entrega_id";
        DB::Exec($sqlUpd);
        $guardadas++;
    }

    $result["batch_ok"]  = true;
    $result["guardadas"] = $guardadas;
};
	RunnerContext::pop();
	echo my_json_encode($result);
}
function buttonHandler_btn_aviso_multicurso($params)
{
	global $strTableName;
	$result = array();

	// create new button object for get record data
	$params["keys"] = (array)my_json_decode(postvalue('keys'));
	$params["isManyKeys"] = postvalue('isManyKeys');
	$params["location"] = postvalue('location');

	$button = new Button($params);
	$ajax = $button; // for examle from HELP
	$keys = $button->getKeys();

	$masterData = false;
	if ( isset($params['masterData']) && count($params['masterData']) > 0 )
	{
		$masterData = $params['masterData'];
	}
	else if ( isset($params["masterTable"]) )
	{
		$masterData = $button->getMasterData($params["masterTable"]);
	}
	
	$contextParams = array();
	if ( $params["location"] == PAGE_VIEW )
	{
		$contextParams["data"] = $button->getRecordData();
		$contextParams["masterData"] = $masterData;
	}
	else if ( $params["location"] == PAGE_EDIT )
	{
		$contextParams["data"] = $button->getRecordData();
		$contextParams["newData"] = $params['fieldsData'];
		$contextParams["masterData"] = $masterData;
	}
	else if ( $params["location"] == "grid" )
	{	
		$params["location"] = "list";
		$contextParams["data"] = $button->getRecordData();
		$contextParams["newData"] = $params['fieldsData'];
		$contextParams["masterData"] = $masterData;
	}
	else 
	{
		$contextParams["masterData"] = $masterData;
	}

	RunnerContext::push( new RunnerContextItem( $params["location"], $contextParams));
	$user = Security::getUserName();
$is_admin = Security::isAdmin() || (strtolower($user) == 'admin');
$rol = "Invitado";
$profesor_id = 0;

// 1. Validar Rol
if ($is_admin) {
    $rol = "Admin";
} else {
    $rsRol = DB::Query("SELECT g.Label FROM sgui_ugmembers m INNER JOIN sgui_uggroups g ON g.GroupID = m.GroupID WHERE LOWER(m.UserName) = LOWER(" . db_prepare_string($user) . ") LIMIT 1");
    if ($r = $rsRol->fetchAssoc()) {
        $rol = $r["Label"];
    }
}

// 2. Obtener profesor_id si es docente
if ($rol != "Admin") {
    $rsP = DB::Query("SELECT p.id FROM profesores p INNER JOIN usuarios u ON u.id = p.usuario_id WHERE LOWER(u.email) = LOWER(" . db_prepare_string($user) . ") OR LOWER(u.nombre) = LOWER(" . db_prepare_string($user) . ") LIMIT 1");
    if ($rP = $rsP->fetchAssoc()) {
        $profesor_id = intval($rP["id"]);
    }
}

// Seguridad: Solo Admin, Secretaria o Docentes pueden emitir comunicados
if ($rol != "Admin" && $rol != "Secretaria" && $rol != "Docente") {
    $result["error"] = "Acceso denegado: Solo el personal autorizado o docentes pueden emitir avisos.";
    return;
}

// =========================================================================
// ACCIÓN 1: Cargar catálogo de cátedras y carreras disponibles para difusión
// =========================================================================
if ($params["action"] == "load_notice_catalogs") {
    // A. Carreras (para filtros rápidos si es Admin o Secretaria)
    $rsCar = DB::Query("SELECT id, nombre FROM carreras WHERE estado = 'Activo' ORDER BY nombre ASC");
    $carreras = array();
    while ($c = $rsCar->fetchAssoc()) {
        $carreras[] = array("id" => intval($c["id"]), "nombre" => $c["nombre"]);
    }

    // B. Cátedras activas
    $sqlCursos = "SELECT 
                    c.id AS curso_id, 
                    m.nombre AS materia, 
                    COALESCE(car.id, 0) AS carrera_id,
                    COALESCE(car.nombre, 'Sin Carrera') AS carrera,
                    COALESCE(c.semestre, 1) AS semestre, 
                    COALESCE(per.nombre, '') AS periodo,
                    COALESCE(c.aula, 'S/A') AS aula,
                    COALESCE(c.horario, 'S/H') AS horario,
                    COALESCE(u_doc.nombre, 'Sin Docente') AS docente,
                    (SELECT COUNT(*) FROM inscripciones i WHERE i.curso_id = c.id) AS total_alumnos
                  FROM cursos c 
                  INNER JOIN materias m ON m.id = c.materia_id 
                  LEFT JOIN carreras car ON car.id = c.carrera_id 
                  LEFT JOIN periodos per ON per.id = c.periodo_id 
                  LEFT JOIN profesores prof ON prof.id = c.profesor_id 
                  LEFT JOIN usuarios u_doc ON u_doc.id = prof.usuario_id 
                  WHERE c.estado = 'Activo'";

    // Si es docente, solo ve las cátedras que él dicta
    if ($rol == "Docente") {
        $sqlCursos .= " AND c.profesor_id = " . intval($profesor_id);
    }
    $sqlCursos .= " ORDER BY car.nombre ASC, m.nombre ASC";

    $rsCur = DB::Query($sqlCursos);
    $cursos = array();
    while ($row = $rsCur->fetchAssoc()) {
        $cursos[] = array(
            "curso_id"      => intval($row["curso_id"]),
            "materia"       => $row["materia"],
            "carrera_id"    => intval($row["carrera_id"]),
            "carrera"       => $row["carrera"],
            "semestre"      => intval($row["semestre"]),
            "periodo"       => $row["periodo"],
            "aula"          => $row["aula"],
            "horario"       => $row["horario"],
            "docente"       => $row["docente"],
            "total_alumnos" => intval($row["total_alumnos"])
        );
    }

    $result["rol"]      = $rol;
    $result["carreras"] = $carreras;
    $result["cursos"]   = $cursos;
    $result["success"]  = true;
}

// =========================================================================
// ACCIÓN 2: Guardar el aviso en cada una de las cátedras seleccionadas
// =========================================================================
elseif ($params["action"] == "publish_notices") {
    $data = json_decode($params["payload"], true);
    $titulo      = trim($data["titulo"]);
    $descripcion = trim($data["descripcion"]);
    $cursos_sel  = is_array($data["cursos_ids"]) ? $data["cursos_ids"] : array();

    if (empty($titulo)) {
        $result["error"] = "El título del aviso es obligatorio.";
        return;
    }

    if (empty($descripcion)) {
        $result["error"] = "El contenido o descripción del aviso no puede estar vacío.";
        return;
    }

    if (count($cursos_sel) == 0) {
        $result["error"] = "Debe marcar al menos un curso o cátedra destinataria.";
        return;
    }

    $hoy = date("Y-m-d H:i:s");
    $difundidos = 0;

    foreach ($cursos_sel as $cid) {
        $curso_id = intval($cid);

        // Control de seguridad si es docente
        if ($rol == "Docente") {
            $rsChk = DB::Query("SELECT id FROM cursos WHERE id = $curso_id AND profesor_id = $profesor_id LIMIT 1");
            if (!$rsChk->fetchAssoc()) {
                continue; // Omitir cátedra que no sea suya
            }
        }

        $insAviso = array();
        $insAviso["curso_id"]          = $curso_id;
        $insAviso["titulo"]            = $titulo;
        $insAviso["descripcion"]       = $descripcion;
        $insAviso["fecha_publicacion"] = $hoy;

        DB::Insert("avisos", $insAviso);
        $difundidos++;
    }

    $result["publish_ok"]  = true;
    $result["titulo"]      = $titulo;
    $result["difundidos"]  = $difundidos;
};
	RunnerContext::pop();
	echo my_json_encode($result);
}
function buttonHandler_Btn_Agregar_Docente($params)
{
	global $strTableName;
	$result = array();

	// create new button object for get record data
	$params["keys"] = (array)my_json_decode(postvalue('keys'));
	$params["isManyKeys"] = postvalue('isManyKeys');
	$params["location"] = postvalue('location');

	$button = new Button($params);
	$ajax = $button; // for examle from HELP
	$keys = $button->getKeys();

	$masterData = false;
	if ( isset($params['masterData']) && count($params['masterData']) > 0 )
	{
		$masterData = $params['masterData'];
	}
	else if ( isset($params["masterTable"]) )
	{
		$masterData = $button->getMasterData($params["masterTable"]);
	}
	
	$contextParams = array();
	if ( $params["location"] == PAGE_VIEW )
	{
		$contextParams["data"] = $button->getRecordData();
		$contextParams["masterData"] = $masterData;
	}
	else if ( $params["location"] == PAGE_EDIT )
	{
		$contextParams["data"] = $button->getRecordData();
		$contextParams["newData"] = $params['fieldsData'];
		$contextParams["masterData"] = $masterData;
	}
	else if ( $params["location"] == "grid" )
	{	
		$params["location"] = "list";
		$contextParams["data"] = $button->getRecordData();
		$contextParams["newData"] = $params['fieldsData'];
		$contextParams["masterData"] = $masterData;
	}
	else 
	{
		$contextParams["masterData"] = $masterData;
	}

	RunnerContext::push( new RunnerContextItem( $params["location"], $contextParams));
	$action = $params["action"];

// FASE 1: Cargar catálogo de cursos disponibles
if ($action == "load_initial_catalogs") {
    $sqlCursos = "SELECT c.id, m.nombre AS materia, c.semestre, c.aula, c.horario, 
                         p.id AS profesor_asignado, u.nombre AS docente_actual
                  FROM cursos c
                  LEFT JOIN materias m ON m.id = c.materia_id
                  LEFT JOIN profesores p ON p.id = c.profesor_id
                  LEFT JOIN usuarios u ON u.id = p.usuario_id
                  ORDER BY m.nombre ASC";
    $rsCursos = DB::Query($sqlCursos);
    $arrCursos = array();
    while ($r = $rsCursos->fetchAssoc()) {
        $arrCursos[] = $r;
    }
    $result["cursos"] = $arrCursos;
}

// FASE 2: Guardar Usuario, Rol Docente, Profesor y Cursos
if ($action == "save_docente") {
    $data = my_json_decode($params["payload"]);
    
    $nombre       = trim($data["nombre"]);
    $email        = trim($data["email"]);
    $password     = trim($data["password"]);
    $especialidad = trim($data["especialidad"]);
    $cursos_sel   = (array)$data["cursos_ids"];

    // 1. Validar campos obligatorios
    if (empty($nombre) || empty($email) || empty($password)) {
        $result["error"] = "Nombre, correo institucional y contraseña son obligatorios.";
    } else {
        // 2. Validar que el correo no exista
        $rsExiste = DB::Query("SELECT id FROM usuarios WHERE LOWER(email) = LOWER(" . db_prepare_string($email) . ") LIMIT 1");
        if ($rsExiste->fetchAssoc()) {
            $result["error"] = "El correo " . $email . " ya se encuentra registrado en el sistema.";
        } else {
            // 3. Crear Registro en tabla 'usuarios'
            $fecha_creacion = date("Y-m-d H:i:s");
            $sqlUser = "INSERT INTO usuarios (nombre, email, password, activo, creado_en) 
                        VALUES (" . db_prepare_string($nombre) . ", " 
                                  . db_prepare_string($email) . ", " 
                                  . db_prepare_string($password) . ", 'Sí', " 
                                  . db_prepare_string($fecha_creacion) . ")";
            DB::Exec($sqlUser);

            $rsIdUser = DB::Query("SELECT id FROM usuarios WHERE LOWER(email) = LOWER(" . db_prepare_string($email) . ") ORDER BY id DESC LIMIT 1");
            $rowUser = $rsIdUser->fetchAssoc();
            $usuario_id = intval($rowUser["id"]);

            // 4. Asignar Rol 'Docente' en la seguridad (sgui_ugmembers)
            $rsGrupo = DB::Query("SELECT GroupID FROM sgui_uggroups WHERE Label IN ('Docente', 'profesor', 'Docentes') LIMIT 1");
            if ($rowGrupo = $rsGrupo->fetchAssoc()) {
                $groupId = intval($rowGrupo["GroupID"]);
                DB::Exec("INSERT INTO sgui_ugmembers (UserName, GroupID) VALUES (" . db_prepare_string($email) . ", " . $groupId . ")");
            }

            // 5. Crear Ficha en tabla 'profesores'
            $fecha_ingreso = date("Y-m-d");
            $sqlProf = "INSERT INTO profesores (usuario_id, especialidad, fecha_ingreso) 
                        VALUES (" . $usuario_id . ", " 
                                  . db_prepare_string($especialidad) . ", " 
                                  . db_prepare_string($fecha_ingreso) . ")";
            DB::Exec($sqlProf);

            $rsIdProf = DB::Query("SELECT id FROM profesores WHERE usuario_id = " . $usuario_id . " ORDER BY id DESC LIMIT 1");
            $rowProf = $rsIdProf->fetchAssoc();
            $profesor_id = intval($rowProf["id"]);

            // 6. Asignar Cursos seleccionados
            $cant_cursos = 0;
            if (count($cursos_sel) > 0) {
                $validIds = array();
                foreach ($cursos_sel as $cid) {
                    $idInt = intval($cid);
                    if ($idInt > 0) {
                        $validIds[] = $idInt;
                    }
                }
                if (count($validIds) > 0) {
                    $inClause = implode(",", $validIds);
                    DB::Exec("UPDATE cursos SET profesor_id = " . $profesor_id . " WHERE id IN (" . $inClause . ")");
                    $cant_cursos = count($validIds);
                }
            }

            $result["guardado"] = true;
            $result["message"] = "¡Docente " . $nombre . " registrado con éxito!\n• Usuario y credenciales creadas\n• Rol 'Docente' asignado\n• " . $cant_cursos . " curso(s) vinculados a su cargo.";
        }
    }
};
	RunnerContext::pop();
	echo my_json_encode($result);
}


		
?>
