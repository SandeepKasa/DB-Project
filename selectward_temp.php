<?php
$con=mysqli_connect("127.0.0.1","root","sandy777","hospital");
//session_start();
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
<?php
// Check connection
if (mysqli_connect_errno()) 
{
	echo "Failed to connect to MySQL: " . mysqli_connect_error();
}
$result = mysqli_query($con,"SELECT * FROM wards where type='$_POST[typ]'");
?>
<div style="text:align:center;">
<h2><center>All available Wards with type <?php echo "$_POST[typ]"?></center></h2>
<?php
echo "<table border='1' class='table table-striped table-bordered table-hover'>
<thead>
<tr>
<th >Ward_Id</th>
<th >Price</th>
<th >Type</th>   
<th >Nurse_Id</th>
<th >Select</th>
</tr>
</thead>";
while($row = mysqli_fetch_array($result)) 
{
	echo "<tbody data-link='row' class='rowlink'>";
	echo "<tr>";
	echo '<td align="center">' . $row['ward_id'] . "</td>";
	echo '<td align="center">' . $row['price'] . "</td>";
	echo '<td align="center">' . $row['type'] . "</td>";
	echo '<td align="center">' . $row['nurse_id'] . "</td>";
	echo "<td><a href=\"selectward_process.php?id=".$row['ward_id']."&ext=".$_POST['ext']."\">Select</a></td>";
	echo "</tr>";
	echo "</tbody>";    
}
$_SESSION['temp']=$_POST['ext'];
echo "</table>";
?>
<br>
<li>
<center><a href="index.php">Back to home</a></center>


</div>

