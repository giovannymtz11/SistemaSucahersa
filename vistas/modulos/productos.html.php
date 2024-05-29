<div class="content-wrapper">

  <section class="content-header">
    
    <h1>
      
      Administrar productos
    
    </h1>

    <ol class="breadcrumb">
      
      <li><a href="inicio"><i class="fa fa-dashboard"></i> Inicio</a></li>
      
      <li class="active">Administrar productos</li>
    
    </ol>

  </section>

  <!-- Main content -->
  <section class="content">

    <!-- Default box -->
    <div class="box">

      <div class="box-header with-border">

        <button class="btn btn-primary" data-toggle="modal" data-target="#modalAgregarProducto">
          
          Agregar producto

        </button>

      </div>

      <div class="box-body">

        <table class="table table-bordered table-striped dt-responsive tablas">

          <thead>

            <tr>

              <th>Factura</th>
              <th>Proveedor</th>
              <th>Categoría</th>
              <th>Descripción</th>
              <th>Precio sin iva</th>
              <th>Precio con iva</th>
              <th>Existencia</th>
              <th>Total</th>
              <th>Fecha</th>
              <th>Acciones</th>

            </tr>

          </thead>

          <tbody>

            <tr>

              <td>F705253</td>
              <td>REYMA</td>
              <td>Bolsa</td>
              <td>BOLSA ALTA ROLLO 20 x 30</td>
              <td>$ 30.52</td>
              <td>0</td>
              <td>0</td>
              <td>60</td>
              <td>$ 1831.2</td>
              <td>2024-03-29 12:05:32</td>

            </tr>

            <tr>

              <td>F705253</td>
              <td>REYMA</td>
              <td>Bolsa</td>
              <td>BOLSA ALTA ROLLO 25 x 35</td>
              <td>$ 30.52</td>
              <td>0</td>
              <td>0</td>
              <td>493</td>
              <td>$ 15046.36</td>
              <td>2024-03-30 12:05:32</td>

            </tr>

            <tr>

              <td>F705253</td>
              <td>REYMA</td>
              <td>Bolsa</td>
              <td>BOLSA ALTA ROLLO 30 x 40</td>
              <td>$ 30.52</td>
              <td>0</td>
              <td>0</td>
              <td>160</td>
              <td>$ 4883.2</td>
              <td>2024-04-01 12:05:32</td>

            </tr>

          </tbody>

        </table>

      </div>
      
    </div>

  </section>

</div>


<!--
Modal Agregar producto
-->

<div id="modalAgregarProducto" class="modal fade" role="dialog">

  <div class="modal-dialog">

    <div class="modal-content">

      <form role="form" method="post" enctype="multipart/form-data">

        <!--
        Cabeza del modal
        -->

        <div class="modal-header" style="background:#FF5733; color:white">

          <button type="button" class="close" data-dismiss="modal">&times;</button>

          <h4 class="modal-title">Agregar usuario</h4>

        </div>

        <!--
        Cuerpo del modal
        -->

        <div class="modal-body">

          <div class="box-body">

            <!--Entrada para la factura-->

            <div class="form-group">

              <div class="input-group">
                
                <span class="input-group-addon"><i class="fa fa-user"></i></span>

                <input type="text" class="form-control input-lg" name="nuevaFactura" placeholder="Ingresar factura" required>

              </div>
              
            </div>

            <!--Entrada para el proveedor-->

            <div class="form-group">

              <div class="input-group">
                
                <span class="input-group-addon"><i class="fa fa-users"></i></span>

                <select class="form-control input-lg" name="nuevoProveedor" id="">
                  
                  <option value="">Seleccionar proveedor</option>

                  <option value="Administrador">REYMA</option>

                  <option value="Gestor">Proveedor 2</option>

                  <option value="Consulta">Proveedor 3</option>

                </select>
                
              </div>
              
            </div>

            <!--Entrada para el categoría-->

            <div class="form-group">

              <div class="input-group">
                
                <span class="input-group-addon"><i class="fa fa-users"></i></span>

                <select class="form-control input-lg" name="nuevaCategoría" id="">
                  
                  <option value="">Seleccionar categoría</option>

                  <option value="Administrador">Bolsas</option>

                  <option value="Gestor">Categoría 2</option>

                  <option value="Consulta">Categoría 3</option>

                </select>
                
              </div>
              
            </div>

            <!--Entrada para la descripción-->

            <div class="form-group">

              <div class="input-group">
                
                <span class="input-group-addon"><i class="fa fa-product-hunt"></i></span>

                <input type="text" class="form-control input-lg" name="nuevaFactura" placeholder="Ingresar descripción" required>

              </div>
              
            </div>

            <!--Entrada para el precio de compra
            -->

            <div class="form-group">

              <div class="input-group">
                
                <span class="input-group-addon"><i class="fa fa-product-hunt"></i></span>

                <input type="number" class="form-control input-lg" name="nuevaFactura" min="0" placeholder="Ingresar precio" required>

              </div>
              
            </div>

            <!--Entrada para la existencia-->

            <div class="form-group">

              <div class="input-group">
                
                <span class="input-group-addon"><i class="fa fa-check"></i></span>

                <input type="number" class="form-control input-lg" name="nuevaExistencia" min="0" placeholder="Ingresar existencia" required>

              </div>
              
            </div>

            <!--=========================================
              ENTRADA PARA EL TIPO DE UNIDAD DEL PRODUCTO
            ==========================================-->

            <div class="form-group">

              <div class="input-group">
                
                <span class="input-group-addon"><i class="fa fa-users"></i></span>

                <select class="form-control input-lg" name="nuevaUnidad" required>

                  <option value="">Seleccionar la unidad</option>

                  <option value="Piezas">Piezas</option>

                  <option value="Rollos">Rollos</option>

                  <option value="Mililitros">Mililitros</option>

                  <option value="Cajas">Cajas</option>

                </select>
                
              </div>
              
            </div>

          </div>

        </div>

        <!--
        Pie del modal
        -->
        
        <div class="modal-footer">
          
          <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Salir</button>

          <button type="submit" class="btn btn-primary">Guardar producto</button>
        
        </div>

      </form>
    
    </div>

  </div>
  
</div>