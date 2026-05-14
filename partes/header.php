
<?php
    if ($vista == 'home'):
        $logoanimado = 'logo__home';
        $arrow = '<a href="#escaparate" class="scroll-down-icon"><img src="img/arrow_down.svg" alt="Scroll Down Icon" ></a>';
        echo $arrow;
    elseif ($vista == 'productos'):
        $logoanimado = 'logo__fixed';
    endif;

?>

<header class="page__header header_home">
    
<button id="btnMenu" class="btn_menu cerrar">
    <span>menu</span>
</button>

<a href="<?php echo  URL_BASE?>" class="logo-link"> 
<h1 class="logo <?php echo $logoanimado ?>">
    <span>V</span>iñedos <span>A</span>naga</h1>
    </a>

<button id="btnCarrito" class="btnCarrito">
    <img src="<?php echo URL_BASE ?>/img/cesta.svg" alt="icono cesta de compra">
</button>


</header>






