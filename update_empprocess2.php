<?php
//session_start();
include_once("dblayer.php");
include_once("functions.php");
$db=new sql_db();

extract($_POST);
extract($_GET);
$join = $_POST['Jday2'].'-'.$_POST['Jday1'].'-'.$_POST['Jday'];
$phone= $_POST['Mphone'].'_'.$_POST['Mphone2']; 
$query="update employee set emp_id = '$_POST[pat]',age = '$_POST[age]',phone = '$phone',name='$_POST[name]',sex='$_POST[gender]',address='$_POST[add]',salary='$_POST[salary]',date_joined='$join',qualification='$_POST[qual]',type='$_POST[typ]' where emp_id='$_POST[pat]'";
$result=$db->sql_query($query);
if($_POST['typ']=='Doctor')
{       
	$val=chk_user4($_POST['pat']);
	if($val=='0')
	{       
		$query="insert into doctor(emp_id) values('$_POST[pat]')";
		$result=$db->sql_query($query);
	}
}
if($_POST['typ']=='Nurse')
{
	 $query2="update user_registration set firstlogin='2n' where user_id='$_POST[pat]'";
	  $result2=$db->sql_query($query2);

}
else if($_POST['typ']=='Receptionist')
{
	 $query2="update user_registration set firstlogin='2r' where user_id='$_POST[pat]'";
	  $result2=$db->sql_query($query2);


}

echo "<h1> Successfully Updated</h1>";
print "<meta http-equiv=\"REFRESH\" content=\"2;url=index.php\">";
?>
