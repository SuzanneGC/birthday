<?php
$host = "e-srv-lamp.univ-lemans.fr" ;
$user = "e2302865" ;
$database = "e2302865" ;
$password = "Vdm194pf" ;
$connection = new mysqli($host, $user, $password, $database) ;

if($_SERVER["REQUEST_METHOD"] == "POST")
{
    $name = $_POST["nom"];
    $number = $_POST["nombre"];
    $q = "INSERT INTO `birthday-guests` (Nom, Nombre ) VALUES ('$name', '$number')";
    $connection -> query($q);
}

?>