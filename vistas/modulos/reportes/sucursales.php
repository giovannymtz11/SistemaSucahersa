<?php

$item = null;
$valor = null;

$bajas = ControladorBajas::ctrMostrarBajas($item, $valor);
$sucursales = ControladorSucursales::ctrMostrarSucursales($item, $valor);

$arraySucursales = array();
$arraylistaSucursales = array();

foreach ($bajas as $key => $valueBajas) {
  
  foreach ($sucursales as $key => $valueSucursales) {
    
      if($valueSucursales["id"] == $valueBajas["id_sucursal"]){

        #Capturamos los Sucursales en un array
        array_push($arraySucursales, $valueSucursales["nombre"]);

        #Capturamos las nombres y los valores netos en un mismo array
        $arraylistaSucursales = array($valueSucursales["nombre"] => $valueBajas["neto"]);

        #Sumamos los netos de cada sucursal
        foreach ($arraylistaSucursales as $key => $value) {
          
          $sumaTotalSucursales[$key] += $value;
        
        }

      }   
  }

}

#Evitamos repetir nombre
$noRepetirNombres = array_unique($arraySucursales);

?>

<!--=====================================
SUCURSALES
======================================-->

<div class="box box-primary">

	<div class="box-header with-border">

		<h3 class="box-title">Sucursales</h3>

	</div>

	<div class="box-body">

		<div class="chart-responsive">
			
			<div class="chart" id="bar-chart2" style="height: 300px;"></div>

		</div>

	</div>
	
</div>

<script>
	
//BAR CHART
var bar = new Morris.Bar({
  element: 'bar-chart2',
  resize: true,
  data: [
  	<?php
  		foreach($noRepetirNombres as $value){
  			echo "{y: '".$value."', a: ".$sumaTotalSucursales[$value]."},";
  		}
  	?>
  ],
  barColors: ['#f6a'],
  xkey: 'y',
  ykeys: ['a'],
  labels: ['bajas'],
  preUnits: '$',
  hideHover: 'auto'
});


</script>