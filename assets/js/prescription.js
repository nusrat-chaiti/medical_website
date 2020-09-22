function validate() {
    var x = document.forms["myForm"]["message"].value;
    
    
    if (x == "") {
      alert("Empty message can not be sent");
      return false;
    }
   
   
   else
   {
    alert("message sent successfully!!!");


   }
   
  
}

function mess_empty()
{ 
    var message = document.getElementById("message").value;

    if(message=="")
    {
        document.getElementById("pres_Msg").innerHTML="please enter your prescription";

    }

    else
    {
         return true;
       
    }
}

function mess_remover()
{
    document.getElementById("pres_Msg").innerHTML="";
}
