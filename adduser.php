<?php
include("dblayer.php");
extract($_POST);
$user=$_POST['user_id'];
$pass=$_POST['passwd'];
$pass2=$_POST['passwd2'];
$pass=md5($pass);
$pass2=md5($pass2);
$db=new sql_db();
include_once ('functions.php');
$val=chk_user($user);
if($val=='0')
{
	if($pass==$pass2)
	{
		$query="insert into user_registration(user_id, passwd,firstlogin) values('$user','$pass','1')";
		if($db->sql_query($query))
		{
			echo "<h2>You have successfully registered</h2>";
			print "<meta http-equiv=\"REFRESH\" content=\"2;url=index.php\">";
		}
		else
		{
			echo "<h2>Registration failed, please register again.</h2>";
			print "<meta http-equiv=\"REFRESH\" content=\"2;url=register.php\">";
		}
	}
	else
	{
		echo "<h3>Passwords don't match, please register again.</h3>";
		print "<meta http-equiv=\"REFRESH\" content=\"2;url=register.php\">";
	}
}
else
{
	echo "<h3><font color='red'>user already exists. Please try with another userid</font></h3>";
	print "<meta http-equiv=\"REFRESH\" content=\"2;url=register.php\">";
} 
?>
