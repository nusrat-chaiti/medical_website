<?php session_start(); ?>
<!DOCTYPE html>
<html>
<head>
	<title>Doctor Management System</title>
    <script type="text/javascript" src="../assets/js/changename.js"></script>
    
</head>
<body>
   
		<fieldset>
			<h1 align="center">Online Doctor Management System</h1>
            <table>
                <legend>Account</legend>
                <form>
              <tr>
                  
                </tr>
                <tr>
                  <td>
                      <a href="intern_profile.php"> View Profile</a>
                  </td>
                </tr> 
                <tr>
                    <td>
                        <a href="changename.html"> Change Name</a>
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
                        <a href="searchhos.php">Search Hospitals</a>
                    </td>
                </tr>
                     <tr>
                    <td>
                        <a href="home.php">Home</a>
                    </td>
                </tr>
                <tr>
                    <td>
                        <a href="show_add_info.php"> Additional Info</a>
                    </td>
                </tr>

            
                </form>
            </table>

        </fieldset>
		
		<fieldset>
    <legend><b>Change Prifile Name</b></legend>
	<form name="myForm" action="../php/check_changename.php" onsubmit="return validateForm()"  method="post">

		<br/>
		<table width="100%" cellpadding="0" cellspacing="0">
			<tr>
				<td>Enter New Name</td>
				<td>:</td>
				<td><input name="name" type="text" id="name"></td>
				<td></td>
			</tr>		
			<tr><td colspan="4"><hr/></td></tr>
			<tr>
				<td>Password</td>
				<td>:</td>
				<td>
					<input name="password" type="password" id="password">
					
				</td>
				<td></td>
			</tr>
            
            </table>
            
		<hr/>
		<input type="submit" onclick="clicked();" value="Change" name="submit">
        <input type="reset" name="" value="Clear"> 


        

		
	</form>

            
            
    </fieldset>
    </body>
</html>