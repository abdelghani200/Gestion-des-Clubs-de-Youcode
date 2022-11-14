<?php
session_start();
require  'connection.php';

if(isset($_POST['save-apprenant'])){
    $name=mysqli_real_escape_string($connection,$_POST['name']);
    $secondname=mysqli_real_escape_string($connection,$_POST['secondname']);
    $email=mysqli_real_escape_string($connection,$_POST['email']);
    $phone=mysqli_real_escape_string($connection,$_POST['phone']);
    $clubs=mysqli_real_escape_string($connection,$_POST['selectClub']);
    $query = "INSERT INTO apprenants (nom,prenom,email,phone,club)
    VALUE('$name','$secondname','$email','$phone','$clubs')";

    $query_run = mysqli_query($connection,$query);
    if($query_run){
        $_SESSION['message'] = "Student Created Successfully";
        header("location:apprenants.php");
        exit(0);
    }
    else{
      $_SESSION['message'] = "Student Not Successfully";
      header("location:apprenants.php");
      exit(0);
    }
}


?>