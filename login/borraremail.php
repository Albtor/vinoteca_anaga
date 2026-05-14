<?php 
    //INDEX LOGIN
    include '../config/sesion.php';
    include "../config/configuracion.php";
    include_once "../config/funciones.php";
    include_once "../controladores/c_borraremail.php";
  
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
 
    
    

    <main class="page__main formulario">
       
    <div class="form-container">
    
        <h3>Borra un email de la base de datos</h3>
        <h3><?php echo $result ?></h3>
    
        <form class="form-login" action="borraremail.php" method="POST">

            <input type="email" name="email" value="Email" required>
            <input type="submit" name="boton-acceder" value="Borrar Email">

        </form>
        <a href="<?php echo URL_BASE?>">Inicio</a>
        
    </div>
    </main> 

    
    
</body>
</html>