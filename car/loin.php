<?php
include("cone.php");
?>
 
 <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Car Rental System</title>
    <link rel="stylesheet" href="./inform.css">
</head>
<body>
    <div class="topic">
        
        <nav>
        <div id="head">
        <h1>CAR RENTAL</h1>
        </div>
            <ul>
                <li><a href="./front.php">HOME</a></li>
                <li><a href="./signin.php">SIGNIN PAGE</a></li>
            </ul>
        </nav>
    </div>
    <div id="Aform">
        <h1>New user register Form</h1>
    </div>
           
    <div id="content">
        <form action="" method="POST">
            <table id="userdet"  >
                <tr style="height">
                    <th> User Name</th>
                    <td><input type="text" name="username" id=""></td>
                </tr>
                
                
                <tr>
                    <th>MailId</th>
                    <td><input type="mailid" name="mailid" id=""></td>
                </tr>
               
                <tr>
                    <th>Password</th>
                    <td><input type="text" name="password" id=""></td>
                </tr>
                
                <tr>
                <td colspan="2" align="center"><button id="btn" name="submit">Submit</button></td>
                </tr>
                
            </table>
         </form>
    </div>

<?php

if(isset($_POST['submit']))
{

    
    $username = $_POST["username"];
    $mailid = $_POST["mailid"];
    $password = $_POST["password"];
    


    $query = "insert into  log (username, mailid,password) values ('".$username ."','".$mailid."','".$password."')";
     
    $res = $con->query($query);
    if($res == TRUE) {
        echo '<h1> <center>"Create successfull"</center></h1>';
        
        // echo '<h2><center>"click <a href="./login.php">here</a>to go to login page..."</center></h2>';
    } else {
        echo'<h1><center>"Failed to Apply"</center></h1>';
    }
     //echo "$query";
}

?>

</body>
</html>