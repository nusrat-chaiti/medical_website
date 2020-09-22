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
//  echo $doctorInfo2['d_id'];

?>
   
          <div class="dash_text">
          <h3>Appointment list</h3>

            <table border="1">
                <tr>
                    <td>patient_ID</td>
                    <td>name</td>

                    <td>patient_disease</td>
                    <td>disease_history</td>
                    <td></td>
                </tr>

                <?php  
                    $users = getAllUser_app();
                    for ($i=0; $i != count($users); $i++) { ?>
                            
                <tr>
                    
                    <td><?=$users[$i]['a_id']?></td>
                    <td><?=$users[$i]['p_name']?></td>

                    <td><?=$users[$i]['a_date']?></td>
                    <td><?=$users[$i]['a_time']?></td>
                    <td>
                    <!-- <input type="hidden" name="d_id" value="<?=$users[$i]['p_id']?>"> -->

                        <a href="delete_appointment.php?id=<?=$users[$i]['a_id']?>"><h3 style="color:pink">delete</h3></a> 


                    </td>
                </tr>
                    

                <?php } 
                
                ?>
                
            </table>
                    

        </div>
        
      
      
</div>
 

      


       <header>
           <div class="menu">
               <ul>
                  <li><a href="doctor_dashboard.php">home</a></li>

                   <li><a href="all_patient.php">all patient</a></li>
                   <!-- <li><a href="edit_patient.php">edit patient disease history</a></li> -->

                   <li><a href="all_appointment.php">all appointments</a></li>
                   <li><a href="profile.php">My profile</a></li>
                   <li><a href="editprofile.php">edit profile</a></li>

                   <li><a href="../php/logout.php">logout</a></li>
                   


               </ul>

           </div>
       </header>
      
       


    

    

    
    
    
</body>
</html>