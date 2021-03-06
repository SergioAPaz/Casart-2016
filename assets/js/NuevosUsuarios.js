/*CAMPO DE BUSQUEDA EN TABLA DE GALERIA*/
function doSearch() {
    var tableReg = document.getElementById('regTable');
    var searchText = document.getElementById('searchTerm').value.toLowerCase();
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
}

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
