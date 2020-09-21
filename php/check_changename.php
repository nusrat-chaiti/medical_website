<?php 
	session_start();
  require_once('../service/internservice.php');

	if(isset($_POST['submit'])){

		$name = $_POST['name'];
        $password = $_POST['password'];
        
        $userName =  $_SESSION['userName'];
        

	
			$user = [
				'name'=> $name,
				'password'=> $password,
				
                'userName'=> $userName
                
                
			];

			$status = changename($user);

			if($status){
				echo $status;
				header('location: ../views/changename.php?success=submit_done');
			}else{
				header('location: ../views/changename.php?error=db_error');
			}
		
	}
?>