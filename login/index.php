<?php 
    //INDEX LOGIN
    require_once '../config/bootstrapdotenv.php';
    include '../config/sesion.php';
    include "../config/configuracion.php";
    include_once "../config/funciones.php";
    // include "../controladores/c_productos.php";
    include "../controladores/c_user_login.php";
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
    
    

    <main class="page__main formulario login">
       
    <div class="form-container">
        
        
        <h3 class="font1">LOGIN</h3>
        <form class="form-login login1" action="index.php" method="POST">
        <div class="form-element">
            <label for="email">Email</label>
            <input type="email" name="email" value="<?php echo $email?>" required>
        </div>
        <div class="form-element">
            <label for="password">Password</label>
            <input type="password" name="password" required>
        </div>
        
        <?php if($error != ''): ?>
            <div><h5><?php echo $error; ?></h5></div>
        <?php endif; ?>

            <!-- en caso de que la cuenta no esté activa, se pide código de activación -->
            <?php if($error == "Cuenta no activada" || $error == "Codigo de activación incorrecto"): ?>
                </div>
             <div class="form-element">
                <label for="activacion">Código de Activacion</label>
                <input type="text" name="activacion" required>
            </div>
            <?php endif; ?>
            <input type="submit" name="boton-acceder" value="Acceder" class=btn-submit>
        </form>
        
        <div class="form-element">
            <p class="forgot-pass-text">¿Contraseña olvidada?</p> 
            <a href="<?php echo URL_BASE?>/login/emailreset.php" class="reestablecer-link">Reestablecer</a>
        </div>
      

    </div>

    <div class="form-container">
        <h3 class="newaccount">CREA UNA CUENTA</h3>
        <div class="form-element">
            <p>¿Nuevo cliente?</p> 
            <a href="<?php echo URL_BASE?>/login/registro.php" class="crearcuenta">Crear Cuenta</a>
        </div>

     </div>

    </main> 

    
    <?php include '../partes/footer.php' ?>
    <?php include '../partes/javascript.php' ?>
    <?php include '../partes/menu.php' ?>
    <?php include '../partes/carrito.php' ?>
    
</body>
</html>