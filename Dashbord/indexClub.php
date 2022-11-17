<?php
session_start();
include  ('connection.php');



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
        header("Location: club11.php");
        exit(0);
    }
    else
    {
        echo "Student Not Deleted";
        header("Location: displayApp.php");
        exit(0);
    }
}


if(isset($_POST['update_Club']))
{
    $clb_id = mysqli_real_escape_string($connection, $_POST['clb_id']);
    $logo=mysqli_real_escape_string($connection,$_POST['logo']);
    $name=mysqli_real_escape_string($connection,$_POST['nom']);
    $dateCr=mysqli_real_escape_string($connection,$_POST['dateCreation']);
    $description=mysqli_real_escape_string($connection,$_POST['description']);
    
    $query = "UPDATE club SET logo='$logo', nom='$name', dateCreation='$dateCr', description='$description' WHERE id='$clb_id' ";

    $query_run = mysqli_query($connection,$query);
    
    if($query_run)
    {
        echo "Student Updated Successfully";
        header("Location: club11.php");
        exit(0);
    }
    else
    {
        echo "Student Not Updated";
        header("Location: club11.php");
        exit(0);
    }
}



if(isset($_POST['delete_club']))
{
    $clb_id = mysqli_real_escape_string($connection, $_POST['delete_club']);

    $query = "DELETE FROM club WHERE id='$clb_id' ";
    $query_run = mysqli_query($connection, $query);

    if($query_run)
    {
        echo "Student Deleted Successfully";
        header("Location: club11.php");
        exit(0);
    }
    else
    {
        echo "Student Not Deleted";
        header("Location: inclub11.php");
        exit(0);
    }
}






?>