<?php
    require_once '../config/bootstrapdotenv.php';
    include '../config/sesion.php';
    include "../config/configuracion.php";
    include_once "../config/funciones.php";
    $vista = "CONTACTO";
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
    
    <section class="contacto"> 
       
    <div class="form-container">
        <h2>Contacto</h2>

        <!-- <?php if($error != ''): ?>
            <div><h5><?php echo $error; ?></h5></div>
        <?php endif; ?> -->

        <form class="form-login contact-form" action="conctact.php" method="POST">
            <div class="form-element">
            <label for="nombre">Nombre</label>
            <input type="text" name="nombre" value="" required>
            <div class="form-element">
            </div>
            <label for="apellidos">Apellidos</label>
            <input type="text" name="apellidos" value="" required>
            <div class="form-element">
            </div>
            <label for="email">Email</label>
            <input type="email" name="email" value="" required>
            <div class="form-element">
            </div>
            <label for="phone">Teléfono</label>
            <input type="text" name="phone" value="" required>
            <div class="form-element">
            </div>
            <label for="mensaje">Mensaje </label>
            <textarea name="text" id="" cols="30" rows="5"></textarea>
            
            </div>
            

    <!-- en caso de que la cuenta no esté activa, se pide código de activación -->

            <input type="submit" name="contact" value="Enviar Mensaje" class=btn-submit>
        </form>
        </div>

        
    </section>
      
    <?php include '../partes/footer.php' ?>
    <?php include '../partes/javascript.php' ?>
    
</body>
</html>