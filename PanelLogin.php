<?php

session_start();
session_destroy();

?>
<!DOCTYPE html>
<noscript> <meta http-equiv=refresh content="0; URL=JavaScriptUnable" /> </noscript>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Casart Chihuahua</title>
    <link rel="shortcut icon" href="images/logopagina.png">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!--CSS'S-->
    <link rel="stylesheet" href="assets/bootstrap-3.3.5-dist/css/bootstrap.css">
    <link rel="stylesheet" href="assets/css/StylesNavbar.css">
    <link rel="stylesheet" href="assets/css/PanelLogin.css">
    <link type="text/css" rel="stylesheet" href="assets/css/Fonts%20navbar/fonts/fonts.css"/>
    <link rel="stylesheet" href="fonts/fonts.css">
    <!--SCRIPT'S-->
    <script src="assets/jquery/jquery-1.11.3.min.js"></script>
    <script src="assets/bootstrap-3.3.5-dist/js/bootstrap.js"></script>
    <script src="assets/js/NavbarResponsive.js"></script>
    <script type="text/javascript" src="assets/js/PanelLogin.js"></script><!--scripts generales-->

    <script src="https://www.google.com/recaptcha/api.js" async defer></script>

</head>
<body>
<!--PRECARGA DE PAGINA-->
<div id="preloader">
    <div id="loader">&nbsp;</div>
</div>

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

                            if ($_SESSION["RolCuenta"] == "Administrador")
                            {
                                echo "<li><a  href='NuevosUsuarios'><span class='glyphicon glyphicon-user' style='margin-right: 5px'></span>  Nuevo usuario</a></li>";
                            }

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
                        if ($_SESSION["RolCuenta"] == "Administrador")
                        {
                            echo "<li><a href='NuevosUsuarios'><span class='icon-ctrl'></span>Nuevo usuario</a> </li>";

                        }
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


<div class="container">
    <div class="jumbotron boxlogin" style="text-align: center;padding-left: 0;padding-right: 0">
            <form method="POST"  id="flogin" action="PHPCatalogo/verificar">



                <img src="images/logo.png" alt="Responsive image" class="img-responsive img-circle" style=";display: block;margin: auto;margin-bottom: 20px;margin-top: -30px"/>
                <label>Nombre de usuario:</label>
                <input  type="text" name="user"  id="name" class="form-control" placeholder="Usuario" maxlength="25"  pattern="^\s*[a-zA-Z0-9ñÑ_.\s]+\s*" required style="width:100%">
                <label style="margin-top: 10px  ">Contraseña:</label>
                <input type="password" name="pw"  id="pw" class="form-control"  placeholder="Contraseña" maxlength="25"  pattern="^\s*[a-zA-Z0-9ñÑ_.\s]+\s*" required>
                <p id="mensaje" style="color: red;margin-top: 10px"></p>

                <div class="g-recaptcha" data-sitekey="6LcE6iQTAAAAACNmHB2efCQX6k7QtUVNVShUuSPH"></div>


                <button type="submit" class="btn btn-warning"  style="text-align: center">Ingresar</button>
                <button class = "btn btn-warning" onclick="formReset()">Limpiar</button>
               <!-- <button  class="btn btn-warning" onclick="javascript:window.close();" style="text-align: center">Salir</button>-->
            </form>

    </div>
</div>


</body>
</html>

