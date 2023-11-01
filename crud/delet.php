 <!-- Delete  form 
<!DOCTYPE  html>
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
<form  action="delet.php"  method="POST">
<h1>Registration  Form</h1>
<p>
<label  for="">Course:</label>
<input
type="text" name="course" class="instyle"
placeholder="enter  the  couse..."
/>
</p>
<button  class="btn">Delete</button> -->

<?php
include("conn.php");
$course  =  $_POST["course"];

//  delete  from  table

$query  =  "DELETE  from  register  where  course='$course'";
$res = $conn->query($query); if($res  ==  TRUE)  {
echo  '<h1>"  deleted successfully "</h1>';
} else {
echo  '<h1>"Failed  to  delete"</h1>';
}
?>



<!-- </form>
</div>
</body>
</html> -->
