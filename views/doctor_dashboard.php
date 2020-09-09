<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>doctor dashboard</title>
</head>
<body>
    <table width ="100%" border="1">
        <tr>
            <td colspan="2">
                <p align ="center"><b>ONLINE DOCTOR</b></p>

                <p align ="center"><i>get medical treatment from home</i></p>
                <p align="right"> <a href="patient.php">patient</a> | <a href="edit_profile.php">edit profile picture</a>| <a href="view_profile.php">view profile</a>|  <a href="change_password.html">change password </a> |  <a href="logout.php">Logout</a></p>

            </td>


        </tr>
        <tr>
            <!-- <td>
                <ul>
                    <li>
                        <p align="left"> <a href="view_profile.php">view profile</a>   </p>
                    </li>
                    <li>
                        <P align ="left"><a href="edit_profile.php">edit profile</a> </P>
                    </li>
                    <li>
                        <P align ="left"><a href="view_patients.html">view patients</a> </P>
                    </li>
                </ul>
            </td> -->
            <td colspan="2" align="center">
                <!-- <fieldset>
                    <legend><b>PROFILE PICTURE</b></legend>
                    <form action="picture.php" method="post" enctype="multipart/form-data">
                
                        
                        <br />
                        <input name = "picture" type="file">
                        <hr />
                        <input type="submit" name ="submit" >
                    </form>
                </fieldset> -->
              <p><b><i>WELCOME TO YOUR ACCOUNT!! <?php echo $_COOKIE['uname']; ?> </i></b></p>

            </td>

            
        </tr>
        <tr>
            <td align="center" colspan="2">
                <p><b>our interns:</b></p>

                <img src="image/intern-1.jpg" alt=" " style="width:280px;height:210px;" >
                <img src="image/intern-2.jpg" alt=" " style="width:280px;height:210px;" >
                <img src="image/intern-3.jpg" alt=" " style="width:280px;height:210px;" >
            </td>
        </tr>
        <tr>
            <td align="center" colspan="2" >
                <p><b>SEE LATEST MEDICAL BLOGS:</b></p>
            
            
                <img src="image/blog-1.jpg" alt=" " style="width:280px;height:210px;" >
                <p>
                    "But I must explain to you how all this mistaken idea of denouncing pleasure and praising pain was born and I will give you a complete account of the system, and expound the actual teachings of the great explorer of the truth, the master-builder of human happiness. No one rejects, dislikes, or avoids pleasure itself, because it is pleasure, but because those who do not know how to pursue pleasure rationally encounter consequences that are extremely painful. Nor again is there anyone who loves or pursues or desires to obtain pain of itself, because it is pain, but because occasionally circumstances occur in which toil and pain can procure him some great pleasure. To take a trivial example, which of us ever undertakes laborious physical exercise, except to obtain some advantage from it? But who has any right to find fault with a man who chooses to enjoy a pleasure that has no annoying consequences, or one who avoids a pain that produces no resultant pleasure?"

                </p>
                <input type="button" name="blog" value="read more medical blogs">


            </td>
        </tr>
        <tr >
            <td align="center" colspan="2">
                <p><i>copyright@ONLINE_DOCTOR(Nusrat Alam Chaiti)</i></p>
            </td>
        </tr>


    </table>
    
</body>
</html>