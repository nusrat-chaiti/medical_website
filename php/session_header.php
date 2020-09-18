<?php
	session_start();

	if(!isset($_SESSION['l_uname'])){
		header('location: ../views/login.php?error=invalid_request');
	}
	
	// if(!isset($_SESSION['company_name'])){
	// 	header('location: ../views/createCompany.php');
	// }
?>