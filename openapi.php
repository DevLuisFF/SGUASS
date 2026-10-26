<?php
/**
 * =========================================================================
 * SGUASS - ESPECIFICACIÓN OPENAPI 3.0.3 DINÁMICA (SWAGGER JSON)
 * =========================================================================
 * Ruta en servidor: https://uass.serviciostms.com/openapi.php
 */

require_once __DIR__ . '/sguass_api_core.php';

header('Content-Type: application/json; charset=utf-8');
header('Access-Control-Allow-Origin: *');

$windowInfo = sguass_get_key_window_info();
$tablesMeta = sguass_get_tables_metadata();
$allSecretKeys = sguass_get_all_secret_keys();

// Detectar URL actual si se está probando en local o producción
$proto = (!empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] !== 'off') ? 'https' : 'http';
$host = !empty($_SERVER['HTTP_HOST']) ? $_SERVER['HTTP_HOST'] : 'uass.serviciostms.com';
$basePath = rtrim( str_replace('\\', '/', dirname($_SERVER['SCRIPT_NAME'])), '/' );
$currentServerUrl = $proto . '://' . $host . ($basePath ? $basePath : '');

$servers = array(
    array(
        'url' => SGUASS_BASE_URL,
        'description' => 'Servidor de Producción (uass.serviciostms.com)'
    )
);
if (rtrim($currentServerUrl, '/') !== rtrim(SGUASS_BASE_URL, '/')) {
    array_unshift($servers, array(
        'url' => $currentServerUrl,
        'description' => 'Entorno Actual Detectado (' . $host . ')'
    ));
}

$paths = array();

// 1. Endpoint Consolidado api_estudiante.php
$skFicha = $allSecretKeys['estudiante']['secret_key'];
$paths['/api_estudiante.php'] = array(
    'get' => array(
        'tags' => array('00. Expediente Consolidado 360°'),
        'summary' => 'Obtener expediente consolidado 360° por cédula (Alumno o Docente)',
        'description' => "**Propósito:** Consulta de alta velocidad desde SQLite (`sguass_cache.db`) el expediente integral de un estudiante (datos académicos, KPIs de deuda/mora, % de asistencia, materias y pagos) o la ficha de cátedras de un docente.\n\n**Qué retorna:** Objeto JSON con `tipo_persona` (`Alumno` o `Docente`), `es_docente`, `es_alumno`, `resumen_kpi`, `materias` y `pagos`.\n\n**Secret Key activa (ciclo 4 días):** `{$skFicha}` (Expira: `{$windowInfo['expires_at']}`)",
        'parameters' => array(
            array(
                'name' => 'secret_key',
                'in' => 'query',
                'required' => true,
                'description' => 'Secret Key de api_estudiante.php (rotación automática cada 4 días).',
                'schema' => array('type' => 'string', 'default' => $skFicha)
            ),
            array(
                'name' => 'cedula',
                'in' => 'query',
                'required' => true,
                'description' => 'Número de cédula de identidad del Alumno (ej. 1234567, 4852101) o del Docente (ej. 5001438, 2000002).',
                'schema' => array('type' => 'string', 'example' => '1234567')
            )
        ),
        'responses' => array(
            '200' => array('description' => 'Expediente retornado exitosamente especificando si es Alumno o Docente en el body.'),
            '401' => array('description' => 'Secret Key inválida o expirada.'),
            '404' => array('description' => 'No se encontró Alumno ni Docente con esa cédula.')
        )
    ),
    'post' => array(
        'tags' => array('00. Expediente Consolidado 360°'),
        'summary' => 'Consultar expediente consolidado mediante POST (JSON o Form)',
        'description' => "Permite consultar el expediente enviando `secret_key` y `cedula` en el body de una petición POST.\n\n**Secret Key activa:** `{$skFicha}`",
        'requestBody' => array(
            'required' => true,
            'content' => array(
                'application/json' => array(
                    'schema' => array(
                        'type' => 'object',
                        'required' => array('secret_key', 'cedula'),
                        'properties' => array(
                            'secret_key' => array('type' => 'string', 'default' => $skFicha),
                            'cedula' => array('type' => 'string', 'example' => '1234567')
                        )
                    )
                )
            )
        ),
        'responses' => array(
            '200' => array('description' => 'Expediente retornado con indicador explícito tipo_persona (Alumno / Docente).')
        )
    )
);

