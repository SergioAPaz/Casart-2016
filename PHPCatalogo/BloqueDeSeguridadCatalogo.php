<?php
//Inicio la sesión
session_start();
//COMPRUEBA QUE EL USUARIO ESTA AUTENTICADO
if ($_SESSION["username"] != "SI") {
//si no existe, va a la página de autenticacion
    header("Location: ../PanelLogin.php");
//salimos de este script
    exit();
}
?>