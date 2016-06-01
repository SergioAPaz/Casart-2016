<?php
session_start();
include("conexion.php");

if(isset($_POST['user']) && !empty($_POST['user']) &&
    isset($_POST['pw']) && !empty($_POST['pw']))
{

    $usr=htmlspecialchars($_POST['user']);
    $psw=htmlspecialchars($_POST['pw']);

    $con=mysqli_connect($host,$user,$pw) or die ("Problemas con el servidor de la base de datos.");

    /*mysqli_select_db($db,$con)or die("Problemas con BD");*/

    mysqli_select_db($con,$db);
    /*    $sel=mysqli_query("SELECT USER,PW FROM users WHERE USER='$_POST[user]'",$con);*/

    $sqlCommand="SELECT USER,PW,Rol FROM users WHERE USER='$usr'";
    $query=mysqli_query($con, $sqlCommand) or die(mysqli_error("Fallo en la conexion"));

    $sesion=mysqli_fetch_array($query);

    if($psw==$sesion['PW']){
        /*VARIABLE GLOBAL $_SESSION[]*/
        $_SESSION['username'] = $_POST['user'];
        $_SESSION["username"]= "SI";
        $_SESSION['RolCuenta'] = $sesion['Rol'];
        $_SESSION['usuario'] = $_POST['user'];
        header("location:PanelAdmin.php");


    }else{
        echo "Datos incorrectos";
    }



}else{


    echo "Debes llenar ambos campos";

}

?>