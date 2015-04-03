<html >
<?php
include_once("dblayer.php");
include("functions.php");
$db=new sql_db();
if(isset($_SESSION['user']))
{
	?>

<head>
<title>Employee Registration</title>
<script type="text/javascript" language="JavaScript1.2">
function expert_Validate(theForm)
{
	var val0=document.theForm.name.value;
	if(val0=="")
	{
		alert("Please select the name of user");
		document.theForm.name.focus();
		return false;
	}
	var val=document.theForm.age.value;
	if(val=='')
	{
		var sol=prompt("Please enter the age",val);
		document.theForm.age.value=sol;
		document.theForm.age.focus();
		return false;
	}
	var val3=document.theForm.add.value;
	if(val3=='')
	{
		var sol3=prompt("Please enter the Address",val3);
		document.theForm.add.value=sol3;
		document.theForm.add.focus();
		return false;
	}                
	var re10digit=/^\d{10}$/; 
	if (document.theForm.Mphone.value.search(re10digit)==-1) { 
		alert("Please enter a valid 10 digit phone number"); 
		document.theForm.Mphone.focus(); 
		return false; 
	} 

        var sal=document.theForm.salary.value;
	if(isNaN(sal))
	{
		alert("Please enter valid salary");
		document.theForm.salary.focus();
		return false;
	}
	var val6=document.theForm.gender.value;
	if(val6=="")
	{
		alert("Please select the gender");
		document.theForm.gender.focus();
		return false;
	}
	var val7=document.theForm.qual.value;
	if(val7=="")
	{
		alert("Please select the Info");
		document.theForm.qual.focus();
		return false;
	}
}
</script>
</head>
<center>
<div style="font-size : 20 ; font-color : black ; font-family : verdana"><h2>Employee Registration Form</h2></div>

<hr width=70% noshade>

<form name="theForm" action="employee_process2.php" method="POST" enctype="multipart/form-data" onsubmit='return expert_Validate(theForm);'>
<table width=50% style="border-color : black ; border-style : groove ; border-width : medium" bgcolor="#F2F5A9">

<tr>
<td width=100% bgcolor="" valign="top">
<p>
<table width="500" border="0" align="center">
<tr><td width=150><font ><b>Name</b></font><font color='red'> * </font></td>
<td><input name="name" type="text"  size=25></td></tr>

<tr><td width=150><font ><b>Age</b></font><font color='red'> * </font></td>
<td><input name="age" type="text"  size=25></td></tr> 

<tr><td name='pat'><font ><b>Employee Id</b></font><font color='red'>*</font></td>
<td><select name='pat'>
<?php 
	echo "<option value='$_SESSION[user_id]'>$_SESSION[user_id]</option>" ;

?>

<tr><td width=150><font ><b>Address</b></font><font color='red'> * </font></td>
<td><textarea name="add" rows="3" columns="50" size=25>Enter text here...</textarea></td></tr>


<p><tr><td><font ><b>Date of Joining</b></font><font color='red'> * </font></td>
<td><select name="Jday" id="Jday" size="1">-->

<?php
for ($counter =1; $counter <= 31; $counter += 1)
{
	if($counter==date('d'))
		echo "<option selected>".$counter."</option>";
	else
		echo "<option>".$counter."</option>";
			
}
echo "</select>";
?>

<select name="Jday1" id="Jday1" size="1">

<?php
for ($counter =1; $counter <= 12; $counter += 1)
{
	if($counter==date('m'))
		echo "<option selected>".$counter."</option>";
	else
		echo "<option>".$counter."</option>";
			
}
echo "</select>";
?>

<select name="Jday2" id="day" size="1">
<option >2011</option>
<option selected ><?php echo date("Y")?></option>
<?php
for ($counter = date("Y")+1; $counter <= 2016; $counter += 1) {
	echo "<option>".$counter."</option>";
}
echo "</select>";
?>
</td></tr></p>
<tr><td width=150><font ><b>Mobile phone</b></font><font color='red'> * </font></td>
<td><input name="Mphone" type="text"  size=25></td>
</tr>
<tr><td width=150><font ><b>Mobile phone 2</b></font><font color='red'></font></td>
<td><input name="Mphone2" type="text" size=25></td>
</tr>

<tr><td width=150><font ><b>Salary</b></font><font color='red'> * </font></td>
<td><input name="salary" type="text"  size=25></td></tr>

<tr><td><font color><b>Gender</b></font><font color='red'> * </font></td>
   <td><select name="gender" id="gender"><option value="" selected>select</option>
  <option value='M'>M</option>
  <option value='F'>F</option> </td> </tr>

 <tr><td width=150><font ><b>Qualification</b></font><font color='red'> * </font></td>
 <td><textarea name="qual" rows="3" columns="50" size=25>Enter text here...</textarea></td></tr>


 <tr><td><font ><b>Type</b></font><font color='red'>*</font></td>
 <td><select name="typ">
 <?php
	        echo "<option value='Doctor'>Doctor</option>" ;
		 echo "<option value='Nurse'>Nurse</option>" ;
		  echo "<option value='Receptionist'>Receptionist</option>" ;
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
<?php
}
else
{
	?>
		<h2> You are not logged in </h2>
		<?php
		print "<meta http-equiv=\"REFRESH\" content=\"2;url=index.php\">";
}
?>




