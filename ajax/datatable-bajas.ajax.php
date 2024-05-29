<?php

require_once "../controladores/productos.controlador.php";
require_once "../modelos/productos.modelo.php";

class TablaProductosBajas{

	/*=============================================
 	 MOSTRAR LA TABLA DE PRODUCTOS
  	=============================================*/ 

	public function mostrarTablaProductosBajas(){

		$item = null;
    	$valor = null;
    	$orden = "id";

  		$productos = ControladorProductos::ctrMostrarProductos($item, $valor, $orden); 

  		$datosJson = '{
  			"data": [';

			for($i = 0; $i < count($productos); $i++){

				/*=============================================
	 	 		Existencias
	  			=============================================*/

	  			if($productos[$i]["existencias"] <= 10){

	  				$existencias = "<button class='btn btn-danger'>".$productos[$i]["existencias"]."</button>";

	  			}else if($productos[$i]["existencias"] > 11 && $productos[$i]["existencias"] <= 15){

	  				$existencias = "<button class='btn btn-warning'>".$productos[$i]["existencias"]."</button>";

	  			}else{

	  				$existencias = "<button class='btn btn-success'>".$productos[$i]["existencias"]."</button>";

	  			}

				/*=============================================
	 	 		TRAEMOS LAS ACCIONES
	  			=============================================*/

				$botones =  "<div class='btn-group'><button class='btn btn-primary agregarProducto recuperarBoton' idProducto='".$productos[$i]["id"]."'>Agregar</button></div>";

				$datosJson .='[
					"'.$productos[$i]["factura"].'",
					"'.$productos[$i]["codigo"].'",
					"'.$productos[$i]["descripcion"].'",
					"'.$existencias.'",
					"'.$botones.'"
				],';

			}

			$datosJson = substr($datosJson, 0, -1);

		$datosJson .= ']

		}';

	echo $datosJson;

	}

}

/*=============================================
ACTIVAR TABLA DE PRODUCTOS
=============================================*/ 
$activarProductosBajas = new TablaProductosBajas();
$activarProductosBajas -> mostrarTablaProductosBajas();