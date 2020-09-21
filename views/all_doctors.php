<?php
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
    <script type="text/javascript" src="../assets/js/contact_us.js"></script>


    <title>doctor dashboard</title>
</head>
<body>
<div class="dash-info">

   
          <div class="dash_view">
         
          <h2>doctors list</h2>

<table border="1">
    <tr>
        <td>d_ID</td>
        <td>specialist</td>

        <td>degree</td>
        <td>work place</td>
        <td>about</td>
    </tr>

    <?php  
        $users = getAlldoctor();
        
        for ($i=0; $i != count($users); $i++) {  ?>
    <tr>
        <td><?=$users[$i]['d_id']?></td>
        <td><?=$users[$i]['d_specialist']?></td>

        <td><?=$users[$i]['d_degree']?></td>
        <td><?=$users[$i]['d_workplace']?></td>
        <td><?=$users[$i]['d_about']?></td>

        <td>
        <!-- <input type="hidden" name="d_id" value="<?=$users[$i]['p_id']?>"> -->

            <!-- <a href="edit_patient.php?id=<?=$users[$i]['p_id']?> "><h4 style="color:white">edit disease history</h4></a> <hr> -->
            <!-- <a href="delete_patient.php?id=<?=$users[$i]['p_id']?>"><h4 style="color:pink">delete</h4></a><hr> -->
            <!-- <a href="prescribe_patient.php?id=<?=$users[$i]['p_id']?>"><h4 style="color:indigo">prescription</h4></a>  -->


        </td>
    </tr>

    <?php } ?>
    
</table>
        

        </div>
        
      
      
</div>
 

      


       <header>
           <div class="menu">
               <ul>
                <li><a href="../index.html">Home</a></li>
                <li><a href="login.php">Login</a></li>
                <li><a href="blog.html">Blog</a></li>
                <li><a href="all_doctors.php">Doctors</a></li>
                <li><a href="all_interns.php">Interns</a></li>
                <li><a href="#">Corona Section</a></li>
                <li><a href="contact_us.html">Contact us</a></li>


               </ul>

           </div>
       </header>
      
       


    

    

    
    
    
</body>
</html>