<?php

$host ='localhost';
$user ='root';
$password ='';
$namebasedonnee='sign';


$connection = mysqli_connect($host,$user,$password,$namebasedonnee);

if($connection){
    echo "connected";
}else{
    echo "hhhhhhhhhhhhhhh";
}



?>

