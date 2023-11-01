<?php
$servername="localhost";
$username="root";
$password="";
$db="stationary";
$conn= new mysqli($servername,$username,$password,$db);
if($conn->connect_error) 
{
    echo $conn->connect_error;
    die("sorry Database not connecter");
}
?>
