<?php 
	// session_start();
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
		$specialist		= $_POST['d_specialist'];

        $workplace 		= $_POST['d_workplace'];
        $about 		    = $_POST['d_about'];
        $id 		    = $_POST['d_id'];

		if(empty($degree)|| empty($workplace)|| empty($about)|| empty($specialist)){
			header('location: ../views/profile.php?id={$id}');
		}else{

			$user = [
				
				'd_degree'=> $degree,
				'd_specialist'=> $specialist,
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
////////////////////////pic update//////////////

if(isset($_POST['upload'])){

		
		$id = $_POST['d_id'];
		// echo $id;

	    $file =  $_FILES['picture']['name'];
		$tmp_name =  $_FILES['picture']['tmp_name'];
        $folder = "../image/".$file;
		// echo $folder;
		move_uploaded_file($tmp_name,$folder);
		// echo "<img src = '$folder' height ='100' ,width = '100'/>";
		$status = upload($id,$folder);
		if($status){
			header('location: ../views/profile.php?success=done');
		}else{
			header('location: ../views/editprofile.php?p_id={$p_id}');
		}

}
	////////edit patient disease history////////////

	if(isset($_POST['edit_p'])){

		
        $p_disease 		    = $_POST['p_disease'];
		$p_disease_his 		= $_POST['p_disease_his'];
        $p_id               =$_POST['p_id'];
       

		if(empty($p_disease)|| empty($p_disease_his)){
			header('location: ../views/all_patient.php?p_id={$p_id}');
		}else{

			$user = [
				
                'p_disease'=> $p_disease,
                'p_disease_his'=> $p_disease_his,
				'p_id'=> $p_id
			];

			$status = update_p($user);

			if($status){
				header('location: ../views/all_patient.php?success=done');
			}else{
				header('location: ../views/edit_patient.php?p_id={$p_id}');
			}
		}
	}
	//delete user

	if(isset($_POST['delete_ap'])){

			
        // $p_disease 		    = $_POST['p_disease'];
		// $p_disease_his 		= $_POST['p_disease_his'];
        $a_id               =$_POST['a_id'];
       

	//	if(empty($p_disease)|| empty($p_disease_his)){
	//		header('location: ../views/all_patient.php?p_id={$p_id}');
	//	}
	//	else{

			$user = [
				
				'a_id'=> $a_id
			];

			$status = delete_ap($user);

			if($status){
				header('location: ../views/all_appointment.php?success=done');
			}
			else{
				header('location: ../views/delete_appointment.php?id={$id}');
			}
	//	}
	}
//////////////////////////////delete appointment/////////////////////////



if(isset($_POST['delete_p'])){

			
	$p_disease 		    = $_POST['p_disease'];
	$p_disease_his 		= $_POST['p_disease_his'];
	$p_id               =$_POST['p_id'];
   

	if(empty($p_disease)|| empty($p_disease_his)){
		header('location: ../views/all_patient.php?p_id={$p_id}');
	}
	else{

		$user = [
			'p_disease'=> $p_disease,
			'p_disease_his'=> $p_disease_his,
			'p_id'=> $p_id
		];

		$status = delete($user);

		if($status){
			header('location: ../views/all_patient.php?success=done');
		}
		else{
			header('location: ../views/edit_patient.php?id={$id}');
		}
	}
}



?>