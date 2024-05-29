<div class="content-wrapper">

  <section class="content-header">
    
    <h1>
      
      Editar baja
    
    </h1>

    <ol class="breadcrumb">
      
      <li><a href="#"><i class="fa fa-dashboard"></i> Inicio</a></li>
      
      <li class="active">Editar baja</li>
    
    </ol>

  </section>

  <section class="content">

    <div class="row">

      <!--=====================================
      EL FORMULARIO
      ======================================-->
      
      <div class="col-lg-5 col-xs-12">
        
        <div class="box box-success">
          
          <div class="box-header with-border"></div>

          <form role="form" method="post" class="formularioBaja">

            <div class="box-body">
  
              <div class="box">

                <?php

                    $item = "id";
                    $valor = $_GET["idBaja"];

                    $baja = ControladorBajas::ctrMostrarBajas($item, $valor);

                    $itemUsuario = "id";
                    $valorUsuario = $baja["id_usuario"];

                    $usuario = ControladorUsuarios::ctrMostrarUsuarios($itemUsuario, $valorUsuario);

                    $itemSucursal = "id";
                    $valorSucursal = $baja["id_sucursal"];

                    $sucursal = ControladorSucursales::ctrMostrarSucursales($itemSucursal, $valorSucursal);

                    $porcentajeImpuesto = $baja["impuesto"] * 100 / $baja["neto"];

                ?>

                <!--=====================================
                ENTRADA DEL QUE REALIZA LA BAJA (EL GESTOR)
                ======================================-->
            
                <div class="form-group">
                
                  <div class="input-group">
                    
                    <span class="input-group-addon"><i class="fa fa-user"></i></span> 

                    <input type="text" class="form-control" id="nuevoGestor" value="<?php echo $usuario["nombre"]; ?>" readonly>

                    <input type="hidden" name="idGestor" value="<?php echo $usuario["id"]; ?>">

                  </div>

                </div> 

                <!--=====================================
                ENTRADA DE LA BAJA
                ======================================-->

                <div class="form-group">
                  
                  <div class="input-group">
                    
                    <span class="input-group-addon"><i class="fa fa-key"></i></span>

                    <input type="text" class="form-control" id="nuevaBaja" name="editarBaja" value="<?php echo $baja["codigo"]; ?>" readonly>
                    
                  </div>
                
                </div>

                <!--=====================================
                ENTRADA DE LA SUCURSAL
                ======================================--> 

                <div class="form-group">
                  
                  <div class="input-group">
                    
                    <span class="input-group-addon"><i class="fa fa-users"></i></span>
                    
                    <select class="form-control" id="seleccionarSucursal" name="seleccionarSucursal" required>

                    <option value="<?php echo $sucursal["id"]; ?>"><?php echo $sucursal["nombre"]; ?></option>

                    <?php

                      $item = null;
                      $valor = null;

                      $categorias = ControladorSucursales::ctrMostrarSucursales($item, $valor);

                       foreach ($categorias as $key => $value) {

                         echo '<option value="'.$value["id"].'">'.$value["nombre"].'</option>';

                       }

                    ?>

                    </select>
                    
                    <span class="input-group-addon"><button type="button" class="btn btn-default btn-xs" data-toggle="modal" data-target="#modalAgregarSucursal" data-dismiss="modal">Agregar sucursal</button></span>
                  
                  </div>
                
                </div>

                <!--=====================================
                ENTRADA PARA AGREGAR PRODUCTO
                ======================================--> 

                <div class="form-group row nuevoProducto">

                <?php

                $listaProducto = json_decode($baja["productos"], true);

                foreach ($listaProducto as $key => $value) {

                  $item = "id";
                  $valor = $value["id"];
                  $orden = "id";

                  $respuesta = ControladorProductos::ctrMostrarProductos($item, $valor, $orden);

                  $existenciasAntiguas = $respuesta["existencias"] + $value["cantidad"];

                  echo '<div class="row" style="padding:5px 15px">
            
                          <div class="col-xs-6" style="padding-right:0px">
                            
                            <div class="input-group">
                                
                              <span class="input-group-addon"><button type="button" class="btn btn-danger btn-xs quitarProducto" idProducto="'.$value["id"].'"><i class="fa fa-times"></i></button></span>

                              <input type="text" class="form-control nuevaDescripcionProducto" idProducto="'.$value["id"].'" name="agregarProducto" value="'.$value["descripcion"].'" readonly required>

                            </div>

                          </div>

                          <div class="col-xs-3">
                              
                            <input type="number" class="form-control nuevaCantidadProducto" name="nuevaCantidadProducto" min="1" value="'.$value["cantidad"].'" existencias="'.$existenciasAntiguas.'" nuevaExistencias="'.$value["existencias"].'" required>

                          </div>

                          <div class="col-xs-3 ingresoPrecio" style="padding-left:0px">

                            <div class="input-group">

                                <span class="input-group-addon"><i class="ion ion-social-usd"></i></span>
                                   
                                <input type="text" class="form-control nuevoPrecioProducto" precioReal="'.$respuesta["precio_sin_iva"].'" name="nuevoPrecioProducto" value="'.$value["total"].'" readonly required>
                   
                              </div>
                               
                            </div>

                          </div>';
                  }

                  ?>

                </div>

                <input type="hidden" id="listaProductos" name="listaProductos">

                <!--====================================================
                BOTÓN PARA AGREGAR PRODUCTO DESDE UN DISPOSITIVO PEQUEÑO
                =====================================================-->

                <button type="button" class="btn btn-default hidden-lg btnAgregarProducto">Agregar producto</button>

                <hr>

                <div class="row">
                  <!--=====================================
                  ENTRADA DE IMPUESTOS Y TOTAL
                  ======================================-->
                  
                  <div class="col-xs-8 pull-right">
                    
                    <table class="table">

                      <thead>

                        <tr>

                          <th>Impuesto</th>
                          <th>Total</th>

                        </tr>

                      </thead>

                      <tbody>
                      
                        <tr>

                          <td style="width: 50%">
                            
                            <div class="input-group">
                           
                              <input type="number" class="form-control input-lg" min="0" id="nuevoImpuestoBaja" name="nuevoImpuestoBaja" value="<?php echo $porcentajeImpuesto; ?>" required>

                              <input type="hidden" name="nuevoPrecioImpuesto" id="nuevoPrecioImpuesto" value="<?php echo $baja["impuesto"]; ?>" required>

                              <input type="hidden" name="nuevoPrecioNeto" id="nuevoPrecioNeto" value="<?php echo $baja["neto"]; ?>"required>

                              <span class="input-group-addon"><i class="fa fa-percent"></i></span>
                        
                            </div>

                          </td>

                           <td style="width: 50%">
                            
                            <div class="input-group">
                           
                              <span class="input-group-addon"><i class="ion ion-social-usd"></i></span>

                              <input type="text" class="form-control input-lg" id="nuevoTotalBaja" name="nuevoTotalBaja" total="<?php echo $baja["neto"]; ?>" value="<?php echo $baja["total"]; ?>" readonly required>

                              <input type="hidden" name="totalBaja" value="<?php echo $venta["total"]; ?>" id="totalBaja">
                              
                        
                            </div>

                          </td>

                        </tr>

                      </tbody>

                    </table>

                  </div>

                </div>
      
              </div>

          </div>

          <div class="box-footer">

            <button type="submit" class="btn btn-primary pull-right">Guardar cambios</button>

          </div>

        </form>

        <?php

          $editarBaja = new ControladorBajas();
          $editarBaja -> ctrEditarBaja();
          
        ?>

        </div>
            
      </div>

      <!--=====================================
      LA TABLA DE PRODUCTOS
      ======================================-->

      <div class="col-lg-7 hidden-md hidden-sm hidden-xs">
        
        <div class="box box-warning">

          <div class="box-header with-border"></div>

          <div class="box-body">
            
            <table class="table table-bordered table-striped dt-responsive tablaBajas">
              
               <thead>

                  <tr>

                  <th>Factura</th>
                  <th>Código</th>
                  <th>Descripcion</th>
                  <th>Existencia</th>
                  <th>Acciones</th>

                </tr>

              </thead>

            </table>

          </div>

        </div>


      </div>

    </div>
   
  </section>

