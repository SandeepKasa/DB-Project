<?php
$con=mysqli_connect("127.0.0.1","root","sandy777","hospital");
// Check connection
if (mysqli_connect_errno()) {
	echo "Failed to connect to MySQL: " . mysqli_connect_error();
}
$id = $_GET['id'];
mysqli_query($con,"DELETE FROM equipment WHERE prod_id='".$id."'");
mysqli_close($con);
echo "Successfully Deleted";
print "<META HTTP-EQUIV=\"Refresh\" CONTENT=\"2; URL=index.php\">";
?>
