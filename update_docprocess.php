<?php
//session_start();
include_once("dblayer.php");
include_once("functions.php");
$db=new sql_db();

extract($_POST);
extract($_GET);
$query="update doctor set emp_id = '$_POST[pat]',specialization = '$_POST[speci]',ref_id='$_POST[pat2]',type='$_POST[typ]' where emp_id='$_POST[pat]'";
$result=$db->sql_query($query);
echo "<h1> Successfully Updated</h1>";
print "<meta http-equiv=\"REFRESH\" content=\"2;url=index.php\">";
?>
