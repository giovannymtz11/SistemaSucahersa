<div class="content-wrapper">

  <section class="content-header">
    
    <h1>
      
      Administrar proveedores
    
    </h1>

    <ol class="breadcrumb">
      
      <li><a href="inicio"><i class="fa fa-dashboard"></i> Inicio</a></li>
      
      <li class="active">Administrar proveedores</li>
    
    </ol>

  </section>

  <section class="content">

    <div class="box">

      <div class="box-header with-border">
  
        <button class="btn btn-warning" data-toggle="modal" data-target="#modalAgregarProveedor">
          
          Agregar proveedor

        </button>

      </div>

      <div class="box-body">
        
        <table class="table table-bordered table-striped dt-responsive tablas" width="100%">
         
          <thead>
         
            <tr>
             
              <th>Proveedor</th>
              <th>Domicilio</th>
              <th>Correo</th>
              <th>Teléfono</th>
              <th>Régimen Fiscal</th>
              <th>RFC</th>
              <th>Taza IVA</th>
              <th>Ingreso al sistema</th>
              <th>Acciones</th>

            </tr> 

          </thead>

          <tbody>

            <?php

              $item = null;
              $valor = null;

              $proveedores = ControladorProveedores::ctrMostrarProveedores($item, $valor);

              foreach ($proveedores as $key => $value){

                echo '<tr>

                        <td>'.$value["nombre"].'</td>

                        <td>'.$value["direccion"].'</td>

                        <td>'.$value["correo"].'</td>

                        <td>'.$value["telefono"].'</td>

                        <td>'.$value["regimen"].'</td>

                        <td>'.$value["rfc"].'</td>

                        <td>'.$value["iva"].'</td>

                        <td>'.$value["fecha"].'</td>

                        <td>

                          <div class="btn-group">

                            <button class="btn btn-warning btnEditarProveedor" data-toggle="modal" data-target="#modalEditarProveedor" idProveedor="'.$value["id"].'"><i class="fa fa-pencil"></i></button>

                            <button class="btn btn-danger btnEliminarProveedor" idProveedor="'.$value["id"].'"><i class="fa fa-times"></i></button>
                            
                          </div>
                          
                        </td>

                      </tr>';

              }

            ?>

          </tbody>

        </table>

      </div>

    </div>

  </section>

</div>


<!--=====================================
MODAL AGREGAR PROVEEDOR
======================================-->

