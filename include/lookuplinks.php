<?php

/**
* getLookupMainTableSettings - tests whether the lookup link exists between the tables
*
*  returns array with ProjectSettings class for main table if the link exists in project settings.
*  returns NULL otherwise
*/
function getLookupMainTableSettings($lookupTable, $mainTableShortName, $mainField, $desiredPage = "")
{
	global $lookupTableLinks;
	if(!isset($lookupTableLinks[$lookupTable]))
		return null;
	if(!isset($lookupTableLinks[$lookupTable][$mainTableShortName.".".$mainField]))
		return null;
	$arr = &$lookupTableLinks[$lookupTable][$mainTableShortName.".".$mainField];
	$effectivePage = $desiredPage;
	if(!isset($arr[$effectivePage]))
	{
		$effectivePage = PAGE_EDIT;
		if(!isset($arr[$effectivePage]))
		{
			if($desiredPage == "" && 0 < count($arr))
			{
				$effectivePage = $arr[0];
			}
			else
				return null;
		}
	}
	return new ProjectSettings($arr[$effectivePage]["table"], $effectivePage);
}

/** 
* $lookupTableLinks array stores all lookup links between tables in the project
*/
function InitLookupLinks()
{
	global $lookupTableLinks;

	$lookupTableLinks = array();

	$lookupTableLinks["inscripciones"]["asistencias.inscripcion_id"]["edit"] = array("table" => "asistencias", "field" => "inscripcion_id", "page" => "edit");
	$lookupTableLinks["cursos"]["avisos.curso_id"]["edit"] = array("table" => "avisos", "field" => "curso_id", "page" => "edit");
	$lookupTableLinks["carreras"]["carrera_materia.carrera_id"]["edit"] = array("table" => "carrera_materia", "field" => "carrera_id", "page" => "edit");
	$lookupTableLinks["materias"]["carrera_materia.materia_id"]["edit"] = array("table" => "carrera_materia", "field" => "materia_id", "page" => "edit");
	$lookupTableLinks["carreras"]["cursos.carrera_id"]["edit"] = array("table" => "cursos", "field" => "carrera_id", "page" => "edit");
	$lookupTableLinks["carrera_materia"]["cursos.materia_id"]["edit"] = array("table" => "cursos", "field" => "materia_id", "page" => "edit");
	$lookupTableLinks["profesores"]["cursos.profesor_id"]["edit"] = array("table" => "cursos", "field" => "profesor_id", "page" => "edit");
	$lookupTableLinks["periodos"]["cursos.periodo_id"]["edit"] = array("table" => "cursos", "field" => "periodo_id", "page" => "edit");
	$lookupTableLinks["usuarios"]["estudiantes.usuario_id"]["edit"] = array("table" => "estudiantes", "field" => "usuario_id", "page" => "edit");
	$lookupTableLinks["carreras"]["estudiantes.carrera_id"]["edit"] = array("table" => "estudiantes", "field" => "carrera_id", "page" => "edit");
	$lookupTableLinks["matriculas_semestre"]["inscripciones.matricula_semestre_id"]["edit"] = array("table" => "inscripciones", "field" => "matricula_semestre_id", "page" => "edit");
	$lookupTableLinks["estudiantes"]["inscripciones.estudiante_id"]["edit"] = array("table" => "inscripciones", "field" => "estudiante_id", "page" => "edit");
	$lookupTableLinks["cursos"]["inscripciones.curso_id"]["edit"] = array("table" => "inscripciones", "field" => "curso_id", "page" => "edit");
	$lookupTableLinks["inscripciones"]["notas.inscripcion_id"]["edit"] = array("table" => "notas", "field" => "inscripcion_id", "page" => "edit");
	$lookupTableLinks["estudiantes"]["pagos.estudiante_id"]["edit"] = array("table" => "pagos", "field" => "estudiante_id", "page" => "edit");
	$lookupTableLinks["matriculas_semestre"]["pagos.matricula_semestre_id"]["edit"] = array("table" => "pagos", "field" => "matricula_semestre_id", "page" => "edit");
	$lookupTableLinks["periodos"]["pagos.periodo_id"]["edit"] = array("table" => "pagos", "field" => "periodo_id", "page" => "edit");
	$lookupTableLinks["conceptos_pago"]["pagos.concepto_id"]["edit"] = array("table" => "pagos", "field" => "concepto_id", "page" => "edit");
	$lookupTableLinks["usuarios"]["profesores.usuario_id"]["edit"] = array("table" => "profesores", "field" => "usuario_id", "page" => "edit");
	$lookupTableLinks["tareas"]["tarea_entregas.tarea_id"]["edit"] = array("table" => "tarea_entregas", "field" => "tarea_id", "page" => "edit");
	$lookupTableLinks["estudiantes"]["tarea_entregas.estudiante_id"]["edit"] = array("table" => "tarea_entregas", "field" => "estudiante_id", "page" => "edit");
	$lookupTableLinks["cursos"]["tareas.curso_id"]["edit"] = array("table" => "tareas", "field" => "curso_id", "page" => "edit");
	$lookupTableLinks["estudiantes"]["matriculas_semestre.estudiante_id"]["edit"] = array("table" => "matriculas_semestre", "field" => "estudiante_id", "page" => "edit");
	$lookupTableLinks["carreras"]["matriculas_semestre.carrera_id"]["edit"] = array("table" => "matriculas_semestre", "field" => "carrera_id", "page" => "edit");
	$lookupTableLinks["periodos"]["matriculas_semestre.periodo_id"]["edit"] = array("table" => "matriculas_semestre", "field" => "periodo_id", "page" => "edit");
}

?>