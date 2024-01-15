<?php
$host = "e-srv-lamp.univ-lemans.fr" ;
$user = "e2302865" ;
$database = "e2302865" ;
$password = "Vdm194pf" ;
$connection = new mysqli($host, $user, $password, $database) ;

$sumQuery = "SELECT (Nombre ) FROM `birthday-guests`" ;
$result = $connection -> query($sumQuery);
$count = 0 ;
while($row = $result -> fetch_assoc())
{
    $count = $count + $row['Nombre'] ;
}
echo ($count);

?>