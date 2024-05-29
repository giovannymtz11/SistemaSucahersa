<div class="content-wrapper">

  <section class="content-header">
    
    <h1>
      
      Administrar bajas
    
    </h1>

    <ol class="breadcrumb">
      
      <li><a href="inicio"><i class="fa fa-dashboard"></i> Inicio</a></li>
      
      <li class="active">Administrar bajas</li>
    
    </ol>

  </section>

  <section class="content">

    <div class="box">

      <div class="box-header with-border">

        <a href="crear-baja">
  
        <button class="btn btn-warning">
          
          Agregar baja

        </button>

        </a>

        <button type="button" class="btn btn-default pull-right" id="daterange-btn">
           
            <span>
              <i class="fa fa-calendar"></i> Rango de fecha
            </span>

            <i class="fa fa-caret-down"></i>

         </button>

      </div>

      <div class="box-body">
        
       <table class="table table-bordered table-striped dt-responsive tablas">
         
        <thead>
         
         <tr>
           
           <th>Baja</th>
           <th>Sucursal</th>
           <th>Usuario</th>
           <th>Total</th>
           <th>Impuesto</th>
           <th>Neto</th> 
           <th>Fecha</th>
           <th style="width:10px">Acciones</th>

         </tr> 

        </thead>

        <tbody>

          <?php

          if(isset($_GET["fechaInicial"])){

            $fechaInicial = $_GET["fechaInicial"];
            $fechaFinal = $_GET["fechaFinal"];

          }else{

            $fechaInicial = null;
            $fechaFinal = null;

          }

          $respuesta = ControladorBajas::ctrRangoFechasBajas($fechaInicial, $fechaFinal);;

          foreach ($respuesta as $key => $value) {
           

           echo '<tr>

                  <td>'.$value["codigo"].'</td>';

                  $itemSucursal = "id";
                  $valorSucursal = $value["id_sucursal"];

                  $respuestaSucursal = ControladorSucursales::ctrMostrarSucursales($itemSucursal, $valorSucursal);

                  echo '<td>'.$respuestaSucursal["nombre"].'</td>';

                  $itemUsuario = "id";
                  $valorUsuario = $value["id_usuario"];

                  $respuestaUsuario = ControladorUsuarios::ctrMostrarUsuarios($itemUsuario, $valorUsuario);

                  echo '<td>'.$respuestaUsuario["nombre"].'</td>

                  <td>$ '.number_format($value["neto"],2).'</td>

                  <td>$ '.number_format($value["impuesto"],2).'</td>

                  <td>$ '.number_format($value["total"],2).'</td>

                  <td>'.$value["fecha"].'</td>

                  <td>

                    <div class="btn-group">
                        
                      <button class="btn btn-success btnImprimirFactura" codigoBaja="'.$value["codigo"].'">

                        <i class="fa fa-print"></i>

                      </button>';

                      if($_SESSION["perfil"] == "Administrador"){

                      echo '<button class="btn btn-warning btnEditarBaja" idBaja="'.$value["id"].'"><i class="fa fa-pencil"></i></button>

                      <button class="btn btn-danger btnEliminarBaja" idBaja="'.$value["id"].'"><i class="fa fa-times"></i></button>';
                    }

                    echo '</div>  

                  </td>

                </tr>';
            }

        ?>
          
        </tbody>

       </table>

       <?php

       $eliminarBaja = new ControladorBajas();

       $eliminarBaja -> ctrEliminarBaja();

       ?>

      </div>

    </div>

  </section>

</div>