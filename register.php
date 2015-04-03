<html>
<h1><center> Register Page </center></h1>
<title>Register Page</title>
<style>
/*div{ 
background-color: lightgrey;
width: 450px;
padding: 25px;
border: 25px ;
margin: 25px;
}*/
div {
padding: 40px 10px 0px;
height: 200px;
width : 350px;
	margin-left: 7%;
	margin-top: 3%;
	margin-right: 5%;
background: none repeat scroll 0% 0% #FFF;
	    box-shadow: 0px 10px 20px 3px #D3D3D3;
}

</style>
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
	if(name1!=name2)
	{
		alert("please check password and conform password are not matched");
		document.theForm.passwd.focus();
		return false;
	}
}

</script>

<body>
<center>
<div id="complete_page" class="col-md-12">
<form  action="adduser.php" method="POST" >
<table border=0>
<tr>
<td>Login Name:<font color='red'> * </font></td>
<td><input type="text" name="user_id"></td>
</tr>
<tr>
<td>Password:<font color='red'> * </font></td>
<td><input type="password" name="passwd"></td>
</tr>
<tr>
<td>Confirm Password:<font color='red'> * </font></td>
<td><input type="password" name="passwd2"></td>
</tr>
<tr>
<td><input type="reset" name="reset" value="reset"></td>
<td><input type="submit" name="submit" value="register"></td>
</tr>
</table>
</form>
<li>
<center><a href="index.php">Back to home</a></center>
</div>
</center>
</body>
</html>

