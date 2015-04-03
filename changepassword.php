<html>
<head>
<title>Change Password</title>
<link rel="stylesheet" type="text/css" href="styles.css" />
</head>
<script>
function validatePassword() {
	var currentPassword,newPassword,confirmPassword,output = true;

	currentPassword = document.frmChange.currentPassword;
	newPassword = document.frmChange.newPassword;
	confirmPassword = document.frmChange.confirmPassword;

	if(!currentPassword.value) {
		currentPassword.focus();
		document.getElementById("currentPassword").innerHTML = "required";
		output = false;
	}
	else if(!newPassword.value) {
		newPassword.focus();
		document.getElementById("newPassword").innerHTML = "required";
		output = false;
	}
	else if(!confirmPassword.value) {
		confirmPassword.focus();
		document.getElementById("confirmPassword").innerHTML = "required";
		output = false;
	}
	if(newPassword.value != confirmPassword.value) {
		newPassword.value="";
		confirmPassword.value="";
		newPassword.focus();
		document.getElementById("confirmPassword").innerHTML = "not same";
		output = false;
	} 	
	return output;
}
</script>
<style>
div {
padding: 40px 10px 0px;
height: 270px;
width : 400px;
	        margin-left: 7%;
		        margin-top: 3%;
			        margin-right: 5%;
background: none repeat scroll 0% 0% #FFF;
	                box-shadow: 0px 10px 20px 3px #D3D3D3;
}

</style>
<body>
<center>
<form name="frmChange" method="post" action="passwd.php" onSubmit="return validatePassword()">
<div class="message"><?php if(isset($message)) { echo $message; } ?>
<table border="0" cellpadding="10" cellspacing="0" width="500" align="center" class="tblSaveForm">
<tr class="tableheader">
<td colspan="2"><h2>Change Password!</h2></td>
</tr>
<tr>
<td width="40%"><label>Current Password</label></td>
<td width="60%"><input type="password" name="currentPassword" class="txtField"/><span id="currentPassword"  class="required"></span></td>
</tr>
<tr>
<td><label>New Password</label></td>
<td><input type="password" name="newPassword" class="txtField"/><span id="newPassword" class="required"></span></td>
</tr>
<td><label>Confirm Password</label></td>
<td><input type="password" name="confirmPassword" class="txtField"/><span id="confirmPassword" class="required"></span></td>
</tr>
<tr>
<td colspan="2"><input type="submit" name="submit" value="Submit" class="btnSubmit"></td>
</tr>
</table>
<a href="index.php">Back to home</a>
<h4></h4>

</div>
</form>
</body></html>
