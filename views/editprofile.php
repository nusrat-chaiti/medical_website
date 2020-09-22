<?php 
// session_start();
require_once('../php/session_header.php');
// $id= $_SESSION['d_id'];

require_once('../service/userService.php');
$doctorId=$_SESSION['user_id'];


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../assets/style.css">
    <link href="https://fonts.googleapis.com/css2?family=Nova+Round&display=swap" rel="stylesheet">
    <script type="text/javascript" src="../assets/js/edit_profile.js"></script>


    <title>doctor dashboard</title>
</head>
<body>
<div class="dash-info">
<?php
 $doctorInfo = getByID($doctorId);
 $doctorInfo2 = getByID_D($doctorId);
?>
   
          <div class="dash_text">

		  <fieldset>
                    <legend align="center"><b>PROFILE PICTURE</b></legend>
                    <form action="../php/userController.php" method="POST" enctype="multipart/form-data">
                
                        
                        <br />
                        <input name = "picture" type="file">
                        <hr />
						<input type="hidden" name="d_id" value="<?=$doctorInfo2 ['d_id']?>">

                        <input type="submit" name ="upload"value="upload" >


                        
                        <?php
                        // session_start();
                                //   if (isset($_POST['submit']))
                                //   {
                                    

                                    
                                //   $dir_path="image/";
                                //   $extension_array =array('jpeg','png','jpg');

                                //   if(is_dir($dir_path))
                                //   {

                                //     $filedir = 'image/'.$_FILES['picture']['name'].'.jpg';
                                //     //  $filedir = 'image/'.time()+53789872038338888.'.jpg';


                                //   if(move_uploaded_file($_FILES['picture']['tmp_name'],$filedir))
                                //   {
                                //     echo '<img src="image/'.$_FILES["picture"]["name"].'" style="width:280px;height:210px;"  ><br/>'; 
                                //     echo " your profile picture uploaded succesfully"; 

                                    
                                //   } 
                                //   else{
                                //     echo "file is not uploaded";
                                //   }
                                
                                  
                                //  }
                                //  setcookie('picture',$filedir, time()+367480000, '/');
                                //  setcookie('status',"OK",time()+48900000,'/'); 
                                //  header("location: view_profile.php");


                                //   }
                            ?>
                                   
                                       <!-- <p align="center"> <a href="view_profile.php">view profile</a>   </p> -->
                                    

                    </form>
                </fieldset>



          <form action="../php/userController.php" onsubmit="return validate()" method="POST">
		<fieldset>
			<legend align="center"><b>Edit profile<b></legend>
			<table>
				<tr>
					<td>Username</td>
					<td><input type="text" name="name" id="uname" value="<?=$doctorInfo ['name']?>"  onkeyup="unremover()" onblur="unempty()" ><b><i id="uname_Msg"></i></b><br></td>
				</tr>
				<tr>
					<td>Password</td>
					<td><input type="password" name="upassword" id="password" value="<?=$doctorInfo ['upassword']?>" onkeyup="premover()" onblur="pempty()" ><b><i id="pass_Msg"></i></b><br></td>
				</tr>
				<tr>
					<td>Email</td>
					<td><input type="text" name="email" id="email" value="<?=$doctorInfo ['email']?>" onkeyup="eremover()" onblur="eempty()" onmouseout="eempty()" ><b><i id="email_Msg"></i></b><br></td>
				</tr>
               
				<tr>
					<td></td>
					<td>
						<input type="hidden" name="user_id" value="<?=$doctorInfo['user_id']?>">
						<input type="submit" name="edit" value="Update" onclick="f1()"> 
						<!-- <a href="all_users.php">Back</a> -->
					</td>
				</tr>
			</table>
		</fieldset>
	</form>


    <form name="profile_2" action="../php/userController.php" method="POST" onsubmit="return validate()">
		<fieldset>
			<legend align="center"><b>Edit profile info<b></legend>
			<table>
				
                <tr>
					<td>Degree</td>
					<td><input type="text" id="degree" name="d_degree" value="<?=$doctorInfo2 ['d_degree']?>" onkeyup="d_remover()" onblur="d_empty()"><b><i id="degree_Msg"></i></b><br></td>
                </tr>
                <tr>
					<td>specialist</td>
					<td><input type="text" id="specialist" name="d_specialist" value="<?=$doctorInfo2 ['d_specialist']?>" onkeyup="s_remover()" onblur="s_empty()" ><b><i id="specialist_Msg"></i></b><br></td>
				</tr>
                <tr>
					<td>Workplace</td>
					<td><input type="text" id="workplace" name="d_workplace" value="<?=$doctorInfo2 ['d_workplace']?>" onkeyup="w_remover()" onblur="w_empty()"><b><i id="work_Msg"></i></b><br></td>
				</tr>
                <tr>
					<td>About</td>
					<td><input type="text" id="about" name="d_about" value="<?=$doctorInfo2 ['d_about']?>" onkeyup="a_remover()" onblur="a_empty()"><b><i id="about_Msg"></i></b><br></td>
				</tr>
				<tr>
					<td></td>
					<td>
						<input type="hidden" name="d_id" value="<?=$doctorInfo2 ['d_id']?>">
						<input type="submit" name="edit_d" value="Update"> 
						<!-- <a href="all_users.php">Back</a> -->
					</td>
				</tr>
			</table>
		</fieldset>
	</form>

        </div>
        
      
      
</div>
 

      


       <header>
           <div class="menu">
               <ul>
                  <li><a href="doctor_dashboard.php">home</a></li>

                   <li><a href="all_patient.php">all patient</a></li>
                   <!-- <li><a href="edit_patient.php">edit patient disease history</a></li> -->

                   <li><a href="all_appointment.php">all appointment</a></li>
                   <li><a href="profile.php">My profile</a></li>
                   <li><a href="editprofile.php">edit profile</a></li>

                   <li><a href="../php/logout.php">logout</a></li>
                   


               </ul>

           </div>
       </header>
      
       


    

    

    
    
    
</body>
</html>