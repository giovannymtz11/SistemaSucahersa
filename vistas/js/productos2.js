/*=============================================
EDITAR PRODUCTO
=============================================*/

$(".tablas").on("click", ".btnEditarProducto2", function(){

	var idProducto2 = $(this).attr("idProducto2");

	var datos = new FormData();
	datos.append("idProducto2", idProducto2);

	$.ajax({
		url: "ajax/productos2.ajax.php",
		method: "POST",
      	data: datos,
      	cache: false,
     	contentType: false,
     	processData: false,
     	dataType:"json",
     	success: function(respuesta){

     		$("#editarProducto2").val(respuesta["nombre_producto"]);
     		$("#editarCodigoProducto").val(respuesta["codigo"]);
     		$("#idProducto2").val(respuesta["id"]);

     	}

	})


})

/*=============================================
ELIMINAR PRODUCTO
=============================================*/

$(".tablas").on("click", ".btnEliminarProducto2", function(){

	var idProducto2 = $(this).attr("idProducto2");

	swal({
	 	title: '¿Está seguro de borrar el producto?',
	 	text: "¡Sí no lo está puede cancelar la acción!",
	 	type: 'warning',
	 	showCancelButton: true,
	 	confirmButtonColor: '#3085d6',
	 	cancelButtonColor: '#d33',
	 	cancelButtonText: 'Cancelar',
	 	confirmButtonText: '¡Sí, borrar producto!'
	}).then(function(result){

	 	if(result.value){

	 		window.location = "index.php?ruta=productos2&idProducto2="+idProducto2;

	 	}

	})

})