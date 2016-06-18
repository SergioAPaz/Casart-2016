/*
/!*deslizamiento de parrafos de misionyvision*!/
$(document).ready(function(){
    $('#rowpanel').ready(function(){
        $('#rowpanel').animate({marginRight: '20px'}, 2000);

        $('.titulo22').fadeIn(3000);
        $(".descripcion22").fadeIn(3000);

    });
});

/!*PANEL DE VISION VISION*!/
setTimeout('ejecutar()',2000);

   function ejecutar(){
    var element = document.getElementById('col1panel');
    if(element.style.display == 'none') {
        $('#col1panel').fadeIn(1000);
        $('.fadein2').fadeIn(7000);
       /!* document.getElementById("col1panel").fade;*!/
        document.getElementById("divid").style.height="0px";

    }
}
*/

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