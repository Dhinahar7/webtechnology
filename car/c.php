<?php

$servername="localhost";
$username="root";
$password="";
$db="loin";
$con= new mysqli($servername,$username,$password,$db);
if($con->connect_error) 
{
    echo $co->connect_error;
    die("sorry Database not connecter");
}