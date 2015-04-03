<?php
include_once("dblayer.php");
include_once("functions.php");
$db=new sql_db();

extract($_POST);
extract($_GET);

$val=chk_user3($_POST['pat']);
$join = $_POST['Jday2'].'-'.$_POST['Jday1'].'-'.$_POST['Jday'];
$phone= $_POST['Mphone'].'_'.$_POST['Mphone2'];
if($val=='0')
{ 
$query="insert into employee(emp_id,age,phone,name,sex,address,salary,date_joined,qualification,type) values('$_POST[pat]','$_POST[age]','$phone','$_POST[name]','$_POST[gender]','$_POST[add]','$_POST[salary]','$join','$_POST[qual]','$_POST[typ]')";
$result=$db->sql_query($query);
if($_POST['typ']=='Doctor')
{
	$val=chk_user4($_POST['pat']);
	if($val=='0')
	{
	$query="insert into doctor(emp_id) values('$_POST[pat]')";
	$result=$db->sql_query($query);
	$query2="update user_registration set firstlogin='2d' where user_id='$_SESSION[user_id]'";
	$result2=$db->sql_query($query2);
        }
}
else if($_POST['typ']=='Nurse')
{
	$query3="update user_registration set firstlogin='2n' where user_id='$_SESSION[user_id]'";
	$result3=$db->sql_query($query3);

}
else if($_POST['typ']=='Receptionist')
{
	$query3="update user_registration set firstlogin='2r' where user_id='$_SESSION[user_id]'";
	$result3=$db->sql_query($query3);

}

echo "<h1> Successfully Registered as '$_POST[typ]'</h1>";
print "<meta http-equiv=\"REFRESH\" content=\"2;url=index.php\">";
}
else
{
	echo "USER ALREADY EXISTS TRY REGISTERING A NEW USER";
      print "<meta http-equiv=\"REFRESH\" content=\"2;url=addemployee2.php\">";
}
?>
