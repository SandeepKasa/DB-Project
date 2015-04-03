<?php
//session_start();
include_once("dblayer.php");
include_once("functions.php");
$db=new sql_db();

extract($_POST);
extract($_GET); 
$query="update prescription set patient_id='$_POST[pat2]',medicine_id='$_POST[med]',description='$_POST[desc]',emp_id='$_POST[pat]' where pres_id='$_POST[idp]'";
$result=$db->sql_query($query);
echo "<h1> Successfully Updated Prescription</h1>";
print "<meta http-equiv=\"REFRESH\" content=\"2;url=index.php\">";

?>
