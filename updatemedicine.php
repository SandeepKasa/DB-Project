<?php
$con=mysqli_connect("127.0.0.1","root","sandy777","hospital");
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
$result = mysqli_query($con,"SELECT * FROM medicines");
?>
<div style="text:align:center;">
<h2><center>All medicines</center></h2>
<?php
echo "<table border='1' class='table table-striped table-bordered table-hover'>
<thead>
<tr>
<th >Medicine_Id</th>
<th >Price</th>
<th >Description</th>   
<th >Update</th>
</tr>
</thead>";
while($row = mysqli_fetch_array($result)) 
{
	echo "<tbody data-link='row' class='rowlink'>";
	echo "<tr>";
	echo '<td align="center">' . $row['med_id'] . "</td>";
	echo '<td align="center">' . $row['price'] . "</td>";
	echo '<td align="center">' . $row['description'] . "</td>";
	echo "<td><a href=\"update_medicine.php?id=".$row['med_id']."\">Update</a></td>";
	echo "</tr>";
	echo "</tbody>";    
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
