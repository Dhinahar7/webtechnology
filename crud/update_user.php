<?php
 include("conn.php");
$name  =  $_POST["name"];
$roll_no  =  $_POST["roll_no"];
$course  =  $_POST["course"];
$phone_no  =  $_POST["phone_no"];

//update  data  from  table
$sql = "
UPDATE  register SET
name='".$name."',
course='".$course."', phone_no=".$phone_no." WHERE  roll_no=".$roll_no." " ;

$res = $conn->query($sql);
 if($res  ==  TRUE)  {
echo  '<h1>"Record  updated  success"</h1>';
} else {
echo  '<h1>"Failed  to  update"</h1>';
}
?>