<div id="modalAgregarProveedor" class="modal fade" role="dialog">
  
  <div class="modal-dialog">

    <div class="modal-content">

      <form role="form" method="post">

        <!--=====================================
        CABEZA DEL MODAL
        ======================================-->

        <div class="modal-header" style="background:#FF5733; color:white">

          <button type="button" class="close" data-dismiss="modal">&times;</button>

          <h4 class="modal-title">Agregar proveedor</h4>

        </div>

        <!--=====================================
        CUERPO DEL MODAL
        ======================================-->

        <div class="modal-body">

          <div class="box-body">

            <!--=====================================
            ENTRADA PARA EL NOMBRE DEL PROVEEDOR
            ======================================-->
            
            <div class="form-group">
              
              <div class="input-group">
              
                <span class="input-group-addon"><i class="fa fa-user"></i></span> 

                <input type="text" class="form-control input-lg" name="nuevoProveedor" placeholder="Ingresar proveedor" required>

              </div>

            </div>

            <!--=====================================
            ENTRADA PARA EL NUEVO DOMICILIO
            ======================================-->
            
            <div class="form-group">
              
              <div class="input-group">
              
                <span class="input-group-addon"><i class="fa fa-map-marker"></i></span> 

                <input type="text" class="form-control input-lg" name="nuevaDireccionProveedor" placeholder="Ingresar dirección" required>

              </div>

            </div>

            <!--=====================================
            ENTRADA PARA EL CORREO
            ======================================-->
            
            <div class="form-group">
              
              <div class="input-group">
              
                <span class="input-group-addon"><i class="fa fa-user"></i></span> 

                <input type="email" class="form-control input-lg" name="nuevoEmail" placeholder="Ingresar correo electrónico" required>

              </div>

            </div>

            <!--=====================================
            ENTRADA PARA EL TELÉFONO DEL PROVEEDOR
            ======================================-->
            
            <div class="form-group">
              
              <div class="input-group">
              
                <span class="input-group-addon"><i class="fa fa-phone"></i></span> 

                <input type="text" class="form-control input-lg" name="nuevoTelefonoProveedor" placeholder="Ingresar teléfono" data-inputmask="'mask':'(999) 999-9999'" data-mask required>

              </div>

            </div>

            <!--========================================
            ENTRADA PARA EL RÉGIMEN FISCAL DEL PROVEEDOR
            =========================================-->

            <div class="form-group">

              <div class="input-group">
                
                <span class="input-group-addon"><i class="fa fa-users"></i></span>

                <select class="form-control input-lg" name="nuevoRegimen" required>

                  <option value="">Seleccionar Régimen Fiscal</option>

                  <option value="General de Ley Personas Morales">General de Ley Personas Morales</option>

                  <option value="Personas Morales con Fines no Lucrativos">Personas Morales con Fines no Lucrativos</option>

                  <option value="Sueldos y Salarios e Ingresos Asimilados a Salarios">Sueldos y Salarios e Ingresos Asimilados a Salarios</option>

                  <option value="Arrendamiento">Arrendamiento</option>

                  <option value="Régimen de Enajenación o Adquisición de Bienes">Régimen de Enajenación o Adquisición de Bienes</option>

                  <option value="Demás ingresos">Demás ingresos</option>

                  <option value="Residentes en el Extranjero sin Establecimiento Permanente en México">Residentes en el Extranjero sin Establecimiento Permanente en México</option>

                  <option value="Ingresos por Dividendos (socios y accionistas)">Ingresos por Dividendos (socios y accionistas)</option>

                  <option value="Personas Físicas con Actividades Empresariales y Profesionales">Personas Físicas con Actividades Empresariales y Profesionales</option>

                  <option value="Ingresos por intereses">Ingresos por intereses</option>

                  <option value="Régimen de los ingresos por obtención de premios">Régimen de los ingresos por obtención de premios</option>

                  <option value="Sin obligaciones fiscales">Sin obligaciones fiscales</option>

                  <option value="Sociedades Cooperativas de Producción que optan por diferir sus ingresos">Sociedades Cooperativas de Producción que optan por diferir sus ingresos</option>

                  <option value="Incorporación Fiscal">Incorporación Fiscal</option>

                  <option value="Actividades Agrícolas, Ganaderas, Silvícolas y Pesqueras">Actividades Agrícolas, Ganaderas, Silvícolas y Pesqueras</option>

                  <option value="Opcional para Grupos de Sociedades">Opcional para Grupos de Sociedades</option>

                  <option value="Coordinados">Coordinados</option>

                  <option value="Régimen de las Actividades Empresariales con ingresos a través de Plataformas Tecnológicas">Régimen de las Actividades Empresariales con ingresos a través de Plataformas Tecnológicas</option>

                  <option value="Régimen Simplificado de Confianza">Régimen Simplificado de Confianza</option>

                </select>
                
              </div>
              
            </div>

            <!--=====================================
            ENTRADA PARA EL RFC DEL PROVEEDOR
            ======================================-->
            
            <div class="form-group">
              
              <div class="input-group">
              
                <span class="input-group-addon"><i class="fa fa-user"></i></span> 

                <input type="text" class="form-control input-lg" name="nuevoRfc" placeholder="Ingresar RFC" required>

              </div>

            </div>

            <!--=====================================
            ENTRADA PARA LA TAZA DE IVA
            ======================================-->
            
            <div class="form-group">
              
              <div class="input-group">
              
                <span class="input-group-addon"><i class="fa fa-user"></i></span> 

                <input type="number" class="form-control input-lg" name="nuevoIva" placeholder="Ingresar la taza de IVA" required>

              </div>

            </div>
  
          </div>

        </div>

        <!--=====================================
        PIE DEL MODAL
        ======================================-->

        <div class="modal-footer">

          <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Salir</button>

          <button type="submit" class="btn btn-primary">Guardar proveedor</button>

        </div>

      </form>

      <?php

        $crearProveedor = new ControladorProveedores();
        $crearProveedor -> ctrCrearProveedor();

      ?>

    </div>

  </div>

</div>


<!--=====================================
MODAL PARA EDITAR PROVEEDOR
======================================-->

