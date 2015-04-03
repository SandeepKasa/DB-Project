<html >
<?php
include_once("dblayer.php");
include('functions.php');
//session_start();
$db=new sql_db();
?>
<head>
<title>Prescription Sending Form</title>
<script type="text/javascript" language="JavaScript1.2">
function expert_Validate(theForm)
{
	var val0=document.theForm.desc.value;
	if(val0=="")
	{
		 document.theForm.type.focus();
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
<div style="font-size : 20 ; font-color : black ; font-family : verdana"><h2>Prescription Form</h2></div>

<hr width=70% noshade>

<form name="theForm" action="addprescription_process.php" method="POST" enctype="multipart/form-data" onsubmit='return expert_Validate(theForm);'>
<table width=50% style="border-color : black ; border-style : groove ; border-width : medium" bgcolor="#F2F5A9">

<tr>
<td width=100% bgcolor="" valign="top">
<p>
<table width="500" border="0" align="center">
<tr><td width=150><font ><b>Prescription_Id</b></font><font color='red'>*</font></td>
<td><input name="ext" type="text" size=25></td>
</tr>
<tr><td><font ><b>Select Patient Id</b></font><font color='red'>*</font></td>
<td><select name="pat">
<?php
$db=new sql_db();

$q=$db->sql_query("SELECT patient_id FROM patient");
while($m=$db->sql_fetch_array())
{


		echo "<option value=$m[0]>$m[0]</option>" ;
	
}
?>
<tr><td><font ><b>Select medicine Id</b></font><font color='red'>*</font></td>
<td><select name="pat3">
<?php
$db=new sql_db();
$q=$db->sql_query("SELECT med_id FROM medicines");
while($m=$db->sql_fetch_array())
{

	echo "<option value=$m[0]>$m[0]</option>" ;

}
?>

<tr><td><font ><b>Doctor Id</b></font><font color='red'>*</font></td>
<td><select name="pat2">
<?php
$db=new sql_db();
echo "<option value=$_SESSION[user_id]>$_SESSION[user_id]</option>" ;

?>
<tr><td width=150><font ><b>Description</b></font><font color='red'> * </font></td>
  <td><textarea name="desc" rows="3" columns="50" size=25>Enter text here...</textarea></td></tr> 

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
