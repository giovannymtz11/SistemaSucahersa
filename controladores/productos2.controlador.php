<?php

class ControladorProductos2{

	/*=============================================
	CREAR PRODUCTOS
	=============================================*/

	static public function ctrCrearProducto2(){

		if(isset($_POST["nuevoProducto2"])){

			if(preg_match('/^[.a-zA-Z0-9ñÑáéíóúÁÉÍÓÚ ]+$/', $_POST["nuevoProducto2"]) &&
			   preg_match('/^[.a-zA-Z0-9]+$/', $_POST["nuevoCodigoProducto"])){

				$tabla = "productos2";

				$datos = array("codigo" => $_POST["nuevoCodigoProducto"],
							   "nombre_producto" => $_POST["nuevoProducto2"]);

				$respuesta = ModeloProductos2::mdlIngresarProducto2($tabla, $datos);

				if($respuesta == "ok"){

					echo'<script>

					swal({
						  type: "success",
						  title: "El producto ha sido guardado correctamente",
						  showConfirmButton: true,
						  confirmButtonText: "Cerrar"
						  }).then(function(result){
									if (result.value) {

									window.location = "productos2";

									}
								})

					</script>';

				}


			}else{

				echo'<script>

					swal({
						  type: "error",
						  title: "¡El producto no puede ir vacío o llevar caracteres especiales!",
						  showConfirmButton: true,
						  confirmButtonText: "Cerrar"
						  }).then(function(result){
							if (result.value) {

							window.location = "productos2";

							}
						})

			  	</script>';

			}

		}

	}

	/*=============================================
	MOSTRAR PRODUCTOS
	=============================================*/

	static public function ctrMostrarProductos2($item, $valor){

		$tabla = "productos2";

		$respuesta = ModeloProductos2::mdlMostrarProductos2($tabla, $item, $valor);

		return $respuesta;
	
	}

	/*=============================================
	EDITAR PRODUCTOS
	=============================================*/

	static public function ctrEditarProducto2(){

		if(isset($_POST["editarProducto2"])){

			if(preg_match('/^[.a-zA-Z0-9ñÑáéíóúÁÉÍÓÚ ]+$/', $_POST["editarProducto2"]) &&
			   preg_match('/^[.a-zA-Z0-9]+$/', $_POST["editarCodigoProducto"])){

				$tabla = "productos2";

				$datos = array("id" => $_POST["idProducto2"],
							   "codigo" => $_POST["editarCodigoProducto"],
							   "nombre_producto" => $_POST["editarProducto2"]);

				$respuesta = ModeloProductos2::mdlEditarProducto2($tabla, $datos);

				if($respuesta == "ok"){

					echo'<script>

					swal({
						  type: "success",
						  title: "El producto ha sido editada correctamente",
						  showConfirmButton: true,
						  confirmButtonText: "Cerrar"
						  }).then(function(result){
									if (result.value) {

									window.location = "productos2";

									}
								})

					</script>';

				}


			}else{

				echo'<script>

					swal({
						  type: "error",
						  title: "¡El producto no puede ir vacío o llevar caracteres especiales!",
						  showConfirmButton: true,
						  confirmButtonText: "Cerrar"
						  }).then(function(result){
							if (result.value) {

							window.location = "productos2";

							}
						})

			  	</script>';

			}

		}

	}

	/*=============================================
	BORRAR PRODUCTO
	=============================================*/

	static public function ctrBorrarProducto2(){

		if(isset($_GET["idProducto2"])){

			$tabla ="productos2";
			$datos = $_GET["idProducto2"];

			$respuesta = ModeloProductos2::mdlBorrarProducto2($tabla, $datos);

			if($respuesta == "ok"){

				echo'<script>

						swal({
							type: "success",
							title: "El producto ha sido borrado correctamente",
							showConfirmButton: true,
							confirmButtonText: "Cerrar"
						}).then(function(result){
							if (result.value) {

								window.location = "productos2";

							}
						})

					</script>';

			}

		}
		
	}
}