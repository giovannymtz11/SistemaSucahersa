<?php

class ControladorBajas{

	/*=============================================
	MOSTRAR BAJAS
	=============================================*/

	static public function ctrMostrarBajas($item, $valor){

		$tabla = "bajas";

		$respuesta = ModeloBajas::mdlMostrarBajas($tabla, $item, $valor);

		return $respuesta;

	}

	/*=============================================
	CREAR BAJA
	=============================================*/

	static public function ctrCrearBaja(){

		if(isset($_POST["nuevaBaja"])){

			/*=============================================
			ACTUALIZAR LAS BAJAS DE LA SUCURSAL Y REDUCIR LAS EXISTENCIAS Y AUMENTAR LAS BAJAS DE LOS PRODUCTOS
			=============================================*/

			$listaProductos = json_decode($_POST["listaProductos"], true);

			$totalProductosAltas = array();

			foreach ($listaProductos as $key => $value) {

			   array_push($totalProductosAltas, $value["cantidad"]);
				
			   $tablaProductos = "productos";

			   $item = "id";
			   $valor = $value["id"];
			   $orden = "id";

			   $traerProducto = ModeloProductos::mdlMostrarProductos($tablaProductos, $item, $valor, $orden);

			   $item1a = "bajas";
			   $valor1a = $value["cantidad"] + $traerProducto["bajas"];

			   $nuevasBajas = ModeloProductos::mdlActualizarProducto($tablaProductos, $item1a, $valor1a, $valor);

			   $item1b = "existencias";
			   $valor1b = $value["existencias"];

			   $nuevaExistencias = ModeloProductos::mdlActualizarProducto($tablaProductos, $item1b, $valor1b, $valor);

			   $item1c = "total";
			   $valor1c = $value["precio"] * $value["existencias"];

			   $nuevoTotalProducto = ModeloProductos::mdlActualizarProducto($tablaProductos, $item1c, $valor1c, $valor);

			}

			$tablaSucursales = "sucursales";

			$item = "id";
			$valor = $_POST["seleccionarSucursal"];

			$traerSucursal = ModeloSucursales::mdlMostrarSucursales($tablaSucursales, $item, $valor);

			$item1a = "altas";
			$valor1a = array_sum($totalProductosAltas) + $traerSucursal["altas"];

			$altasSucursal = ModeloSucursales::mdlActualizarSucursal($tablaSucursales, $item1a, $valor1a, $valor);

			$item1b = "ultima_alta";

			date_default_timezone_set('America/Mexico_City');

			$fecha = date('Y-m-d');
			$hora = date('H:i:s');
			$valor1b = $fecha.' '.$hora;

			$fechaCliente = ModeloSucursales::mdlActualizarSucursal($tablaSucursales, $item1b, $valor1b, $valor);

			/*=============================================
			GUARDAR LA BAJA
			=============================================*/	

			$tabla = "bajas";

			$datos = array("codigo"=>$_POST["nuevaBaja"],
						   "id_usuario"=>$_POST["idGestor"],
						   "id_sucursal"=>$_POST["seleccionarSucursal"],
						   "productos"=>$_POST["listaProductos"],
						   "impuesto"=>$_POST["nuevoPrecioImpuesto"],
						   "neto"=>$_POST["nuevoPrecioNeto"],
						   "total"=>$_POST["totalBaja"]);

			$respuesta = ModeloBajas::mdlIngresarBaja($tabla, $datos);

			if($respuesta == "ok"){

				echo'<script>

				localStorage.removeItem("rango");

				swal({
					  type: "success",
					  title: "La baja ha sido guardada correctamente",
					  showConfirmButton: true,
					  confirmButtonText: "Cerrar"
					  }).then((result) => {
								if (result.value) {

								window.location = "bajas";

								}
							})

				</script>';

			}

		}

	}

	/*=============================================
	EDITAR BAJA
	=============================================*/

