<?php

include("PHPCatalogo/BloqueDeSeguridadNewAccount.php");
include("PHPCatalogo/conexion.php");

$consulta=<<<SQL
SELECT id,Nombre,Apellido,USER, Rol FROM  users;
SQL;

$filas =mysqli_query($conexiondb,$consulta);
?>

<!DOCTYPE html>
<noscript> <meta http-equiv=refresh content="0; URL=JavaScriptUnable" /> </noscript>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Registro de usuarios</title>
    <link rel="shortcut icon" href="images/logopagina.png">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!--CSS'S-->
    <link rel="stylesheet" href="assets/bootstrap-3.3.5-dist/css/bootstrap.css">
    <link rel="stylesheet" href="assets/css/StylesNavbar.css">
    <link rel="stylesheet" href="assets/css/NuevosUsuarios.css">
    <link type="text/css" rel="stylesheet" href="assets/css/Fonts%20navbar/fonts/fonts.css"/>
    <link rel="stylesheet" href="fonts/fonts.css">
    <!--SCRIPTS DE LA PAGINA AL FINAL DEL BODY-->

</head>

<body>
<header>
    <!--NAVBAR-->
    <!--Nav grande (Resolucion>790px)-->
    <nav class="nav1100">
        <div>
            <div id='cssmenu'>
                <ul>
                    <li>
                        <a href='index'>Inicio</a>
                    </li>
                    <li class='active has-sub'><a href='#'>Nosotros</a>
                        <ul>
                            <li><a href='Info/QuienesSomos'>Quiénes somos</a></li>
                            <li><a href='AvisoDePrivacidad'>Aviso de privacidad</a></li>
                        </ul>
                    </li>
                    <li class='active has-sub'><a href='#'>Tarahumara</a>
                        <ul>
                            <li><a href='CesteriaTarahumara'>Cestería tarahumara</a></li>
                            <li><a href='AlfareriaTarahumara'>Alfarería tarahumara</a></li>
                            <li><a href='TextilesTarahumaras'>Textiles tarahumara</a></li>
                            <li><a href='ArtesaniasTarahumaraDeCuero'>Artesanías de cuero</a></li>
                            <li><a href='InstrumentosMusicalesTarahumara'>Instrumentos musicales</a></li>
                            <li><a href='ArticulosVarios'>Artículos varios</a></li>
                        </ul>
                    </li>
                    <li class='active has-sub'><a href='#'>Mata Ortiz</a>
                        <ul>
                            <li><a href='OllaEconomica'>Olla economica Mata Ortiz</a></li>
                            <li><a href='OllaMataOrtizComercial'>Olla comercial Mata Ortiz</a></li>
                            <li><a href='OllaMataOrtizFina'>Olla fina Mata Ortiz</a></li>
                            <li><a href='GaleriaDeCeramicaDeMataOrtiz'>Galería cerámica Mata Ortiz</a></li>
                        </ul>
                    </li>
                    <li class='active has-sub'><a href='#'>Productos</a>
                        <ul>
                            <li><a href='ProductosChihuahuenses'>Productos Chihuahuenses</a></li>
                            <li><a href='Arcones'>Arcones</a></li>
                            <li><a href='ArtesaniaRegional'>Artesanía regional</a></li>
                        </ul>
                    </li>
                
                    <?php
                    if (isset($_SESSION["username"]))
                    {
                        if ($_SESSION["username"] == "SI")
                        {
                            echo "<li class='active has-sub pull-right' ><a href='#'>Administrador</a>";
                            echo "<ul>";
                            echo "<li><a style='background-color: #FF9800'><span class='glyphicon glyphicon-user' style='margin-right: 5px;font-size: 20px;margin-top: -2%'></span> <span style='font-size: 20px;margin-left: 4%;margin-top: -2%;position: absolute'>$_SESSION[usuario]</span></li>";
                            echo "<li ><a href='PanelAdmin'><span class='glyphicon glyphicon-th' style='margin-right: 5px'></span> Panel de control</a></li>";
                            echo "<li ><a href='Gestion'><span class='glyphicon glyphicon-th-large' style='margin-right: 5px'></span> Gestion</a></li>";
                            echo "<li ><a href='ContactoComentarios'><span class='glyphicon glyphicon-comment' style='margin-right: 5px'></span> Comentarios</a></li>";
                            echo "<li ><a href='PHPCatalogo/DestruirSesion'><span class='glyphicon glyphicon-off' style='margin-right: 5px'></span> Cerrar Sesion</a></li>";
                            echo "</ul>";
                            echo "</li>";
                        }
                    }
                    ?>

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
                <li><a href="index"><span class="glyphicon glyphicon-home"></span>Inicio</a></li>
                <li class="submenu">
                    <a href="#"><span class="glyphicon glyphicon-user"></span>Nosotros<span class="glyphicon glyphicon-chevron-down pull-right"></span> </a>
                    <ul class="children">
                        <li><a href="Info/QuienesSomos"><span class="icon-ctrl"></span>Quiénes somos</a> </li>
                        <li><a href="AvisoDePrivacidad"><span class="icon-ctrl"></span>Aviso de privacidad</a> </li>
                    </ul>
                </li>
                <li class="submenu">
                    <a href="#"><span class="glyphicon glyphicon-tree-conifer"></span>Tarahumara<span class="glyphicon glyphicon-chevron-down pull-right"></span> </a>
                    <ul class="children">
                        <li><a href="CesteriaTarahumara"><span class="icon-ctrl"></span>Cestería tarahumara</a> </li>
                        <li><a href="AlfareriaTarahumara"><span class="icon-ctrl"></span>Alfarería tarahumara</a> </li>
                        <li><a href="TextilesTarahumaras"><span class="icon-ctrl"></span>Textiles Tarahumara</a> </li>
                        <li><a href="ArtesaniasTarahumaraDeCuero"><span class="icon-ctrl"></span>Artesanías de cuero</a> </li>
                        <li><a href="InstrumentosMusicalesTarahumara"><span class="icon-ctrl"></span>Instrumentos musicales</a> </li>
                        <li><a href="ArticulosVarios"><span class="icon-ctrl"></span>Artículos varios</a> </li>
                    </ul>
                </li>
                <li class="submenu">
                    <a href="#"><span class="glyphicon glyphicon-equalizer"></span>Mata Ortiz<span class="glyphicon glyphicon-chevron-down pull-right"></span> </a>
                    <ul class="children">
                        <li><a href="OllaEconomica"><span class="icon-ctrl"></span>Olla economica Mata Ortiz</a> </li>
                        <li><a href="OllaMataOrtizComercial"><span class="icon-ctrl"></span>Olla comercial Mata Ortiz</a> </li>
                        <li><a href="OllaMataOrtizFina"><span class="icon-ctrl"></span>Olla fina Mata Ortiz</a> </li>
                        <li><a href="GaleriaDeCeramicaDeMataOrtiz"><span class="icon-ctrl"></span>Galería cerámica Mata Ortiz</a> </li>
                    </ul>
                </li>
                <li class="submenu">
                    <a href="#"><span class="glyphicon glyphicon-shopping-cart"></span>Productos<span class="glyphicon glyphicon-chevron-down pull-right"></span> </a>
                    <ul class="children">
                        <li><a href="ProductosChihuahuenses"><span class="icon-ctrl"></span>Productos Chihuahuenses</a> </li>
                        <li><a href="Arcones"><span class="icon-ctrl"></span>Arcones</a> </li>
                        <li><a href="ArtesaniaRegional"><span class="icon-ctrl"></span>Artesanía regional</a> </li>
                    </ul>
                </li>
              
                <?php
                if (isset($_SESSION["username"]))
                {
                    if ($_SESSION["username"] == "SI")
                    {
                        echo "<li class='submenu'>";
                        echo "<a><span class='glyphicon glyphicon-tree-conifer'></span>Administrador<span class='glyphicon glyphicon-chevron-down pull-right'></span> </a>";
                        echo "<ul class='children'>";
                        echo " <li><a style='height: 63px;'><span class='glyphicon glyphicon-user' style='font-size: 20px'></span><p style='font-size: 20px; '>$_SESSION[usuario]</p></a> </li>";
                        echo " <li><a href='PanelAdmin'><span class='icon-ctrl'></span>Panel de control</a> </li>";
                        echo " <li><a href='Gestion'><span class='icon-ctrl'></span>Gestion</a> </li>";
                        echo " <li><a href='ContactoComentarios'><span class='icon-ctrl'></span>Comentarios</a> </li>";
                        echo " <li><a href='PHPCatalogo/DestruirSesion'><span class='icon-ctrl'></span>Cerrar sesion</a> </li>";
                        echo "</ul>";
                        echo "</li>";
                    }
                }
                ?>

            </ul>
        </nav>
    </div>
