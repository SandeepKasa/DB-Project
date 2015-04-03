<?php
include('dblayer.php');
session_start();
$_SESSION['mine']= array();
?>
<html>
<title>Login Page</title>
<style>
body{
background-color:#00000;
}
/*div {
	background-color: lightgrey;
width: 400px;
padding: 25px;
border: 25px ;
margin: 25px;
}*/
div {
padding: 40px 10px 0px;
height: 200px;
width : 350px;
	margin-left: 5%;
	margin-top: 3%;
	margin-right: 5%;
background: none repeat scroll 0% 0% ;
	    box-shadow: 0px 4px 4px 3px #D3D3D3;
}
</style>
<h1><center><u>Continental Hospitals</u></center></h1>
<script>
function validate_login()
{
	var name=document.theForm.user_id.value;
	if(name=='')
	{
		alert("please enter the login name");
		document.theForm.user_id.focus();
		return false;
	}

	var name1=document.theForm.passwd.value;
	if(name1=='')
	{
		alert("please enter the password");
		document.theForm.passwd.focus();
		return false;
	}

	var name2=document.theForm.passwd2.value;
	if(name2=='')
	{
		alert("please enter confirm password");
		document.theForm.passwd2.focus();
		return false;
	}
}

</script>
<center>
<div id="complete_page" class="col-md-12">
<form id="form1" name="form1" action="loginVerify.php" method="post">
<table border="0" cellspacing="5" cellpadding="5">
<tr>
<td>User : </td>
<td><input name="user_id" type="text" id="user_id" /></td>
</tr>
<tr>
<td>Password : </td>
<td><input name="user_passwd" type="password" id="user_passwd" /></td>
</tr>
<tr>
<td><input name="Reset" type="reset" id="Reset" value="Reset" /></td>
<td><input name="Login" type="submit" id="Login" value="Login" />&nbsp;&nbsp;&nbsp;<a href='register.php'> <font color="red"> New User
</font></a></td>
</tr>
</table>
</form> 
</center>
</div>
</html>


