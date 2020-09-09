<?php


session_start();

if (isset($_COOKIE['rememberme']))
{

    echo $_COOKIE['uname'];
    echo $_COOKIE['password'];
}


?>

<?php

include_once '../db/db.php';
session_start();
if(isset($_POST['submit']))
    {

        $uname 		= $_POST['uname'];
        $password 	= $_POST['password'];

        if(empty($uname) || empty($password)){

            echo "null submission";

        }
        else
        {
            $sql = "SELECT * FROM customer WHERE username = '".$uname."' AND password ='".$password."'";
            $result = mysqli_query($conn,$sql);
            $data =mysqli_fetch_assoc($result);

            if(count($data)>0)
            {
                if(isset($_POST['rememberme']))
                {
                  setcookie('rememberme',$_POST['rememberme'], time()+367480000, '/');
                  setcookie('uname', $uname, time()+48900000, '/');
                  setcookie('password', $password, time()+48900000, '/');
                  setcookie('name',$_POST['name'] , time()+48900000, '/');
                  setcookie('email', $_POST['email'], time()+48900000, '/');
                  setcookie('gender',$_POST['gender'], time()+48900000, '/');
                  setcookie('dob', $_POST['dob'], time()+48900000, '/');
                  setcookie('status',"OK",time()+48900000,'/'); 
                  
                  
                  
                 
                  header('location: doctor_dashboard.php');
                
                 
               }
               else
               {

                setcookie('rememberme',$_POST['rememberme'], time()-3600, '/');
                
                setcookie('uname', $uname, time()+3600, '/');
                setcookie('password', $password, time()+3600, '/');
                setcookie('name', $_POST['name'], time()+3600, '/');
                setcookie('email',  $_POST['email'], time()+3600, '/');
                setcookie('gender', $_POST['gender'], time()+3600, '/');

                setcookie('dob', $_POST['dob'], time()+3600, '/');               
                header('location: doctor_dashboard.php');

               
               }
               if($data['user_type']=='Doctor')
               {
                   header('location: ../views/doctor_dashboard.php');
               }
               else if($data['user_type']=='Customer')
               {
                header('location: customer_dashboard.html');


               }
               else if($data['user_type']=='Intern')
               {
                header('location: intern_dashboard.html');

               
               }


            }
            else
            {
                echo "no data found";

            }


        }
        mysqli_close($conn);

    }
    else{

        header ('location: login.php');
    }


?>