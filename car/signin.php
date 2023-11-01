<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./stylee.css">
    <title>Error Handlers</title>
</head>
<body>

<?php

$dname="dhina";
$dpassword="vd77";

if(isset($_POST['signup']))
{
    $name = $_POST['name'];
    
    $password = $_POST['password'];

        if(empty($name) || empty($password)) {
            
            header("Location: ./home 1.php?signup=empty&password=$password&name=$name");
            exit();
        }
        
        
        
        else if($name==$dname and $password==$dpassword){
        header("Location: ./car.php");
         exit();
        }
    }
else
{
     header("Location: ./home 1.php");
     exit();
}
                            
?>
</body>
</html>

