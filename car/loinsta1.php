<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./sta.css">
    <title>CAR RENTAL</title>
</head>

<body>
<button class="back"> <a href="./front.php">BACK</a> </button>
<!-- <button type="submit" name="signup">Sign Up</button>
<div id="container">
        <header>
            <div class="topnav">
                <a class="active" href="./front.php">Home</a>
                
                <!-- <a href="./order.php">order</a> -->
                <!-- <h1>  CAR RENTAL</h1> -->
           <!-- </header> -->
           <!-- <h1>  CAR RENTAL</h1> -->
</div>
     
    <fieldset id="login-form">
    <legend>Login Form</legend>
    <form action="loinsta2.php"method="POST">
        <table id="content">
            <?php

                    $name='';
                    // echo $_GET['password'];
                    if(isset($_GET['name']))
                    {
                    $name = $_GET['name'];
                    }
                    $password='';
                    // echo $_GET['password'];
                    if(isset($_GET['password']))
                    {
                    $password = $_GET['password'];
                    }
                
            ?>
                <tr><td><input type="text"name="name" value="<?php echo $name;?>" placeholder=" UserName."></td></tr>
                <tr><td><input type="password"name="password" value="<?php echo $password;?>" placeholder="Password."></td></tr>
                <tr><td align="center"><button type="submit" name="signup">Sign Up</button></td></tr>
                <tr>
                                <td><a class="reg"href="./loin.php">New User Registration</a></td>
                            </tr>
            </table>
        </form>
    </fieldset>
    <?php
        if(!isset($_GET['signup'])){
            exit();
        }
        else{
            $signupcheck = $_GET['signup'];
            if($signupcheck == "empty"){
                echo "<p class='error'>you are not fill all the fields...</p>";
                exit();
            }
            elseif($signupcheck=="password"){
                echo "<p class='error'>you are not fill the correct mail format...</p>";
                exit();
            }
            elseif($signupcheck=="success"){
                echo "<p class='success'>you successfully loged in...</p>";
                exit();
            }
        }
    ?>
    </body>
</html>
