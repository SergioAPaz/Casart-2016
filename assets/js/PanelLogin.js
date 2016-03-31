/*DETECCION DE CARACTERES ESPECIALES*/
$(document).ready(function(){
    $('.form-control').keyup(function() {
        $('span.error-keyup-2').remove();
        var inputVal = $(this).val();
        var characterReg = /^\s*[a-zA-Z0-9ñÑ.,,\s]+\s*$/;
        if(!characterReg.test(inputVal)) {
            $(this).after('<span class="error error-keyup-2"><br/>No se permiten caracteres especiales<br/></span>');
            $('.btn').attr('type', 'reset');
        }else{
            $('.btn').attr('type', 'submit');
        }
    });
});


/*BOTON LIMPIAR*/
function formReset()
{
    var elem = document.getElementById("name");
    var elem2 = document.getElementById("pw");
    elem.value = "";
    elem2.value = "";
}