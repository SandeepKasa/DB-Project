<?php
session_start();
include("dblayer.php");
extract($_POST);
$cpass=$_POST['currentPassword'];
$pass=$_POST['newPassword'];
$pass2=$_POST['confirmPassword'];
$cpass=md5($cpass);
$pass=md5($pass);
$pass2=md5($pass2);
$db=new sql_db();
if($cpass==$_SESSION['passwd'])
{
	if($pass==$pass2)
	{
		$query="update user_registration set passwd='$pass'";
		if($db->sql_query($query))
		{
			$_SESSION['passwd']=$pass;
			echo "<h2>You have successfully updated password</h2>";
			print "<meta http-equiv=\"REFRESH\" content=\"2;url=index.php\">";
		}
		else
		{
			echo "<h2>Update failed, please update again.</h2>";
			print "<meta http-equiv=\"REFRESH\" content=\"2;url=changepassword.php\">";
		}
	}
	else
	{
		echo "<h3>Passwords don't match, please update again.</h3>";
		print "<meta http-equiv=\"REFRESH\" content=\"2;url=changepassword.php\">";
	}
}
else
{
	echo "<h3><font color='red'>Renter the current password</font></h3>";
	print "<meta http-equiv=\"REFRESH\" content=\"2;url=changepassword.php\">";
} 
?>
