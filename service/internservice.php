<?php
	require_once('../db/dbf.php');

	function getByID($userName){
		$conn = dbConnection();

		if(!$conn){
			echo "DB connection error";
		}
		else{

		$sql = "select * from customer where username = '$userName'";
		$result = $conn->query($sql);
		$row = $result->fetch_assoc();
		return $row;
		}
	}


	///get additonal info
	function getaddByID($userName){
		$conn = dbConnection();

		if(!$conn){
			echo "DB connection error";
		}
		else{

		$sql = "select * from interns_info where username = '$userName'";
		$result = $conn->query($sql);
		$row = $result->fetch_assoc();
		return $row;
		}
	}

	function getAllUser($userName){
		$conn = dbConnection();

		if(!$conn){
			echo "DB connection error";
		}

		$sql = "select * from customer where username = {$username}";
		$result = mysqli_query($conn, $sql);
		

		//$row = mysqli_fetch_assoc($result);
		//echo $row
		;
		
		
		return $row;
	}


	function validate($user){
		$conn = dbConnection();

		if(!$conn){
			echo "DB connection error";
		}

		$sql = "select * from customer where username ='{$user['username']}' and password='{$user['password']}'";
		$result = mysqli_query($conn, $sql);
		$user = mysqli_fetch_assoc($result);

		if(count($user) > 0 ){
			return true;
		}else{
			return false;
		}
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
	}


	function update($user){
		$conn = dbConnection();
		if(!$conn){
			echo "DB connection error";
		}

		$sql = "update users set username='{$user['username']}', password='{$user['password']}', email='{$user['email']}' where id={$user['id']}";

		if(mysqli_query($conn, $sql)){
			return true;
		}else{
			return false;
		}
	}



	function checkEmail($email)
	{
		$conn = dbConnection();
		$sql = "select * from interns where Email='{$email}'";
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
		$sql = "select * from customer where username='{$userName}'";
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

		$sql = "select * from interns_info where username = '$user'";
		$result = $conn->query($sql);
		$row = $result->fetch_assoc();
		return $row;
		}

	}


	// for uploading image
	function upload($a,$folder)
	{
		
		$conn = dbConnection();

		if(!$conn){
			echo "DB connection error";
		}
		else{

			$sql = "update interns_info set Picture ='$folder' where username ='$a' ";
			if(mysqli_query($conn, $sql)){
			return true;
		  }else{
			return false;
		  }
		
		}

	}
	//inserting message
	function chat($user,$message)
	{
		
		$conn = dbConnection();

		if(!$conn){
			echo "DB connection error";
		}
		else{

			$sql = "insert into chat values('', '$user','$message')";
			if(mysqli_query($conn, $sql)){
			return true;
		  }else{
			return false;
		  }
		
		}

	}

	///about me
	function about($a,$about)
	{
		
		$conn = dbConnection();

		if(!$conn){
			echo "DB connection error";
		}
		else{

			$sql = "update interns_info set about ='$about' where username ='$a' ";
			if(mysqli_query($conn, $sql)){
			return true;
		  }else{
			return false;
		  }
		
		}

	}

///add first aid
function addfirstaid($user)
	{
		
		$conn = dbConnection();

		if(!$conn){
			echo "DB connection error";
		}
		else{

			$sql = "update customer_info set First_aid ='{$user['First_Aid']}' where username = '{$user['User_Name']}'";
			if(mysqli_query($conn, $sql)){
			return true;
		  }else{
			return false;
		  }
		
		}

	}


	//add educational qualification
	function addedu($user){
		$conn = dbConnection();
		if(!$conn){
			echo "DB connection error";
		}

		$sql = "update interns_info set Degree='{$user['name']}', Date='{$user['acm']}', Instituition ='{$user['inst']}' where username = '{$user['uname']}'";

		if(mysqli_query($conn, $sql)){
			return true;
		}else{
			return false;
		}
	}

	///change name

	function changename($user){
		$conn = dbConnection();
		if(!$conn){
			echo "DB connection error";
		}

		$sql = "update customer set name ='{$user['name']}' where username = '{$user['uname']}' and upassword = '{$user['password']}'";

		if(mysqli_query($conn, $sql)){
			return true;
		}else{
			return false;
		}
	}


	function changepassword($user){
		$conn = dbConnection();
		if(!$conn){
			echo "DB connection error";
		}

		$sql = "update customer set upassword ='{$user['password2']}' where username = '{$user['uname']}' and upassword = '{$user['password1']}'";

		if(mysqli_query($conn, $sql)){
			return true;
		}else{
			return false;
		}
	}






	

?>
