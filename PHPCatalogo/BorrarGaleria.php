<?php
include ("BloqueDeSeguridadCatalogo.php");
if(isset($_GET['id']))
{

$id=$_GET['id'];
include('../conexion.php');

/*CONSULTA DE NOMBRE DE ARCHIVO DE IMAGEN*/
$ConsultaImagen=<<<SQL
SELECT urlimagen FROM  catalogo WHERE id='$id'
SQL;
$QueryImagen =mysqli_query($conexiondb,$ConsultaImagen);
$Asosiacion=mysqli_fetch_assoc($QueryImagen);


/*BORRAR REGISTRO DE LA BASE DE DATOS*/
$consulta=<<<SQL
DELETE  FROM catalogo WHERE id='$id'
SQL;

mysqli_query($conexiondb,$consulta);


/*BORRADO FISICO DE IMAGEN EN DISCO*/
if(file_exists('ImagenesGaleria/'.$Asosiacion['urlimagen'])){
   unlink('ImagenesGaleria/'.$Asosiacion['urlimagen']);
}else{
    echo 'Error al borrar imagen fisica de fichero de imagenes';
}

}

header("Location: ../PanelAdmin.php");
?>