

 //"use strict"
    
 var tog_login = document.getElementById("login");
 var tog_register=document.getElementById("register");
 var tog_btn = document.getElementById("btn");
 
 function login_f()
 {
   
     tog_login.style.left = "50px";
     tog_register.style.left = "450px";
     tog_btn.style.left = "0px";
 
 
 
 }
 
 function register()
 {
     tog_login.style.left = "-400px";
    tog_register.style.left = "50px";
    tog_btn.style.left = "110px";
 }