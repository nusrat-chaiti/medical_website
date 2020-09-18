<?php 
session_start();
// require_once('../php/session_header.php');

require_once('../service/userService.php');

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
          <div class="dash_text">
          <p><b>NAME:

          </b>
          <?php
           echo $_COOKIE['uname']; 
        // $uname=$_COOKIE['uname'];
        // $doctors=getByID($uname);
        // echo $doctors['l_uname'];
          ?>
        </p><br>
          <p><b>EMAIL:</b><?php  ?></p>

                <p><b>DEGREE:</b>Master of Medical Science (MMSc, MMedSc)</p>
                <p><b>WORK PLACE:</b>Massachusetts General Hospital</p>
                <p><b>ABOUT:</b>"Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem. Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur? Quis autem vel eum iure reprehenderit qui in ea voluptate velit esse quam nihil molestiae consequatur, vel illum qui dolorem eum fugiat quo voluptas nulla pariatur?"</p>
                <!-- <div class="cp"><p><i>copyright@ONLINE_DOCTOR(Nusrat Alam Chaiti)</i></p></div> -->

        </div>
        
      
      
</div>
 

      


       <header>
           <div class="menu">
               <ul>
                  <li><a href="#">home</a></li>

                   <li><a href="all_patients.php">patient</a></li>
                   <li><a href="#">appointment</a></li>
                   <li><a href="profile.php">My profile</a></li>
                   <li><a href="../php/logout.php">logout</a></li>
                   


               </ul>

           </div>
       </header>
      
       


    

    

    
    
    
</body>
</html>