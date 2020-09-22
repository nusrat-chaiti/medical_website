<?php 
	session_start();
  require_once('../service/internservice.php');

	if(isset($_POST['submit'])){
		

		$name = $_POST['name'];
        $password = $_POST['password'];
        
        $uname =  $_SESSION['uname'];
		if($name=="" && $password=="")
		{
			echo"Can not be empty";
		}
		else if(str_word_count($name)<2)
		{
			echo"Must have 2 words";
		}
		else
		{
			$user = [
				'name'=> $name,
				'password'=> $password,
				
                'uname'=> $uname
                
                
			];

			$status = changename($user);

			if($status){
				echo $status;
				header('location: ../views/changename.php?success=submit_done');
			}else{
				header('location: ../views/changename.php?error=db_error');
			}

		}
        

	
			
		
	}
?>
