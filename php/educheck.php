<?php 
	session_start();
require_once('../service/internservice.php');

	if(isset($_POST['submit'])){

		$name = $_POST['name'];
        $inst = $_POST['inst'];
        $acm = $_POST['acm'];
        $username =  $_SESSION['username'];
        

	
			$user = [
				'name'=> $name,
				'inst'=> $inst,
				'acm'=> $acm,
                'username'=> $username
                
                
			];

			$status = addedu($user);

			if($status){
				echo $status;
				header('location: ../views/eduqua.php?success=submit_done');
			}else{
				header('location: ../views/eduqua.php?error=db_error');
			}
		
	}
?>
