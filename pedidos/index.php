<?php
    require_once '../config/bootstrapdotenv.php';
    include '../config/sesion.php';
    //borrar por prueba 
    // $_SESSION['id_usuario'] = 3;
    // $_SESSION['pedido'] = 3;
    //fin prueba
    include "../config/configuracion.php";
    include_once "../config/funciones.php";
    include "../controladores/c_pedidos.php";

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
    
    <main class="page__main pedido"> 
    
    <?php
        if ($datos_cliente['direccion'] == '' ):
    ?>
    
    <div class="form-pedido">
        <h2>Completa los datos de envío</h2>
        <form class="form-login" action="index.php" method="POST">
            <div class="form-element">
            <label for="nombre">Nombre</label>
            <input type="text" name="nombre" required>
            </div>
            <div class="form-element">
            <label for="apellidos">Apellidos</label>
            <input type="text" name="apellidos" required>
            </div>
            <div class="form-element">
            <label for="telefono">Teléfono</label>
            <input type="text" name="telefono" required>
            </div>
            <div class="form-element">
            <label for="direccion">Direccion</label>
            <input type="text" name="direccion" required>
            </div>
            <div class="form-element">
            <label for="cp">Código Postal</label>
            <input type="text" name="cp" required>
            </div>
            <div class="form-element">
            <label for="municipio">Municipio</label>
            <input type="text" name="municipio" required>
            </div>
            <input type="submit" name="actualizar" value="Completar datos" class=btn-submit>

        </form>
    </div>
      
    <?php
        elseif (isset($_GET['acc']) && $_GET['acc'] == 'si'):
    ?>
            <div class="form-pedido">
            <h2>Completa los datos de envío</h2>
            <form class="form-login" action="index.php" method="POST">
            <div class="form-element">
            <label for="nombre">Nombre</label>
            <input type="text" name="nombre" value="<?php echo $datos_cliente['nombre'] ?>" required>
            </div>
            <div class="form-element">
            <label for="apellidos">Apellidos</label>
            <input type="text" value="<?php echo $datos_cliente['apellidos'] ?>" name="apellidos" required>
            </div>
            <div class="form-element">
            <label for="telefono">Teléfono</label>
            <input type="text"  value="<?php echo $datos_cliente['telefono'] ?>" name="telefono" required>
            </div>
            <div class="form-element">
            <label for="direccion">Direccion</label>
            <input type="text"  value="<?php echo $datos_cliente['direccion'] ?>" name="direccion" required>
            </div>
            <div class="form-element">
            <label for="cp">Código Postal</label>
            <input type="text"  value="<?php echo $datos_cliente['cp'] ?>" name="cp" required>
            </div>
            <div class="form-element">
            <label for="municipio">Municipio</label>
            <input type="text" value="<?php echo $datos_cliente['municipio'] ?>" name="municipio" required>
            </div>
            <input type="submit" name="actualizar" value="Completar datos" class=btn-submit>

   

        </form>
        </div>

    <?php
        else:
    ?>
        <form class="form-pedido form-pedido-datosguardados">
        <h2>Datos de Envío</h2>
        <div class="form-login-datos">
            <p>Nombre: <?php echo $datos_cliente['nombre'] ?></p>
            <p>Apellidos: <?php echo $datos_cliente['apellidos'] ?></p>
            <p>email: <?php echo $datos_cliente['email'] ?></p>
            <p>Dirección: <?php echo $datos_cliente['direccion'] ?></p>
            <p>Codigo postal: <?php echo $datos_cliente['cp'] ?></p>
            <p>Municipio: <?php echo $datos_cliente['municipio'] ?></p>   
        </div>
        <div class="btn-modificar"><a href="<?php echo URL_BASE ?>/pedidos/index.php?acc=si" class="modificardatos">Modificar datos de envío</a></div>
       
        </form>

    <?php
        endif;
    ?>

    </div>

    <div class="form-pedido listado">
        <h2>Detalles del pedido</h2>
        Numero de Pedido: <?php echo $_SESSION['id_pedido'] ?><br>
        Fecha: <?php echo formato_DMA($datos_pedido['fecha']) ?>
        

        <table>
            <tr>
               
               <th colspan=2> Producto </th>
               <th> Cant </th>
               <th> Precio </th>
               <th> Importe </th>
            </tr>

        <?php
            $total=0;
            while ($datos_detalle=mysqli_fetch_assoc($resultado_pedidos_detalle)):
                $importe=($datos_detalle['cantidad']*$datos_detalle['precio']);
  
        ?>

            <tr>
                <td> <img src="<?php echo URL_BASE ?>/img/<?php echo $datos_detalle['imagen'] ?>" alt="" class="img-pedido"> </td>
                <td> <?php echo $datos_detalle['titulo']; ?> </td>
                <td> <?php echo $datos_detalle['cantidad']; ?> </td>
                <td> <?php echo euro($datos_detalle['precio']); ?> </td> 
                <td> <?php echo euro($importe); ?> </td>
                <td> <a href="<?php echo URL_BASE ?>/controladores/c_borrar_producto_pedidoPOL.php?id_producto_get=<?php echo $datos_detalle['id_producto']?>">X</a> </td>
            </tr>

        <?php
                $total+=$importe;
            endwhile;
        ?>

        </table> 
        <h3 class="total-pedido"> Total del pedido: <?php echo euro($total) ?></h3>
            
        

            <?php
                if($datos_cliente['direccion'] != ''):
            ?>
            <div>
            <input type="submit" name="boton-acceder" value="Comprar" class=btn-submit>
            </div>

            <?php
                else:
            ?>
                <div>
                    <h2>Completa tus datos de envío</h2>
                </div>
            <?php
                endif;
            ?>
    </div>
    </main>
      
    <?php include '../partes/footer.php' ?>
    <?php include '../partes/javascript.php' ?>
    
</body>
</html>