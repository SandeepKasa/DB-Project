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
$result = mysqli_query($con,"SELECT * FROM prescription where patient_id='$_SESSION[user_id]'");
?>
<div style="text:align:center;">
<h2><center>All Prescriptions received</center></h2>
<?php
echo "<table border='1' class='table table-striped table-bordered table-hover'>
<thead>
<tr>
<th >Prescription_Id</th>
<th >Patient_Id</th>
<th >Medicine</th>   
<th >Description</th>
<th >Doctor_Id</th>
</tr>
</thead>";
while($row = mysqli_fetch_array($result)) 
{
	echo "<tbody data-link='row' class='rowlink'>";
	echo "<tr>";
	echo '<td align="center">' . $row['pres_id'] . "</td>";
	echo '<td align="center">' . $row['patient_id'] . "</td>";
	$result2 = mysqli_query($con,"SELECT description FROM medicines where med_id='$row[medicine_id]'");
	$row2 = mysqli_fetch_array($result2);

	echo '<td align="center">' . $row2['description'] . "</td>";
	echo '<td align="center">' . $row['description'] . "</td>";
	echo '<td align="center">' . $row['emp_id'] . "</td>";
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
