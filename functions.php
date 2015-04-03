<?php
session_start();
include_once("dblayer.php");
function chk_user($user_id)
{
	$db = new sql_db();
	$query = "select count(*) as count from user_registration where user_id = '$user_id'";
	$result = $db->sql_query($query);
	$row = $db->sql_fetch_array();
	return $row['count'];
}
function chk_user2($user_id)
{
	$db = new sql_db();
	$query = "select count(*) as count from patient where patient_id = '$user_id'";
	$result = $db->sql_query($query);
	$row = $db->sql_fetch_array();
	return $row['count'];
}
function chk_user3($user_id)
{
	$db = new sql_db();
	$query = "select count(*) as count from employee where emp_id = '$user_id'";
	$result = $db->sql_query($query);
	$row = $db->sql_fetch_array();
	return $row['count'];
}
function chk_user4($user_id)
{
	$db = new sql_db();
	$query = "select count(*) as count from doctor where emp_id = '$user_id'";
	$result = $db->sql_query($query);
	$row = $db->sql_fetch_array();
	return $row['count'];
}

function chk_user5($user_id)
{
	$db = new sql_db();
	$query = "select count(*) as count from wards where patient_id = '$user_id'";
	$result = $db->sql_query($query);
	$row = $db->sql_fetch_array();
	return $row['count'];
}

function chk_user6($user_id)
{
	$db = new sql_db();
	$query = "select count(*) as count from wards where ward_id = '$user_id'";
	$result = $db->sql_query($query);
	$row = $db->sql_fetch_array();
	return $row['count'];
}


function chk_user7($user_id)
{
	$db = new sql_db();
	$query = "select count(*) as count from medicines where med_id = '$user_id'";
	$result = $db->sql_query($query);
	$row = $db->sql_fetch_array();
	return $row['count'];
}
function chk_user8($user_id)
{
	$db = new sql_db();
	$query = "select count(*) as count from prescription where pres_id = '$user_id'";
	$result = $db->sql_query($query);
	$row = $db->sql_fetch_array();
	return $row['count'];
}

function chk_user9($user_id)
{
	$db = new sql_db();
	$query = "select count(*) as count from record where record_no='$user_id'";
	$result = $db->sql_query($query);
	$row = $db->sql_fetch_array();
	return $row['count'];
}

function chk_user10($user_id)
{
	$db = new sql_db();
	$query = "select count(*) as count from equipment where prod_id='$user_id'";
	$result = $db->sql_query($query);
	$row = $db->sql_fetch_array();
	return $row['count'];
}
function chk_user11($user_id)
{
	$db = new sql_db();
	$query = "select count(*) as count from user_registration where passwd = '$user_id' where user_id='$_SESSION[user_id]'";
	$result = $db->sql_query($query);
	$row = $db->sql_fetch_array();
	return $row['count'];
}



?>


