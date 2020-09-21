function validateForm() {
    var x = document.forms["myForm"]["message"].value;
    
    
    if (x == "") {
      alert("Empty message can not be sent");
      return false;
    }
   else if(x.split(" ").length<2)
   {
    alert("Name must contain 2 words");
    return false;

   }
   
  
}