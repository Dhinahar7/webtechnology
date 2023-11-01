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
    th {
        color:#588c7e;
    }
    table{
        border-collapse: collapse;
        width:100%;
        
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
    <th>User Name</th>

                    
          <th>Mail_Id</th> 
               
                
                    <th>Password</th>
                
                </tr>
               
                
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

 $sql="SELECT username,mailid,password FROM `log`";
 $result = $con->query ($sql);
    // print_r($result);

 if($result->num_rows > 0) 
{
        while($row = $result-> fetch_assoc())
        {
             echo  "<tr><td>".$row["username"]. "</td><td>". $row["mailid"]. "</td><td>".$row["password"]. "</td></tr>";
            //  echo "<br>";
            
        }
        echo "</table>";
     }
     else{ "0 result";

     }
     $con-> close();
 ?>
<p style="text-align:center;">
<button class="back"> <a href="./adminhome.php">BACK</a> </button>
<button class="back"> <a href=" ./admindetails.html">DELETE</a> </button>
    </p>
    <!-- <button class="back"> <a href=" ./admindetails.html">DELETE</a> </button> -->
 </table>
</body>
</html>