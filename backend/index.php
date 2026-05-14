<?php 
    require_once '../config/bootstrapdotenv.php';
    include '../config/sesion.php';
    include "../config/configuracion.php";
    include_once "../config/funciones.php";
    // include "../controladores/c_user_register.php";
    // include "../controladores/c_productos.php";
    if(!isset($_SESSION['nivel']) || $_SESSION['nivel'] < 2):  
        header ("Location: ".URL_BASE."/login/index.php");
        endif;
    $vista = "BACKEND";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo strtoupper($vista) ?></title>
    <?php include '../partes/estilos.php' ?>
    <?php //include '../partes/estilos2.php' ?>
</head> 

<body class="<?php echo $device.' '.$deviceOS.' '.$vista?>">
    <?php include '../partes/header.php' ?>  
    <?php include '../partes/menu.php' ?>
    <?php include '../partes/carrito.php' ?>
    

    <main class="page__main backend">
       
        <div class="form-container">
        <h2>Backend</h2>
        <div class="backend_buttons">
            <a href="v_alta_producto.php">Alta productos</a>
            <a href="#" class="main-nav__link">Alta usuarios</a>
            <a href="#" class="main-nav__link">Estadísticas</a>
            <a href="<?php echo URL_BASE?>/login/borraremail.php" class="main-nav__link">Borrar email</a>
        </div>
        </div>

    </main> 

    
    <?php include '../partes/footer.php' ?>
    <?php include '../partes/javascript.php' ?>
    
</body>
</html>