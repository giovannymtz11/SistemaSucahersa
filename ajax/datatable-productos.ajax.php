<?php

require_once "../controladores/productos.controlador.php";
require_once "../modelos/productos.modelo.php";

class TablaProductos{

	/*=============================================
 	 MOSTRAR LA TABLA DE PRODUCTOS
  	=============================================*/ 

	public function mostrarTablaProductos(){

		$item = null;
    	$valor = null;
    	$orden = "id";

  		$productos = ControladorProductos::ctrMostrarProductos($item, $valor, $orden);

  		$datosJson = '{
  			"data": [';

			for($i = 0; $i < count($productos); $i++){

				/*=============================================
	 	 		EXISTENCIAS
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

	  			if(isset($_GET["perfilOculto"]) && $_GET["perfilOculto"] == "Consultor"){

	  				$botones = "<div class='btn-group'><button class='btn btn-warning btnEditarProducto' idProducto='".$productos[$i]["id"]."' data-toggle='modal' data-target='#modalEditarProducto'><i class='fa fa-pencil'></i></button></div>";

	  			}else {

	  				$botones = "<div class='btn-group'><button class='btn btn-warning btnEditarProducto' idProducto='".$productos[$i]["id"]."' data-toggle='modal' data-target='#modalEditarProducto'><i class='fa fa-pencil'></i></button><button class='btn btn-danger btnEliminarProducto' idProducto='".$productos[$i]["id"]."'><i class='fa fa-times'></i></button></div>";

	  			}

				$datosJson .='[
					"'.$productos[$i]["factura"].'",
					"'.$productos[$i]["proveedor"].'",
					"'.$productos[$i]["categoria"].'",
					"'.$productos[$i]["codigo"].'",
					"'.$productos[$i]["descripcion"].'",
					"'.$existencias.'",
					"'.$productos[$i]["unidad"].'",
					"$'.$productos[$i]["precio_sin_iva"].'",
					"$'.$productos[$i]["total"].'",
					"'.$productos[$i]["fecha"].'",
					"'.$botones.'"
				],';

				/*$datosJson .='[
					"'.$productos[$i]["factura"].'",
					"'.$productos[$i]["proveedor"].'",
					"'.$productos[$i]["categoria"].'",
					"'.$productos[$i]["codigo"].'",
					"'.$productos[$i]["descripcion"].'",
					"'.$existencias.'",
					"$'.$productos[$i]["precio_sin_iva"].'",
					"$'.$productos[$i]["precio_con_iva"].'",
					"$'.$productos[$i]["total"].'",
					"'.$productos[$i]["fecha"].'",
					"'.$botones.'"
				],';*/

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
$activarProductos = new TablaProductos();
$activarProductos -> mostrarTablaProductos();