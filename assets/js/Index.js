/*BOTON IR ARRIBA*/
$(document).ready(function(){
    $('.ir-arriba').click(function(){
        $('body, html').animate({
            scrollTop: '0px'
        }, 300);
    });
    $(window).scroll(function(){
        if( $(this).scrollTop() > 150 ){
            $('.ir-arriba').slideDown(400);
        } else {
            $('.ir-arriba').slideUp(400);
        }
    });

});

/*ANIMACION DE APARECER IMAGEN EN PANEL 4*/
$(document).ready(function(){
    $(window).scroll(function(){
        if( $(this).scrollTop() > 800 ){
            $('.fadein').fadeIn(3000);
        }
    });
});

/*DESPLAZAMIENTO A PANEL DE COMENTARIOS*/
function  desplazamiento() {
    $('html, body').animate({
        'scrollTop':   $('.cmntanchor').offset().top
    }, 2000);
}




 
/*
/!*DETECCION DE CARACTERES ESPECIALES*!/
function  CampoVacio() {
    $('.validar45').keyup(function () {



        var inputVal = $(this).val();
        var characterReg = /^\s*[a-zA-Z0-9ñÑ.,,\s]+\s*$/;

        if (!characterReg.test(inputVal)) {
            $(this).after('<span class="MensajeError"><br/>No se permiten caracteres especiales<br/></span>');
            $('.btn64').attr('type', 'reset');
        } else {
            $('.btn64').attr('type', 'submit');

        }
    });


}
*/

/*REPARAR LA SECCION DE COMENTARIOS YA QUE EL ALGORITMO NO ESTA FUNCIONANDO, NO SE RESPETA LA REGULAR EXPRESION*/
/*DETECCION DE CARACTERES ESPECIALES*/




$(document).ready(function()
{
    $('.validar1').keyup(function()
    {
        $('span.error-keyup-2').remove();
        var inputVal = $('.validar1').val();
        var characterReg = /^\s*[a-zA-Z0-9ñÑ@.,\s]+\s*$/;
        if(!characterReg.test(inputVal))
        {
            $(this).after('<span class="error error-keyup-2" style="color: #EF5350"><br/>No se permiten caracteres especiales nombre<br/></span>');
        }else
        {
            $('span.error-keyup-2').remove();
        }
    });

    $('.validar2').keyup(function() {
        $('span.error-keyup-3').remove();
        var inputVal = $('.validar2').val();
        var characterReg = /^\s*[a-zA-Z0-9ñÑ@_.,\s]+\s*$/;
        if((!characterReg.test(inputVal))) {
            $(this).after('<span class="error error-keyup-3" style="color: #EF5350"><br/>No se permiten caracteres especiales email<br/></span>');
        }else {
            $('span.error-keyup-3').remove();
        }
    });

    $('.validar3').keyup(function() {
        $('span.error-keyup-4').remove();
        var inputVal = $('.validar3').val();
        var characterReg = /^\s*[a-zA-Z0-9ñÑ@.,\s]+\s*$/;
        if((!characterReg.test(inputVal))) {
            $(this).after('<span class="error error-keyup-4" style="color: #EF5350"><br/>No se permiten caracteres especiales mensaje<br/></span>');
        }else{
            $('span.error-keyup-4').remove();
        }
    });
});



/*FANCYBOX*/
$(document).ready(function() {
    /*
     *  Simple image gallery. Uses default settings
     */

    $('.fancybox').fancybox();

    /*
     *  Different effects
     */

    // Change title type, overlay closing speed
    $(".fancybox-effects-a").fancybox({
        helpers: {
            title : {
                type : 'outside'
            },
            overlay : {
                speedOut : 0
            }
        }
    });

    // Disable opening and closing animations, change title type
    $(".fancybox-effects-b").fancybox({
        openEffect  : 'none',
        closeEffect	: 'none',

        helpers : {
            title : {
                type : 'over'
            }
        }
    });

    // Set custom style, close if clicked, change title type and overlay color
    $(".fancybox-effects-c").fancybox({
        wrapCSS    : 'fancybox-custom',
        closeClick : true,

        openEffect : 'none',

        helpers : {
            title : {
                type : 'inside'
            },
            overlay : {
                css : {
                    'background' : 'rgba(238,238,238,0.85)'
                }
            }
        }
    });

    // Remove padding, set opening and closing animations, close if clicked and disable overlay
    $(".fancybox-effects-d").fancybox({
        padding: 0,

        openEffect : 'elastic',
        openSpeed  : 150,

        closeEffect : 'elastic',
        closeSpeed  : 150,

        closeClick : true,

        helpers : {
            overlay : null
        }
    });

    /*
     *  Button helper. Disable animations, hide close button, change title type and content
     */

    $('.fancybox-buttons').fancybox({
        openEffect  : 'none',
        closeEffect : 'none',

        prevEffect : 'none',
        nextEffect : 'none',

        closeBtn  : false,

        helpers : {
            title : {
                type : 'inside'
            },
            buttons	: {}
        },

        afterLoad : function() {
            this.title = 'Image ' + (this.index + 1) + ' of ' + this.group.length + (this.title ? ' - ' + this.title : '');
        }
    });


    /*
     *  Thumbnail helper. Disable animations, hide close button, arrows and slide to next gallery item if clicked
     */

    $('.fancybox-thumbs').fancybox({
        prevEffect : 'none',
        nextEffect : 'none',

        closeBtn  : false,
        arrows    : false,
        nextClick : true,

        helpers : {
            thumbs : {
                width  : 50,
                height : 50
            }
        }
    });

    /*
     *  Media helper. Group items, disable animations, hide arrows, enable media and button helpers.
     */
    $('.fancybox-media')
        .attr('rel', 'media-gallery')
        .fancybox({
            openEffect : 'none',
            closeEffect : 'none',
            prevEffect : 'none',
            nextEffect : 'none',

            arrows : false,
            helpers : {
                media : {},
                buttons : {}
            }
        });
});





