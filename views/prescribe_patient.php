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
    <script type="text/javascript" src="../assets/js/prescription.js"></script>


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

          
		<fieldset>
			<legend align="center"><b>prescription<b></legend>
			<table>
				<!-- <tr>
					<td>patient id:</td>
					<td><?=$user['p_id']?></td>
				</tr>
				<tr>
					<td>patient name:</td>
					<td><?=$user ['p_name']?></td>
				</tr>
				<tr>
					<td>patient disease:</td>
					<td><?=$user ['p_disease']?></td>
				</tr>
                <tr>
					<td>patient_disease_his: </td>
					<td><?=$user ['p_disease_his']?></td>
				</tr> -->
               
				<tr>
					<td></td>
					<td>
						<input type="hidden" name="p_id" value="<?=$user['p_id']?>">
						<!-- <input type="submit" name="delete_p" value="delete">  -->
						<!-- <a href="all_users.php">Back</a> -->
					</td>
				</tr>
            </table>
            <form name="myForm"  action="../php/prescription.php" onsubmit="return validate()" method="post">
               <input id='message' type="text" name= "message" placeholder='Type your message'onkeyup="mess_remover()" onblur="mess_empty()" ><b><i id="pres_Msg"></i></b><br>
               <input type="hidden" name="p_id" value="<?=$user['p_id']?>">

               <input type="submit" name="submit" value="prescription"/>
            </input>
           </form>
           <div id="">
                <?php
                // require_once('../db/dbf.php');
                
                // $conn = dbConnection();

                //     if(!$conn){
                //         echo "DB connection error";
                //     }
                //     else{

                // $sql = "select * from prescription";
                // $result = $conn->query($sql);
                
                
                // while ($row = mysqli_fetch_assoc($result)) {
                //         echo '<h4 style= "color:pink">'.$row['username'].'</h4>';
                //         echo '<p>'.$row['message'].'</p>';
                //         echo "<br>";
                //     }
                // }
                

                
                

                ?>
    
        </div>
		</fieldset>
	


    

        </div>
        
      
      
</div>
 

      


       <header>
           <div class="menu">
               <ul>
                  <li><a href="doctor_dashboard.php">home</a></li>

                   <li><a href="all_patient.php">all patient</a></li>

                   <li><a href="all_appointment.php">appointment</a></li>
                   <li><a href="profile.php">My profile</a></li>
                   <li><a href="editprofile.php">edit profile</a></li>

                   <li><a href="../php/logout.php">logout</a></li>
                   


               </ul>

           </div>
       </header>
      
       


    

    

    
    
    
</body>
</html>