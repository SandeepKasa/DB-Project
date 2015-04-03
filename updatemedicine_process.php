<?php
//session_start();
include_once("dblayer.php");
include_once("functions.php");
$db=new sql_db();

extract($_POST);
extract($_GET);
$query="update medicines set price='$_POST[price]',description='$_POST[desc]',quantity='$_POST[quant]' where med_id='$_POST[idm]'";
$result=$db->sql_query($query);
echo "<h1> Successfully Updated Medicine</h1>";
print "<meta http-equiv=\"REFRESH\" content=\"2;url=index.php\">";
?>
