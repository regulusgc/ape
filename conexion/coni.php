<?php
/**
 * Created by PhpStorm.
 * User: Regulus
 * Date: 31/08/2018
 * Time: 11:26 PM
 */
//
$conn=new mysqli(null,"root","","nueva",null,"/cloudsql/rene-209722:us-central1:pagweb");
if($conn->connect_error){
    echo $conn->connect_error;
}

$conn->set_charset('utf8');//para agregar  el conjuto de caracteres