<?php
    require_once './config/bootstrapdotenv.php';
    include './config/sesion.php';
    require_once './config/funciones.php';
    include './config/configuracion.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="Content-Type" content="text/html;charset=ISO-8859-1">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Viñedos Anaga</title>
    <link rel="icon" type="image/png" href="./img/logo/favicon.ico">

    <?php include './partes/estilos.php' ?>
</head> 
<body class="<?php echo $device.' '.$deviceOS.' '.$vista ?>">
    <?php include './partes/header.php' ?>  
    <?php include './partes/video-bg.php' ?> 
    <?php include './partes/menu.php' ?>
    <?php include './partes/carrito.php' ?>

    <main class="page__main">
    <?php include './partes/escaparate.php' ?>
    <?php include './productos/esenciales.php' ?>
    </main> 

    <?php include './partes/footer.php' ?>
    <?php include './partes/javascript.php' ?>
</body>
</html>