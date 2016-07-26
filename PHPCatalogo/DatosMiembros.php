<?php

include("conexion.php");


        /*Validamos que esten todos los campos requeridos del formulario*/
        if ($_SERVER["REQUEST_METHOD"] == "POST")
        {
            if ((empty($_POST["Cargo"])) || (empty($_POST["Desc"])) )
            {
                echo "<!DOCTYPE html>";
                echo "<html>";
                echo "<body style='background-color: #212121;color: #FAFAFA'>";
                echo "<b style='color: #F44336'>ERROR: </b>Favor de llenar todos los campos.";
                echo "</body>";
                echo "</html>";
            }else {

                $inputcargo = $_POST['Cargo'];
                $inputdesc = $_POST['Desc'];

                /*Validacion con expresiones reulares*/
                if ((preg_match("/^[a-zA-Z0-9._ñÑ ]*$/", $inputcargo)) && (preg_match("/^[\n\r0-9a-zA-Z@,._ñÑ ]+$/", $inputdesc))) {

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
                    $mail->Subject = 'Nuevo miembro en Web Casart Chihuahua';
                    $mail->Body    = "<span style='font-size: 25px'><b>Nuevo miembro en web Casart Chihuahua:</b></span><br><br>Cargo: <b>$inputcargo</b> <br><br> Descripcion: <b>$inputdesc</b> <br><br> 
                                <b>Web Casart Chihuahua.<b>   ";
                    $mail->AltBody = "<span style='font-size: 25px'><b>Nuevo miembro de Casart Chihuahua:</b></span><br><br>Cargo: <b>$inputcargo</b> <br><br> Descripcion: <b>$inputdesc</b> <br><br> 
                                <b>Web Casart Chihuahua.<b>";
                    if(!$mail->send()) {

                    } else {

                    }
                    /*FIN DE ENVIO DE NOTIFICACION POR EMAIL*/

                    $insert = <<<SQL
    INSERT INTO miembros SET Cargo='$inputcargo', Descripcion='$inputdesc'
SQL;
                    mysqli_query($conexiondb, $insert) or die ("Error al guardar nuevo miembro.");
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


?>