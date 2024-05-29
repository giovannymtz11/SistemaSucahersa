<div class="content-wrapper">

  <section class="content-header">
    
    <h1>
      
      Administrar inventario de suministros
    
    </h1>

    <ol class="breadcrumb">
      
      <li><a href="inicio"><i class="fa fa-dashboard"></i> Inicio</a></li>
      
      <li class="active">Administrar inventario de suministros</li>
    
    </ol>

  </section>

  <section class="content">

    <div class="box">

      <div class="box-header with-border">
  
        <button class="btn btn-warning" data-toggle="modal" data-target="#modalAgregarProducto">
          
          Agregar alta

        </button>

      </div>

      <div class="box-body">
        
       <table class="table table-bordered table-striped dt-responsive tablaProductos" width="100%">
         
        <thead>

         <tr>
           
           <th>Factura</th>
           <th>Proveedor</th>
           <th>Categoría</th>
           <th>Código</th>
           <th>Descripción</th>
           <th>Existencias</th>
           <th>Unidad</th>
           <th>Precio por unidad</th>
           <!--<th>Precio individual con iva</th>-->
           <th>Total</th>
           <th>Agregado</th>
           <th>Acciones</th>

         </tr> 

        </thead>

       </table>

       <input type="hidden" value="<?php echo $_SESSION['perfil']; ?>" id="perfilOculto">

      </div>

    </div>

  </section>

  <!--=====================================
  TABLA TOTAL INVENTARIO
  ======================================-->

  <?php

    $totalInventario = ControladorProductos::ctrSumaTotalInventario();

  ?>

  <section class = "content">

    <div class = "row">
      
      <div class="col-lg-5 col-xs-12">

        <div class="box box-success">
          
          <div class="box-header with-border"></div>

          <form role="form" method="post">

            <div class="box-body">
              
              <table>

                <tr>
           
                  <th>Total </th>
                  
                  <td> $ <?php echo number_format($totalInventario["total"],2); ?></td>

                </tr> 

              </table>

            </div>

          </form>

        </div>
        
      </div>

      <div class="col-lg-7 hidden-md hidden-sm hidden-xs">
        
      </div>

    </div>
    
  </section>

</div>


<!--=====================================
MODAL AGREGAR PRODUCTO AL INVENTARIO
======================================-->

