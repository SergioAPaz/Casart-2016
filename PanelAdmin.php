<!--SCRIPT PARA IDENTIFICAR LA TABLA SELECCIONADA PARA LA BASE DE DATOS-->
<script>
    function show() {
       /* SET VALUE EN INPUT  DE FORMULARIO NUEVO ARTICULO AL SELECCIONAR OPCION DEL SELECT Y HABILITADO DEL BOTON AGREGAR*/
        var text2 = document.getElementById('txtselect');

        if (text2.value =="Elegir galeria...") {
            document.getElementById("btnagregar").disabled = 'true';
        } else {
            document.getElementById("btnagregar").disabled = false;
        }

       if (text2.value=="Alfareria tarahumara"){
            document.getElementById("txtgaleria").value = "Alfareria tarahumara";
        } else if (text2.value=="Cesteria tarahumara"){
            document.getElementById("txtgaleria").value ="Cesteria tarahumara";
        } else if (text2.value=="Textiles tarahumara"){
            document.getElementById("txtgaleria").value ="Textiles tarahumara";
        } else if (text2.value=="Artesanias tarahumara de cuero"){
            document.getElementById("txtgaleria").value ="Artesanias tarahumara de cuero";
        } else if (text2.value=="Instrumentos musicales"){
            document.getElementById("txtgaleria").value ="Instrumentos musicales";
        }else if (text2.value=="Articulos varios"){
            document.getElementById("txtgaleria").value ="Articulos varios";
        }else if (text2.value=="Olla de mata ortiz economica"){
            document.getElementById("txtgaleria").value ="Olla de mata ortiz economica";
        }else if (text2.value=="Olla de mata ortiz comercial"){
            document.getElementById("txtgaleria").value ="Olla de mata ortiz comercial";
        }else{
            document.getElementById("txtgaleria").value ="Sin precisar tabla 2";
        }
    }
</script>

<?php

include ("BloqueDeSeguridad.php");
include("conexion.php");

$consulta=<<<SQL
    SELECT id,Titulo,Descripcion, DATE_FORMAT(Fecha_alta,'%d/%m/%Y %H:%i')as Fecha_alta,urlimagen,Galeria,Usuario FROM catalogo
SQL;

$filas =mysqli_query($conexiondb,$consulta);
?>

<!DOCTYPE html >
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Casart Chihuahua</title>
    <link rel="shortcut icon" href="images/logopagina.png">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!--CSS'S-->
    <link rel="stylesheet" href="assets/bootstrap-3.3.5-dist/css/bootstrap.css">
    <link rel="stylesheet" href="assets/css/StylesNavbar.css">
    <link type="text/css" rel="stylesheet" href="assets/css/Fonts%20navbar/fonts/fonts.css"/>
    <link rel="stylesheet" href="fonts/fonts.css">
    <link href="fonts/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <!--SCRIPT'S-->
    <script src="assets/jquery/jquery-1.11.3.min.js"></script>
    <script src="assets/bootstrap-3.3.5-dist/js/bootstrap.js"></script>
    <script src="assets/js/NavbarResponsive.js"></script>
    <script type="text/javascript" src="assets/js/PanelAdmin.js"></script><!--scripts generales-->
    <!--DATATABLE JQUERY (PAGINACION Y SEARCH)-->
    <link rel="stylesheet" href="assets/jquery/datatable%20jquery/dataTables.bootstrap.min.css">
    <script src="assets/jquery/datatable%20jquery/jquery.dataTables.min.js"></script>
    <script src="assets/jquery/datatable%20jquery/dataTables.bootstrap.min.js"></script>
    <!--CSS'S-->
    <link href="assets/css/PanelAdmin.css" rel="stylesheet" type="text/css">

  <!--<script  src="assets/js/scrollbar/jquery.nicescroll.min.js"></script>    scrollbar-->

