/*PRECARGA DE PAGINA*/
$(window).load(function() {
    $('#preloader').fadeOut('slow');
    $('body').css({'overflow':'visible'});
})
/*PRECARGA DE PAGINA*/

$(document).ready(main);

var contador = 1;

function main () {
    $('.menu_bar').click(function(){
        if (contador == 1) {
            $('nav').animate({
                left: '0'
            });
            contador = 0;

            $('html, body').css({
                'overflow': 'hidden',
                'height': '100%'
            });

        } else {
            contador = 1;
            $('.nav-1100>nav').animate({
                left: '-100%'
            });

            $('html, body').css({
                'overflow': 'auto',
                'height': 'auto'
            });
        }
    });

    // Mostramos y ocultamos submenus
    $('.submenu').click(function(){
        $(this).children('.children').slideToggle();
    });
}