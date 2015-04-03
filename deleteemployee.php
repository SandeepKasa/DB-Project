<?php
include('dblayer.php');
include('functions.php');
$db=new sql_db();
$con=mysqli_connect("127.0.0.1","root","sandy777","hospital");
// Check connection
if (mysqli_connect_errno()) {
	echo "Failed to connect to MySQL: " . mysqli_connect_error();
}
$id = $_GET['id'];
$q=$db->sql_query("SELECT type FROM employee where emp_id='".$id."'");
$m=$db->sql_fetch_array();
mysqli_query($con,"DELETE FROM employee WHERE emp_id='".$id."'");
mysqli_query($con,"UPDATE user_registration set firstlogin='1' where user_id='".$id."'");
if($m[0]=='Doctor')
{
	try
	{
	mysqli_query($con,"DELETE FROM doctor WHERE emp_id='".$id."'");
	mysqli_query($con,"DELETE FROM prescription WHERE emp_id='".$id."'");
        }
	catch(Exception $e)
	{
	}
}
mysqli_close($con);
echo "Successfully Deleted";
print "<META HTTP-EQUIV=\"Refresh\" CONTENT=\"2; URL=index.php\">";
?>
