<?php

include("../conexion.php");

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

                    /*ENVIO DE EMAIL A ADMIN*/
                    require '../assets/php/PHPMailer/PHPMailerAutoload.php';

                    $consulta=<<<SQL
SELECT Email FROM emailadmins;
SQL;

                    $mail = new PHPMailer;
                    //$mail->SMTPDebug = 2;                               // Enable verbose debug output
                    $mail->isSMTP();                                      // Set mailer to use SMTP
                    $mail->Host = 'smtp.gmail.com';  // Specify main and backup SMTP servers
                    $mail->SMTPAuth = true;                               // Enable SMTP authentication
                    $mail->Username = 'casartchihuahua@gmail.com';                 // SMTP username
                    $mail->Password = 'casadearte';                           // SMTP password
                    $mail->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
                    $mail->Port = 587;                                    // TCP port to connect to
                    $mail->setFrom('casartchihuahua@gmail.com', 'Admin Casart Chihuahua');

                    $filas= mysqli_query($conexiondb,$consulta);
                    while($columna=mysqli_fetch_assoc($filas)) {
                        $mail->addAddress($columna['Email'], 'Administrador');     // Add a recipient
                    }

                    $mail->isHTML(false);                                  // Set email format to HTML
                    $mail->Subject = 'Nuevo comentario en Web Casart Chihuahua';
                    $mail->Body    = "<span style='font-size: 25px'><b>Tienes un nuevo comentario:</b></span><br><br>Nombre de visitante: <b>$inputnombre</b> <br><br> Email de visitante: <b>$inputmail</b> <br><br> Mensaje: <b>$inputmessage</b><br><br> 
                                <b>Panel de comentarios de Sitio web Casart Chihuahua.<b>   ";
                    $mail->AltBody = "<span style='font-size: 25px'><b>Tienes un nuevo comentario:</b></span><br><br>Nombre de visitante: <b>$inputnombre</b> <br><br> Email de visitante: <b>$inputmail</b> <br><br> Mensaje: <b>$inputmessage</b><br><br> 
                                <b>Panel de comentarios de Sitio web Casart Chihuahua.<b>   ";
                    if(!$mail->send()) {

                    } else {

                    }
                    /*FIN DE ENVIO DE NOTIFICACION POR EMAIL*/

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