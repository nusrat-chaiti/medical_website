<?php
	require_once("../db/dbf.php");

	// function getByID($uname){
	// 	$conn = dbConnection();

	// 	if(!$conn){
	// 		echo "DB connection error";
	// 	}
	// 	else{

	// 	$sql = "SELECT * FROM  doctor WHERE uname = '{$uname}'";
	// 	// $sql = "select uname from doctor where uname like '%{$uname}%'";

	// 	// $query= mysql_query($sql) or die(mysql_error());
	// 		// $result = $conn->query($sql);
	// 		// $row = $result->fetch_assoc();
	// 		$result = mysqli_query($conn, $sql);
	// 	    $row = mysqli_fetch_assoc($result);
	// 		mysqli_close($conn);
	// 	return $row;
	// 	}
	// }

	function getByID($id){
		$conn = dbConnection();

		if(!$conn){
			echo "DB connection error";
		}

	  $sql = "SELECT * FROM customer WHERE user_id='{$id}'";
		$result = mysqli_query($conn, $sql);
		$row = mysqli_fetch_assoc($result);
		return $row;
		mysqli_close($conn);
	}
	
	function getByID_P($id){
		$conn = dbConnection();

		if(!$conn){
			echo "DB connection error";
		}

	  $sql = "SELECT * FROM patient WHERE p_id='{$id}'";
		$result = mysqli_query($conn, $sql);
		$row = mysqli_fetch_assoc($result);
		return $row;
		mysqli_close($conn);
	}
	
	function getByID_D($id){
		$conn = dbConnection();

		if(!$conn){
			echo "DB connection error";
		}

	  $sql = "SELECT * FROM doctor WHERE d_id='{$id}'";
		$result = mysqli_query($conn, $sql);
		$row = mysqli_fetch_assoc($result);
		return $row;
		mysqli_close($conn);
	}
	function getByID_app($id){
		$conn = dbConnection();

		if(!$conn){
			echo "DB connection error";
		}

	  $sql = "SELECT * FROM appointment WHERE a_id='{$id}'";
		$result = mysqli_query($conn, $sql);
		$row = mysqli_fetch_assoc($result);
		return $row;
		mysqli_close($conn);
	}

	// function getAllUser($userName){
	// 	$conn = dbConnection();

	// 	if(!$conn){
	// 		echo "DB connection error";
	// 	}

	// 	$sql = "select * from interns where User_Name = '{$userName}'";
	// 	$result = mysqli_query($conn, $sql);
		

	// 	//$row = mysqli_fetch_assoc($result);
	// 	//echo $row
	// 	;
		
		
	// 	return $row;
	// }

	function getAllUser(){
		$conn = dbConnection();

		if(!$conn){
			echo "DB connection error";
		}

		$sql = "select * from patient";
		$result = mysqli_query($conn, $sql);
		$users = [];

		while($row = mysqli_fetch_assoc($result)){
			array_push($users, $row);
		}

		return $users;
	}
////////////////////////appointment-list////////////////
		function getAllUser_app()
		{
			$conn = dbConnection();

			if(!$conn){
				echo "DB connection error";
			}

			$sql = "select * from appointment";
			$result = mysqli_query($conn, $sql);
			$users = [];

			while($row = mysqli_fetch_assoc($result)){
				array_push($users, $row);
			}

			return $users;
		}
//////////////////all doc//////////////////


       function getAlldoctor()
		{
			$conn = dbConnection();

			if(!$conn){
				echo "DB connection error";
			}

			$sql = "select * from doctor";
			$result = mysqli_query($conn, $sql);
			$users = [];

			while($row = mysqli_fetch_assoc($result)){
				array_push($users, $row);
			}

			return $users;
		}
//////////////////all interns//////////////
function getAllinterns()
{
	$conn = dbConnection();

	if(!$conn){
		echo "DB connection error";
	}

	$sql = "select * from interns_info";
	$result = mysqli_query($conn, $sql);
	$users = [];

	while($row = mysqli_fetch_assoc($result)){
		array_push($users, $row);
	}

	return $users;
}


//inserting message
function chat($name,$message)
{
	
	$conn = dbConnection();

	if(!$conn){
		echo "DB connection error";
	}
	else{

		$sql = "insert into prescription values('', '$name','$message')";
		if(mysqli_query($conn, $sql)){
		return true;
	  }else{
		return false;
	  }
	
	}

}


function validate($info){
	$conn = dbConnection();

	if(!$conn){
			echo "DB connection error";
		}

	$sql="SELECT * FROM `customer` WHERE  username='{$info['uname']}' AND upassword='{$info['upassword']}'";
	$result = mysqli_query($conn, $sql);
	$row=mysqli_fetch_assoc($result );

	if(count($row)>0 ){
			return $row;
		}
		else{
			return false;
		}
		//mysqli_close($conn);
	}


	function insert($user){
		$conn = dbConnection();

		if(!$conn){
			echo "DB connection error";
		}

		$sql = "insert into interns values ('{$user['name']}','{$user['email']}','{$user['userName']}' ,'{$user['password']}', '{$user['gender']}', '{$user['birthday']}','{$user['phone']}','{$user['userType']}')";
		if(mysqli_query($conn, $sql)){
			return true;
		}else{
			return false;
		}
		mysqli_close($conn);
	}

