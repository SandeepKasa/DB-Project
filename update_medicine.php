<html >
<?php
include_once("dblayer.php");
include('functions.php');
$db=new sql_db();
$qi=$db->sql_query("SELECT * FROM medicines where med_id='$_GET[id]'");
$mi=$db->sql_fetch_array();
?>
<head>
<title>Medicine Registration</title>
<script type="text/javascript" language="JavaScript1.2">
function expert_Validate(theForm)
{
	var val0=document.theForm.idm.value;
	if(val0=="")
	{
		alert("Please select the Medicine Id");
		document.theForm.idw.focus();
		return false;
	}
	var val6=document.theForm.desc.value;
	if(val6=="")
	{
		alert("Please enter description");
		document.theForm.desc.focus();
		return false;
	}

	var val3=document.theForm.price.value;
	if(val3=='')
	{
		var sol3=prompt("Please enter the Price",val3);
		document.theForm.price.value=sol3;
		document.theForm.price.focus();
		return false;
	}                
	var b = document.theForm.price.value
		if (isNan(a)) { 
			alert("Please enter a valid price"); 
			document.theForm.price.focus(); 
			return false; 
		} 
	var val9=document.theForm.quant.value;
	if(val9=='')
	{
		alert("Please enter quantity")
			document.theForm.quant.focus();
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
<div style="font-size : 20 ; font-color : black ; font-family : verdana"><h2>Medicines Addition Form</h2></div>

<hr width=70% noshade>

<form name="theForm" action="updatemedicine_process.php" method="POST" enctype="multipart/form-data" onsubmit='return expert_Validate(theForm);'>
<table width=50% style="border-color : black ; border-style : groove ; border-width : medium" bgcolor="#F2F5A9">

<tr>
<td width=100% bgcolor="" valign="top">
<p>
<table width="500" border="0" align="center">
<tr><td><font ><b>Select Medicine Id</b></font><font color='red'>*</font></td>
<td><select name="idm">
<?php
$db=new sql_db();

$q=$db->sql_query("SELECT med_id FROM medicines");
while($m=$db->sql_fetch_array())
{
	if($m[0]==$_GET['id'])
	{
		echo "<option value=$m[0]>$m[0]</option>" ;
		break;
	}
}
?>
<tr><td width=150><font ><b>Quantity</b></font><font color='red'> * 
</font></td>
<td><input name="quant" type="text" value="<?php echo "$mi[quantity]" ?>" size=25></td>
</tr>


<tr><td width=150><font ><b>Price(per strip)</b></font><font color='red'> * </font></td>
<td><input name="price" type="text"  value="<?php echo "$mi[price]"?>"size=25></td>
</tr>
 <tr><td width=150><font ><b>Description</b></font><font color='red'> * </font></td>
<td><textarea name="desc" rows="3" columns="50" size=25><?php echo "$mi[description]"?>
 </textarea></td></tr>

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
