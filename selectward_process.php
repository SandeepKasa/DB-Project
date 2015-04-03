<?php
//session_start();
include_once("dblayer.php");
include_once("functions.php");
$db=new sql_db();

extract($_POST);
extract($_GET);

$query="update wards set patient_id='$_SESSION[user_id]',extension='$_GET[ext]' where ward_id='$_GET[id]'";
$result=$db->sql_query($query);
echo "<h1> Successfully Assigned Ward</h1>";
print "<meta http-equiv=\"REFRESH\" content=\"2;url=index.php\">";
?>