<div id="modalAgregarProducto" class="modal fade" role="dialog">
  
  <div class="modal-dialog">

    <div class="modal-content">

      <form role="form" method="post" enctype="multipart/form-data">

        <!--=====================================
        CABEZA DEL MODAL
        ======================================-->

        <div class="modal-header" style="background:#FF5733; color:white">

          <button type="button" class="close" data-dismiss="modal">&times;</button>

          <h4 class="modal-title">Agregar producto</h4>

        </div>

        <!--=====================================
        CUERPO DEL MODAL
        ======================================-->

        <div class="modal-body">

          <div class="box-body">

            <!--=====================================
            ENTRADA PARA LA FACTURA DEL PRODUCTO
            ======================================-->

            <div class="form-group">

              <div class="input-group">
                
                <span class="input-group-addon"><i class="fa fa-user"></i></span>

                <input type="text" class="form-control input-lg" id="nuevaFactura" name="nuevaFactura" placeholder="Ingresar factura">

              </div>
              
            </div>

            <!--=====================================
            ENTRADA PARA LA FECHA
            ======================================-->
            
            <div class="form-group">
              
              <div class="input-group">
              
                <span class="input-group-addon"><i class="fa fa-calendar"></i></span> 

                <input type="text" class="form-control input-lg" name="nuevaFecha" id="nuevaFecha"placeholder="Ingresar fecha" data-inputmask="'alias': 'yyyy/mm/dd'" data-mask required>

              </div>

            </div>

            <!--=====================================
              ENTRADA PARA EL PROVEEDOR DEL PRODUCTO
            ======================================-->

            <div class="form-group">

              <div class="input-group">
                
                <span class="input-group-addon"><i class="fa fa-users"></i></span>

                <select class="form-control input-lg" name="nuevoProveedor" required>

                  <option value="">Seleccionar proveedor</option>

                  <?php

                  $item = null;
                  $valor = null;

                  $proveedor = ControladorProveedores::ctrMostrarProveedores($item, $valor);

                  foreach ($proveedor as $key => $value){

                    echo '<option value="'.$value["nombre"].'">'.$value["nombre"].'</option>';

                  }

                  ?>

                </select>
                
              </div>
              
            </div>

            <!--Entrada para la categoría-->

            <div class="form-group">

              <div class="input-group">
                
                <span class="input-group-addon"><i class="fa fa-users"></i></span>

                <select class="form-control input-lg" name="nuevaCategoria" required>

                  <option value="">Seleccionar categorias</option>

                  <?php

                  $item = null;
                  $valor = null;

                  $categoria = ControladorCategorias::ctrMostrarCategorias($item, $valor);

                  foreach ($categoria as $key => $value){

                    echo '<option value="'.$value["categoria"].'">'.$value["categoria"].'</option>';

                  }

                  ?>

                </select>
                
              </div>
              
            </div>

            <!--ENTRADA PARA EL CÓDIGO-->

            <div class="form-group">

              <div class="input-group">
                
                <span class="input-group-addon"><i class="fa fa-users"></i></span>

                <select class="form-control input-lg" name="nuevoCodigo" id="nuevoCodigo" required>

                  <option value="">Seleccionar código</option>

                  <?php

                  $item = null;
                  $valor = null;

                  $codigo = ControladorProductos2::ctrMostrarProductos2($item, $valor);

                  foreach ($codigo as $key => $value){

                    echo '<option value="'.$value["codigo"].'">'.$value["codigo"].'</option>';

                  }

                  ?>

                </select>
                
              </div>
              
            </div>

            <!--ENTRADA PARA EL DESCRIPCIÓN-->

            <div class="form-group">

              <div class="input-group">
                
                <span class="input-group-addon"><i class="fa fa-users"></i></span>

                <select class="form-control input-lg" name="nuevaDescripcion" required>

                  <option value="">Seleccionar descripción</option>

                  <?php

                  $item = null;
                  $valor = null;

                  $descripcion = ControladorProductos2::ctrMostrarProductos2($item, $valor);

                  foreach ($descripcion as $key => $value){

                    echo '<option value="'.$value["nombre_producto"].'">'.$value["nombre_producto"].'</option>';

                  }

                  ?>

                </select>
                
              </div>
              
            </div>

            <!--=========================================
              ENTRADA PARA LA EXISTENCIA
            ==========================================-->

             <div class="form-group">
              
              <div class="input-group">
              
                <span class="input-group-addon"><i class="fa fa-check"></i></span> 

                <input type="number" class="form-control input-lg" id="nuevaExistencias" name="nuevaExistencias" placeholder="Existencias" required>

              </div>

            </div>

            <!--=========================================
              ENTRADA PARA EL TIPO DE UNIDAD DEL PRODUCTO
            ==========================================-->

            <div class="form-group">

              <div class="input-group">
                
                <span class="input-group-addon"><i class="fa fa-users"></i></span>

                <select class="form-control input-lg" name="nuevaUnidad" id="nuevaUnidad" required>

                  <option value="">Seleccionar la unidad</option>

                  <option value="Piezas">Piezas</option>

                  <option value="Rollos">Rollos</option>

                  <option value="Litros">Litros</option>
                  
                  <option value="Mililitros">Mililitros</option>

                  <option value="Cajas">Cajas</option>

                  <option value="Bolsas">Bolsas</option>
                  
                  <option value="Hojas">Hojas</option>

                </select>
                
              </div>
              
            </div>

             <!-- ENTRADA PARA PRECIO sin Iva -->

            <div class="form-group row">

                <div class="col-xs-12 col-sm-6">
                
                  <div class="input-group">
                  
                    <span class="input-group-addon"><i class="fa fa-arrow-up"></i></span> 

                    <input type="number" class="form-control input-lg" id="nuevoPrecioSinIva" name="nuevoPrecioSinIva" min="0" step="any" placeholder="Precio por unidad de compra sin iva" required>

                  </div>

                </div>

                <!-- ENTRADA PARA PRECIO con Iva -->

                <div class="col-xs-12 col-sm-6">
                
                  <div class="input-group">
                  
                    <span class="input-group-addon"><i class="fa fa-arrow-down"></i></span> 

                    <input type="number" class="form-control input-lg" id="nuevoPrecioConIva" name="nuevoPrecioConIva" min="0" step="any" placeholder="Precio con Iva" required>

                  </div>
                
                  <br>

                  <!-- CHECKBOX PARA PORCENTAJE -->

                  <div class="col-xs-6">
                    
                    <div class="form-group">
                      
                      <label>
                        
                        <input type="checkbox" class="minimal porcentaje" checked>
                        Utilizar porcentaje
                      </label>

                    </div>

                  </div>

                  <!-- ENTRADA PARA PORCENTAJE -->

                  <div class="col-xs-6" style="padding:0">
                    
                    <div class="input-group">
                      
                      <input type="number" class="form-control input-lg nuevoPorcentaje" min="0" value="16" required>

                      <span class="input-group-addon"><i class="fa fa-percent"></i></span>

                    </div>

                  </div>

                </div>

            </div>

            <!--ENTRADA PARA EL SUBTOTAL DEL PRODUCTO POR UNIDAD (SIN IVA)-->

            <div class="form-group row">

              <div class="col-xs-12 col-sm-6">
                
                <div class="input-group">
                  
                  <span class="input-group-addon"><i class="fa fa-arrow-up"></i></span> 

                  <input type="number" class="form-control input-lg" id="nuevoSubtotal" name="nuevoSubtotal" min="0" step="any" placeholder="Total" required>

                </div>

              </div>

            </div>

          </div>

        </div>

        <!--=====================================
        PIE DEL MODAL
        ======================================-->

        <div class="modal-footer">

          <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Salir</button>

          <button type="submit" class="btn btn-primary">Guardar producto</button>

        </div>

      </form>

      <?php

        $crearProducto = new ControladorProductos();

        $crearProducto -> ctrCrearProducto();

      ?>

    </div>

  </div>

