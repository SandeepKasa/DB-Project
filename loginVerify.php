<?php
ob_start();
include_once("dblayer.php");
extract($_POST);
$db = new sql_db();
$userid=$_POST['user_id'];
$password=$_POST['user_passwd'];
echo $userid;
if($userid == null || $password == null)
{
	print "<font color='red'><center>Enter both username and password</center></font>";
	print "<META HTTP-EQUIV=\"Refresh\" CONTENT=\"2; URL=home.php\">";
}

else
{
	try 
	{ 
		$result=mysql_query("select user_id, passwd from user_registration");
	}
	catch (Exception $e){
		print $e->getMessage();
	};

	$flag=0;
	while($row=mysql_fetch_array($result))
	{
		if(($row['user_id']==$userid) and ($row['passwd']==md5($password)))
		{
	//		echo $row['passwd'];
			$flag=1;
			break;
		}
	}

	if($flag==0)
	{
		print "<font color='red'><center>wrong username or password</center></font>";
		print "<META HTTP-EQUIV=\"Refresh\" CONTENT=\"3; URL=home.php\">";
	}

	if($flag==1)
	{
		session_start();
		$db2=new sql_db();
		$sid=session_id();
		$_POST['sid']=$sid;
		$_SESSION['user_id']=$userid;
		$_SESSION['passwd']=md5($password);
		$_SESSION['sid']=$sid;
                $q=$db->sql_query("select firstlogin from user_registration where user_id='$userid'");
		$m=$db->sql_fetch_array();
		if($userid=='admin')
		{
			$_SESSION['user']='admin';
			header("Location: admin_homepage.php");
		}
		else if($m[0]=='1')
	        {
			$_SESSION['user']='firstuser';
			header("Location: initial_home.php");
		}
		else
		{
			$_SESSION['user']='normaluser';
                        if($m[0]=='2p')
			{
                          header("Location: patient_homepage.php");
			}
			if($m[0]=='2d')
			{
				header("Location:doctor_homepage.php");
			}
			if($m[0]=='2n')
			{
				header("Location:nurse_homepage.php");
			}
			if($m[0]=='2r')
			{
				header("Location:receptionist_homepage.php");
			}
		}

	}
}
ob_flush();
?>
