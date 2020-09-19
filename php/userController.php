<?php 
	session_start();
	require_once('../php/session_header.php');
	require_once('../service/userService.php');
    // $doctorId=$_SESSION['user_id'];


	//add user
	if(isset($_POST['create'])){
		$username 	= $_POST['username'];
		$password 	= $_POST['password'];
		$email 		= $_POST['email'];

		if(empty($username) || empty($password) || empty($email)){
			header('location: ../views/register.php?error=null_value');
		}else{

			$user = [
			//	'id'=> $id,
				'username'=> $username,
				'password'=> $password,
				'email'=> $email
			];

			$status = insert($user);

			if($status){
				header('location: ../views/all_users.php?success=done');
			}else{
				header('location: ../views/create.php?error=db_error');
			}
		}
	}

	//update doctor
	if(isset($_POST['edit'])){

		$name 	    = $_POST['name'];
		$password 	= $_POST['upassword'];
        $email 		= $_POST['email'];

        $id 		= $_POST['user_id'];

        if(empty($name)||empty($password)||empty($email))
        {
            header("location: ../views/editprofile.php?user_id={$id}");
            echo $name;

		}else{

			$user = [
				'name'=> $name,
				'upassword'=> $password,
                'email'=> $email,
				'user_id'=> $id
			];

			$status = update($user);

			if($status){
				header('location: ../views/profile.php?success=done');
			}else{
				header('location: ../views/editprofile.php?user_id={$id}');
			}
		}
    }
    ////edit doctors other info///////////////
    if(isset($_POST['edit_d'])){

		
        $degree 		= $_POST['d_degree'];
        $workplace 		= $_POST['d_workplace'];
        $about 		    = $_POST['d_about'];
        $id 		    = $_POST['d_id'];

		if(empty($degree)|| empty($workplace)|| empty($about)){
			header('location: ../views/profile.php?id={$id}');
		}else{

			$user = [
				
                'd_degree'=> $degree,
                'd_workplace'=> $workplace,
                'd_about'=> $about,
				'd_id'=> $id
			];

			$status = update_d($user);

			if($status){
				header('location: ../views/profile.php?success=done');
			}else{
				header('location: ../views/editprofile.php?d_id={$id}');
			}
		}
	}
	//delete user

	if(isset($_POST['delete'])){

		$username 	= $_POST['username'];
		$password 	= $_POST['password'];
		$email 		= $_POST['email'];
		$id 		= $_POST['id'];

		if(empty($username) || empty($password) || empty($email)){
			header('location: ../views/edit.php?id={$id}');
		}
		else{

			$user = [
				'username'=> $username,
				'password'=> $password,
				'email'=> $email,
				'id'=> $id
			];

			$status = delete($user);

			if($status){
				header('location: ../views/all_users.php?success=done');
			}
			else{
				header('location: ../views/edit.php?id={$id}');
			}
		}
	}

?>