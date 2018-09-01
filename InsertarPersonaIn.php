<?php
/**
 * Created by PhpStorm.
 * User: Regulus
 * Date: 29/08/2018
 * Time: 5:24 PM
 */

include "conexion/coni.php";





$nombre1 = $_POST['Nombre'];
$segundo = $_POST['segundo'];
$apellido = $_POST['apellido'];
$segundoape = $_POST['segundoape'];
$phone = $_POST['phone'];
$address = $_POST['address'];
$dpi = $_POST['dpi'];
$birthday = $_POST['birthday'];

$esta =$conn ->query("INSERT INTO perso (id, nombre, nombre2, ape1, ape2, telefono, direccion, dpi, cumple)
VALUES ('default', '$nombre1', '$segundo','$apellido','$segundoape','$phone','$address','$dpi','$birthday')");


if($esta->affected_rows>0)
{
    echo '
            <script type="text/javascript"> 
            alert("Exito");
            window.location.href="../index.php";
            </script>
        ';
    //header('Location: ../index.php');
}else
{
    echo '
            <script type="text/javascript"> 
            alert("Error");
            window.location.href="../index.php";
            </script>
        ';
}

$conn->close();

?>

