<?php
/**
 * Created by PhpStorm.
 * User: Regulus
 * Date: 29/08/2018
 * Time: 5:24 PM
 */

require ("../formulito/conexion/Db.class.php");

$db = new DB();

$nombre1 = $_POST['Nombre'];
$segundo = $_POST['segundo'];
$apellido = $_POST['apellido'];
$segundoape = $_POST['segundoape'];
$phone = $_POST['phone'];
$address = $_POST['address'];
$dpi = $_POST['dpi'];
$birthday = $_POST['birthday'];

$insertar = $db ->query("INSERT INTO engine.perso (id, nombre, nombre2, ape1, ape2, telefono, direccion, dpi, cumple)
VALUES(:id,:nombre,:nom2,:ape,:ape2,:tel,:dire,:dpi,:cumple)",array("id"=>"defualt","nombre"=>"$nombre1","nom2"=>"$segundo","ape"=>"$apellido",
    "ape2"=>"$segundoape","tel"=>"$phone","dire"=>"$address","dpi"=>"$dpi",
    "cumple"=>"$birthday"));

if ($insertar) {
    header('Location: form.php');
    echo "<script> alert('Insertaste');
    window.location='form.php'
    </script>";

}

?>

