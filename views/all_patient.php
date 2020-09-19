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
                    <td>patient_ID</td>
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

                        <a href="edit_patient.php?id=<?=$users[$i]['p_id']?> "><h3 style="color:white">edit disease history</h3></a> 
                        <!-- <a href="delete.php?id=<?=$users[$i]['user_id']?>">Delete</a>  -->
                        <!-- <a href="delete.php?id=<?=$users[$i]['user_id']?>">Delete</a>  -->

                    </td>
                </tr>

                <?php } ?>
                
            </table>
                    

        </div>
        
      
      
</div>
 

      


       <header>
           <div class="menu">
               <ul>
                  <li><a href="#">home</a></li>

                   <li><a href="all_patients.php">all patient</a></li>
                   <!-- <li><a href="edit_patient.php">edit patient disease history</a></li> -->

                   <li><a href="#">appointment</a></li>
                   <li><a href="profile.php">My profile</a></li>
                   <li><a href="editprofile.php">edit profile</a></li>

                   <li><a href="../php/logout.php">logout</a></li>
                   


               </ul>

           </div>
       </header>
      
       


    

    

    
    
    
</body>
</html>