<?php

include ("../../BloqueDeSeguridad.php");
include ("../../conexion.php");

        /*Validamos que esten todos los campos requeridos del formulario*/
        if ($_SERVER["REQUEST_METHOD"] == "POST")
        {
            if ((empty($_POST["Name"])) || (empty($_POST["Email"]))   ) 
                {
                    echo "<!DOCTYPE html>";
                    echo "<html>";
                    echo "<body style='background-color: #212121;color: #FAFAFA'>";
                    echo "<b style='color: #F44336'>ERROR: </b>Favor de llenar todos los campos.";
                    echo "</body>";
                    echo "</html>";
                } else {

                $inputnombre = $_POST['Name'];
                $inputmail = $_POST['Email'];

                /*Validacion con expresiones reulares*/
                if ((preg_match("/^[a-zA-Z0-9._ñÑ ]*$/", $inputnombre)) && (preg_match("/^[a-zA-Z0-9@._ñÑ ]*$/", $inputmail))   ){

                    /*ENVIO DE EMAIL A ADMIN*/
                    require '../../assets/php/PHPMailer/PHPMailerAutoload.php';

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
                    $mail->Subject = 'Nuevo correo para notificafiones';
                    $mail->Body    = "<span style='font-size: 25px'><b>Se registro la alta de un nuevo correo para notificaciones:</b></span><br><br>Nombre: <b>$inputnombre</b> <br><br> Email: <b>$inputmail</b> </b><br><br> 
                                <b>Panel de comentarios de Sitio web Casart Chihuahua.<b>   ";
                    $mail->AltBody = "<span style='font-size: 25px'><b>Se registro la alta de un nuevo correo para notificaciones:</b></span><br><br>Nombre: <b>$inputnombre</b> <br><br> Email: <b>$inputmail</b> </b><br><br> 
                                <b>Panel de comentarios de Sitio web Casart Chihuahua.<b>   ";
                    if(!$mail->send()) {

                    } else {

                    }
                    /*FIN DE ENVIO DE NOTIFICACION POR EMAIL*/

                    $insert=<<<SQL
INSERT INTO emailadmins SET Nombre='$inputnombre',Email='$inputmail'
SQL;
                    mysqli_query($conexiondb, $insert) or die ("Error al ingresar nuevo correo");
                    header("Location: ../../Gestion.php");
                } else {
                    echo "<!DOCTYPE html>";
                    echo "<html>";
                    echo "<body style='background-color: #212121;color: #FAFAFA'>";
                    echo "<b style='color: #F44336'>ERROR: </b>Los campos solo pueden contener letras, numeros y _ , .";
                    echo "</body>";
                    echo "</html>";
                }
            }
        } else 
            {
                echo "FAIL.";
            }
?>