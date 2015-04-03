<?php
//session_start();
include_once("dblayer.php");
include_once("functions.php");
$db=new sql_db();

extract($_POST);
extract($_GET); 
$query="update record set record_no='$_POST[idr]',patient_id='$_POST[pat2]',emp_id='$_POST[pat]',record_info='$_POST[inf]' where record_no='$_POST[idr]'";
$result=$db->sql_query($query);
echo "<h1> Successfully Updated Record</h1>";
print "<meta http-equiv=\"REFRESH\" content=\"2;url=index.php\">";

?>
