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

    <title>doctor dashboard</title>
</head>
<body>
<div class="dash-info">
    <?php

        //    echo $_COOKIE['uname'];
        // echo $_SESSION['uname'];
        // if (isset($_GET['d_id']))
        //  {
        //    $user = getById($_GET['d_id']);
        //    echo  $user['uname'];
        //     print_r ($user['email']);

        //  }
        //echo $doctorId;


       // echo  $doctors['uname'];
        $doctorInfo = getByID($doctorId);
        $doctorInfo2 = getByID_D($doctorId);


        ?>
          <div class="dash_text">




          <?php         

            // session_start();
                    //   if (isset($_POST['submit']))
                    //   {
                    //   $dir_path="image/";
                    //   $extension_array =array('jpeg','png','jpg');

                    //   setcookie('picture',$_FILES["picture"]["name"], time()+367480000, '/');
                    //   setcookie('picture',$_FILES["picture"]["tmp_name"], time()+367480000, '/');



                    //   if(is_dir($dir_path))
                    //   {

                    //     $filedir = 'image/'.$_FILES['picture']['name'].'.jpg';
                    //     //$filedir = 'image/'.time().'.jpg';


                    //   if(move_uploaded_file($_FILES['picture']['tmp_name'],$filedir))
                    //   {
                    //     echo '<img src="image/'.$_FILES["picture"]["name"].'" style="width:280px;height:210px;"  ><br/>'; 
                    //     echo " your profile picture uploaded succesfully"; 


                    //   } 
                    //   else{
                    //     echo "file is not uploaded";
                    //   }


                    //  }
                    // //  setcookie('name',$_POST['name'], time()+367480000, '/');

                    //  setcookie('status',"OK",time()+48900000,'/'); 
                    // //  header("location: view_profile.php");


                    //   }
                    //   else if(!isset($_COOKIE['picture']))
                    //   {
                    //     setcookie('picture',$_FILES["picture"]["name"], time()+367480000, '/');
                    //     setcookie('picture',$_FILES["picture"]["tmp_name"], time()+367480000, '/');

                    //     setcookie('status',"OK",time()+48900000,'/'); 


                    //       echo '<img src="image/'.$_FILES["picture"]["name"].'" style="width:280px;height:210px;"  ><br/>'; 
                    //   }
                    //   else
                    //   {
                          ?>
                        <!-- <img src="../image/doc-1.jpg" alt=" " style="width:280px;height:210px;" > -->
                         <?php

                      //}




<<<<<<< HEAD:views/profile.php
=======
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
                        <a href="eduqua.html"> Add Degree</a>
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
       
              $a=  $_SESSION['userName'];
      
              $users = getByID($a);
               echo $users['Name'];
>>>>>>> 654a8a26fe5463429b041ab98af36b05902033f0:views/intern_profile.php
               ?>




            <p><b>profile picture:
            <?php 
               if ($doctorInfo2 ['profile_pic'] == "")
                {
                    echo "No data found";
                }
                else { ?>
                    <img src=" <?= $doctorInfo2 ['profile_pic']?>"style="width:280px;height:210px;">


               <?php } ?>
            </b></p><br>

          <p><b>NAME:<?= $doctorInfo ['name']?></b></p><br>
          <p><b>EMAIL:<?= $doctorInfo ['email']?></b><?php  ?></p><br>

                <p><b>DEGREE:</b><?= $doctorInfo2 ['d_degree']?></p><br>
                <p><b>DEGREE:</b><?= $doctorInfo2 ['d_specialist']?></p><br>

                <p><b>WORK PLACE:</b><?= $doctorInfo2 ['d_workplace']?></p><br>
                <p><b>ABOUT:</b><?= $doctorInfo2 ['d_about']?></p>
                <!-- <div class="cp"><p><i>copyright@ONLINE_DOCTOR(Nusrat Alam Chaiti)</i></p></div> -->

        </div>



</div>





       <header>
           <div class="menu">
               <ul>
                  <li><a href="#">home</a></li>

                   <li><a href="all_patient.php">all patient</a></li>
                   <li><a href="#">appointment</a></li>
                   <li><a href="profile.php">My profile</a></li>
                   <li><a href="editprofile.php">edit profile</a></li>

                   <li><a href="../php/logout.php">logout</a></li>



               </ul>

           </div>
       </header>











</body>
</html> 