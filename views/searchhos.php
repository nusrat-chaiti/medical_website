<?php
	require_once('../php/session_header.php');
?>

<!DOCTYPE html>
<html>
<head>
	<title>Home</title>
    
	

</head>
<body>
	<fieldset>
			<h1 align="center">Online Doctor Management System</h1>
           
                <legend>Account</legend> <br>
                <form>
              <tr>
                  
                </tr>
                <tr>
                  <td>
                      <a href="intern_profile.php"> View Profile</a> <br>
                  </td>
                </tr> 
                <tr>
                    <td>
                        <a href="changename.html"> Change Name</a> <br>
                    </td>
                </tr>
                    <tr>
                    <td>
                        <a href="picture.html"> Change Profile Picture</a> <br>
                    </td>
                </tr>
                    <tr>
                    <td>
                        <a href="change_password.html"> Change Password </a> <br>
                    </td>
                </tr>
                    <tr>
                    <td>
                        <a href="../php/logout.php"> Logout</a> <br>
                    </td>
                </tr>
                    <tr>
                    <td>
                        <a href="givs.php"> Give Suggestion </a> <br>
                    </td>
                </tr>
                    <tr>
                    <td>
                        <a href="eduqua.php"> Add Degree</a> <br>
                    </td>
                </tr>
                    <tr>
                    <td>
                        <a href="ratings.php">My Ratings</a> <br>
                    </td>
                </tr>
                    <tr>
                    <td>
                        <a href="about.php"> About Me</a> <br>
                    </td>
                </tr>
                    <tr>
                    <td>
                        <a href="firstaid.php"> First Aid </a> <br>
                    </td>
                </tr>
                    <tr>
                    <td>
                        <a href="searchdoc.html">Search Doctors</a> <br>
                    </td>
                </tr>
                    <tr>
                    <td>
                        <a href="searchhos.html">Search Hospitals</a> <br>
                    </td>
                </tr>
                <tr>
                    <td>
                        <a href="intern_home.php">Home</a><br>
                    </td>
                </tr>
                <tr>
                    <td>
                        <a href="show_add_info.php"> Additional Info</a>
                    </td>
                </tr>


                </form>
            
        </fieldset>
    <fieldset>
        <link rel = "stylesheet" type="text/css" href="../assets/hospital_table.css">
	   
        <script type="text/javascript" src="../assets/js/showhospital.js"></script>
        <label>Click Here To Select The Hospital's Name</label>
        <br>
        <legend><b>SEARCH HOSPITAL </b></legend>
        <form action="">
    
            
           <select name="hospitals" onchange="showHospital(this.value)">
           <option value="">Select a Hospital:</option>
           <option value="1">Apollo Hospital</option>
           <option value="2">Dhaka Medical</option>
           <option value="4">Popular Hospital</option>
           <option value="5">Azgor Ali Hospital</option>
           </select>
        </form>
        <br>
        <div id="txtHint">Hospital's info will be listed here...</div>
        <table>
            
        </table>
    </fieldset>