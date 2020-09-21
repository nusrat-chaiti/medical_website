<?php 
	session_start();
	// require_once('../service/internservice.php');
    require_once('../service/userService.php');
    require_once('session_header.php');
    $doctorId=$_SESSION['user_id'];
    $doctorInfo = getByID($doctorId);
    $name = $doctorInfo ['name'];

	if(isset($_POST['submit'])){

		$message = $_POST['message'];
        

	
			
			

			$status = chat($name, $message);

			if($status){
				echo $status;
				header('location: ../views/prescribe_patient.php?success=message_sent');
			}else{
				header('location: ../views/prescribe_patient.php?error=db_error');
			}
		
	}



?>