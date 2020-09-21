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
          <h2><b><i>WELCOME TO YOUR ACCOUNT!! <?php echo $_COOKIE['uname']; ?> </i></b></h2><br><br>
          <h2>you can get started by seeing your patients and can see your appointments.</h2>
          <div class="cp"><p><i>copyright@ONLINE_DOCTOR(Nusrat Alam Chaiti)</i></p></div>

        </div>
        
 
      
</div> 

      


       <header>
           <div class="menu">
               <ul>
                  <li><a href="#">home</a></li>

                   <li><a href="all_patient.php">all patient</a></li>
                   <!-- <li><a href="edit_patient.php">edit patient disease history</a></li> -->

                   <li><a href="all_appointment.php">appointment</a></li>
                   <li><a href="profile.php">My profile</a></li>
                   <li><a href="editprofile.php">edit profile</a></li>

                   <li><a href="../php/logout.php">logout</a></li>
                   


               </ul>

           </div>
       </header>
      
       


    

    

    
    
    
</body>
</html>