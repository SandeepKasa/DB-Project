<?php
class sql_db
{               function sql_db(
		$server = "127.0.0.1",
		$username = "root",
		$password = "sandy777",
		$database = "hospital",
		$persistency = true,
		$debug = false
		)
{
	$this->sql_server = $server;
	$this->sql_user = $username;
	$this->sql_password = $password;
	$this->sql_database = $database;
	$this->sql_persistency = $persistency;
	$this->sql_debug = $debug;

	if( !$persistency )
		$this->sql_connection = @mysql_connect( $server, $username, $password );
	else
		$this->sql_connection = @mysql_pconnect( $server, $username, $password );

	if( !$this->sql_connection )
		print "Attempt to connect failed " . mysql_error() . "\n";
	else
	{
		if( $database )
		{
			$db_select_result = @mysql_select_db( $database, $this->sql_connection );
			if( !$db_select_result )
				print "Cannot select database <b>" . $database . "</b> " . mysql_error() . "<br>\n" ;
		}
	}
}
function sql_query( $query = "" )
{
	unset( $this->sql_result );

	$this->sql_result = @mysql_query( $query, $this->sql_connection );

	if( !$this->sql_result )
		print " cannot run query \"<b>$query</b>\" " . mysql_error() . "<br>\n";
	return $this->sql_result;
}
function sql_fetch_array( $type = MYSQL_BOTH )
{
	$this->sql_array = array();
	if( $this->sql_result )
		$this->sql_array = @mysql_fetch_array( $this->sql_result, $type );

	return $this->sql_array;
}


}
?>

