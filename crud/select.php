<?php include("conn.php");


$sql="select  *  from  register";
$res=$conn->query($sql);
?>

<!DOCTYPE  html>
<html lang="en">
<head>
<style>
body{
background-color:black;
}
table {
margin:  0  auto; font-size:  large;
border:  2px  solid  black;
}

h1 {
text-align:  center; color:blue; font-size:  40px;
font-family:  'Gill  Sans',  'Gill  Sans  MT', '  Calibri',  'Trebuchet  MS',  'sans-serif';
}

td {
background-color:  white; border:  10px  solid  black;
 
}
th{
    color:	black; font-size:30px;
background-color:  white;
}
 
th,td {
font-weight: italic ; border:  1px  solid  black; padding:  15px;
text-align:  center;
}
td {
font-weight:  lighter;
}
</style>
</head>
<body>
<section>
<h1>REGISTER TABLE</h1>
<!--  TABLE  CONSTRUCTION-->
<table>
<tr>
<th>name</th>
<th>$roll_no</th>
<th>course</th>
<th>phone_no</th>
</tr>

<?php
while($row=$res->fetch_assoc())
{
?>

</td>
 
<tr>
<td><?php  echo  $row['name'];?></td>
<td><?php  echo  $row['roll_no'];?></td>
<td><?php  echo  $row['course'];?></td>
<td><?php  echo  $row['phone_no'];?></td>
<td><a  href="./update.php?roll_no=<?php  echo  $row['roll_no'];?>">update</a>

</tr>
 

<?php
}
?>
</table>
</section>
</body>
</html>
 

