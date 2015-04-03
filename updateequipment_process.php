<?php
//session_start();
include_once("dblayer.php");
include_once("functions.php");
$db=new sql_db();

extract($_POST);
extract($_GET);
 
$query="update equipment set prod_id='$_POST[eq]',price='$_POST[price]',company='$_POST[comp]',description='$_POST[desc]',quantity='$_POST[quant]' where prod_id='$_POST[eq]'";
$result=$db->sql_query($query);
echo "<h1> Successfully Updated Equipment</h1>";
print "<meta http-equiv=\"REFRESH\" content=\"2;url=index.php\">";
?>
