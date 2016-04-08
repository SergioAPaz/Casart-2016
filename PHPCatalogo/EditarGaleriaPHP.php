<?php
include ("BloqueDeSeguridadCatalogo.php");
include('../conexion.php');
/*var_dump($_POST)*/

$titulo=$_POST['txttitulo'];
$descripcion=$_POST['txtdesc'];
$id=$_POST['idgaleria'];
$Usuario= $_SESSION['usuario'];
$btnnewproduct=$_POST['btnnewproduct'];


$insert=<<<SQL
UPDATE catalogo SET Titulo='$titulo',Nuevo_producto='$btnnewproduct',Descripcion='$descripcion',Usuario=CONCAT('Modificado por ','$Usuario') WHERE id='$id'
SQL;

mysqli_query($conexiondb,$insert);

header("Location: ../PanelAdmin.php");

?>