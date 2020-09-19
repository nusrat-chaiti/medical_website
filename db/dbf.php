<?php

$host="localhost";
$d_uname="root";
$d_password="";
$d_name="online_doctor";

function dbConnection()
{
	global $host;
	global $d_uname;
	global $d_password;
	global $d_name;

	return mysqli_connect($host,$d_uname, $d_password, $d_name);
}



?>