<?php
include_once("dblayer.php");
extract($_GET);
extract($_POST);
session_start();
include("functions.php");
$user_id=$_SESSION['user'];
$kavali=$_SESSION['user_id'];
$db2=new sql_db();
//echo $user_id;
 $q=$db2->sql_query("SELECT firstlogin FROM user_registration where user_id='$kavali'");
  $m=$db2->sql_fetch_array();

if (!isset($_SESSION['user']))
{

	header ("Location: home.php");

}
else if($user_id=='admin')
{
	header("Location: admin_homepage.php");
}
else if($m[0]=='1')
{
	header("Location: initial_home.php");

}
else
{
		if($m[0]=='2p')
		{
			header("Location: patient_homepage.php");

		}
		else if($m[0]=='2d')
		{
			  header("Location:doctor_homepage.php");
		}
		else if($m[0]=='2n')
		{
                            header("Location:nurse_homepage.php");
		}
		else if($m[0]=='2r')
		{
			    header("Location:receptionist_homepage.php");
		}

    
}
