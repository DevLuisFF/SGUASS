<?php
class eventsBase
{
	var $events = array();
	var $maps = array();
	function exists($event, $table = "")
	{
		if($table == "")
			return (array_key_exists($event,$this->events)!==FALSE);
		else
			return isset($this->events[$event]) && isset($this->events[$event][$table]);
	}

	function existsMap($page)
	{
		return (array_key_exists($page,$this->maps)!==FALSE);
	}
}

class class_GlobalEvents extends eventsBase
{
	function __construct()
	{
	// fill list of events
		$this->events["AfterSuccessfulLogin"]=true;


//	onscreen events
		$this->events["acciones_rapidas"] = true;



		}

//	handlers

		
		
		
		
		
		
				// After successful login
function AfterSuccessfulLogin($username, $password, &$data, &$pageObject)
{

		// 1. Inicialización y captura segura de identidad
    $user = trim(Security::getUserName());
    $userEsc = db_addslashes($user);
    
    $_SESSION["rol"] = "Invitado";
    $_SESSION["profesor_id"] = 0;
    $_SESSION["estudiante_id"] = 0;
    // 2. Determinación de Rol con tolerancia a mayúsculas/minúsculas
    if (Security::isAdmin() || strtolower($user) === 'admin') {
        $_SESSION["rol"] = "Admin";
        return;
    }
    // Consulta de grupo de seguridad del usuario
    $sqlRol = "SELECT g.Label 
               FROM sgui_ugmembers m 
               INNER JOIN sgui_uggroups g ON g.GroupID = m.GroupID 
               WHERE LOWER(m.UserName) = LOWER('" . $userEsc . "') 
               ORDER BY g.GroupID ASC LIMIT 1";
    $rsRol = DB::Query($sqlRol);
    if ($rowRol = $rsRol->fetchAssoc()) {
        $_SESSION["rol"] = trim($rowRol["Label"]);
    }
    // 3. Resolución de Entidad Académica según el Rol
    if ($_SESSION["rol"] === 'Docente') {
        $sqlProf = "SELECT p.id 
                    FROM profesores p 
                    INNER JOIN usuarios u ON u.id = p.usuario_id 
                    WHERE LOWER(u.email) = LOWER('" . $userEsc . "') 
                       OR LOWER(u.nombre) = LOWER('" . $userEsc . "') LIMIT 1";
        $rsProf = DB::Query($sqlProf);
        if ($rProf = $rsProf->fetchAssoc()) {
            $_SESSION["profesor_id"] = (int)$rProf["id"];
        }
    } elseif ($_SESSION["rol"] === 'Alumno') {
        $sqlEst = "SELECT e.id 
                   FROM estudiantes e 
                   INNER JOIN usuarios u ON u.id = e.usuario_id 
                   WHERE LOWER(u.email) = LOWER('" . $userEsc . "') 
                      OR LOWER(u.nombre) = LOWER('" . $userEsc . "') LIMIT 1";
        $rsEst = DB::Query($sqlEst);
        if ($rEst = $rsEst->fetchAssoc()) {
            $_SESSION["estudiante_id"] = (int)$rEst["id"];
        }
    }
;		
} // function AfterSuccessfulLogin

		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		

//	onscreen events
	function event_acciones_rapidas(&$params)
	{
	// ============================================================================
// DASHBOARD OPERATIVO MULTI-ROL SGUASS (PHPRunner 10.0)
// Tema: Bootswatch Flatly | Estilo: Limpio y Minimalista (Sin Iconos)
// ============================================================================

// --- Helpers seguros para evitar Fatal Error en fetchAssoc() ---
if (!function_exists('sguass_fetch_one')) {
    function sguass_fetch_one($sql, $default = array()) {
        $rs = DB::Query($sql);
        if ($rs && is_object($rs)) {
            $row = $rs->fetchAssoc();
            if ($row !== false && is_array($row)) {
                return $row;
            }
        }
        return $default;
    }
}

if (!function_exists('sguass_fetch_all')) {
    function sguass_fetch_all($sql) {
        $out = array();
        $rs = DB::Query($sql);
        if ($rs && is_object($rs)) {
            while ($row = $rs->fetchAssoc()) {
                $out[] = $row;
            }
        }
        return $out;
    }
}

$currentUser = Security::getUserName();
$userEsc = db_addslashes($currentUser);
$isAdmin = Security::isAdmin() || (strtolower($currentUser) === 'admin');

// 1. Detección de Rol y Entidad Asociada (Ajustado al esquema real)
$rol = 'Secretaria';
$entidadId = 0;
$nombreMostrar = $currentUser;

// Consulta de grupos en sgui_ugmembers
$grupos = array();
$rowsGrp = sguass_fetch_all("SELECT g.Label FROM sgui_ugmembers m 
                             JOIN sgui_uggroups g ON m.GroupID = g.GroupID 
                             WHERE m.UserName = '$userEsc'");
foreach ($rowsGrp as $r) {
    if (!empty($r['Label'])) {
        $grupos[] = strtolower(trim($r['Label']));
    }
}

// Verificar si pertenece al grupo admin (-1) en sgui_ugmembers
$chkAdminGrp = sguass_fetch_one("SELECT COUNT(*) AS c FROM sgui_ugmembers WHERE UserName = '$userEsc' AND GroupID = -1", array('c' => 0));
if ((int)$chkAdminGrp['c'] > 0) {
    $isAdmin = true;
}

// Vinculación con la tabla real `usuarios` (columnas: id, nombre, email, activo)
$uRow = sguass_fetch_one("SELECT id, nombre, email FROM usuarios WHERE email = '$userEsc' OR nombre = '$userEsc' LIMIT 1");
if (!empty($uRow)) {
    $nombreMostrar = !empty($uRow['nombre']) ? $uRow['nombre'] : $currentUser;
    $userId = (int)$uRow['id'];

    if ($isAdmin || in_array('administrador', $grupos)) {
        $rol = 'Administrador';
    } else {
        $dRow = sguass_fetch_one("SELECT id FROM profesores WHERE usuario_id = $userId LIMIT 1");
        if (!empty($dRow)) {
            $rol = 'Docente';
            $entidadId = (int)$dRow['id'];
        } else {
            $aRow = sguass_fetch_one("SELECT id FROM estudiantes WHERE usuario_id = $userId LIMIT 1");
            if (!empty($aRow)) {
                $rol = 'Alumno';
                $entidadId = (int)$aRow['id'];
            } else {
                if (in_array('docente', $grupos)) $rol = 'Docente';
                elseif (in_array('alumno', $grupos) || in_array('estudiante', $grupos)) $rol = 'Alumno';
                else $rol = 'Secretaria';
            }
        }
    }
} elseif ($isAdmin) {
    $rol = 'Administrador';
}

// Periodo activo de referencia
$perRow = sguass_fetch_one("SELECT id, nombre FROM periodos WHERE activo = 'Sí' ORDER BY id DESC LIMIT 1", array('id' => 0, 'nombre' => 'General'));
$periodoNombre = $perRow['nombre'];

// 2. Estilos CSS Flatly Minimalista (Sin iconos) + Apache ECharts
echo '<script src="https://cdn.jsdelivr.net/npm/echarts@5.5.0/dist/echarts.min.js"></script>' . "\n";
echo '<style>
.sguass-dash {
    font-family: var(--bs-body-font-family, "Lato", -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, sans-serif);
    color: var(--bs-body-color, #212529);
    margin-bottom: 2.5rem;
}
.sguass-header {
    background-color: var(--bs-primary, #2c3e50);
    border-radius: var(--bs-border-radius-lg, 0.5rem);
    padding: 1.5rem 2rem;
    color: #ffffff;
    display: flex;
    justify-content: space-between;
    align-items: center;
    flex-wrap: wrap;
    gap: 1rem;
    margin-bottom: 1.5rem;
    border-bottom: 4px solid var(--bs-success, #18bc9c);
}
.sguass-header h2 {
    margin: 0;
    font-size: 1.45rem;
    font-weight: 700;
    color: #ffffff;
    letter-spacing: -0.01em;
}
.sguass-header-sub {
    color: var(--bs-light, #ecf0f1);
    opacity: 0.85;
    font-size: 0.88rem;
    margin-top: 0.25rem;
}
.sguass-badge {
    background-color: rgba(255, 255, 255, 0.12);
    border: 1px solid rgba(255, 255, 255, 0.25);
    color: #ffffff;
    padding: 0.4rem 1rem;
    border-radius: var(--bs-border-radius, 0.375rem);
    font-size: 0.78rem;
    font-weight: 700;
    text-transform: uppercase;
    letter-spacing: 0.08em;
}
.sguass-kpi-grid {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(210px, 1fr));
    gap: 1rem;
    margin-bottom: 1.5rem;
}
.sguass-kpi-card {
    background: var(--bs-body-bg, #ffffff);
    border: 1px solid var(--bs-border-color, #dee2e6);
    border-left: 4px solid var(--bs-primary, #2c3e50);
    border-radius: var(--bs-border-radius, 0.375rem);
    padding: 1.15rem 1.35rem;
    box-shadow: var(--bs-box-shadow-sm, 0 0.125rem 0.25rem rgba(0,0,0,0.075));
    display: flex;
    flex-direction: column;
    justify-content: center;
}
.sguass-kpi-card.kpi-success { border-left-color: var(--bs-success, #18bc9c); }
.sguass-kpi-card.kpi-info    { border-left-color: var(--bs-info, #3498db); }
.sguass-kpi-card.kpi-warning { border-left-color: var(--bs-warning, #f39c12); }
.sguass-kpi-card.kpi-danger  { border-left-color: var(--bs-danger, #e74c3c); }

.sguass-kpi-lbl {
    font-size: 0.74rem;
    font-weight: 700;
    color: var(--bs-secondary, #95a5a6);
    text-transform: uppercase;
    letter-spacing: 0.06em;
    margin-bottom: 0.35rem;
}
.sguass-kpi-num {
    font-size: 1.55rem;
    font-weight: 700;
    color: var(--bs-primary, #2c3e50);
    line-height: 1.15;
}
.sguass-kpi-sub {
    font-size: 0.78rem;
    color: var(--bs-dark, #7b8a8b);
    margin-top: 0.3rem;
}
.sguass-actions-panel {
    background: var(--bs-body-bg, #ffffff);
    border: 1px solid var(--bs-border-color, #dee2e6);
    border-radius: var(--bs-border-radius, 0.375rem);
    padding: 1.25rem 1.5rem;
    margin-bottom: 1.5rem;
    box-shadow: var(--bs-box-shadow-sm, 0 0.125rem 0.25rem rgba(0,0,0,0.075));
}
.sguass-title-sec {
    font-size: 0.9rem;
    font-weight: 700;
    color: var(--bs-primary, #2c3e50);
    text-transform: uppercase;
    letter-spacing: 0.05em;
    margin-bottom: 1rem;
    padding-bottom: 0.55rem;
    border-bottom: 2px solid var(--bs-light, #ecf0f1);
    display: flex;
    justify-content: space-between;
    align-items: center;
}
.sguass-title-sec span.sub {
    font-size: 0.75rem;
    font-weight: 400;
    color: var(--bs-secondary, #95a5a6);
    text-transform: none;
    letter-spacing: 0;
}
.sguass-btn-grid {
    display: grid;
    grid-template-columns: repeat(auto-fill, minmax(185px, 1fr));
    gap: 0.75rem;
}
.sguass-btn-act {
    background: var(--bs-tertiary-bg, #f8f9fa);
    border: 1px solid var(--bs-border-color, #dee2e6);
    border-left: 3px solid var(--bs-primary, #2c3e50);
    color: var(--bs-primary, #2c3e50);
    padding: 0.75rem 1rem;
    border-radius: var(--bs-border-radius-sm, 0.25rem);
    display: flex;
    align-items: center;
    justify-content: space-between;
    text-decoration: none !important;
    font-weight: 700;
    font-size: 0.86rem;
    transition: all 0.15s ease-in-out;
}
.sguass-btn-act::after {
    content: "→";
    font-weight: 400;
    opacity: 0.45;
    transition: transform 0.15s ease;
}
.sguass-btn-act:hover {
    background: var(--bs-primary, #2c3e50) !important;
    color: #ffffff !important;
    border-color: var(--bs-primary, #2c3e50) !important;
}
.sguass-btn-act:hover::after {
    opacity: 1;
    transform: translateX(3px);
}
.sguass-btn-act.act-highlight-success {
    border-left-color: var(--bs-success, #18bc9c);
    background: var(--bs-success-bg-subtle, #d1f2eb);
    color: var(--bs-success-text-emphasis, #0a4b3e);
}
.sguass-btn-act.act-highlight-info {
    border-left-color: var(--bs-info, #3498db);
    background: var(--bs-info-bg-subtle, #d6eaf8);
    color: var(--bs-info-text-emphasis, #153d58);
}
.sguass-charts-grid {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(410px, 1fr));
    gap: 1.25rem;
}
@media (max-width: 576px) {
    .sguass-charts-grid { grid-template-columns: 1fr; }
}
.sguass-chart-card {
    background: var(--bs-body-bg, #ffffff);
    border: 1px solid var(--bs-border-color, #dee2e6);
    border-radius: var(--bs-border-radius, 0.375rem);
    padding: 1.25rem 1.35rem;
    box-shadow: var(--bs-box-shadow-sm, 0 0.125rem 0.25rem rgba(0,0,0,0.075));
}
.sguass-chart-box {
    width: 100%;
    height: 285px;
}
</style>';

echo '<div class="sguass-dash">';
echo '  <div class="sguass-header">
            <div>
                <h2>Bienvenido, ' . htmlspecialchars($nombreMostrar) . '</h2>
                <div class="sguass-header-sub">Sistema de Gesti&oacute;n Universitaria SGUASS &bull; Per&iacute;odo Activo: ' . htmlspecialchars($periodoNombre) . '</div>
            </div>
            <div class="sguass-badge">Rol: ' . htmlspecialchars($rol) . '</div>
        </div>';

// ============================================================================
// 3. RENDER POR ROL
// ============================================================================
if ($rol === 'Administrador') {

    // KPIs Administrativos (Esquema real)
    $qAlu = sguass_fetch_one("SELECT COUNT(e.id) AS c FROM estudiantes e JOIN usuarios u ON u.id = e.usuario_id WHERE u.activo = 'Sí'", array('c' => 0));
    $qDoc = sguass_fetch_one("SELECT COUNT(p.id) AS c FROM profesores p JOIN usuarios u ON u.id = p.usuario_id WHERE u.activo = 'Sí'", array('c' => 0));
    $qCur = sguass_fetch_one("SELECT COUNT(*) AS c FROM cursos WHERE estado = 'Activo'", array('c' => 0));
    $qCobrado = sguass_fetch_one("SELECT COALESCE(SUM(monto - descuento + multa_mora), 0) AS s, COUNT(*) AS c FROM pagos WHERE estado = 'Pagado'", array('s' => 0, 'c' => 0));
    $qDeuda = sguass_fetch_one("SELECT COALESCE(SUM(monto - descuento + multa_mora), 0) AS s, COUNT(*) AS c FROM pagos WHERE estado IN ('Pendiente', 'Vencido')", array('s' => 0, 'c' => 0));

    // Gráfica 1: Alumnos por Carrera
    $rowsCarr = sguass_fetch_all("SELECT c.nombre, COUNT(e.id) AS cant 
                                  FROM carreras c 
                                  LEFT JOIN estudiantes e ON e.carrera_id = c.id 
                                  WHERE c.estado = 'Activo' 
                                  GROUP BY c.id, c.nombre 
                                  ORDER BY cant DESC");
    $carrNames = array(); $carrVals = array();
    foreach ($rowsCarr as $r) {
        $carrNames[] = "'" . addslashes($r['nombre']) . "'";
        $carrVals[] = (int)$r['cant'];
    }

    // Gráfica 2: Estado Financiero por Estado de Pago (Gs.)
    $rowsFin = sguass_fetch_all("SELECT estado, COALESCE(SUM(monto - descuento + multa_mora), 0) AS total 
                                 FROM pagos GROUP BY estado");
    $finData = array();
    foreach ($rowsFin as $r) {
        $est = !empty($r['estado']) ? $r['estado'] : 'Sin Estado';
        $col = '#95a5a6';
        if ($est === 'Pagado') $col = '#18bc9c';
        elseif ($est === 'Pendiente') $col = '#f39c12';
        elseif ($est === 'Vencido') $col = '#e74c3c';
        $finData[] = "{ value: " . (int)$r['total'] . ", name: '" . addslashes($est) . "', itemStyle: { color: '$col' } }";
    }

    // Gráfica 3: Ocupación de Cursos (Inscritos vs Cupo Máximo)
    $rowsCupo = sguass_fetch_all("SELECT m.nombre AS materia, c.cupo, COUNT(i.id) AS inscritos 
                                  FROM cursos c 
                                  JOIN materias m ON m.id = c.materia_id 
                                  LEFT JOIN inscripciones i ON i.curso_id = c.id 
                                  WHERE c.estado = 'Activo' 
                                  GROUP BY c.id, m.nombre, c.cupo 
                                  ORDER BY inscritos DESC LIMIT 6");
    $cupoNames = array(); $cupoMax = array(); $cupoIns = array();
    foreach ($rowsCupo as $r) {
        $cupoNames[] = "'" . addslashes($r['materia']) . "'";
        $cupoMax[] = (int)$r['cupo'];
        $cupoIns[] = (int)$r['inscritos'];
    }

    // Gráfica 4: Situación Académica / Bloqueos en Notas
    $rowsNotas = sguass_fetch_all("SELECT COALESCE(NULLIF(TRIM(descripcion), ''), 'Sin Observación') AS desc_est, COUNT(*) AS cant 
                                   FROM notas GROUP BY desc_est ORDER BY cant DESC LIMIT 6");
    $notaNames = array(); $notaVals = array();
    foreach ($rowsNotas as $r) {
        $notaNames[] = "'" . addslashes($r['desc_est']) . "'";
        $notaVals[] = (int)$r['cant'];
    }

    echo '<div class="sguass-kpi-grid">
        <div class="sguass-kpi-card">
            <div class="sguass-kpi-lbl">Alumnos Activos</div>
            <div class="sguass-kpi-num">' . number_format((int)$qAlu['c']) . '</div>
            <div class="sguass-kpi-sub">Padr&oacute;n estudiantil vigente</div>
        </div>
        <div class="sguass-kpi-card kpi-info">
            <div class="sguass-kpi-lbl">Docentes Activos</div>
            <div class="sguass-kpi-num">' . number_format((int)$qDoc['c']) . '</div>
            <div class="sguass-kpi-sub">' . number_format((int)$qCur['c']) . ' cursos activos en aula</div>
        </div>
        <div class="sguass-kpi-card kpi-success">
            <div class="sguass-kpi-lbl">Recaudaci&oacute;n Total</div>
            <div class="sguass-kpi-num">Gs. ' . number_format((float)$qCobrado['s'], 0, ',', '.') . '</div>
            <div class="sguass-kpi-sub">' . number_format((int)$qCobrado['c']) . ' comprobantes pagados</div>
        </div>
        <div class="sguass-kpi-card kpi-danger">
            <div class="sguass-kpi-lbl">Pendiente y Vencido</div>
            <div class="sguass-kpi-num">Gs. ' . number_format((float)$qDeuda['s'], 0, ',', '.') . '</div>
            <div class="sguass-kpi-sub">' . number_format((int)$qDeuda['c']) . ' cuotas por cobrar</div>
        </div>
    </div>';

    // Acciones Rápidas intactas (Sin iconos)
    echo '<div class="sguass-actions-panel">
        <div class="sguass-title-sec">Acciones R&aacute;pidas de Administraci&oacute;n <span class="sub">Accesos directos a m&oacute;dulos</span></div>
        <div class="sguass-btn-grid">
            <a href="estudiantes_list.php" class="sguass-btn-act">Padr&oacute;n Alumnos</a>
            <a href="profesores_list.php" class="sguass-btn-act">N&oacute;mina Docentes</a>
            <a href="inscripciones_list.php" class="sguass-btn-act">Matr&iacute;culas</a>
            <a href="catedras_list.php" class="sguass-btn-act">Gesti&oacute;n C&aacute;tedras</a>
            <a href="cuotas_list.php" class="sguass-btn-act">Control de Cuotas</a>
            <a href="pagos_list.php" class="sguass-btn-act">Historial Pagos</a>
            <a href="usuarios_list.php" class="sguass-btn-act">Usuarios y Roles</a>
            <a href="auditoria_list.php" class="sguass-btn-act">Auditor&iacute;a Sistema</a>
        </div>
    </div>';

    echo '<div class="sguass-charts-grid">
        <div class="sguass-chart-card">
            <div class="sguass-title-sec">Distribuci&oacute;n de Alumnos por Carrera <span class="sub">Total matriculados</span></div>
            <div id="chart_admin_1" class="sguass-chart-box"></div>
        </div>
        <div class="sguass-chart-card">
            <div class="sguass-title-sec">Balance Financiero en Guaran&iacute;es <span class="sub">Pagado vs Pendiente / Vencido</span></div>
            <div id="chart_admin_2" class="sguass-chart-box"></div>
        </div>
        <div class="sguass-chart-card">
            <div class="sguass-title-sec">Ocupaci&oacute;n de Cursos Activos <span class="sub">Inscritos vs Cupo M&aacute;ximo</span></div>
            <div id="chart_admin_3" class="sguass-chart-box"></div>
        </div>
        <div class="sguass-chart-card">
            <div class="sguass-title-sec">Estado de Actas y Evaluaciones <span class="sub">Habilitaciones y bloqueos</span></div>
            <div id="chart_admin_4" class="sguass-chart-box"></div>
        </div>
    </div>';

    $jsCarrNames = implode(',', $carrNames);
    $jsCarrVals  = implode(',', $carrVals);
    $jsFinData   = implode(',', $finData);
    $jsCupoNames = implode(',', $cupoNames);
    $jsCupoMax   = implode(',', $cupoMax);
    $jsCupoIns   = implode(',', $cupoIns);
    $jsNotaNames = implode(',', $notaNames);
    $jsNotaVals  = implode(',', $notaVals);

    echo "<script>
    setTimeout(function() {
        var fontFamily = 'Lato, sans-serif';
        var c1 = echarts.init(document.getElementById('chart_admin_1'));
        c1.setOption({
            textStyle: { fontFamily: fontFamily },
            tooltip: { trigger: 'axis', axisPointer: { type: 'shadow' } },
            grid: { left: '3%', right: '5%', bottom: '3%', top: '5%', containLabel: true },
            xAxis: { type: 'value', splitLine: { lineStyle: { color: '#ecf0f1' } } },
            yAxis: { type: 'category', inverse: true, data: [$jsCarrNames], axisLabel: { color: '#2c3e50', fontWeight: 600 } },
            series: [{
                name: 'Alumnos',
                type: 'bar',
                barWidth: '55%',
                data: [$jsCarrVals],
                itemStyle: { color: '#2c3e50', borderRadius: [0, 4, 4, 0] },
                label: { show: true, position: 'right', color: '#2c3e50', fontWeight: 700 }
            }]
        });

        var c2 = echarts.init(document.getElementById('chart_admin_2'));
        c2.setOption({
            textStyle: { fontFamily: fontFamily },
            tooltip: { trigger: 'item', formatter: '{b}: Gs. {c} ({d}%)' },
            legend: { bottom: 0, textStyle: { color: '#2c3e50' } },
            series: [{
                type: 'pie',
                radius: ['42%', '70%'],
                center: ['50%', '44%'],
                itemStyle: { borderRadius: 4, borderColor: '#fff', borderWidth: 2 },
                label: { formatter: '{b}\\n{d}%', color: '#2c3e50' },
                data: [$jsFinData]
            }]
        });

        var c3 = echarts.init(document.getElementById('chart_admin_3'));
        c3.setOption({
            textStyle: { fontFamily: fontFamily },
            tooltip: { trigger: 'axis', axisPointer: { type: 'shadow' } },
            legend: { bottom: 0 },
            grid: { left: '3%', right: '4%', bottom: '14%', top: '8%', containLabel: true },
            xAxis: { type: 'category', data: [$jsCupoNames], axisLabel: { interval: 0, rotate: 15, color: '#2c3e50' } },
            yAxis: { type: 'value', splitLine: { lineStyle: { color: '#ecf0f1' } } },
            series: [
                { name: 'Inscritos', type: 'bar', data: [$jsCupoIns], itemStyle: { color: '#18bc9c', borderRadius: [3, 3, 0, 0] } },
                { name: 'Cupo Máximo', type: 'bar', data: [$jsCupoMax], itemStyle: { color: '#ced4da', borderRadius: [3, 3, 0, 0] } }
            ]
        });

        var c4 = echarts.init(document.getElementById('chart_admin_4'));
        c4.setOption({
            textStyle: { fontFamily: fontFamily },
            tooltip: { trigger: 'axis', axisPointer: { type: 'shadow' } },
            grid: { left: '3%', right: '4%', bottom: '8%', top: '8%', containLabel: true },
            xAxis: { type: 'category', data: [$jsNotaNames], axisLabel: { interval: 0, rotate: 15, color: '#2c3e50' } },
            yAxis: { type: 'value', splitLine: { lineStyle: { color: '#ecf0f1' } } },
            series: [{
                name: 'Registros',
                type: 'bar',
                barWidth: '45%',
                data: [$jsNotaVals],
                itemStyle: { color: '#3498db', borderRadius: [4, 4, 0, 0] },
                label: { show: true, position: 'top', color: '#2c3e50', fontWeight: 700 }
            }]
        });

        window.addEventListener('resize', function(){ c1.resize(); c2.resize(); c3.resize(); c4.resize(); });
    }, 200);
    </script>";

} elseif ($rol === 'Secretaria') {

    // KPIs Secretaría
    $qRecTotal = sguass_fetch_one("SELECT COALESCE(SUM(monto - descuento + multa_mora), 0) AS s, COUNT(*) AS c FROM pagos WHERE estado = 'Pagado'", array('s' => 0, 'c' => 0));
    $qMatAct = sguass_fetch_one("SELECT COUNT(*) AS c FROM matriculas_semestre WHERE estado = 'Activo'", array('c' => 0));
    $qCuoPend = sguass_fetch_one("SELECT COUNT(*) AS c, COALESCE(SUM(monto - descuento + multa_mora), 0) AS s FROM pagos WHERE estado IN ('Pendiente', 'Vencido') OR estado = ''", array('c' => 0, 's' => 0));
    $qMoraAcum = sguass_fetch_one("SELECT COALESCE(SUM(multa_mora), 0) AS s FROM pagos", array('s' => 0));

    // Gráfica 1: Estado Global de Cuotas (Cantidad)
    $rowsEstPag = sguass_fetch_all("SELECT COALESCE(NULLIF(estado, ''), 'Pendiente') AS est, COUNT(*) AS cant FROM pagos GROUP BY est");
    $estPagData = array();
    foreach ($rowsEstPag as $r) {
        $col = '#95a5a6';
        if ($r['est'] === 'Pagado') $col = '#18bc9c';
        elseif ($r['est'] === 'Pendiente') $col = '#3498db';
        elseif ($r['est'] === 'Vencido') $col = '#e74c3c';
        $estPagData[] = "{ value: " . (int)$r['cant'] . ", name: '" . addslashes($r['est']) . "', itemStyle: { color: '$col' } }";
    }

    // Gráfica 2: Recaudación por Método de Pago
    $rowsMet = sguass_fetch_all("SELECT COALESCE(NULLIF(metodo_pago, ''), 'No especificado') AS met, COALESCE(SUM(monto - descuento + multa_mora), 0) AS total 
                                 FROM pagos WHERE estado = 'Pagado' GROUP BY met ORDER BY total DESC");
    $metNames = array(); $metVals = array();
    foreach ($rowsMet as $r) {
        $metNames[] = "'" . addslashes($r['met']) . "'";
        $metVals[] = (int)$r['total'];
    }

    // Gráfica 3: Evolución Mensual de Inscripciones y Matrículas
    $rowsInsMes = sguass_fetch_all("SELECT DATE_FORMAT(fecha_inscripcion, '%Y-%m') AS mes, COUNT(*) AS cant 
                                    FROM inscripciones GROUP BY mes ORDER BY mes ASC LIMIT 8");
    $mesLabels = array(); $mesCant = array();
    foreach ($rowsInsMes as $r) {
        $mesLabels[] = "'" . addslashes($r['mes']) . "'";
        $mesCant[] = (int)$r['cant'];
    }

    // Gráfica 4: Estado de Matrículas Semestrales
    $rowsMatEst = sguass_fetch_all("SELECT estado, COUNT(*) AS cant FROM matriculas_semestre GROUP BY estado");
    $matEstData = array();
    foreach ($rowsMatEst as $r) {
        $col = '#2c3e50';
        if ($r['estado'] === 'Activo') $col = '#18bc9c';
        elseif ($r['estado'] === 'Culminado') $col = '#3498db';
        elseif ($r['estado'] === 'Retirado') $col = '#e74c3c';
        $matEstData[] = "{ value: " . (int)$r['cant'] . ", name: '" . addslashes($r['estado']) . "', itemStyle: { color: '$col' } }";
    }

    echo '<div class="sguass-kpi-grid">
        <div class="sguass-kpi-card kpi-success">
            <div class="sguass-kpi-lbl">Total Cobrado en Caja</div>
            <div class="sguass-kpi-num">Gs. ' . number_format((float)$qRecTotal['s'], 0, ',', '.') . '</div>
            <div class="sguass-kpi-sub">' . number_format((int)$qRecTotal['c']) . ' pagos procesados</div>
        </div>
        <div class="sguass-kpi-card kpi-info">
            <div class="sguass-kpi-lbl">Matr&iacute;culas Activas</div>
            <div class="sguass-kpi-num">' . number_format((int)$qMatAct['c']) . '</div>
            <div class="sguass-kpi-sub">Alumnos cursando el semestre</div>
        </div>
        <div class="sguass-kpi-card kpi-danger">
            <div class="sguass-kpi-lbl">Cuotas Pendientes / Vencidas</div>
            <div class="sguass-kpi-num">' . number_format((int)$qCuoPend['c']) . '</div>
            <div class="sguass-kpi-sub">Saldo: Gs. ' . number_format((float)$qCuoPend['s'], 0, ',', '.') . '</div>
        </div>
        <div class="sguass-kpi-card kpi-warning">
            <div class="sguass-kpi-lbl">Multas por Mora Generadas</div>
            <div class="sguass-kpi-num">Gs. ' . number_format((float)$qMoraAcum['s'], 0, ',', '.') . '</div>
            <div class="sguass-kpi-sub">Recargos acumulados</div>
        </div>
    </div>';

    // Acciones Rápidas intactas (Sin iconos)
    echo '<div class="sguass-actions-panel">
        <div class="sguass-title-sec">Operaciones de Caja y Registro <span class="sub">Gesti&oacute;n administrativa diaria</span></div>
        <div class="sguass-btn-grid">
            <a href="pagos_add.php" class="sguass-btn-act act-highlight-success">Cobro R&aacute;pido Caja</a>
            <a href="inscripciones_add.php" class="sguass-btn-act act-highlight-info">Nueva Matr&iacute;cula</a>
            <a href="estudiantes_add.php" class="sguass-btn-act">Registrar Alumno</a>
            <a href="cuotas_list.php" class="sguass-btn-act">Consultar Deudas</a>
            <a href="asistencias_list.php" class="sguass-btn-act">Asistencias</a>
            <a href="constancias_list.php" class="sguass-btn-act">Certificados / Const.</a>
        </div>
    </div>';

    echo '<div class="sguass-charts-grid">
        <div class="sguass-chart-card">
            <div class="sguass-title-sec">Estado Global de Cuotas <span class="sub">Proporci&oacute;n de pagos</span></div>
            <div id="chart_sec_1" class="sguass-chart-box"></div>
        </div>
        <div class="sguass-chart-card">
            <div class="sguass-title-sec">Ingresos por M&eacute;todo de Pago <span class="sub">Volumen en Guaran&iacute;es</span></div>
            <div id="chart_sec_2" class="sguass-chart-box"></div>
        </div>
        <div class="sguass-chart-card">
            <div class="sguass-title-sec">Tendencia de Inscripciones <span class="sub">Hist&oacute;rico por mes</span></div>
            <div id="chart_sec_3" class="sguass-chart-box"></div>
        </div>
        <div class="sguass-chart-card">
            <div class="sguass-title-sec">Estado de Matr&iacute;culas Semestrales <span class="sub">Activo, Culminado, Retirado</span></div>
            <div id="chart_sec_4" class="sguass-chart-box"></div>
        </div>
    </div>';

    $jsEstPagData = implode(',', $estPagData);
    $jsMetNames   = implode(',', $metNames);
    $jsMetVals    = implode(',', $metVals);
    $jsMesLabels  = implode(',', $mesLabels);
    $jsMesCant    = implode(',', $mesCant);
    $jsMatEstData = implode(',', $matEstData);

    echo "<script>
    setTimeout(function() {
        var fontFamily = 'Lato, sans-serif';
        var c1 = echarts.init(document.getElementById('chart_sec_1'));
        c1.setOption({
            textStyle: { fontFamily: fontFamily },
            tooltip: { trigger: 'item', formatter: '{b}: {c} cuotas ({d}%)' },
            legend: { bottom: 0 },
            series: [{
                type: 'pie',
                radius: ['40%', '68%'],
                center: ['50%', '45%'],
                itemStyle: { borderRadius: 4, borderColor: '#fff', borderWidth: 2 },
                data: [$jsEstPagData]
            }]
        });

        var c2 = echarts.init(document.getElementById('chart_sec_2'));
        c2.setOption({
            textStyle: { fontFamily: fontFamily },
            tooltip: { trigger: 'axis', axisPointer: { type: 'shadow' } },
            grid: { left: '3%', right: '4%', bottom: '5%', top: '8%', containLabel: true },
            xAxis: { type: 'category', data: [$jsMetNames], axisLabel: { color: '#2c3e50', fontWeight: 600 } },
            yAxis: { type: 'value', splitLine: { lineStyle: { color: '#ecf0f1' } } },
            series: [{
                type: 'bar',
                barWidth: '45%',
                data: [$jsMetVals],
                itemStyle: { color: '#2c3e50', borderRadius: [4, 4, 0, 0] }
            }]
        });

        var c3 = echarts.init(document.getElementById('chart_sec_3'));
        c3.setOption({
            textStyle: { fontFamily: fontFamily },
            tooltip: { trigger: 'axis' },
            grid: { left: '3%', right: '4%', bottom: '5%', top: '8%', containLabel: true },
            xAxis: { type: 'category', data: [$jsMesLabels], axisLabel: { color: '#2c3e50' } },
            yAxis: { type: 'value', splitLine: { lineStyle: { color: '#ecf0f1' } } },
            series: [{
                data: [$jsMesCant],
                type: 'line',
                smooth: true,
                symbolSize: 8,
                areaStyle: { color: 'rgba(24, 188, 156, 0.18)' },
                itemStyle: { color: '#18bc9c' },
                lineStyle: { width: 3, color: '#18bc9c' }
            }]
        });

        var c4 = echarts.init(document.getElementById('chart_sec_4'));
        c4.setOption({
            textStyle: { fontFamily: fontFamily },
            tooltip: { trigger: 'item', formatter: '{b}: {c} ({d}%)' },
            legend: { bottom: 0 },
            series: [{
                type: 'pie',
                radius: '65%',
                center: ['50%', '45%'],
                data: [$jsMatEstData]
            }]
        });

        window.addEventListener('resize', function(){ c1.resize(); c2.resize(); c3.resize(); c4.resize(); });
    }, 200);
    </script>";

} elseif ($rol === 'Docente') {

    // Filtros según el profesor logueado (tabla real: `cursos`)
    $whereProf = ($entidadId > 0) ? "c.profesor_id = $entidadId" : "1=1";

    $qCurDoc = sguass_fetch_one("SELECT COUNT(*) AS c FROM cursos c WHERE $whereProf AND c.estado = 'Activo'", array('c' => 0));
    $qAluDoc = sguass_fetch_one("SELECT COUNT(DISTINCT i.estudiante_id) AS c FROM inscripciones i JOIN cursos c ON c.id = i.curso_id WHERE $whereProf AND c.estado = 'Activo'", array('c' => 0));
    $qTarDoc = sguass_fetch_one("SELECT COUNT(t.id) AS c FROM tareas t JOIN cursos c ON c.id = t.curso_id WHERE $whereProf", array('c' => 0));
    $qEntDoc = sguass_fetch_one("SELECT COUNT(te.id) AS c, COALESCE(ROUND(AVG(te.calificacion), 2), 0) AS prom FROM tarea_entregas te JOIN tareas t ON t.id = te.tarea_id JOIN cursos c ON c.id = t.curso_id WHERE $whereProf", array('c' => 0, 'prom' => 0));

    // Gráfica 1: Alumnos inscritos vs Cupo por Curso
    $rowsCD = sguass_fetch_all("SELECT m.nombre AS materia, c.cupo, COUNT(i.id) AS cant 
                                FROM cursos c 
                                JOIN materias m ON m.id = c.materia_id 
                                LEFT JOIN inscripciones i ON i.curso_id = c.id 
                                WHERE $whereProf AND c.estado = 'Activo' 
                                GROUP BY c.id, m.nombre, c.cupo LIMIT 6");
    $catNames = array(); $catValues = array(); $catCupos = array();
    foreach ($rowsCD as $r) {
        $catNames[]  = "'" . addslashes($r['materia']) . "'";
        $catValues[] = (int)$r['cant'];
        $catCupos[]  = (int)$r['cupo'];
    }

    // Gráfica 2: Resumen de Asistencia en sus Clases
    $rowsAD = sguass_fetch_all("SELECT a.estado, COUNT(a.id) AS cant 
                                FROM asistencias a 
                                JOIN inscripciones i ON i.id = a.inscripcion_id 
                                JOIN cursos c ON c.id = i.curso_id 
                                WHERE $whereProf GROUP BY a.estado");
    $asisData = array();
    foreach ($rowsAD as $r) {
        $col = '#3498db';
        if ($r['estado'] === 'Presente') $col = '#18bc9c';
        elseif ($r['estado'] === 'Ausente') $col = '#e74c3c';
        elseif ($r['estado'] === 'Tardanza') $col = '#f39c12';
        elseif ($r['estado'] === 'Justificado') $col = '#3498db';
        $asisData[] = "{ value: " . (int)$r['cant'] . ", name: '" . addslashes($r['estado']) . "', itemStyle: { color: '$col' } }";
    }

    // Gráfica 3: Entregas Recibidas por Tarea
    $rowsTarEnt = sguass_fetch_all("SELECT t.titulo, COUNT(te.id) AS entregas, COALESCE(ROUND(AVG(te.calificacion), 1), 0) AS promedio 
                                    FROM tareas t 
                                    JOIN cursos c ON c.id = t.curso_id 
                                    LEFT JOIN tarea_entregas te ON te.tarea_id = t.id 
                                    WHERE $whereProf 
                                    GROUP BY t.id, t.titulo ORDER BY t.id DESC LIMIT 6");
    $tarNames = array(); $tarCant = array();
    foreach ($rowsTarEnt as $r) {
        $tarNames[] = "'" . addslashes($r['titulo']) . "'";
        $tarCant[]  = (int)$r['entregas'];
    }

    // Gráfica 4: Promedio de Puntos de Proceso por Materia (tabla `notas`)
    $rowsPromMat = sguass_fetch_all("SELECT m.nombre AS materia, 
                                            ROUND(AVG(COALESCE(n.Puntos_Trabajo_Practico,0) + COALESCE(n.Puntos_Primer_Parcial,0) + COALESCE(n.Puntos_Segundo_Parcial,0) + COALESCE(n.Puntos_Asistencia,0)), 1) AS prom_proc
                                     FROM cursos c
                                     JOIN materias m ON m.id = c.materia_id
                                     JOIN inscripciones i ON i.curso_id = c.id
                                     LEFT JOIN notas n ON n.inscripcion_id = i.id
                                     WHERE $whereProf
                                     GROUP BY c.id, m.nombre LIMIT 6");
    $pmNames = array();$pmVals = array();
    foreach ($rowsPromMat as$r) {
        $pmNames[] = "'" . addslashes($r['materia']) . "'";
        $pmVals[]  = (float)$r['prom_proc'];
    }

    echo '<div class="sguass-kpi-grid">
        <div class="sguass-kpi-card">
            <div class="sguass-kpi-lbl">Cursos Activos a Cargo</div>
            <div class="sguass-kpi-num">' . number_format((int)$qCurDoc['c']) . '</div>
            <div class="sguass-kpi-sub">C&aacute;tedras en curso</div>
        </div>
        <div class="sguass-kpi-card kpi-success">
            <div class="sguass-kpi-lbl">Alumnos Asignados</div>
            <div class="sguass-kpi-num">' . number_format((int)$qAluDoc['c']) . '</div>
            <div class="sguass-kpi-sub">Estudiantes en mis listas</div>
        </div>
        <div class="sguass-kpi-card kpi-info">
            <div class="sguass-kpi-lbl">Tareas Publicadas</div>
            <div class="sguass-kpi-num">' . number_format((int)$qTarDoc['c']) . '</div>
            <div class="sguass-kpi-sub">Actividades acad&eacute;micas</div>
        </div>
        <div class="sguass-kpi-card kpi-warning">
            <div class="sguass-kpi-lbl">Entregas Recibidas</div>
            <div class="sguass-kpi-num">' . number_format((int)$qEntDoc['c']) . '</div>
            <div class="sguass-kpi-sub">Promedio calif.: ' . $qEntDoc['prom'] . ' / 5.00</div>
        </div>
    </div>';

    // Acciones Rápidas intactas (Sin iconos)
    echo '<div class="sguass-actions-panel">
        <div class="sguass-title-sec">Gesti&oacute;n Docente Acad&eacute;mica <span class="sub">Control de aula y evaluaciones</span></div>
        <div class="sguass-btn-grid">
            <a href="asistencias_add.php" class="sguass-btn-act act-highlight-success">Tomar Asistencia</a>
            <a href="calificaciones_list.php" class="sguass-btn-act act-highlight-info">Cargar Notas</a>
            <a href="catedras_list.php" class="sguass-btn-act">Mis C&aacute;tedras</a>
            <a href="tareas_add.php" class="sguass-btn-act">Publicar Tarea</a>
            <a href="entregas_tareas_list.php" class="sguass-btn-act">Calificar Trabajos</a>
            <a href="avisos_list.php" class="sguass-btn-act">Comunicados</a>
        </div>
    </div>';

    echo '<div class="sguass-charts-grid">
        <div class="sguass-chart-card">
            <div class="sguass-title-sec">Alumnos por C&aacute;tedra vs Cupo <span class="sub">Matr&iacute;cula por curso</span></div>
            <div id="chart_doc_1" class="sguass-chart-box"></div>
        </div>
        <div class="sguass-chart-card">
            <div class="sguass-title-sec">Distribuci&oacute;n de Asistencia <span class="sub">Presentes, Ausentes, Tardanzas</span></div>
            <div id="chart_doc_2" class="sguass-chart-box"></div>
        </div>
        <div class="sguass-chart-card">
            <div class="sguass-title-sec">Entregas Recibidas por Tarea <span class="sub">Participaci&oacute;n en trabajos pr&aacute;cticos</span></div>
            <div id="chart_doc_3" class="sguass-chart-box"></div>
        </div>
        <div class="sguass-chart-card">
            <div class="sguass-title-sec">Promedio de Puntaje de Proceso <span class="sub">TP + Parciales + Asistencia</span></div>
            <div id="chart_doc_4" class="sguass-chart-box"></div>
        </div>
    </div>';

    $jsCatNames  = implode(',',$catNames);
    $jsCatVals   = implode(',',$catValues);
    $jsCatCupos  = implode(',',$catCupos);
    $jsAsisData  = implode(',',$asisData);
    $jsTarNames  = implode(',',$tarNames);
    $jsTarCant   = implode(',',$tarCant);
    $jsPmNames   = implode(',',$pmNames);
    $jsPmVals    = implode(',',$pmVals);

    echo "<script>
    setTimeout(function() {
        var fontFamily = 'Lato, sans-serif';
        var c1 = echarts.init(document.getElementById('chart_doc_1'));
        c1.setOption({
            textStyle: { fontFamily: fontFamily },
            tooltip: { trigger: 'axis', axisPointer: { type: 'shadow' } },
            legend: { bottom: 0 },
            grid: { left: '3%', right: '4%', bottom: '14%', top: '8%', containLabel: true },
            xAxis: { type: 'category', data: [$jsCatNames], axisLabel: { interval: 0, rotate: 15, color: '#2c3e50' } },
            yAxis: { type: 'value', splitLine: { lineStyle: { color: '#ecf0f1' } } },
            series: [
                { name: 'Inscritos', type: 'bar', data: [$jsCatVals], itemStyle: { color: '#2c3e50', borderRadius: [4, 4, 0, 0] } },
                { name: 'Cupo', type: 'bar', data: [$jsCatCupos], itemStyle: { color: '#ced4da', borderRadius: [4, 4, 0, 0] } }
            ]
        });

        var c2 = echarts.init(document.getElementById('chart_doc_2'));
        c2.setOption({
            textStyle: { fontFamily: fontFamily },
            tooltip: { trigger: 'item', formatter: '{b}: {c} ({d}%)' },
            legend: { bottom: 0 },
            series: [{
                type: 'pie',
                radius: ['42%', '70%'],
                center: ['50%', '44%'],
                itemStyle: { borderRadius: 4, borderColor: '#fff', borderWidth: 2 },
                data: [$jsAsisData]
            }]
        });

        var c3 = echarts.init(document.getElementById('chart_doc_3'));
        c3.setOption({
            textStyle: { fontFamily: fontFamily },
            tooltip: { trigger: 'axis' },
            grid: { left: '3%', right: '5%', bottom: '5%', top: '6%', containLabel: true },
            xAxis: { type: 'value', splitLine: { lineStyle: { color: '#ecf0f1' } } },
            yAxis: { type: 'category', data: [$jsTarNames], axisLabel: { color: '#2c3e50' } },
            series: [{
                name: 'Entregas',
                type: 'bar',
                data: [$jsTarCant],
                itemStyle: { color: '#18bc9c', borderRadius: [0, 4, 4, 0] },
                label: { show: true, position: 'right', color: '#2c3e50', fontWeight: 700 }
            }]
        });

        var c4 = echarts.init(document.getElementById('chart_doc_4'));
        c4.setOption({
            textStyle: { fontFamily: fontFamily },
            tooltip: { trigger: 'axis' },
            grid: { left: '3%', right: '4%', bottom: '10%', top: '8%', containLabel: true },
            xAxis: { type: 'category', data: [$jsPmNames], axisLabel: { interval: 0, rotate: 15, color: '#2c3e50' } },
            yAxis: { type: 'value', splitLine: { lineStyle: { color: '#ecf0f1' } } },
            series: [{
                name: 'Puntos Promedio',
                type: 'bar',
                barWidth: '45%',
                data: [$jsPmVals],
                itemStyle: { color: '#3498db', borderRadius: [4, 4, 0, 0] }
            }]
        });

        window.addEventListener('resize', function(){ c1.resize(); c2.resize(); c3.resize(); c4.resize(); });
    }, 200);
    </script>";

} else { // Alumno

    $whereAlu = ($entidadId > 0) ? "i.estudiante_id = $entidadId" : "1=1";
    $wherePagAlu = ($entidadId > 0) ? "estudiante_id = $entidadId" : "1=1";

    $qMatIns = sguass_fetch_one("SELECT COUNT(i.id) AS c FROM inscripciones i WHERE $whereAlu", array('c' => 0));
    $qCuoAlu = sguass_fetch_one("SELECT COUNT(*) AS c, COALESCE(SUM(monto - descuento + multa_mora), 0) AS s 
                                 FROM pagos WHERE $wherePagAlu AND (estado IN ('Pendiente', 'Vencido') OR estado = '')", array('c' => 0, 's' => 0));

    $qAR = sguass_fetch_one("SELECT SUM(CASE WHEN a.estado IN ('Presente', 'Justificado') THEN 1 ELSE 0 END) AS pres, COUNT(a.id) AS total 
                             FROM asistencias a JOIN inscripciones i ON i.id = a.inscripcion_id WHERE $whereAlu", array('pres' => 0, 'total' => 0));
    $pctAsis = ((int)$qAR['total'] > 0) ? round(((int)$qAR['pres'] / (int)$qAR['total']) * 100, 1) : 100;

    $qTarAlu = sguass_fetch_one("SELECT COUNT(te.id) AS c, COALESCE(ROUND(AVG(te.calificacion), 2), 0) AS prom 
                                 FROM tarea_entregas te WHERE " . (($entidadId > 0) ? "te.estudiante_id = $entidadId" : "1=1"), array('c' => 0, 'prom' => 0));

    // Gráfica 2: Desglose de puntos en tabla `notas`
    $rowsNotasAlu = sguass_fetch_all("SELECT m.nombre AS materia,
                                             COALESCE(n.Puntos_Trabajo_Practico, 0) AS tp,
                                             COALESCE(n.Puntos_Primer_Parcial, 0) AS p1,
                                             COALESCE(n.Puntos_Segundo_Parcial, 0) AS p2,
                                             COALESCE(n.Puntos_Asistencia, 0) AS asis
                                      FROM inscripciones i
                                      JOIN cursos c ON c.id = i.curso_id
                                      JOIN materias m ON m.id = c.materia_id
                                      LEFT JOIN notas n ON n.inscripcion_id = i.id
                                      WHERE $whereAlu LIMIT 6");
    $matNames = array(); $ptsTP = array();$ptsP1 = array(); $ptsP2 = array();$ptsAsis = array();
    foreach ($rowsNotasAlu as$r) {
        $matNames[] = "'" . addslashes($r['materia']) . "'";
        $ptsTP[]    = (int)$r['tp'];
        $ptsP1[]    = (int)$r['p1'];
        $ptsP2[]    = (int)$r['p2'];
        $ptsAsis[]  = (int)$r['asis'];
    }

    // Gráfica 3: Estado financiero del alumno en `pagos`
    $rowsPagAlu = sguass_fetch_all("SELECT COALESCE(NULLIF(estado, ''), 'Pendiente') AS est, COALESCE(SUM(monto - descuento + multa_mora), 0) AS total 
                                    FROM pagos WHERE $wherePagAlu GROUP BY est");
    $pagAluData = array();
    foreach ($rowsPagAlu as $r) {$col = '#95a5a6';
        if ($r['est'] === 'Pagado')$col = '#18bc9c';
        elseif ($r['est'] === 'Pendiente')$col = '#f39c12';
        elseif ($r['est'] === 'Vencido')$col = '#e74c3c';
        $pagAluData[] = "{ value: " . (int)$r['total'] . ", name: '" . addslashes($r['est']) . "', itemStyle: { color: '$col' } }";
    }

    // Gráfica 4: Calificaciones en Tareas Entregadas (`tarea_entregas`)
    $rowsTeAlu = sguass_fetch_all("SELECT t.titulo, COALESCE(te.calificacion, 0) AS calif 
                                   FROM tarea_entregas te 
                                   JOIN tareas t ON t.id = te.tarea_id 
                                   WHERE " . (($entidadId > 0) ? "te.estudiante_id = $entidadId" : "1=1") . " 
                                   ORDER BY te.fecha_entrega DESC LIMIT 6");
    $teNames = array();$teVals = array();
    foreach ($rowsTeAlu as$r) {
        $teNames[] = "'" . addslashes($r['titulo']) . "'";
        $teVals[]  = (float)$r['calif'];
    }

    $clsCuo = ((int)$qCuoAlu['c'] > 0) ? 'kpi-danger' : 'kpi-success';
    $txtCuoMonto = ((int)$qCuoAlu['c'] > 0) ? 'Gs. ' . number_format((float)$qCuoAlu['s'], 0, ',', '.') : 'Al d&iacute;a';$txtCuoDesc  = ((int)$qCuoAlu['c'] > 0) ?$qCuoAlu['c'] . ' cuotas pendientes' : 'Sin saldo pendiente';

    echo '<div class="sguass-kpi-grid">
        <div class="sguass-kpi-card">
            <div class="sguass-kpi-lbl">Materias Inscritas</div>
            <div class="sguass-kpi-num">' . number_format((int)$qMatIns['c']) . '</div>
            <div class="sguass-kpi-sub">Asignaturas registradas</div>
        </div>
        <div class="sguass-kpi-card kpi-success">
            <div class="sguass-kpi-lbl">Asistencia Global</div>
            <div class="sguass-kpi-num">' . $pctAsis . '%</div>
            <div class="sguass-kpi-sub">M&iacute;nimo requerido: 75%</div>
        </div>
        <div class="sguass-kpi-card kpi-info">
            <div class="sguass-kpi-lbl">Trabajos Entregados</div>
            <div class="sguass-kpi-num">' . number_format((int)$qTarAlu['c']) . '</div>
            <div class="sguass-kpi-sub">Promedio tareas: ' . $qTarAlu['prom'] . ' / 5.00</div>
        </div>
        <div class="sguass-kpi-card ' . $clsCuo . '">
            <div class="sguass-kpi-lbl">Estado de Cuenta</div>
            <div class="sguass-kpi-num">' . $txtCuoMonto . '</div>
            <div class="sguass-kpi-sub">' . $txtCuoDesc . '</div>
        </div>
    </div>';

    // Acciones Rápidas intactas (Sin iconos)
    echo '<div class="sguass-actions-panel">
        <div class="sguass-title-sec">Accesos Directos del Estudiante <span class="sub">Consultas y gestiones acad&eacute;micas</span></div>
        <div class="sguass-btn-grid">
            <a href="calificaciones_list.php" class="sguass-btn-act act-highlight-info">Mis Calificaciones</a>
            <a href="asistencias_list.php" class="sguass-btn-act">Registro de Asistencia</a>
            <a href="cuotas_list.php" class="sguass-btn-act">Estado de Cuenta</a>
            <a href="tareas_list.php" class="sguass-btn-act">Trabajos y Entregas</a>
            <a href="avisos_list.php" class="sguass-btn-act">Tabl&oacute;n de Avisos</a>
            <a href="inscripciones_list.php" class="sguass-btn-act">Historial Acad&eacute;mico</a>
        </div>
    </div>';

    echo '<div class="sguass-charts-grid">
        <div class="sguass-chart-card">
            <div class="sguass-title-sec">Indicador de Asistencia <span class="sub">Cumplimiento de regularidad</span></div>
            <div id="chart_alu_1" class="sguass-chart-box"></div>
        </div>
        <div class="sguass-chart-card">
            <div class="sguass-title-sec">Desglose de Puntos de Proceso <span class="sub">TP, Parciales y Asistencia</span></div>
            <div id="chart_alu_2" class="sguass-chart-box"></div>
        </div>
        <div class="sguass-chart-card">
            <div class="sguass-title-sec">Resumen Financiero Personal <span class="sub">Pagado vs Pendiente (Gs.)</span></div>
            <div id="chart_alu_3" class="sguass-chart-box"></div>
        </div>
        <div class="sguass-chart-card">
            <div class="sguass-title-sec">Calificaciones en Trabajos Pr&aacute;cticos <span class="sub">Escala 1 al 5</span></div>
            <div id="chart_alu_4" class="sguass-chart-box"></div>
        </div>
    </div>';

    $jsMatNames   = implode(',',$matNames);
    $jsPtsTP      = implode(',',$ptsTP);
    $jsPtsP1      = implode(',',$ptsP1);
    $jsPtsP2      = implode(',',$ptsP2);
    $jsPtsAsis    = implode(',',$ptsAsis);
    $jsPagAluData = implode(',',$pagAluData);
    $jsTeNames    = implode(',',$teNames);
    $jsTeVals     = implode(',',$teVals);

    echo "<script>
    setTimeout(function() {
        var fontFamily = 'Lato, sans-serif';
        var c1 = echarts.init(document.getElementById('chart_alu_1'));
        c1.setOption({
            textStyle: { fontFamily: fontFamily },
            series: [{
                type: 'gauge',
                startAngle: 180, endAngle: 0,
                min: 0, max: 100,
                center: ['50%', '68%'],
                radius: '95%',
                itemStyle: { color: '#18bc9c' },
                progress: { show: true, roundCap: true, width: 16 },
                pointer: { show: true, length: '60%', width: 5 },
                axisLine: { roundCap: true, lineStyle: { width: 16, color: [[1, '#ecf0f1']] } },
                axisTick: { show: false },
                splitLine: { show: false },
                axisLabel: { distance: 20, color: '#7b8a8b', fontSize: 11 },
                title: { offsetCenter: [0, '20%'], fontSize: 13, color: '#7b8a8b' },
                detail: { valueAnimation: true, offsetCenter: [0, '-15%'], fontSize: 28, fontWeight: 'bold', color: '#2c3e50', formatter: '{value}%' },
                data: [{ value: $pctAsis, name: 'Asistencia' }]
            }]
        });

        var c2 = echarts.init(document.getElementById('chart_alu_2'));
        c2.setOption({
            textStyle: { fontFamily: fontFamily },
            tooltip: { trigger: 'axis', axisPointer: { type: 'shadow' } },
            legend: { bottom: 0 },
            grid: { left: '3%', right: '4%', bottom: '15%', top: '8%', containLabel: true },
            xAxis: { type: 'category', data: [$jsMatNames], axisLabel: { interval: 0, rotate: 15, color: '#2c3e50' } },
            yAxis: { type: 'value', splitLine: { lineStyle: { color: '#ecf0f1' } } },
            series: [
                { name: 'Trab. Práctico', type: 'bar', stack: 'proc', data: [$jsPtsTP], itemStyle: { color: '#18bc9c' } },
                { name: '1° Parcial', type: 'bar', stack: 'proc', data: [$jsPtsP1], itemStyle: { color: '#2c3e50' } },
                { name: '2° Parcial', type: 'bar', stack: 'proc', data: [$jsPtsP2], itemStyle: { color: '#3498db' } },
                { name: 'Asistencia', type: 'bar', stack: 'proc', data: [$jsPtsAsis], itemStyle: { color: '#f39c12' } }
            ]
        });

        var c3 = echarts.init(document.getElementById('chart_alu_3'));
        c3.setOption({
            textStyle: { fontFamily: fontFamily },
            tooltip: { trigger: 'item', formatter: '{b}: Gs. {c} ({d}%)' },
            legend: { bottom: 0 },
            series: [{
                type: 'pie',
                radius: ['42%', '70%'],
                center: ['50%', '44%'],
                itemStyle: { borderRadius: 4, borderColor: '#fff', borderWidth: 2 },
                data: [$jsPagAluData]
            }]
        });

        var c4 = echarts.init(document.getElementById('chart_alu_4'));
        c4.setOption({
            textStyle: { fontFamily: fontFamily },
            tooltip: { trigger: 'axis' },
            grid: { left: '3%', right: '4%', bottom: '10%', top: '8%', containLabel: true },
            xAxis: { type: 'category', data: [$jsTeNames], axisLabel: { interval: 0, rotate: 15, color: '#2c3e50' } },
            yAxis: { type: 'value', max: 5, splitLine: { lineStyle: { color: '#ecf0f1' } } },
            series: [{
                name: 'Calificación',
                type: 'bar',
                barWidth: '42%',
                data: [$jsTeVals],
                itemStyle: { color: '#2c3e50', borderRadius: [4, 4, 0, 0] },
                label: { show: true, position: 'top', color: '#2c3e50', fontWeight: 700 }
            }]
        });

        window.addEventListener('resize', function(){ c1.resize(); c2.resize(); c3.resize(); c4.resize(); });
    }, 200);
    </script>";
}

echo '</div>';
	;
}




}
?>
