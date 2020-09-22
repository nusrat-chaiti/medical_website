
<!DOCTYPE html>
<html>
<head>
	<title>Doctor Mangement System</title>
	
	
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
                        <a href="changename.html"> Change Name</a>
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
    </fieldset>
<fieldset>
    <legend><b>Search Doctors</b></legend>
    Enter Doctor Name
    
    <script type="text/javascript" src="../assets/js/getdoctor.js"></script>
    <link rel = "stylesheet" type="text/css" href="../assets/doctable.css">
    
    
    
        <input align="center"  type="text" id="Name" name="Name" onkeyup="load()" /> 
		
        
        <div id="searchdata"></div>


        
  
</fieldset>
</body>
</html>