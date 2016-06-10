<?php

include("PHPCatalogo/BloqueDeSeguridadCatalogo.php");

$id=$_GET['id'];
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
    <link type="text/css" rel="stylesheet" href="assets/css/Fonts navbar/fonts/fonts.css"/>
    <link rel="stylesheet" href="fonts/fonts.css">
    <link href="fonts/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <!--SCRIPT'S-->
    <script src="assets/jquery/jquery-1.11.3.min.js"></script>
    <script src="assets/bootstrap-3.3.5-dist/js/bootstrap.js"></script>
    <script src="assets/js/NavbarResponsive.js"></script>
    <script  src="assets/js/scrollbar/jquery.nicescroll.min.js"></script><!--scrollbar-->
</head>

<body style="background-color: #4E342E">

    <div class="container">
        <div class="panel panel-default"style="margin-top: 15px">
            <div class="panel-body" >
                <p class="alert" style="font-size: 30px;background-color: #FFCA28;color: #ffffff">Modificar Imagen</p>
                <form role="form" method="POST"  enctype="multipart/form-data" action="PHPCatalogo/ImagenUpload.php">
                    <div class = "form-group">
                       <input type='hidden' name='idgaleria' value='<?php echo $id; ?>'>

                        <label class="text-muted" for = "name">Imagen del producto:</label>
                        <input type="file" class="form-control" name="archivo" required/>
                        <br/>
                        <button type = "submit" class = "btn btn-primary">Modificar</button>
                        <button class = "btn btn-primary" type="reset">Limpiar</button>
                        </div>
                </form>
            </div>
        </div>
    </div>

</body>
</html>