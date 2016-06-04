<?php

include ("../conexion.php");

/*Validamos que esten todos los campos requeridos del formulario*/
if ($_SERVER["REQUEST_METHOD"] == "POST")
{
    if (    (empty($_POST["name"])) || (empty($_POST["email"])) || (empty($_POST["message"]))    )
    {
        {
            echo "<!DOCTYPE html>";
            echo  "<html>";
            echo  "<body style='background-color: #212121;color: #FAFAFA'>";
            echo "<b style='color: #F44336'>ERROR: </b>Favor de llenar todos los campos.";
            echo "</body>";
            echo "</html>";
        }
    }
    else
    {

        $inputnombre=$_POST['name'];
        $inputmail=$_POST['email'];
        $inputmessage=$_POST['message'];

        /*Validacion con expresiones reulares*/
        if (    (preg_match("/^[a-zA-Z0-9@._ñÑ ]*$/", $inputnombre))  &&     (preg_match("/^[a-zA-Z0-9@._ñÑ ]*$/", $inputmail))   &&  (preg_match("/^[\n\r0-9a-zA-Z@,._ñÑ ]+$/", $inputmessage))    )
        {
            $insert=<<<SQL
INSERT INTO comentarios0013 SET Fecha_de_comentario=NOW(),Nombre='$inputnombre',Email='$inputmail',Mensaje='$inputmessage'
SQL;
            mysqli_query($conexiondb,$insert) or die ("Error al ingresar comentario");
            header("Location: ../index.php");
        }
        else
        {
            echo "<!DOCTYPE html>";
            echo  "<html>";
            echo  "<body style='background-color: #212121;color: #FAFAFA'>";
            echo "<b style='color: #F44336'>ERROR: </b>Los campos solo pueden contener letras, numeros y _ , .";
            echo "</body>";
            echo "</html>";
        }
    }
}

?>