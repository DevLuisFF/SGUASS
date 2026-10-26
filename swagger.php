<?php
// =========================================================================
// SGUASS - PORTAL INTERACTIVO DE APIs, CONSOLA NATIVA PHP, SCALAR & SWAGGER
// =========================================================================
// Ruta en local:    http://localhost:8086/swagger.php
// Ruta en servidor: https://uass.serviciostms.com/swagger.php

require_once dirname(__FILE__) . '/sguass_api_core.php';

// Asegurar caché sincronizada (máx 10 min)
sguass_ensure_fresh_sqlite_cache(false);

$windowInfo = sguass_get_key_window_info();
$tablesMeta = sguass_get_tables_metadata();
$allSecretKeys = sguass_get_all_secret_keys();

$lastSyncTime = 'Sincronizado';
$nextSyncTime = date('Y-m-d H:i:s', time() + SGUASS_DAEMON_INTERVAL_SECONDS);
$sampleAlumnos = array();
$sampleDocentes = array();

try {
    $pdo = sguass_get_sqlite_pdo();
    $rsMeta = $pdo->query("SELECT meta_key, meta_value FROM daemon_meta");
    if ($rsMeta) {
        while ($m = $rsMeta->fetch(PDO::FETCH_ASSOC)) {
            if ($m['meta_key'] === 'last_sync_time') $lastSyncTime = $m['meta_value'];
            if ($m['meta_key'] === 'next_sync_time') $nextSyncTime = $m['meta_value'];
        }
    }

    $rsAl = $pdo->query("SELECT e.id, e.numero_cedula, e.matricula, u.nombre, c.nombre AS carrera
                         FROM cache_estudiantes e
                         LEFT JOIN cache_usuarios u ON u.id = e.usuario_id
                         LEFT JOIN cache_carreras c ON c.id = e.carrera_id
                         ORDER BY e.id ASC LIMIT 10");
    if ($rsAl) {
        $sampleAlumnos = $rsAl->fetchAll(PDO::FETCH_ASSOC);
    }

    $rsDoc = $pdo->query("SELECT p.id, p.numero_cedula, p.especialidad, u.nombre, u.email
                          FROM cache_profesores p
                          LEFT JOIN cache_usuarios u ON u.id = p.usuario_id
                          ORDER BY p.id ASC LIMIT 10");
    if ($rsDoc) {
        $sampleDocentes = $rsDoc->fetchAll(PDO::FETCH_ASSOC);
    }
} catch (Exception $e) {}

// Preparar catálogo JSON para la Consola Interactiva Nativa en PHP
$catalogForJs = array();
$catalogForJs['estudiante'] = array(
    'endpoint' => 'api_estudiante.php',
    'titulo' => 'Expediente Consolidado 360° (Alumno / Docente)',
    'secret_key' => $allSecretKeys['estudiante']['secret_key'],
    'pk' => 'id',
    'columns' => array('cedula'),
    'defaults' => array('cedula' => '1234567')
);
foreach ($tablesMeta as $tName => $meta) {
    $catalogForJs[$tName] = array(
        'endpoint' => $meta['endpoint'],
        'titulo' => $meta['titulo'],
        'secret_key' => $allSecretKeys[$tName]['secret_key'],
        'pk' => $meta['pk'],
        'columns' => $meta['columns'],
        'required_post' => $meta['required_post'],
        'defaults' => $meta['defaults']
    );
}
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SGUASS — Portal de APIs REST, Consola Interactiva PHP, Secret Keys y OpenAPI</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=IBM+Plex+Mono:wght@400;500;600&family=Public+Sans:wght@400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://unpkg.com/swagger-ui-dist@5.11.0/swagger-ui.css">
    <style>
        :root {
            --bg-canvas: #f8fafc;
            --bg-surface: #ffffff;
            --bg-subtle: #f1f5f9;
            --bg-ink: #0f172a;
            --text-primary: #0f172a;
            --text-secondary: #334155;
            --text-muted: #475569;
            --border-hairline: #e2e8f0;
            --border-strong: #cbd5e1;
            --accent-primary: #0369a1;
            --accent-hover: #075985;
            --accent-tint: #e0f2fe;
            --role-alumno-bg: #dcfce7;
            --role-alumno-fg: #166534;
            --role-docente-bg: #fef3c7;
            --role-docente-fg: #92400e;
            --font-sans: 'Public Sans', -apple-system, BlinkMacSystemFont, sans-serif;
            --font-mono: 'IBM Plex Mono', monospace;
        }

        ::selection {
            background-color: var(--accent-primary);
            color: #ffffff;
        }

        ::-webkit-scrollbar {
            width: 8px;
            height: 8px;
        }
        ::-webkit-scrollbar-track {
            background: var(--bg-subtle);
        }
        ::-webkit-scrollbar-thumb {
            background: #94a3b8;
            border-radius: 4px;
        }
        ::-webkit-scrollbar-thumb:hover {
            background: #64748b;
        }

        * {
            box-sizing: border-box;
        }

        body {
            margin: 0;
            padding: 0;
            background-color: var(--bg-canvas);
            color: var(--text-primary);
            font-family: var(--font-sans);
            font-size: 15px;
            line-height: 1.6;
            -webkit-font-smoothing: antialiased;
        }

        .top-bar {
            background-color: var(--bg-ink);
            color: #f8fafc;
            border-bottom: 1px solid #1e293b;
            padding: 1.15rem 2rem;
            position: sticky;
            top: 0;
            z-index: 100;
        }

        .top-bar-inner {
            max-width: 1420px;
            margin: 0 auto;
            display: flex;
            flex-wrap: wrap;
            align-items: center;
            justify-content: space-between;
            gap: 1rem;
        }

        .brand-block h1 {
            margin: 0;
            font-size: 1.3rem;
            font-weight: 700;
            letter-spacing: -0.02em;
            color: #ffffff;
        }

        .brand-block p {
            margin: 0.2rem 0 0 0;
            font-size: 0.85rem;
            color: #cbd5e1;
        }

        .nav-tabs-bar {
            display: flex;
            gap: 0.5rem;
            flex-wrap: wrap;
        }

        .nav-pill {
            display: inline-flex;
            align-items: center;
            gap: 0.45rem;
            padding: 0.5rem 0.9rem;
            border-radius: 6px;
            font-size: 0.84rem;
            font-weight: 600;
            color: #e2e8f0;
            background: #1e293b;
            border: 1px solid #334155;
            text-decoration: none;
            cursor: pointer;
            transition: background-color 0.15s ease, border-color 0.15s ease;
        }

        .nav-pill:hover, .nav-pill:focus-visible {
            background: #334155;
            border-color: #38bdf8;
            color: #ffffff;
            outline: none;
        }

        .nav-pill.primary {
            background: var(--accent-primary);
            border-color: #0284c7;
            color: #ffffff;
        }

        .nav-pill.primary:hover {
            background: var(--accent-hover);
        }

        .main-container {
            max-width: 1420px;
            margin: 0 auto;
            padding: 2rem;
        }

        .status-strip {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(270px, 1fr));
            gap: 1.25rem;
            margin-bottom: 2rem;
            background: var(--bg-surface);
            border: 1px solid var(--border-hairline);
            border-radius: 8px;
            padding: 1.25rem 1.5rem;
            box-shadow: 0 4px 14px rgba(15, 23, 42, 0.04);
        }

        .status-item {
            display: flex;
            flex-direction: column;
            gap: 0.25rem;
            padding-right: 1rem;
        }

        .status-item strong {
            font-size: 0.8rem;
            color: var(--text-muted);
            font-weight: 600;
        }

        .status-value {
            font-size: 1.02rem;
            font-weight: 700;
            color: var(--text-primary);
            font-variant-numeric: tabular-nums;
        }

        .status-sub {
            font-size: 0.8rem;
            color: var(--text-secondary);
            font-variant-numeric: tabular-nums;
        }

        .section-block {
            background: var(--bg-surface);
            border: 1px solid var(--border-hairline);
            border-radius: 8px;
            padding: 1.75rem 2rem;
            margin-bottom: 2.25rem;
            box-shadow: 0 4px 16px rgba(15, 23, 42, 0.04);
        }

        .section-header {
            display: flex;
            flex-wrap: wrap;
            justify-content: space-between;
            align-items: flex-end;
            gap: 1rem;
            margin-bottom: 1.25rem;
            padding-bottom: 1rem;
            border-bottom: 1px solid var(--border-hairline);
        }

        .section-header h2 {
            margin: 0;
            font-size: 1.3rem;
            font-weight: 700;
            letter-spacing: -0.02em;
            color: var(--text-primary);
        }

        .section-header p {
            margin: 0.35rem 0 0 0;
            color: var(--text-secondary);
            max-width: 74ch;
            font-size: 0.92rem;
        }

        /* CONSOLA INTERACTIVA NATIVA EN PHP */
        .playground-grid {
            display: grid;
            grid-template-columns: 440px 1fr;
            gap: 1.5rem;
            align-items: start;
        }

        .playground-form {
            background: var(--bg-subtle);
            border: 1px solid var(--border-strong);
            border-radius: 8px;
            padding: 1.25rem;
        }

        .form-row {
            margin-bottom: 1rem;
        }

        .form-row label {
            display: block;
            font-size: 0.82rem;
            font-weight: 700;
            color: var(--text-secondary);
            margin-bottom: 0.35rem;
        }

        .form-control-input, .form-control-select, .form-control-textarea {
            width: 100%;
            padding: 0.55rem 0.75rem;
            font-family: var(--font-sans);
            font-size: 0.875rem;
            color: var(--text-primary);
            background: #ffffff;
            border: 1px solid var(--border-strong);
            border-radius: 6px;
        }

        .form-control-textarea {
            font-family: var(--font-mono);
            font-size: 0.8rem;
            min-height: 115px;
            resize: vertical;
        }

        .form-control-input:focus, .form-control-select:focus, .form-control-textarea:focus {
            outline: 2px solid var(--accent-primary);
            outline-offset: 1px;
        }

        .quick-cedula-pills {
            display: flex;
            flex-wrap: wrap;
            gap: 0.35rem;
            margin-top: 0.45rem;
        }

        .mini-chip {
            font-size: 0.74rem;
            font-weight: 600;
            padding: 0.2rem 0.5rem;
            border-radius: 4px;
            border: 1px solid var(--border-strong);
            background: #ffffff;
            cursor: pointer;
            font-family: var(--font-mono);
        }

        .mini-chip.alumno {
            background: var(--role-alumno-bg);
            color: var(--role-alumno-fg);
            border-color: #86efac;
        }

        .mini-chip.docente {
            background: var(--role-docente-bg);
            color: var(--role-docente-fg);
            border-color: #fcd34d;
        }

        .playground-output {
            background: var(--bg-ink);
            color: #f8fafc;
            border-radius: 8px;
            padding: 1.25rem;
            min-height: 430px;
            display: flex;
            flex-direction: column;
        }

        .output-toolbar {
            display: flex;
            flex-wrap: wrap;
            justify-content: space-between;
            align-items: center;
            gap: 0.75rem;
            padding-bottom: 0.85rem;
            border-bottom: 1px solid #334155;
            margin-bottom: 0.85rem;
        }

        .output-url-bar {
            font-family: var(--font-mono);
            font-size: 0.78rem;
            background: #1e293b;
            color: #38bdf8;
            padding: 0.5rem 0.75rem;
            border-radius: 5px;
            margin-bottom: 0.85rem;
            word-break: break-all;
            border: 1px solid #334155;
        }

        .output-pre {
            margin: 0;
            font-family: var(--font-mono);
            font-size: 0.81rem;
            line-height: 1.5;
            color: #e2e8f0;
            overflow: auto;
            max-height: 460px;
            flex: 1;
        }

        .search-input {
            padding: 0.55rem 0.9rem;
            border: 1px solid var(--border-strong);
            border-radius: 6px;
            font-family: var(--font-sans);
            font-size: 0.875rem;
            min-width: 260px;
            color: var(--text-primary);
            background: var(--bg-canvas);
        }

        .data-table-wrap {
            overflow-x: auto;
        }

        table.doc-table {
            width: 100%;
            border-collapse: collapse;
            font-size: 0.865rem;
            font-variant-numeric: tabular-nums;
        }

        table.doc-table th {
            text-align: left;
            padding: 0.75rem 1rem;
            background: var(--bg-subtle);
            color: var(--text-secondary);
            font-weight: 700;
            border-bottom: 1px solid var(--border-strong);
            white-space: nowrap;
        }

        table.doc-table td {
            padding: 0.75rem 1rem;
            border-bottom: 1px solid var(--border-hairline);
            vertical-align: middle;
            color: var(--text-primary);
        }

        table.doc-table tr:hover td {
            background-color: #f8fafc;
        }

        code.mono-pill {
            font-family: var(--font-mono);
            font-size: 0.79rem;
            background: var(--bg-subtle);
            color: #0f172a;
            padding: 0.22rem 0.5rem;
            border-radius: 4px;
            border: 1px solid var(--border-hairline);
            display: inline-block;
        }

        code.key-highlight {
            font-family: var(--font-mono);
            font-size: 0.81rem;
            font-weight: 600;
            background: #f0f9ff;
            color: #0369a1;
            padding: 0.28rem 0.55rem;
            border-radius: 4px;
            border: 1px solid #bae6fd;
            user-select: all;
        }

        .btn-action {
            display: inline-flex;
            align-items: center;
            gap: 0.35rem;
            padding: 0.38rem 0.75rem;
            font-family: var(--font-sans);
            font-size: 0.78rem;
            font-weight: 600;
            color: var(--text-primary);
            background: #ffffff;
            border: 1px solid var(--border-strong);
            border-radius: 5px;
            cursor: pointer;
            text-decoration: none;
            transition: background-color 0.12s ease, border-color 0.12s ease;
        }

        .btn-action:hover {
            background: var(--bg-subtle);
            border-color: #94a3b8;
        }

        .btn-action.primary {
            background: var(--accent-primary);
            color: #ffffff;
            border-color: var(--accent-primary);
        }

        .btn-action.primary:hover {
            background: var(--accent-hover);
        }

        .role-tag {
            display: inline-block;
            padding: 0.2rem 0.55rem;
            border-radius: 4px;
            font-size: 0.75rem;
            font-weight: 700;
        }

        .role-alumno {
            background: var(--role-alumno-bg);
            color: var(--role-alumno-fg);
        }

        .role-docente {
            background: var(--role-docente-bg);
            color: var(--role-docente-fg);
        }

        .role-ambos {
            background: var(--accent-tint);
            color: var(--accent-primary);
        }

        .method-badge {
            display: inline-block;
            font-family: var(--font-mono);
            font-size: 0.7rem;
            font-weight: 600;
            padding: 0.15rem 0.4rem;
            border-radius: 3px;
            margin-right: 0.2rem;
        }
        .m-get { background: #dbeafe; color: #1e40af; }
        .m-post { background: #dcfce7; color: #166534; }
        .m-put { background: #fef3c7; color: #92400e; }
        .m-del { background: #fee2e2; color: #991b1b; }

        .two-col-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(420px, 1fr));
            gap: 1.5rem;
        }

        .sample-box {
            border: 1px solid var(--border-hairline);
            border-radius: 6px;
            padding: 1rem 1.25rem;
            background: #ffffff;
        }

        .sample-box h3 {
            margin: 0 0 0.75rem 0;
            font-size: 1rem;
            font-weight: 700;
            display: flex;
            align-items: center;
            justify-content: space-between;
        }

        #swagger-ui .topbar {
            display: none;
        }

        .toast-notice {
            position: fixed;
            bottom: 1.5rem;
            right: 1.5rem;
            background: var(--bg-ink);
            color: #ffffff;
            padding: 0.75rem 1.25rem;
            border-radius: 6px;
            font-size: 0.875rem;
            font-weight: 600;
            box-shadow: 0 10px 25px rgba(15, 23, 42, 0.25);
            opacity: 0;
            transform: translateY(10px);
            pointer-events: none;
            transition: opacity 0.2s ease, transform 0.2s ease;
            z-index: 9999;
        }

        .toast-notice.show {
            opacity: 1;
            transform: translateY(0);
        }

        @media (max-width: 992px) {
            .playground-grid {
                grid-template-columns: 1fr;
            }
            .main-container {
                padding: 1rem;
            }
            .section-block {
                padding: 1.25rem;
            }
            .two-col-grid {
                grid-template-columns: 1fr;
            }
        }
    </style>
</head>
<body>

<header class="top-bar">
    <div class="top-bar-inner">
        <div class="brand-block">
            <h1>SGUASS — Centro de Documentación &amp; Probador Nativo de APIs REST</h1>
            <p>Dominio Oficial: <strong>https://uass.serviciostms.com/</strong> &bull; Filtrado por Cédula (Docente / Alumno) &bull; Caché SQLite (10 min)</p>
        </div>
        <nav class="nav-tabs-bar" aria-label="Navegación de documentación">
            <a href="#probador-nativo" class="nav-pill primary">
                <svg width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polygon points="5 3 19 12 5 21 5 3"/></svg>
                Consola Interactiva PHP
            </a>
            <a href="#apartado-secret-keys" class="nav-pill">
                <svg width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M21 2l-2 2m-7.61 7.61a5.5 5.5 0 1 1-7.778 7.778 5.5 5.5 0 0 1 7.777-7.777zm0 0L15.5 7.5m0 0l3 3L22 7l-3-3m-3.5 3.5L19 4"/></svg>
                Secret Keys (Cada 4 Días)
            </a>
            <a href="#guia-endpoints" class="nav-pill">
                <svg width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M4 19.5A2.5 2.5 0 0 1 6.5 17H20"/><path d="M6.5 2H20v20H6.5A2.5 2.5 0 0 1 4 19.5v-15A2.5 2.5 0 0 1 6.5 2z"/></svg>
                Guía de Retorno por Tabla
            </a>
            <a href="#cedulas-prueba" class="nav-pill">
                <svg width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><rect x="3" y="4" width="18" height="16" rx="2"/><circle cx="9" cy="10" r="2"/><path d="M15 8h2"/><path d="M15 12h2"/><path d="M7 16h10"/></svg>
                Cédulas Docente / Alumno
            </a>
            <a href="#consola-swagger" class="nav-pill">
                <svg width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="16 18 22 12 16 6"/><polyline points="8 6 2 12 8 18"/></svg>
                Especificación OpenAPI / Swagger
            </a>
        </nav>
    </div>
</header>

<main class="main-container">

    <!-- Barra de Estado Operativo -->
    <section class="status-strip" aria-label="Estado del sistema de APIs">
        <div class="status-item">
            <strong>Dominio Base de Peticiones</strong>
            <span class="status-value">https://uass.serviciostms.com/</span>
            <span class="status-sub">Formato: <code>https://uass.serviciostms.com/api_&lt;tabla&gt;.php</code></span>
        </div>
        <div class="status-item">
            <strong>Rotación de Secret Keys (Ciclo #<?php echo intval($windowInfo['window_id']); ?>)</strong>
            <span class="status-value">Expira: <?php echo htmlspecialchars($windowInfo['expires_at']); ?></span>
            <span class="status-sub">Renovación automática cada 4 días (345,600 seg.)</span>
        </div>
        <div class="status-item">
            <strong>Demonio SQLite (sguass_daemon.php)</strong>
            <span class="status-value" id="sync-status-label">Última: <?php echo htmlspecialchars($lastSyncTime); ?></span>
            <span class="status-sub">Actualización cada 10 minutos &bull; <button type="button" class="btn-action" onclick="ejecutarDaemonAhora()">Ejecutar Daemon Ahora</button></span>
        </div>
        <div class="status-item">
            <strong>Especificación de Rol en Body JSON</strong>
            <span class="status-value"><code>"tipo_persona": "Docente" | "Alumno"</code></span>
            <span class="status-sub">Presente en la raíz y en cada registro devuelto</span>
        </div>
    </section>

    <!-- APARTADO 0: CONSOLA INTERACTIVA NATIVA EN PHP (ALTERNATIVA AMIGABLE Y DIRECTA) -->
    <section id="probador-nativo" class="section-block">
        <div class="section-header">
            <div>
                <h2>Probador Interactivo Nativo en PHP (En Vivo)</h2>
                <p>Alternativa directa y nativa en PHP para probar cualquiera de las 21 APIs sin errores de parseo externos. Al elegir la tabla se autocompleta su <code>secret_key</code> vigente de 4 días y puede filtrar con un clic por cédula de <strong>Alumno</strong> o de <strong>Docente</strong>.</p>
            </div>
        </div>

        <div class="playground-grid">
            <div class="playground-form">
                <div class="form-row">
                    <label for="pg-table">1. Seleccionar Tabla / Endpoint API</label>
                    <select id="pg-table" class="form-control-select" onchange="onChangePlaygroundTable()">
                        <option value="estudiante">api_estudiante.php — Expediente Consolidado 360°</option>
                        <?php foreach ($tablesMeta as $tName => $meta): ?>
                        <option value="<?php echo htmlspecialchars($tName); ?>" <?php echo ($tName === 'notas') ? 'selected' : ''; ?>>
                            <?php echo htmlspecialchars($meta['endpoint'] . ' — ' . $meta['titulo']); ?>
                        </option>
                        <?php endforeach; ?>
                    </select>
                </div>

                <div class="form-row">
                    <label for="pg-method">2. Método HTTP</label>
                    <select id="pg-method" class="form-control-select" onchange="onChangePlaygroundMethod()">
                        <option value="GET">GET — Consultar registros (filtrable por Cédula o ID)</option>
                        <option value="POST">POST — Crear nuevo registro o consultar vía JSON</option>
                        <option value="PUT">PUT — Actualizar registro existente por ID</option>
                        <option value="DELETE">DELETE — Eliminar registro por ID</option>
                    </select>
                </div>

                <div class="form-row">
                    <label for="pg-secret">3. Secret Key de esta API (Se actualiza cada 4 días)</label>
                    <input type="text" id="pg-secret" class="form-control-input" style="font-family:var(--font-mono);font-size:0.8rem;" readonly>
                </div>

                <div class="form-row" id="pg-row-cedula">
                    <label for="pg-cedula">4. Filtrar por N° de Cédula (Alumno o Docente)</label>
                    <input type="text" id="pg-cedula" class="form-control-input" value="1234567" placeholder="Ej: 1234567 (Alumno) o 5001438 (Docente) — vacío para todos">
                    <div class="quick-cedula-pills">
                        <button type="button" class="mini-chip alumno" onclick="setPlaygroundCedula('1234567')">Alumno: 1234567</button>
                        <button type="button" class="mini-chip alumno" onclick="setPlaygroundCedula('4852101')">Alumno: 4852101</button>
                        <button type="button" class="mini-chip docente" onclick="setPlaygroundCedula('5001438')">Docente: 5001438</button>
                        <button type="button" class="mini-chip docente" onclick="setPlaygroundCedula('2000002')">Docente: 2000002</button>
                        <button type="button" class="mini-chip" onclick="setPlaygroundCedula('')">Ver Todos (Sin filtro)</button>
                    </div>
                </div>

                <div class="form-row" id="pg-row-id" style="display:none;">
                    <label for="pg-id">ID / Clave Primaria del Registro</label>
                    <input type="text" id="pg-id" class="form-control-input" placeholder="Ej: 1">
                </div>

                <div class="form-row" id="pg-row-body" style="display:none;">
                    <label for="pg-body">Body JSON (para POST / PUT)</label>
                    <textarea id="pg-body" class="form-control-textarea"></textarea>
                </div>

                <button type="button" class="btn-action primary" style="width:100%;justify-content:center;padding:0.65rem 1rem;font-size:0.9rem;" onclick="ejecutarPeticionPlayground()">
                    <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polygon points="5 3 19 12 5 21 5 3"/></svg>
                    Ejecutar Petición en Vivo
                </button>
            </div>

            <div class="playground-output">
                <div class="output-toolbar">
                    <div>
                        <span id="pg-status-badge" class="role-tag role-ambos">Listo para probar</span>
                        <span id="pg-role-detected" class="role-tag" style="display:none;margin-left:0.4rem;"></span>
                        <span id="pg-time-label" style="font-size:0.78rem;color:#94a3b8;margin-left:0.5rem;"></span>
                    </div>
                    <div style="display:flex;gap:0.4rem;">
                        <button type="button" class="btn-action" onclick="copiarUrlPeticion()">Copiar URL Producción</button>
                        <button type="button" class="btn-action" onclick="copiarRespuestaJson()">Copiar JSON</button>
                    </div>
                </div>
                <div class="output-url-bar" id="pg-url-preview">https://uass.serviciostms.com/api_notas.php</div>
                <pre class="output-pre" id="pg-json-response">// Seleccione un endpoint y presione "Ejecutar Petición en Vivo" para inspeccionar el JSON devuelto.</pre>
            </div>
        </div>
    </section>

    <!-- APARTADO 1: SECRET KEYS POR API (ROTACIÓN CADA 4 DÍAS) -->
    <section id="apartado-secret-keys" class="section-block">
        <div class="section-header">
            <div>
                <h2>Secret Keys Vigentes por API (Actualización Automática cada 4 Días)</h2>
                <p>Cada endpoint exige su propio <code>secret_key</code> tanto en peticiones <code>GET</code> como en <code>POST</code>, <code>PUT</code> y <code>DELETE</code>. Ciclo vigente desde <strong><?php echo htmlspecialchars($windowInfo['valid_from']); ?></strong> hasta <strong><?php echo htmlspecialchars($windowInfo['expires_at']); ?></strong>.</p>
            </div>
            <div>
                <input type="search" id="filter-keys" class="search-input" placeholder="Buscar tabla o endpoint..." oninput="filtrarTablaKeys(this.value)">
            </div>
        </div>

        <div class="data-table-wrap">
            <table class="doc-table" id="tabla-secret-keys">
                <thead>
                    <tr>
                        <th>Tabla / Módulo</th>
                        <th>Ruta en Servidor (https://uass.serviciostms.com/)</th>
                        <th>Secret Key Activa (Válida por 4 Días)</th>
                        <th>Expira</th>
                        <th>Acciones Rápidas</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($allSecretKeys as $kId => $kItem): ?>
                    <tr data-search="<?php echo htmlspecialchars(strtolower($kId . ' ' . $kItem['api_name'])); ?>">
                        <td><strong><?php echo htmlspecialchars($kItem['tabla']); ?></strong></td>
                        <td><code class="mono-pill"><?php echo htmlspecialchars($kItem['url']); ?></code></td>
                        <td><code class="key-highlight" id="key-<?php echo htmlspecialchars($kId); ?>"><?php echo htmlspecialchars($kItem['secret_key']); ?></code></td>
                        <td><?php echo htmlspecialchars($kItem['expires_at']); ?></td>
                        <td>
                            <button type="button" class="btn-action primary" onclick="cargarEnPlayground('<?php echo htmlspecialchars($kId); ?>', '1234567')">
                                Probar en Consola (Alumno)
                            </button>
                            <button type="button" class="btn-action" onclick="cargarEnPlayground('<?php echo htmlspecialchars($kId); ?>', '5001438')">
                                Probar en Consola (Docente)
                            </button>
                            <button type="button" class="btn-action" onclick="copiarTexto('<?php echo htmlspecialchars($kItem['secret_key']); ?>', 'Secret Key de <?php echo htmlspecialchars($kItem['api_name']); ?> copiada')">
                                Copiar Key
                            </button>
                        </td>
                    </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </section>

    <!-- APARTADO 2: GUÍA GENERAL DE QUÉ RETORNA Y PARA QUÉ SIRVE CADA API -->
    <section id="guia-endpoints" class="section-block">
        <div class="section-header">
            <div>
                <h2>Guía General de Endpoints: Propósito, Métodos y Qué Retorna Cada API</h2>
                <p>Resumen de los 21 endpoints generados para el esquema <code>serviciostms_uass</code>. Todos soportan filtrado mediante <code>?cedula=&lt;numero_cedula&gt;</code> identificando automáticamente si pertenece a un <strong>Alumno</strong> o a un <strong>Docente</strong>.</p>
            </div>
        </div>

        <div class="data-table-wrap">
            <table class="doc-table">
                <thead>
                    <tr>
                        <th>Endpoint</th>
                        <th>Métodos HTTP</th>
                        <th>Rol en Body</th>
                        <th>¿Para qué sirve y cómo filtra por Cédula (Alumno vs. Docente)?</th>
                        <th>¿Qué retorna en el Body JSON?</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td><code class="mono-pill">/api_estudiante.php</code></td>
                        <td>
                            <span class="method-badge m-get">GET</span>
                            <span class="method-badge m-post">POST</span>
                        </td>
                        <td><span class="role-tag role-ambos">Alumno / Docente</span></td>
                        <td>Consulta de forma consolidada el expediente 360° de un alumno o la ficha de cátedras de un docente a partir de su número de cédula.</td>
                        <td>Objeto con <code>tipo_persona</code> (<code>"Alumno"</code> o <code>"Docente"</code>), <code>es_docente</code>, <code>es_alumno</code>, <code>resumen_kpi</code>, <code>pagos</code> y <code>materias</code>.</td>
                    </tr>
                    <?php foreach ($tablesMeta as $tName => $meta): 
                        $roleClass = ($meta['rol_natural'] === 'Alumno') ? 'role-alumno' : (($meta['rol_natural'] === 'Docente') ? 'role-docente' : 'role-ambos');
                    ?>
                    <tr>
                        <td><code class="mono-pill">/<?php echo htmlspecialchars($meta['endpoint']); ?></code></td>
                        <td>
                            <span class="method-badge m-get">GET</span>
                            <span class="method-badge m-post">POST</span>
                            <span class="method-badge m-put">PUT</span>
                            <span class="method-badge m-del">DELETE</span>
                        </td>
                        <td><span class="role-tag <?php echo $roleClass; ?>"><?php echo htmlspecialchars($meta['rol_natural']); ?></span></td>
                        <td><?php echo htmlspecialchars($meta['proposito']); ?></td>
                        <td><?php echo htmlspecialchars($meta['retorna']); ?> Columnas: <code><?php echo htmlspecialchars(implode(', ', $meta['columns'])); ?></code>.</td>
                    </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </section>

    <!-- APARTADO 3: CÉDULAS REALES DE PRUEBA (ALUMNOS Y DOCENTES) -->
    <section id="cedulas-prueba" class="section-block">
        <div class="section-header">
            <div>
                <h2>Directorio de Cédulas para Pruebas de Filtrado (Alumnos y Docentes)</h2>
                <p>Haga clic en <strong>Probar Cédula</strong> en cualquier fila para cargar automáticamente ese Alumno o Docente en la consola interactiva superior.</p>
            </div>
        </div>

        <div class="two-col-grid">
            <div class="sample-box">
                <h3>
                    <span>Cédulas de Alumnos (<code>tipo_persona: "Alumno"</code>)</span>
                    <span class="role-tag role-alumno">Tabla: estudiantes</span>
                </h3>
                <div class="data-table-wrap">
                    <table class="doc-table">
                        <thead>
                            <tr>
                                <th>Cédula</th>
                                <th>Nombre del Alumno</th>
                                <th>Matrícula</th>
                                <th>Acción</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($sampleAlumnos as $al): ?>
                            <tr>
                                <td><code class="key-highlight"><?php echo htmlspecialchars($al['numero_cedula']); ?></code></td>
                                <td><?php echo htmlspecialchars($al['nombre'] ? $al['nombre'] : 'Alumno #' . $al['id']); ?></td>
                                <td><code><?php echo htmlspecialchars($al['matricula']); ?></code></td>
                                <td>
                                    <button type="button" class="btn-action primary" onclick="setPlaygroundCedula('<?php echo htmlspecialchars($al['numero_cedula']); ?>'); document.getElementById('probador-nativo').scrollIntoView({behavior:'smooth'});">Probar Cédula</button>
                                </td>
                            </tr>
                            <?php endforeach; ?>
                        </tbody>
                    </table>
                </div>
            </div>

            <div class="sample-box">
                <h3>
                    <span>Cédulas de Docentes (<code>tipo_persona: "Docente"</code>)</span>
                    <span class="role-tag role-docente">Tabla: profesores</span>
                </h3>
                <div class="data-table-wrap">
                    <table class="doc-table">
                        <thead>
                            <tr>
                                <th>Cédula Docente</th>
                                <th>Nombre del Docente</th>
                                <th>Especialidad</th>
                                <th>Acción</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($sampleDocentes as $doc): ?>
                            <tr>
                                <td><code class="key-highlight"><?php echo htmlspecialchars($doc['numero_cedula']); ?></code></td>
                                <td><?php echo htmlspecialchars($doc['nombre'] ? $doc['nombre'] : 'Docente #' . $doc['id']); ?></td>
                                <td><?php echo htmlspecialchars($doc['especialidad']); ?></td>
                                <td>
                                    <button type="button" class="btn-action primary" onclick="setPlaygroundCedula('<?php echo htmlspecialchars($doc['numero_cedula']); ?>'); document.getElementById('probador-nativo').scrollIntoView({behavior:'smooth'});">Probar Cédula</button>
                                </td>
                            </tr>
                            <?php endforeach; ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </section>

    <!-- APARTADO 4: ESPECIFICACIÓN OPENAPI 3.0 / SWAGGER UI -->
    <section id="consola-swagger" class="section-block">
        <div class="section-header">
            <div>
                <h2>Explorador Estándar OpenAPI 3.0 (Swagger UI)</h2>
                <p>Debajo se renderiza el estándar OpenAPI 3.0 completo desde <code>openapi.php</code> con todas las claves <code>secret_key</code> pre-configuradas.</p>
            </div>
            <div>
                <a href="openapi.php" target="_blank" class="btn-action">Abrir JSON OpenAPI (openapi.php)</a>
            </div>
        </div>
        <div id="swagger-ui"></div>
    </section>

</main>

<div id="toast-msg" class="toast-notice" role="status" aria-live="polite"></div>

<script src="https://unpkg.com/swagger-ui-dist@5.11.0/swagger-ui-bundle.js"></script>
<script>
    var SGUASS_CATALOG = <?php echo json_encode($catalogForJs); ?>;
    var SGUASS_PROD_DOMAIN = "https://uass.serviciostms.com";

    function onChangePlaygroundTable() {
        var t = document.getElementById('pg-table').value;
        var item = SGUASS_CATALOG[t];
        if (!item) return;
        document.getElementById('pg-secret').value = item.secret_key;

        // Preparar ejemplo de JSON para POST / PUT
        var sampleObj = {};
        if (item.defaults) {
            for (var k in item.defaults) {
                if (item.defaults.hasOwnProperty(k)) {
                    sampleObj[k] = item.defaults[k];
                }
            }
        }
        if (item.required_post) {
            for (var i = 0; i < item.required_post.length; i++) {
                var reqCol = item.required_post[i];
                if (typeof sampleObj[reqCol] === 'undefined' || sampleObj[reqCol] === null || sampleObj[reqCol] === '') {
                    sampleObj[reqCol] = 1;
                }
            }
        }
        document.getElementById('pg-body').value = JSON.stringify(sampleObj, null, 2);
        actualizarUrlPreview();
    }

    function onChangePlaygroundMethod() {
        var m = document.getElementById('pg-method').value;
        document.getElementById('pg-row-cedula').style.display = (m === 'GET' || m === 'POST') ? '' : 'none';
        document.getElementById('pg-row-id').style.display = (m === 'PUT' || m === 'DELETE' || m === 'GET') ? '' : 'none';
        document.getElementById('pg-row-body').style.display = (m === 'POST' || m === 'PUT') ? '' : 'none';
        actualizarUrlPreview();
    }

    function setPlaygroundCedula(ced) {
        document.getElementById('pg-cedula').value = ced;
        ejecutarPeticionPlayground();
    }

    function cargarEnPlayground(tableKey, cedula) {
        var sel = document.getElementById('pg-table');
        sel.value = tableKey;
        document.getElementById('pg-method').value = 'GET';
        document.getElementById('pg-cedula').value = cedula || '';
        onChangePlaygroundTable();
        onChangePlaygroundMethod();
        document.getElementById('probador-nativo').scrollIntoView({behavior: 'smooth'});
        ejecutarPeticionPlayground();
    }

    function construirQueryRelativa(includeBaseDomain) {
        var t = document.getElementById('pg-table').value;
        var item = SGUASS_CATALOG[t];
        var m = document.getElementById('pg-method').value;
        var sk = document.getElementById('pg-secret').value.trim();
        var ced = document.getElementById('pg-cedula').value.trim();
        var idVal = document.getElementById('pg-id').value.trim();

        var qs = ['secret_key=' + encodeURIComponent(sk)];
        if (ced !== '' && (m === 'GET' || m === 'POST')) {
            qs.push('cedula=' + encodeURIComponent(ced));
        }
        if (idVal !== '') {
            qs.push(encodeURIComponent(item.pk || 'id') + '=' + encodeURIComponent(idVal));
        }

        var prefix = includeBaseDomain ? (SGUASS_PROD_DOMAIN + '/') : './';
        return prefix + item.endpoint + '?' + qs.join('&');
    }

    function actualizarUrlPreview() {
        var m = document.getElementById('pg-method').value;
        document.getElementById('pg-url-preview').textContent = m + ' ' + construirQueryRelativa(true);
    }

    function ejecutarPeticionPlayground() {
        actualizarUrlPreview();
        var m = document.getElementById('pg-method').value;
        var urlLocal = construirQueryRelativa(false);
        var sk = document.getElementById('pg-secret').value.trim();
        var idVal = document.getElementById('pg-id').value.trim();
        var t = document.getElementById('pg-table').value;
        var item = SGUASS_CATALOG[t];

        var badge = document.getElementById('pg-status-badge');
        var roleBadge = document.getElementById('pg-role-detected');
        var timeLbl = document.getElementById('pg-time-label');
        var pre = document.getElementById('pg-json-response');

        badge.textContent = 'Ejecutando ' + m + '...';
        badge.className = 'role-tag role-ambos';
        roleBadge.style.display = 'none';
        var t0 = performance.now();

        var fetchOpts = {
            method: m,
            headers: {
                'X-Secret-Key': sk
            }
        };

        if (m === 'POST' || m === 'PUT') {
            fetchOpts.headers['Content-Type'] = 'application/json';
            var rawJson = document.getElementById('pg-body').value.trim();
            var parsed = {};
            try {
                parsed = rawJson ? JSON.parse(rawJson) : {};
            } catch (e) {
                alert('El Body JSON no tiene un formato válido: ' + e.message);
                return;
            }
            parsed.secret_key = sk;
            if (idVal !== '' && item.pk) {
                parsed[item.pk] = idVal;
            }
            fetchOpts.body = JSON.stringify(parsed);
        }

        fetch(urlLocal, fetchOpts)
            .then(function(res) {
                var elapsed = Math.round(performance.now() - t0);
                timeLbl.textContent = elapsed + ' ms';
                badge.textContent = 'HTTP ' + res.status;
                badge.className = (res.status >= 200 && res.status < 300) ? 'role-tag role-alumno' : 'role-tag role-docente';
                return res.text();
            })
            .then(function(text) {
                try {
                    var json = JSON.parse(text);
                    if (json.tipo_persona) {
                        roleBadge.style.display = 'inline-block';
                        roleBadge.textContent = 'tipo_persona: ' + json.tipo_persona;
                        roleBadge.className = (json.tipo_persona.indexOf('Docente') !== -1) ? 'role-tag role-docente' : 'role-tag role-alumno';
                    }
                    pre.textContent = JSON.stringify(json, null, 2);
                } catch (err) {
                    pre.textContent = text;
                }
            })
            .catch(function(err) {
                badge.textContent = 'Error de Red';
                pre.textContent = String(err);
            });
    }

    function copiarUrlPeticion() {
        var url = construirQueryRelativa(true);
        copiarTexto(url, 'URL de producción copiada');
    }

    function copiarRespuestaJson() {
        var txt = document.getElementById('pg-json-response').textContent;
        copiarTexto(txt, 'Respuesta JSON copiada');
    }

    window.addEventListener('DOMContentLoaded', function() {
        onChangePlaygroundTable();
        onChangePlaygroundMethod();
        ejecutarPeticionPlayground();

        window.ui = SwaggerUIBundle({
            url: './openapi.php',
            dom_id: '#swagger-ui',
            deepLinking: true,
            docExpansion: 'list',
            filter: true,
            tryItOutEnabled: true
        });
    });

    function mostrarToast(texto) {
        var el = document.getElementById('toast-msg');
        el.textContent = texto;
        el.classList.add('show');
        clearTimeout(window._toastTimer);
        window._toastTimer = setTimeout(function() {
            el.classList.remove('show');
        }, 2600);
    }

    function copiarTexto(texto, msg) {
        if (navigator.clipboard && navigator.clipboard.writeText) {
            navigator.clipboard.writeText(texto).then(function() {
                mostrarToast(msg || 'Copiado al portapapeles');
            });
        } else {
            var ta = document.createElement('textarea');
            ta.value = texto;
            document.body.appendChild(ta);
            ta.select();
            document.execCommand('copy');
            document.body.removeChild(ta);
            mostrarToast(msg || 'Copiado al portapapeles');
        }
    }

    function filtrarTablaKeys(q) {
        var term = (q || '').toLowerCase().trim();
        var rows = document.querySelectorAll('#tabla-secret-keys tbody tr');
        for (var i = 0; i < rows.length; i++) {
            var hay = rows[i].getAttribute('data-search') || '';
            rows[i].style.display = (term === '' || hay.indexOf(term) !== -1) ? '' : 'none';
        }
    }

    function ejecutarDaemonAhora() {
        var lbl = document.getElementById('sync-status-label');
        lbl.textContent = 'Sincronizando...';
        fetch('./sguass_daemon.php')
            .then(function(r) { return r.json(); })
            .then(function(data) {
                if (data && data.success && data.resultado) {
                    lbl.textContent = 'Última: ' + data.resultado.sincronizado_en;
                    mostrarToast('Sincronizado con éxito (' + data.resultado.tablas_sincronizadas + ' tablas, ' + data.resultado.alumnos_procesados + ' alumnos, ' + data.resultado.docentes_procesados + ' docentes)');
                } else {
                    lbl.textContent = 'Error al sincronizar';
                }
            })
            .catch(function() {
                lbl.textContent = 'Error de red';
            });
    }

    // Auto-refresco silencioso del daemon cada 10 minutos (600,000 ms)
    setInterval(ejecutarDaemonAhora, 600000);
</script>
</body>
</html>
