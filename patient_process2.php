<?php
include_once("dblayer.php");
include_once("functions.php");
$db=new sql_db();

extract($_POST);
extract($_GET);

$val=chk_user2($_POST['pat']);
$join = $_POST['Jday2'].'-'.$_POST['Jday1'].'-'.$_POST['Jday'];
$leav = $_POST['Lday2'].'-'.$_POST['Lday1'].'-'.$_POST['Lday'];
$phone= $_POST['Mphone'].'_'.$_POST['Mphone2'];
if($val=='0')
{ 
$query="insert into patient(patient_id,age,phone,name,sex,address,date_admitted,treatment_period,info) values('$_POST[pat]','$_POST[age]','$phone','$_POST[name]','$_POST[gender]','$_POST[add]','$join','$leav','$_POST[inf]')";
$result=$db->sql_query($query);
$query2="update user_registration set firstlogin='2p' where user_id='$_POST[pat]'";
$result2=$db->sql_query($query2);
echo "<h1> Successfully Registered as patient</h1>";
print "<meta http-equiv=\"REFRESH\" content=\"2;url=index.php\">";
}
else
{
	echo "USER ALREADY EXISTS TRY REGISTERING A NEW USER";
       print "<meta http-equiv=\"REFRESH\" content=\"2;url=addpatient2.php\">";
}
?>
