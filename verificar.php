<?php

if(isset($_POST['g-recaptcha-response'])  &&  $_POST['g-recaptcha-response'])
{

    $secret = "6LdwxSETAAAAANP0PJ2XXQNbIhdANZ514_ALiZ3B";

    $ip = $_SERVER['REMOTE_ADDR'];

    $captcha = $_POST['g-recaptcha-response'];

    $rsp = file_get_contents("https://www.google.com/recaptcha/api/siteverify?secret=$secret&response=$captcha&remoteip$ip");

    $arr = json_decode($rsp, TRUE);
    if ($arr['success'])
    {

        session_start();
        include("conexion.php");


        /*Validamos que esten todos los campos requeridos del formulario*/
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            if ((empty($_POST["user"])) || (empty($_POST["pw"]))) {
                echo "<!DOCTYPE html>";
                echo "<html>";
                echo "<body style='background-color: #212121;color: #FAFAFA'>";
                echo "<b style='color: #F44336'>ERROR: </b>Favor de llenar todos los campos.";
                echo "</body>";
                echo "</html>";
            } else {

                $usr = $_POST['user'];
                $psw = $_POST['pw'];

                /*Validacion con expresiones reulares*/
                if ((preg_match("/^[a-zA-Z0-9._ñÑ ]*$/", $usr)) && (preg_match("/^[a-zA-Z0-9._ñÑ ]*$/", $psw))) {
                    $con = mysqli_connect($host, $user, $pw) or die ("Problemas con el servidor de la base de datos.");

                    mysqli_select_db($con, $db);

                    $sqlCommand = "SELECT USER,PW,Rol FROM users WHERE USER='$usr'";

                    $query = mysqli_query($con, $sqlCommand) or die(mysqli_error("Fallo en la consulta a la base de datos."));

                    $sesion = mysqli_fetch_array($query);

                    if ($psw == $sesion['PW']) {
                        /*VARIABLE GLOBAL $_SESSION[]*/
                        $_SESSION['username'] = $_POST['user'];
                        $_SESSION["username"] = "SI";
                        $_SESSION['RolCuenta'] = $sesion['Rol'];
                        $_SESSION['usuario'] = $_POST['user'];
                        header("location:PanelAdmin.php");

                    } else {
                        echo "<!DOCTYPE html>";
                        echo "<html>";
                        echo "<body style='background-color: #212121;color: #FAFAFA'>";
                        echo "<b style='color: #F44336'>ERROR: </b>El usuario o contraseña son incorrectos.";
                        echo "</body>";
                        echo "</html>";
                    }

                } else {
                    echo "<!DOCTYPE html>";
                    echo "<html>";
                    echo "<body style='background-color: #212121;color: #FAFAFA'>";
                    echo "<b style='color: #F44336'>ERROR: </b>Los campos solo pueden contener letras, numeros, '_' y '.' ";
                    echo "</body>";
                    echo "</html>";
                }
            }
        }
    }else{
        echo "FAIL.";
    }
}else{
    echo "<!DOCTYPE html>";
    echo "<html>";
    echo "<body style='background-color: #212121;color: #FAFAFA'>";
    echo "<b style='color: #F44336'>ERROR: </b>Favor de llenar Captcha.";
    echo "</body>";
    echo "</html>";
}

?>