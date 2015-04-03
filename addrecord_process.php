<?php
//session_start();
include_once("dblayer.php");
include_once("functions.php");
$db=new sql_db();

extract($_POST);
extract($_GET);

$val=chk_user9($_POST['idp']);
if($val=='0')
{ 
$query="insert into record(record_no,patient_id,emp_id,record_info) values('$_POST[idp]','$_POST[pat2]','$_POST[pat]','$_POST[inf]')";
$result=$db->sql_query($query);
echo "<h1> Successfully Stored Record</h1>";
print "<meta http-equiv=\"REFRESH\" content=\"2;url=index.php\">";
}
else
{
	echo "Record ALREADY EXISTS TRY REGISTERING A NEW Record";
        print "<meta http-equiv=\"REFRESH\" content=\"2;url=addrecord.php\">";
}
?>
