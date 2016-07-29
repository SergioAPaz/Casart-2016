<?php
include ("BloqueDeSeguridadCatalogo.php");
include('conexion.php');

$id= $_POST['idmiembro'];
$NombreArchivo=time() .'.jpg';

/*CONSULTA DE NOMBRE DE IMAGEN VIEJA*/
$ConsultaImagen=<<<SQL
SELECT UrlImagen FROM  miembros WHERE id='$id'
SQL;

$QueryImagen =mysqli_query($conexiondb,$ConsultaImagen);
$Asociacion =mysqli_fetch_assoc($QueryImagen);

/*ACTUALIZACION DE NOMBRE DE IMAGEN EN BASE DE DATOS*/

if(is_null($Asociacion))
{
    $consulta=<<<SQL
    INSERT INTO miembros SET UrlImagen='$NombreArchivo'
SQL;


}
else
{
    $consulta=<<<SQL
UPDATE miembros SET UrlImagen = "$NombreArchivo" WHERE id = $id;
SQL;

    /*BORRADO FISICO DE IMAGEN VIEJA EN DISCO*/
    if(file_exists('../images/Miembros/'.$Asociacion['UrlImagen'])){
        unlink('../images/Miembros/'.$Asociacion['UrlImagen']);
    }else{
        echo 'Error al borrar archivo fisico de imagen del fichero';
    }

}

mysqli_query($conexiondb,$consulta);

/*UPLOAD DE NUEVA IMAGEN FISICA A DISCO*/
$original=$_FILES['archivo']['tmp_name'];
$destino="../images/Miembros/$NombreArchivo";
move_uploaded_file($original,$destino);



header("Location:../Gestion.php");
?>