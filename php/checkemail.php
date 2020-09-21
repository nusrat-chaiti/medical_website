<?php 
	session_start();
	
	require_once('../service/internservice.php');


	
	if(isset($_POST['email'])){

		$status=checkEmail($_POST['email']);
		if($status)
		{
			echo "Email is already taken";
		}		
	}

?>