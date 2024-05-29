<?php

$item = null;
$valor = null;
$orden = "id";

$bajas = ControladorBajas::ctrSumaTotalBajas();

$categorias = ControladorCategorias::ctrMostrarCategorias($item, $valor);
$totalCategorias = count($categorias);

$sucursales = ControladorSucursales::ctrMostrarSucursales($item, $valor);
$totalSucursales = count($sucursales);

$productos = ControladorProductos::ctrMostrarProductos($item, $valor, $orden);
$totalProductos = count($productos);

?>

<div class="col-lg-3 col-xs-6">
  
  <div class="small-box bg-aqua">
    
    <div class="inner">
      
      <h3>$<?php echo number_format($bajas["total"],2); ?></h3>

      <p>Bajas</p>
    
    </div>
    
    <div class="icon">
      
      <i class="ion ion-social-usd"></i>
    
    </div>
    
    <a href="bajas" class="small-box-footer">

      Más información <i class="fa fa-arrow-circle-right"></i>

    </a>

  </div>
  
</div>
  
  <div class="col-lg-3 col-xs-6">
  
    <div class="small-box bg-green">
  
      <div class="inner">
  
        <h3><?php echo number_format($totalCategorias); ?></h3>

        <p>Categorías</p>
  
      </div>
  
    <div class="icon">
  
    <i class="ion ion-clipboard"></i>
    
    </div>
  
    <a href="categorias" class="small-box-footer">

      Más información <i class="fa fa-arrow-circle-right"></i>

    </a>
  
  </div>

</div>

<div class="col-lg-3 col-xs-6">
  
  <div class="small-box bg-yellow">
    
    <div class="inner">
      
      <h3><?php echo number_format($totalSucursales); ?></h3>

      <p>Sucursales</p>
    
    </div>
    
    <div class="icon">
      
      <i class="ion ion-ios-cart"></i>
    
    </div>
    
    <a href="sucursales" class="small-box-footer">

      Más información<i class="fa fa-arrow-circle-right"></i>

    </a>
  
  </div>

</div>
        
<div class="col-lg-3 col-xs-6">
          
  <div class="small-box bg-red">
    
    <div class="inner">
      
      <h3><?php echo number_format($totalProductos); ?></h3>

      <p>Entradas de suministros</p>
    
    </div>
    
    <div class="icon">
      
      <i class="ion ion-pie-graph"></i>
    
    </div>
    
    <a href="productos" class="small-box-footer">

      Más información<i class="fa fa-arrow-circle-right"></i>

    </a>
    
  </div>

</div>