<?php
session_start();
?>
<!DOCTYPE HTML>
<html>
	<head>
		<title>Casart Chihuahua</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<!--[if lte IE 8]><script src="assets/js/ie/html5shiv.js"></script><![endif]-->
        <script src="../assets/jquery/jquery-1.11.3.min.js"></script>
		<link rel="stylesheet" href="assets/css/main.css" />

        <link rel="stylesheet" href="assets/css/NavActualizada.css">
        <script src="../assets/js/NavbarResponsive.js"></script>
        <link type="text/css" rel="stylesheet" href="../assets/css/Fonts%20navbar/fonts/fonts.css"/>
        <link rel="stylesheet" href="assets/css/QuienesSomos.css" />
	</head>
	<body class="landing">
    <div id="page-wrapper">

        <header id="456" style="z-index: 1000000;">
            <!--NAVBAR-->
            <!--Nav grande (Resolucion>790px)-->
            <nav class="nav1100" style="z-index: 1000000">
                <div>
                    <div id='cssmenu'>
                        <ul>
                            <li><a  href='../index'>Inicio</a></li>
                            <li class='active has-sub'><a href='#'>Nosotros</a>
                                <ul>
                                    <li ><a href='../MisionYVision'>Mision & Vision</a></li>
                                    <li ><a href='/QuienesSomos'>¿Quiénes somos?</a></li>
                                </ul>
                            </li>

                            <li class='active has-sub' ><a href='#'>Tarahumara</a>
                                <ul>
                                    <li ><a href='../CesteriaTarahumara'>Cestería tarahumara</a></li>
                                    <li ><a href='../AlfareriaTarahumara'>Alfarería tarahumara</a></li>
                                    <li ><a href='../TextilesTarahumaras'>Textiles tarahumaras</a></li>
                                    <li ><a href='../ArtesaniasTarahumaraDeCuero'>Artesanías de cuero</a></li>
                                    <li ><a href='../InstrumentosMusicalesTarahumara'>Instrumentos musicales</a></li>
                                    <li ><a href='../ArticulosVarios'>Articulos varios</a></li>
                                </ul>
                            </li>

                            <li class='active has-sub'><a href='#'>Mata Ortiz</a>
                                <ul>
                                    <li ><a href='../OllaEconomica'>Olla mata ortiz económica</a></li>
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

                            <li><a href='#'>Concursos</a></li>
                            <li><a href='#'>Contacto</a></li>

                            <?php
                            if (isset($_SESSION["username"]))
                            {
                                if ($_SESSION["username"] == "SI")
                                {
                                    echo "<li class='active has-sub pull-right' ><a href='#'>Administrador</a>";
                                    echo "<ul>";
                                    echo "<li ><a href='../PanelAdmin'><span class='glyphicon glyphicon-th' style='margin-right: 5px'></span> Panel de control</a></li>";
                                    echo "<li ><a href='../Gestion'><span class='glyphicon glyphicon-th-large' style='margin-right: 5px'></span> Gestion</a></li>";
                                    echo "<li ><a href='../ContactoComentarios'><span class='glyphicon glyphicon-comment' style='margin-right: 5px'></span> Comentarios</a></li>";

                                    if ($_SESSION["RolCuenta"] == "Administrador")
                                    {
                                        echo "<li><a  href='../NuevosUsuarios'><span class='glyphicon glyphicon-user' style='margin-right: 5px'></span>  Nuevo usuario</a></li>";
                                    }

                                    echo "<li ><a href='../PHPCatalogo/DestruirSesion'><span class='glyphicon glyphicon-off' style='margin-right: 5px'></span> Cerrar Sesion</a></li>";
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
            <div class="nav-1100" >
                <div class="menu_bar">
                    <a href="#" class="bt-menu"><span class="icon-align-justify"></span>Casart Chihuahua</a>
                </div>
                <nav >

                    <ul >
                        <li><a href="../index"><span class="glyphicon glyphicon-home"></span>Inicio</a></li>
                        <li class="submenu">
                            <a href="#"><span class="glyphicon glyphicon-user"></span>Nosotros<span class="glyphicon glyphicon-chevron-down pull-right"></span> </a>
                            <ul class="children">
                                <li><a href="../MisionYVision"><span class="icon-ctrl"></span>Mision & Vision</a> </li>
                                <li><a href="/QuienesSomos"><span class="icon-ctrl"></span>¿Quiénes somos?</a> </li>
                            </ul>
                        </li>
                        <li class="submenu">
                            <a href="#"><span class="glyphicon glyphicon-tree-conifer"></span>Tarahumara<span class="glyphicon glyphicon-chevron-down pull-right"></span> </a>
                            <ul class="children">
                                <li><a href="../CesteriaTarahumara"><span class="icon-ctrl"></span>Cesteria Tarahuara</a> </li>
                                <li><a href="../AlfareriaTarahumara"><span class="icon-ctrl"></span>Alfareria Tarahumara</a> </li>
                                <li><a href="../TextilesTarahumaras"><span class="icon-ctrl"></span>Textiles Tarahumara</a> </li>
                                <li><a href="../ArtesaniasTarahumaraDeCuero"><span class="icon-ctrl"></span>Artesanias de Cuero</a> </li>
                                <li><a href="../InstrumentosMusicalesTarahumara"><span class="icon-ctrl"></span>Instrumentos Musicales</a> </li>
                                <li><a href="../ArticulosVarios"><span class="icon-ctrl"></span>Articulos Varios</a> </li>
                            </ul>
                        </li>
                        <li class="submenu">
                            <a href="#"><span class="glyphicon glyphicon-equalizer"></span>Mata Ortiz<span class="glyphicon glyphicon-chevron-down pull-right"></span> </a>
                            <ul class="children">
                                <li><a href="../OllaEconomica"><span class="icon-ctrl"></span>Olla Mata Ortiz economica</a> </li>
                                <li><a href="../OllaMataOrtizComercial"><span class="icon-ctrl"></span>Olla Mata Ortiz comercial</a> </li>
                                <li><a href="../OllaFina"><span class="icon-ctrl"></span>Olla Mata Ortiz Fina</a> </li>
                                <li><a href="../GaleriaMataOrtiz"><span class="icon-ctrl"></span>Galeria ceramica de Mata Ortiz</a> </li>
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

                        <?php
                        if (isset($_SESSION["username"]))
                        {
                            if ($_SESSION["username"] == "SI")
                            {
                                echo "<li class='submenu'>";
                                echo "<a><span class='glyphicon glyphicon-tree-conifer'></span>Administrador<span class='glyphicon glyphicon-chevron-down pull-right'></span> </a>";
                                echo "<ul class='children'>";

                                echo " <li><a href='../PanelAdmin'><span class='icon-ctrl'></span>Panel de control</a> </li>";
                                echo " <li><a href='../Gestion'><span class='icon-ctrl'></span>Gestion</a> </li>";
                                echo " <li><a href='../ContactoComentarios'><span class='icon-ctrl'></span>Comentarios</a> </li>";
                                if ($_SESSION["RolCuenta"] == "Administrador")
                                {
                                    echo "<li><a href='../NuevosUsuarios'><span class='icon-ctrl'></span>Nuevo usuario</a> </li>";

                                }
                                echo " <li><a href='../PHPCatalogo/DestruirSesion'><span class='icon-ctrl'></span>Cerrar sesion</a> </li>";
                                echo "</ul>";
                                echo "</li>";
                            }
                        }
                        ?>
                        
                    </ul>
                </nav>
            </div>
        </header>

			<!-- Banner -->
				<section id="banner">
					<div class="content">
						<header>
							<h2>Casa de las Artesanias <br/> del Estado de Chihuahua</h2>
							<p>Casa de la artesania chihuahuense.</p>
						</header>
						<span class="image"><img src="images/logo.png" alt="" /></span>
					</div>
					<a href="#one" class="goto-next scrolly">Next</a>
				</section>

			<!-- One -->
				<section id="one" class="spotlight style1 bottom">
					<span class="image fit main"><img src="images/tarahumara%20xs.jpg" alt="" /></span>
					<div class="content">
						<div class="container">
							<div class="row">
								<div class="4u 12u$(medium)">
									<header>
										<h2 style="color: #FF9800;text-align: center">¿Quiénes somos?</h2>
										<p>Manifestaciones del arte popular y éste se da de manera generosa en el Estado de Chihuahua. </p>
									</header>
								</div>
								<div class="4u 12u$(medium)">
									<p>La Artesanía del estado tiene tres fuentes: la tarahumara, la conocida como Paquimé y la mestiza. Chihuahua a incrementado la
                                        obtención de premios en concursos nacionales, tanto en la artesanía tarahumara como en la mestiza, durante los últimos cinco años.</p>
								</div>
								<div class="4u$ 12u$(medium)">
									<p>El Gobierno del Estado de Chihuahua, a través del la Secretaria de Desarrollo Comercial y Turístico y la Casa de las Artesanías,
                                        organizan cada año importantes concursos como Concurso Regional del Arte Popular de la Sierra Tarahumara, Concurso de Artesanía
                                        Chihuahuense y Concurso de Cerámica de Paquimé, entre otros. </p>
								</div>
							</div>
						</div>
					</div>

					<a href="#two" class="goto-next scrolly">Next</a>
				</section>

			<!-- Two -->
				<section id="two" class="spotlight style2 right">
					<span class="image fit main"><img src="../images/maps.jpg" alt="" /></span>
					<div class="content">
						<header>
							<h2 style="text-align:center;font-size: 35px;color: #FF9800">Misión</h2>
							<p>Fomentar la elaboración de artesanía regional propiciando el bienestar de quienes la producen, brindando capacitación y asesoría
                                para una producción eficiente, así como en los procesos de comercialización y exhibición.</p>
						</header>

                        <ul class="actions" style="text-align: center">
                            <li><a target="_blank" href="https://www.google.com.mx/maps/place/Casa+de+las+Artesanias+del+Estado+de+Chihuahua/@28.6416097,-106.075608,20z/data=!4m12!1m6!3m5!1s0x86c1cb0015fd9947:0xbfb
                            b4eaae836a9eb!2sCasa+de+las+Artesanias+del+Estado+de+Chihuahua!8m2!3d28.6416809!4d-106.0752955!3m4!1s0x86c1cb0015fd9947:0xbfbb4eaae836a9eb!8m2!3d28.6416809!4d-106
                            .0752955" class="button">Conoce nuestra ubicación</a></li>
                        </ul>
					</div>

					<a href="#three" class="goto-next scrolly">Next</a>
				</section>

			<!-- Three -->
				<section id="three" class="spotlight style3 left">
					<span class="image fit main bottom"><img src="images/casa.jpg" alt="" /></span>
					<div class="content">
						<header>

						</header>
                        <h2 style="color: #FF9800;text-align: center">Visión</h2>
                        <p style="font-size: 19px;line-height: 30px">Conformar una red eficiente de talleres artesanales; centro de acopio y tiendas localizadas en los municipios mas
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
                        </p>

					</div>
					<a href="#four" class="goto-next scrolly">Next</a>
				</section>

			<!-- Four -->
				<section id="four" class="wrapper style1 special fade-up"style="background-color: #1c1d26" >
					<div class="container" >
						<header class="major">
							<h2 style="margin: 0;color: #FF9800">Casa de las Artesanias del Estado de Chihuahua</h2>
							<p>La casa de la artesania chihuahuense desde 1980.</p>
						</header>
						<div class="box alt">
							<div class="row uniform">
								<section class="4u 6u(medium) 12u$(xsmall)">
									<span class="icon alt major fa-area-chart hol" style="width: 10em;height: 10em"><img src="images/directora.jpeg" style="border-radius: 50%;display: block;max-width: 100%;height: auto"></span>
                                    <h4>Veronica Rodriguez</h4>
									<p>Orgullosa directora de Casart Chihuahua desde el año 2012 y ha contribuido al progreso de la casa de las artesanias trayendo
                                        a nuevos talentos de las artesanias.</p>
								</section>

                                <section class="4u 6u(medium) 12u$(xsmall)">
                                    <span class="icon alt major fa-area-chart hol" style="width: 10em;height: 10em"><img src="images/subdirector.jpeg" style="border-radius: 50%;display: block;max-width: 100%;height: auto;border: 0px solid #ffffff"></span>
                                    <h4>Gabriel Ornelas</h4>
                                    <p>Orgulloso subdirector de Casart Chihuahua desde el año 2005, ha contribuido al progreso de la casa de las artesanias trayendo
                                        a nuevos talentos y promoviendo las artesanias del estado.</p>
                                </section>

                                <section class="4u 6u(medium) 12u$(xsmall)">
                                    <span class="icon alt major fa-area-chart hol" style="width: 10em;height: 10em"><img src="images/Tesorero.jpeg" style="border-radius: 50%;display: block;max-width: 100%;height: auto"></span>
                                    <h4>Sergio Paz</h4>
                                    <p>Tesorero de Casart Chihuahua, ha contribuido a la administracion de las finanzas de la casa generando un
                                        crecimiento y promoviendo nuevos concursos con grandes premios para os participantes.</p>
                                </section>
							</div>
						</div>

					</div>
				</section>




        <footer>
            <div class=" margintop" >
                <div class="row" style="background-color: #3E2723;height: auto">

                    <div style="width: 100%">
                        <p  style="color:#212121;background-color: #FAFAFA;padding: 15px;font-size: 17px; margin: 0">© Casa de las Artesanías del Estado de Chihuahua. Todos los derechos reservados.</p>
                    </div>

                    <div class="posytam0" id="ocultarmq3" style="margin-bottom: 10px;    margin-left: 30px;"><img  style="border-radius: 100px" src="../images/MisionVision.png"></div>

                    <div class="posytam0" id="ocultarmq2" style="margin-bottom: 10px"><img  style="border-radius: 30px" src="../images/ChihuahuaVive.jpg"></div>

                    <div class="posytam" id="ocultarmq5" style="margin-left: -10px"><img src="../images/LogoHorizontal.png"></div>

                </div>
            </div>
        </footer>



    </div>
    
    <!--PIE DE PAGINA-->

		<!-- Scripts -->
			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/jquery.scrolly.min.js"></script>
			<script src="assets/js/jquery.dropotron.min.js"></script>
			<script src="assets/js/jquery.scrollex.min.js"></script>
			<script src="assets/js/skel.min.js"></script>
			<script src="assets/js/util.js"></script>
			<!--[if lte IE 8]><script src="assets/js/ie/respond.min.js"></script><![endif]-->
			<script src="assets/js/main.js"></script>

	</body>
</html>