<?php
//session_start();
include_once("dblayer.php");
include_once("functions.php");
$db=new sql_db();

extract($_POST);
extract($_GET);

$val=chk_user10($_POST['ide']);
if($val=='0')
{ 
$query="insert into equipment(prod_id,price,company,description,quantity) values('$_POST[ide]','$_POST[price]','$_POST[comp]','$_POST[desc]','$_POST[quant]')";
$result=$db->sql_query($query);
echo "<h1> Successfully added Equipment</h1>";
print "<meta http-equiv=\"REFRESH\" content=\"2;url=index.php\">";
}
else
{
	echo "EQUIOMENT ALREADY REGISTERED TRY REGISTERING A NEW EQUIPMENT";
        print "<meta http-equiv=\"REFRESH\" content=\"2;url=addequipment.php\">";
}
?>
