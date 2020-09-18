"use strict"


 
 function nempty()
 {
    var name = document.getElementById("name").value;
    var length =name.length;
    
    if(name == "")
    {  
        document.getElementById("name_Msg").innerHTML="name field can't be empty";
        
    }

    else if( (name>='A' && name<='Z' || name>='a'&& name<='z') && length< 2)
    {   
         document.getElementById("name_Msg").innerHTML=" Name length can't be less then 2";  
        
    }
    
    else if(name>= '0' && name<= '9'||name=='+'||name=='-'||name=='*'||name=='/'||name=='='||name=='@'||name=='$'||name=='%'||name=='!'||name=='|'||name=='?' )
    {
        document.getElementById("name_Msg").innerHTML="name must be characters not special characters. enter valid name";
        
    }
    
 
    else if( name>='A' && name<='Z' || name>='a'&& name<='z')
    {
        Validate();
        
    } 

    
 }
  
function nremover()
{
    document.getElementById('name_Msg').innerHTML = "";
    
}


//username validation


function unempty()
{
   var uname = document.getElementById("uname").value;
   var ulength =uname.length;
   
   if(uname == "")
   {  
       document.getElementById("uname_Msg").innerHTML="user name field can't be empty";
       
   }

   else if( (uname>='A' && uname<='Z' || uname>='a'&& uname<='z') && ulength< 2)
   {   
        document.getElementById("uname_Msg").innerHTML=" Name length can't be less then 2";  
       
   }
   
   
   

   else if( uname>='A' && uname<='Z' || uname>='a'&& uname<='z')
   {
       Validate();
       
   } 

   
}
 
function unremover()
{
   document.getElementById('uname_Msg').innerHTML = "";
   
}

// email check


function f1()
{
        var name=document.getElementById('name').value;
        var email=document.getElementById('email').value;
        var password=document.getElementById('password').value;
        var cpassword=document.getElementById('cpassword').value;
        var uname=document.getElementById('uname').value;
        var gender=document.getElementsByName('gender').value;
        var utype=document.getElementById('utype').value;
        var dob=document.getElementById('dob').value;





			if(name!="" && email!="" && uname!="" && password!="" && cpassword!="" && gender!="" && utype!="" && dob!="" && document.getElementById('email_Msg').innerHTML=="")
			{
				
				var xhttp = new XMLHttpRequest();
			  xhttp.open('POST', '../php/regCheck.php', true);
			  xhttp.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');
			  xhttp.send('name='+name+'&'+'password='+password+'&'+'email='+email+'&'+'uname='+uname+'&'+'cpassword='+cpassword+'&'+'gender='+gender+'&'+'utype='+utype+'&'+'dob='+dob);

             xhttp.onreadystatechange = function ()
             {
                if(this.readyState == 4 && this.status == 200)
                {

                    if(this.responseText != "")
                    {
                        document.getElementById('email_Msg').innerHTML = this.responseText;
                       // document.getElementsByTagName('a')[0].style.display='inline';

                    }
                    else
                    {
                        document.getElementById('email_Msg').innerHTML = "";
                    }
                    
                }	
            }
            
				//document.getElementsByTagName('a')[0].style.display='inline';
			}
    
}
  


function eremover()  
{
    var email = document.getElementById('email').value;
    var xhttp = new XMLHttpRequest();
    xhttp.open('POST', '../php/emailCheck.php', true);
    xhttp.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');
    xhttp.send('email='+email);

    xhttp.onreadystatechange = function ()
    {
        if(this.readyState == 4 && this.status == 200) 
        {

        if(this.responseText != "") 
        {
            document.getElementById('email_Msg').innerHTML = this.responseText;
        }
        
        else
        {
            document.getElementById('email_Msg').innerHTML = "";
        }
        
      }	
    }
   
    
}

// function eempty()
// {
//     var emailvalid=false;
//     if(email!="")
// 	{
// 		if(email.split("@").length>=2)
// 		{
// 			emailsplit=email.split("@");
// 			if(emailsplit[1].split(".").length>=2)
// 			{
				