	static public function ctrEditarBaja(){

		if(isset($_POST["editarBaja"])){

			/*=============================================
			FORMATEAR TABLA DE PRODUCTOS Y LA DE SUCURSALES
			=============================================*/

			$tabla = "bajas";

			$item = "codigo";
			$valor = $_POST["editarBaja"];

			$traerBaja = ModeloBajas::mdlMostrarBajas($tabla, $item, $valor);

			/*=============================================
			REVISAR SI VIENE PRODUCTOS EDITADOS
			=============================================*/

			if($_POST["listaProductos"] == ""){

				$listaProductos = $traerBaja["productos"];
				$cambioProducto = false;

			}else{

				$listaProductos = $_POST["listaProductos"];
				$cambioProducto = true;
			}

			if($cambioProducto){

				$productos = json_decode($traerBaja["productos"], true);

				$totalProductosAltas = array();

				foreach ($productos as $key => $value){

					array_push($totalProductosAltas, $value["cantidad"]);
					
					$tablaProductos = "productos";

					$item = "id";
					$valor = $value["id"];
					$orden = "id";

					$traerProducto = ModeloProductos::mdlMostrarProductos($tablaProductos, $item, $valor, $orden);

					$item1a = "bajas";
					$valor1a = $traerProducto["bajas"] - $value["cantidad"];
					$orden1a = "id";

					$nuevasBajas = ModeloProductos::mdlActualizarProducto($tablaProductos, $item1a, $valor1a, $valor, $orden1a);

					$item1b = "existencias";
					$valor1b = $value["cantidad"] + $traerProducto["existencias"];
					$orden1b = "id";

					$nuevaExistencias = ModeloProductos::mdlActualizarProducto($tablaProductos, $item1b, $valor1b, $valor, $orden1b);
					
				}

				$tablaSucursales = "sucursales";

				$itemSucursal = "id";
				$valorSucursal = $_POST["seleccionarSucursal"];

				$traerSucursal = ModeloSucursales::mdlMostrarSucursales($tablaSucursales, $itemSucursal, $valorSucursal);

				$item1a = "altas";
				$valor1a = $traerSucursal["altas"] - array_sum($totalProductosAltas);

				$comprasSucursal = ModeloSucursales::mdlActualizarSucursal($tablaSucursales, $item1a, $valor1a, $valorSucursal);

				/*=============================================
				ACTUALIZAR LAS BAJAS DE LA SUCURSAL Y REDUCIR LAS EXISTENCIAS Y AUMENTAR LAS BAJAS DE LOS PRODUCTOS
				=============================================*/

				$listaProductos_2 = json_decode($listaProductos, true);

				$totalProductosAltas_2 = array();

				foreach ($listaProductos_2 as $key => $value) {

				   array_push($totalProductosAltas_2, $value["cantidad"]);
					
				   $tablaProductos_2 = "productos";

				   $item_2 = "id";
				   $valor_2 = $value["id"];
				   $orden_2 = "id";

				   $traerProducto_2 = ModeloProductos::mdlMostrarProductos($tablaProductos_2, $item_2, $valor_2, $orden_2);

				   $item1a_2 = "bajas";
				   $valor1a_2 = $value["cantidad"] + $traerProducto_2["bajas"];
				   $ordena_2 = "id";

				   $nuevasBajas_2 = ModeloProductos::mdlActualizarProducto($tablaProductos_2, $item1a_2, $valor1a_2, $valor_2, $ordena_2);

				   $item1b_2 = "existencias";
				   $valor1b_2 = $traerProducto_2["existencias"] - $value["cantidad"];
				   $orden1b_2 = "id";

				   $nuevaExistencias_2 = ModeloProductos::mdlActualizarProducto($tablaProductos_2, $item1b_2, $valor1b_2, $valor_2, $orden1b_2);

				}

				$tablaSucursales_2 = "sucursales";

				$itemSucursal_2 = "id";
				$valorSucursal_2 = $_POST["seleccionarSucursal"];

				$traerSucursal_2 = ModeloSucursales::mdlMostrarSucursales($tablaSucursales_2, $item_2, $valor_2);

				$item1a_2 = "altas";
				$valor1a_2 = array_sum($totalProductosAltas_2) + $traerSucursal_2["altas"];

				$altasSucursal_2 = ModeloSucursales::mdlActualizarSucursal($tablaSucursales_2, $item1a_2, $valor1a_2, $valorSucursal_2);

				$item1b_2 = "ultima_alta";

				date_default_timezone_set('America/Mexico_City');

				$fecha = date('Y-m-d');
				$hora = date('H:i:s');
				$valor1b_2 = $fecha.' '.$hora;

				$fechaCliente_2 = ModeloSucursales::mdlActualizarSucursal($tablaSucursales_2, $item1b_2, $valor1b_2, $valor_2);

			}

			/*=============================================
			GUARDAR CAMBIOS DE LA BAJA
			=============================================*/	

			$datos = array("codigo"=>$_POST["editarBaja"],
						   "id_usuario"=>$_POST["idGestor"],
						   "id_sucursal"=>$_POST["seleccionarSucursal"],
						   "productos"=>$listaProductos,
						   "impuesto"=>$_POST["nuevoPrecioImpuesto"],
						   "neto"=>$_POST["nuevoPrecioNeto"],
						   "total"=>$_POST["totalBaja"]);

			$respuesta = ModeloBajas::mdlEditarBaja($tabla, $datos);

			if($respuesta == "ok"){

				echo'<script>

				localStorage.removeItem("rango");

				swal({
					  type: "success",
					  title: "La baja ha sido editada correctamente",
					  showConfirmButton: true,
					  confirmButtonText: "Cerrar"
					  }).then((result) => {
								if (result.value) {

								window.location = "bajas";

								}
							})

				</script>';

			}

		}

	}

