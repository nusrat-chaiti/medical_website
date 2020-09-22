<?php
	require_once('../php/session_header.php');
	require_once('../service/internservice.php');

    
?>
<!DOCTYPE html>
<html>
<head>
	<title>Doctor Management System</title>
   
    
    
    
	
</head>
<body>
   
		<fieldset>
        
	     
			<h1 align="center">Online Doctor Management System</h1>
            <table>
                <legend>Account</legend>
                <form>
              
                <tr>
                  <td>
                      <a href="intern_profile.php"> View Profile</a>
                  </td>
                </tr> 
                <tr>
                    <td>
                        <a href="changename.php"> Change Name</a>
                    </td>
                </tr>
                    <tr>
                    <td>
                        <a href="picture.html"> Change Profile Picture</a>
                    </td>
                </tr>
                    <tr>
                    <td>
                        <a href="change_password.html"> Change Password </a>
                    </td>
                </tr>
                    <tr>
                    <td>
                        <a href="../php/logout.php"> Logout</a>
                    </td>
                </tr>
                    <tr>
                    <td>
                        <a href="givs.php"> Give Suggestion </a>
                    </td>
                </tr>
                    <tr>
                    <td>
                        <a href="eduqua.php"> Add Degree</a>
                    </td>
                </tr>
                    <tr>
                    <td>
                        <a href="ratings.php">My Ratings</a>
                    </td>
                </tr>
                    <tr>
                    <td>
                        <a href="about.php"> About Me</a>
                    </td>
                </tr>
                    <tr>
                    <td>
                        <a href="firstaid.php"> First Aid </a>
                    </td>
                </tr>
                    <tr>
                    <td>
                        <a href="searchdoc.php">Search Doctors</a>
                    </td>
                </tr>
                    <tr>
                    <td>
                        <a href="searchhospti.php">Search Hospitals</a>
                    </td>
                </tr>
                <tr>
                    <td>
                        <a href="intern_home.php">Home</a>
                    </td>
                </tr>
                <tr>
                    <td>
                        <a href="show_add_info.php"> Additional Info</a>
                    </td>
                </tr>
                </form>
            </table>
		
		<table>
			<tr>
				<td>Welcome to System<a href="home.php"> Home</a>  <a href="Logout.php"> Logout</a> </td>
				
			</tr>
            <tr>
                <td>
                    <fieldset>
                    <link rel = "stylesheet" type="text/css" href="../assets/style1.css">
                    
                    
                    
                    
                 <div class="container">
                    <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/747/star.svg" class="top-star" />
                    <h1>
                    <?php
                     $a=  $_SESSION['uname'];
      
                     $users = getRating($a);
                     echo $users['username'];
                       ?>
                       Your ratings is :
                       <?php
                       echo $users['Rating'];
                       ?>
                       out of 5
                       <b>
                       <br>
                       <?php
                       for ($i = 0; $i <$users['Rating'] ; $i++) { 

                           echo"★";
                           
                       }
                       ?>
                       </b>

                      </h1>
                       



                    

                  </div>
                     



























                    </fieldset>
                </td>
            </tr>
			
			
            </table>
  
    
