<?php
//session_start();
include_once("dblayer.php");
include_once("functions.php");
$db=new sql_db();

extract($_POST);
extract($_GET);

$val=chk_user6($_POST['idw']);
if($val=='0')
{ 
$query="insert into wards(ward_id,patient_id,type,price,extension,nurse_id) values('$_POST[idw]','$_POST[pat2]','$_POST[typ]','$_POST[price]','$_POST[ext]','$_POST[pat]')";
$result=$db->sql_query($query);
echo "<h1> Successfully Registered Ward</h1>";
print "<meta http-equiv=\"REFRESH\" content=\"2;url=index.php\">";
}
else
{
	echo "WARD ALREADY EXISTS TRY REGISTERING A NEW WARD";
       print "<meta http-equiv=\"REFRESH\" content=\"2;url=addward.php\">";
}
?>
