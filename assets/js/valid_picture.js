function validateForm() {
    var x = document.forms["myForm"]["file"].value;
    if (x == "") {
      alert("Must select a picture");
      return false;
    }

  }