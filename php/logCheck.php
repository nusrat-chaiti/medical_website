<?php

session_start();
require_once("../service/userService.php");

// if (isset($_COOKIE['rememberme']))
// {

//     echo $_COOKIE['uname'];
//     echo $_COOKIE['password'];
// }

if(isset($_POST['submit']))
    {
        $uname = $_POST['uname'];
        $password = $_POST['password'];

       // echo $password ;
        if(empty($uname) || empty($password)){

            echo "null submission";

        }
        else
        {
            $users = [
				'uname'=>$uname,
				'upassword'=>$password
            ];

            $data=validate($users);

            if($data>0)
            {
                     
                $_SESSION['uname'] = $data['username'];
                $_SESSION['name']=$data['name'];
                $_SESSION['user_id']=$data['user_id'];
                $_SESSION['user_type']=$data['user_type'];
                 setcookie('uname', $uname, time()+48900000, '/');
                 setcookie('status',"OK",time()+48900000,'/'); 



              //  echo "id:".$data['user_id'];

                //echo "login successful";

                if($data['user_type']=='Doctor')
                {
                    header("location:../views/doctor_dashboard.php?doctorId={$_SESSION['user_id']}");
                }
                else if($data['user_type']=='Customer')
                {
                 header('location: ../views/customer_dashboard.php');
 
 
                }
                else if($data['user_type']=='Intern')
                {
                 header('location: ../views/intern_home.php');
 
                
                }
 
            //     if(isset($_POST['rememberme']))
            //     {
            //       setcookie('rememberme',$_POST['rememberme'], time()+367480000, '/');
            //       setcookie('uname', $uname, time()+48900000, '/');
            //       setcookie('password', $password, time()+48900000, '/');
            //       setcookie('name',$_POST['name'] , time()+48900000, '/');
            //       setcookie('email', $_POST['email'], time()+48900000, '/');
            //       setcookie('gender',$_POST['gender'], time()+48900000, '/');
            //       setcookie('dob', $_POST['dob'], time()+48900000, '/');
            //       setcookie('status',"OK",time()+48900000,'/'); 
            //       $_SESSION['uname']=$user['uname'];
            //       $_SESSION['password']=$user['password'];
            //       $_SESSION['user_type']=$user['user_type'];
            //       $_SESSION['user_id']=$data['user_id'];


                  
                  
                 
            //       header('location: ../views/doctor_dashboard.php');
                
                 
            //    }
            //    else
            //    {

            //     setcookie('rememberme',$_POST['rememberme'], time()-3600, '/');
                
            //      setcookie('uname', $uname, time()+3600, '/');
            //      setcookie('password', $password, time()+3600, '/');
            //      setcookie('name', $_POST['name'], time()+3600, '/');
            //      setcookie('email',  $_POST['email'], time()+3600, '/');
            //      setcookie('gender', $_POST['gender'], time()+3600, '/');

            //      setcookie('dob', $_POST['dob'], time()+3600, '/'); 

                   

            //      $_SESSION['uname']=$user['uname'];
            //      $_SESSION['password']=$user['password'];
            //      $_SESSION['user_type']=$user['user_type'];
            //      $_SESSION['user_id']=$data['user_id'];



            //     header('location: ../views/doctor_dashboard.php?');

               
            //     }
              

            }
            else
            {
                echo "no data found";

            }

            // $_SESSION['uname'] = $username;


        }
      

    }
    else{

        header ('location: ../views/login.php');
    }


?>