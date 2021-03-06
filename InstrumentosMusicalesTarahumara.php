<?php
/*SESSION START PARA QUE FUNCIONE LA OPCION DE ADMINISTRADOR EN NAVBAR*/
session_start();
include('PHPCatalogo/conexion.php');
$primera=<<<SQL
SELECT Titulo,Descripcion,urlimagen,Nuevo_producto FROM catalogo WHERE galeria='Instrumentos musicales';
SQL;
$filas=mysqli_query($conexiondb,$primera);
?>
<!DOCTYPE html>
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
    <link rel="stylesheet" href="assets/css/InstrumentosMusicalesTarahumara.css">
    <link rel="stylesheet" href="fonts/fonts.css">
    <!--SCRIPT'S-->
    <script src="assets/jquery/jquery-1.11.3.min.js"></script>
    <script src="assets/bootstrap-3.3.5-dist/js/bootstrap.js"></script>
    <script src="assets/js/NavbarResponsive.js"></script>
    <script type="text/javascript" src="assets/js/InstrumentosMusicalesTarahumara.js"></script><!--scripts generales-->
    <script  src="assets/js/scrollbar/jquery.nicescroll.min.js"></script><!--scrollbar-->
    <!--FANCYBOX-->
    <script type="text/javascript" src="assets/jquery/aumento%20de%20img/jquery.mousewheel-3.0.6.pack.js"></script>
    <script type="text/javascript" src="assets/jquery/aumento%20de%20img/source/jquery.fancybox.js?v=2.1.5"></script>
    <link rel="stylesheet" type="text/css" href="assets/jquery/aumento%20de%20img/source/jquery.fancybox.css?v=2.1.5" media="screen" />
    <link rel="stylesheet" type="text/css" href="assets/jquery/aumento%20de%20img/source/helpers/jquery.fancybox-buttons.css?v=1.0.5" />
    <script type="text/javascript" src="assets/jquery/aumento%20de%20img/source/helpers/jquery.fancybox-buttons.js?v=1.0.5"></script>
    <!--Add Thumbnail helper (this is optional)-->
    <link rel="stylesheet" type="text/css" href="assets/jquery/aumento%20de%20img/source/helpers/jquery.fancybox-thumbs.css?v=1.0.7" />
    <script type="text/javascript" src="assets/jquery/aumento%20de%20img/source/helpers/jquery.fancybox-thumbs.js?v=1.0.7"></script>
    <!--  Add Media helper (this is optional)-->
    <script type="text/javascript" src="assets/jquery/aumento%20de%20img/source/helpers/jquery.fancybox-media.js?v=1.0.6"></script>
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






<div class="container-fluid" style="padding-left: 0;padding-right: 0">
    <div class="row x" style="background-color: #FF9100;" >
        <div class="col-xs-12 col-md-6  pull-left" style="padding-right: 0;background-color: #1b6d85">
            <img src="images/musica.jpg" class="img-responsive" alt="Responsive image" style=" max-height: 550px;filter: sepia(100%);-webkit-filter: sepia(100%);-moz-filter: sepia(100%);    -o-filter: sepia(100%);   -ms-filter: sepia(100%);">
        </div>
        <div class="col-sm-12 col-md-6   pull-right style566 " >
            <h1 class="sdf6513" style="color: white">Instrumentos musicales tarahumara</h1>
            <p style="font-size: 15px;color: white">
                En muchas comunidades el tarahumara ha adoptado la indumentaria occidental. Sin embargo, aún conserva la vestimenta
                tradicional,preferentemente, en el caso de los hombres, y siempre en las mujeres. Las blusas o camisas de colores brillantes, estampados, a veces
                floreados, son usadas por hombres y mujeres.<br><br class="ocultame">
                <a class="desaparece87" style="color: white">Las faldas son muy apreciadas por la mujer, quien viste muchas a la vez, una encima de otra, lo que le da esa apariencia de bellamente esponjada.
                    Le sirve de adorno, de abrigo y, además, parece envolverla en mil colores. Los hombres visten un calzón de manta llamado Tagora. El ceñidor o
                    cinturón lo usan por igual hombres y mujeres. Están tejidos con dibujos propios y los utilizan para sostener pantalones, zapatos y faldas.</a>
            </p>
        </div>
    </div>
    <hr style="height: 6px;width: 100%;background-color: #FFC107;margin-top: 0;border-color: #FFC107;margin-bottom: 10px">
</div>







<br/>

<!--SEPARADOR-->
<header>
    <div class="container" style="background-color: #5D4037; margin-left: 0%; margin-right: 20%" >
        <!--<h3 class="pull-right" style="color: #ffffff;ve"  >Catalogo de productos en venta</h3>-->
        <p class="pull-right parrafo516"><span style="color: #ffa000">Catalogo de productos en venta</span></p>
    </div>
</header>

<br/>

<!--CATALOGO-->
<div class="container-fluid">
    <div class="row" >

        <?php
        while($columna=mysqli_fetch_assoc($filas)){
            echo "<div class='col-xs-12 col-sm-6 col-md-3''>";
            echo '<div class="thumbnail" style="height: 443px">';
            if($columna['Nuevo_producto']=='Si') {
                echo '<div style="border-radius: 0px 6px 6px 0px;z-index: 2;background-color: #FFA726;float: left;margin-left: -6px;margin-top: 20px;opacity: .9;position: absolute;width: 150px;height: 25px"><p style="color: white;;float: right;margin-right: 5px;margin-top: 2%">Nuevo producto</p></div>';
            }
            echo ' <div style="height: 10px" class="divhide"></div>';
            echo '<div style="height: 315px;position: relative;z-index: 1">';
            echo "<a class='fancybox' href='PHPCatalogo/ImagenesGaleria/$columna[urlimagen]' data-fancybox-group='gallery'>
                    <img class='img-responsive styleimg img152' style='max-height: 315px;' src='PHPCatalogo/ImagenesGaleria/$columna[urlimagen]' alt='' /></a>";
            echo'</div>';
            echo '  <div class="caption">';
            echo "<h3>$columna[Titulo]</h3>";
            echo "<button data-container='body' data-trigger='hover click'  data-placement='top' type='button' class='btn btn-info' data-toggle='popover'
                            data-content='$columna[Descripcion]'>Detalles...</button>";
            echo ' </div>';
            echo '</div>';
            echo '</div>';
        }
        ?>

    </div>
</div>

<br><br><br>

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



<!--TOOLTIP POPOVER PARA EL FORMULARIO-->
<script>
    $(function () {
        $('[data-toggle="popover"]').popover()
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