</head>
<body style="background-color: #4E342E">
<header>
    <!--NAVBAR-->
    <!--Nav grande (Resolucion>790px)-->
    <nav class="nav1100">
        <div>
            <div id='cssmenu'>
                <ul>
                    <li><a href='index.php'>Inicio</a></li>
                    <li class='active has-sub'><a href='#'>Nosotros</a>
                        <ul>
                            <li ><a href='MisionYVision.php'>Mision & Vision</a></li>
                            <li ><a href='ProductosVarios2/QuienesSomos.php'>Quiénes somos</a></li>
                        </ul>
                    </li>

                    <li class='active has-sub'><a href='#'>Tarahumara</a>
                        <ul>
                            <li ><a href='CesteriaTarahumara.php'>Cestería tarahumara</a></li>
                            <li ><a href='AlfareriaTarahumara.php'>Alfarería tarahumara</a></li>
                            <li ><a href='TextilesTarahumaras.php'>Textiles tarahumaras</a></li>
                            <li ><a href='ArtesaniasTarahumaraDeCuero.php'>Artesanías tarahumara de cuero</a></li>
                            <li ><a href='InstrumentosMusicalesTarahumara.php'>Instrumentos musicales</a></li>
                            <li ><a href='ArticulosVarios.php'>Articulos varios</a></li>
                        </ul>
                    </li>

                    <li class='active has-sub'><a href='#'>Mata Ortiz</a>
                        <ul>
                            <li ><a href='OllaEconomica.php'>Olla mata ortiz económica</a></li>
                            <li ><a href='OllaMataOrtizComercial.php'>Olla mata ortiz comercial</a></li>
                            <li ><a href='OllaFina.php'>Olla mata ortiz fina</a></li>
                            <li ><a href='GaleriaMataOrtiz.php'>Galería ceramica de mata ortiz</a></li>
                        </ul>
                    </li>


                    <li class='active has-sub'><a href='#'>Productos</a>
                        <ul>
                            <li ><a href='#'>Productos Chihuahuenses</a></li>
                            <li ><a href='#'>Arcones</a></li>
                            <li ><a href='#'>Artesania regional</a></li>
                        </ul>
                    </li>

                    <li><a href='#'>Concursos</a></li>
                    <li><a href='#'>Contacto</a></li>

                    <li class='active has-sub pull-right' ><a href='#'>Administrador</a>
                        <ul>
                            <?php
                            if ($_SESSION["RolCuenta"] == "Administrador")
                            {
                                echo "<li ><a href='NuevosUsuarios.php'><span class='glyphicon glyphicon-user' style='margin-right: 5px'></span> Nuevo usuario</a></li>";
                            }
                            ?>
                            <li ><a href='DestruirSesion.php'><span class='glyphicon glyphicon-off' style='margin-right: 5px'></span> Cerrar Sesion</a></li>
                        </ul>
                    </li>


                </ul>
            </div>
        </div>
    </nav>

    <!--Nav pequeña (Resolucion<789px)-->
    <div class="nav-1100">
        <div class="menu_bar">
            <a href="#" class="bt-menu"><span class="icon-align-justify"></span>Casart Chihuahua</a>
        </div>
        <nav>
            <ul>
                <li><a href="index.php"><span class="glyphicon glyphicon-home"></span>Inicio</a></li>
                <li class="submenu">
                    <a href="#"><span class="glyphicon glyphicon-user"></span>Nosotros<span class="glyphicon glyphicon-chevron-down pull-right"></span> </a>
                    <ul class="children">
                        <li><a href="MisionYVision.php"><span class="icon-ctrl"></span>Mision & Vision</a> </li>
                        <li><a href="ProductosVarios2/QuienesSomos.php"><span class="icon-ctrl"></span>Quiénes somos</a> </li>
                    </ul>
                </li>
                <li class="submenu">
                    <a href="#"><span class="glyphicon glyphicon-tree-conifer"></span>Tarahumara<span class="glyphicon glyphicon-chevron-down pull-right"></span> </a>
                    <ul class="children">
                        <li><a href="CesteriaTarahumara.php"><span class="icon-ctrl"></span>Cesteria Tarahuara</a> </li>
                        <li><a href="AlfareriaTarahumara.php"><span class="icon-ctrl"></span>Alfareria Tarahumara</a> </li>
                        <li><a href="TextilesTarahumaras.php"><span class="icon-ctrl"></span>Textiles Tarahumara</a> </li>
                        <li><a href="ArtesaniasTarahumaraDeCuero.php"><span class="icon-ctrl"></span>Artesanias de Cuero</a> </li>
                        <li><a href="InstrumentosMusicalesTarahumara.php"><span class="icon-ctrl"></span>Instrumentos Musicales</a> </li>
                        <li><a href="ArticulosVarios.php"><span class="icon-ctrl"></span>Articulos Varios</a> </li>
                    </ul>
                </li>
                <li class="submenu">
                    <a href="#"><span class="glyphicon glyphicon-equalizer"></span>Mata Ortiz<span class="glyphicon glyphicon-chevron-down pull-right"></span> </a>
                    <ul class="children">
                        <li><a href="OllaEconomica.php"><span class="icon-ctrl"></span>Olla Mata Ortiz economica</a> </li>
                        <li><a href="OllaMataOrtizComercial.php"><span class="icon-ctrl"></span>Olla Mata Ortiz comercial</a> </li>
                        <li><a href="OllaFina.php"><span class="icon-ctrl"></span>Olla Mata Ortiz Fina</a> </li>
                        <li><a href="GaleriaMataOrtiz.php"><span class="icon-ctrl"></span>Galeria ceramica de Mata Ortiz</a> </li>
                    </ul>
                <li class="submenu">
                    <a href="#"><span class="glyphicon glyphicon-shopping-cart"></span>Productos<span class="glyphicon glyphicon-chevron-down pull-right"></span> </a>
                    <ul class="children">
                        <li><a href="#"><span class="icon-ctrl"></span>Productos Chihuahuenses</a> </li>
                        <li><a href="#"><span class="icon-ctrl"></span>Arcones</a> </li>
                        <li><a href="#"><span class="icon-ctrl"></span>Artesania Regional</a> </li>
                    </ul>
                <li><a href="#"><span class="glyphicon glyphicon-gift"></span>Concursos</a></li>
                <li><a href="#"><span class="glyphicon glyphicon-earphone"></span>Contacto</a></li>

                <li class="submenu">
                    <a href="#"><span class="glyphicon glyphicon-tree-conifer"></span>Administrador<span class="glyphicon glyphicon-chevron-down pull-right"></span> </a>
                    <ul class="children">
                        <?php
                        if ($_SESSION["RolCuenta"] == "Administrador")
                        {
                            echo " <li><a href='NuevosUsuarios.php'><span class='icon-ctrl'></span>Nuevo usuario</a> </li>";
                        }
                        ?>
                        <li><a href="DestruirSesion.php"><span class="icon-ctrl"></span>Cerrar sesion</a> </li>
                    </ul>
                </li>


            </ul>
        </nav>
    </div>
