<!DOCTYPE html>
<html>
<head>
<script type="text/javascript" src="../assets/js/show_customer_info.js"></script>

</head>
<body>
<fieldset>
			<h1 align="center"> Online Doctor Management System</h1>
            <table>
                <legend>Account</legend>
                <form>
              <tr>
                  <td>
                  </td>
                </tr>
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
<table>
    <tr>
    <th>User_name</th>
    <th>Disease_Description</th>
    <th>Condition</th>
    <th>First_Aid</th>
    </tr>
 
    <tbody id="data"></tbody>
</table>
<p><b>Give First Aid</b></p>

<form name="myForm"  action="../php/Firstaidcheck.php"  method="post">
<table>
<tr>
ID:
<input name="User_Name" type="text" id="username"  size="30px" height="100" width="100" required >
</tr>

<tr>
First Aid:
<input name="First_Aid" type="text" id="fisrtaid"  size="30px" height="100" width="100"  required>
</tr>
<tr>
<input type="submit" name="submit" value="Submit"> 
</tr>
<tr>
<input type="reset" name="" value="Clear">
</tr>

</table>
</form>


 

    


	
	
    


</fieldset>
</body> 
</html>