// 				document.getElementById('email_Msg').innerHTML="";
// 				emailvalid=true;
// 				break;
// 			}
// 			else
// 			{
// 				document.getElementById('email_Msg').innerHTML="Please enter valid email. .com is missing";
// 				emailvalid=false;
// 			}
// 		}
// 		else
// 		{
// 			document.getElementById('email_Msg').innerHTML="Please enter valid email";
// 			emailvalid=false;
// 		}
// 	}
// 	else
// 	{
// 		document.getElementById('email_Msg').innerHTML="Field cannot be empty";
// 		emailvalid=false;
//     }


// }


///validation of pass


function pempty()
{ 
    var password = document.getElementById("password").value;

    if(password=="")
    {
        document.getElementById("pass_Msg").innerHTML="password field can't be empty";

    }

    else
    {
         return true;
       
    }
}

function premover()
{
    document.getElementById("pass_Msg").innerHTML="";
}


//confirm password validation

function cpempty()
{ 
    var cpassword = document.getElementById("cpassword").value;
    var password = document.getElementById("password").value;


    if(cpassword=="")
    {
        document.getElementById("cpass_Msg").innerHTML=" confirm password field can't be empty";

    }
    else if(password != cpassword)
    {
        document.getElementById("cpass_Msg").innerHTML="incorrect confirm password";

    }

    else
    {
         return true;
       
    }
}

function cpremover()
{
    document.getElementById("cpass_Msg").innerHTML="";
}


//date validation


function dobempty()
{
   var dob = document.getElementById("dob").value;
   var date=new Date(dob);
   var month= date.getMonth();
   var day= date.getDate();
   var year= date.getFullYear();

   //var year= document.getElementById("dob").innerHTML=dob.getFullYear();
   
   if(dob == "")
   {  
       document.getElementById("dob_Msg").innerHTML="date field can't be empty";
       
   }
   else if(year > 2005)
   {
    document.getElementById("dob_Msg").innerHTML="your age should be greater than 15";

   }
else
{
    return true;
}

   

   
}
 
function dobremover()
{
   document.getElementById('dob_Msg').innerHTML = "";
   
}

// gender validation


function gempty()
{ 
    if(document.getElementById("r_male").checked)
    {
        return true;
    }
    else if(document.getElementById("r_female").checked)
    { 
        return true;

    }
    else if(document.getElementById("r_other").checked)
    {
        return true;

    }
    else
    {
        document.getElementById("gender_Msg").innerHTML="please select your gender...";
       
    }
   
}

function gremover()
{
    document.getElementById("gender_Msg").innerHTML="";
}

// user type validation


function utremover()
{
    document.getElementById("ut_Msg").innerHTML="";
}



function utempty()
{ 
    var utype = document.getElementById("utype").value;

    if(utype== "")
    {
        document.getElementById("ut_Msg").innerHTML="please select your type";
       
    }
    else
    {
        return true;
    }
}
 
///////////////////////////////////////login validation///////////////////////////


function l_unempty()
{
   var uname = document.getElementById("l_uname").value;
   var ulength =uname.length;
   
   if(uname == "")
   {  
       document.getElementById("l_uname_Msg").innerHTML="user name field can't be empty";
       
   }

   else if( (uname>='A' && uname<='Z' || uname>='a'&& uname<='z') && ulength< 2)
   {   
        document.getElementById("l_uname_Msg").innerHTML=" Name length can't be less then 2";  
       
   }
   
   
   

   else if( uname>='A' && uname<='Z' || uname>='a'&& uname<='z')
   {
       Validate();
       
   } 

   
}
 
function l_unremover()
{
   document.getElementById('l_uname_Msg').innerHTML = "";
   
}

////////////////////////////password for login/////////////////

function l_pempty()
{ 
    var password = document.getElementById("l_password").value;

    if(password=="")
    {
        document.getElementById("l_pass_Msg").innerHTML="password field can't be empty";

    }

    else
    {
         return true;
       
    }
}

function l_premover()
{
    document.getElementById("l_pass_Msg").innerHTML="";
}




function Validate()
{
   
      return true;
    
    
}




// function f1()
// {
//     document.getElementsByTagName('a')[0].style.display = 'inline';
// }