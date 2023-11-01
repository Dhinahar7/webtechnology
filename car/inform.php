<?php
include("co.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CAR RENTEL SYSTEM</title>
    <link rel="stylesheet" href="./inform.css">
</head>
<body>
    <div class="topic">
        
        <nav>
        <div id="head">
        <h1>CAR RENTAL</h1>
        </div>
            <ul>
                <li><a href="./car.php">View Cars</a></li>
                <!-- <li><a href="./order.php">order</a></li> -->
            </ul>
        </nav>
    </div>
    <div id="Aform">
        <h1>BOOKING</h1>
    </div>
           
    <div id="content">
        <form action="" method="POST">
            <table id="userdet"  >
                <tr>
                    <th>NAME</th>
                    <td><input type="text" name="name" id=""></td>
                </tr>
                
                
                <tr>
                    <th>MAIL_ID</th>
                    <td><input type="mailid" name="mail_id" id=""></td>
                </tr>
                <tr>
                    <th>GENDER</th>
                    <td><input type="radio" id="male" name="gender" value="male">
                    <label for="male">Male</label>
                    <input type="radio" id="female" name="gender" value="female">
                    <label for="male">Female</label></td>
                </tr>
                <tr>
                    <th>PHONE_NO</th>
                    <td><input type="text" name="phone_no" id=""></td>
                </tr>
                <tr>
                    <th>LAND_MARK</th>
                    <td><input type="text" name="land_mark" id=""></td>
                </tr>
                <tr>
                    <th>ADDRESS</th>
                    <td><textarea name="address" cols="40" rows="6"></textarea></td>
                </tr>
                <tr>
                    <th>DATE</th>
                    <td><input type="date" name="date" id=""></td>
                </tr>
                <tr>
                    <th>TIME</th>
                    <td><input type="time" name="time" id=""></td>
                </tr>
                <tr>
                <td colspan="2" align="center"><button id="btn" name="submit">Submit</button></td>
                </tr>
                <tr><td colspan="2" align="center">
                <!-- <button class="book"> <a href="./stationary.php">BACK</a> </button></td></tr> -->
            </table>
         </form>
    </div>

<?php

if(isset($_POST['submit']))
{

    
    $name = $_POST["name"];
    $mail_id = $_POST["mail_id"];
    $gender = $_POST["gender"];
    $phone_no = $_POST["phone_no"];
    $land_mark = $_POST["land_mark"];
    $address = $_POST["address"];
    $date = $_POST["date"];
    $time = $_POST["time"];
   





    $query = "insert into  details (name, mail_id,gender,phone_no,address,land_mark,date,time) values 
    ('".$name ."','".$mail_id."','".$gender."','".$phone_no."','".$address."','".$land_mark."','".$date."','".$time."')";
     
    $res = $co->query($query);
    if($res == TRUE) {
        echo '<h1> <center>"Booking successfull"</center></h1>';
        // echo '<h1> <center>"call or send mail in "</center></h1>';
        
        // echo '<h2><center>"click <a href="./login.php">here</a>to go to login page..."</center></h2>';
    } else {
        echo'<h1><center>"Failed to Apply"</center></h1>';
    }
    // echo "$query";
}

?>

</body>
</html>