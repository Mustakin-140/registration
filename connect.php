<?php
$hostname='localhost';
$username='root';
$password='';
$database='signup';

$con=mysqli_connect($hostname,$username,$password,$database);

if(!$con)
{
    die(mysqli_error($con));
   // echo "Successfully connected to the database";
}

?>