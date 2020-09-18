<?php
	session_start();

	if(!isset($_SESSION['uname'])){
		header('location: ../views/login.php?error=invalid_request');
	}
	
	// if(!isset($_SESSION['company_name'])){
	// 	header('location: ../views/createCompany.php');
	// }

	// session_start();
	
	// if(!empty($_SESSION))
	// {
	// 	if(empty($_SESSION['user_type']))
	// 	{
	// 		header('location:logout.php?error=invalid_request');
	// 	}
	// }
	// else
	// {
	// 	if(!isset($_COOKIE['uname']))
	// 	{
	// 		header('location:login.php?error=invalid_request');
	// 	}
	// }
?>