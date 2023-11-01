<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- <link rel="stylesheet" href="./stylee.css"> -->
    <title>Error Handlers</title>
    <style type="text/css">
    table,td,th{
        border:1px solid black;
    }
    table{
        border-collapse: collapse;
        width:100%;
        color:#588c7e;
        font-family:monospace;
        font-size:25px;
        text-align:left;
    }
    .back{
     border: none;
    background-color: none; 
    justify-content:center;
  }
  .back a{
    background-color: rgb(31, 62, 241) ;
    color: white;
    /* text-align:center; */
   padding: 10px 15px; 
   text-decoration: none;
  }
    </style>
</head>
<body>
<!-- <button class="back"> <a href="./adminhome.php">BACK</a> </button> -->

    <table>
        <tr>
    <th>  Name</th>

                    
          <th>Mail_Id</th> 
               
                
                    <th>Gender</th>
                 
                
                <th> Phone_no </th>
                    
                
                <th>Address</th>
                    <th>Land_mark</th>
                    
                
               
                
                    <!-- <th>Address</th> -->
                    
                <th> Date</th>
                
                    <th>Time</th>
                </tr>
               
                
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

// $servername="localhost";
// $username="root";
// $password="";
// $db="shop";
// $conn= new mysqli('localhost','root','','shop');
// if($conn->connect_error) 
// {
//     echo $conn->connect_error;
//     die("sorry Database not connecter");
// }
// else{
//     echo" conned";
// }

 $sql="SELECT name,mail_id,gender,phone_no,address,land_mark,date,time FROM `details`";
 $result = $co->query ($sql);
    // print_r($result);

 if($result->num_rows > 0) 
{
        while($row = $result-> fetch_assoc())
        {
             echo  "<tr><td>".$row["name"]. "</td><td>". $row["mail_id"]. "</td><td>".$row["gender"]. "</td><td>".$row["phone_no"]. "</td><td>".$row["address"]."</td><td>".$row["land_mark"]."</td><td>".$row["date"]."</td><td>".$row["time"]."</td></tr>" ;
            //  echo "<br>";
            
        }
        echo "</table>";
     }
     else{ "0 result";

     }
     $co-> close();
 ?>
  
 </table>
 <p style="text-align: center;">
 
  <button class="back"> <a href=" ./adminhome.php">BACK</a> </button> 
  <button class="back"> <a href=" ./booking.html">DELETE</a> </button>


    </p>
    <!-- f<button class="back"> <a href=" ./booking.html">DELETE</a> </button> -->
</body>
</html>