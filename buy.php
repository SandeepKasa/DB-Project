<?php
include_once("dblayer.php");
include_once("functions.php");
$db=new sql_db();

extract($_POST);
extract($_GET);
$len=sizeof($_SESSION['mine']);
for($x=0;$x<$len;$x=$x+1)
{
	$_SESSION['mine'][$x]= (string)$_SESSION['mine'][$x];
}
 $new = serialize($_SESSION['mine']);
$query="update prescription set med_id='$new' where patient_id='$_SESSION[user_id]'";
 $result=$db->sql_query($query);
echo "<h1> Successfully bought the medicines</h1>";
print "<meta http-equiv=\"REFRESH\" content=\"2;url=index.php\">";
?>
