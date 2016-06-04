<?php

include ("../conexion.php");

if(isset($_POST['g-recaptcha-response'])  &&  $_POST['g-recaptcha-response']) {

    $secret = "6LdwxSETAAAAANP0PJ2XXQNbIhdANZ514_ALiZ3B";

    $ip = $_SERVER['REMOTE_ADDR'];

    $captcha = $_POST['g-recaptcha-response'];

    $rsp = file_get_contents("https://www.google.com/recaptcha/api/siteverify?secret=$secret&response=$captcha&remoteip$ip");

    $arr = json_decode($rsp, TRUE);
    if ($arr['success']) {
        /*Validamos que esten todos los campos requeridos del formulario*/
        if ($_SERVER["REQUEST_METHOD"] == "POST")
        {
            if ((empty($_POST["name"])) || (empty($_POST["email"])) || (empty($_POST["message"]))) {
                {
                    echo "<!DOCTYPE html>";
                    echo "<html>";
                    echo "<body style='background-color: #212121;color: #FAFAFA'>";
                    echo "<b style='color: #F44336'>ERROR: </b>Favor de llenar todos los campos.";
                    echo "</body>";
                    echo "</html>";
                }
            } else {

                $inputnombre = $_POST['name'];
                $inputmail = $_POST['email'];
                $inputmessage = $_POST['message'];

                /*Validacion con expresiones reulares*/
                if ((preg_match("/^[a-zA-Z0-9._ñÑ ]*$/", $inputnombre)) && (preg_match("/^[a-zA-Z0-9@._ñÑ ]*$/", $inputmail)) && (preg_match("/^[\n\r0-9a-zA-Z@,._ñÑ ]+$/", $inputmessage))) {
                    $insert = <<<SQL
            INSERT INTO comentarios0013 SET Fecha_de_comentario=NOW(),Nombre='$inputnombre',Email='$inputmail',Mensaje='$inputmessage'
SQL;
                    mysqli_query($conexiondb, $insert) or die ("Error al ingresar comentario");
                    header("Location: ../index.php");
                } else {
                    echo "<!DOCTYPE html>";
                    echo "<html>";
                    echo "<body style='background-color: #212121;color: #FAFAFA'>";
                    echo "<b style='color: #F44336'>ERROR: </b>Los campos solo pueden contener letras, numeros y _ , .";
                    echo "</body>";
                    echo "</html>";
                }
            }
        }
    } else {
            echo "FAIL.";
        }
    }else
    {
        echo "<!DOCTYPE html>";
        echo "<html>";
        echo "<body style='background-color: #212121;color: #FAFAFA'>";
        echo "<b style='color: #F44336'>ERROR: </b>Favor de llenar Captcha.";
        echo "</body>";
        echo "</html>";
    }

?>