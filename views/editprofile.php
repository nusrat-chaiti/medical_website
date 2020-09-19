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
 $doctorInfo = getByID($doctorId);
 $doctorInfo2 = getByID_D($doctorId);
?>
   
          <div class="dash_text">

          <form action="../php/userController.php" method="post">
		<fieldset>
			<legend align="center"><b>Edit profile<b></legend>
			<table>
				<tr>
					<td>Username</td>
					<td><input type="text" name="username" value="<?=$doctorInfo ['name']?>"></td>
				</tr>
				<tr>
					<td>Password</td>
					<td><input type="password" name="password" value="<?=$doctorInfo ['upassword']?>"></td>
				</tr>
				<tr>
					<td>Email</td>
					<td><input type="text" name="email" value="<?=$doctorInfo ['email']?>"></td>
				</tr>
                <tr>
					<td>Degree</td>
					<td><input type="text" name="degree" value="<?=$doctorInfo2 ['d_degree']?>"></td>
				</tr>
                <tr>
					<td>Workplace</td>
					<td><input type="text" name="workplace" value="<?=$doctorInfo2 ['d_workplace']?>"></td>
				</tr>
                <tr>
					<td>About/Experience</td>
					<td><input type="text" name="d_about" value="<?=$doctorInfo2 ['d_about']?>"></td>
				</tr>
				<tr>
					<td></td>
					<td>
						<input type="hidden" name="id" value="<?=$doctorInfo['d_id']?>">
						<input type="submit" name="edit" value="Update"> 
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
                  <li><a href="#">home</a></li>

                   <li><a href="all_patients.php">patient</a></li>
                   <li><a href="#">appointment</a></li>
                   <li><a href="profile.php">My profile</a></li>
                   <li><a href="editprofile.php">edit profile</a></li>

                   <li><a href="../php/logout.php">logout</a></li>
                   


               </ul>

           </div>
       </header>
      
       


    

    

    
    
    
</body>
</html>