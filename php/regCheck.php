
<?php

  include_once '../db/db.php';


  if(isset($_POST['submit']))
	{
    



		if($_POST['name'] != "" and $_POST['email'] != "" and $_POST['uname'] != "" and $_POST['password'] != "" and $_POST['cpassword'] != "" and $_POST and $_POST['dob'] != "" and $_POST['gender'] !="" )
		{


            $name = $_POST['name'];
            $uname = $_POST['uname'];
            $email = $_POST['email'];
            $password = $_POST['password'];
            $cpassword = $_POST['cpassword'];
            $date =$_POST['dob'];
            $user_type = $_POST['user_type'];
            $gender=$_POST['gender'];

            ///////////
            $user = [
              'uname'=> $uname,
              'password'=> $password,
              'email'=> $email,
              'user_type'=>$user_type
            ];

            //checking password

			if($_POST['password'] == $_POST['cpassword'])
			{
                  
              

                $sql = "INSERT INTO customer (name, email, username, password, gender, dob, user_type) VALUES ('$name','$email','$uname','$password','$gender','$date','$user_type')";
                if(mysqli_query($conn, $sql))
             {
               
                header('location:login.php');   //need to do php
                echo "Insert successfull";
               
             }
             else{

                echo "inset is not successful, please try again...";
             }
             if($user_type =='doctor')
             {
              $sql2 = "insert into doctor values ('{$user['name']}','{$user['uname']}','{$user['email']}' ,'x', 'Y', 'Z','A','B','C')";

             }






				//-----------------------------

				//echo"successful";
				header('location:../views/login.php');
            }

            //checking name validation

           
            else if($name[0]>='A' && $name[0]<='Z' || $name[0]>='a'&& $name[0]<='z')
            {
                for($i = 1; $i < strlen($name); $i++)
                {
                      if($name>='A'&& $name<='Z' || $name>='a'&& $name<='z' || $name=='.' || $name=='-'||$name=='' )
                      {
                          echo "valid name";
                      }
         
                      else {
                          echo "name is not valid";
                      }
                }


            }

            //validate date
            // who will register in our website his age should be greater tha 15

            else if(($date>=1 && $date<=31) && ($month >=1 && $month<=12) && ($year >=1900 && $year <=2002))
            {
                echo "valid date !";
                
            }



            
			else
			 {  echo" password didnt match";
				// header('location:registration.html');
             }
             
             if($_POST['gender']=='Male')
             {
               $gender = 'Male';
                  
             }
             elseif($_POST['gender']=='Female')
             {
               $gender = 'Female';
             }
   
             elseif($_POST['gender']=='Other'){
               $gender = 'Other';
             } 

            //  elseif($post['user_type']=='')

           
		}
		else
			{// header('location:registration.html');
			echo"some informations are missing";
            }
            
	}
	else
	{	header('index.html');
		//echo"utvajh";
	}




?>