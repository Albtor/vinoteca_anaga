<?php
   
?>


<?php
    //if(!isset($datos_cliente['nombre'])):
?>

<!-- <div class="carrito" ss-container>
<h3>No hay ningún producto aún</h3></div>
<div class="btnCompra">
    <a href="<?php echo URL_BASE ?>/pedidos" class="buttonCompra">Finalizar pedido</a>
</div> -->

<?php
   // else:
?>
<div class="carrito" ss-container>
    <h1>Tu selección  <?php //echo $datos_cliente['nombre'] ?></h1>

    <!-- <div class="carrito-titulo">
        <span> Titulo </span>
        <span> Precio </span>
        <span> Cantidad </span>
        <span> Total </span>
    </div> -->

    <?php
          //  $total=0;
            //while ($datos_detalle=mysqli_fetch_assoc($resultado_pedido_detalle_carrito)):
              //  $importe=($datos_detalle['cantidad']*$datos_detalle['precio']);
        ?>
<!--             
            <div class="carrito-elemento">
                <span> <?php echo $datos_detalle['titulo']; ?> </span>
                <span> <?php echo euro($datos_detalle['precio']); ?> </span>
                <span> <?php echo $datos_detalle['cantidad']; ?> </span>
                <span> <?php echo euro($importe); ?> </span>
            </div>
         -->

        <?php
           // $total+=$importe;
           // endwhile;
        ?> 
        <!-- <div>Total <?php echo euro($total); ?> </div> -->
    
    
    <div class="btnCompra">
        <a href="<?php echo URL_BASE ?>/pedidos" class="buttonCompra">Ver pedido</a>
    </div>
</div>
<?php
   // endif;
?>