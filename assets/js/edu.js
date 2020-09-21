function validateForm() {
    var x = document.forms["myForm"]["name"].value;
    var y = document.forms["myForm"]["inst"].value;
    var z = document.forms["myForm"]["acm"].value;
    if (x == "") {
      alert("Name must be filled out");
      return false;
    }
   else if(x.length<2)
   {
    alert("Enter Valid Name");
    return false;

   }
   else if(y=="")
   {
    alert("Instituition Name must be filled out");
    return false;

   }
   else if(y.length<2)
   {
    alert("Enter Valid Instituition Name");
    return false;

   }
   else if(z=="")
   {
    alert("Must select a date");
    return false;

   }
  } 