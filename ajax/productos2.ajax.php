<?php

require_once "../controladores/productos2.controlador.php";
require_once "../modelos/productos2.modelo.php";

class AjaxProductos2{

	/*=============================================
	EDITAR PRODUCTO
	=============================================*/	

	public $idProducto2;

	public function ajaxEditarProducto2(){

		$item = "id";
		$valor = $this->idProducto2;

		$respuesta = ControladorProductos2::ctrMostrarProductos2($item, $valor);

		echo json_encode($respuesta);

	}
}

/*=============================================
EDITAR PRODUCTO
=============================================*/

if(isset($_POST["idProducto2"])){

	$producto2 = new AjaxProductos2();
	$producto2 -> idProducto2 = $_POST["idProducto2"];
	$producto2 -> ajaxEditarProducto2();
}