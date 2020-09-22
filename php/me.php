<?php 
	session_start();
	require_once('../service/internservice.php');

	if(isset($_POST['submit'])){


		$about = $_POST['about'];
        $userName=  $_SESSION['uname'];
		if($about=="")
		{
			echo"Can not be empty";
		}
		else if(strlen($about)<2)
		{
			echo"Write more";
		}
		else{
			$status = about($userName,$about);

			if($status){
				echo $status;
				header('location: ../views/about.php?success=registration_done');
			}else{
				header('location: ../views/about.php?error=db_error');
			}

		}

			
		
	}



?>
