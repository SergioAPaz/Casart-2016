<?php
session_start();
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
    <link rel="stylesheet" href="assets/css/MisionYVision.css">
    <link rel="stylesheet" href="fonts/fonts.css">
    <!--SCRIPT'S-->
    <script src="assets/jquery/jquery-1.11.3.min.js"></script>
    <script src="assets/bootstrap-3.3.5-dist/js/bootstrap.js"></script>
    <script src="assets/js/NavbarResponsive.js"></script>
    <script type="text/javascript" src="assets/js/MisionYVision.js"></script><!--scripts generales-->
    <script  src="assets/js/scrollbar/jquery.nicescroll.min.js"></script><!--scrollbar-->
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
                            if ($_SESSION["RolCuenta"] == "Administrador")
                            {
                                echo "<li><a  href='NuevosUsuarios.php'><span class='glyphicon glyphicon-user' style='margin-right: 5px'></span>  Nuevo usuario</a></li>";
                            }
                            echo "<li ><a href='PanelAdmin.php'><span class='glyphicon glyphicon-th' style='margin-right: 5px'></span> Panel de control</a></li>";
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
                        if ($_SESSION["RolCuenta"] == "Administrador")
                        {
                            echo "<li><a href='NuevosUsuarios.php'><span class='icon-ctrl'></span>Nuevo usuario</a> </li>";

                        }
                        echo " <li><a href='PanelAdmin.php'><span class='icon-ctrl'></span>Panel de control</a> </li>";
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

<br><br>

<div class="container-fluid">
    <div class="row"id="rowpanel" style="margin-right:2000px;background-color: #FFCA28">
      <div id="divid" style="height: 1000px"></div>
            <div class="col-xs-12 col-sm-12 col-md-7"id="col1panel" style="display: none;background-color: #FFCA28;margin-top: 20px">

                <p style="font-size: 28px;text-align: center;color: #FF9800">Mision</p>
                <br>
                <p  class="p5" style="color: #ffffff">Fomentar la elaboración de artesanía regional propiciando el bienestar de quienes la producen, brindando capacitación y asesoría
                    para una producción eficiente, así como en los procesos de comercialización y exhibición.</p>
                <br>
                <p style="font-size: 28px;text-align: center;color: #FF9800">Vision</p>
                <br>
                <p  class="p5" style="color: #ffffff">Conformar una red eficiente de talleres artesanales; centro de acopio y tiendas localizadas en los municipios mas
                    importantes del estado, para apoyar al artresano en su desarrollo integral y sustentable, brindandoles las
                    oportunidades de comercializacion y mejora de sus productos, con el fin de elevar su calidad de vida  y alentar
                    el binestar social de la comunidad donde vive.
                    <br><br>
                    El apoyar directamente a los artesanos del estado, realizando concursos, muestras, capacitacion, promocion y
                    difusion de sus productos es parte integral de nuestro trabajo el cual se centra principalmente en todas estas
                    muestras de arte unicas e invaluables.
                    <br><br>
                    Es por ello que los trabajos dentro de este organismo son intensos, pero sin perder el rumbo de nuestra misión
                    y vision que nos hemos trazado, hasta llegar a  consolidar el nivel y la calidad de los proyectos, en beneficio
                    de la comunidad y en coordinación con todas aquellas instituciones y organizaciones comprometidas firmemente
                    con la artesania y desarrollo sustentable de la diversificada y talentosa rama artesanal.
                    <br><br>
                    La casa de las artesanias esta integrado por las areas de direccion, ventas, comercializacion, coordinacion y el
                    area administrativa.
                    <br><br>
                    Estas areas desarrollan acciones especificas como la de comercializacion, en donde la persona encargada de esta
                    area, acude directamente a los lugares de residencia de los artesanos, ahi se hace compra directa ya sea en la
                    sierra tarahumara o en la comunidad de juan mata ortiz, esto con el fin de que el apoyo sea directo y el beneficio
                    de la comunidad en donde habitan, de esta manera los apoyos en compra y creditos estan seguros de llegar a su
                    destino final.
                    <br><br>
                    Ahi mismo en las comunidades se llevan acabo cursos de capacitacion, con el fin de poder mejorar tanto la calidad
                    como nuevos diseños de sus productos ya que los articulos novedosos atraen la atencion de clientes y turistas.
                    <br><br>
                    El area de ventas es la encargada de colocar la artesania, ya que de acuerdo a su catalogo de clientes podra
                    elaborar redes de distribucion y ubicar los productos a nivel nacional e internacional.
                    <br>
                </p>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-5 fadein2" style="display: none">
                     <img style="margin-top:30px;border-radius: 8%" class="img-responsive img-center hol" alt="Responsive image" src="images/MisionVision.png">
                    <br>
            </div>

        </div>
</div>

<br><br><br>

<span class="ir-arriba icon-arrow-up-thick"></span>

<footer>
<div class="container-fluid">
    <div class="row" style="background-color: #4E342E;height: 200px">
        <p style="background-color: #ffffff;padding: 20px;font-size: 14px">© 2009-2015 Casart Chihuahua Todos los derechos reservados.</p>
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