<?php

include("PHPCatalogo/BloqueDeSeguridad.php");
include("PHPCatalogo/conexion.php");


/*$consulta=<<<SQL
SELECT id,Nombre,Email FROM emailadmins;
SQL;

$filas =mysqli_query($conexiondb,$consulta);*/


$miembro1=<<<SQL
    SELECT id,Cargo,Descripcion,UrlImagen FROM miembros LIMIT 0,1;
SQL;
$miembro2=<<<SQL
    SELECT id,Cargo,Descripcion,UrlImagen FROM miembros LIMIT 1,1;
SQL;
$miembro3=<<<SQL
    SELECT id,Cargo,Descripcion,UrlImagen FROM miembros LIMIT 2,1;
SQL;

$filas1=mysqli_query($conexiondb,$miembro1);
$columnas1=mysqli_fetch_assoc($filas1);
$filas2=mysqli_query($conexiondb,$miembro2);
$columnas2=mysqli_fetch_assoc($filas2);
$filas3=mysqli_query($conexiondb,$miembro3);
$columnas3=mysqli_fetch_assoc($filas3);

?>


<!DOCTYPE html >
<html lang="en" xmlns="http://www.w3.org/1999/html">
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
    <script type="text/javascript" src="assets/js/Gestion.js"></script><!--scripts generales-->
    <!--CSS'S-->
    <link href="assets/css/Gestion.css" rel="stylesheet" type="text/css">

    <script src="assets/js/scrollbar/jquery.nicescroll.min.js"></script>

