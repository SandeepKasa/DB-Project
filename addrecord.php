<html >
<?php
include_once("dblayer.php");
include('functions.php');
$db=new sql_db();
?>
<head>
<title>Record Form</title>
<script type="text/javascript" language="JavaScript1.2">
function expert_Validate(theForm)
{
	var val0=document.theForm.idp.value;
	if(val0=="")
	{
		alert("Please select the Record no.");
		document.theForm.idp.focus();
		return false;
	}
	var val3=document.theForm.inf.value;
	if(val3=='')
	{
		var sol3=prompt("Please enter the Record Info",val3);
		document.theForm.inf.value=sol3;
		document.theForm.inf.focus();
		return false;
	}                 


}
</script>
</head>

<?php
/*if($_SESSION['mode'])
{
    echo "You are already registered";
	return; 
}
else if ($current_user_id=='Guest')
{
	echo "Acess Denied";
	return; 
}*/
?>
<center>
<div style="font-size : 20 ; font-color : black ; font-family : verdana"><h2>Record Form</h2></div>

<hr width=70% noshade>

<form name="theForm" action="addrecord_process.php" method="POST" enctype="multipart/form-data" onsubmit='return expert_Validate(theForm);'>
<table width=50% style="border-color : black ; border-style : groove ; border-width : medium" bgcolor="#F2F5A9">

<tr>
<td width=100% bgcolor="" valign="top">
<p>
<table width="500" border="0" align="center">
<tr><td width=150><font ><b>Record No.</b></font><font color='red'> * </font></td>
<td><input name="idp" type="text" size=25></td></tr>

<tr><td><font ><b>Select Receptionist Id</b></font><font color='red'>*</font></td>
<td><select name="pat">
<?php 
$db=new sql_db();
$san='None';
$san2='Receptionist';
$q=$db->sql_query("SELECT emp_id,type FROM employee");
while($m=$db->sql_fetch_array())
{
if($m[1]==$san2)
{
echo "<option value=$m[0]>$m[0]</option>" ;
}
}
echo "<option value=$san>$san</option>" ;
?>
<tr><td><font ><b>Select Patient Id</b></font><font color='red'>*</font></td
>
<td><select name="pat2">
<?php
$db=new sql_db();

$q=$db->sql_query("SELECT patient_id FROM patient");
while($m=$db->sql_fetch_array())
{
	echo "<option value=$m[0]>$m[0]</option>" ;
}
	echo "<option value=$san>$san</option>" ;
?>
<tr><td width=150><font ><b>Record_Info</b></font><font color='red'> *</
font></td>
<td><textarea name="inf" rows="3" columns="50" size=25>Enter text here...</textarea></td></tr>


 <br><tr><td><p align="center"> 
<input type="submit" name="Submit" value="submit"  onclick='return expert_Validate(theForm);'>
<input type="reset" name="Reset" value="reset">


</p></td></tr>

</td>
</tr>
</form>
</table>
<li>
<center><a href="index.php">Back to home</a></center>

<hr width=70% noshade>
</div>
</center>
</body>
</html>
