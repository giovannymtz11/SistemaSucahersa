/*=============================================
EDITAR Sucursales
=============================================*/

$(".tablas").on("click", ".btnEditarSucursal", function(){

	var idSucursal = $(this).attr("idSucursal");

	var datos = new FormData();
    datos.append("idSucursal", idSucursal);

    $.ajax({

      url:"ajax/sucursales.ajax.php",
      method: "POST",
      data: datos,
      cache: false,
      contentType: false,
      processData: false,
      dataType:"json",
      success:function(respuesta){
      
      	 $("#idSucursal").val(respuesta["id"]);
	       $("#editarSucursal").val(respuesta["nombre"]);
	       $("#editarTelefono").val(respuesta["telefono"]);
	       $("#editarDireccion").val(respuesta["direccion"]);
         
	  }

  	})

})

/*=============================================
ELIMINAR sucursal
=============================================*/

$(".tablas").on("click", ".btnEliminarSucursal", function(){

	var idSucursal = $(this).attr("idSucursal");
	
	swal({
        title: '¿Está seguro de borrar la sucursal?',
        text: "¡Si no lo está puede cancelar la acción!",
        type: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        cancelButtonText: 'Cancelar',
        confirmButtonText: '¡Si, borrar sucursal!'
      }).then(function(result){
        if (result.value) {
          
            window.location = "index.php?ruta=sucursales&idSucursal="+idSucursal;
        }

  })

})