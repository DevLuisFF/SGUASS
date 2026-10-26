<?php
/**
 * =========================================================================
 * SGUASS - ENDPOINT REST API: EXPEDIENTE CONSOLIDADO (ALUMNO O DOCENTE)
 * =========================================================================
 * Ruta en servidor: https://uass.serviciostms.com/api_estudiante.php
 * Soporta GET y POST filtrando por ?cedula=... y validando secret_key (rotación cada 4 días).
 */

require_once __DIR__ . '/sguass_api_core.php';

header('Content-Type: application/json; charset=utf-8');
header('Access-Control-Allow-Origin: *');
header('Access-Control-Allow-Methods: GET, POST, OPTIONS');
header('Access-Control-Allow-Headers: Content-Type, Authorization, X-Secret-Key, X-API-Key');

if ($_SERVER['REQUEST_METHOD'] === 'OPTIONS') {
    http_response_code(200);
    exit;
}

$params = sguass_get_request_params();
$windowInfo = sguass_get_key_window_info();
$expectedKey = sguass_generate_secret_key('estudiante', $windowInfo['window_id']);
$expectedKeyPlural = sguass_generate_secret_key('estudiantes', $windowInfo['window_id']);
$providedKey = sguass_extract_provided_secret_key($params);

if ($providedKey === '' || (!hash_equals($expectedKey, $providedKey) && !hash_equals($expectedKeyPlural, $providedKey))) {
    http_response_code(401);
    echo json_encode(array(
        'success' => false,
        'error' => 'Secret Key inválida, ausente o expirada para api_estudiante.php.',
        'instrucciones' => 'Envíe el parámetro secret_key (en GET, POST o Header X-Secret-Key). Las claves se actualizan cada 4 días.',
        'documentacion_swagger' => SGUASS_BASE_URL . '/swagger.php',
        'ciclo_actual_expira_en' => $windowInfo['expires_at']
    ), 0);
    exit;
}

sguass_ensure_fresh_sqlite_cache(false);

$cedula = isset($params['cedula']) ? trim((string)$params['cedula']) : '';
if ($cedula === '') {
    http_response_code(400);
    echo json_encode(array(
        'success' => false,
        'tipo_persona' => 'No especificado',
        'es_docente' => false,
        'es_alumno' => false,
        'message' => 'Debe proporcionar el número de cédula (de Alumno o Docente) en el parámetro cedula.'
    ), 0);
    exit;
}

try {
    $pdo = sguass_get_sqlite_pdo();

    // 1. Buscar en ficha_estudiantes
    $stmt = $pdo->prepare("SELECT payload_json, actualizado_en FROM ficha_estudiantes WHERE cedula = :cedula LIMIT 1");
    $stmt->execute(array(':cedula' => $cedula));
    $row = $stmt->fetch(PDO::FETCH_ASSOC);

    if ($row && !empty($row['payload_json'])) {
        $data = json_decode($row['payload_json'], true);
        $data['tipo_persona'] = 'Alumno';
        $data['es_docente'] = false;
        $data['es_alumno'] = true;
        $data['source'] = 'sqlite_cache';
        $data['cached_at'] = $row['actualizado_en'];

        echo json_encode(array(
            'success' => true,
            'endpoint' => SGUASS_BASE_URL . '/api_estudiante.php',
            'metodo' => $_SERVER['REQUEST_METHOD'],
            'tipo_persona' => 'Alumno',
            'es_docente' => false,
            'es_alumno' => true,
            'filtro_cedula' => $cedula,
            'data' => $data
        ), 0);
        exit;
    }

    // 2. Buscar en ficha_profesores (si la cédula ingresada es de un Docente)
    $stmtP = $pdo->prepare("SELECT payload_json, actualizado_en FROM ficha_profesores WHERE cedula = :cedula OR CAST(profesor_id AS TEXT) = :cedula LIMIT 1");
    $stmtP->execute(array(':cedula' => $cedula));
    $rowP = $stmtP->fetch(PDO::FETCH_ASSOC);

    if ($rowP && !empty($rowP['payload_json'])) {
        $dataP = json_decode($rowP['payload_json'], true);
        $dataP['tipo_persona'] = 'Docente';
        $dataP['es_docente'] = true;
        $dataP['es_alumno'] = false;
        $dataP['source'] = 'sqlite_cache';
        $dataP['cached_at'] = $rowP['actualizado_en'];

        echo json_encode(array(
            'success' => true,
            'endpoint' => SGUASS_BASE_URL . '/api_estudiante.php',
            'metodo' => $_SERVER['REQUEST_METHOD'],
            'tipo_persona' => 'Docente',
            'es_docente' => true,
            'es_alumno' => false,
            'filtro_cedula' => $cedula,
            'data' => $dataP
        ), 0);
        exit;
    }
} catch (Exception $e) {
    // Fallback a identificación directa
}

$persona = sguass_identificar_persona_por_cedula($cedula);
if ($persona) {
    echo json_encode(array(
        'success' => true,
        'endpoint' => SGUASS_BASE_URL . '/api_estudiante.php',
        'metodo' => $_SERVER['REQUEST_METHOD'],
        'tipo_persona' => $persona['tipo_persona'],
        'es_docente' => $persona['es_docente'],
        'es_alumno' => $persona['es_alumno'],
        'filtro_cedula' => $cedula,
        'data' => $persona
    ), 0);
    exit;
}

http_response_code(404);
echo json_encode(array(
    'success' => false,
    'tipo_persona' => 'No encontrado',
    'es_docente' => false,
    'es_alumno' => false,
    'message' => 'No se encontró ningún Alumno ni Docente con la Cédula: ' . htmlspecialchars($cedula)
), JSON_UNESCAPED_UNICODE);