	/*=============================================
	ELIMINAR BAJA
	=============================================*/

	static public function ctrEliminarBaja(){

		if(isset($_GET["idBaja"])){

			$tabla = "bajas";

			$item = "id";
			$valor = $_GET["idBaja"];

			$traerBaja = ModeloBajas::mdlMostrarBajas($tabla, $item, $valor);

			/*=============================================
			ACTUALIZAR FECHA ÚLTIMA ALTA
			=============================================*/

			$tablaSucursales = "sucursales";

			$itemBajas = null;
			$valorBajas = null;

			$traerBajas = ModeloBajas::mdlMostrarBajas($tabla, $itemBajas, $valorBajas);

			$guardarFechas = array();

			foreach ($traerBajas as $key => $value) {
				
				if($value["id_sucursal"] == $traerBaja["id_sucursal"]){

					array_push($guardarFechas, $value["fecha"]);

				}

			}

			if(count($guardarFechas) > 1){

				if($traerBaja["fecha"] > $guardarFechas[count($guardarFechas)-2]){

					$item = "ultima_alta";
					$valor = $guardarFechas[count($guardarFechas)-2];
					$valorIdSucursal = $traerBaja["id_sucursal"];

					$comprasSucursal = ModeloSucursales::mdlActualizarSucursal($tablaSucursales, $item, $valor, $valorIdSucursal);

				}else{

					$item = "ultima_alta";
					$valor = $guardarFechas[count($guardarFechas)-1];
					$valorIdSucursal = $traerBaja["id_sucursal"];

					$altasSucursal = ModeloSucursales::mdlActualizarSucursal($tablaSucursales, $item, $valor, $valorIdSucursal);

				}

			}else{

				$item = "ultima_alta";
				$valor = "0000-00-00 00:00:00";
				$valorIdSucursal = $traerBaja["id_sucursal"];

				$comprasSucursal = ModeloSucursales::mdlActualizarSucursal($tablaSucursales, $item, $valor, $valorIdSucursal);

			}

			/*=============================================
			FORMATEAR TABLA DE PRODUCTOS Y LA DE CLIENTES
			=============================================*/

			$productos =  json_decode($traerBaja["productos"], true);

			$totalProductosAltas = array();

			foreach ($productos as $key => $value) {

				array_push($totalProductosAltas, $value["cantidad"]);
				
				$tablaProductos = "productos";

				$item = "id";
				$valor = $value["id"];
				$orden = "id";

				$traerProducto = ModeloProductos::mdlMostrarProductos($tablaProductos, $item, $valor, $orden);

				$item1a = "bajas";
				$valor1a = $traerProducto["bajas"] - $value["cantidad"];

				$nuevasBajas = ModeloProductos::mdlActualizarProducto($tablaProductos, $item1a, $valor1a, $valor);

				$item1b = "existencias";
				$valor1b = $value["cantidad"] + $traerProducto["existencias"];

				$nuevaExistencias = ModeloProductos::mdlActualizarProducto($tablaProductos, $item1b, $valor1b, $valor);

			}

			$tablaSucursales = "sucursales";

			$itemSucursal = "id";
			$valorSucursal = $traerBaja["id_sucursal"];

			$traerSucursal = ModeloSucursales::mdlMostrarSucursales($tablaSucursales, $itemSucursal, $valorSucursal);

			$item1a = "altas";
			$valor1a = $traerSucursal["altas"] - array_sum($totalProductosAltas);

			$altasSucursal = ModeloSucursales::mdlActualizarSucursal($tablaSucursales, $item1a, $valor1a, $valorSucursal);

			/*=============================================
			ELIMINAR BAJA
			=============================================*/

			$respuesta = ModeloBajas::mdlEliminarBaja($tabla, $_GET["idBaja"]);

			if($respuesta == "ok"){

				echo'<script>

				swal({
					  type: "success",
					  title: "La baja ha sido borrada correctamente",
					  showConfirmButton: true,
					  confirmButtonText: "Cerrar",
					  closeOnConfirm: false
					  }).then((result) => {
								if (result.value) {

								window.location = "bajas";

								}
							})

				</script>';

			}		
		}

	}

