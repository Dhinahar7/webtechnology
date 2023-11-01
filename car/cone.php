<?php
$servername="localhost";
$username="root";
$password="";
$db="loin";
$con= new mysqli($servername,$username,$password,$db);
if($con->connect_error) 
{
    echo $con->connect_error;
    die("sorry Database not connecter");
}
?>