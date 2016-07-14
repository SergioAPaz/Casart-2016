<?php
include("BloqueDeSeguridadNewAccount.php");
if(isset($_GET['id']))
{

    $id=$_GET['id'];
    include('conexion.php');


    /*CONSULTA PARA LEER ROL*/
    $queryRol = <<<SQL
SELECT Rol FROM `users` WHERE id='$id'
SQL;
    $execute = mysqli_query($conexiondb,$queryRol);
    $Rol = mysqli_fetch_array($execute);


/*CONSULTA PARA CONTAR EL NUMERO DE ADMINISTRADORES DEL SISTEMA*/
    $ContadorAdmins=<<<SQL
SELECT id FROM `users` WHERE Rol='Administrador'
SQL;
    $cuenta=mysqli_query($conexiondb,$ContadorAdmins);
    $total = mysqli_num_rows($cuenta);


if($Rol['Rol']=="Administrador" )
{
            if ($total>1)
            {
                $consulta=<<<SQL
DELETE  FROM users WHERE id='$id'
SQL;
                mysqli_query($conexiondb,$consulta);

                header("Location: ../NuevosUsuarios.php");

            }
            else
            {
                  echo "Imposible eliminar, el sistema debe contar con por lo menos un usuario administrador.";
            }
} else if ($Rol['Rol']=="Usuario") {

    $consulta=<<<SQL
DELETE  FROM users WHERE id='$id'
SQL;
    mysqli_query($conexiondb,$consulta);

    header("Location: ../NuevosUsuarios.php");

}


}else{
    echo "Fallo al eliminar";
}



?>