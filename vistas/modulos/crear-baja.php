<?php

if($_SESSION["perfil"] == "Consultor"){

  echo '<script>

    window.location = "inicio";

  </script>';

  return;

}

?>

<div class="content-wrapper">

  <section class="content-header">
    
    <h1>
      
      Crear baja
    
    </h1>

    <ol class="breadcrumb">
      
      <li><a href="#"><i class="fa fa-dashboard"></i> Inicio</a></li>
      
      <li class="active">Crear baja</li>
    
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

                <!--=====================================
                ENTRADA DEL USUARIO QUE REALIZA LA BAJA (EL GESTOR)
                ======================================-->
            
                <div class="form-group">
                
                  <div class="input-group">
                    
                    <span class="input-group-addon"><i class="fa fa-user"></i></span> 

                    <input type="text" class="form-control" id="nuevoGestor" value="<?php echo $_SESSION["nombre"]; ?>" readonly>

                    <input type="hidden" name="idGestor" value="<?php echo $_SESSION["id"]; ?>">

                  </div>

                </div> 

                <!--=====================================
                ENTRADA DE LA BAJA
                ======================================-->

                <div class="form-group">
                  
                  <div class="input-group">
                    
                    <span class="input-group-addon"><i class="fa fa-key"></i></span>

                    <?php

                    $item = null;
                    $valor = null;

                    $bajas = ControladorBajas::ctrMostrarBajas($item, $valor);

                    if(!$bajas){

                      echo '<input type="text" class="form-control" id="nuevaBaja" name="nuevaBaja" value="1" readonly>';
                  

                    }else{

                      foreach ($bajas as $key => $value) {
                        
                        
                      
                      }

                      $codigo = $value["codigo"] + 1;



                      echo '<input type="text" class="form-control" id="nuevaBaja" name="nuevaBaja" value="'.$codigo.'" readonly>';
                  

                    }

                    ?>
                    
                    
                  </div>
                
                </div>

                <!--=====================================
                ENTRADA DE LA SUCURSAL
                ======================================--> 

                <div class="form-group">
                  
                  <div class="input-group">
                    
                    <span class="input-group-addon"><i class="fa fa-users"></i></span>
                    
                    <select class="form-control" id="seleccionarSucursal" name="seleccionarSucursal" required>

                      <option value="">Seleccionar sucursal</option>

                      <?php

                        $item = null;
                        $valor = null;

                        $categorias = ControladorSucursales::ctrMostrarSucursales($item, $valor);

                         foreach ($categorias as $key => $value) {

                           echo '<option value="'.$value["id"].'">'.$value["nombre"].'</option>';

                         }

                      ?>

                    </select>
                  
                  </div>
                
                </div>

                <!--=====================================
                ENTRADA PARA AGREGAR PRODUCTO
                ======================================--> 

                <div class="form-group row nuevoProducto">

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
                           
                              <input type="number" class="form-control input-lg" min="0" id="nuevoImpuestoBaja" name="nuevoImpuestoBaja" placeholder="0" required>

                               <input type="hidden" name="nuevoPrecioImpuesto" id="nuevoPrecioImpuesto" required>

                               <input type="hidden" name="nuevoPrecioNeto" id="nuevoPrecioNeto" required>

                              <span class="input-group-addon"><i class="fa fa-percent"></i></span>
                        
                            </div>

                          </td>

                           <td style="width: 50%">
                            
                            <div class="input-group">
                           
                              <span class="input-group-addon"><i class="ion ion-social-usd"></i></span>

                              <input type="text" class="form-control input-lg" id="nuevoTotalBaja" name="nuevoTotalBaja" total="" placeholder="00000" readonly required>

                              <input type="hidden" name="totalBaja" id="totalBaja">
                              
                        
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

            <button type="submit" class="btn btn-primary pull-right">Guardar baja</button>

          </div>

        </form>

        <?php

          $guardarBaja = new ControladorBajas();
          $guardarBaja -> ctrCrearBaja();
          
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