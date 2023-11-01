<?php
include("co.php");
$date  =  $_POST["date"];

//  delete  from  table

$query  =  "DELETE  from  details  where  date='$date'";
$res = $co->query($query); if($res  ==  TRUE)  {
echo  '<h1>"  deleted successfully "</h1>';
} else {
echo  '<h1>"Failed  to  delete"</h1>';
}
?>
<button class="back"> <a href=" ./admin.php">BACK</a> </button>