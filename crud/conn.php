<?php
$servername="localhost";
$username="root";
$password="";
$db="operation";
// create connection
$conn= new mysqli($servername,$username,$password,$db);
// check connection
if($conn->connect_error) 
{
    echo $conn->connect_error;
    die("sorry Database not connecter");
}
?>
<!-- */
<html>
<head>
<title> register</title>
</head>
<body>

<form action="conn.php" method="post">
<table border ="1px">
<tr><td>name</td><td><input type ="text" name="name"></td></tr>
<tr><td>roll_no</td><td><input type ="text" name="roll_no"></td></tr>
<tr><td>course</td><td><input type ="text" name="course"></td></tr>
<tr><td>phone_no</td><td><input type ="text" name="phone_no"></td></tr>
<tr>
    <td colspan='2' align="center">
        <input type ="insert" name="insert" value ="insert">
    </td>
</tr>

</table>
</form>
// 
//if(isset($_POST['insert']))
//{
  //  $name=$_POST['name'];
   // $name=$_POST['roll_no'];
    //$name=$_POST['course'];
   //$name=$_POST['phone_no'];
   //if( $ name!=""&&roll_no!="")
   //{
   //$sql="insert into  register (name,roll_no,course,phone_no) values ('$name',$roll_no,'$course',$phone_no)";
    //if($con->query ($sql))
    //{
     //   echo "DATA INSERT";
    //}
    //else{
    //    echo "insertdata fail";
   // }
//}
//else{
  //  echo"all feilds required";
//}
//}
//else{
  //  echo"please enter the all data";
//}
// -->

