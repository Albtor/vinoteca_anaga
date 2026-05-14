document.addEventListener(
    "DOMContentLoaded", () => {
        //STICKY MENU Header oculto visto
        // new Mhead( ".page__header", {
        //     hide: 200
        // });

        //MENUS Y SUBMENUS 
        const menu = new MmenuLight(
            document.querySelector( ".main-nav" )
        );

        const navigator = menu.navigation({
            // options
            // theme: 'dark'
        });

        const drawer = menu.offcanvas({
            // options
            position: 'left'
        });


        //click menu
        document.querySelector( '#btnMenu' )
        .addEventListener( 'click', ( evnt ) => {
            evnt.preventDefault();
            
            
            if( document.querySelector('body').classList.contains('mm-ocd-opened') ){
               drawer.close();
            }else{
               drawer.open(); 
               document.querySelector('body').classList.remove('carritoAbierto'); 
               document.querySelector('.carrito').classList.remove('js_verCarrito'); 
               document.querySelector('.page__header').classList.remove('headroom--top'); 
            }
            
        });


        document.querySelector('#btnCarrito')
            .addEventListener( 'click', (e)=> {
            //hace q el elemento html al que accede, deshabilita comportamiento
            e.preventDefault();
            document.querySelector('.carrito').classList.toggle('js_verCarrito');
            document.querySelector('body').classList.toggle('carritoAbierto');
            document.querySelector('.page__header').classList.remove('headroom--top'); 
                     
            drawer.close();

        })

        //HEADROOM JS

        var headerPage = document.querySelector(".page__header");
        // construct an instance of Headroom, passing the element
        var headroom  = new Headroom(headerPage, {
        });
        // initialise
        headroom.init();

    }
);



//PARA PONER EL VIDEO SOLO SI EL ANCHO ES MAYOR A 576


// 
// var anchoVentana = window.innerWidth;
// console.log("Window width = " + anchoVentana);

// var video = '<video autoplay muted class="header_vbg" loop id="myVideo"> <source src="./vid/backgroundwine.mp4" type="video/mp4"></video>';
// if (anchoVentana > 576){
//     console.log("Window width = " + anchoVentana);
//     document.querySelector('.header_canvas').innerHTML = video;
// }

// window.addEventListener('resize', function(){
//     anchoVentana = window.innerWidth;
//     if (anchoVentana > 576){
//         document.querySelector('.header_canvas').innerHTML = video;
//     }
//     else {
//         document.querySelector('.header_canvas').innerHTML = '';
//     }
// })







//COMPROBAR SI UN ELEMENTO ESTÁ EN EL VIEWPORT
// var myElement = document.querySelector('.scn_link');
// var logo = document.querySelector('h1'); 
// var bounding = myElement.getBoundingClientRect();


// window.onscroll = function comprobarLink(){
//     bounding = myElement.getBoundingClientRect();
    
// if (bounding.top >= 0 && bounding.left >= 0 && bounding.right <= window.innerWidth && bounding.bottom <= window.innerHeight) {

//     console.log('Element is in the viewport!');
//     logo.style.cssText = 'color: white;';
// } else {

//     console.log('Element is NOT in the viewport!');
// }

// }


