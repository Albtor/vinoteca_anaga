<?php
    include "controladores/c_productos.php";
?>


<body class="<?php echo $device.' '.$deviceOS.' '.$vista?>">

    

    <main class="page__main">
        <!-- Grid de productos -->
        
        <div class="seccion-productos">
      
            <h1 class="productos-title esenciales">Nuestros Vinos Esenciales</h1>
            <div class="grid-productos">
              <?php // echo $fraseSQL ?>


                <?php

               
                    while ($producto=mysqli_fetch_assoc($resultado)):
                        if($producto['destacado'] == 1):
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
                                            <a href="<?php echo URL_BASE ?>/productos/unproducto.php?id=<?php echo $producto['id_producto'] ?>" class="btn-verProducto">Ver</a>
                                            <a href="">Carrito</a>
                                            
                                        </div>
                                        <a href="#" class="btn-verProducto">Comprar</a>
                                    </div>
                                </div>

                            </div>

            </div>
                <?php
                    endif;
                    endwhile;
                ?>
      
            </div>
        </div>



         </div>

    </main> 


    
</body>
</html>