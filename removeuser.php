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
left: 32%;
margin-left: -100px;
width: 400px;
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
$result = mysqli_query($con,"SELECT * FROM user_registration");
?>
<div style="text:align:center;">
<h2><center>All Users</center></h2>
<?php
echo "<table border='1' class='table table-striped table-bordered table-hover'>
<thead>
<tr>
<th >User_Id</th>
<th >Password</th>
<th >delete</th>   
</tr>
</thead>";
while($row = mysqli_fetch_array($result)) 
{
	if($row['user_id']!='admin')
	{
	echo "<tbody data-link='row' class='rowlink'>";
	echo "<tr>";
	echo '<td align="center">' . $row['user_id'] . "</td>";
	echo '<td align="center">' . $row['passwd'] . "</td>";
	echo "<td><a href=\"delete.php?id=".$row['user_id']."\">Delete</a></td>";
	echo "</tr>";
	echo "</tbody>";    
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