<div id="modalEditarProveedor" class="modal fade" role="dialog">
  
  <div class="modal-dialog">

    <div class="modal-content">

      <form role="form" method="post">

        <!--=====================================
        CABEZA DEL MODAL
        ======================================-->

        <div class="modal-header" style="background:#FF5733; color:white">

          <button type="button" class="close" data-dismiss="modal">&times;</button>

          <h4 class="modal-title">Editar proveedor</h4>

        </div>

        <!--=====================================
        CUERPO DEL MODAL
        ======================================-->

        <div class="modal-body">

          <div class="box-body">

            <!--=======================================
            ENTRADA PARA EDITAR EL NOMBRE DEL PROVEEDOR
            ========================================-->
            
            <div class="form-group">
              
              <div class="input-group">
              
                <span class="input-group-addon"><i class="fa fa-user"></i></span> 

                <input type="text" class="form-control input-lg" name="editarProveedor" id="editarProveedor" required>

                <input type="hidden" id="idProveedor" name="idProveedor">

              </div>

            </div>

            <!--==========================================
            ENTRADA PARA EDITAR LA DIRECCIÓN DEL PROVEEDOR
            ========================================-->
            
            <div class="form-group">
              
              <div class="input-group">
              
                <span class="input-group-addon"><i class="fa fa-map-marker"></i></span> 

                <input type="text" class="form-control input-lg" name="editarDireccionProveedor" id="editarDireccionProveedor" required>

              </div>

            </div>

            <!--=====================================
            ENTRADA PARA EDITAR EL CORREO
            ======================================-->
            
            <div class="form-group">
              
              <div class="input-group">
              
                <span class="input-group-addon"><i class="fa fa-user"></i></span> 

                <input type="email" class="form-control input-lg" name="editarEmail" id="editarEmail" required>

              </div>

            </div>

            <!--=========================================
            ENTRADA PARA EDITAR EL TELÉFONO DEL PROVEEDOR
            ==========================================-->
            
            <div class="form-group">
              
              <div class="input-group">
              
                <span class="input-group-addon"><i class="fa fa-phone"></i></span> 

                <input type="text" class="form-control input-lg" name="editarTelefonoProveedor" id="editarTelefonoProveedor" data-inputmask="'mask':'(999) 999-9999'" data-mask required>

              </div>

            </div>

            <!--===============================================
            ENTRADA PARA EDITAR EL RÉGIMEN FISCAL DEL PROVEEDOR
            ================================================-->

            <div class="form-group">

              <div class="input-group">
                
                <span class="input-group-addon"><i class="fa fa-users"></i></span>

                <select class="form-control input-lg" name="editarRegimen" id="editarRegimen" required>

                  <option value="General de Ley Personas Morales">General de Ley Personas Morales</option>

                  <option value="Personas Morales con Fines no Lucrativos">Personas Morales con Fines no Lucrativos</option>

                  <option value="Sueldos y Salarios e Ingresos Asimilados a Salarios">Sueldos y Salarios e Ingresos Asimilados a Salarios</option>

                  <option value="Arrendamiento">Arrendamiento</option>

                  <option value="Régimen de Enajenación o Adquisición de Bienes">Régimen de Enajenación o Adquisición de Bienes</option>

                  <option value="Demás ingresos">Demás ingresos</option>

                  <option value="Residentes en el Extranjero sin Establecimiento Permanente en México">Residentes en el Extranjero sin Establecimiento Permanente en México</option>

                  <option value="Ingresos por Dividendos (socios y accionistas)">Ingresos por Dividendos (socios y accionistas)</option>

                  <option value="Personas Físicas con Actividades Empresariales y Profesionales">Personas Físicas con Actividades Empresariales y Profesionales</option>

                  <option value="Ingresos por intereses">Ingresos por intereses</option>

                  <option value="Régimen de los ingresos por obtención de premios">Régimen de los ingresos por obtención de premios</option>

                  <option value="Sin obligaciones fiscales">Sin obligaciones fiscales</option>

                  <option value="Sociedades Cooperativas de Producción que optan por diferir sus ingresos">Sociedades Cooperativas de Producción que optan por diferir sus ingresos</option>

                  <option value="Incorporación Fiscal">Incorporación Fiscal</option>

                  <option value="Actividades Agrícolas, Ganaderas, Silvícolas y Pesqueras">Actividades Agrícolas, Ganaderas, Silvícolas y Pesqueras</option>

                  <option value="Opcional para Grupos de Sociedades">Opcional para Grupos de Sociedades</option>

                  <option value="Coordinados">Coordinados</option>

                  <option value="Régimen de las Actividades Empresariales con ingresos a través de Plataformas Tecnológicas">Régimen de las Actividades Empresariales con ingresos a través de Plataformas Tecnológicas</option>

                  <option value="Régimen Simplificado de Confianza">Régimen Simplificado de Confianza</option>

                </select>
                
              </div>
              
            </div>

            <!--=====================================
            ENTRADA PARA EDITAR EL RFC DEL PROVEEDOR
            ======================================-->
            
            <div class="form-group">
              
              <div class="input-group">
              
                <span class="input-group-addon"><i class="fa fa-user"></i></span> 

                <input type="text" class="form-control input-lg" name="editarRfc" id="editarRfc" required>

              </div>

            </div>

            <!--=====================================
            ENTRADA PARA EDITAR LA TAZA DE IVA
            ======================================-->
            
            <div class="form-group">
              
              <div class="input-group">
              
                <span class="input-group-addon"><i class="fa fa-user"></i></span> 

                <input type="number" class="form-control input-lg" name="editarIva" id="editarIva" required>

              </div>

            </div>
  
          </div>

        </div>

        <!--=====================================
        PIE DEL MODAL
        ======================================-->

        <div class="modal-footer">

          <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Salir</button>

          <button type="submit" class="btn btn-primary">Editar proveedor</button>

        </div>

      </form>

      <?php

        $editarProveedor = new ControladorProveedores();
        $editarProveedor -> ctrEditarProveedor();

      ?>

    </div>

  </div>

</div>

<?php

  $eliminarProveedor = new ControladorProveedores();
  $eliminarProveedor -> ctrEliminarProveedor();

?>