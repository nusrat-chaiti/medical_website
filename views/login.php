
<?php
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../assets/style.css">

    <script type="text/javascript" src="../assets/js/register.js"></script>
    <!-- <script type="text/javascript" src="../assets/login.js"></script> -->
    <!-- <script type="text/javascript" src="../assets/togg-btn.js"></script> -->
    
    <title>login and registration</title>
</head>
<body>


    <div class="hero">

        <div class="form-box">
            <div  class="button-box">
                <div id="btn"></div>
                <button type="button" class="toggle-btn" id="tog-1" onclick="login_f()">LOGIN</button>
                <button type="button" class="toggle-btn" id="tog-2" onclick="register()">REGISTER</button>

            </div>
                
            <!--/////////////////////////////// login ////////////////////////-->
            <!-- onsubmit="return validate()" -->

            <form id="login" class="input-group" action = "../php/logCheck.php"  method = "POST">
                <input type="text" id="l_uname" name="uname" class="input-field" placeholder="Username" onkeyup="l_unremover()" onblur="l_unempty()"  required> <b><i id="l_uname_Msg"></i></b><br>
                <input type="password" id="l_password" name="password" class="input-field" placeholder="password"  onkeyup="l_premover()" onblur="l_pempty()" required> <b><i id="l_pass_Msg"></i></b><br>
                <input type="checkbox" name="rememberme" class="check-box"><span>Remember me</span>
                <button type="submit" name="submit" class="submit-btn">Log In</button>

            </form>

            

                        <!--/////////////////////////////// register  ////////////////////////-->

            <form id="register" class="input-group" action = "../php/regCheck.php" onsubmit="return validate()" method = "POST">
                <input type="text" name="name" id="name" class="input-field" placeholder="Name" onkeyup="nremover()" onblur="nempty()" required> <b><i id="name_Msg"></i></b><br>
                <input type="email" name="email" id="email" class="input-field" placeholder="Email" onkeyup="eremover()" onblur="eempty()" onmouseout="eempty()" required > <b><i id="email_Msg"></i></b><br>
                <input type="text" name="uname" id="uname" class="input-field" placeholder="Username" onkeyup="unremover()" onblur="unempty()" required> <b><i id="uname_Msg"></i></b><br>
                 
                <input type="password"  name="password" id="password" class="input-field" placeholder="Password" onkeyup="premover()" onblur="pempty()" required> <b><i id="pass_Msg"></i></b><br>
                <input type="password" id="cpassword" name="cpassword" class="input-field" placeholder="Confirm Password" onkeyup="cpremover()" onblur="cpempty()" required> <b><i id="cpass_Msg"></i></b><br>

                <input type="radio" name="gender" class="radio" value="male" id="r_male" onclick="gremover()"  onmouseout="gempty()" ><span id ="male">male</span>
                <input type="radio" name="gender" class="radio" value="female" id="r_female" onclick="gremover()"  onmouseout="gempty()" ><span id ="female">female</span>
                <input type="radio"  name="gender" class="radio" value="other" id="r_other" onclick="gremover()"  onmouseout="gempty()"><span id ="other">other</span>  
                <b><i id="gender_Msg"></i></b><br>
                


                <input type="date" id="dob" name="dob" class="input-field"  placeholder="date of birth" onkeyup="dobremover()" onblur="dobempty()" onclick="dobremover()" required> <b><i id="dob_Msg"></i></b><br>

                <select id ="utype" name="user_type"  onmouseout="utempty()" onclick="utremover()" onmouseover="utremover()"><b><i id="ut_Msg"></i></b><br>
                    <option value="">Select User Type</option>
    
                    <option value="Doctor">Doctor</option>
                    <option value="Customer">Customer</option>
                    <option value="Intern">Intern</option>
                    
                 </select> <b><i id="ut_Msg"></i></b><br>
                 
                <button type="submit" name="submit" class="submit-btn" onclick="f1()">Register</button>
               
            </form>

        </div>

       

    </div>
    <script type="text/javascript" src="../assets/togg-btn.js"></script>


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