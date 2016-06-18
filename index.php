<?php
session_start();
include('PHPCatalogo/conexion.php');
$consultasql=<<<SQL
SELECT Titulo,Descripcion,urlimagen,Nuevo_producto FROM catalogo WHERE Nuevo_producto='Si' OR Nuevo_producto='No';
SQL;
$filas=mysqli_query($conexiondb,$consultasql);
$filas2=mysqli_query($conexiondb,$consultasql);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Casart Chihuahua</title>
    <link rel="shortcut icon" href="images/logopagina.png">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!--CSS'S-->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="assets/css/Fonts%20navbar/formcomnt.css">
    <link rel="stylesheet" href="assets/bootstrap-3.3.5-dist/css/bootstrap.css">
    <link rel="stylesheet" href="assets/css/StylesNavbar.css">

    <link type="text/css" rel="stylesheet" href="assets/css/Fonts%20navbar/fonts/fonts.css"/>

    <link rel="stylesheet" href="assets/css/Index.css">
    <link rel="stylesheet" href="assets/css/animate.css">
    <link rel="stylesheet" href="fonts/fonts.css">

    <!--SCRIPT'S-->
    <script src="assets/jquery/jquery-1.11.3.min.js"></script>
    <script src="assets/bootstrap-3.3.5-dist/js/bootstrap.js"></script>
    <script src="assets/js/NavbarResponsive.js"></script>
    <script type="text/javascript" src="assets/js/Index.js"></script><!--scripts generales-->
    <script type="text/javascript" src="assets/js/slideshow/jssor.js"></script><!--slideshow-->
    <script type="text/javascript" src="assets/js/slideshow/jssor.slider.js"></script><!--slideshow-->
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
    <!--PICTUREFILL-->
    <script src="assets/js/picturefill.js" async></script>
    <script>document.createElement( "picture" );</script>
    <!--SCRIPT de Recaptcha en comments-->
    <script src="https://www.google.com/recaptcha/api.js" async defer></script>
</head>
<body style="background-color: #795548">

