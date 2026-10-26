<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SGUASS - Ficha Integral del Estudiante</title>
    <!-- Bootstrap 3.4 y FontAwesome -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <style>
        :root {
            --primary: #0f172a;
            --accent: #2563eb;
            --success: #10b981;
            --danger: #ef4444;
            --warning: #f59e0b;
            --surface: #ffffff;
            --border: #e2e8f0;
        }
        body {
            background-color: #f1f5f9;
            font-family: -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial, sans-serif;
            color: #1e293b;
            padding-bottom: 50px;
        }
        .navbar-brand-custom {
            font-weight: 800;
            letter-spacing: -0.5px;
            color: #fff !important;
            font-size: 19px;
        }
        .main-card {
            background: var(--surface);
            border-radius: 12px;
            border: 1px solid var(--border);
            box-shadow: 0 4px 18px rgba(0,0,0,0.04);
            margin-bottom: 25px;
            overflow: hidden;
        }
        .search-hero {
            background: linear-gradient(135deg, #0f172a 0%, #1e293b 100%);
            color: #fff;
            padding: 30px;
            border-radius: 12px;
            margin-bottom: 25px;
            box-shadow: 0 8px 24px rgba(15,23,42,0.18);
        }
        .search-box {
            position: relative;
            max-width: 600px;
            margin: 15px 0 10px 0;
        }
        .search-input {
            height: 52px;
            border-radius: 30px;
            padding-left: 24px;
            padding-right: 140px;
            font-size: 16px;
            border: 2px solid rgba(255,255,255,0.2);
            background: rgba(255,255,255,0.95);
            color: #0f172a;
            box-shadow: 0 4px 15px rgba(0,0,0,0.1);
        }
        .search-input:focus {
            border-color: #60a5fa;
            background: #ffffff;
            outline: none;
            box-shadow: 0 0 0 3px rgba(96,165,250,0.3);
        }
        .search-btn {
            position: absolute;
            right: 5px;
            top: 5px;
            height: 42px;
            border-radius: 25px;
            padding: 0 25px;
            background: #2563eb;
            color: #fff;
            font-weight: 700;
            border: none;
            transition: all 0.2s;
        }
        .search-btn:hover {
            background: #1d4ed8;
        }
        .test-badges .btn-tag {
            background: rgba(255,255,255,0.15);
            color: #e2e8f0;
            border: 1px solid rgba(255,255,255,0.25);
            border-radius: 15px;
            padding: 2px 10px;
            font-size: 11px;
            margin-right: 5px;
            cursor: pointer;
            transition: background 0.2s;
        }
        .test-badges .btn-tag:hover {
            background: rgba(255,255,255,0.3);
            color: #fff;
        }
        /* Dossier Header */
        .dossier-header {
            padding: 25px;
            border-bottom: 1px solid var(--border);
            display: flex;
            align-items: center;
            justify-content: space-between;
            background: #ffffff;
        }
        .student-avatar {
            width: 72px;
            height: 72px;
            background: linear-gradient(135deg, #2563eb 0%, #1e40af 100%);
            color: #fff;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 28px;
            font-weight: 800;
            box-shadow: 0 4px 12px rgba(37,99,235,0.25);
            margin-right: 20px;
        }
        .kpi-row {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(210px, 1fr));
            gap: 15px;
            padding: 20px 25px;
            background: #f8fafc;
            border-bottom: 1px solid var(--border);
        }
        .kpi-card {
            background: #fff;
            border: 1px solid var(--border);
            border-radius: 10px;
            padding: 15px;
            display: flex;
            align-items: center;
            gap: 12px;
        }
        .kpi-icon {
            width: 44px;
            height: 44px;
            border-radius: 10px;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 20px;
        }
        .kpi-val {
            font-size: 18px;
            font-weight: 800;
            color: #0f172a;
            line-height: 1.2;
        }
        .kpi-lbl {
            font-size: 11px;
            font-weight: 600;
            color: #64748b;
            text-transform: uppercase;
        }
        /* Tabs */
        .nav-tabs-custom {
            padding: 0 25px;
            background: #ffffff;
            border-bottom: 1px solid var(--border);
        }
        .nav-tabs-custom > li > a {
            font-weight: 700;
            color: #64748b;
            border: none;
            border-bottom: 3px solid transparent;
            padding: 14px 18px;
        }
        .nav-tabs-custom > li.active > a,
        .nav-tabs-custom > li.active > a:focus,
        .nav-tabs-custom > li.active > a:hover {
            color: #2563eb;
            border: none;
            border-bottom: 3px solid #2563eb;
            background: transparent;
        }
        .tab-content-custom {
            padding: 25px;
        }
        .source-tag {
            font-size: 11px;
            color: #64748b;
            margin-top: 4px;
        }
        @media print {
            .no-print, .search-hero { display: none !important; }
            body { background: #fff; padding: 0; }
            .main-card { border: none; box-shadow: none; }
            .tab-pane { display: block !important; opacity: 1 !important; margin-bottom: 30px; }
        }
    </style>
</head>
<body>

<nav class="navbar navbar-inverse navbar-static-top no-print" style="background:#0f172a; border:none;">
    <div class="container">
        <div class="navbar-header">
            <span class="navbar-brand navbar-brand-custom">
                <i class="fa fa-university" style="color:#60a5fa;"></i> SGUASS &bull; Ficha de Legajo Estudiantil
            </span>
        </div>
        <div class="navbar-right" style="padding-top:12px; margin-right:5px;">
            <a href="menu.php" class="btn btn-sm btn-default" style="border-radius:20px; font-weight:600;"><i class="fa fa-home"></i> Menú Principal</a>
            <button class="btn btn-sm btn-info" id="btnSyncDb" style="border-radius:20px; font-weight:600; margin-left:5px;"><i class="fa fa-refresh"></i> Sincronizar Caché</button>
        </div>
    </div>
</nav>

<div class="container">
    <!-- Buscador Superior -->
    <div class="search-hero no-print">
        <h3 style="font-weight:800; margin:0 0 5px 0;">Consultar Ficha y Estado Académico-Financiero</h3>
        <p style="color:#94a3b8; font-size:13px; margin-bottom:15px;">Ingrese el número de Cédula de Identidad para recuperar de forma instantánea el legajo oficial del estudiante desde el middleware SQLite.</p>
        
        <div class="search-box">
            <input type="text" id="inputCedula" class="form-control search-input" placeholder="Ej: 1234567, 4852101, 5012398..." autocomplete="off">
            <button class="search-btn" id="btnBuscar"><i class="fa fa-search"></i> Consultar</button>
        </div>

        <div class="test-badges" style="margin-top:10px;">
            <span style="font-size:12px; color:#cbd5e1; margin-right:8px;">Cédulas de prueba rápida:</span>
            <span class="btn-tag" onclick="quickSearch('1234567')">1234567 (ALU-001)</span>
            <span class="btn-tag" onclick="quickSearch('4852101')">4852101 (INF)</span>
            <span class="btn-tag" onclick="quickSearch('5012398')">5012398 (MED)</span>
            <span class="btn-tag" onclick="quickSearch('4203987')">4203987 (ADM)</span>
        </div>
    </div>

    <!-- Spinner de Carga -->
    <div id="loader" class="text-center" style="display:none; padding:40px;">
        <i class="fa fa-spinner fa-spin" style="font-size:40px; color:#2563eb;"></i>
        <p style="margin-top:10px; font-weight:600; color:#64748b;">Consultando middleware SQLite / MariaDB...</p>
    </div>

    <!-- Alerta de Notificación -->
    <div id="alertMsg" class="alert alert-danger" style="display:none; border-radius:8px;"></div>
    <div id="successMsg" class="alert alert-success" style="display:none; border-radius:8px;"></div>

    <!-- Ficha de Datos Consolidada -->
    <div id="dossierContainer" class="main-card" style="display:none;">
        <!-- Cabecera del Dossier -->
        <div class="dossier-header">
            <div style="display:flex; align-items:center;">
                <div class="student-avatar" id="txtAvatar">A</div>
                <div>
                    <h3 style="margin:0 0 4px 0; font-weight:800; color:#0f172a;" id="txtNombre">Cargando Nombre...</h3>
                    <div style="color:#64748b; font-size:13px;">
                        <span><i class="fa fa-id-card-o"></i> C.I.: <strong id="txtCedula" style="color:#0f172a;">-</strong></span> &bull; 
                        <span>Matrícula: <strong id="txtMatricula" style="color:#0f172a;">-</strong></span> &bull; 
                        <span id="txtCarrera" style="color:#2563eb; font-weight:700;">-</span>
                    </div>
                    <div class="source-tag" id="txtOrigen">Origen: SQLite Cache</div>
                </div>
            </div>
            <div class="no-print">
                <button class="btn btn-default" onclick="window.print()" style="font-weight:700; border-radius:6px;"><i class="fa fa-print"></i> Imprimir Legajo</button>
            </div>
        </div>

        <!-- Fila de Tarjetas KPI -->
        <div class="kpi-row">
            <div class="kpi-card">
                <div class="kpi-icon" style="background:#fee2e2; color:#ef4444;"><i class="fa fa-money"></i></div>
                <div>
                    <div class="kpi-lbl">Deuda Total / Mora</div>
                    <div class="kpi-val" id="kpiDeuda">Gs. 0</div>
                    <small id="kpiEstadoFin" class="label label-success">Al Día</small>
                </div>
            </div>
            <div class="kpi-card">
                <div class="kpi-icon" style="background:#dcfce7; color:#10b981;"><i class="fa fa-calendar-check-o"></i></div>
                <div>
                    <div class="kpi-lbl">Asistencia Global</div>
                    <div class="kpi-val" id="kpiAsistencia">100%</div>
                    <small id="kpiAsisSub" style="color:#64748b; font-size:11px;">0/0 clases</small>
                </div>
            </div>
            <div class="kpi-card">
                <div class="kpi-icon" style="background:#e0e7ff; color:#4338ca;"><i class="fa fa-graduation-cap"></i></div>
                <div>
                    <div class="kpi-lbl">Promedio Calificación</div>
                    <div class="kpi-val" id="kpiPromedio">0.00 / 5.00</div>
                    <small style="color:#64748b; font-size:11px;">Escala institucional</small>
                </div>
            </div>
            <div class="kpi-card">
                <div class="kpi-icon" style="background:#fef3c7; color:#d97706;"><i class="fa fa-book"></i></div>
                <div>
                    <div class="kpi-lbl">Materias Cursando</div>
                    <div class="kpi-val" id="kpiMaterias">0</div>
                    <small style="color:#64748b; font-size:11px;">Inscripciones registradas</small>
                </div>
            </div>
        </div>

        <!-- Pestañas de Detalle -->
        <ul class="nav nav-tabs nav-tabs-custom no-print">
            <li class="active"><a data-toggle="tab" href="#tabFinanciero"><i class="fa fa-credit-card"></i> Cuenta Corriente y Cuotas (<span id="cntPagos">0</span>)</a></li>
            <li><a data-toggle="tab" href="#tabAcademico"><i class="fa fa-list-alt"></i> Cátedras y Libreta de Calificaciones (<span id="cntMaterias">0</span>)</a></li>
        </ul>

        <div class="tab-content tab-content-custom">
            <!-- Pestaña 1: Pagos -->
            <div id="tabFinanciero" class="tab-pane fade in active">
                <h4 style="font-weight:700; color:#334155; margin-bottom:15px;"><i class="fa fa-file-text-o"></i> Detalle de Pagos, Cuotas y Aranceles</h4>
                <div class="table-responsive">
                    <table class="table table-bordered table-striped" style="font-size:13px;">
                        <thead>
                            <tr style="background:#f8fafc; color:#475569;">
                                <th>Concepto</th>
                                <th>Nro. Cuota</th>
                                <th>Período</th>
                                <th>Vencimiento</th>
                                <th class="text-right">Monto Base</th>
                                <th class="text-right">Mora (2%)</th>
                                <th class="text-right">Total</th>
                                <th class="text-center">Estado</th>
                            </tr>
                        </thead>
                        <tbody id="tbodyPagos"></tbody>
                    </table>
                </div>
            </div>

            <!-- Pestaña 2: Materias y Notas -->
            <div id="tabAcademico" class="tab-pane fade">
                <h4 style="font-weight:700; color:#334155; margin-bottom:15px;"><i class="fa fa-trophy"></i> Planilla Oficial de Cátedras y Calificaciones</h4>
                <div class="table-responsive">
                    <table class="table table-bordered table-striped" style="font-size:12px;">
                        <thead>
                            <tr style="background:#0f172a; color:#fff;">
                                <th>Materia / Cátedra</th>
                                <th>Docente</th>
                                <th class="text-center">Sem.</th>
                                <th class="text-center">1° Par (15)</th>
                                <th class="text-center">2° Par (15)</th>
                                <th class="text-center">TP (10)</th>
                                <th class="text-center">Asis (5)</th>
                                <th class="text-center">Proceso (40)</th>
                                <th class="text-center">Final (60)</th>
                                <th class="text-center">Nota (1-5)</th>
                                <th class="text-center">Estado</th>
                            </tr>
                        </thead>
                        <tbody id="tbodyMaterias"></tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
<script>
function quickSearch(ced) {
    $("#inputCedula").val(ced);
    consultarEstudiante();
}

$("#btnBuscar").on("click", consultarEstudiante);
$("#inputCedula").on("keypress", function(e){
    if (e.which === 13) consultarEstudiante();
});

$("#btnSyncDb").on("click", function(){
    var btn = $(this);
    btn.prop("disabled", true).html('<i class="fa fa-spinner fa-spin"></i> Sincronizando...');
    $.ajax({
        url: "sguass_daemon.php",
        dataType: "json",
        success: function(resp) {
            btn.prop("disabled", false).html('<i class="fa fa-refresh"></i> Sincronizar Caché');
            $("#successMsg").html('<i class="fa fa-check-circle"></i> Sincronización exitosa: ' + (resp.alumnos_procesados || 0) + ' estudiantes procesados y cacheados en SQLite.').show();
            setTimeout(function(){ $("#successMsg").fadeOut(); }, 5000);
            if ($("#inputCedula").val().trim()) {
                consultarEstudiante();
            }
        },
        error: function() {
            btn.prop("disabled", false).html('<i class="fa fa-refresh"></i> Sincronizar Caché');
            alert("Error al ejecutar la sincronización.");
        }
    });
});

function consultarEstudiante() {
    var ced = $("#inputCedula").val().trim();
    if (!ced) {
        alert("Por favor ingrese una cédula.");
        return;
    }

    $("#alertMsg").hide();
    $("#successMsg").hide();
    $("#dossierContainer").hide();
    $("#loader").show();

    $.ajax({
        url: "api_estudiante.php",
        type: "GET",
        data: { cedula: ced },
        dataType: "json",
        success: function(resp) {
            $("#loader").hide();
            if (!resp.success || !resp.data) {
                $("#alertMsg").html('<i class="fa fa-exclamation-triangle"></i> ' + (resp.message || 'No se encontró al estudiante.')).show();
                return;
            }
            renderizarFicha(resp.data);
        },
        error: function(err) {
            $("#loader").hide();
            $("#alertMsg").html('<i class="fa fa-times-circle"></i> Error de conexión con el endpoint API.').show();
        }
    });
}

function renderizarFicha(d) {
    var est = d.estudiante;
    var kpi = d.resumen_kpi;

    // Encabezado
    $("#txtNombre").text(est.nombre);
    $("#txtCedula").text(est.cedula);
    $("#txtMatricula").text(est.matricula);
    $("#txtCarrera").text(est.carrera || 'Sin Carrera Asignada');
    $("#txtAvatar").text(est.nombre ? est.nombre.charAt(0).toUpperCase() : 'A');
    $("#txtOrigen").text(d.source === 'sqlite_cache' ? '⚡ Servido desde SQLite Middleware (< 3ms)' : '🔄 Sincronizado en vivo desde MariaDB');

    // KPIs
    $("#kpiDeuda").text("Gs. " + Number(kpi.total_deuda).toLocaleString('es-PY'));
    $("#kpiEstadoFin").text(kpi.estado_financiero)
        .removeClass("label-success label-danger label-warning")
        .addClass(kpi.total_deuda > 0 ? "label-danger" : "label-success");

    $("#kpiAsistencia").text(kpi.asistencia_porc + "%");
    $("#kpiAsisSub").text((kpi.clases_presente || 0) + "/" + (kpi.total_clases || 0) + " clases");

    $("#kpiPromedio").text((kpi.promedio_general || 0) + " / 5.00");
    $("#kpiMaterias").text(kpi.materias_cursando);

    // Tabla Pagos
    var tbP = $("#tbodyPagos").empty();
    var pagos = d.pagos || [];
    $("#cntPagos").text(pagos.length);

    if (pagos.length === 0) {
        tbP.html('<tr><td colspan="8" class="text-center text-muted" style="padding:20px;">Sin obligaciones registradas.</td></tr>');
    } else {
        pagos.forEach(function(p){
            var badge = p.estado === 'Pagado' ? '<span class="label label-success">Pagado</span>' : (p.estado === 'Vencido' ? '<span class="label label-danger">Vencido</span>' : '<span class="label label-warning">Pendiente</span>');
            tbP.append('<tr>' +
                '<td><strong>' + p.concepto + '</strong></td>' +
                '<td>' + p.nro_cuota + '</td>' +
                '<td>' + p.periodo + '</td>' +
                '<td>' + (p.vencimiento || '-') + '</td>' +
                '<td class="text-right">Gs. ' + Number(p.monto_base).toLocaleString('es-PY') + '</td>' +
                '<td class="text-right" style="color:' + (p.mora > 0 ? '#ef4444' : '#64748b') + '; font-weight:' + (p.mora > 0 ? '700' : 'normal') + ';">Gs. ' + Number(p.mora).toLocaleString('es-PY') + '</td>' +
                '<td class="text-right"><strong>Gs. ' + Number(p.total).toLocaleString('es-PY') + '</strong></td>' +
                '<td class="text-center">' + badge + '</td>' +
            '</tr>');
        });
    }

    // Tabla Materias y Calificaciones
    var tbM = $("#tbodyMaterias").empty();
    var materias = d.materias || [];
    $("#cntMaterias").text(materias.length);

    if (materias.length === 0) {
        tbM.html('<tr><td colspan="11" class="text-center text-muted" style="padding:20px;">No tiene inscripciones activas este semestre.</td></tr>');
    } else {
        materias.forEach(function(m){
            var badgeCalif = m.calificacion > 0 ? '<span class="badge" style="background:#2563eb; font-size:12px;">' + m.calificacion + '</span>' : '<span class="text-muted">-</span>';
            var colProc = m.habilitado ? '#10b981' : '#ef4444';
            tbM.append('<tr>' +
                '<td><strong>' + m.materia + '</strong></td>' +
                '<td>' + m.docente + '</td>' +
                '<td class="text-center">' + m.semestre + '</td>' +
                '<td class="text-center">' + m.parcial_1 + '</td>' +
                '<td class="text-center">' + m.parcial_2 + '</td>' +
                '<td class="text-center">' + m.trabajo_practico + '</td>' +
                '<td class="text-center">' + m.asistencia_puntos + '</td>' +
                '<td class="text-center"><strong style="color:' + colProc + ';">' + m.total_proceso + '</strong></td>' +
                '<td class="text-center">' + m.examen_final + '</td>' +
                '<td class="text-center">' + badgeCalif + '</td>' +
                '<td class="text-center"><span class="label label-default" style="font-size:10px;">' + m.estado + '</span></td>' +
            '</tr>');
        });
    }

    $("#dossierContainer").fadeIn();
}
</script>
</body>
</html>
