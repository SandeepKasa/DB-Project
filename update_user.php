<?php
include('functions.php');
	$dbhost = '127.0.0.1';
	$dbuser = 'root';
	$dbpass = 'sandy777';
	$dbname = 'hospital';
	$conn = mysql_connect($dbhost, $dbuser, $dbpass,$dbname);
	if(! $conn )
	{
		die('Could not connect: ' . mysql_error());
	}
	$user = $_POST['user_id'];
	$passd = $_POST['passwd'];
	$sql = "UPDATE user_registration SET passwd = $passd , user_id = '$user' where user_id= '$user'";
	mysql_select_db('hospital');
	$retval = mysql_query( $sql, $conn );
	if(! $retval )
	{
		die('Could not update data: ' . mysql_error());
	}
	echo "Updated data successfully";
	print "<META HTTP-EQUIV=\"Refresh\" CONTENT=\"2; URL=index.php\">";
	mysql_close($conn);
