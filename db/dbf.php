<?php


$host='127.0.0.1';
$uname='root';
$password='';
$name='online_doctor';


function dbConnection()
{
	global $host;
	global $d_uname;
	global $d_password;
	global $d_name;

	return mysqli_connect($host,$d_uname, '', $d_name);
}



?>