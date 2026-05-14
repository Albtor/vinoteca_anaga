<?php 
    
    include '../config/sesion.php';
    include "../config/configuracion.php";
    include_once "../config/funciones.php";
    include "../controladores/c_user_register.php";
    // include "../controladores/c_productos.php";
    $vista = "reset password"
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
    

    <main class="page__main emailreset">
       
    <div class="form-container">
        <h2>Reestablece tu contraseña</h2>

        <form class="form-login" action="registro.php" method="POST">
        <div class="form-element">
            <label for="email">Email</label>
            <input type="email" name="email" value="<?php echo $email?>" required>
        </div>

    <!-- en caso de que la cuenta no esté activa, se pide código de activación -->

            <input type="submit" name="botoncontinuar" value="Enviar" class=btn-submit>
        </form>
        </div>

    </main> 

    
    <?php include '../partes/footer.php' ?>
    <?php include '../partes/javascript.php' ?>
    
</body>
</html>