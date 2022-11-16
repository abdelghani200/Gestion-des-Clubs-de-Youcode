<?php
session_start();
include  ('connection.php');

if(isset($_POST['save-apprenant'])){
    $name=mysqli_real_escape_string($connection,$_POST['name']);
    $secondname=mysqli_real_escape_string($connection,$_POST['secondname']);
    $email=mysqli_real_escape_string($connection,$_POST['email']);
    $photo=mysqli_real_escape_string($connection,$_POST['photo']);
    $clubs=mysqli_real_escape_string($connection,$_POST['selectClub']);
    $query = "INSERT INTO apprenants (nom,prenom,email,photo,club)
    VALUE('$name','$secondname','$email','$photo','$clubs')";

    $query_run = mysqli_query($connection,$query);
    if($query_run){
        echo "Student Created Successfully";
        header("Location: displayApp.php");
    }
    else{
       echo "Student Not Successfully";
       header("Location: apprenants.php");
    }

}



if(isset($_POST['update_Apprenant']))
{
    $app_id = mysqli_real_escape_string($connection, $_POST['app_id']);

    $name=mysqli_real_escape_string($connection,$_POST['name']);
    $secondname=mysqli_real_escape_string($connection,$_POST['secondname']);
    $email=mysqli_real_escape_string($connection,$_POST['email']);
    $photo=mysqli_real_escape_string($connection,$_POST['photo']);
    $clubs=mysqli_real_escape_string($connection,$_POST['selectClub']);

    $query = "UPDATE apprenants SET nom='$name', prenom='$secondname', email='$email',club='$clubs', photo='$photo'  WHERE id='$app_id' ";

    $query_run = mysqli_query($connection,$query);
    
    if($query_run)
    {
        echo "Student Updated Successfully";
        header("Location: displayApp.php");
        exit(0);
    }
    else
    {
        echo "Student Not Updated";
        header("Location: apprenants.php");
        exit(0);
    }
}



if(isset($_POST['delete_App']))
{
    $app_id = mysqli_real_escape_string($connection, $_POST['delete_App']);

    $query = "DELETE FROM apprenants WHERE id='$app_id' ";
    $query_run = mysqli_query($connection, $query);

    if($query_run)
    {
        echo "Student Deleted Successfully";
        header("Location: acceuil.php");
        exit(0);
    }
    else
    {
        echo "Student Not Deleted";
        header("Location: insertClub.php");
        exit(0);
    }
}



if(isset($_POST['save-club']))
{
    $logo=mysqli_real_escape_string($connection,$_POST['logo']);
    $name=mysqli_real_escape_string($connection,$_POST['name']);
    $date=mysqli_real_escape_string($connection,$_POST['date-creation']);
    $desc=mysqli_real_escape_string($connection,$_POST['description']);

    $query = "INSERT INTO club (logo,nom,dateCreation,description)VALUE('$logo','$name','$date','$desc')";
    $query_run = mysqli_query($connection, $query);

    if($query_run)
    {
        echo "Student Deleted Successfully";
        header("Location: acceuil.php");
        exit(0);
    }
    else
    {
        echo "Student Not Deleted";
        header("Location: displayApp.php");
        exit(0);
    }
}



?>