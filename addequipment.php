<html >
<?php
include_once("dblayer.php");
include('functions.php');
$db=new sql_db();
?>
<head>
<title>Equipment Form</title>
<script type="text/javascript" language="JavaScript1.2">
function expert_Validate(theForm)
{
	var val0=document.theForm.ide.value;
	if(val0=="")
	{
		alert("Please select the prescription Id");
		document.theForm.idp.focus();
		return false;
	}
	var val3=document.theForm.desc.value;
	if(val3=='')
	{
		alert("Please enter the description");
		document.theForm.desc.value=sol3;
		document.theForm.desc.focus();
		return false;
	}                 
	var val4=document.theForm.comp.value;
	if(val4=='')
	{
		alert("Please enter the company");
		document.theForm.comp.focus();
		return false;
	}
	var val6=document.theForm.quant.value;
	if(val6=='')
	{
		        alert("Please enter the quantity");
			        document.theForm.quant.focus();
				        return false;
	}

	var b = document.theForm.price.value
		if (isNan(a)) { 
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
<div style="font-size : 20 ; font-color : black ; font-family : verdana"><h2>Equipment Form</h2></div>

<hr width=70% noshade>

<form name="theForm" action="addequipment_process.php" method="POST" enctype="multipart/form-data" onsubmit='return expert_Validate(theForm);'>
<table width=50% style="border-color : black ; border-style : groove ; border-width : medium" bgcolor="#F2F5A9">

<tr>
<td width=100% bgcolor="" valign="top">
<p>
<table width="500" border="0" align="center">
<tr><td width=150><font ><b>Equipment ID</b></font><font color='red'> * </font></td>
<td><input name="ide" type="text" size=25></td></tr>
<tr><td width=150><font ><b>Quantity</b></font><font color='red'> * </font></td
><td><input name="quant" type="text" size=25></td></tr>
<tr><td width=150><font ><b>Price</b></font><font color='red'> * </font></td>
<td><input name="price" type="text"  size=25></td></tr>
<tr><td width=150><font ><b>Company</b></font><font color='red'> * </font></td>
<td><input name="comp" type="text"  size=25></td></tr>

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
