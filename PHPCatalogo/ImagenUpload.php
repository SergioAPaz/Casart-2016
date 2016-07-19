<?php
include ("BloqueDeSeguridadCatalogo.php");
include('conexion.php');

$id= $_POST['idgaleria'];
$NombreArchivo=time() .'.jpg';
$Usuario= $_SESSION['usuario'];


/*CONSULTA DE NOMBRE DE IMAGEN VIEJA*/
$ConsultaImagen=<<<SQL
SELECT urlimagen FROM  catalogo WHERE id='$id'
SQL;
$QueryImagen =mysqli_query($conexiondb,$ConsultaImagen);
$Asosiacion=mysqli_fetch_assoc($QueryImagen);

/*ACTUALIZACION DE NOMBRE DE IMAGEN EN BASE DE DATOS*/
$consulta=<<<SQL
UPDATE catalogo SET urlimagen = "$NombreArchivo",Usuario=CONCAT('Modificado por ','$Usuario') WHERE id = $id;
SQL;
mysqli_query($conexiondb,$consulta);

/*UPLOAD DE NUEVA IMAGEN FISICA A DISCO*/
$original=$_FILES['archivo']['tmp_name'];
$destino="ImagenesGaleria/$NombreArchivo";
move_uploaded_file($original,$destino);


/*BORRADO FISICO DE IMAGEN VIEJA EN DISCO*/
if(file_exists('ImagenesGaleria/'.$Asosiacion['urlimagen'])){
    unlink('ImagenesGaleria/'.$Asosiacion['urlimagen']);
}else{
    echo 'Error al borrar archivo de imagen del fichero';
}
header("Location:../PanelAdmin.php");
?>