<?php 
	session_start();
	require_once('../service/internservice.php');

	if(isset($_POST['submit'])){

		$about = $_POST['about'];
        $userName=  $_SESSION['userName'];

			$status = about($userName,$about);

			if($status){
				echo $status;
				header('location: ../views/about.php?success=registration_done');
			}else{
				header('location: ../views/about.php?error=db_error');
			}
		
	}



?>