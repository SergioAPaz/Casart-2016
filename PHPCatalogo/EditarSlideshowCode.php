<?php
include ("BloqueDeSeguridadCatalogo.php");
include('conexion.php');

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $titulo = $_POST['txttitulo'];
    $descripcion = $_POST['txtdesc'];
    $id = $_POST['idgaleria'];
    $Option = $_POST['txtselect'];


    $insert = <<<SQL
UPDATE slideshow SET Titulo='$titulo',Descripcion='$descripcion',LinkTo='$Option' WHERE id='$id'
SQL;

    mysqli_query($conexiondb, $insert);

    header("Location: ../Gestion");
}else{
    echo "Debe elegir un registro.";
}

?>