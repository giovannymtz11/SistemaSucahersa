<?php

$item = null;
$valor = null;

$bajas = ControladorBajas::ctrMostrarBajas($item, $valor);
$usuarios = ControladorUsuarios::ctrMostrarUsuarios($item, $valor);

$arrayUsuarios = array();
$arraylistaUsuarios = array();

foreach ($bajas as $key => $valueBajas) {

  foreach ($usuarios as $key => $valueUsuarios) {

    if($valueUsuarios["id"] == $valueBajas["id_usuario"]){

        #Capturamos los vendedores en un array
        array_push($arrayUsuarios, $valueUsuarios["nombre"]);

        #Capturamos las nombres y los valores netos en un mismo array
        $arraylistaUsuarios = array($valueUsuarios["nombre"] => $valueBajas["neto"]);

         #Sumamos los netos de cada usuario

        foreach ($arraylistaUsuarios as $key => $value) {

            $sumaTotalUsuarios[$key] += $value;

         }

    }
  
  }

}

#Evitamos repetir nombre
$noRepetirNombres = array_unique($arrayUsuarios);

?>

<!--=====================================
USUARIOS
======================================-->

<div class="box box-success">

	<div class="box-header with-border">

		<h3 class="box-title">Usuarios</h3>

	</div>

	<div class="box-body">

		<div class="chart-responsive">
			
			<div class="chart" id="bar-chart1" style="height: 300px;"></div>

		</div>

	</div>
	
</div>

<script>
	
//BAR CHART
var bar = new Morris.Bar({
  element: 'bar-chart1',
  resize: true,
  data: [
  	<?php
  		foreach($noRepetirNombres as $value){
  			echo "{y: '".$value."', a: ".$sumaTotalUsuarios[$value]."},";
  		}
  	?>
  ],
  barColors: ['#0af'],
  xkey: 'y',
  ykeys: ['a'],
  labels: ['bajas'],
  preUnits: '$',
  hideHover: 'auto'
});


</script>