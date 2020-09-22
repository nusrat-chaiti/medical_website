<?php 
	session_start();
	require_once('../service/internservice.php');
   

	if(isset($_POST['submit'])){

		$message = $_POST['message'];
        $username = $_SESSION['uname'];
		if($message=="")
		{
			echo"Can not be empty";
		}
		else if(str_word_count($message)<2)
		{
			echo"At least 2 words";

		}
		else {
			$status = chat($username, $message);

			if($status){
				echo $status;
				header('location: ../views/givs.php?success=message_sent');
			}else{
				header('location: ../views/givs.html?error=db_error');
			}

		}
        

	
			
			

			
	}



?>

