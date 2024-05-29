/*=============================================
CARGAR LA TABLA DINÁMICA DE PRODUCTOS
=============================================*/

//$.ajax({

//	url: "ajax/datatable-productos.ajax.php",
// 	success:function(respuesta){
		
// 		console.log("respuesta", respuesta);

// 	}

// })

var perfilOculto = $("#perfilOculto").val();

$('.tablaProductos').DataTable( {
    "ajax": "ajax/datatable-productos.ajax.php?perfilOculto="+perfilOculto,
    "deferRender": true,
	"retrieve": true,
	"processing": true,
	 "language": {

			"sProcessing":     "Procesando...",
			"sLengthMenu":     "Mostrar _MENU_ registros",
			"sZeroRecords":    "No se encontraron resultados",
			"sEmptyTable":     "Ningún dato disponible en esta tabla",
			"sInfo":           "Mostrando registros del _START_ al _END_ de un total de _TOTAL_",
			"sInfoEmpty":      "Mostrando registros del 0 al 0 de un total de 0",
			"sInfoFiltered":   "(filtrado de un total de _MAX_ registros)",
			"sInfoPostFix":    "",
			"sSearch":         "Buscar:",
			"sUrl":            "",
			"sInfoThousands":  ",",
			"sLoadingRecords": "Cargando...",
			"oPaginate": {
			"sFirst":    "Primero",
			"sLast":     "Último",
			"sNext":     "Siguiente",
			"sPrevious": "Anterior"
			},
			"oAria": {
				"sSortAscending":  ": Activar para ordenar la columna de manera ascendente",
				"sSortDescending": ": Activar para ordenar la columna de manera descendente"
			}

	}

} );

/*=============================================
AGREGANDO PRECIO POR UNIDAD (CON IVA)
=============================================*/

$("#nuevoPrecioSinIva, #editarPrecioSinIva").change(function(){

	/*==================================================
	AGREGANDO PRECIO SUBTOTAL DE CADA PRODUCTO (SIN IVA)
	==================================================*/

	var subtotalProducto = Number($("#nuevoPrecioSinIva").val())*Number($("#nuevaExistencias").val());
	var editarSubtotalProducto = Number($("#editarPrecioSinIva").val())*Number($("#editarExistencias").val());


	if($(".porcentaje").prop("checked")){

		var valorPorcentaje = $(".nuevoPorcentaje").val();
		
		var porcentaje = Number(($("#nuevoPrecioSinIva").val()*valorPorcentaje/100))+Number($("#nuevoPrecioSinIva").val());

		var editarPorcentaje = Number(($("#editarPrecioCompra").val()*valorPorcentaje/100))+Number($("#editarPrecioSinIva").val());

		$("#nuevoPrecioConIva").val(porcentaje);
		$("#nuevoPrecioConIva").prop("readonly",true);

		$("#editarPrecioConIva").val(editarPorcentaje);
		$("#editarPrecioConIva").prop("readonly",true);

	}

	$("#nuevoSubtotal").val(subtotalProducto);
	$("#editarSubtotal").val(editarSubtotalProducto);

})

/*=============================================
CAMBIO DE PORCENTAJE
=============================================*/

$(".nuevoPorcentaje").change(function(){

	if($(".porcentaje").prop("checked")){

		var valorPorcentaje = $(this).val();
		
		var porcentaje = Number(($("#nuevoPrecioSinIva").val()*valorPorcentaje/100))+Number($("#nuevoPrecioSinIva").val());

		var editarPorcentaje = Number(($("#editarPrecioSinIva").val()*valorPorcentaje/100))+Number($("#editarPrecioSinIva").val());

		$("#nuevoPrecioConIva").val(porcentaje);
		$("#nuevoPrecioConIva").prop("readonly",true);

		$("#editarPrecioConIva").val(editarPorcentaje);
		$("#editarPrecioConIva").prop("readonly",true);

	}

})

$(".porcentaje").on("ifUnchecked",function(){

	$("#nuevoPrecioConIva").prop("readonly",false);
	$("#editarPrecioConIva").prop("readonly",false);

})

$(".porcentaje").on("ifChecked",function(){

	$("#nuevoPrecioConIva").prop("readonly",true);
	$("#editarPrecioConIva").prop("readonly",true);

})

/*=============================================
EDITAR PRODUCTO
=============================================*/

$(".tablaProductos tbody").on("click", "button.btnEditarProducto", function(){

	var idProducto = $(this).attr("idProducto");

	var datos = new FormData();
    datos.append("idProducto", idProducto);

	$.ajax({

      url:"ajax/productos.ajax.php",
      method: "POST",
      data: datos,
      cache: false,
      contentType: false,
      processData: false,
      dataType:"json",
      success:function(respuesta){

      	$("#idProducto").val(respuesta["id"]);

      	$("#editarFactura").val(respuesta["factura"]);

      	$("#editarFecha").val(respuesta["fecha"]);

      	$("#editarProveedores").val(respuesta["nombre"]);

      	$("#editarCategorias").val(respuesta["categoria"]);

      	$("#editarCodigo").val(respuesta["codigo"]);

        $("#editarDescripcion").val(respuesta["descripcion"]);

        $("#editarExistencias").val(respuesta["existencias"]);

        $("#editarUnidad").val(respuesta["unidad"]);

        $("#editarPrecioSinIva").val(respuesta["precio_sin_iva"]);

        $("#editarPrecioConIva").val(respuesta["precio_con_iva"]);

        $("#editarSubtotal").val(respuesta["total"]);

      	}

    })

})

/*=============================================
ELIMINAR PRODUCTO
=============================================*/

$(".tablaProductos tbody").on("click", "button.btnEliminarProducto", function(){

	var idProducto = $(this).attr("idProducto");

	swal({

		title: '¿Está seguro de borrar el alta del producto?',
		text: "¡Si no lo está puede cancelar la acción!",
		type: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        cancelButtonText: 'Cancelar',
        confirmButtonText: 'Si, borrar el alta del producto!'
        }).then(function(result){
        if (result.value) {

        	window.location = "index.php?ruta=productos&idProducto="+idProducto;

        }


	})

})