<?php 
	//session_start();
	require_once('../service/internservice.php');

	if(isset($_POST['submit'])){

		$username = $_POST['username'];
        $First_Aid = $_POST['First_Aid'];
        if($username =="" && $First_Aid=="" )
        {
            echo "Can not be empty";
        }
        
        else{
	
			$user = [
				'username'=> $username,
				'First_Aid'=> $First_Aid,
				
                
			];

			$status = addfirstaid($user);

			if($status){
				echo $status;
				header('location: ../views/firstaid.php?success=submit_done');
			}else{
				header('location: ../views/firstaid.php?error=db_error');
			}
        }
		
	}



?>
