  
<?php
	require_once('../php/session_header.php');
	require_once('../service/internservice.php');

    
?>


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
    <legend><b>PROFILE</b></legend>
    
	<form>
		<br/>
		<table cellpadding="0" cellspacing="0">
        
			<tr>
				<td>Name</td>
				<td>:</td>
                
				<td>
              <?php
       
              $a=  $_SESSION['uname'];
      
              $users = getByID($a);
               echo $users['name'];
               ?>
       
                </td>
				<td rowspan="7" align="center">
                    <br/>
                    
				</td>
			</tr>		
			<tr><td colspan="3"><hr/></td></tr>
			<tr>
				<td>Email</td>
				<td>:</td>
				<td><?php
                echo $users['email'];
                ?>

     </td>
			</tr>		
			<tr><td colspan="3"><hr/></td></tr>			
			<tr>
				<td>Gender</td>
				<td>:</td>
				<td>
                <?php
                echo $users['gender'];
                ?>
                </td>
			</tr>
			<tr><td colspan="3"><hr/></td></tr>
			<tr>
				<td>Date of Birth</td>
				<td>: </td>
				<td>
                <?php
                echo $users['dob'];
                ?>
     </td>
             </tr>   
			
          
		</table>	
        <hr/>
       	
	</form>
    
</fieldset>