// 2. Endpoints por cada una de las 20 tablas del esquema
$idx = 1;
foreach ($tablesMeta as $tName => $meta) {
    $tagNum = str_pad((string)$idx, 2, '0', STR_PAD_LEFT);
    $tagName = "{$tagNum}. {$tName} ({$meta['titulo']})";
    $sk = $allSecretKeys[$tName]['secret_key'];
    $pk = $meta['pk'];

    $getParams = array(
        array(
            'name' => 'secret_key',
            'in' => 'query',
            'required' => true,
            'description' => "Secret Key exclusiva de {$meta['endpoint']} (se actualiza cada 4 días). Expira: {$windowInfo['expires_at']}",
            'schema' => array('type' => 'string', 'default' => $sk)
        ),
        array(
            'name' => 'cedula',
            'in' => 'query',
            'required' => false,
            'description' => 'Filtra los registros por número de cédula de un Alumno (ej. 1234567) o de un Docente (ej. 5001438).',
            'schema' => array('type' => 'string', 'example' => '1234567')
        ),
        array(
            'name' => $pk,
            'in' => 'query',
            'required' => false,
            'description' => "Filtra por clave primaria ({$pk}) de la tabla {$tName}.",
            'schema' => array('type' => 'string')
        ),
        array(
            'name' => 'limit',
            'in' => 'query',
            'required' => false,
            'description' => 'Cantidad máxima de registros a retornar (por defecto 250).',
            'schema' => array('type' => 'integer', 'default' => 250)
        )
    );

    // Propiedades para POST / PUT
    $postProps = array(
        'secret_key' => array(
            'type' => 'string',
            'default' => $sk,
            'description' => 'Secret Key vigente de 4 días para esta API.'
        ),
        'cedula' => array(
            'type' => 'string',
            'description' => 'Opcional: Cédula de Alumno o Docente para asociar o consultar vía POST.'
        )
    );
    foreach ($meta['columns'] as $col) {
        if ($col === $pk && $pk === 'id') continue;
        $defaultVal = isset($meta['defaults'][$col]) ? $meta['defaults'][$col] : '';
        $postProps[$col] = array(
            'type' => 'string',
            'example' => $defaultVal,
            'description' => "Columna `{$col}` de la tabla `{$tName}`"
        );
    }

    $putProps = array(
        'secret_key' => array('type' => 'string', 'default' => $sk),
        $pk => array('type' => 'string', 'example' => '1', 'description' => "Clave primaria ({$pk}) del registro a modificar.")
    );
    foreach ($meta['columns'] as $col) {
        if ($col === $pk) continue;
        $putProps[$col] = array('type' => 'string', 'description' => "Nuevo valor para `{$col}`");
    }

    $paths['/' . $meta['endpoint']] = array(
        'get' => array(
            'tags' => array($tagName),
            'summary' => "Consultar registros de {$tName} (filtrable por cédula de Alumno o Docente)",
            'description' => "**Para qué sirve:** {$meta['proposito']}\n\n**Qué retorna:** {$meta['retorna']}\n\n**Especificación en el Body:** Incluye siempre `tipo_persona` (`\"Alumno\"` o `\"Docente\"`), `es_docente` (`true/false`) y `es_alumno` (`true/false`) tanto en la raíz del JSON como en cada fila de `data[]`.\n\n**Secret Key vigente (4 días):** `{$sk}`",
            'parameters' => $getParams,
            'responses' => array(
                '200' => array(
                    'description' => "Respuesta exitosa de {$tName} con indicador de Docente/Alumno en el body.",
                    'content' => array(
                        'application/json' => array(
                            'schema' => array(
                                'type' => 'object',
                                'properties' => array(
                                    'success' => array('type' => 'boolean', 'example' => true),
                                    'tabla' => array('type' => 'string', 'example' => $tName),
                                    'endpoint' => array('type' => 'string', 'example' => SGUASS_BASE_URL . '/' . $meta['endpoint']),
                                    'metodo' => array('type' => 'string', 'example' => 'GET'),
                                    'source' => array('type' => 'string', 'example' => 'sqlite_cache'),
                                    'tipo_persona' => array('type' => 'string', 'example' => $meta['rol_natural'], 'description' => 'Indica si la respuesta corresponde a Docente o Alumno.'),
                                    'es_docente' => array('type' => 'boolean', 'example' => ($meta['rol_natural'] === 'Docente')),
                                    'es_alumno' => array('type' => 'boolean', 'example' => ($meta['rol_natural'] === 'Alumno')),
                                    'filtro_cedula' => array('type' => 'string', 'nullable' => true, 'example' => '1234567'),
                                    'total_registros' => array('type' => 'integer', 'example' => 1),
                                    'data' => array(
                                        'type' => 'array',
                                        'items' => array('type' => 'object')
                                    )
                                )
                            )
                        )
                    )
                ),
                '401' => array('description' => 'Secret Key inválida o expirada.'),
                '404' => array('description' => 'Cédula no encontrada.')
            )
        ),
        'post' => array(
            'tags' => array($tagName),
            'summary' => "Crear registro o consultar por POST en {$tName}",
            'description' => "**Operación Dual:**\n1. **Inserción (CREATE):** Envíe `secret_key` junto con los campos obligatorios (`" . implode('`, `', $meta['required_post']) . "`) para insertar un nuevo registro en MariaDB y sincronizar SQLite.\n2. **Consulta por POST:** Si envía únicamente `secret_key` y `cedula`, devuelve los registros filtrados por ese Alumno o Docente.\n\n**Secret Key vigente (4 días):** `{$sk}`",
            'requestBody' => array(
                'required' => true,
                'content' => array(
                    'application/json' => array(
                        'schema' => array(
                            'type' => 'object',
                            'required' => array_merge(array('secret_key'), $meta['required_post']),
                            'properties' => $postProps
                        )
                    )
                )
            ),
            'responses' => array(
                '200' => array('description' => 'Consulta por POST ejecutada correctamente.'),
                '201' => array('description' => 'Registro insertado en MariaDB y sincronizado con SQLite.'),
                '400' => array('description' => 'Faltan campos obligatorios.'),
                '401' => array('description' => 'Secret Key inválida.')
            )
        ),
        'put' => array(
            'tags' => array($tagName),
            'summary' => "Actualizar registro existente en {$tName}",
            'description' => "Actualiza un registro de la tabla `{$tName}` identificándolo por su clave primaria `{$pk}` y refresca la caché SQLite.\n\n**Secret Key vigente (4 días):** `{$sk}`",
            'requestBody' => array(
                'required' => true,
                'content' => array(
                    'application/json' => array(
                        'schema' => array(
                            'type' => 'object',
                            'required' => array('secret_key', $pk),
                            'properties' => $putProps
                        )
                    )
                )
            ),
            'responses' => array(
                '200' => array('description' => 'Registro actualizado con éxito.'),
                '400' => array('description' => 'Clave primaria o datos faltantes.'),
                '401' => array('description' => 'Secret Key inválida.')
            )
        ),
        'delete' => array(
            'tags' => array($tagName),
            'summary' => "Eliminar registro de {$tName}",
            'description' => "Elimina un registro de `{$tName}` por su clave primaria `{$pk}` y sincroniza SQLite.\n\n**Secret Key vigente (4 días):** `{$sk}`",
            'parameters' => array(
                array(
                    'name' => 'secret_key',
                    'in' => 'query',
                    'required' => true,
                    'description' => "Secret Key vigente de {$meta['endpoint']}",
                    'schema' => array('type' => 'string', 'default' => $sk)
                ),
                array(
                    'name' => $pk,
                    'in' => 'query',
                    'required' => true,
                    'description' => "Valor de `{$pk}` del registro que se desea eliminar.",
                    'schema' => array('type' => 'string', 'example' => '999')
                )
            ),
            'responses' => array(
                '200' => array('description' => 'Registro eliminado con éxito.'),
                '400' => array('description' => 'Clave primaria no proporcionada.'),
                '401' => array('description' => 'Secret Key inválida.')
            )
        )
    );
    $idx++;
}

