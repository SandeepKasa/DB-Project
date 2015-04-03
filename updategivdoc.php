<html >
<?php
include_once("dblayer.php");
include("functions.php");
$db=new sql_db();
$qi=$db->sql_query("SELECT * FROM doctor where emp_id ='$_GET[id]'");
$di=$db->sql_fetch_array();
?>
<head>
<title>Doctor Form</title>
<script type="text/javascript" language="JavaScript1.2">
function expert_Validate(theForm)
{
	var val0=document.theForm.speci.value;
	if(val0=="")
	{
		alert("Please select the speci of user");
		document.theForm.speci.focus();
		return False;
	}
}
</script>
</head>
<center>
<div style="font-size : 20 ; font-color : black ; font-family : verdana"><h2>Doctor Registration Form</h2></div>

<hr width=70% noshade>

<form name="theForm" action="update_docprocess.php" method="POST" enctype="multipart/form-data" onsubmit='return expert_Validate(theForm);'>
<table width=50% style="border-color : black ; border-style : groove ; border-width : medium" bgcolor="#F2F5A9">

<tr>
<td width=100% bgcolor="" valign="top">
<p>
<table width="500" border="0" align="center">
<tr><td><font ><b>Select Doctor Id</b></font><font color='red'>*</font></td>
<td><select name="pat">
<?php 
$db=new sql_db();

$q=$db->sql_query("SELECT emp_id FROM doctor");
while($m=$db->sql_fetch_array())
{
	if($m[0]==$_GET['id'])
	{
	echo "<option value=$m[0]>$m[0]</option>" ;
	break;
	}
}
?>
</td></tr>
<tr><td width=150><font ><b>Specialization</b></font><font color='red'> * </font></td>
<td><input name="speci" value="<?php echo $di['specialization'] ?>" type="text"  size=25></td>
</tr>
<tr><td><font ><b>Select Reference Doctor</b></font><font color='red'>*</font></td>
<td><select name="pat2">
<?php
$db=new sql_db();
$tem='None';
$q=$db->sql_query("SELECT emp_id FROM doctor");
while($m=$db->sql_fetch_array())
{
	        if(!($m[0]==$_GET['id']))
		{
		echo "<option value=$m[0]>$m[0]</option>" ;
		}
	
}
echo "<option value=$tem>$tem</option>" ;
?>


</td>
</tr>
<tr><td><font ><b>Type of Doctor</b></font><font color='red'>*</font></td>
<td><select name="typ" value="<?php echo "$di[type]" ?>">
<option value="Permanent">Permanent</option>
<option value="Visiting">Visiting</option>
<option value="Trainee">Trainee</option>
</select>
</td></tr>

  <br><tr><td><p align="center">
  <input type="submit" name="Submit" value="submit"  onclick='return expert_Va
  lidate(theForm);'>
  <input type="reset" name="Reset" value="reset">

</form>
</table>
<li>
<center><a href="index.php">Back to home</a></center>

<hr width=70% noshade>
</div>
</center>
</body>
</html>
