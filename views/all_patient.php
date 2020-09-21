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
          <h3>patient list</h3>

            <table border="1">
                <tr>
                    <td>P_ID</td>
                    <td>name</td>

                    <td>patient_disease</td>
                    <td>disease_history</td>
                    <td></td>
                </tr>

                <?php  
                    $users = getAllUser();
                    for ($i=0; $i != count($users); $i++) {  ?>
                <tr>
                    <td><?=$users[$i]['p_id']?></td>
                    <td><?=$users[$i]['p_name']?></td>

                    <td><?=$users[$i]['p_disease']?></td>
                    <td><?=$users[$i]['p_disease_his']?></td>
                    <td>
                    <!-- <input type="hidden" name="d_id" value="<?=$users[$i]['p_id']?>"> -->

                        <a href="edit_patient.php?id=<?=$users[$i]['p_id']?> "><h4 style="color:white">edit disease history</h4></a> <hr>
                        <a href="delete_patient.php?id=<?=$users[$i]['p_id']?>"><h4 style="color:pink">delete</h4></a><hr>
                        <a href="prescribe_patient.php?id=<?=$users[$i]['p_id']?>"><h4 style="color:indigo">prescription</h4></a> 
 

                    </td>
                </tr>

                <?php } ?>
                
            </table>
                    

        </div>
        
      
      
</div>
 

      


       <header>
           <div class="menu">
               <ul>
                  <li><a href="doctor_dashboard.php">home</a></li>

                   <li><a href="#">all patient</a></li>
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