</header>

<div class="container" style="background-color: #EEEEEE;/*height: 100%*/">
    <br/>
    <!--FORMULARIO DE NUEVA GALERIA-->
    <div class="panel panel-default">
        <div class="panel-body">
            <p class="alert fondo456" style="font-size: 20px;background-color: #FFCA28;color: #ffffff"><span class="newarticle">Agregar nuevo artículo</span><span style="color: transparent">.</span>
                <select  onchange="show()" id="txtselect" name="txtselect" class="form-control btn btn-danger"  required style="margin-top: -3px;">
                    <option>Cesteria tarahumara</option>
                    <option>Alfareria tarahumara</option>
                    <option>Textiles tarahumara</option>
                    <option>Artesanias tarahumara de cuero</option>
                    <option>Instrumentos musicales</option>
                    <option>Articulos varios</option>
                    <option>Olla de mata ortiz economica</option>
                    <option>Olla de mata ortiz comercial</option>
                    <option>Galeria ceraamica de mata ortiz</option>
                    <option>Productos Chihuahuenses</option>
                    <option>Arcones</option>
                    <option>Artesania regional</option>
                    <option selected>Elegir galeria...</option>
                </select>
                <span class="pull-right" id="galeriade" style="margin-right: 10px">Galeria de: </span>
            </p>
            <form role = "form" method="post" action="PHPCatalogo/GuardarGaleria.php"   enctype="multipart/form-data" >
                <div class = "form-group">
                    <input type='text' name='txtgaleria' id='txtgaleria' hidden>
                    <label class="text-muted" for = "name">Titulo del producto:</label>
                    <input type="text" name="txttitulo" class="form-control" placeholder="Titulo..." maxlength="200"  pattern="^\s*[a-zA-Z0-9ñÑ-.,,\s]+\s*" required>
                    <br/>
                    <label class="text-muted" for = "name">Descripcion del producto:</label>
                    <input  class = "form-control" name="txtdesc" placeholder = "Descripcion..."  maxlength="500"  pattern="^\s*[a-zA-Z0-9ñÑ-.,,\s]+\s*" required>
                    <br/>
                    <label class="text-muted" for = "name">Imagen del producto:</label>
                    <input type="file" class="form-control" name="archivo" required/>
                    <p class="help-block">*Para una mejor vizualizacion utilizar imagenes de tamaño cuadrado Ejem. (500px x 500px).</p>
                </div>
                <button id="btnagregar"  disabled  type = "submit" class = "btn btn-primary">Agregar</button>
                <button type = "reset" class = "btn btn-primary" onclick="deshabilitar()">Limpiar</button>
                 </form>
         </div>
    </div>

    <!--TABLA DE EXISTENCIAS-->
    <div class="panel panel-default">
        <div class="panel-body">
                <p class="alert fondo456" style="font-size: 20px;background-color: #FFCA28;color: #ffffff"><span>Productos en exhibición</span></p>
            <div class="table-responsive" style="border-radius: 10px;margin-top: 12px">
                <table class="table  table-bordered table-hover table-condensed tab" id="regTable"  style="background-color: #ffffff;text-align: center;vertical-align: middle;">
                    <thead>
                        <tr style="background-color: #F5F5F5">
                            <th style="font-size: 14px;color: #F57C00">Publicacion</th>
                            <th style="font-size: 14px;color: #F57C00">Titulo</th>
                            <th style="font-size: 14px;color: #F57C00">Descripcion</th>
                            <th style="font-size: 14px;color: #F57C00">Fecha de alta</th>
                            <th style="font-size: 14px;color: #F57C00">Imagen</th>
                            <th style="font-size: 14px;color: #F57C00">Galeria</th>
                            <th style="font-size: 14px;color: #F57C00">Usuario</th>
                            <th style="font-size: 14px;color: #F57C00">Acciones</th>
                        </tr>
                    </thead>

                    <tbody>
                    <?php
                    $count=0;
                    while ($columna=mysqli_fetch_assoc($filas))
                    {
                        $count=$count+1;
                        echo "<tr>";
                        echo "<td>$count</td>";
                        echo "<td>$columna[Titulo]</td>";
                        echo "<td>$columna[Descripcion]</td>";
                        echo "<td>$columna[Fecha_alta]</td>";
                        echo "<td>$columna[urlimagen]</td>";
                        echo "<td>$columna[Galeria]</td>";
                        echo "<td>$columna[Usuario]</td>";
                        echo "<td>
                        <a href='PHPCatalogo/BorrarGaleria.php?id=$columna[id]'>Borrar</a>
                        <a href='PHPCatalogo/EditarGaleria.php?id=$columna[id]'>Editar</a>
                        <a href='PHPCatalogo/AdminImagen.php?id=$columna[id]'>Cambiar imagen</a></td>";
                        echo "</tr>";
                    }
                    ?>
                    </tbody>
                </table>


            </div>
        </div>
    </div>

    <br><br><br><br><br>

