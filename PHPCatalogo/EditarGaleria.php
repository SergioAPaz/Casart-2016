<?php
include ("BloqueDeSeguridadCatalogo.php");
include('../conexion.php');

$id=$_GET['id'];

$consulta=<<<SQL
SELECT Titulo,Descripcion FROM catalogo WHERE id = '$id'
LIMIT 1
SQL;

$filas=mysqli_query($conexiondb,$consulta);
$columnas= mysqli_fetch_assoc($filas);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Casart Chihuahua</title>
    <link rel="shortcut icon" href="../images/logopagina.png">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!--CSS'S-->
    <link rel="stylesheet" href="../assets/bootstrap-3.3.5-dist/css/bootstrap.css">
    <link rel="stylesheet" href="../assets/css/PanelAdmin.css">

    <link rel="stylesheet" href="../assets/css/StylesNavbar.css">
    <link type="text/css" rel="stylesheet" href="../assets/css/Fonts%20navbar/fonts/fonts.css"/>

    <link rel="stylesheet" href="../fonts/fonts.css">
    <link href="../fonts/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <!--SCRIPT'S-->
    <script src="../assets/jquery/jquery-1.11.3.min.js"></script>
    <script src="../assets/bootstrap-3.3.5-dist/js/bootstrap.js"></script>
    <script src="../assets/js/NavbarResponsive.js"></script>
    <script src="EditarGaleria.js"></script>

    <script  src="../assets/js/scrollbar/jquery.nicescroll.min.js"></script><!--scrollbar-->
</head>

<body style="background-color: #4E342E">

<div class="container" style="background-color: transparent;margin-top: 0px">
    <div class="panel panel-default"style="margin-top: 15px">
        <div class="panel-body" >
           <p class="alert" style="font-size: 30px;background-color: #FFCA28;color: #ffffff">Modificar Galeria</p>
            <form role = "form" method="post" action="EditarGaleriaPHP.php" >
                <div class = "form-group">
                    <label class="text-muted" for = "name">Titulo del producto:</label>
                    <input type="text" name="txttitulo" id=tit class="form-control" placeholder="Titulo..." maxlength="200"  pattern="^\s*[a-zA-Z0-9ñÑ-_,.,\s]+\s*" required value="<?php echo $columnas['Titulo']; ?>"/>
                    <br/>
                    <label class="text-muted" for = "name">Descripcion del producto:</label>
                    <textarea rows="3" id="desc" class = "form-control" name="txtdesc" placeholder = "Descripcion..." maxlength="500"  pattern="^\s*[a-zA-Z0-9ñÑ-_,.,\s]+\s*" required><?php echo $columnas['Descripcion']; ?></textarea>
                    <input type="hidden" name="idgaleria" value="<?php echo $id; ?>"/>
                </div>
                <button type = "submit" class = "btn btn-primary">Modificar</button>
                <button class = "btn btn-primary" onclick="formReset()">Limpiar</button>
            </form>
        </div>
    </div>
</div>