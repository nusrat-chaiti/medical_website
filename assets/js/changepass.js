function validateForm() {
    var x = document.forms["myForm"]["password1"].value;
    var y = document.forms["myForm"]["password2"].value;
    var z = document.forms["myForm"]["password3"].value;
    
    if (x == "") {
      alert("Must Enter Current Password");
      return false;
    }
   
   else if(y == "")
   {
    alert("You must enter New Password");
    return false;

   }
   else if(z == "")
   {
    alert("You must re-enter New Password");
    return false;

   }
   else if(y!=z)
   {
    alert("New password and re-entered password is not Not Same");
    return false;

   }
   
  } 
  function clicked() {
    if (confirm('Are you sure?')) {
        yourformelement.submit();
     } else {
        return false;
     }
   }