</header>


<br/>


<div class="container">
    <div class=" jumbotron boxlogin" style="text-align: center;padding-left: 0;padding-right: 0">
        <form method="POST"  id="flogin" action="PHPCatalogo/NuevosUsuariosPHP.php">
            <p class="alert" style="font-size: 20px;background-color: #FFCA28;color: #ffffff">Nuevo usuario</p>
            <label>Nombres:</label>
            <input   type="text" name="txtnombre"  id class="form-control" maxlength="25"  pattern="^\s*[a-zA-Z0-9ñÑ_.,,\s]+\s*" required style="width:100%">
            <label style="margin-top: 10px  ">Apellidos:</label>
            <input type="text" name="txtapellido"   class="form-control"  maxlength="25" pattern="^\s*[a-zA-Z0-9ñÑ_.,,\s]+\s*" required>
            <label style="margin-top: 10px  ">Usuario:</label>
            <input type="text" name="txtusuario"   data-toggle="tooltip" title="El usuario debe ser unico y no duplicarse con los nombres de usuario ya existentes."
                   data-placement="right"  class="form-control"  maxlength="25" pattern="^\s*[a-zA-Z0-9ñÑ_.\s]+\s*" required>
            <label style="margin-top: 10px  ">Contraseña:</label>
            <input type="password" name="txtcontrasena"   class="form-control"  maxlength="25" pattern="^\s*[a-zA-Z0-9ñÑ_.\s]+\s*" required>
            <label style="margin-top: 10px  ">Rol:</label>
            <select name="txtrol" data-toggle="tooltip" title="
            Los administradores podran dar de alta nuevos administradores o usuarios y vizualizar los datos personales de los registros asi como
            modificar el sitio web,
            los usuarios solo podran modificar el sitio web pero no dar de alta nuevos usuarios o administradores y no tendran acceso
            a los datos personales de los demas usuarios o administradores."
                    data-placement="right" class="form-control">
                <option>Usuario</option>
                <option>Administrador</option>
            </select>
            <button type="submit" class="btn btn-warning"  style="text-align: center">Guardar</button>
            <button class = "btn btn-warning" type="reset">Limpiar</button>
        </form>
    </div>