</div>

<!--=====================================
MODAL AGREGAR Sucursal
======================================-->

<div id="modalAgregarSucursal" class="modal fade" role="dialog">
  
  <div class="modal-dialog">

    <div class="modal-content">

      <form role="form" method="post">

        <!--=====================================
        CABEZA DEL MODAL
        ======================================-->

        <div class="modal-header" style="background:#FF5733; color:white">

          <button type="button" class="close" data-dismiss="modal">&times;</button>

          <h4 class="modal-title">Agregar sucursal</h4>

        </div>

        <!--=====================================
        CUERPO DEL MODAL
        ======================================-->

        <div class="modal-body">

          <div class="box-body">

            <!--Entrada para seleccionar su sí es sucursal grande, mediana o chica-->

            <div class="form-group">

              <div class="input-group">
                
                <span class="input-group-addon"><i class="fa fa-users"></i></span>

                <select class="form-control input-lg" name="nuevoTipoSucursal" id="">
                  
                  <option value="">Seleccionar tipo de sucursal</option>

                  <option value="PLUS A">PLUS A</option>

                  <option value="A">A</option>

                  <option value="B">B</option>

                  <option value="C">C</option>

                </select>
                
              </div>
              
            </div>

            <!-- ENTRADA PARA EL NOMBRE -->
            
            <div class="form-group">
              
              <div class="input-group">
              
                <span class="input-group-addon"><i class="fa fa-user"></i></span> 

                <input type="text" class="form-control input-lg" name="nuevaSucursal" placeholder="Ingresar nombre" required>

              </div>

            </div>

            <!-- ENTRADA PARA EL TELÉFONO -->
            
            <div class="form-group">
              
              <div class="input-group">
              
                <span class="input-group-addon"><i class="fa fa-phone"></i></span> 

                <input type="text" class="form-control input-lg" name="nuevoTelefono" placeholder="Ingresar teléfono" data-inputmask="'mask':'(999) 999-9999'" data-mask required>

              </div>

            </div>

            <!-- ENTRADA PARA LA DIRECCIÓN -->
            
            <div class="form-group">
              
              <div class="input-group">
              
                <span class="input-group-addon"><i class="fa fa-map-marker"></i></span> 

                <input type="text" class="form-control input-lg" name="nuevaDireccion" placeholder="Ingresar dirección" required>

              </div>

            </div>
  
          </div>

        </div>

        <!--=====================================
        PIE DEL MODAL
        ======================================-->

        <div class="modal-footer">

          <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Salir</button>

          <button type="submit" class="btn btn-primary">Guardar sucursal</button>

        </div>

      </form>

      <?php

        $crearSucursal = new ControladorSucursales();
        $crearSucursal -> ctrCrearSucursal();

      ?>

    </div>

  </div>

</div>