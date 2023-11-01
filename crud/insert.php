<!-- <!DOCTYPE  html>
<html lang="en">
<head>
<meta  charset="UTF-8"  />
<meta  http-equiv="X-UA-Compatible"  content="IE=edge"  />
<meta  name="viewport"  content="width=device-width,  initial-scale=1.0"  />
<title>Registration  Form</title>
<link  rel="stylesheet"  href="./style.css"  />
</head>
<body>
<div  class="form">
<form  action="insert.php"  method="POST">
<h1>Registration  Form</h1>
<p>
<label  for="">Name:</label>
<input
type="text" name="name" class="instyle"
placeholder="enter  the  name..."
/>
</p>
<p>
<label  for="">Roll_No:</label>
<input
type="text" name="roll_no" class="instyle"
placeholder="enter  the  rollno..."
/>
</p>
<p>
<label  for="">Course:</label>
<input
type="text" name="course" class="instyle"
placeholder="enter  the  course..."
/>
</p>
<p>
<label  for="">Phone No:</label>
<input
type="text" name="phone_no" class="instyle"
placeholder="enter  the  mobileNo..."
/>
</p>
<button  class="btn">Insert</button> -->
<?php

include("conn.php");
$name  =  $_POST["name"];
$roll_no  =  $_POST["roll_no"];
$course  =  $_POST["course"];
$phone_no =  $_POST["phone_no"];

//insert  data  into  table
$query  =  "insert  into  register  (name,  roll_no,  course,phone_no)  values  ('".$name  ."',  '".$roll_no."',  '".$course."','".$phone_no."')";
$res = $conn->query($query); if($res  ==  TRUE)  {
echo  '<h1>"  Inserted  successful"</h1>';
} else {
echo  '<h1>"Failed  to  Insert"</h1>';
}

?>

<!-- 
</form>
</div>
</body>
</html> -->
