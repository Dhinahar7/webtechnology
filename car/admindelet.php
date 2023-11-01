<?php
include("c.php");
$username  =  $_POST["username"];

//  delete  from  table

$query  =  "DELETE  from  `log`  where  username='$username'";
$res = $con->query($query); if($res  ==  TRUE)  {
echo  '<h1>"  deleted successfully "</h1>';
} else {
echo  '<h1>"Failed  to  delete"</h1>';
}
?>
<button class="back"> <a href=" ./admin.php">BACK</a> </button>