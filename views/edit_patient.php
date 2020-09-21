<?php 
// session_start();
require_once('../php/session_header.php');
// $id= $_SESSION['p_id'];

require_once('../service/userService.php');
if (isset($_GET['id'])) {
    $user = getByID_P($_GET['id']);
}else{
    header('location: all_patient.php?id={$id}');
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../assets/style.css">
	<link href="https://fonts.googleapis.com/css2?family=Nova+Round&display=swap" rel="stylesheet">
	<script type="text/javascript" src="../assets/js/edit_patient.js"></script>


    <title>doctor dashboard</title>
</head>
<body>
<div class="dash-info">
<?php
//  $doctorInfo = getByID($doctorId);
//  $doctorInfo2 = getByID_D($doctorId);
//  $patientInfo = getByID_P($id);

?>
   
          <div class="dash_text">

          <form action="../php/userController.php" method="POST">
		<fieldset>
			<legend align="center"><b>Edit patient disease history<b></legend>
			<table>
				<tr>
					<td>patient id</td>
					<td><?=$user['p_id']?></td>
				</tr>
				<tr>
					<td>patient name</td>
					<td><?=$user ['p_name']?></td>
				</tr>
				<tr>
					<td>patient disease</td>
					<td><input type="text" id="p_disease" name="p_disease" value="<?=$user ['p_disease']?>" onkeyup="pd_remover()" onblur="pd_empty()" ><b><i id="pd_Msg"></i></b><br></td>
				</tr>
                <tr>
					<td>patient_disease_his</td>
					<td><input type="text" id="p_disease_his" name="p_disease_his" value="<?=$user ['p_disease_his']?>"onkeyup="pdh_remover()" onblur="pdh_empty()" ><b><i id="pdh_Msg"></i></b><br></td>
				</tr>
               
				<tr>
					<td></td>
					<td>
						<input type="hidden" name="p_id" value="<?=$user['p_id']?>">
						<input type="submit" name="edit_p" value="Update"> 
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

                   <li><a href="all_appointment.php">all appointment</a></li>
                   <li><a href="profile.php">My profile</a></li>
                   <li><a href="editprofile.php">edit profile</a></li>

                   <li><a href="../php/logout.php">logout</a></li>
                   


               </ul>

           </div>
       </header>
      
       


    

    

    
    
    
</body>
</html>