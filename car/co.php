<?php
$servername="localhost";
$username="root";
$password="";
$db="inform";
$co= new mysqli($servername,$username,$password,$db);
if($co->connect_error) 
{
    echo $co->connect_error;
    die("sorry Database not connecter");
}
?>
