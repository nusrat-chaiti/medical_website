<?php 
	session_start();
	
	require_once('../service/internservice.php');


	
	if(isset($_POST['userName'])){

		$status=checkUname($_POST['userName']);
		if($status)
		{
			echo "User name  is already taken";
		}		
	}

?>