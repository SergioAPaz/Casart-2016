/*AJUSTE DE CONTAINER-FLUID A CONTAINER Y AJUSTE VERTICAL AUTOMATICO DE DIV DE TEXTO*/
$(document).ready(function(){
    if(screen.width>1367){
        document.getElementById('id3').className = "container";
        var divh = document.getElementById('id1').offsetHeight;
        document.getElementById('id2').style.height = divh + 'px';
    }else
        document.getElementById('id3').className = "container-fluid";
    if(screen.width>991) {
        var divh = document.getElementById('id1').offsetHeight;
        document.getElementById('id2').style.height = (divh+7) + 'px';
    }else{
        document.getElementById('id2').style.height = 'auto';
    }
});

window.onresize = function(event) {
    if(screen.width>1367){
        document.getElementById('id3').className = "container";
        var divh = document.getElementById('id1').offsetHeight;
        document.getElementById('id2').style.height = divh + 'px';
    }else
        document.getElementById('id3').className = "container-fluid";
        if(screen.width>991) {
            var divh = document.getElementById('id1').offsetHeight;
            document.getElementById('id2').style.height = divh + 'px';
        }else{
            document.getElementById('id2').style.height = 'auto';
        }
};


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