</head>
<body style="background-color: #4E342E">
<header>
    <!--NAVBAR-->
    <!--Nav grande (Resolucion>790px)-->
    <nav class="nav1100">
        <div>
            <div id='cssmenu'>
                <ul>
                    <li><a href='index'>Inicio</a></li>
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
                    if (isset($_SESSION["username"])) {
                        if ($_SESSION["username"] == "SI") {
                            echo "<li class='active has-sub pull-right' ><a href='#'>Administrador</a>";
                            echo "<ul>";
                            echo "<li><a style='background-color: #FF9800'><span class='glyphicon glyphicon-user' style='margin-right: 5px;font-size: 20px;margin-top: -2%'></span> <span style='font-size: 20px;margin-left: 4%;margin-top: -2%;position: absolute'>$_SESSION[usuario]</span></li>";
                            echo "<li ><a href='PanelAdmin'><span class='glyphicon glyphicon-th' style='margin-right: 5px'></span> Panel de control</a></li>";

                            echo "<li ><a href='ContactoComentarios'><span class='glyphicon glyphicon-comment' style='margin-right: 5px'></span> Comentarios</a></li>";

                            if ($_SESSION["RolCuenta"] == "Administrador") {
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
                    <a href="#"><span class="glyphicon glyphicon-user"></span>Nosotros<span
                            class="glyphicon glyphicon-chevron-down pull-right"></span> </a>
                    <ul class="children">
                        <li><a href="Info/QuienesSomos"><span class="icon-ctrl"></span>Quiénes somos</a></li>
                        <li><a href="AvisoDePrivacidad"><span class="icon-ctrl"></span>Aviso de privacidad</a></li>
                    </ul>
                </li>
                <li class="submenu">
                    <a href="#"><span class="glyphicon glyphicon-tree-conifer"></span>Tarahumara<span
                            class="glyphicon glyphicon-chevron-down pull-right"></span> </a>
                    <ul class="children">
                        <li><a href="CesteriaTarahumara"><span class="icon-ctrl"></span>Cestería tarahumara</a></li>
                        <li><a href="AlfareriaTarahumara"><span class="icon-ctrl"></span>Alfarería tarahumara</a></li>
                        <li><a href="TextilesTarahumaras"><span class="icon-ctrl"></span>Textiles Tarahumara</a></li>
                        <li><a href="ArtesaniasTarahumaraDeCuero"><span class="icon-ctrl"></span>Artesanías de cuero</a>
                        </li>
                        <li><a href="InstrumentosMusicalesTarahumara"><span class="icon-ctrl"></span>Instrumentos
                                musicales</a></li>
                        <li><a href="ArticulosVarios"><span class="icon-ctrl"></span>Artículos varios</a></li>
                    </ul>
                </li>
                <li class="submenu">
                    <a href="#"><span class="glyphicon glyphicon-equalizer"></span>Mata Ortiz<span
                            class="glyphicon glyphicon-chevron-down pull-right"></span> </a>
                    <ul class="children">
                        <li><a href="OllaEconomica"><span class="icon-ctrl"></span>Olla economica Mata Ortiz</a></li>
                        <li><a href="OllaMataOrtizComercial"><span class="icon-ctrl"></span>Olla comercial Mata
                                Ortiz</a></li>
                        <li><a href="OllaMataOrtizFina"><span class="icon-ctrl"></span>Olla fina Mata Ortiz</a></li>
                        <li><a href="GaleriaDeCeramicaDeMataOrtiz"><span class="icon-ctrl"></span>Galería cerámica Mata
                                Ortiz</a></li>
                    </ul>
                <li class="submenu">
                    <a href="#"><span class="glyphicon glyphicon-shopping-cart"></span>Productos<span
                            class="glyphicon glyphicon-chevron-down pull-right"></span> </a>
                    <ul class="children">
                        <li><a href="ProductosChihuahuenses"><span class="icon-ctrl"></span>Productos Chihuahuenses</a>
                        </li>
                        <li><a href="Arcones"><span class="icon-ctrl"></span>Arcones</a></li>
                        <li><a href="ArtesaniaRegional"><span class="icon-ctrl"></span>Artesanía regional</a></li>
                    </ul>


                    <?php
                    if (isset($_SESSION["username"])) {
                        if ($_SESSION["username"] == "SI") {
                            echo "<li class='submenu'>";
                            echo "<a><span class='glyphicon glyphicon-tree-conifer'></span>Administrador<span class='glyphicon glyphicon-chevron-down pull-right'></span> </a>";
                            echo "<ul class='children'>";
                            echo " <li><a style='height: 63px;'><span class='glyphicon glyphicon-user' style='font-size: 20px'></span><p style='font-size: 20px; '>$_SESSION[usuario]</p></a> </li>";
                            echo " <li><a href='PanelAdmin'><span class='icon-ctrl'></span>Panel de control</a> </li>";

                            echo " <li><a href='ContactoComentarios'><span class='icon-ctrl'></span>Comentarios</a> </li>";
                            if ($_SESSION["RolCuenta"] == "Administrador") {
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

<div class="container" style="background-color: #EEEEEE;/*height: 100%*/">

    <br/>

    <div class="panel panel-default">

        <div class="panel-body">
            <p class="alert fondo456" style="font-size: 20px;background-color: #FFCA28;color: #FAFAFA"><span class="newarticle">Correos para notificaciones: </span><span style="color: transparent">.</span>
                <button type="button" class="btn btn-primary pull-right" data-toggle="modal" data-target="#exampleModal"
                        data-whatever="@getbootstrap">Mostrar correos
                </button>
            <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header" style="background-color: #FFCA28">
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                                    aria-hidden="true">&times;</span></button>
                            <h4 class="modal-title" id="exampleModalLabel" style="color: #FAFAFA">Correos para
                                notificaciones</h4>
                        </div>
                        <div class="modal-body">
                            <form method="post" action="PHPCatalogo/Gestion/Notifications">
                                <div class="form-group">
                                    <label for="recipient-name" class="control-label">Nombre:</label>
                                    <input type="text" name="Name" class="form-control" id="recipient-name"
                                           maxlength="30" pattern="^\s*[a-zA-Z0-9ñÑ_.\s]+\s*" required>
                                </div>
                                <div class="form-group">
                                    <label for="recipient-name" class="control-label">Correo:</label>
                                    <input type="text" name="Email" class="form-control" id="recipient-name"
                                           maxlength="40" pattern="^\s*[a-zA-Z0-9ñÑ@_.\s]+\s*" required>
                                </div>
                                <div class="table-responsive">
                                    <table class="table table-striped">
                                        <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>Nombre</th>
                                            <th>Correo</th>
                                            <th>Accion</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        <?php
                                        $count = 0;
                                        while ($columna = mysqli_fetch_assoc($filas)) {
                                            $count = $count + 1;
                                            echo "<tr>";
                                            echo "<td>$count</td>";
                                            echo "<td>$columna[Nombre]</td>";
                                            echo "<td>$columna[Email]</td>";
                                            echo "<td>  <a href='PHPCatalogo/Gestion/DeleteEmail?id=$columna[id]'>Eliminar</a></td>";
                                            echo "</tr>";
                                        }
                                        ?>
                                        </tbody>
                                    </table>
                                </div>

                                <div style="color: #9E9E9E">Nota: Las notificaciones por correo incluyen cualquier alta
                                    de un producto dentro de la galería, El alta de nuevos correos para notificaciones y
                                    comentarios de usuarios dentro de la página principal.
                                </div>
                        </div>

                        <div class="modal-footer">
                            <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
                            <button type="submit" class="btn btn-primary">Agregar correo</button>
                        </div>

                        </form>
                    </div>
                </div>
            </div>
            </p>
        </div>
    </div>

    <!--PANEL DE GESTION DE MIEMBROS DE CASART-->
    <!--MIEMBRO1-->
    <div class="panel panel-default" >
        <p class="alert fondo456" style="font-size: 20px;background-color: #FFCA28;color: #FAFAFA"><span class="newarticle">Gestion de miembros de Casart Chihuahua </span><span style="color: transparent">.</span></p>

        <div class="panel-body" >
                <div class="row" >

                    <div class="col-sm-6 col-md-4 " >
                        <div class="thumbnail shadowx" >
                            <div>
                                <button data-toggle="modal" data-target="#myModal1" type="button" class="btn btn-default btn-group-justified" style="margin-bottom: 10px;background-color: white"><span class= "glyphicon glyphicon-refresh" aria-hidden="true"></span> Cambiar imagen</button>
                                <img class="img-responsive img-circle" style="max-width:250px;margin-right: auto;margin-left: auto;" src="<?php echo 'images/Miembros/'.$columnas1['UrlImagen']; ?>" alt="Imagen" data-toggle="modal" data-target="#myModal">
                                <!-- Modal -->
                                <div class="modal fade" id="myModal1" role="dialog" aria-labelledby="myModalLabel">
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header" style="background-color: rgb(255, 202, 40);color: #FAFAFA">
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                                <h4 class="modal-title" id="myModalLabel">Modificar imagen</h4>
                                            </div>
                                            <form role="form" method="POST"  enctype="multipart/form-data" action="PHPCatalogo/CambiarImagenMiembros.php">
                                                <div class="modal-body">
                                                    <label class="text-muted" for = "name">Selecciona una imagen:</label>
                                                    <input type="file" class="form-control" name="archivo" required/>
                                                    <input type='' name='idmiembro' value='<?php echo $columnas1['id']; ?>'>
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
                                                    <button type="submit" class="btn btn-primary">Guardar imagen</button>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <form method="post" action="PHPCatalogo/DatosMiembros.php">
                                <div class="caption">
                                    <input type="text" style="margin-bottom: 10px" class="form-control" name="Cargo" value="<?php echo $columnas1['Cargo'];  ?>" placeholder="Cargo...">
                                    <textarea class="form-control" rows="3" name="Desc"  placeholder="Descripcion..."><?php echo $columnas1['Descripcion'];  ?></textarea>
                                    <input type="" name="idmiembro" value="<?php echo $columnas1['id']; ?>"/>
                                </div>
                                <button type="submit" class="btn btn-info center-block" style="margin-bottom: 4px" id="m1" name="m1">Guardar</button>
                            </form>
                        </div>
                    </div>

                    <!--MIEMBRO2-->
                    <div class="col-sm-6 col-md-4 " >
                        <div class="thumbnail shadowx" >
                            <div>
                                <button data-toggle="modal" data-target="#myModal2" type="button" class="btn btn-default btn-group-justified" style="margin-bottom: 10px;background-color: white"><span class= "glyphicon glyphicon-refresh" aria-hidden="true"></span> Cambiar imagen</button>
                                <img class="img-responsive img-circle" style="max-width:250px;margin-right: auto;margin-left: auto;" src="<?php echo 'images/Miembros/'.$columnas2['UrlImagen']; ?>" alt="Imagen" data-toggle="modal" data-target="#myModal">
                                <!-- Modal -->
                                <div class="modal fade" id="myModal2" role="dialog" aria-labelledby="myModalLabel">
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header" style="background-color: rgb(255, 202, 40);color: #FAFAFA">
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                                <h4 class="modal-title" id="myModalLabel">Modificar imagen</h4>
                                            </div>
                                            <form role="form" method="POST"  enctype="multipart/form-data" action="PHPCatalogo/CambiarImagenMiembros.php">
                                                <div class="modal-body">
                                                    <label class="text-muted" for = "name">Selecciona una imagen:</label>
                                                    <input type="file" class="form-control" name="archivo" required/>
                                                    <input type='hidden' name='idmiembro' value='<?php echo $columnas2['id']; ?>'>
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
                                                    <button type="submit" class="btn btn-primary">Guardar imagen</button>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <form method="post" action="PHPCatalogo/DatosMiembros.php">
                                <div class="caption">
                                    <input type="text" style="margin-bottom: 10px" class="form-control" name="Cargo" value="<?php echo $columnas2['Cargo']; ?>" placeholder="Cargo...">
                                    <textarea class="form-control" rows="3" name="Desc"  placeholder="Descripcion..."><?php echo $columnas2['Descripcion']; ?></textarea>
                                    <input type="" name="idmiembro" value="<?php echo $columnas2['id']; ?>"/>
                                </div>
                                <button type="submit" class="btn btn-info center-block"style="margin-bottom: 4px" id="m2" name="m2">Guardar</button>
                            </form>
                        </div>
                    </div>

                    <!--MIEMBRO3-->
                    <div class="col-sm-6 col-md-4 " >
                        <div class="thumbnail shadowx" >
                            <div>
                                <button data-toggle="modal" data-target="#myModal3" type="button" class="btn btn-default btn-group-justified" style="margin-bottom: 10px;background-color: white"><span class= "glyphicon glyphicon-refresh" aria-hidden="true"></span> Cambiar imagen</button>
                                <img class="img-responsive img-circle" style="max-width:250px;margin-right: auto;margin-left: auto;" src="<?php echo 'images/Miembros/'.$columnas3['UrlImagen']; ?>" alt="Imagen" data-toggle="modal" data-target="#myModal">
                                <!-- Modal -->
                                <div class="modal fade" id="myModal3" role="dialog" aria-labelledby="myModalLabel">
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header" style="background-color: rgb(255, 202, 40);color: #FAFAFA">
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                                <h4 class="modal-title" id="myModalLabel">Modificar imagen</h4>
                                            </div>
                                            <form role="form" method="POST"  enctype="multipart/form-data" action="PHPCatalogo/CambiarImagenMiembros.php">
                                                <div class="modal-body">
                                                    <label class="text-muted" for = "name">Selecciona una imagen:</label>
                                                    <input type="file" class="form-control" name="archivo" required/>
                                                    <input type='' name='idmiembro' value='<?php echo $columnas3['id']; ?>'>
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
                                                    <button type="submit" class="btn btn-primary">Guardar imagen</button>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <form method="post" action="PHPCatalogo/DatosMiembros.php">
                                <div class="caption">
                                    <input type="text" style="margin-bottom: 10px" class="form-control" name="Cargo" value="<?php echo $columnas3['Cargo']; ?>" placeholder="Cargo...">
                                    <textarea class="form-control" rows="3" name="Desc"  placeholder="Descripcion..."><?php echo $columnas3['Descripcion']; ?></textarea>
                                    <input type="" name="idmiembro" value="<?php echo $columnas3['id']; ?>"/>
                                </div>
                                <button type="submit" class="btn btn-info center-block" style="margin-bottom: 4px" id="m3" name="m3">Guardar</button>
                            </form>
                        </div>
                    </div>

                </div>
        </div>

        <div class="modal-footer">
           <p style="color: #9E9E9E">Panel de gestion de miembros activos de Casart Chihuahua.</p>
        </div>

    </div>






    <!--TABLA DE EXISTENCIAS-->
    <div class="panel panel-default">
        <div class="panel-body">
            <p class="alert fondo456" style="font-size: 20px;background-color: #FFCA28;color: #ffffff"><span>Productos en exhibición</span></p>
        </div>
    </div>

</div>

<br><br><br>

<span class="ir-arriba icon-arrow-up-thick"></span>

<!--PIE DE PAGINA-->
<footer>
    <div class="container-fluid margintop">
        <div class="row" style="background-color: #3E2723;height: auto">
            <div>
                <p style="color:#212121;background-color: #FAFAFA;padding: 20px;font-size: 14px;margin: 0">© Casa de lasArtesanías del Estado de Chihuahua. Todos los derechos reservados. </p>
            </div>
            <div class="posytam0" id="ocultarmq3" style="margin-bottom: 15px;"><img style="border-radius: 100px" src="images/MisionVision.png"></div>
            <div class="posytam0" id="ocultarmq2" style="margin-bottom: 15px"><img style="border-radius: 30px" src="images/ChihuahuaVive.jpg"></div>
            <div class="posytam" id="ocultarmq5" style="margin-bottom: 15px"><img src="images/LogoHorizontal.png"></div>
        </div>
    </div>
</footer>











<script>
    $(document).ready(
        function () {
            $("html").niceScroll();
        }
    );
</script><!--"ScrollBar"-->
<script>
    var nice = false;
    $(document).ready(
        function () {
            nice = $("html").niceScroll();
        }
    );
</script><!--"ScrollBar"-->
<script>
    $(document).ready(
        function () {
            $("#thisdiv").niceScroll({cursorcolor: "#00F"});
        }
    );
</script><!--"ScrollBar"-->
<script>
    $(document).ready(
        function () {
            $("#viewportdiv").niceScroll("#wrapperdiv", {cursorcolor: "#00F"});
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