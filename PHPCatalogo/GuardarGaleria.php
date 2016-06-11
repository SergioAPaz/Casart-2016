<?php
include ("BloqueDeSeguridadCatalogo.php");
include('conexion.php');
/*var_dump($_POST)*/

if ($_SERVER["REQUEST_METHOD"] == "POST")
{
    if ((empty($_POST["txttitulo"])) || (empty($_POST["txtdesc"])) || (empty($_POST["txtgaleria"]))  || (empty($_SESSION["usuario"]))     )
    {
        echo "<!DOCTYPE html>";
        echo "<html>";
        echo "<body style='background-color: #212121;color: #FAFAFA'>";
        echo "<b style='color: #F44336'>ERROR: </b>Favor de llenar todos los campos.";
        echo "</body>";
        echo "</html>";
    }
    else
    {
        $titulo=$_POST['txttitulo'];
        $descripcion=$_POST['txtdesc'];
        $galeria=$_POST['txtgaleria'];
        $Usuario= $_SESSION['usuario'];
        $NombreArchivo=time() .'.jpg';
        $NuevoProducto=$_POST['btnnewproduct'];
        $id=time();

        /*Validacion con expresiones reulares*/
        if ((preg_match("/^[ a-zA-ZñÑ,._[0-9]|- ]+$/", $titulo)) && (preg_match("/^[ a-zA-ZñÑ,._[0-9]|- ]+$/", $descripcion))       )
        {

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

            $mail->addAttachment($_FILES['archivo']['tmp_name'], 'Image.jpg');
            $mail->isHTML(false);                                  // Set email format to HTML
            $mail->Subject = 'Nuevo producto en Web Casart Chihuahua';
            $mail->Body    = "<span style='font-size: 25px'><b>Se ha agregado un nuevo producto:</b></span><br><br>Galeria: <b>$galeria</b> <br><br> Titulo: <b>$titulo</b> <br><br> Descripcion: <b>$descripcion</b><br><br>
                                                                Usuario: <b>$Usuario</b><br><br><b>Panel de comentarios de Sitio web Casart Chihuahua.<b>   ";
                    $mail->AltBody = "<span style='font-size: 25px'><b>Se ha agregado un nuevo producto:</b></span><br><br>Galeria: <b>$galeria</b> <br><br> Titulo: <b>$titulo</b> <br><br> Descripcion: <b>$descripcion</b><br><br>
                                                                Usuario: <b>$Usuario</b><br><br><b>Panel de comentarios de Sitio web Casart Chihuahua.<b>   ";
                            if(!$mail->send()) {
            
                            } else {
            
                            }
                            /*FIN DE ENVIO DE NOTIFICACION POR EMAIL*/
            
            $insert=<<<SQL
INSERT INTO catalogo SET id='$id', Titulo='$titulo',Descripcion='$descripcion',Fecha_alta=NOW(),urlimagen='$NombreArchivo', Galeria='$galeria',Nuevo_producto='$NuevoProducto',Usuario='$Usuario'
SQL;
            
             mysqli_query($conexiondb,$insert) or die ("Error al ingresar producto");

            /*IMAGENES*/
            $original=$_FILES['archivo']['tmp_name'];
            $destino="ImagenesGaleria/$NombreArchivo";
            move_uploaded_file($original,$destino);
            header("Location: ../PanelAdmin.php");
        } 
        else
        {
                echo "<!DOCTYPE html>";
                echo "<html>";
                echo "<body style='background-color: #212121;color: #FAFAFA'>";
                echo "<b style='color: #F44336'>ERROR: </b>Los campos solo pueden contener letras, numeros y _ , .";
                echo "</body>";
                echo "</html>";
        }
    }
}
else
{
    echo 'Fail.';
}
