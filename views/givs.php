<?php
	
	require_once('../service/internservice.php');
    

    
?>

<fieldset>
			<h1 align="center">Online Doctor Management System</h1>
            <link rel = "stylesheet" type="text/css" href="../assets/chat.css">
            <script type="text/javascript" src="../assets/js/validation.js"></script>
            
            <table>
                <legend>Account</legend>
                <form>
              
                <tr>
                  <td>
                      <a href="profile.php"> View Profile</a>
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
                <tr>
                    <td>
                        <a href="intern_home.php">Home</a>
                    </td>
                </tr>
                </form>
            </table>
    </fieldset>
<fieldset>
    <script type="text/javascript" src="../assets/js/chat.js"></script>
    <legend><b>Suggestion Chat Box:</b></legend>
    <form name="myForm"  action="../php/chat.php" onsubmit="return validateForm()" method="post">
     <input id='message' type="text" name= "message" placeholder='Type your message'>
     <input type="submit" name="submit" value="message"/>
     </input>
    </form>
    <div id="chat">
    <?php
     require_once('../db/dbf.php');
    
     $conn = dbConnection();

		if(!$conn){
			echo "DB connection error";
		}
		else{

	  $sql = "select * from chat";
	  $result = $conn->query($sql);
     
    
       while ($row = mysqli_fetch_assoc($result)) {
            echo '<h2 style= "color:green">'.$row['username'].'</h2>';
            echo '<p>'.$row['message'].'</p>';
            echo "<br>";
        }
    }
    

    
    

    ?>
    
    </div>
     
    
    
 </fieldset>


        
       
