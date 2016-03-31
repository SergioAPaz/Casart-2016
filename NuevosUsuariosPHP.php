<?php

include ("BloqueDeSeguridadNewAccount.php");
include("conexion.php");

$txtnombre=$_POST['txtnombre'];
$txtapellido=$_POST['txtapellido'];
$txtusuario=$_POST['txtusuario'];
$txtcontrasena=$_POST['txtcontrasena'];
$txtrol=$_POST['txtrol'];


$insert=<<<SQL
INSERT INTO users SET Nombre='$txtnombre',Apellido='$txtapellido',USER='$txtusuario',PW='$txtcontrasena',Rol='$txtrol'
SQL;

mysqli_query($conexiondb,$insert) or die ("Error al registrar usuario o usuario ya existente.");
/*mysqli_query($conexiondb,$insert) or die ("Error al registrar usuario o usuario ya existente.".mysqli_error());*/
header("Location: NuevosUsuarios.php");
?>










