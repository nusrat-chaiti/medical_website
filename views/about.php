<!DOCTYPE html>
<html>
<head>
	<title>Home</title>
    
</head>
<body>
<fieldset>

			<h1 align="center"> Online Doctor Management System</h1>
            
            
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
                        <a href="picture.html">Upload Profile Picture</a>
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
                        <a href="about.html"> About Me</a>
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
                        <a href="show_add_info.php"> Additional Info</a>
                    </td>
                </tr>
                <tr>
                    <td>
                        <a href="intern_home.php">Home</a>
                    </td>
                </tr>
                </form>
            </table>
    </fieldset>
<fieldset>

    <legend><b>About Me:</b></legend>
    <script type="text/javascript" src="../assets/js/about.js"></script>


	  <form name="myForm" action="../php/me.php" onsubmit="return validateForm()" method="post" required>
       Write About You: 
       <br>
       <input type="text" name="about" maxlength="50" size="50" style="height: 100px;">
       <input type="submit" value="Submit" name="submit">
      </form>
</fieldset>
</body>
</html>