<!--TABLA DE EXISTENCIAS-->
<div class="panel panel-default" id="tabla">
    <div class="panel-body">
        <div class="row" style="z-index: 1">
            <div class=" pull-left col-xs-12 col-sm-6">
                <p  style="font-size: 20px;margin-left: 1%;max-width: 260px">Usuarios en el sistema</p>
            </div>
            <!--INPUT BUSCAR-->
            <div class=" pull-right  hidden-xs  col-sm-6" style="max-width: 370px;margin-top: -5px">
                <div class="input-group">
                    <input type="text" class="form-control" id="searchTerm" onkeyup="doSearch()" placeholder="Buscar...">
                        <span class="input-group-btn">
                            <button class="btn btn-default glyphicon glyphicon-search" type="button"  style="margin-top: -2px;background-color: #FFB300;border-color: #FFB300"></button>
                         </span>
                </div><!-- /input-group -->
            </div><!-- /.col-lg-6 -->
        </div>

        <div class="table-responsive" style="border-radius: 10px">
            <table class="table  table-bordered table-hover table-condensed" id="regTable" style="background-color: #ffffff;text-align: center;vertical-align: middle; border-radius: 0;">
                <tr class="" style="background-color: #FFB300;color: #ffffff;">
                    <th>Numero</th>
                    <th>Nombres</th>
                    <th>Apellidos</th>
                    <th>Usuario</th>
                    <th>Rol</th>
                    <th>Acciones</th>
                </tr>
                <?php
                $count=0;
                while ($columna=mysqli_fetch_assoc($filas))
                {
                    $count=$count+1;
                    echo "<tr>";
                    echo "<td>$count</td>";
                    echo "<td>$columna[Nombre]</td>";
                    echo "<td>$columna[Apellido]</td>";
                    echo "<td>$columna[USER]</td>";
                    echo "<td>$columna[Rol]</td>";
                    echo "<td>
                        <a href='PHPCatalogo/BorrarUsuarioPHP?id=$columna[id]'>Borrar</a></td>";
                    echo "<tr>";
                }
                ?>
            </table>
        </div>
    </div>
</div>


</div>

<br>

<span class="ir-arriba icon-arrow-up-thick"></span>
<!--PIE DE PAGINA-->
<footer>
    <div class="container-fluid margintop">
        <div class="row" style="background-color: #3E2723;height: auto">

            <div >
                <p  style="color:#212121;background-color: #FAFAFA;padding: 20px;font-size: 14px;margin: 0">© Casa de las Artesanías del Estado de Chihuahua. Todos los derechos reservados.
                    <span id="ocultarmq4" style="float: right"><span>Developed by </span><a href="mailto:alejandroax@live.com.mx">Sergio Paz.</a> </p>
            </div>

            <div class="posytam0 lefts" id="ocultarmq3" style="margin-bottom: 5px"><img  style="border-radius: 100px" src="images/MisionVision.png"></div>

            <div class="posytam0" id="ocultarmq2" style="margin-bottom: 5px"><img  style="border-radius: 30px" src="images/ChihuahuaVive.jpg"></div>

            <div class="posytam" id="ocultarmq5" style="margin-bottom: 5px"><img src="images/LogoHorizontal.png"></div>

            <!--   <div  style="margin-top: 25px;margin-right: 90px;float: right;margin-bottom: 25px;" class="ocultarmq" >
                   <div class="fb-page" data-href="https://www.facebook.com/Casa-De-Las-Artesanias-De-Chihuahua-457359271070862/"
                        data-small-header="true" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true"></div>
               </div>
   -->
        </div>
    </div>
</footer>



<!--SCRIPTS DE LA PAGINA-->
<script src="assets/jquery/jquery-1.11.3.min.js"></script>
<script src="assets/bootstrap-3.3.5-dist/js/bootstrap.js"></script>
<script src="assets/js/NavbarResponsive.js"></script>
<script type="text/javascript" src="assets/js/NuevosUsuarios.js"></script><!--scripts generales-->
<script  src="assets/js/scrollbar/jquery.nicescroll.min.js"></script><!--scrollbar-->

<!--TOOLTIP PARA EL FORMULARIO-->
<script>
    $(document).ready(function(){
        $('[data-toggle="tooltip"]').tooltip();
    });
</script>

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

