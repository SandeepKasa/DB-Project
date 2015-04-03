<?php
$con=mysqli_connect("127.0.0.1","root","sandy777","hospital");
// Check connection
session_start();
if (mysqli_connect_errno()) {
	echo "Failed to connect to MySQL: " . mysqli_connect_error();
}
$id = $_GET['id'];
mysqli_query($con,"update wards set patient_id='' WHERE patient_id='$_SESSION[user_id]'");
mysqli_close($con);
echo "Successfully Deseleted";
print "<META HTTP-EQUIV=\"Refresh\" CONTENT=\"2; URL=index.php\">";
?>
