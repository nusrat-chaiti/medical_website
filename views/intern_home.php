<?php
	require_once('../php/session_header.php');
?>


<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel = "stylesheet" type="text/css" href="../assets/home.css">
</head>
<body>

<div class="header">
  <h1 align="center">Online Doctor Management System</h1>
</div>

<div class="row">
  <div class="col-3 col-s-3 menu">
    <ul>
      <li><a href="intern_profile.php"> View Profile</a></li>
      <li><a href="changename.php"> Change Name</a></li>
      <li><a href="picture.html"> Change Profile Picture</a></li>
      <li><a href="change_password.html"> Change Password </a></li>
      <li><a href="../php/logout.php"> Logout</a></li>
      <li><a href="givs.php"> Give Suggestion </a></li>
      <li><a href="eduqua.php"> Add Degree</a></li>
      <li><a href="ratings.php">My Ratings</a></li>
      <li><a href="about.php"> About Me</a></li>
      <li><a href="firstaid.php"> First Aid </a></li>
      <li><a href="searchdoc.php">Search Doctors</a></li>
      <li><a href="searchhos.php">Search Hospitals</a></li>
      <li><a href="show_add_info.php"> Additional Info</a></li>
     
    </ul>
  </div>

  <div class="col-6 col-s-9">
    <h1>Welcome Home <?php 
                            // echo($_SESSION['uname']);
                             echo $_COOKIE['uname']; 
                            ?></h1>
    <p>This is the intern side of "Online Doctor Management System".Here interns those are registered in the system have some specific features that are shown in the right side <i class="arrow right"></i> </p>
  </div>

  <div class="col-3 col-s-12">
    <div class="aside">
      <h2>Services</h2>
      <p>You can chat with customers and give suggestion or suggest doctors according their need.Besides you can give first aid to customers in terms of normal conditions</p>
      <h2>Update</h2>
      <p>You can upadate your name.Aslo you can upload your own picture.Besides you can reset your password.Lastly interns can add their newly earned degree in the system and also able to see them</p>
      
    </div>
  </div>
</div>

<div class="footer">
  <p>Web tech Final Project Summer 2020.</p>
</div>

</body>
</html>
