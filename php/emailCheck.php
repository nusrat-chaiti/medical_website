<?php 
	session_start();
	//require_once('../php/session_header.php');
	require_once('../service/userService.php');


	//add user
	if(isset($_POST['email'])){

		$status=checkEmail($_POST['email']);
		if($status)
		{
			echo "Email already taken";
		}		
	}

?>