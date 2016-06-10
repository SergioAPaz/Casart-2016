<?php
include("BloqueDeSeguridadNewAccount.php");
if(isset($_GET['id']))
{

    $id=$_GET['id'];
    include('conexion.php');


    $consulta=<<<SQL
DELETE  FROM users WHERE id='$id'
SQL;


    mysqli_query($conexiondb,$consulta);

}

header("Location: ../NuevosUsuarios.php");
?>