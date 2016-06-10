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
                            <li><a  href='../index.php'>Inicio</a></li>
                            <li class='active has-sub'><a href='#'>Nosotros</a>
                                <ul>
                                    <li ><a href='../MisionYVision.php'>Mision & Vision</a></li>
                                    <li ><a href='../ProductosVarios2/QuienesSomos.php'>¿Quiénes somos?</a></li>
                                </ul>
                            </li>

                            <li class='active has-sub' ><a href='#'>Tarahumara</a>
                                <ul>
                                    <li ><a href='../CesteriaTarahumara.php'>Cestería tarahumara</a></li>
                                    <li ><a href='../AlfareriaTarahumara.php'>Alfarería tarahumara</a></li>
                                    <li ><a href='../TextilesTarahumaras.php'>Textiles tarahumaras</a></li>
                                    <li ><a href='../ArtesaniasTarahumaraDeCuero.php'>Artesanías de cuero</a></li>
                                    <li ><a href='../InstrumentosMusicalesTarahumara.php'>Instrumentos musicales</a></li>
                                    <li ><a href='../ArticulosVarios.php'>Articulos varios</a></li>
                                </ul>
                            </li>

                            <li class='active has-sub'><a href='#'>Mata Ortiz</a>
                                <ul>
                                    <li ><a href='../OllaEconomica.php'>Olla mata ortiz económica</a></li>
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

                            <?php
                            if (isset($_SESSION["username"]))
                            {
                                if ($_SESSION["username"] == "SI")
                                {
                                    echo "<li class='active has-sub pull-right' ><a href='#'>Administrador</a>";
                                    echo "<ul>";
                                    echo "<li ><a href='../PanelAdmin.php'><span class='glyphicon glyphicon-th' style='margin-right: 5px'></span> Panel de control</a></li>";
                                    echo "<li ><a href='../Gestion.php'><span class='glyphicon glyphicon-th-large' style='margin-right: 5px'></span> Gestion</a></li>";
                                    echo "<li ><a href='../ContactoComentarios.php'><span class='glyphicon glyphicon-comment' style='margin-right: 5px'></span> Comentarios</a></li>";

                                    if ($_SESSION["RolCuenta"] == "Administrador")
                                    {
                                        echo "<li><a  href='../NuevosUsuarios.php'><span class='glyphicon glyphicon-user' style='margin-right: 5px'></span>  Nuevo usuario</a></li>";
                                    }

                                    echo "<li ><a href='../PHPCatalogo/DestruirSesion.php'><span class='glyphicon glyphicon-off' style='margin-right: 5px'></span> Cerrar Sesion</a></li>";
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
                        <li><a href="../index.php"><span class="glyphicon glyphicon-home"></span>Inicio</a></li>
                        <li class="submenu">
                            <a href="#"><span class="glyphicon glyphicon-user"></span>Nosotros<span class="glyphicon glyphicon-chevron-down pull-right"></span> </a>
                            <ul class="children">
                                <li><a href="../MisionYVision.php"><span class="icon-ctrl"></span>Mision & Vision</a> </li>
                                <li><a href="../ProductosVarios2/QuienesSomos.php"><span class="icon-ctrl"></span>¿Quiénes somos?</a> </li>
                            </ul>
                        </li>
                        <li class="submenu">
                            <a href="#"><span class="glyphicon glyphicon-tree-conifer"></span>Tarahumara<span class="glyphicon glyphicon-chevron-down pull-right"></span> </a>
                            <ul class="children">
                                <li><a href="../CesteriaTarahumara.php"><span class="icon-ctrl"></span>Cesteria Tarahuara</a> </li>
                                <li><a href="../AlfareriaTarahumara.php"><span class="icon-ctrl"></span>Alfareria Tarahumara</a> </li>
                                <li><a href="../TextilesTarahumaras.php"><span class="icon-ctrl"></span>Textiles Tarahumara</a> </li>
                                <li><a href="../ArtesaniasTarahumaraDeCuero.php"><span class="icon-ctrl"></span>Artesanias de Cuero</a> </li>
                                <li><a href="../InstrumentosMusicalesTarahumara.php"><span class="icon-ctrl"></span>Instrumentos Musicales</a> </li>
                                <li><a href="../ArticulosVarios.php"><span class="icon-ctrl"></span>Articulos Varios</a> </li>
                            </ul>
                        </li>
                        <li class="submenu">
                            <a href="#"><span class="glyphicon glyphicon-equalizer"></span>Mata Ortiz<span class="glyphicon glyphicon-chevron-down pull-right"></span> </a>
                            <ul class="children">
                                <li><a href="../OllaEconomica.php"><span class="icon-ctrl"></span>Olla Mata Ortiz economica</a> </li>
                                <li><a href="../OllaMataOrtizComercial.php"><span class="icon-ctrl"></span>Olla Mata Ortiz comercial</a> </li>
                                <li><a href="../OllaFina.php"><span class="icon-ctrl"></span>Olla Mata Ortiz Fina</a> </li>
                                <li><a href="../GaleriaMataOrtiz.php"><span class="icon-ctrl"></span>Galeria ceramica de Mata Ortiz</a> </li>
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

                                echo " <li><a href='../PanelAdmin.php'><span class='icon-ctrl'></span>Panel de control</a> </li>";
                                echo " <li><a href='../Gestion.php'><span class='icon-ctrl'></span>Gestion</a> </li>";
                                echo " <li><a href='../ContactoComentarios.php'><span class='icon-ctrl'></span>Comentarios</a> </li>";
                                if ($_SESSION["RolCuenta"] == "Administrador")
                                {
                                    echo "<li><a href='../NuevosUsuarios.php'><span class='icon-ctrl'></span>Nuevo usuario</a> </li>";

                                }
                                echo " <li><a href='../PHPCatalogo/DestruirSesion.php'><span class='icon-ctrl'></span>Cerrar sesion</a> </li>";
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
							<p>Casa de la artesania chihuahuense<br />
							100% Mexicana</p>
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
							<h2 style="text-align:center;font-size: 35px;color: #FF9800">CASART</h2>
							<p>Manifestaciones del arte popular y éste se da de manera generosa en el Estado de Chihuahua.</p>
						</header>
						<p>La Artesanía del estado tiene tres fuentes: la tarahumara, la conocida como Paquimé y la mestiza. Chihuahua a incrementado la
                            obtención de premios en concursos nacionales, tanto en la artesanía tarahumara como en la mestiza, durante los últimos cinco años.</p>
                        <ul class="actions">
                            <li><a target="_blank" href="https://www.google.com.mx/maps/@28.6415218,-106.0752234,3a,75y,341.18h,84.68t/data=!3m7!1e1!3m5!1s9jd7AC4HqVjwPgJ4piE7hA!2e0!6s%2F%2Fgeo3.ggpht.com%2Fcbk%3Fpanoid%3D9jd7AC4HqVjwPgJ4piE7hA%26output%3Dthumbnail%26cb_client%3Dmaps_sv.tactile.gps%26thumb%3D2%26w%3D203%26h%3D100%26yaw%3D26.638226%26pitch%3D0!7i13312!8i6656" class="button">Conoce nuestra ubicacion</a></li>
                        </ul>
					</div>

					<a href="#three" class="goto-next scrolly">Next</a>
				</section>

			<!-- Three -->
				<section id="three" class="spotlight style3 left">
					<span class="image fit main bottom"><img src="images/casa.jpg" alt="" /></span>
					<div class="content">
						<header>
							<h2 style="color: #FF9800">Nuestros Productos</h2>
							<p>Artesanía Tarahumara, menonita, y mestiza, cerámica de la región de Paquimé y muebles rústicos, dulces artesanales, carne seca, sotol y pinole.</p>
						</header>
						<p>Con una rica variedad de artesanías en la región que van desde cestería, alfarería, textiles, madera, cuero y mucho más, este museo nos muestra en sus cuatro
                            salas permanentes elementos de la cultura prehispánica relacionados con etnografía, arte popular e historia.</p>

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

            <span class="ir-arriba icon-arrow-up-thick" style="position: absolute"></span>

                    <div class="crow" style="background-color: #3E2723;height: 200px;width: 100%">
                        <p  style="color:#212121;background-color: #FAFAFA;padding: 20px;font-size: 14px;margin: 0">© Casa de las Artesanías del Estado de Chihuahua. Todos los derechos reservados.
                           </p>
                    </div>

		</div>

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