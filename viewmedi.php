<?php
$con=mysqli_connect("127.0.0.1","root","sandy777","hospital");
session_start();
?>
<style>
table{
border:1px solid black;
margin:0px auto;
       text-align:center;
width:200px;
}
div {
	background-color: white;
position: absolute;
left: 13%;
margin-left: -100px;
width: 900px;
padding: 25px;
border: 5px solid black;
margin: 25px;
}

</style>
<h1><center><u>Continental Hospitals</u></center></h1>
<?php
// Check connection
if (mysqli_connect_errno()) 
{
	echo "Failed to connect to MySQL: " . mysqli_connect_error();
}
$result = mysqli_query($con,"SELECT med_id FROM prescription where patient_id='$_SESSION[user_id]'");
$r = mysqli_fetch_array($result);
$you=unserialize($r[0]);
$len=sizeof($you);
?>
<div style="text:align:center;">
<h2><center>Medicines bought on the last buy</center></h2>
<?php
echo "<table border='1' class='table table-striped table-bordered table-hover'>
<thead>
<tr>
<th >Medicine_Id</th>
<th >Price</th>
<th >Description</th>   
<th >Quantity</th>
</tr>
</thead>";
$x=0;
if($len%2!=0)
$len=$len-1;
$len2=$len;
while($len>0) 
{
	try
	{
	echo "<tbody data-link='row' class='rowlink'>";
	echo "<tr>";
	echo '<td align="center">' . $you[$len2-$len] . "</td>";
	$tem = $you[$len2-$len];
	$result2 = mysqli_query($con,"SELECT price,description FROM medicines where med_id='$tem'");
	$row2 = mysqli_fetch_array($result2);
	 echo '<td align="center">' . $row2['price'] . "</td>";
	echo '<td align="center">' . $row2['description'] . "</td>";
	$len=$len-1;
	echo '<td align="center">' . $you[$len2-$len] . "</td>";
	echo "</tr>";
	echo "</tbody>"; 
	$len=$len-1;
	}
	catch(Exception $e)
	{
	}
}
echo "</table>";
?>
<br>
<li>
<center><a href="index.php">Back to home</a></center>


</div>
<?php
mysqli_close($con);
?>
