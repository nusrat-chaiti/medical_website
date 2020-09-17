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
// email check


// function f1()
// {
//     var name=document.getElementById('name').value;
//     var email=document.getElementById('email').value;
// 	var password=document.getElementById('password').value;

// 			if(name!="" && email!="" && password!="" && document.getElementById('email_Msg').innerHTML=="")
// 			{
				
// 				var xhttp = new XMLHttpRequest();
// 			 xhttp.open('POST', '../php/regCheck.php', true);
// 			 xhttp.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');
// 			 xhttp.send('name='+name+'&'+'password='+password+'&'+'email='+email);

//              xhttp.onreadystatechange = function ()
//              {
//                 if(this.readyState == 4 && this.status == 200)
//                 {

//                     if(this.responseText != "")
//                     {
//                         document.getElementById('email_Msg').innerHTML = this.responseText;
//                         document.getElementsByTagName('a')[0].style.display='inline';

//                     }
//                     else
//                     {
//                         document.getElementById('email_Msg').innerHTML = "";
//                     }
                    
//                 }	
//             }
            
// 				//document.getElementsByTagName('a')[0].style.display='inline';
// 			}
    
// }
  

// function empty()
// {

// }
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



 


function Validate()
{
   
      return true;
    
    
}

// function f1()
// {
//     document.getElementsByTagName('a')[0].style.display = 'inline';
// }