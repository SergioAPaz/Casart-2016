<?php
include("BloqueDeSeguridad.php");
include("conexion.php");



        /*Validamos que esten todos los campos requeridos del formulario*/
        if ($_SERVER["REQUEST_METHOD"] == "POST")
        {
            if ((empty($_POST["TxtTitulo"])) || (empty($_POST["TxtDesc"])) || (empty($_POST["txtselect"]))) {
                {
                    echo "<!DOCTYPE html>";
                    echo "<html>";
                    echo "<body style='background-color: #212121;color: #FAFAFA'>";
                    echo "<b style='color: #F44336'>ERROR: </b>Favor de llenar todos los campos.";
                    echo "</body>";
                    echo "</html>";
                }
            } else {

                $InputTitulo = $_POST['TxtTitulo'];
                $InputDesc = $_POST['TxtDesc'];
                $InputImgBig=time().'.jpg';
                $InputImgSmall=time().'B'.'.jpg';
                $InputTxtOption = $_POST['txtselect'];

                /*Validacion con expresiones reulares*/
                if ((preg_match("/^[a-zA-Z0-9._ñÑáéíóúÁÉÍÓÚ ]*$/", $InputTitulo)) && (preg_match("/^[\n\r0-9a-zA-Z@,._ñÑáéíóúÁÉÍÓÚ ]+$/", $InputDesc))) {

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
                    $mail->addAttachment($_FILES['ImagenBig']['tmp_name'], 'ImagenGrande.jpg');
                    $mail->addAttachment($_FILES['ImagenSmall']['tmp_name'], 'ImagenPequena.jpg');
                    $mail->isHTML(false);                                  // Set email format to HTML
                    $mail->Subject = 'Nueva imagen en carrosel en Web Casart Chihuahua';
                    $mail->Body    = "<span style='font-size: 25px'><b>Se ha generado una nueva imagen en carrusel: </b></span><br><br>Titulo: <b>$InputTitulo</b> <br><br> Descripcion: <b>$InputDesc</b> <br><br>  
                                <b>Web Casart Chihuahua.<b>   ";
                    $mail->AltBody = "<span style='font-size: 25px'><b>Se ha generado una nueva imagen en carrusel: </b></span><br><br>Titulo: <b>$InputTitulo</b> <br><br> Descripcion: <b>$InputDesc</b> <br><br>  
                                <b>Web Casart Chihuahua.<b>   ";
                    if(!$mail->send()) {

                    } else {

                    }
                    /*FIN DE ENVIO DE NOTIFICACION POR EMAIL*/

                    $insert = <<<SQL
INSERT INTO slideshow SET Titulo='$InputTitulo',Descripcion='$InputDesc',UrlImagenBig='$InputImgBig',UrlImagenSmall='$InputImgSmall',LinkTo='$InputTxtOption';
SQL;
                    mysqli_query($conexiondb, $insert) or die ("Error al agregar nuevo elemento.");

                    /*IMAGEN GRANDE*/
                    $original1=$_FILES['ImagenBig']['tmp_name'];
                    $destino1="../images/slideshow/test/$InputImgBig";
                    move_uploaded_file($original1,$destino1);
                    /*IMAGEN PEQUEÑA*/
                    $original2=$_FILES['ImagenSmall']['tmp_name'];
                    $destino2="../images/slideshow/test/$InputImgSmall";
                    move_uploaded_file($original2,$destino2);

                    header("Location: ../Gestion.php");

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