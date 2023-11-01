<?php include("conn.php");

?>


<!DOCTYPE  html>
<html lang="en">
<head>
</head>
<body>
<div  class="form">

<?php
$sql  =  "SELECT  *  from  register  where  roll_no  =  ".$_GET['roll_no']."";
$res  =  mysqli_query($conn,$sql);
$row=mysqli_fetch_assoc($res);
?>
<form  action="update_user.php"  method="POST">
<h1>Update Form</h1>
<p>
<label  for="">Name:</label>
<input
type="text" name="name" class="instyle"
placeholder="" value="<?php  echo  $row['name']  ?>"
/>
</p>
<p>
<label  for="">roll_no:</label>
<input
type="text" name="roll_no" class="instyle"
placeholder="" value="<?php  echo  $row['roll_no']  ?>"
/>
</p>
<p>
<label  for="">course:</label>
<input
type="text" name="course" class="instyle"
placeholder="" value="<?php  echo  $row['course']  ?>"
/>
</p>
<p>
<label  for="">phone  No:</label>
<input
type="text" name="phone_no" class="instyle"
placeholder="" value="<?php  echo  $row['phone_no']  ?>"
/>
</p>
<button  class="btn">update</button> 
</form>
 </div>
</body>
</html> 
