<?php
/*SESSION START PARA QUE FUNCIONE LA OPCION DE ADMINISTRADOR EN NAVBAR*/
session_start();
include('conexion.php');
$primera=<<<SQL
SELECT Titulo,Descripcion,urlimagen,Nuevo_producto FROM catalogo WHERE galeria='Articulos varios';
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
    <link rel="stylesheet" href="assets/css/ArticulosVarios.css">

    <link type="text/css" rel="stylesheet" href="assets/css/Fonts%20navbar/fonts/fonts.css"/>
    <link rel="stylesheet" href="fonts/fonts.css">
    <link href="fonts/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <!--SCRIPT'S-->
    <script src="assets/jquery/jquery-1.11.3.min.js"></script>
    <script src="assets/bootstrap-3.3.5-dist/js/bootstrap.js"></script>
    <script src="assets/js/NavbarResponsive.js"></script>
    <script type="text/javascript" src="assets/js/ArticulosVarios.js"></script><!--scripts generales-->
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
                        <a href='index.php'>Inicio</a>
                    </li>
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
                            <li ><a href='ArtesaniasTarahumaraDeCuero.php'>Artesanías  de cuero</a></li>
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
                    <li>
                        <a href='#'>Concursos</a>
                    </li>
                    <li>
                        <a href='#'>Contacto</a>
                    </li>

                    <?php
                    if (isset($_SESSION["username"]))
                    {
                        if ($_SESSION["username"] == "SI")
                        {
                            echo "<li class='active has-sub pull-right' ><a href='#'>Administrador</a>";
                            echo "<ul>";
                            echo "<li ><a href='PanelAdmin.php'><span class='glyphicon glyphicon-th' style='margin-right: 5px'></span> Panel de control</a></li>";
                            echo "<li ><a href='Gestion.php'><span class='glyphicon glyphicon-th-large' style='margin-right: 5px'></span> Gestion</a></li>";
                            echo "<li ><a href='ContactoComentarios.php'><span class='glyphicon glyphicon-comment' style='margin-right: 5px'></span> Comentarios</a></li>";

                            if ($_SESSION["RolCuenta"] == "Administrador")
                            {
                                echo "<li><a  href='NuevosUsuarios.php'><span class='glyphicon glyphicon-user' style='margin-right: 5px'></span>  Nuevo usuario</a></li>";
                            }

                            echo "<li ><a href='DestruirSesion.php'><span class='glyphicon glyphicon-off' style='margin-right: 5px'></span> Cerrar Sesion</a></li>";
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
                </li>
                <li class="submenu">
                    <a href="#"><span class="glyphicon glyphicon-shopping-cart"></span>Productos<span class="glyphicon glyphicon-chevron-down pull-right"></span> </a>
                    <ul class="children">
                        <li><a href="#"><span class="icon-ctrl"></span>Productos Chihuahuenses</a> </li>
                        <li><a href="#"><span class="icon-ctrl"></span>Arcones</a> </li>
                        <li><a href="#"><span class="icon-ctrl"></span>Artesania Regional</a> </li>
                    </ul>
                </li>
                <li>
                    <a href="#"><span class="glyphicon glyphicon-gift"></span>Concursos</a>
                </li>
                <li>
                    <a href="#"><span class="glyphicon glyphicon-earphone"></span>Contacto</a>
                </li>

                <?php
                if (isset($_SESSION["username"]))
                {
                    if ($_SESSION["username"] == "SI")
                    {
                        echo "<li class='submenu'>";
                        echo "<a><span class='glyphicon glyphicon-tree-conifer'></span>Administrador<span class='glyphicon glyphicon-chevron-down pull-right'></span> </a>";
                        echo "<ul class='children'>";

                        echo " <li><a href='PanelAdmin.php'><span class='icon-ctrl'></span>Panel de control</a> </li>";
                        echo " <li><a href='Gestion.php'><span class='icon-ctrl'></span>Gestion</a> </li>";
                        echo " <li><a href='ContactoComentarios.php'><span class='icon-ctrl'></span>Comentarios</a> </li>";
                        if ($_SESSION["RolCuenta"] == "Administrador")
                        {
                            echo "<li><a href='NuevosUsuarios.php'><span class='icon-ctrl'></span>Nuevo usuario</a> </li>";

                        }
                        echo " <li><a href='DestruirSesion.php'><span class='icon-ctrl'></span>Cerrar sesion</a> </li>";
                        echo "</ul>";
                        echo "</li>";
                    }
                }
                ?>

            </ul>
        </nav>
    </div>
</header>

<div id="estilos" >
    <div class="container">
        <div class="row">
            <div class="col-lg-12" >
                <img class="img-responsive img-circle" src="images/logo.png" alt="" >
                <div class="intro-text">
                    <span class="name" style="font-size: 40px">Articulos varios</span>
                    <hr class="star-light" >
                    <span class="skills">Variedad de articulos artesanales</span>
                </div>
            </div>
        </div>
    </div>
</div>

<br>




<!--SEPARADOR-->
<header>
    <div class="container" style="background-color: #5D4037; margin-left: 0%; margin-right: 20%" >
        <!--<h3 class="pull-right" style="color: #ffffff;ve"  >Catalogo de productos en venta</h3>-->
        <p class="pull-right parrafo516"><span style="color: #ffa000">Catalogo de productos en venta</span></p>
    </div>
</header>

<br>

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

<br><br><br><br>

<span class="ir-arriba icon-arrow-up-thick"></span>

<!--PIE DE PAGINA-->
<footer>
    <div class="container-fluid margintop">
        <div class="row" style="background-color: #3E2723;height: auto">

            <div >
                <p  style="color:#212121;background-color: #FAFAFA;padding: 20px;font-size: 14px;margin: 0">© Casa de las Artesanías del Estado de Chihuahua. Todos los derechos reservados. </p>
            </div>

            <div class="posytam0" id="ocultarmq3" style="margin-bottom: 15px;"><img  style="border-radius: 100px" src="images/MisionVision.png"></div>

            <div class="posytam0" id="ocultarmq2" style="margin-bottom: 15px"><img  style="border-radius: 30px" src="images/ChihuahuaVive.jpg"></div>

            <div class="posytam" id="ocultarmq5" style="margin-bottom: 15px"><img src="images/LogoHorizontal.png"></div>



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