<!--Preload-->
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
                            <li ><a href='MisionYVision'>Mision & Vision</a></li>
                            <li ><a href='Info/QuienesSomos'>Quiénes somos</a></li>
                        </ul>
                    </li>
                    <li class='active has-sub'><a href='#'>Tarahumara</a>
                        <ul>
                            <li ><a href='CesteriaTarahumara'>Cestería tarahumara</a></li>
                            <li ><a href='AlfareriaTarahumara'>Alfarería tarahumara</a></li>
                            <li ><a href='TextilesTarahumaras'>Textiles tarahumaras</a></li>
                            <li ><a href='ArtesaniasTarahumaraDeCuero'>Artesanías de cuero</a></li>
                            <li ><a href='InstrumentosMusicalesTarahumara'>Instrumentos musicales</a></li>
                            <li ><a href='ArticulosVarios'>Articulos varios</a></li>
                        </ul>
                    </li>
                    <li class='active has-sub'><a href='#'>Mata Ortiz</a>
                        <ul>
                            <li ><a href='OllaEconomica'>Olla mata ortiz económica</a></li>
                            <li ><a href='OllaMataOrtizComercial'>Olla mata ortiz comercial</a></li>
                            <li ><a href='OllaFina'>Olla mata ortiz fina</a></li>
                            <li ><a href='GaleriaMataOrtiz'>Galería ceramica de mata ortiz</a></li>
                        </ul>
                    </li>
                    <li class='active has-sub'><a href='#'>Productos</a>
                        <ul>
                            <li ><a href='#'>Productos Chihuahuenses</a></li>
                            <li ><a href='PanelAdmin'>Arcones</a></li>
                            <li ><a href='PanelLogin'>Artesania regional</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href='#'>Concursos</a>
                    </li>
                    <li>
                        <a href="#" onclick="desplazamiento()">Contacto</a>
                    </li>

                    <?php
                    if (isset($_SESSION["username"]))
                    {
                        if ($_SESSION["username"] == "SI")
                        {
                            echo "<li class='active has-sub pull-right' ><a href='#'>Administrador</a>";
                            echo "<ul>";
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
                        <li><a href="MisionYVision"><span class="icon-ctrl"></span>Mision & Vision</a> </li>
                        <li><a href="Info/QuienesSomos"><span class="icon-ctrl"></span>Quiénes somos</a> </li>
                    </ul>
                </li>
                <li class="submenu">
                    <a href="#"><span class="glyphicon glyphicon-tree-conifer"></span>Tarahumara<span class="glyphicon glyphicon-chevron-down pull-right"></span> </a>
                    <ul class="children">
                        <li><a href="CesteriaTarahumara"><span class="icon-ctrl"></span>Cesteria Tarahuara</a> </li>
                        <li><a href="AlfareriaTarahumara"><span class="icon-ctrl"></span>Alfareria Tarahumara</a> </li>
                        <li><a href="TextilesTarahumaras"><span class="icon-ctrl"></span>Textiles Tarahumara</a> </li>
                        <li><a href="ArtesaniasTarahumaraDeCuero"><span class="icon-ctrl"></span>Artesanias de Cuero</a> </li>
                        <li><a href="InstrumentosMusicalesTarahumara"><span class="icon-ctrl"></span>Instrumentos Musicales</a> </li>
                        <li><a href="ArticulosVarios"><span class="icon-ctrl"></span>Articulos Varios</a> </li>
                    </ul>
                </li>
                <li class="submenu">
                    <a href="#"><span class="glyphicon glyphicon-equalizer"></span>Mata Ortiz<span class="glyphicon glyphicon-chevron-down pull-right"></span> </a>
                    <ul class="children">
                        <li><a href="OllaEconomica"><span class="icon-ctrl"></span>Olla Mata Ortiz economica</a> </li>
                        <li><a href="OllaMataOrtizComercial"><span class="icon-ctrl"></span>Olla Mata Ortiz comercial</a> </li>
                        <li><a href="OllaFina"><span class="icon-ctrl"></span>Olla Mata Ortiz Fina</a> </li>
                        <li><a href="GaleriaMataOrtiz"><span class="icon-ctrl"></span>Galeria ceramica de Mata Ortiz</a> </li>
                    </ul>
                </li>
                <li class="submenu">
                    <a href="#"><span class="glyphicon glyphicon-shopping-cart"></span>Productos<span class="glyphicon glyphicon-chevron-down pull-right"></span> </a>
                    <ul class="children">
                        <li><a href="#"><span class="icon-ctrl"></span>Productos Chihuahuenses</a> </li>
                        <li><a href="#"><span class="icon-ctrl"></span>Arcones</a> </li>
                        <li><a href="PanelLogin"><span class="icon-ctrl"></span>Artesania Regional</a> </li>
                    </ul>
                </li>
                <li>
                    <a href="#"><span class="glyphicon glyphicon-gift"></span>Concursos</a>
                </li>
                <li>
                    <a><span class="glyphicon glyphicon-earphone"></span>Contacto</a>
                </li>

                <?php
                if (isset($_SESSION["username"]))
                {
                    if ($_SESSION["username"] == "SI")
                    {
                        echo "<li class='submenu'>";
                        echo "<a><span class='glyphicon glyphicon-tree-conifer'></span>Administrador<span class='glyphicon glyphicon-chevron-down pull-right'></span> </a>";
                        echo "<ul class='children'>";

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

<!--Slideshow-->
<div class="SlideshowBig hol" >
    <div id="slider1_container" class="compa0" style=" margin-top:0;position: relative;/* margin: 0 auto*/ top: 0; left: 0;
        width: 1300px; /*height: 500px;*/ overflow: hidden;">

        <div u="loading" style="position: absolute; top: 0; left: 0;">
            <div style="filter: alpha(opacity=70); opacity: 0.7; position: absolute; display: block;
                        top: 0px; left: 0px; width: 100%; height: 100%;">
            </div>
            <div style="position: absolute; display: block;  background: url(images/slideshow/loading.gif) no-repeat center center;
                        top: 0px; left: 0px; width: 100%; height: 100%;">
            </div>
        </div>
        <!-- Slides Container -->
        <div id="Slides" class="compa" u="slides" style="cursor: pointer; position: absolute; left: 0px; top: 0px;
            width: 1300px;overflow: hidden;">

            <div class="pantalla 1">
                <a href="GaleriaMataOrtiz"> <!--<img u="image"  src="imagenes/panftalla1.jpg" />-->
                    <picture>
                        <source srcset="images/slideshow/pantalla1.jpg" media="(min-width: 770px)">
                        <source srcset="images/slideshow/MataOrtizFONART9.JPG" media="(min-width: 100px)">
                        <img srcset="examples/images/art-medium.jpg" alt="…">
                    </picture>
                </a>

                <div class="text00" style="position: absolute; width: 480px; height: 120px; top: 30px; left: 30px; padding: 5px;
                            text-align: left; line-height: 60px; text-transform: uppercase; /*font-size: 50px;*/
                                color: #FFFFFF;">Una tradicion en Mata Ortiz
                </div>
                <div class="text11" style="position: absolute; /*width: 480px;*/ height: 180px;  /*top: 300px;*/ left: 30px; padding: 5px;
                            text-align: left; /*line-height: 36px;*/ /*font-size: 30px;*/
                                color: #FFFFFF;">
                    Conoce mas acerca de las artesanias de Mata Ortiz.
                </div>
                <div class="text22" style="position:relative; width: 180px; height: 190px; /*top: 335px;*/ /*left: -12px;*/ padding: 5px;
                            text-align: right; line-height: 36px; float: right;">
                    <!--<img  src="images/logo.png" />-->
                </div>
            </div>

            <div class="pantalla 2" >
                <!--<img u="image" src="imagenes/pantalla2.jpg" />-->
                <picture>
                    <source srcset="images/slideshow/pantalla2.jpg" media="(min-width: 770px)">
                    <source srcset="images/slideshow/Tarahumara.jpg" media="(min-width: 100px)">
                    <img srcset="examples/images/art-medium.jpg" alt="…">
                </picture>
                <div class="text00" style="position: absolute; width: 480px; height: 120px; top: 30px; left: 30px; padding: 5px;
                            text-align: left; line-height: 60px; text-transform: uppercase; /*font-size: 50px;*/
                                color: #FFFFFF;">Artesanias Tarahumara
                </div>
                <div class="text11" style="position: absolute; /*width: 480px;*/ height: 120px; /*top: 300px;*/ left: 30px; padding: 5px;
                            text-align: left; /*line-height: 36px; font-size: 30px;*/
                                color: #FFFFFF;">
                    Conoce la artesania tradicional de la cultura tarahumara icono de Chihuahua.
                </div>
                <div class="text22" style="position:relative; width: 180px; height: 190px; /*top: 335px; left: -12px;*/ padding: 5px;
                            text-align: right; line-height: 36px; float: right;">
                    <img  src="imagenes/logo%20casa.png" />
                </div>
            </div>

            <div class="pantalla 3">
                <!--<img u="image" src="imagenes/pantalla3.jpg" />-->
                <picture>
                    <source srcset="images/slideshow/pantalla1.jpg" media="(min-width: 770px)">
                    <source srcset="images/slideshow/MataOrtizFONART9.JPG" media="(min-width: 100px)">
                    <img srcset="examples/images/art-medium.jpg" alt="…">
                </picture>
                <div class="text00" style="position: absolute; width: 480px; height: 120px; top: 30px; left: 30px; padding: 5px;
                            text-align: left; line-height: 60px; text-transform: uppercase; /*font-size: 50px;*/
                                color: #FFFFFF;">
                    Arcones con diversos productos
                </div>
                <div class="text11" style="position: absolute; /*width: 480px;*/ height: 120px; /*top: 300px;*/ left: 30px; padding: 5px;
                            text-align: left; /*line-height: 36px; font-size: 30px;*/
                                color: #FFFFFF;">
                    Excelente para un regalo especial, incluyen diversos productos con un gran sabor.
                </div>
                <div class="text22" style="position:relative; width: 180px; height: 190px; /*top: 335px; left: -12px;*/ padding: 5px;
                            text-align: right; line-height: 36px; float: right;">
                    <img  src="imagenes/logo%20casa.png" />
                </div>
            </div>
        </div>

        <style>
            .jssorb21 {
                position: absolute;
            }
            .jssorb21 div, .jssorb21 div:hover, .jssorb21 .av {
                position: absolute;
                /* size of bullet elment */
                width: 19px;
                height: 19px;
                text-align: center;
                line-height: 19px;
                color: white;
                font-size: 12px;
                background: url(images/slideshow/b21.png) no-repeat;
                overflow: hidden;
                cursor: pointer;
            }
            .jssorb21 div { background-position: -5px -5px; }
            .jssorb21 div:hover, .jssorb21 .av:hover { background-position: -35px -5px; }
            .jssorb21 .av { background-position: -65px -5px; }
            .jssorb21 .dn, .jssorb21 .dn:hover { background-position: -95px -5px; }
        </style>

        <div u="navigator" class="jssorb21" style="bottom: 26px; right: 6px;">
            <div u="prototype"></div>
        </div>

        <style>
            .jssora21l, .jssora21r {
                display: block;
                position: absolute;
                /* size of arrow element */
                width: 55px;
                height: 55px;
                cursor: pointer;
                background: url(images/slideshow/a21.png) center center no-repeat;
                overflow: hidden;
            }
            .jssora21l { background-position: -3px -33px; }
            .jssora21r { background-position: -63px -33px; }
            .jssora21l:hover { background-position: -123px -33px; }
            .jssora21r:hover { background-position: -183px -33px; }
            .jssora21l.jssora21ldn { background-position: -243px -33px; }
            .jssora21r.jssora21rdn { background-position: -303px -33px; }
        </style>
        <span u="arrowleft" class="jssora21l" style="top: 123px; left: 8px;"></span>
        <span u="arrowright" class="jssora21r" style="top: 123px; right: 8px;"></span>
    </div>

</div>
<!--HR Y MENSAJES-->
<div class="container estilos2561">
    <div class="jumbotron estilos2562">

        <h2>Artesanias Mexicanas Tradicionales</h2>

        <hr class="divisor365">

        <p>Conoce las artesanias de la casa de las artesanias del estado de chihuahua, 100% Chihuahuenses.</p>
    </div>
</div>


<!--PANEL MOSAICO-->


<div class="container-fluid" style="padding-right: 0;padding-left: 0">

    <hr  style="height: 6px;width: 100%;;background-color: #FF9800;border-color: #FF9800;margin-bottom: 0">

    <div class="x2  col-lg-3 col-md-4 col-sm-6 col-xs-12" style="overflow: hidden;padding-left: 0;padding-right: 0">
        <div id="color1">
            <a href="AlfareriaTarahumara">
                <div class="shadow0"  style=""></div>
                <div class="shadow"  style=""></div>
                <img class="img-responsive" alt="Responsive image"  src="images/Mosaic/test111.png" style="    background-size: cover;height: 300px;">
                <div   class="hovertest"  id="hover1" style="font-family: 'Montserrat', sans-serif;  position: absolute;
                     top: 35%; text-align: center;margin-left: 18%;margin-right: 18%; color: white;">Alfereria Tarahumara</div>
                <div   class="hovertest"  id="hover2" style="font-family: 'Montserrat', sans-serif;  position: absolute; font-size: 18px;
                 display: none; text-align: center;margin-left: 4%;margin-right: 4%;   color: white;">Conoce la mejor alfareria de nuestro bello estado de Chihuahua.</div>
            </a>
        </div>
    </div>

    <div class="x2  col-lg-3 col-md-4 col-sm-6 col-xs-12" style="overflow: hidden;padding-left: 0;padding-right: 0">
        <div id="color2">
            <a href="#">
                <div class="shadow0"  style="opacity: .5"></div>
                <div class="shadow2"  style=""></div>
                <img  src="images/Mosaic/test3.jpg" alt="" style="    background-size: cover;height: 300px;">
                <div   class="hovertest"  id="hover3" style="font-family: 'Montserrat', sans-serif;  position: absolute;
                 top: 40%; text-align: center;margin-left: 18%;margin-right: 18%; color: white;">Ollas finas de Mata Ortiz</div>
                <div   class="hovertest"  id="hover4" style="font-family: 'Montserrat', sans-serif;  position: absolute; font-size: 18px;
               display: none; text-align: center;margin-left: 4%;margin-right: 4%; top: 38%;  color: white;"> Ollas con estilo artesanal de gran reconocimiento, expuesto en galerías de arte y celebrado internacionalmente.</div>
            </a>
        </div>
    </div>

    <div class="x2  col-lg-3 col-md-4 col-sm-6 col-xs-12" style="overflow: hidden;padding-left: 0;padding-right: 0">
        <div id="color3">
            <a href="CesteriaTarahumara">
                <div class="shadow0"  style=""></div>
                <div class="shadow3"  style=""></div>
                <img  src="images/Mosaic/test4.jpg" alt="" style="    background-size: cover;height: 300px;">
                <div   class="hovertest"  id="hover5" style="font-family: 'Montserrat', sans-serif;  position: absolute;
                     top: 35%; text-align: center;margin-left: 18%;margin-right: 18%; color: white;">Cesteria Tarahumara</div>
                <div   class="hovertest"  id="hover6" style="font-family: 'Montserrat', sans-serif;  position: absolute; font-size: 18px;top: 33%;
                    display: none; text-align: center;margin-left: 4%;margin-right: 4%;   color: white;">Tradición de antaño, la fabricación de artesanías es fundamental para los tarahumaras, quienes siempre han destacado por sus
                    minuciosos trabajos en cestería.
                </div>
            </a>
        </div>
    </div>

    <div class="x2  col-lg-3 col-md-4 col-sm-6 col-xs-12" style="overflow: hidden;padding-left: 0;padding-right: 0">
        <div id="color4">
            <a href="InstrumentosMusicalesTarahumara">
                <div class="shadow0"  style=""></div>
                <div class="shadow4"  style=""></div>
                <img  src="images/Mosaic/Sierra.jpg" alt="" style="    background-size: cover;height: 300px;">
                <div   class="hovertest"  id="hover7" style="font-family: 'Montserrat', sans-serif;  position: absolute;
                 top: 35%; text-align: center;margin-left: 18%;margin-right: 18%; color: white;">Instrumentos musicales</div>
                <div   class="hovertest"  id="hover8" style="font-family: 'Montserrat', sans-serif;  position: absolute; font-size: 18px;top: 30%;
                 display: none; text-align: center;margin-left: 4%;margin-right: 4%;   color: white;">Los pueblos Rarámuris realizan distintas actividades siempre acompañadas de música y sonidos que emiten los
                    instrumentos que ellos mismos fabrican con materiales como cuero y  madera.</div>
            </a>
        </div>
    </div>






    <div class="x2  col-lg-3 col-md-4 col-sm-6 col-xs-12" style="overflow: hidden;padding-left: 0;padding-right: 0">
        <div id="color5">
            <a href="#">
                <div class="shadow0"  style=""></div>
                <div class="shadow5"  style=""></div>
                <img  class="img-responsive" alt="Responsive image" src="images/Mosaic/77.jpg" alt="" style="    background-size: cover;height: 300px;">
                <div   class="hovertest"  id="hover9" style="font-family: 'Montserrat', sans-serif;  position: absolute;
                 top: 33%; text-align: center;margin-left: 18%;margin-right: 18%; color: white;">Productos Chihuahuenses</div>
                <div   class="hovertest"  id="hover10" style="font-family: 'Montserrat', sans-serif;  position: absolute; font-size: 18px;top: 33%;
                display: none; text-align: center;margin-left: 4%;margin-right: 4%;   color: white;">Variedad de productos de gran sabor como mermeladas, galletas, pinole, sotol y muchos mas.</div>
            </a>
        </div>
    </div>

    <div class="x2  col-lg-3 col-md-4 col-sm-6 col-xs-12" style="overflow: hidden;padding-left: 0;padding-right: 0">
        <div id="color6">
            <a href="#">
                <div class="shadow0"  style=""></div>
                <div class="shadow6"  style=""></div>
                <img  class="img-responsive" alt="Responsive image" src="images/Mosaic/88.jpg" alt="" style="background-size: cover;height: 300px;">
                <div   class="hovertest"  id="hover11" style="font-family: 'Montserrat', sans-serif;  position: absolute;
                 top: 40%; text-align: center;margin-left: 39%;margin-right: 39%; color: white;">Arcones</div>
                <div   class="hovertest"  id="hover12" style="font-family: 'Montserrat', sans-serif;  position: absolute; font-size: 18px;top: 38%;
                 display: none; text-align: center;margin-left: 4%;margin-right: 4%;   color: white;">Una excelente combinacion de sabor con distintos dulces tradicionales y productos 100% Chihuahuenses.
                </div>
            </a>
        </div>
    </div>

    <div class="x2  col-lg-3 col-md-4 col-sm-6 col-xs-12" style="overflow: hidden;padding-left: 0;padding-right: 0">
        <div id="color7">
            <a href="OllaMataOrtizComercial">
                <div class="shadow0"  style=""></div>
                <div class="shadow7"  style=""></div>
                <img   class="img-responsive" alt="Responsive image" src="images/Mosaic/999.png" alt="" style="    background-size: cover;height: 300px;">
                <div   class="hovertest"  id="hover13" style="font-family: 'Montserrat', sans-serif;  position: absolute;
                 top: 40%; text-align: center;margin-left: 18%;margin-right: 18%; color: white;">Ollas de Mata Ortiz</div>
                <div   class="hovertest"  id="hover14" style="font-family: 'Montserrat', sans-serif;  position: absolute; font-size: 18px;top: 30%;
                 display: none; text-align: center;margin-left: 4%;margin-right: 4%;   color: white;">La cultura mexicana se distingue en el mundo por tener un sello propio, lleno de color, historia y autenticidad. Prueba
                    de ello lo encontramos en el pueblo de Mata Ortiz.</div>
            </a>
        </div>
    </div>

    <div class="x2  col-lg-3 col-md-4 col-sm-6 col-xs-12" style="overflow: hidden;padding-left: 0;padding-right: 0">
        <div id="color8">
            <a href="#">
                <div class="shadow0"  style="opacity: .5"></div>
                <div class="shadow8"  style=""></div>
                <img  src="images/Mosaic/10000.png" alt="" style="    background-size: cover;height: 300px;">
                <div   class="hovertest"  id="hover15" style="font-family: 'Montserrat', sans-serif;  position: absolute;
                 top: 40%; text-align: center;margin-left: 21%;margin-right: 21%; color: white;">Artesania regional</div>
                <div   class="hovertest"  id="hover16" style="font-family: 'Montserrat', sans-serif;  position: absolute; font-size: 18px;
               display: none; text-align: center;margin-left: 4%;margin-right: 4%; top: 33%;  color: white;">Piezas artísticas de significación cultural realizadas manualmente por artesanos, piezas que reflejan una
                    autenticidad que enorgullece y revitaliza la artesania chihuahuense.</div>
            </a>
        </div>
    </div>

</div>

<div CLASS="container-fluid" style="padding-left: 0;padding-right: 0">
    <hr  style="height: 2px;width: 100%;;background-color: #212121;border-color: #212121;margin-bottom: 0;margin-top: 0">
</div>

<!--FIN PANEL MOSAICO-->

<!--PANEL DE IMAGEN REDONDA-->

<div class="container-fluid">


    <div class="row" style="background-color: #FFA726">



        <div class="col-xs-12 col-sm-8" style="background-color: #FFA726;">

            <p class="text-uppercase texto651" style="margin-top: 20px;margin-bottom: 20px">Cerámica de Mata Ortiz <br></p>
            <p class="text-uppercase" style="font-size: 17px;color: #ffffff">La cerámica de Mata Ortiz es un estilo de artesanías, principalmente vasijas y ollas, iniciada por Juan Quezada Celado en el poblado de Juan Mata Ortiz,
                Chihuahua. Toma su inspiración de la cerámica aridoamericana originada en Casas Grandes, para convertirse en cuatro décadas en un estilo artesanal de
                gran reconocimiento, expuesto en galerías de arte y celebrado internacionalmente. Actualmente son más de 300 los artesanos dedicados a la producción de
                esta cerámica en Mata Ortiz.</p>
            <p class="text-uppercase hidden-xs hidden-sm hidden-md" style="font-size: 17px;color: #ffffff">
                A la edad de 20 años, Juan Quezada Celado emprendía largas caminatas con su burro para colectar leña, fruta
                y miel de agave en las cercanías de su poblado natal, Juan Mata Ortiz. En estos viajes, Quezada recolectaba piezas y pedacería
                prehispánica proveniente de la cultura Casas Grandes. Durante varios años, resultado de la observación
                de los colores y los patrones geométricos de la cerámica aridoamericana, fue perfeccionando su técnica, añadiendo un poco de arena en la mezcla
                para evitar que se fragmentara.
            <p class="text-uppercase hidden-xs hidden-sm Desaparece84" style="font-size: 17px;color: #ffffff">Alrededor de 1974 Quezada concentró todos sus esfuerzos en la producción
                de cerámica, seguido por sus hermanos Nicolás, Reynaldo, Lidia, Consolación, Reynalda, Jesús y Genoveva, y fue así como toda la familia comenzó
                a involucrarse en la incipiente producción de este tipo de artesanía.
            </p>
            </p>
        </div>

        <div class="col-xs-12 col-sm-4 pull-right" style="background-color: #FFCA28">

            <img src="images/imagen.jpg" class="img-responsive img-circle fadein hol2" alt="Responsive image" style="display:none;margin: 0 auto; margin-top: 15px;margin-bottom: 16px">
        </div>
    </div>
</div>



<hr style="height: 6px;width: 100%;position: absolute;background-color: #FF9800;border-color: #FF9800;margin-top: auto">


<br>
<header>

    <div class="container" style="background-color: #4E342E; margin-left: 0%; margin-right: 20%" >
        <!--<h3 class="pull-right" style="color: #ffffff;ve"  >Catalogo de productos en venta</h3>-->
        <p class="pull-right parrafo516" style="color: #ffa000;">Gran variedad de artesanías mexicanas</p>
    </div>
</header>



<br>

<!--CATALOGO-->
<div class="container-fluid">
    <div class="row" >

        <?php
        $contador=0;
        while($columna=mysqli_fetch_assoc($filas)) {
            if (($columna['Nuevo_producto'] == 'Si') and ($contador<8)) {
                $contador=$contador+1;
                echo "<div class='col-xs-12 col-sm-6 col-md-3''>";
                echo '<div class="x thumbnail " style="height: 443px">';
                echo '<div style="border-radius: 0px 6px 6px 0px;z-index: 2;background-color: #FFA726;float: left;margin-left: -6px;margin-top: 20px;opacity: .9;position: absolute;width: 150px;height: 25px"><p style="color: white;;float: right;margin-right: 5px;margin-top: 2%">Nuevo producto</p></div>';
                echo ' <div style="height: 10px" class="divhide"></div>';
                echo '<div style="height: 315px;position: relative;z-index: 1">';
                echo "<a class='fancybox' href='PHPCatalogo/ImagenesGaleria/$columna[urlimagen]' data-fancybox-group='gallery'>
                    <img class='img-responsive styleimg img152' style='max-height: 315px;' src='PHPCatalogo/ImagenesGaleria/$columna[urlimagen]' alt='' /></a>";
                echo '</div>';
                echo '  <div class="caption">';
                echo "<h3>$columna[Titulo]</h3>";
                echo "<button data-container='body' data-trigger='hover click'  data-placement='top' type='button' class='btn btn-info' data-toggle='popover'
                            data-content='$columna[Descripcion]'>Detalles...</button>";
                echo ' </div>';
                echo '</div>';
                echo '</div>';
            }
        }

        while($columna2=mysqli_fetch_assoc($filas2)) {
            if (($columna2['Nuevo_producto'] == 'No') and ($contador<8)) {
                $contador=$contador+1;
                echo "<div class='col-xs-12 col-sm-6 col-md-3''>";
                echo '<div class="x thumbnail " style="height: 443px">';
                echo ' <div style="height: 10px" class="divhide"></div>';
                echo '<div style="height: 315px;position: relative;z-index: 1">';
                echo "<a class='fancybox' href='PHPCatalogo/ImagenesGaleria/$columna2[urlimagen]' data-fancybox-group='gallery'>
                    <img class='img-responsive styleimg img152' style='max-height: 315px;' src='PHPCatalogo/ImagenesGaleria/$columna2[urlimagen]' alt='' /></a>";
                echo '</div>';
                echo '  <div class="caption">';
                echo "<h3>$columna2[Titulo]</h3>";
                echo "<button data-container='body' data-trigger='hover click'  data-placement='top' type='button' class='btn btn-info' data-toggle='popover'
                            data-content='$columna2[Descripcion]'>Detalles...</button>";
                echo ' </div>';
                echo '</div>';
                echo '</div>';
            }
        }
        ?>


        <!--     <div class="col-xs-12 col-sm-6 col-md-3">
                  <div class="thumbnail x" style="height: 443px;">
                      <div style="border-radius: 0px 6px 6px 0px;background-color: #FFA726;float: left;margin-left: -6px;margin-top: 20px;opacity: .8;position: absolute;width: 150px;height: 25px"><p style="color: white;;float: right;margin-right: 5px;;margin-top: 2%">Nuevo producto</p></div>
                      <div style="height: 10px" class="divhide"></div>
                      <a class="fancybox " href="images/productocondesc.jpg" data-fancybox-group="gallery" >
                          <img class="img-responsive styleimg" style="max-height: 315px" src="images/productocondesc.jpg" alt="" /></a>
                      <div class="caption">
                          <h3>Mermelada varios sabores</h3>
                          <p>Mermelada sabor Guayaba, Manzana y Tamarindo, producto Chihuahuense.</p>
                      </div>
                  </div>
              </div>
      -->

    </div>
</div>

<br><br/>

<!--<header class="g65df1" >
    <div class="container pull-right" style="background-color: #5D4037;margin-bottom: 0px"  >
        <p class="pull-left parrafo516" style="color: #ffa000;">Conoce mas de ellas en nuestras distintas secciones</p>
    </div>
</header>-->


<!--FORMULARIO DE CONTACTOS-->
<section style="position: relative">
    <a name="cmntanchor"><section id="footer"  class=" aqui cmntanchor" style="color: #FAFAFA">
    </a>
    <hr style="height: 6px;width: 100%;background-color: #FF9800;border-color: #FF9800;margin-bottom: 10px">
    <div class="inner">
        <h2 class="major">CONTACTANOS</h2>
        <p>¿Tienes algo interesante que contarnos?, Preguntas acerca nuestras artesanias, Contactanos!.</p>

        <form method="post" action="PHPCatalogo/GuardarComentariosPHP">
            <div class="field">
                <label for="name">NOMBRE</label>
                <input type="text" name="name" id="name" class="validar1" maxlength="30" pattern="^\s*[a-zA-Z0-9ñÑ_.\s]+\s*" required/>
            </div>
            <div class="field">
                <label for="email">EMAIL</label>
                <input type="email" name="email" id="email" class="validar2" maxlength="40" pattern="^\s*[a-zA-Z0-9ñÑ@_.\s]+\s*" required/>
            </div>
            <div class="field">
                <label for="message">MENSAJE</label>
                <textarea name="message" id="message" rows="4" class="validar3"  maxlength="400" pattern="^\s*[a-zA-Z0-9ñÑ@_.,\s]+\s*" required></textarea>
            </div>

            <div class="g-recaptcha"   data-theme="dark" data-sitekey="6LdwxSETAAAAAAgUhUhtKcDPdNu8xQmIOt6JDRot"></div>

            <br>

            <ul class="actions">
                <li><input type="submit"  class="btn64"  value="ENVIAR MENSAJE" /></li>
            </ul>
        </form>

        <ul class="contact">
            <li class="fa-home">
                Calle 2da   <br />
                Col. Centro<br />
                Chihuahua, Chihuahua,<br />
                México 31000
            </li>

            <li class="fa-phone">(614) 4-47-48-59</li>
            <li class="fa-envelope"><a>Alejandro@hotmail.com</a></li>
            <li class="fa-envelope"><a>Alejandro@hotmail.com</a></li>
        </ul>
        <ul class="copyright"></ul>
    </div>

</section>

<!--BOTON IR ARRIBA-->
<span class="ir-arriba icon-arrow-up-thick"></span>


<!--PIE DE PAGINA-->
<footer>
    <div class="container-fluid margintop">
        <div class="row" style="background-color: #3E2723;height: auto">

            <div >
                <p  style="color:#212121;background-color: #FAFAFA;padding: 20px;font-size: 14px;margin: 0">© Casa de las Artesanías del Estado de Chihuahua. Todos los derechos reservados.
                    <span id="ocultarmq4" style="float: right"><span>Dessarrollado por </span><a href="mailto:alejandroax@live.com.mx">Sergio Paz.</a> </p>
            </div>

            <div class="posytam0" id="ocultarmq3" style="margin-bottom: 25px"><img  style="border-radius: 100px" src="images/MisionVision.png"></div>

            <div class="posytam0" id="ocultarmq2" style="margin-bottom: 15px"><img  style="border-radius: 30px" src="images/ChihuahuaVive.jpg"></div>

            <div class="posytam" id="ocultarmq5" style="margin-bottom: 15px"><img src="images/LogoHorizontal.png"></div>

            <div  style="margin-top: 25px;margin-right: 90px;float: right;margin-bottom: 25px;" class="ocultarmq" >
                <div class="fb-page" data-href="https://www.facebook.com/Casa-De-Las-Artesanias-De-Chihuahua-457359271070862/"
                     data-small-header="true" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true"></div>
            </div>

        </div>
    </div>
</footer>




<!--SCRIPT PARA GOOGLE ANALYTICS-->
<script>
    (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
            (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
        m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
    })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

    ga('create', 'UA-72761356-1', 'auto');
    ga('send', 'pageview');

</script>




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

<!--SCRIPT FACEBOOK-->
<div id="fb-root"></div>
<script>(function(d, s, id) {
        var js, fjs = d.getElementsByTagName(s)[0];
        if (d.getElementById(id)) return;
        js = d.createElement(s); js.id = id;
        js.src = "//connect.facebook.net/es_LA/sdk.js#xfbml=1&version=v2.6";
        fjs.parentNode.insertBefore(js, fjs);
    }(document, 'script', 'facebook-jssdk'));</script>


<!--SCRIPT SLIDESHOW-->
<script>
    jQuery(document).ready(function ($) {
        var _CaptionTransitions = [];
        _CaptionTransitions["L"] = { $Duration: 900, x: 0.6, $Easing: { $Left: $JssorEasing$.$EaseInOutSine }, $Opacity: 2 };
        _CaptionTransitions["R"] = { $Duration: 900, x: -0.6, $Easing: { $Left: $JssorEasing$.$EaseInOutSine }, $Opacity: 2 };
        _CaptionTransitions["T"] = { $Duration: 900, y: 0.6, $Easing: { $Top: $JssorEasing$.$EaseInOutSine }, $Opacity: 2 };
        _CaptionTransitions["B"] = { $Duration: 900, y: -0.6, $Easing: { $Top: $JssorEasing$.$EaseInOutSine }, $Opacity: 2 };
        _CaptionTransitions["ZMF|10"] = { $Duration: 900, $Zoom: 11, $Easing: { $Zoom: $JssorEasing$.$EaseOutQuad, $Opacity: $JssorEasing$.$EaseLinear }, $Opacity: 2 };
        _CaptionTransitions["RTT|10"] = { $Duration: 900, $Zoom: 11, $Rotate: 1, $Easing: { $Zoom: $JssorEasing$.$EaseOutQuad, $Opacity: $JssorEasing$.$EaseLinear, $Rotate: $JssorEasing$.$EaseInExpo }, $Opacity: 2, $Round: { $Rotate: 0.8} };
        _CaptionTransitions["RTT|2"] = { $Duration: 900, $Zoom: 3, $Rotate: 1, $Easing: { $Zoom: $JssorEasing$.$EaseInQuad, $Opacity: $JssorEasing$.$EaseLinear, $Rotate: $JssorEasing$.$EaseInQuad }, $Opacity: 2, $Round: { $Rotate: 0.5} };
        _CaptionTransitions["RTTL|BR"] = { $Duration: 900, x: -0.6, y: -0.6, $Zoom: 11, $Rotate: 1, $Easing: { $Left: $JssorEasing$.$EaseInCubic, $Top: $JssorEasing$.$EaseInCubic, $Zoom: $JssorEasing$.$EaseInCubic, $Opacity: $JssorEasing$.$EaseLinear, $Rotate: $JssorEasing$.$EaseInCubic }, $Opacity: 2, $Round: { $Rotate: 0.8} };
        _CaptionTransitions["CLIP|LR"] = { $Duration: 900, $Clip: 15, $Easing: { $Clip: $JssorEasing$.$EaseInOutCubic }, $Opacity: 2 };
        _CaptionTransitions["MCLIP|L"] = { $Duration: 900, $Clip: 1, $Move: true, $Easing: { $Clip: $JssorEasing$.$EaseInOutCubic} };
        _CaptionTransitions["MCLIP|R"] = { $Duration: 900, $Clip: 2, $Move: true, $Easing: { $Clip: $JssorEasing$.$EaseInOutCubic} };
        var options = {
            $FillMode: 2,                                       //[Optional] The way to fill image in slide, 0 stretch, 1 contain (keep aspect ratio and put all inside slide), 2 cover (keep aspect ratio and cover whole slide), 4 actual size, 5 contain for large image, actual size for small image, default value is 0
            $AutoPlay: true,                                    //[Optional] Whether to auto play, to enable slideshow, this option must be set to true, default value is false
            $AutoPlayInterval: 4000,                            //[Optional] Interval (in milliseconds) to go for next slide since the previous stopped if the slider is auto playing, default value is 3000
            $PauseOnHover: 1,                                   //[Optional] Whether to pause when mouse over if a slider is auto playing, 0 no pause, 1 pause for desktop, 2 pause for touch device, 3 pause for desktop and touch device, 4 freeze for desktop, 8 freeze for touch device, 12 freeze for desktop and touch device, default value is 1
            $ArrowKeyNavigation: true,   			            //[Optional] Allows keyboard (arrow key) navigation or not, default value is false
            $SlideEasing: $JssorEasing$.$EaseOutQuint,          //[Optional] Specifies easing for right to left animation, default value is $JssorEasing$.$EaseOutQuad
            $SlideDuration: 800,                               //[Optional] Specifies default duration (swipe) for slide in milliseconds, default value is 500
            $MinDragOffsetToSlide: 20,                          //[Optional] Minimum drag offset to trigger slide , default value is 20
            //$SlideWidth: 600,                                 //[Optional] Width of every slide in pixels, default value is width of 'slides' container
            //$SlideHeight: 300,                                //[Optional] Height of every slide in pixels, default value is height of 'slides' container
            $SlideSpacing: 0, 					                //[Optional] Space between each slide in pixels, default value is 0
            $DisplayPieces: 1,                                  //[Optional] Number of pieces to display (the slideshow would be disabled if the value is set to greater than 1), the default value is 1
            $ParkingPosition: 0,                                //[Optional] The offset position to park slide (this options applys only when slideshow disabled), default value is 0.
            $UISearchMode: 1,                                   //[Optional] The way (0 parellel, 1 recursive, default value is 1) to search UI components (slides container, loading screen, navigator container, arrow navigator container, thumbnail navigator container etc).
            $PlayOrientation: 1,                                //[Optional] Orientation to play slide (for auto play, navigation), 1 horizental, 2 vertical, 5 horizental reverse, 6 vertical reverse, default value is 1
            $DragOrientation: 1,                                //[Optional] Orientation to drag slide, 0 no drag, 1 horizental, 2 vertical, 3 either, default value is 1 (Note that the $DragOrientation should be the same as $PlayOrientation when $DisplayPieces is greater than 1, or parking position is not 0)
            $CaptionSliderOptions: {                            //[Optional] Options which specifies how to animate caption
                $Class: $JssorCaptionSlider$,                   //[Required] Class to create instance to animate caption
                $CaptionTransitions: _CaptionTransitions,       //[Required] An array of caption transitions to play caption, see caption transition section at jssor slideshow transition builder
                $PlayInMode: 1,                                 //[Optional] 0 None (no play), 1 Chain (goes after main slide), 3 Chain Flatten (goes after main slide and flatten all caption animations), default value is 1
                $PlayOutMode: 3                                 //[Optional] 0 None (no play), 1 Chain (goes before main slide), 3 Chain Flatten (goes before main slide and flatten all caption animations), default value is 1
            },
            $BulletNavigatorOptions: {                          //[Optional] Options to specify and enable navigator or not
                $Class: $JssorBulletNavigator$,                 //[Required] Class to create navigator instance
                $ChanceToShow: 2,                               //[Required] 0 Never, 1 Mouse Over, 2 Always
                $AutoCenter: 1,                                 //[Optional] Auto center navigator in parent container, 0 None, 1 Horizontal, 2 Vertical, 3 Both, default value is 0
                $Steps: 1,                                      //[Optional] Steps to go for each navigation request, default value is 1
                $Lanes: 1,                                      //[Optional] Specify lanes to arrange items, default value is 1
                $SpacingX: 8,                                   //[Optional] Horizontal space between each item in pixel, default value is 0
                $SpacingY: 8,                                   //[Optional] Vertical space between each item in pixel, default value is 0
                $Orientation: 1                                 //[Optional] The orientation of the navigator, 1 horizontal, 2 vertical, default value is 1
            },
            $ArrowNavigatorOptions: {                           //[Optional] Options to specify and enable arrow navigator or not
                $Class: $JssorArrowNavigator$,                  //[Requried] Class to create arrow navigator instance
                $ChanceToShow: 1,                               //[Required] 0 Never, 1 Mouse Over, 2 Always
                $AutoCenter: 2,                                 //[Optional] Auto center arrows in parent container, 0 No, 1 Horizontal, 2 Vertical, 3 Both, default value is 0
                $Steps: 1                                       //[Optional] Steps to go for each navigation request, default value is 1
            }
        };
        var jssor_slider1 = new $JssorSlider$("slider1_container", options);
        //responsive code begin
        //you can remove responsive code if you don't want the slider scales while window resizes
        function ScaleSlider() {
            var bodyWidth = document.body.clientWidth;
            if (bodyWidth)
                jssor_slider1.$ScaleWidth(Math.min(bodyWidth, 1920));
            else
                window.setTimeout(ScaleSlider, 30);
        }
        ScaleSlider();
        $(window).bind("load", ScaleSlider);
        $(window).bind("resize", ScaleSlider);
        $(window).bind("orientationchange", ScaleSlider);
        //responsive code end
    });
</script>

</body>
</html>

