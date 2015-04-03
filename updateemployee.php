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
left: 5%;
margin-left: -100px;
width: 1100px;
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
$result = mysqli_query($con,"SELECT * FROM employee");
?>
<div style="text:align:center;">
<h2><center>All employees</center></h2>
<?php
echo "<table border='1' class='table table-striped table-bordered table-hover'>
<thead>
<tr>
<th >Employee_Id</th>
<th >Age</th>
<th >Phone</th>   
<th >Name</th>
<th >Sex</th>
<th >Address</th>
<th >Salary</th>
<th >date joined</th>
<th >Qualification</th>
<th >Type</th>
<th >Update</th>
</tr>
</thead>";
while($row = mysqli_fetch_array($result)) 
{
	echo "<tbody data-link='row' class='rowlink'>";
	echo "<tr>";
	echo '<td align="center">' . $row['emp_id'] . "</td>";
	echo '<td align="center">' . $row['age'] . "</td>";
	echo '<td align="center">' . $row['phone'] . "</td>";
	echo '<td align="center">' . $row['name'] . "</td>";
	echo '<td align="center">' . $row['sex'] . "</td>";
	echo '<td align="center">' . $row['address'] . "</td>";
	echo '<td align="center">' . $row['salary'] . "</td>";
	echo '<td align="center">' . $row['date_joined'] . "</td>";
	echo '<td align="center">' . $row['qualification'] . "</td>";
	echo '<td align="center">' . $row['type'] . "</td>";
	echo "<td><a href=\"updategivemp.php?id=".$row['emp_id']."\">Update</a></td>";
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
