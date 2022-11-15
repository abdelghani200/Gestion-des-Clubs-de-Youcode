<?php

$host ='localhost';
$user ='root';
$password ='';
$namebasedonnee='gestion clubs';


$connection = mysqli_connect($host,$user,$password,$namebasedonnee);

if($connection){
    echo "connected";
}else{
    echo "hhhhhhhhhhhhhhh";
}



?>