</div>



<span class="ir-arriba icon-arrow-up-thick"></span>

<footer>
    <div class="container-fluid">
        <div class="row" style="background-color:   #4E342E;height: 200px">
            <p style="background-color: #FAFAFA;padding: 20px;font-size: 14px">© 2009-2015 Casart Chihuahua Todos los derechos reservados.</p>
        </div>
    </div>
</footer>




<script>
    $(document).ready(
        function() {
            $("html").niceScroll();
        }
    );
</script><!--"ScrollBar"-->
<script>
    var nice = false; $(document).ready(
        function() {
            nice = $("html").niceScroll();
        }
    );
</script><!--"ScrollBar"-->
<script>
    $(document).ready(
        function() {
            $("#thisdiv").niceScroll({cursorcolor:"#00F"});
        }
    );
</script><!--"ScrollBar"-->
<script>
    $(document).ready(
        function() {
            $("#viewportdiv").niceScroll("#wrapperdiv",{cursorcolor:"#00F"});
        }
    );
</script><!--"ScrollBar"-->
<script>
    var nice = $("#mydiv").getNiceScroll();
</script><!--"ScrollBar"-->
<script>
    $("#mydiv").getNiceScroll().hide();
</script><!--"ScrollBar"-->
<script>
    $("#mydiv").getNiceScroll().resize();
</script><!--"ScrollBar"-->

</body>
</html>