<?php
/*SESSION START PARA QUE FUNCIONE LA OPCION DE ADMINISTRADOR EN NAVBAR*/
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
    <link rel="stylesheet" href="assets/css/AvisoDePrivacidad.css">

    <link type="text/css" rel="stylesheet" href="assets/css/Fonts%20navbar/fonts/fonts.css"/>
    <link rel="stylesheet" href="fonts/fonts.css">
    <link href="fonts/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <!--SCRIPT'S-->
    <script src="assets/jquery/jquery-1.11.3.min.js"></script>
    <script src="assets/bootstrap-3.3.5-dist/js/bootstrap.js"></script>
    <script src="assets/js/NavbarResponsive.js"></script>
    <script type="text/javascript" src="assets/js/AvisoDePrivacidad.js"></script><!--scripts generales-->
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
                            <li ><a href='Info/QuienesSomos'>Quiénes somos</a></li>
                        </ul>
                    </li>
                    <li class='active has-sub'><a href='#'>Tarahumara</a>
                        <ul>
                            <li ><a href='CesteriaTarahumara'>Cestería tarahumara</a></li>
                            <li ><a href='AlfareriaTarahumara'>Alfarería tarahumara</a></li>
                            <li ><a href='TextilesTarahumaras'>Textiles tarahumaras</a></li>
                            <li ><a href='ArtesaniasTarahumaraDeCuero'>Artesanías  de cuero</a></li>
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
                            <li ><a href='#'>Arcones</a></li>
                            <li ><a href='#'>Artesania regional</a></li>
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
                        <li><a href="#"><span class="icon-ctrl"></span>Artesania Regional</a> </li>
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









<h1>Aviso de privacidad</h1>

<p class="estilo123">Los datos personales recabados por la Casa de las Artesanías del Estado de Chihuahua mediante formulario electrónico, de forma personalizada u otra, quedan protegidos conforme al
    artículo 15 de la Ley de Protección de Datos Personales del estado de Chihuahua y numeral quinto de los Lineamientos para la Ley citada, en las categorías de identificativos y electrónicos,
    serán protegidos, incorporados y tratados en el “sistema de la Casa de las Artesanías del Estado de Chihuahua relativo a la sustanciación de los expedientes de Recursos humanos, proveedores
    de artesanía, facturación y concursos de este sujeto obligado” con fundamento en los artículos 50 fracción I inciso f), 77 fracciones I y II, de la Ley de Transparencia y Acceso a la Información Pública
    del estado de Chihuahua, 56 y 57 de la Ley de Protección de Datos Personales del estado de Chihuahua, 13 fracciones I, II, III, IV, V y X del Reglamento Interior del Instituto Chihuahuense para la T
    ransparencia y Acceso a la Información Pública, así como de los numerales TERCERO, SEXTO y SÉPTIMO de los Lineamientos Relativos al Recurso de Revisión que previene el CAPÍTULO V, del
    TITULO CUARTO, de la Ley de Transparencia y Acceso a la Información Pública del estado de Chihuahua. Dicho sistema tiene la finalidad de obtener y ordenar los datos personales de
    las personas que laboran en este organismo, los que comercializan sus artesanías, los que compran la artesanía y los que participan en los concursos del estado, en función de la relación
    que guardan con la promoción de recursos de revisión conforme a las Leyes citadas, su trámite, resolución y notificaciones derivadas, datos que podrán ser transmitidos a los tribunales
    federales que en su caso conozcan en amparo la resolución que se dicte y a otras autoridades que con motivo del ejercicio de sus atribuciones se encuentren facultadas para conocer del
    expediente que se integre con motivo del Recurso de Revisión, además de las diversas transmisiones a usuarios y destinatarios previstas en la Ley de Protección de Datos Personales del
    estado de Chihuahua. Algunos de los datos son obligatorios y de no proporcionarlos no podrá iniciarse la sustanciación del recurso de revisión, los datos que en su llenado proporcione,
    serán objeto de medidas de protección de Nivel Básico, atendiendo a su tipo y categoría, conforme lo dispone el Capítulo IV de los Lineamientos para la Ley de Protección de Datos del estado
    de Chihuahua. Así mismo, se le informa que sus datos no podrán ser difundidos sin su consentimiento expreso, salvo las excepciones previstas en la Ley. El responsable del sistema de
    datos personales es el C. Gabriel Arturo Ornelas Marín, Coordinador de eventos de la Casa de las Artesanías del Estado de Chihuahua. Usted podrá ejercer sus derechos de acceso, rectificación,
    cancelación y oposición, mediante la interposición de una solicitud de protección de datos personales en la modalidad correspondiente a cada uno de los derechos antes citados, así como
    la solicitud de revocación del consentimiento para aquellos casos que impliquen cesión de datos personales a terceros a que se refiere el artículo 31 de la Ley de Protección de Datos Personales
    del estado de Chihuahua, en el domicilio ubicado en calle Niños Héroes # 1101, colonia centro, código postal 31000, en la ciudad de Chihuahua, Chih. Así mismo se le comunica que para el
    caso de que este aviso de privacidad sufra alguna modificación, se hará de su conocimiento a través de la página Web de este sujeto obligado en la dirección electrónica www.casartchihuahua.mx.
    <br><br>
    El Interesado podrá dirigirse al Instituto Chihuahuense para la Transparencia y Acceso a la Información Pública, donde recibirá asesoría sobre los derechos que ampara la Ley de Protección de
    Datos Personales del estado de Chihuahua, comunicándose al teléfono: (01) (614) 201-3300 y (01) (614) 201-3301 o en la dirección electrónica www.ichitaip.org.mx o bien para interponer el
    recurso de revisión que prevé el artículo 56 de la Ley citada, si se considera agraviado por la resolución recaída a sus solicitudes de protección de datos personales o por la omisión de
    respuesta a las mismas Manifestación de consentimiento. Al interponer el presente recurso de revisión y una vez que he conocido el Aviso de Privacidad otorgo mi consentimiento para que
    se recaben los datos personales necesarios para que dé inicio la interposición y trámite del recurso de revisión, por así convenir a mi interés jurídico, así mismo entiendo y otorgo de manera
    expresa mi consentimiento, para la transmisión los datos que proporcione para los fines enunciados en el Aviso de Privacidad.</p>



<h1>Transparencia</h1>

<a href="Info/DICTAMEN-DE-VISITA-DE-INSPECCION.pdf"><p class="estilo123">DICTAMEN DE VISITA DE INSPECCION</p></a>




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