$openApiSpec = array(
    'openapi' => '3.0.3',
    'info' => array(
        'title' => 'SGUASS — API REST Integral por Tabla & Middleware SQLite',
        'version' => '2.0.0',
        'description' => "Documentación oficial interactiva de los endpoints REST para todas las tablas de la base de datos `serviciostms_uass` en **https://uass.serviciostms.com/**.\n\n### Características Principales\n- **Filtrado Universal por Cédula (`?cedula=`):** Todos los endpoints permiten filtrar por el número de cédula de un **Alumno** o de un **Docente**.\n- **Identificación Explícita en el Body (`tipo_persona`):** Todas las respuestas especifican dentro del JSON si los datos corresponden a un **`Docente`** o a un **`Alumno`** (`tipo_persona`, `es_docente`, `es_alumno`).\n- **Secret Key por API con Rotación cada 4 Días:** Cada endpoint posee su propia clave secreta (`secret_key`) que se renueva automáticamente cada **4 días** (`345,600` segundos). Ciclo actual válido desde `{$windowInfo['valid_from']}` hasta `{$windowInfo['expires_at']}`.\n- **Sincronización SQLite cada 10 Minutos:** El demonio `sguass_daemon.php` actualiza `sguass_cache.db` cada **10 minutos**."
    ),
    'servers' => $servers,
    'paths' => $paths
);

echo json_encode($openApiSpec, JSON_PRETTY_PRINT);
