<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>HydroAlert · Monitoreo de nivel</title>

  <!-- Tipografías -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link href="https://fonts.googleapis.com/css2?family=Space+Grotesk:wght@500;600&family=IBM+Plex+Sans:wght@400;500&display=swap" rel="stylesheet">

  <!-- Leaflet (mapa) -->
  <link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.4/dist/leaflet.css" />
  <script src="https://unpkg.com/leaflet@1.9.4/dist/leaflet.js"></script>

  <!-- Chart.js (gráfica en tiempo real) -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/4.4.0/chart.umd.min.js"></script>

  <!-- Estilos y lógica propios -->
  <link rel="stylesheet" href="{{ asset('assets/dashboard/css/dashboard.css') }}">
</head>
<body>

  <header class="topbar">
    <div class="brand">
      <img src="{{ asset('assets/dashboard/img/HydroLogo.png') }}" alt="HydroAlert">
      <span>HydroAlert</span>
    </div>
    <div class="status-cluster">
      <div class="status-pill" id="riskPill">
        <span class="status-dot"></span>
        <span id="riskLabel">Evaluando…</span>
      </div>
      <div class="status-pill" id="statusPill">
        <span class="status-dot"></span>
        <span id="statusLabel">Conectando…</span>
      </div>
    </div>
  </header>

  <main class="dashboard">

    <section class="panel gauge-panel">
      <p class="panel-title">Nivel del río</p>
      <div class="gauge-wrap">
        <div class="gauge" id="gaugeZones">
          <div class="gauge-fill" id="gaugeFill">
            <div class="wave"></div>
            <div class="wave wave-2"></div>
          </div>
        </div>
        <div class="gauge-ticks" id="gaugeTicks"></div>
      </div>
      <div class="reading-value" id="nivelValor">-- <small>cm</small></div>
      <p class="reading-meta" id="ultimaActualizacion">Esperando datos…</p>
      <div class="gauge-legend" id="gaugeLegend"></div>
    </section>

    <section class="panel chart-panel">
      <p class="panel-title">Nivel en tiempo real</p>
      <canvas id="nivelChart"></canvas>
    </section>

    <div class="row-2" style="grid-column: 1 / -1;">
      <section class="panel">
        <p class="panel-title">Ubicación del dispositivo</p>
        <div id="map"></div>
      </section>

      <section class="panel history-panel">
        <p class="panel-title">Historial reciente</p>
        <table>
          <thead>
            <tr>
              <th>Dispositivo</th>
              <th>Nivel</th>
              <th>Fecha</th>
            </tr>
          </thead>
          <tbody id="tablaHistorial"></tbody>
        </table>
      </section>
    </div>

  </main>

  <script src="{{ asset('assets/dashboard/js/dashboard.js') }}"></script>
</body>
</html>
