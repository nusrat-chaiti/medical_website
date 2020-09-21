<?php 
	session_start();
	require_once('../service/internservice.php');
    //require_once('../service/userService.php');

	if(isset($_POST['submit'])){

		$message = $_POST['message'];
        $username = $_SESSION['username'];
        

	
			
			

			$status = chat($username, $message);

			if($status){
				echo $status;
				header('location: ../views/givs.php?success=message_sent');
			}else{
				header('location: ../views/givs.html?error=db_error');
			}
		
	}



?>
