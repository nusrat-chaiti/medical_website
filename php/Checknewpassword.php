<?php 
	session_start();
  require_once('../service/internservice.php');

	if(isset($_POST['submit'])){

		$password1 = $_POST['password1'];
        $password2 = $_POST['password2'];
		$password3 = $_POST['password3'];
        
        $uname =  $_SESSION['uname'];
        if($password1=="" && $password2=="" && $password3=="" )
        {
            echo"Can not be empty";
        }
		else if($password2 != $password3)
		{
			echo"New entered and re-entered password is not same";
		}
        else {
            $user = [
				'password1'=> $password1,
				'password2'=> $password2,
				
                'uname'=> $uname
                
                
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
