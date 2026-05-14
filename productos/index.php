<?php
    require_once '../config/bootstrapdotenv.php';
    include '../config/sesion.php';
    include "../config/configuracion.php";
    include_once "../config/funciones.php";
    include "../controladores/c_productos.php";
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
    

    <main class="page__main">
        <!-- Grid de productos -->
        
        <div class="seccion-productos">
      
            <h1 class="productos-title">Nuestros Productos</h1>
            <div class="grid-productos">
              <?php // echo $fraseSQL ?>
                <?php
                    while ($producto=mysqli_fetch_assoc($resultado)):
                ?>
                
                        <div class="card">
                            <div class="card-title">
                                    <h4><?php echo $producto['titulo'] ?></h4>
                                </div>
                        
                            <div class="contentBx">

                                <a href="unproducto.php?id=<?php echo $producto['id_producto'] ?>" class="imgBx">  
                                    <img src="<?php echo URL_BASE ?>/img/<?php echo $producto['imagen'] ?>" alt="wine bottle">
                                </a>
                                
                               
                                <div class="card-info">
                                    <div class="card-info_data">
                                        <p>Tipo: <?php echo $producto['tipo'] ?></p>
                                        <p>Cosecha: <?php echo $producto['cosecha'] ?></p>
                                        <p>Valoracion: <?php echo rellena_star($producto['estrellas']) ?></p>
                                        <p>Precio: <span class="preciofinal"> <?php echo euro($producto['pvp']) ?></span></p>
                                        
                                       
                                    </div>
                                    
                                    <div class="contentBx-links">
                                        <p>Cantidad: <input type="number" name="cantidad" value=1  min=0 style="width: 60px;" class="cantidad" ></p>
                                        <div class="contentBx-links_action">
                                            <a href="unproducto.php?id=<?php echo $producto['id_producto'] ?>" class="btn-verProducto">Ver</a>
                                            <a href="">Carrito</a>
                                            
                                        </div>
                                        <a href="#" class="btn-verProducto">Comprar</a>
                                    </div>
                                </div>

                            </div>

            </div>
                <?php
                    endwhile;
                ?>
      
            </div>
        </div>


        <div class="container-grid">

        <?php
            while ($producto=mysqli_fetch_assoc($resultado)):
        ?>

            <div class="card">
                <div class="imgBx">
                    <img src="<?php echo URL_BASE ?>/img/<?php echo $producto['imagen'] ?>" alt="wine bottle">
                    <img src="bottle.jpg" alt="wine bottle">
                </div>

                <div class="contentBx">
                    <div class="card-title">
                        <h2><?php echo $producto['titulo'] ?></h2>
                    </div>

                    <div class="rest">
                        <p><?php echo $producto['tipo'] ?></p>
                        <p>DO: <?php echo $producto['do'] ?></p>
                        <p>Stock: 78</p>
                        <p><?php echo euro($producto['pvp']) ?></p>
                    </div>
                    
                    <div class="contentBx-links ">
                        <a href="unproducto.php?id=<?php echo $producto['id_producto'] ?>" class="btn-verProducto">Ver Producto</a>
                        <a href="1producto.html">Carrito</a>
                    </div>
                </div>

            </div>

            <?php
                endwhile;
            ?>

         </div>

    </main> 

    
    <?php include '../partes/footer.php' ?>
    <?php include '../partes/javascript.php' ?>
    
</body>
</html>