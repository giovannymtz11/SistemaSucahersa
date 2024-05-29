<?php

class ControladorSucursales{

	/*=============================================
	CREAR Sucursales
	=============================================*/

	static public function ctrCrearSucursal(){

		if(isset($_POST["nuevaSucursal"])){

			if(preg_match('/^[a-zA-Z0-9ñÑáéíóúÁÉÍÓÚ ]+$/', $_POST["nuevaSucursal"]) &&
			   preg_match('/^[()\-0-9 ]+$/', $_POST["nuevoTelefono"]) &&
			   preg_match('/^[a-zA-Z0-9ñÑáéíóúÁÉÍÓÚ ,.#]+$/', $_POST["nuevaDireccion"])){  

			   	$tabla = "sucursales";

			   	$datos = array("tipo"=> $_POST["nuevoTipoSucursal"],
			   		           "nombre"=>$_POST["nuevaSucursal"],
					           "telefono"=>$_POST["nuevoTelefono"],
					           "direccion"=>$_POST["nuevaDireccion"]);

			   	$respuesta = ModeloSucursales::mdlIngresarSucursal($tabla, $datos);

			   	if($respuesta == "ok"){

					echo'<script>

					swal({
						  type: "success",
						  title: "La Sucursal ha sido guardado correctamente",
						  showConfirmButton: true,
						  confirmButtonText: "Cerrar"
						  }).then(function(result){
									if (result.value) {

									window.location = "sucursales";

									}
								})

					</script>';

				}

			}else{

				echo'<script>

					swal({
						  type: "error",
						  title: "¡La Sucursal no puede ir vacía o llevar caracteres especiales!",
						  showConfirmButton: true,
						  confirmButtonText: "Cerrar"
						  }).then(function(result){
							if (result.value) {

							window.location = "sucursales";

							}
						})

			  	</script>';



			}

		}

	}

	/*=============================================
	MOSTRAR Sucursales
	=============================================*/

	static public function ctrMostrarSucursales($item, $valor){

		$tabla = "sucursales";

		$respuesta = ModeloSucursales::mdlMostrarSucursales($tabla, $item, $valor);

		return $respuesta;

	}

	/*=============================================
	EDITAR Sucursal
	=============================================*/

	static public function ctrEditarSucursal(){

		if(isset($_POST["editarSucursal"])){

			if(preg_match('/^[a-zA-Z0-9ñÑáéíóúÁÉÍÓÚ ]+$/', $_POST["editarSucursal"]) &&
			   preg_match('/^[()\-0-9 ]+$/', $_POST["editarTelefono"]) &&
			   preg_match('/^[a-zA-Z0-9ñÑáéíóúÁÉÍÓÚ ,.#]+$/', $_POST["editarDireccion"])){  

			   	$tabla = "sucursales";

			   	$datos = array("id"=> $_POST["idSucursal"],
			   				   "tipo"=> $_POST["editarTipoSucursal"],
			   		           "nombre"=>$_POST["editarSucursal"],
					           "telefono"=>$_POST["editarTelefono"],
					           "direccion"=>$_POST["editarDireccion"]);

			   	$respuesta = ModeloSucursales::mdlEditarSucursal($tabla, $datos);

			   	if($respuesta == "ok"){

					echo'<script>

					swal({
						  type: "success",
						  title: "La sucursal ha sido editada correctamente",
						  showConfirmButton: true,
						  confirmButtonText: "Cerrar"
						  }).then(function(result){
									if (result.value) {

									window.location = "sucursales";

									}
								})

					</script>';

				}

			}else{

				echo'<script>

					swal({
						  type: "error",
						  title: "¡La Sucursal no puede ir vacía o llevar caracteres especiales!",
						  showConfirmButton: true,
						  confirmButtonText: "Cerrar"
						  }).then(function(result){
							if (result.value) {

							window.location = "sucursales";

							}
						})

			  	</script>';



			}

		}

	}

	/*=============================================
	ELIMINAR Sucursal
	=============================================*/

	static public function ctrEliminarSucursal(){

		if(isset($_GET["idSucursal"])){

			$tabla ="sucursales";
			$datos = $_GET["idSucursal"];

			$respuesta = ModeloSucursales::mdlEliminarSucursal($tabla, $datos);

			if($respuesta == "ok"){

				echo'<script>

				swal({
					  type: "success",
					  title: "El Sucursal ha sido borrado correctamente",
					  showConfirmButton: true,
					  confirmButtonText: "Cerrar"
					  }).then(function(result){
								if (result.value) {

								window.location = "sucursales";

								}
							})

				</script>';

			}		

		}

	}

}

