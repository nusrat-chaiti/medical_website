

////////////////////////////////////////password field of edit doctor/////////////////////////

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


//////////////////////////////////edit field of username/////////////////


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
//////////////////////email field////////////////////

function eremover()  
{
    document.getElementById("email_Msg").innerHTML="";

   
    
}

function eempty()
{
    var email = document.getElementById("email").value;
    var pos =email.search("@");
    var pos1 = email.search(".com");

    if(email=="")
    {
       document.getElementById("email_Msg").innerHTML="field can't be empty";
        window.evalid=false;
    }
    else if (pos==-1 || pos1==-1|| pos1 < pos) 
    {
        document.getElementById("email_Msg").innerHTML="invalid email must be like (sample@example.com)";
        window.evalid=false;
    }
    else
    {
        window.evalid=true;
    }
}


  ////////////////////////////////////degree/////////////////////////

  
function d_empty()
{
   var uname = document.getElementById("degree").value;
   var ulength =uname.length;
   
   if(uname == "")
   {  
       document.getElementById("degree_Msg").innerHTML="degree field can't be empty";
       
   }

   else if( (uname>='A' && uname<='Z' || uname>='a'&& uname<='z') && ulength< 2)
   {   
        document.getElementById("degree_Msg").innerHTML=" degree length can't be less then 2";  
       
   }
   
   
   

   else if( uname>='A' && uname<='Z' || uname>='a'&& uname<='z')
   {
       Validate();
       
   } 

   k
}
 
function d_remover()
{
   document.getElementById('degree_Msg').innerHTML = "";
   
}

/////////////////////////////////////specialist////////////////////////////


function s_empty()
{
   var uname = document.getElementById("specialist").value;
   var ulength =uname.length;
   
   if(uname == "")
   {  
       document.getElementById("specialist_Msg").innerHTML="field can't be empty";
       
   }

   else if( (uname>='A' && uname<='Z' || uname>='a'&& uname<='z') && ulength< 3)
   {   
        document.getElementById("specialist_Msg").innerHTML="length can't be less then 3 charecter";  
       
   }
   
   
   

   else if( uname>='A' && uname<='Z' || uname>='a'&& uname<='z')
   {
       Validate();
       
   } 

   
}
 
function s_remover()
{
   document.getElementById('specialist_Msg').innerHTML = "";
   
}


///////////////////////////////workplace//////////////////


function w_empty()
{
   var uname = document.getElementById("workplace").value;
   var ulength =uname.length;
   
   if(uname == "")
   {  
       document.getElementById("work_Msg").innerHTML="work place field can't be empty";
       
   }

   else if( (uname>='A' && uname<='Z' || uname>='a'&& uname<='z') && ulength< 3)
   {   
        document.getElementById("work_Msg").innerHTML=" place name length can't be less then 3 charecter";  
       
   }
   
   
   

   else if( uname>='A' && uname<='Z' || uname>='a'&& uname<='z')
   {
       Validate();
       
   } 

   
}
 
function w_remover()
{
   document.getElementById('work_Msg').innerHTML = "";
   
}

/////////////////////////////about/////////////////////////


function a_empty()
{
   var uname = document.getElementById("about").value;
   var ulength =uname.length;
   
   if(uname == "")
   {  
       document.getElementById("about_Msg").innerHTML="about field can't be empty";
       
   }

   else if( (uname>='A' && uname<='Z' || uname>='a'&& uname<='z') && ulength< 10)
   {   
        document.getElementById("about_Msg").innerHTML=" about message length can't be less then 10 charecter";  
       
   }
   
   
   

   else if( uname>='A' && uname<='Z' || uname>='a'&& uname<='z')
   {
       Validate();
       
   } 

   
}
 
function a_remover()
{
   document.getElementById('about_Msg').innerHTML = "";
   
}

//////////////////////
function validate() {
    var x = document.forms["profile_2"]["d_degree"]["d_workplace"]["d_about"].value;
    
    
    if (x == "") {
      alert("Empty message can not be sent");
      return false;
    }
   
   else
   {
    alert("message sent successfully!!!");


   }
   
  
}
