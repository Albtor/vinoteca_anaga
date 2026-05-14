<div class="header_canvas">
<!-- La imagen por defecto la cargamos desde Background en css y en main js, finalmente usamos
Mobile Detect para ver si es movil tablet o desktop-->
<!-- <a href="#escaparate" class="scroll-down-icon"><img src="img/arrow_down.svg" alt="Scroll Down Icon"></a>; -->
<?php

    //Detectar si no es un móvil para cargar el video.
    if($device != 'movil'){
        echo'<video autoplay muted class="header_vbg" loop id="myVideo">
            <source src="./vid/backgroundwine.mp4" type="video/mp4">
            Your browser does not support HTML5 video.
        </video>';
    }else {
        echo ' ';
    }

    ?>

</div>