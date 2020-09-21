<html>
<head>
	<script type="text/javascript" src="../assets/js/edu.js"></script>
	
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
                        <a href="searchdoc.html">Search Doctors</a>
                    </td>
                </tr>
                    <tr>
                    <td>
                        <a href="searchhospti.html">Search Hospitals</a>
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
    <legend><b>Adding Educational Information</b></legend>
    
    
    <form name="myForm" action="../php/educheck.php" onsubmit="return validateForm()"  method="post" >
        

        
        <br/>
       <tr>
				<td>Name of the degree &nbsp &nbsp &nbsp &nbsp   </td>
				<td>:</td>
				<td><input name="name" type="text" id="name" ></td>
				<td id="namemsg"></td>
			</tr>
        <br/>
        <tr><td colspan="4"><hr/></td></tr>
         <tr>
				<td>Name of the Instituition&nbsp </td>
				<td>:</td>
				<td><input name="inst" type="text" id="inst"></td>
				<td></td>
			</tr>
        <br/>
        <tr><td colspan="4"><hr/></td></tr>
        <tr>
				<td>Date of Accomplish&nbsp &nbsp &nbsp &nbsp </td>
				<td>:</td>
				<td> <input type="date" id="acm" name="acm" id="acm"></td>
				<td></td>
			</tr>
        <hr />
        <input type="submit" value="Submit" name="submit">
        <input type="reset" name="" value="Clear"> 
        
        
    </form>
   
</fieldset>
</body>
</html>