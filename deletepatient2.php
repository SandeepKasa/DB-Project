<?php
$con=mysqli_connect("127.0.0.1","root","sandy777","hospital");
// Check connection
if (mysqli_connect_errno()) {
	echo "Failed to connect to MySQL: " . mysqli_connect_error();
}
$id = $_GET['id'];
try
{
mysqli_query($con,"DELETE FROM patient WHERE patient_id='".$id."'");
mysqli_query($con,"UPDATE user_registration set firstlogin='1' where user_id='".$id."'");
mysqli_query($con,"DELETE FROM prescription WHERE patient_id='".$id."'");
mysqli_query($con,"UPDATE wards set patient_id="" where patient_id='".$id."'");
}
catch(Exception $e)
{
}
mysqli_close($con);
echo "Successfully Deleted";
print "<META HTTP-EQUIV=\"Refresh\" CONTENT=\"2; URL=logout.php\">";
?>
