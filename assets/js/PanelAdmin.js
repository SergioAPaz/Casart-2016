/*CAMPO DE BUSQUEDA EN TABLA DE GALERIA*/
function doSearch1() {
    var asignar = document.getElementById('txtselect');

    if (asignar.value=="Alfareria tarahumara"){
        document.getElementBy("xxx").value = "Alfareria tarahumara";
    } else if (asignar.value=="Cesteria tarahumara"){
        document.getElementById("xxx").value ="Cesteria tarahumara";
    } else if (asignar.value=="Textiles tarahumara"){
        document.getElementById("xxx").value ="Textiles tarahumara";
    } else if (asignar.value=="Artesanias tarahumara de cuero"){
        document.getElementById("xxx").value ="Artesanias tarahumara de cuero";
    } else if (asignar.value=="Instrumentos musicales"){
        document.getElementById("xxx").value ="Instrumentos musicales";
    }else if (asignar.value=="Articulos varios"){
        document.getElementById("xxx").value ="Articulos varios";
    }else if (asignar.value=="Olla de mata ortiz economica"){
        document.getElementById("xxx").value ="Olla de mata ortiz economica";
    }else if (asignar.value=="Olla de mata ortiz comercial"){
        document.getElementById("xxx").value ="Olla de mata ortiz comercial";
    }else{
        document.getElementById("xxx").value ="Sin precisar tabla 2";
    }
}
    /*var tableReg = document.getElementById('regTable');
    var searchText = document.getElementById('searchTerm1').value.toLowerCase();
    for (var i = 1; i < tableReg.rows.length; i++) {
        var cellsOfRow = tableReg.rows[i].getElementsByTagName('td');
        var found = false;
        for (var j = 0; j < cellsOfRow.length && !found; j++) {
            var compareWith = cellsOfRow[j].innerHTML.toLowerCase();
            if (searchText.length == 0 || (compareWith.indexOf(searchText) > -1)) {
                found = true;
            }
        }
        if (found) {
            tableReg.rows[i].style.display = '';
        } else {
            tableReg.rows[i].style.display = 'none';
        }
    }
}*/
/*
function doSearch2() {
    var tableReg = document.getElementById('regTable');
    var searchText = document.getElementById('searchTerm2').value.toLowerCase();
    for (var i = 1; i < tableReg.rows.length; i++) {
        var cellsOfRow = tableReg.rows[i].getElementsByTagName('td');
        var found = false;
        for (var j = 0; j < cellsOfRow.length && !found; j++) {
            var compareWith = cellsOfRow[j].innerHTML.toLowerCase();
            if (searchText.length == 0 || (compareWith.indexOf(searchText) > -1)) {
                found = true;
            }
        }
        if (found) {
            tableReg.rows[i].style.display = '';
        } else {
            tableReg.rows[i].style.display = 'none';
        }
    }
}*/

/*DESHABILITAR BOTON AGREGAR AL DAR CLICK EN LIMPIAR*/
function deshabilitar() {
    document.getElementById("btnagregar").disabled = 'true';
    document.getElementById("txtselect").value = "Elegir galeria...";
}

$(document).ready(function() {
    $('#regTable').DataTable();
} );


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