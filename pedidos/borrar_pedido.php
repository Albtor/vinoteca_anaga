<?php 
    include '../config/configuracion.php';
?>

<div>

    ¿Estás seguro?
    
    <?php $id_producto=$_GET['id_producto'] ?>
    
    <a href="<?php echo URL_BASE ?>/controladores/c_borrar_producto_pedido.php?id_producto=<?php echo $id_producto?>">sí</a>
    <a href="">no</a>

</div>