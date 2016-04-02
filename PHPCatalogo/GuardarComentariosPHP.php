<?php


include ("../conexion.php");

$inputnombre=$_POST['name'];
$inputmail=$_POST['email'];
$inputmessage=$_POST['message'];

$insert=<<<SQL
INSERT INTO comentarios0013 SET Fecha_de_comentario=NOW(),Nombre='$inputnombre',Email='$inputmail',Mensaje='$inputmessage'
SQL;

mysqli_query($conexiondb,$insert) or die ("Error al ingresar comentario");

header("Location: ../index.php");

?>


