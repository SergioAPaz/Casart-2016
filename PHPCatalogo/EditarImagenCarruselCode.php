<?php
include ("BloqueDeSeguridadCatalogo.php");
include('conexion.php');


if (    (!empty($_FILES['ImgBig']['tmp_name'])) || (!empty($_FILES['ImgSmall']['tmp_name']))    )
{
    $id= $_POST['IdSlideshowIMG'];
    $VarImgBig=time() .'.jpg';
    $VarImgSmall=time() .'.jpg';

    /*CONSULTA DE NOMBRE DE IMAGEN VIEJA*/
    $ConsultaImagen=<<<SQL
SELECT UrlImagenBig,UrlImagenSmall FROM  slideshow WHERE id='$id'
SQL;
    $QueryImagen =mysqli_query($conexiondb,$ConsultaImagen);
    $Asosiacion=mysqli_fetch_assoc($QueryImagen);



    /*ACTUALIZACION DE NOMBRE DE IMAGEN EN BASE DE DATOS*/

    /*CONSULTA Y ELIMINACION DE IMAGEN GRANDE*////////////////////////////////////////////
    if( (!empty($_FILES['ImgBig']['tmp_name'])) && (empty($_FILES['ImgSmall']['tmp_name']))    )
    {
        $consultaBig=<<<SQL
UPDATE slideshow SET UrlImagenBig = "$VarImgBig" WHERE id = $id;
SQL;
        mysqli_query($conexiondb,$consultaBig);
        /*BORRADO FISICO DE IMAGEN VIEJA EN DISCO*/
        if(file_exists('../images/slideshow/test/'.$Asosiacion['UrlImagenBig'])){
            unlink('../images/slideshow/test/'.$Asosiacion['UrlImagenBig']);
        }else{
            echo 'Error al borrar archivo de imagen grande del fichero';
        }
        /*CONSULTA Y ELIMINACION DE IMAGEN PEQUEÑA*/////////////////////////////////
    }elseif( (!empty($_FILES['ImgSmall']['tmp_name'])) && (empty($_FILES['ImgBig']['tmp_name']))    )
    {
        $consultaSmall=<<<SQL
UPDATE slideshow SET UrlImagenSmall = "$VarImgSmall" WHERE id = $id;
SQL;
        mysqli_query($conexiondb,$consultaSmall);

        /*BORRADO FISICO DE IMAGEN VIEJA EN DISCO*/
        if(file_exists('../images/slideshow/test/'.$Asosiacion['UrlImagenSmall'])){
            unlink('../images/slideshow/test/'.$Asosiacion['UrlImagenSmall']);
        }else{
            echo 'Error al borrar archivo de imagen pequeña del fichero';
        }
        /*CONSULTA Y ELIMINACION DE IMAGEN GRANDE Y PEQUEÑA*//////////////////
    }elseif( (!empty($_FILES['ImgBig']['tmp_name'])) && (!empty($_FILES['ImgSmall']['tmp_name']))    )
    {
        $consultaBoth=<<<SQL
UPDATE slideshow SET UrlImagenSmall = "$VarImgSmall", UrlImagemSmall="$VarImgSmall" WHERE id = $id;
SQL;
        mysqli_query($conexiondb,$consultaBoth);
        /*BORRADO FISICO DE IMAGEN VIEJA EN DISCO*/
        if(file_exists('../images/slideshow/test/'.$Asosiacion['UrlImagenBig'])){
            unlink('../images/slideshow/test/'.$Asosiacion['UrlImagenBig']);
        }else{
            echo 'Error al borrar archivo de imagen del fichero';
        }
        if(file_exists('../images/slideshow/test/'.$Asosiacion['UrlImagenSmall'])){
            unlink('../images/slideshow/test/'.$Asosiacion['UrlImagenSmall']);
        }else{
            echo 'Error al borrar archivo de imagen pequeña del fichero';
        }

    }

    /*UPLOAD DE NUEVA IMAGEN FISICA A DISCO*/
    /*IMGBIG*/
    $Big=$_FILES['ImgBig']['tmp_name'];
    $destino1="../images/slideshow/test/$VarImgBig";
    move_uploaded_file($Big,$destino1);
    /*IMGSMALL*/
    $Small=$_FILES['ImgSmall']['tmp_name'];
    $destino2="../images/slideshow/test/$VarImgSmall";
    move_uploaded_file($Small,$destino2);



    header("Location:../Gestion");
}else{
    echo "Porfavor seleccionar una imagen para actualizar";
}
?>