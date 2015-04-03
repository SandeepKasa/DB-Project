<?php
//session_start();
include_once("dblayer.php");
include_once("functions.php");
$db=new sql_db();

extract($_POST);
extract($_GET);

$query="update wards set patient_id='$_POST[pat2]',type='$_POST[typ]',price='$_POST[price]',extension='$_POST[ext]',nurse_id='$_POST[pat]' where ward_id='$_POST[idw]'";
$result=$db->sql_query($query);
echo "<h1> Successfully Updated Ward</h1>";
print "<meta http-equiv=\"REFRESH\" content=\"2;url=index.php\">";
?>
