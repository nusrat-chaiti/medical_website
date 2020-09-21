

function pd_empty()
{
   var uname = document.getElementById("p_disease").value;
   var ulength =uname.length;
   
   if(uname == "")
   {  
       document.getElementById("pd_Msg").innerHTML="disease field can't be empty";
       
   }

   else if( (uname>='A' && uname<='Z' || uname>='a'&& uname<='z') && ulength< 2)
   {   
        document.getElementById("pd_Msg").innerHTML=" disease can't be less then 2 charecter";  
       
   }
   
   
   

   else if( uname>='A' && uname<='Z' || uname>='a'&& uname<='z')
   {
       Validate();
       
   } 

   
}
 
function pd_remover()
{
   document.getElementById('pd_Msg').innerHTML = "";
   
}
/////////////////////////////patient disease history//////////////////////



function pdh_empty()
{
   var uname = document.getElementById("p_disease_his").value;
   var ulength =uname.length;
   
   if(uname == "")
   {  
       document.getElementById("pdh_Msg").innerHTML="history field can't be empty";
       
   }

   else if( (uname>='A' && uname<='Z' || uname>='a'&& uname<='z') && ulength< 5)
   {   
        document.getElementById("pdh_Msg").innerHTML="history lengthcan't be less then 5 charecter";  
       
   }
   
   
   

   else if( uname>='A' && uname<='Z' || uname>='a'&& uname<='z')
   {
       Validate();
       
   } 

   
}
 
function pdh_remover()
{
   document.getElementById('pdh_Msg').innerHTML = "";
   
}