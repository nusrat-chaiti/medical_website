function validateForm() {
    var x = document.forms["myForm"]["about"].value;
    if (x == "") {
      alert("You must write something about you!!");
      return false;
    }
    else if(x.length<10)
    {
      alert("Please Write More !!");
      return false;

    }
  }