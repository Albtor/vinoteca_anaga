<?php 

// session_start();;
// if(!isset($_SESSION['id_usuario'])) $_SESSION['id_usuario']= 0;

$matriz_tipos = tipos_de_vino();

?>

<nav class="main-nav" id="nav">
    <ul class="main-nav__list">

        <li class="main-nav__item">
            <a href="<?php echo URL_BASE?>/index.php" class="main-nav__link">Inicio</a>
        </li>

        <li class="main-nav__item">
            <a href="<?php echo URL_BASE?>/about/index.php" class="main-nav__link">Nosotros</a>
        </li>
   

        <li class="main-nav__item"> 
            <a href="<?php echo URL_BASE?>/productos" class="main-nav__link">Vinos</a>
            <ul class="main-nav__list--sub">
            
            <?php 
                foreach($matriz_tipos as $tipo):
            ?>
                <li class="main-nav__item">
                    <a href="<?php echo URL_BASE?>/productos/index.php?tipo=<?php echo $tipo ?>" class="main-nav__link"><?php echo $tipo ?></a>
                </li>
            <?php 
                endforeach 
            ?> 
            </ul>
        </li>      

<!--  IF para ver cual elemento del menú se muestra -->

<?php
    if($_SESSION['id_usuario'] == 0):
?>
    
        <li class="main-nav__item">
            <a href="<?php echo URL_BASE?>/login" class="main-nav__link">Login</a>
        </li>
<?php
    elseif($_SESSION['id_usuario'] != 0):
?>
        <li class="main-nav__item">
            <a href="<?php echo URL_BASE?>/controladores/c_cerrar_sesion.php" class="main-nav__link">Logout <?php //echo $_SESSION["nombre"] ?></a>
        </li>

<?php
    endif;
?>
        <li class="main-nav__item">
            <a href="<?php echo URL_BASE?>/contacto/index.php" class="main-nav__link">Contacto</a>
        </li>

        <li class="main-nav__item">
            <a href="<?php echo URL_BASE?>/backend/index.php" class="main-nav__link">Backend</a>
        </li>

        <li class="main-nav__item">
            <a href="#" class="main-nav__link busqueda">
                <form action="<?php echo URL_BASE?>/productos" method="get" >
                    <input type="text" name='search' method='get' class="search-field">
                    <input type="submit" value='buscar' class="btn-search">
                </form>
            </a>
        
        </li>
 
    </ul>
</nav>