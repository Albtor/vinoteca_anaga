<?php
    require_once '../config/bootstrapdotenv.php';
    include '../config/sesion.php';
    include "../config/configuracion.php";
    include_once "../config/funciones.php";
    $vista = "ABOUT";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo strtoupper($vista) ?></title>
    <?php include '../partes/estilos.php' ?>
</head> 

<body class="<?php echo $device.' '.$deviceOS.' '.$vista?>">
    <?php include '../partes/header.php' ?>  
    <?php include '../partes/menu.php' ?>
    <?php include '../partes/carrito.php' ?>
    
    <main class="page__main about"> 
        <div>ABOUT US</div>
    </main>
      
    <?php include '../partes/footer.php' ?>
    <?php include '../partes/javascript.php' ?>
    
</body>
</html>