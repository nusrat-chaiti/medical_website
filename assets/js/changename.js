function validateForm() {
    var x = document.forms["myForm"]["name"].value;
    var y = document.forms["myForm"]["password"].value;
    
    if (x == "") {
      alert("Name must be filled out");
      return false;
    }
   else if(x.split(" ").length<2)
   {
    alert("Name must contain 2 words");
    return false;

   }
   else if(y=="")
   {
    alert("You must enter your password");
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