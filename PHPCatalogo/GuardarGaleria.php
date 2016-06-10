<?php
include ("BloqueDeSeguridadCatalogo.php");
include('conexion.php');
/*var_dump($_POST)*/

$titulo=$_POST['txttitulo'];
$descripcion=$_POST['txtdesc'];
$galeria=$_POST['txtgaleria'];
$Usuario= $_SESSION['usuario'];
$NombreArchivo=time() .'.jpg';
$NuevoProducto=$_POST['btnnewproduct'];
$id=time();

$insert=<<<SQL
INSERT INTO catalogo SET id='$id', Titulo='$titulo',Descripcion='$descripcion',Fecha_alta=NOW(),urlimagen='$NombreArchivo', Galeria='$galeria',Nuevo_producto='$NuevoProducto',Usuario='$Usuario'
SQL;

mysqli_query($conexiondb,$insert);



/*IMAGENES*/

$original=$_FILES['archivo']['tmp_name'];
$destino="ImagenesGaleria/$NombreArchivo";


move_uploaded_file($original,$destino);

header("Location: ../PanelAdmin.php");
?>