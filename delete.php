<?php
$con=mysqli_connect("127.0.0.1","root","sandy777","hospital");
// Check connection
if (mysqli_connect_errno()) {
	echo "Failed to connect to MySQL: " . mysqli_connect_error();
}
$id = $_GET['id'];
try
{
mysqli_query($con,"DELETE FROM user_registration WHERE user_id='$id'");
// mysqli_query($con,"DELETE FROM employee WHERE emp_id='$id'");
mysqli_query($con,"UPDATE wards set patient_id='None' WHERE patient_id='$id'");
mysqli_query($con,"UPDATE wards set nurse_id='None' WHERE nurse_id='$id'");
mysqli_query($con,"DELETE FROM record WHERE patient_id='$id'");
mysqli_query($con,"DELETE FROM record WHERE emp_id='$id'");
mysqli_query($con,"DELETE FROM prescription WHERE patient_id='$id'");
mysqli_close($con);
}
catch(Exception $e)
{
}
echo "Successfully Deleted";
print "<META HTTP-EQUIV=\"Refresh\" CONTENT=\"2; URL=index.php\">";
?>
