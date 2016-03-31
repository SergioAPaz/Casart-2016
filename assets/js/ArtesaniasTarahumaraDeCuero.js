/*SI SCREEN WIDTH SUPERA LOS 1367PX EL CONTAINER-FLUID PASARA A CONTAINER*/
$(document).ready(function(){
    if(screen.width>1367){
        document.getElementById('id').className = "container";
    }else
        document.getElementById('id').className = "container-fluid";
});

window.onresize = function(event) {
 if(screen.width>1367){
     document.getElementById('id').className = "container";
 }else
     document.getElementById('id').className = "container-fluid";
 }


/*ANIMACION DE PANEL1 IMAGEN Y TEXTO CON RESPONSIVE*/
$(document).ready(function(){
        $(".img02").fadeIn(3000);
});
$(document).ready(function() {
    if (screen.width < 768) {
        $(".img01").css("marginTop", "0px");
        $(".img01").css("display", "none");
        $(".img01").fadeIn(3000);
    } else {
        $(document).ready(function () {
            $(".img01").animate({marginTop: "0px"}, 2000);
        });
    }
});



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




/*FANCYBOX*/
$(document).ready(function() {

    $('.fancybox').fancybox();

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

    $(".fancybox-effects-b").fancybox({
        openEffect  : 'none',
        closeEffect	: 'none',

        helpers : {
            title : {
                type : 'over'
            }
        }
    });

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