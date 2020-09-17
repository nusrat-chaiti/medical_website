<?php
	session_start();
	session_destroy();

	setcookie('uname',$_SESSION['uname'],time()-3600,'/');
	setcookie('password',$_SESSION['password'],time()-3600,'/');
	setcookie('name',$_SESSION['name'],time()-3600,'/');
	setcookie('email',$_SESSION['email'],time()-3600,'/');
	setcookie('gender',$_SESSION['gender'],time()-3600,'/');
	setcookie('day',$_SESSION['day'],time()-3600,'/');
	setcookie('month',$_SESSION['month'],time()-3600,'/');
	setcookie('year',$_SESSION['year'],time()-3600,'/');
	setcookie('status',"set",time()-3600,'/');
	header('location:../index.html');

?>