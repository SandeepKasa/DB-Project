<html >
<?php
include_once("dblayer.php");
include('functions.php');
$db=new sql_db();
$qi=$db->sql_query("SELECT * FROM wards where ward_id='$_GET[id]'");
$wari=$db->sql_fetch_array();
?>
<head>
<title>Ward Registration</title>
<script type="text/javascript" language="JavaScript1.2">
function expert_Validate(theForm)
{
	var val0=document.theForm.pat.value;
	if(val0=="")
	{
		alert("Please select the ward id");
		document.theForm.pat.focus();
		return false;
	}   
	var a = document.theForm.ext.value
	if (isNan(a)) { 
		alert("Please enter a valid extension"); 
		document.theForm.ext.focus(); 
		return false; 
	} 


	var val6=document.theForm.price.value;
	if(val6=="")
	{
		alert("Please select the price");
		document.theForm.price.focus();
		return false;
	}
	if (isNan(val6)) { 
		alert("Please enter a valid price"); 
		document.theForm.price.focus(); 
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
<div style="font-size : 20 ; font-color : black ; font-family : verdana"><h2>Ward Addition Form</h2></div>

<hr width=70% noshade>

<form name="theForm" action="updateward_process.php" method="POST" enctype="multipart/form-data" onsubmit='return expert_Validate(theForm);'>
<table width=50% style="border-color : black ; border-style : groove ; border-width : medium" bgcolor="#F2F5A9">

<tr>
<td width=100% bgcolor="" valign="top">
<p>
<table width="500" border="0" align="center">
<tr><td><font ><b>Ward Id</b></font><font color='red'>*</font></td>
<td><select name="idw">
<?php
$db=new sql_db();
$san='None';
$san2='Nurse';
$q=$db->sql_query("SELECT ward_id,patient_id FROM wards");
while($m1=$db->sql_fetch_array())
{
	if($m1[0]==$_GET['id'])
	{
		echo "<option value=$m1[0]>$m1[0]</option>" ;
		break;
	}
}
?>

<tr><td><font ><b>Select Nurse Id</b></font><font color='red'>*</font></td>
<td><select name="pat">
<?php 
$db=new sql_db();
$san='None';
$san2='Nurse';
$q=$db->sql_query("SELECT emp_id,type FROM employee");
echo "<option value=''>Select one</option>" ;
while($m=$db->sql_fetch_array())
{
if($m[1]==$san2)
{
echo "<option value=$m[0]>$m[0]</option>" ;
}
}
?>
<tr><td><font ><b>Select Patient Id</b></font><font color='red'>*</font></td
>
<td><select name="pat2">
<?php
$db=new sql_db();
echo "<option value=''>Select one</option>" ;
echo "<option value=$m1[1]>$m1[1]</option>" ;
$q=$db->sql_query("SELECT patient_id FROM patient");
while($m=$db->sql_fetch_array())
{
        $val=chk_user5($m[0]);
	if(!$val>=1)
	{
	echo "<option value=$m[0]>$m[0]</option>" ;
	}
}
?>

<tr><td width=150><font ><b>Price</b></font><font color='red'> * </font></td>
<td><input name="price" type="text" value="<?php echo "$wari[price]"?>" size=25></td>
</tr>
<tr><td width=150><font ><b>Extension(in days)</b></font><font color='red'>*</font></td>
<td><input name="ext" type="text" value="<?php echo "$wari[extension]"?>"size=25></td>
</tr>
 <tr><td><font ><b>Type</b></font><font color='red'>*</font></td>
 <td><select name="typ">
 <?php
 echo "<option value='General'>General</option>" ;
 echo "<option value='Emergency'>Emergency</option>" ;
 echo "<option value='Special'>Special</option>"
 ;
 echo "<option value='Other'>Other</option>" ;
 ?>
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