	/*=============================================
	RANGO FECHAS
	=============================================*/	

	static public function ctrRangoFechasBajas($fechaInicial, $fechaFinal){

		$tabla = "bajas";

		$respuesta = ModeloBajas::mdlRangoFechasBajas($tabla, $fechaInicial, $fechaFinal);

		return $respuesta;
		
	}

	/*=============================================
	DESCARGAR EXCEL
	=============================================*/

	public function ctrDescargarReporte(){

		if(isset($_GET["reporte"])){

			$tabla = "bajas";

			if(isset($_GET["fechaInicial"]) && isset($_GET["fechaFinal"])){

				$bajas = ModeloBajas::mdlRangoFechasBajas($tabla, $_GET["fechaInicial"], $_GET["fechaFinal"]);

			}else{

				$item = null;
				$valor = null;

				$bajas = ModeloBajas::mdlMostrarBajas($tabla, $item, $valor);

			}


			/*=============================================
			CREAMOS EL ARCHIVO DE EXCEL
			=============================================*/

			$Name = $_GET["reporte"].'.xls';

			header('Expires: 0');
			header('Cache-control: private');
			header("Content-type: application/vnd.ms-excel"); // Archivo de Excel
			header("Cache-Control: cache, must-revalidate"); 
			header('Content-Description: File Transfer');
			header('Last-Modified: '.date('D, d M Y H:i:s'));
			header("Pragma: public"); 
			header('Content-Disposition:; filename="'.$Name.'"');
			header("Content-Transfer-Encoding: binary");

			echo utf8_decode("<table border='0'> 

					<tr> 
					<td style='font-weight:bold; border:1px solid #eee;'>CÓDIGO</td> 
					<td style='font-weight:bold; border:1px solid #eee;'>SUCURSAL</td>
					<td style='font-weight:bold; border:1px solid #eee;'>USUARIO</td>
					<td style='font-weight:bold; border:1px solid #eee;'>CANTIDAD</td>
					<td style='font-weight:bold; border:1px solid #eee;'>PRODUCTOS</td>
					<td style='font-weight:bold; border:1px solid #eee;'>IMPUESTO</td>
					<td style='font-weight:bold; border:1px solid #eee;'>NETO</td>		
					<td style='font-weight:bold; border:1px solid #eee;'>TOTAL</td>	
					<td style='font-weight:bold; border:1px solid #eee;'>FECHA</td>		
					</tr>");

			foreach ($bajas as $row => $item){

				$sucursal = ControladorSucursales::ctrMostrarSucursales("id", $item["id_sucursal"]);
				$usuario = ControladorUsuarios::ctrMostrarUsuarios("id", $item["id_usuario"]);

			 echo utf8_decode("<tr>
			 			<td style='border:1px solid #eee;'>".$item["codigo"]."</td> 
			 			<td style='border:1px solid #eee;'>".$sucursal["nombre"]."</td>
			 			<td style='border:1px solid #eee;'>".$usuario["nombre"]."</td>
			 			<td style='border:1px solid #eee;'>");

			 	$productos =  json_decode($item["productos"], true);

			 	foreach ($productos as $key => $valueProductos) {
			 			
			 			echo utf8_decode($valueProductos["cantidad"]."<br>");
			 		}

			 	echo utf8_decode("</td><td style='border:1px solid #eee;'>");	

		 		foreach ($productos as $key => $valueProductos) {
			 			
		 			echo utf8_decode($valueProductos["descripcion"]."<br>");
		 		
		 		}

		 		echo utf8_decode("</td>
					<td style='border:1px solid #eee;'>$ ".number_format($item["impuesto"],2)."</td>
					<td style='border:1px solid #eee;'>$ ".number_format($item["neto"],2)."</td>	
					<td style='border:1px solid #eee;'>$ ".number_format($item["total"],2)."</td>
					
					<td style='border:1px solid #eee;'>".substr($item["fecha"],0,10)."</td>		
		 			</tr>");


			}

			echo "</table>";

		}

	}

	/*=============================================
	SUMA TOTAL BAJAS
	=============================================*/

	static public function ctrSumaTotalBajas(){

		$tabla = "bajas";

		$respuesta = ModeloBajas::mdlSumaTotalBajas($tabla);

		return $respuesta;

	}
	
}