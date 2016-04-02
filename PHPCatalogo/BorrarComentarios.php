<?php
include ("BloqueDeSeguridadCatalogo.php");

if(isset($_GET['id']))
{

include('../conexion.php');
$id=$_GET['id'];

    /*BORRAR REGISTRO DE LA BASE DE DATOS*/
 $consulta=<<<SQL
DELETE  FROM Comentarios0013 WHERE id='$id' 
SQL;

    mysqli_query($conexiondb, $consulta);

}

header("Location: ../ContactoComentarios.php");
?>