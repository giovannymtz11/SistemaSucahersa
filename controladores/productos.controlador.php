<?php

class ControladorProductos{

	/*=============================================
	MOSTRAR PRODUCTOS
	=============================================*/

	static public function ctrMostrarProductos($item, $valor, $orden){

		$tabla = "productos";

		$respuesta = ModeloProductos::mdlMostrarProductos($tabla, $item, $valor, $orden);

		return $respuesta;

	}

	/*=============================================
	CREAR PRODUCTO
	=============================================*/

	static public function ctrCrearProducto(){

		if(isset($_POST["nuevaFactura"])){

			if(preg_match('/^[a-zA-Z0-9ñÑáéíóúÁÉÍÓÚ .]+$/', $_POST["nuevaFactura"]) &&
			   preg_match('/^[a-zA-Z0-9ñÑáéíóúÁÉÍÓÚ ]+$/', $_POST["nuevoCodigo"]) &&
			   preg_match('/^[a-zA-Z0-9ñÑáéíóúÁÉÍÓÚ ]+$/', $_POST["nuevaDescripcion"]) &&
			   preg_match('/^[0-9.]+$/', $_POST["nuevoPrecioSinIva"]) &&
			   preg_match('/^[0-9.]+$/', $_POST["nuevoPrecioConIva"]) &&
			   preg_match('/^[0-9.]+$/', $_POST["nuevoSubtotal"]) &&	
			   preg_match('/^[0-9]+$/', $_POST["nuevaExistencias"])){

				$tabla = "productos";

				$datos = array("factura" => $_POST["nuevaFactura"],
							   "fecha" => $_POST["nuevaFecha"],
							   "proveedor" => $_POST["nuevoProveedor"],
							   "categoria" => $_POST["nuevaCategoria"],
							   "codigo" => $_POST["nuevoCodigo"],
							   "descripcion" => $_POST["nuevaDescripcion"],
							   "precio_sin_iva" => $_POST["nuevoPrecioSinIva"],
							   "precio_con_iva" => $_POST["nuevoPrecioConIva"],
							   "total" => $_POST["nuevoSubtotal"],
							   "existencias" => $_POST["nuevaExistencias"],
							   "unidad" => $_POST["nuevaUnidad"]);

				$respuesta = ModeloProductos::mdlIngresarProducto($tabla, $datos);

				if($respuesta == "ok"){

					echo'<script>

						swal({
							  type: "success",
							  title: "El producto ha sido guardado correctamente",
							  showConfirmButton: true,
							  confirmButtonText: "Cerrar"
							  }).then(function(result){
										if (result.value) {

										window.location = "productos";

										}
									})

						</script>';

				}


			}else{

				echo'<script>

					swal({
						  type: "error",
						  title: "¡El producto no puede guardarse con los campos vacíos o llevar caracteres especiales!",
						  showConfirmButton: true,
						  confirmButtonText: "Cerrar"
						  }).then(function(result){
							if (result.value) {

							window.location = "productos";

							}
						})

			  	</script>';
			}
		}

	}

	/*=============================================
	EDITAR PRODUCTO
	=============================================*/

	static public function ctrEditarProducto(){

		if(isset($_POST["editarDescripcion"])){

			if(preg_match('/^[a-zA-Z0-9ñÑáéíóúÁÉÍÓÚ .]+$/', $_POST["editarFactura"]) &&
			   preg_match('/^[a-zA-Z0-9ñÑáéíóúÁÉÍÓÚ ]+$/', $_POST["editarCodigo"]) &&
			   preg_match('/^[a-zA-Z0-9ñÑáéíóúÁÉÍÓÚ ]+$/', $_POST["editarDescripcion"]) &&
			   preg_match('/^[0-9.]+$/', $_POST["editarPrecioSinIva"]) &&
			   preg_match('/^[0-9.]+$/', $_POST["editarPrecioConIva"]) &&
			   preg_match('/^[0-9.]+$/', $_POST["editarSubtotal"]) &&	
			   preg_match('/^[0-9]+$/', $_POST["editarExistencias"])){

				$tabla = "productos";

				$datos = array("id" => $_POST["idProducto"],
							   "factura" => $_POST["editarFactura"],
							   "fecha" => $_POST["editarFecha"],
							   "proveedor" => $_POST["editarProveedor"],
							   "categoria" => $_POST["editarCategoria"],
							   "codigo" => $_POST["editarCodigo"],
							   "descripcion" => $_POST["editarDescripcion"],
							   "precio_sin_iva" => $_POST["editarPrecioSinIva"],
							   "precio_con_iva" => $_POST["editarPrecioConIva"],
							   "total" => $_POST["editarSubtotal"],
							   "existencias" => $_POST["editarExistencias"],
							   "unidad" => $_POST["editarUnidad"]);

				$respuesta = ModeloProductos::mdlEditarProducto($tabla, $datos);

				if($respuesta == "ok"){

					echo'<script>

						swal({
							  type: "success",
							  title: "El producto ha sido editado correctamente",
							  showConfirmButton: true,
							  confirmButtonText: "Cerrar"
							  }).then(function(result){
										if (result.value) {

										window.location = "productos";

										}
									})

						</script>';

				}


			}else{

				echo'<script>

					swal({
						  type: "error",
						  title: "¡El producto no puede ir con los campos vacíos o llevar caracteres especiales!",
						  showConfirmButton: true,
						  confirmButtonText: "Cerrar"
						  }).then(function(result){
							if (result.value) {

							window.location = "productos";

							}
						})

			  	</script>';
			}
		}

	}

	/*=============================================
	BORRAR PRODUCTO
	=============================================*/

	static public function ctrEliminarProducto(){

		if(isset($_GET["idProducto"])){

			$tabla ="productos";
			$datos = $_GET["idProducto"];

			$respuesta = ModeloProductos::mdlEliminarProducto($tabla, $datos);

			if($respuesta == "ok"){

				echo'<script>

				swal({
					  type: "success",
					  title: "El alta del producto ha sido borrado correctamente",
					  showConfirmButton: true,
					  confirmButtonText: "Cerrar"
					  }).then(function(result){
								if (result.value) {

								window.location = "productos";

								}
							})

				</script>';

			}		
		}


	}

	/*=============================================
	MOSTRAR SUMA VENTAS
	=============================================*/

	static public function ctrMostrarSumaBajas(){

		$tabla = "productos";

		$respuesta = ModeloProductos::mdlMostrarSumaBajas($tabla);

		return $respuesta;

	}

	/*=============================================
	MOSTRAR SUMA INVENTARIO
	=============================================*/

	static public function ctrSumaTotalInventario(){

		$tabla = "productos";

		$respuesta = ModeloProductos::mdlSumaTotalInventario($tabla);

		return $respuesta;

	}

}