<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../assets/style.css">
    <!-- <script type="text/javascript" src="../assets/register.js"></script>
    <script type="text/javascript" src="../assets/login.js"></script> -->
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


            <form id="login" class="input-group" action = "../php/logCheck.php" method = "POST">
                <input type="text" name="uname" class="input-field" placeholder="Username" required>
                <input type="text" name="password" class="input-field" placeholder="password" required>
                <input type="checkbox" name="rememberme" class="check-box"><span>Remember me</span>
                <button type="submit" name="submit" class="submit-btn">Log In</button>

            </form>

            

                        <!--/////////////////////////////// register  ////////////////////////-->

            <form id="register" class="input-group" action = "../php/regCheck.php" method = "POST">
                <input type="text" name="name" class="input-field" placeholder="Name" required>
                <input type="text" name="email" class="input-field" placeholder="Email" required>
                <input type="text" name="uname" class="input-field" placeholder="Username" required>
                 
                <input type="text" name="password" class="input-field" placeholder="Password" required>
                <input type="text" name="cpassword" class="input-field" placeholder="Confirm Password" required>

                <input type="radio" name="gender" class="radio" value="male"><span id ="male">male</span>
                <input type="radio" name="gender" class="radio" value="female"><span id ="female">female</span>
                <input type="radio" name="gender" class="radio" value="other" ><span id ="other">other</span>
                <input type="date" name="dob" class="input-field"  placeholder="date of birth" required>
                <select id ="utype" name="user_type">
                    <option value="">Select User Type</option>
    
                    <option value="Doctor">Doctor</option>
                    <option value="Customer">Customer</option>
                    <option value="Intern">Intern</option>
                    
                 </select> <br>
                 
                <button type="submit" name="submit" class="submit-btn">Register</button>
               
            </form>

        </div>

       

    </div>
    <script type="text/javascript" src="../assets/togg-btn.js"></script>


    <header>

        
        <div class="menu">
            <ul>
                <li><a href="#">Home</a></li>
                <li><a href="#">Login</a></li>
                <li><a href="#">Blog</a></li>
                <li><a href="#">Doctors</a></li>
                <li><a href="#">Interns</a></li>
                <li><a href="#">Corona Section</a></li>
                <li><a href="#">Contact us</a></li>


            </ul>

        </div>
        
    </header>

  
    
</body>
</html>