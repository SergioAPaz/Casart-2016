<?php

include("../../BloqueDeSeguridad.php");

if(isset($_GET['id']))
    {
        include('../../conexion.php');

        $id=$_GET['id'];

        $Delete=<<<SQL
    DELETE  FROM emailadmins WHERE id='$id'
SQL;

        mysqli_query($conexiondb,$Delete);

    }
header("Location: ../../Gestion.php");
?>