<?php
        include '../config/sesion.php';
        include "../config/configuracion.php";
        include_once "../config/funciones.php";
        include "../controladores/c_productos.php";
        // echo $fraseSQL;
        $producto = mysqli_fetch_assoc($resultado);
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Ver productos</title>
    <?php include '../partes/estilos.php' ?>

</head> 

<body class="<?php echo $device.' '.$deviceOS.' '.$vista?>">
    <?php include '../partes/header.php' ?>  
    <?php include '../partes/menu.php' ?>
    <?php include '../partes/carrito.php' ?>

    <main class="page__main">
        <div class="seccion-producto">
        
        <div class="grid-unproducto">

            <div class="card">
                <div class="card-title">
                        <h2><?php echo $producto['titulo'] ?></h2>
                </div>
            
                <div class="contentBx">

                    <div href="unproducto.php?id=<?php echo $producto['id_producto'] ?>" class="imgBx">  
                        <img src="<?php echo URL_BASE ?>/img/<?php echo $producto['imagen'] ?>" alt="wine bottle">
                    </div>
                    
                    
                    <div class="card-info">
                        <div class="card-info_data">

                            <p class="card-text"><?php echo $producto['descripcion'] ?></p>
                            <div class="info-all">
                            <div class="info-left">
                                <p>Tipo: <?php echo $producto['tipo'] ?></p>
                                <p>Pais: <?php echo $producto['pais'] ?></p>
                                <p>Valoracion: <?php echo rellena_star($producto['estrellas']) ?></p>
                                
                                <?php
                                    if($producto['oferta'] == 'si'):
                                ?>
                                    <p>Precio inicial: <span class="precioantiguo"><?php echo euro($producto['pvp']) ?></span></p>
                                    <p>Descuento: <span class="descuento"><?php echo ($producto['oferta_porc']*100) ?>%</span></p>
                                    <p>Oferta: <span class="preciofinal"><?php echo euro(precio_descontado($producto['pvp'], $producto['oferta_porc'])) ?></span></p>
                                <?php
                                    elseif($producto['oferta'] != 'si'):
                                ?>
                                    <p>Precio: <span class="preciofinal"><?php echo euro($producto['pvp']) ?></span></p>
                                <?php
                                    endif;
                                ?>

                            </div>
                            <div class="info-right">         
                                <p>D.O: <?php echo $producto['do'] ?></p>
                                <p>Cosecha: <?php echo $producto['cosecha'] ?></p>
                                <p>Capacidad: <?php echo $producto['capacidad']?>ml</p>
                                <p>Alcohol: <?php echo $producto['alcohol']?>º</p>
                                <p>Stock: <?php echo $producto['stock'] ?></p>
                            </div>
                            </div>

                        </div>
                        
                        
                        <form action="<?php echo URL_BASE ?>/controladores/add_pedido.php" method="POST" class="contentBx-links">
                            
                                <div class="contentBx-links_action">
                                <input type="submit" name="btn1" value="Carrito" class="btn-form-cart">
                                <div>
                                    <label for="cantidad">Unidades:</label>
                                    <input type="number" name="cantidad" value=1 min=0 style="width: 60px;" class="cantidad" >
                                </div>
                                <input type="submit" name="btn2" value="Comprar" class="btn-form-buy">
                                <!-- Estos son hidden para guardar el precio del pedido del momento -->
                                <input type="hidden" name="id_producto" value="<?php echo $producto['id_producto'] ?>">
                                <input type="hidden" name="pvp" value="<?php echo $producto['pvp'] ?>" >
                            </div>
                        </form>

                    </div>

                </div>
            </div>

        </div>
        
      
        
        </div>


    </main> 

      
    <?php include '../partes/footer.php' ?>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
    integrity="sha256-4+XzXVhsDmqanXGHaHvgh1gMQKX40OUvDEBTu8JcmNs="
    crossorigin="anonymous"></script>
    
    <?php include '../partes/javascript.php' ?>
    <script src="<?php echo URL_BASE ?>/js/slick.min.js"></script>
    <script>
        $('.card-images').slick({
            dots: true
        });
    </script>
    
</body>
</html>





