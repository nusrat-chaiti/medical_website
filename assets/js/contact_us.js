
function un_empty()
{
   var uname = document.getElementById("uname").value;
   var ulength =uname.length;
   
   if(uname == "")
   {  
       document.getElementById("un_Msg").innerHTML="name field can't be empty";
       
   }

   else if( (uname>='A' && uname<='Z' || uname>='a'&& uname<='z') && ulength< 2)
   {   
        document.getElementById("un_Msg").innerHTML=" Name length can't be less then 2 character";  
       
   }
   
   
   

   else if( uname>='A' && uname<='Z' || uname>='a'&& uname<='z')
   {
       Validate();
       
   } 

   
}
 
function un_remover()
{
   document.getElementById('un_Msg').innerHTML = "";
   
}
///////////////////////////////////////message//////////////////////////


function m_empty()
{
   var uname = document.getElementById("message").value;
   var ulength =uname.length;
   
   if(uname == "")
   {  
       document.getElementById("m_Msg").innerHTML="message field can't be empty";
       
   }

   else if( (uname>='A' && uname<='Z' || uname>='a'&& uname<='z') && ulength< 10)
   {   
        document.getElementById("m_Msg").innerHTML=" message length can't be less then 10 character";  
       
   }
   
   
   

   else if( uname>='A' && uname<='Z' || uname>='a'&& uname<='z')
   {
       Validate();
       
   } 

   
}
 
function m_remover()
{
   document.getElementById('m_Msg').innerHTML = "";
   
}

