<?php
//session_start();
include_once("dblayer.php");
include_once("functions.php");
$db=new sql_db();

extract($_POST);
extract($_GET);

$val=chk_user8($_POST['ext']);
if($val=='0')
{ 
$query="insert into prescription(pres_id,patient_id,medicine_id,description,emp_id) values('$_POST[ext]','$_POST[pat]','$_POST[pat3]','$_POST[desc]','$_POST[pat2]')";
$result=$db->sql_query($query);
echo "<h1> Successfully Stored Prescription</h1>";
print "<meta http-equiv=\"REFRESH\" content=\"2;url=index.php\">";
}
else
{
	echo "PRESCRIPTION ALREADY EXISTS TRY REGISTERING A NEW PRESCRIPTION";
	if($_SESSION['user_id']=='admin')
	{
        print "<meta http-equiv=\"REFRESH\" content=\"2;url=addprescription.php\">";
	}
	else
	{
		 print "<meta http-equiv=\"REFRESH\" content=\"2;url=giveprescription.php\">";
		 
	}

}
?>
