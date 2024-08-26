<h1 class='class text-center'>ESTADISTICAS CON CHART.JS</h1>

<h3 class='class text-center'>Grafica de ventas</h3>

<div class = 'row'>
    <div class='col'>
        <button type='button' class='btn btn-info w-100' id='actualizar'>Refresh</button>
    </div>
</div>

<div class='row justify-content-center'>
    <div class='col'>
        <canvas id="chartVentas" width='100%'></canvas>
    </div>
</div>


<script src="<?= asset('./build/js/productos/estadisticas.js') ?>"></script>