/////////////////doc basic info updated//////////////////
	function update($user){
		$conn = dbConnection();
		if(!$conn){
			echo "DB connection error";
		}

		$sql = "update customer set name='{$user['name']}', upassword='{$user['upassword']}', email='{$user['email']}' where user_id={$user['user_id']}";

		if(mysqli_query($conn, $sql)){
			return true;
		}else{
			return false;
		}
	}
	///////////////doc other info updated////////////////
	function update_d($user)
	{
		$conn = dbConnection();
		if(!$conn){
			echo "DB connection error";
		}

		$sql = "update doctor set d_degree='{$user['d_degree']}',d_specialist='{$user['d_specialist']}', d_workplace='{$user['d_workplace']}',d_about='{$user['d_about']}' where d_id={$user['d_id']}";

		if(mysqli_query($conn, $sql)){
			return true;
		}else{
			return false;
		}
	}
	 ///////////////////upload picture///////////////////////////
	 function upload($id,$folder)
	{
		
		$conn = dbConnection();

		if(!$conn){
			echo "DB connection error";
		}
		else{

			$sql = "update doctor set profile_pic ='$folder' where d_id='$id' ";
			if(mysqli_query($conn, $sql)){
			return true;
		  }else{
			return false;
		  }
		
		}

	}

	////////////////////////patient disease history////////////////
	function update_p($user)
	{
		$conn = dbConnection();
		if(!$conn){
			echo "DB connection error";
		}

		$sql = "update patient set p_disease='{$user['p_disease']}', p_disease_his='{$user['p_disease_his']}' where p_id={$user['p_id']}";

		if(mysqli_query($conn, $sql)){
			return true;
		}else{
			return false;
		}
	}

////////////////////////////////////////////////////

	function checkEmail($email)
	{
		$conn = dbConnection();
		$sql = "select * from customer where Email='{$email}'";
		if(mysqli_query($conn, $sql)){
			$result=mysqli_query($conn, $sql);
			$user = mysqli_fetch_assoc($result);
			if(empty($user)){
			return false;
			}
			else
			{
				return true;
			}
		}else{
			return false;
		}

	}

	function checkUname($userName)
	{
		$conn = dbConnection();
		$sql = "select * from interns where User_Name='{$userName}'";
		if(mysqli_query($conn, $sql)){
			$result=mysqli_query($conn, $sql);
			$user = mysqli_fetch_assoc($result);
			if(empty($user)){
			return false;
			}
			else
			{
				return true;
			}
		}else{
			return false;
		}

	}

	// for getting ratings
	function getRating($user)
	{
		$conn = dbConnection();

		if(!$conn){
			echo "DB connection error";
		}
		else{

		$sql = "select * from interns_info where User_Name = '$user'";
		$result = $conn->query($sql);
		$row = $result->fetch_assoc();
		return $row;
		}

	}


	// for uploading image
	// function upload($a,$folder)
	// {
		
	// 	$conn = dbConnection();

	// 	if(!$conn){
	// 		echo "DB connection error";
	// 	}
	// 	else{

	// 		$sql = "update interns_info set Picture ='$folder' where User_Name='$a' ";
	// 		if(mysqli_query($conn, $sql)){
	// 		return true;
	// 	  }else{
	// 		return false;
	// 	  }
		
	// 	}

	// }
	//inserting message
	// function chat($user,$message)
	// {
		
	// 	$conn = dbConnection();

	// 	if(!$conn){
	// 		echo "DB connection error";
	// 	}
	// 	else{

	// 		$sql = "insert into chat values('', '$user','$message')";
	// 		if(mysqli_query($conn, $sql)){
	// 		return true;
	// 	  }else{
	// 		return false;
	// 	  }
		
	// 	}

	// }

	///about me
	function about($a,$about)
	{
		
		$conn = dbConnection();

		if(!$conn){
			echo "DB connection error";
		}
		else{

			$sql = "update interns_info set about ='$about' where User_Name='$a' ";
			if(mysqli_query($conn, $sql)){
			return true;
		  }else{
			return false;
		  }
		
		}

	}
	///////////////////delete patient/////////////

	
	function delete($user){
		$conn = dbConnection();
		if(!$conn){
			echo "DB connection error";
		}

		$sql = "DELETE FROM `patient` WHERE p_id={$user['p_id']}";

		if(mysqli_query($conn, $sql)){
			return true;
		}else{
			return false;
		}
	}
//////////////////////delete_ appointment///////////////////

function delete_ap($user){
	$conn = dbConnection();
	if(!$conn){
		echo "DB connection error";
	}

	$sql = "DELETE FROM `appointment` WHERE a_id={$user['a_id']}";

	if(mysqli_query($conn, $sql)){
		return true;
	}else{
		return false;
	}
}


	

?>