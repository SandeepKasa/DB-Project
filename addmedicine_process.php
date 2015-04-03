<?php
//session_start();
include_once("dblayer.php");
include_once("functions.php");
$db=new sql_db();

extract($_POST);
extract($_GET);

$val=chk_user7($_POST['idm']);
if($val=='0')
{ 
$query="insert into medicines(med_id,price,description,quantity) values('$_POST[idm]','$_POST[price]','$_POST[desc]','$_POST[quant]')";
$result=$db->sql_query($query);
echo "<h1> Successfully Registered Medicine</h1>";
print "<meta http-equiv=\"REFRESH\" content=\"2;url=index.php\">";
}
else
{
	echo "MEDICINE ALREADY EXISTS TRY REGISTERING A NEW MEDICINE";
       print "<meta http-equiv=\"REFRESH\" content=\"2;url=addmedicine.php\">";
}
?>
