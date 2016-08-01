<?php
include ("BloqueDeSeguridadCatalogo.php");
if(isset($_GET['id']))
{

    $id=$_GET['id'];
    include('conexion.php');

    /*CONSULTA DE NOMBRE DE ARCHIVO FISICO DE IMAGEN*/
    $ConsultaImagen=<<<SQL
SELECT UrlImagenBig,UrlImagenSmall FROM  slideshow WHERE id='$id';
SQL;
    $QueryImagen =mysqli_query($conexiondb,$ConsultaImagen);
    $Asosiacion=mysqli_fetch_assoc($QueryImagen);


    /*BORRAR REGISTRO DE LA BASE DE DATOS*/
    $consulta=<<<SQL
DELETE  FROM slideshow WHERE id='$id'
SQL;

    mysqli_query($conexiondb,$consulta);


    /*BORRADO FISICO DE IMAGEN EN DISCO*/
    if(file_exists('../images/slideshow/test/'.$Asosiacion['UrlImagenBig']))
    {
        unlink('../images/slideshow/test/'.$Asosiacion['UrlImagenBig']);
        if(file_exists('../images/slideshow/test/'.$Asosiacion['UrlImagenSmall']))
        {
            unlink('../images/slideshow/test/'.$Asosiacion['UrlImagenSmall']);
        }
    }
    else
    {
        echo 'Error al borrar imagen fisica de carrusel';
    }
}else{
    echo "No hay nada que eliminar";
}

header("Location: ../Gestion.php");
?>