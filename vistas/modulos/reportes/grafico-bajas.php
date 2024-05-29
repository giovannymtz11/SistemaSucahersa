<?php

error_reporting(0);

if(isset($_GET["fechaInicial"])){

    $fechaInicial = $_GET["fechaInicial"];
    $fechaFinal = $_GET["fechaFinal"];

}else{

	$fechaInicial = null;
	$fechaFinal = null;

}

$respuesta = ControladorBajas::ctrRangoFechasBajas($fechaInicial, $fechaFinal);

$arrayFechas = array();
$arrayBajas = array();
$sumaPagosMes = array();

foreach ($respuesta as $key => $value) {

	#Capturamos sólo el año y el mes
	$fecha = substr($value["fecha"],0,7);

	#Introducir las fechas en arrayFechas
	array_push($arrayFechas, $fecha);

	#Capturamos las bajas
	$arrayBajas = array($fecha => $value["total"]);

	#Sumamos los pagos que ocurrieron el mismo mes
	foreach ($arrayBajas as $key => $value) {
		
		$sumaPagosMes[$key] += $value;

	}

}

$noRepetirFechas = array_unique($arrayFechas);

?>

<!--=====================================
GRÁFICO DE BAJAS
======================================-->

<div class="box box-solid bg-teal-gradient">
	
	<div class="box-header">
		
 		<i class="fa fa-th"></i>

  		<h3 class="box-title">Gráfico de Bajas</h3>

	</div>

	<div class="box-body border-radius-none nuevoGraficoBajas">

		<div class="chart" id="line-chart-bajas" style="height: 250px;"></div>

  </div>

</div>

<script>
	
 var line = new Morris.Line({
    element          : 'line-chart-bajas',
    resize           : true,
    data             : [

     <?php

	     if($noRepetirFechas != null){

	     	foreach($noRepetirFechas as $key){

	     		echo "{y: '".$key."', bajas: ".$sumaPagosMes[$key]."},";

	     	}

	     	echo "{y: '".$key."', bajas: ".$sumaPagosMes[$key]."}";

	     }else {

	     		echo "{y: '0', bajas: '0'}";


	     }

     ?>

    ],
    xkey             : 'y',
    ykeys            : ['bajas'],
    labels           : ['bajas'],
    lineColors       : ['#efefef'],
    lineWidth        : 2,
    hideHover        : 'auto',
    gridTextColor    : '#fff',
    gridStrokeWidth  : 0.4,
    pointSize        : 4,
    pointStrokeColors: ['#efefef'],
    gridLineColor    : '#efefef',
    gridTextFamily   : 'Open Sans',
    preUnits         : '$',
    gridTextSize     : 10
  });

</script>