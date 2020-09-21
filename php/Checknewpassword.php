<?php 
	session_start();
  require_once('../service/internservice.php');

	if(isset($_POST['submit'])){

		$password1 = $_POST['password1'];
        $password2 = $_POST['password2'];
        
        $username =  $_SESSION['username'];
        if($password1=="" && $password2=="")
        {
            echo"Can not be empty";
        }
        else {
            $user = [
				'password1'=> $password1,
				'password2'=> $password2,
				
                'username'=> $username
                
                
			];

			$status = changepassword($user);

			if($status){
				echo $status;
				header('location: ../views/change_password.html?success=submit_done');
			}else{
				header('location: ../views/change_password.html?error=db_error');
			}
        }
        

	
			
		
	}
?>