</div>


<!--=====================================
MODAL EDITAR SUMINISTRO DADO DE ALTA
======================================-->

<div id="modalEditarProducto" class="modal fade" role="dialog">
  
  <div class="modal-dialog">

    <div class="modal-content">

      <form role="form" method="post" enctype="multipart/form-data">

        <!--=====================================
        CABEZA DEL MODAL
        ======================================-->

        <div class="modal-header" style="background:#FF5733; color:white">

          <button type="button" class="close" data-dismiss="modal">&times;</button>

          <h4 class="modal-title">Editar producto</h4>

        </div>

        <!--=====================================
        CUERPO DEL MODAL Editar Producto
        ======================================-->

        <div class="modal-body">

          <div class="box-body">

            <!--=====================================
            ENTRADA PARA EDITAR LA FACTURA
            ======================================-->

            <div class="form-group">

              <div class="input-group">
                
                <span class="input-group-addon"><i class="fa fa-product-hunt"></i></span>

                <input type="text" class="form-control input-lg" id="editarFactura" name="editarFactura" required>

                <input type="hidden"  name="idProducto" id="idProducto" required>

              </div>
              
            </div>

            <!--=====================================
            EDITAR LA ENTRADA PARA LA FECHA
            ======================================-->
            
            <div class="form-group">
              
              <div class="input-group">
              
                <span class="input-group-addon"><i class="fa fa-calendar"></i></span> 

                <input type="text" class="form-control input-lg" name="editarFecha" id="editarFecha" data-inputmask="'alias': 'yyyy/mm/dd'" data-mask required>

              </div>

            </div>

            <!--=====================================
            ENTRADA PARA EDITAR EL PROVEEDOR
            ======================================-->

            <div class="form-group">

              <div class="input-group">
                
                <span class="input-group-addon"><i class="fa fa-users"></i></span>

                <select class="form-control input-lg" name="editarProveedor" id="editarProveedor" required>

                  <?php

                  $item = null;
                  $valor = null;

                  $proveedor = ControladorProveedores::ctrMostrarProveedores($item, $valor);

                  foreach ($proveedor as $key => $value){

                    echo '<option value="'.$value["nombre"].'">'.$value["nombre"].'</option>';

                  }

                  ?>

                </select>
                
              </div>
              
            </div>

            <!--=====================================
            ENTRADA PARA EDITAR LA CATEGORÍA
            ======================================-->

            <div class="form-group">

              <div class="input-group">
                
                <span class="input-group-addon"><i class="fa fa-users"></i></span>

                <select class="form-control input-lg" name="editarCategoria" id="editarCategoria" required>

                  <?php

                  $item = null;
                  $valor = null;

                  $categoria = ControladorCategorias::ctrMostrarCategorias($item, $valor);

                  foreach ($categoria as $key => $value){

                    echo '<option value="'.$value["categoria"].'">'.$value["categoria"].'</option>';

                  }

                  ?>

                </select>
                
              </div>
              
            </div>

            <!--=====================================
            ENTRADA PARA EDITAR EL CÓDIGO
            ======================================-->

            <div class="form-group">

              <div class="input-group">
                
                <span class="input-group-addon"><i class="fa fa-users"></i></span>

                <select class="form-control input-lg" name="editarCodigo" id="editarCodigo" required>

                  <?php

                  $item = null;
                  $valor = null;

                  $codigo = ControladorProductos2::ctrMostrarProductos2($item, $valor);

                  foreach ($codigo as $key => $value){

                    echo '<option value="'.$value["codigo"].'">'.$value["codigo"].'</option>';

                  }

                  ?>

                </select>
                
              </div>
              
            </div>

            <!--=====================================
            ENTRADA PARA EDITAR LA DESCRIPCIÓN
            ======================================-->

            <div class="form-group">

              <div class="input-group">
                
                <span class="input-group-addon"><i class="fa fa-users"></i></span>

                <select class="form-control input-lg" name="editarDescripcion" id="editarDescripcion"required>

                  <?php

                  $item = null;
                  $valor = null;

                  $descripcion = ControladorProductos2::ctrMostrarProductos2($item, $valor);

                  foreach ($descripcion as $key => $value){

                    echo '<option value="'.$value["nombre_producto"].'">'.$value["nombre_producto"].'</option>';

                  }

                  ?>

                </select>
                
              </div>
              
            </div>

            <!--=====================================
            ENTRADA PARA EDITAR LA ALTA
            ======================================-->

            <div class="form-group">
              
              <div class="input-group">
              
                <span class="input-group-addon"><i class="fa fa-check"></i></span> 

                <input type="number" class="form-control input-lg" name="editarExistencias" id="editarExistencias" min="0" required>

              </div>

            </div>

            <!--=========================================
              ENTRADA PARA EL TIPO DE UNIDAD DEL PRODUCTO
            ==========================================-->

            <div class="form-group">

              <div class="input-group">
                
                <span class="input-group-addon"><i class="fa fa-users"></i></span>

                <select class="form-control input-lg" name="editarUnidad" id="editarUnidad" required>

                  <option value="Piezas">Piezas</option>

                  <option value="Rollos">Rollos</option>

                  <option value="Litros">Litros</option>
                  
                  <option value="Mililitros">Mililitros</option>

                  <option value="Cajas">Cajas</option>

                  <option value="Bolsas">Bolsas</option>
                  
                  <option value="Hojas">Hojas</option>

                </select>
                
              </div>
              
            </div>

             <!-- ENTRADA PARA PRECIO POR -->

            <div class="form-group row">

                <div class="col-xs-12 col-sm-6">
                
                  <div class="input-group">
                  
                    <span class="input-group-addon"><i class="fa fa-arrow-up"></i></span> 

                    <input type="number" class="form-control input-lg" name="editarPrecioSinIva" id="editarPrecioSinIva" min="0" step="any" required>

                  </div>

                </div>

                <!-- ENTRADA PARA PRECIO con Iva -->

                <div class="col-xs-12 col-sm-6">
                
                  <div class="input-group">
                  
                    <span class="input-group-addon"><i class="fa fa-arrow-down"></i></span> 

                    <input type="number" class="form-control input-lg" id="editarPrecioConIva" name="editarPrecioConIva" min="0" step="any" readonly required>

                  </div>
                
                  <br>

                  <!-- CHECKBOX PARA PORCENTAJE -->

                  <div class="col-xs-6">
                    
                    <div class="form-group">
                      
                      <label>
                        
                        <input type="checkbox" class="minimal porcentaje" checked>
                        Utilizar porcentaje
                      </label>

                    </div>

                  </div>

                  <!-- ENTRADA PARA PORCENTAJE -->

                  <div class="col-xs-6" style="padding:0">
                    
                    <div class="input-group">
                      
                      <input type="number" class="form-control input-lg nuevoPorcentaje" min="0" value="16" required>

                      <span class="input-group-addon"><i class="fa fa-percent"></i></span>

                    </div>

                  </div>

                </div>

            </div>

            <!--ENTRADA PARA EL SUBTOTAL DEL PRODUCTO POR UNIDAD (SIN IVA)-->

            <div class="form-group row">

              <div class="col-xs-12 col-sm-6">
                
                <div class="input-group">
                  
                  <span class="input-group-addon"><i class="fa fa-arrow-up"></i></span> 

                  <input type="number" class="form-control input-lg" id="editarSubtotal" name="editarSubtotal" min="0" step="any" required>

                </div>

              </div>

            </div>

          </div>

        </div>

        <!--=====================================
        PIE DEL MODAL
        ======================================-->

        <div class="modal-footer">

          <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Salir</button>

          <button type="submit" class="btn btn-primary">Guardar cambios</button>

        </div>

      </form>

      <?php

        $editarProducto = new ControladorProductos();
        $editarProducto -> ctrEditarProducto();

      ?>

    </div>

  </div>

</div>

<?php

  $eliminarProducto = new ControladorProductos();
  $eliminarProducto -> ctrEliminarProducto();

?>