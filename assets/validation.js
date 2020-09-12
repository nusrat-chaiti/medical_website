function val()
{
	var namevalid=false;
	var userName=document.getElementById('name').value;
	var email=document.getElementById('email').value;
    var gender=document.myform.gender;
    //var ug = document.forms["myform"]["userType"].value;
    var ug = document.getElementById('selection').value;
    var ph = document.getElementById('phone').value;
    var uname = document.getElementById('uname').value;
    var pass = document.getElementById('password').value;
    var pass1 = document.getElementById('password1').value;
    
    //name validation
	if(userName=="")
	{
        
		document.getElementById('namemsg').innerHTML="Field cannot be empty";
		namevalid=false;
	}
	else
	{
		if((userName[0]>='A' && userName[0]<='Z') ||(userName[0]>='a' && userName[0]<='z'))
		{
			if(userName.split(" ").length>=2)
			{
				var counter=0;
				while(counter<userName.length)
				{
					if(!((userName[counter]>='A' && userName[counter]<='Z') ||(userName[counter]>='a' && userName[counter]<='z') || userName[counter]=='.' || userName[counter]=='-' || userName[counter]==' '))
					{
						document.getElementById('namemsg').innerHTML="Name can only contain A-Z, a-z, . and -";
						namevalid=false;
					}
					counter=counter+1;
				}
				document.getElementById('namemsg').innerHTML="";
				namevalid=true;
				break;
			}
			else
			{
				document.getElementById('namemsg').innerHTML="Name must contain 2 words";
				namevalid=false;
			}
		}
		else
		{
			document.getElementById('namemsg').innerHTML="Name must start with a letter";
			namevalid=false;
		}
    }
    
    //email valodation 

	var emailvalid=false;
	if(email!="")
	{
		if(email.split("@").length>=2)
		{
			emailsplit=email.split("@");
			if(emailsplit[1].split(".").length>=2)
			{
				
				document.getElementById('emailmsg').innerHTML="";
				emailvalid=true;
				break;
			}
			else
			{
				document.getElementById('emailmsg').innerHTML="Please enter valid email. .com is missing";
				emailvalid=false;
			}
		}
		else
		{
			document.getElementById('emailmsg').innerHTML="Please enter valid email";
			emailvalid=false;
		}
	}
	else
	{
		document.getElementById('emailmsg').innerHTML="Field cannot be empty";
		emailvalid=false;
    }
    //user name validation
    var unamevalid = false;
    if(uname!='')
    {
        document.getElementById('unamemsg').innerHTML="";
		unamevalid= true;
		break;

    }
    else
    {
        document.getElementById('unamemsg').innerHTML="Field cannot be empty";
        unamevalid = false

    }

    //gender validation 
	var gendervalid=false;
	for(var i=0;i<gender.length;i++)
	{
		document.getElementById('gendermsg').innerHTML="Field cannot be empty";		
		if(gender[i].checked)
		{
			document.getElementById('gendermsg').innerHTML="";
			gendervalid = true;
			break;
		}
    }
    
    //phone number validation
    var phvalid = false;

    if(ph!='' && isInteger(ph) )
    {
        if(ph.length()>10 && ph.length()<12)
        {
            document.getElementById('phmsg').innerHTML="";
			phvalid = true;
			break;

        }
        else{
            document.getElementById('phmsg').innerHTML=" Must be 11 digit";
            phvalid= false;

        }
        
    }
    else{
        document.getElementById('phmsg').innerHTML="Enter valid phone number";
        phvalid = false;
    }
    
    

    //UserType validation 
    var uservalid = false;
	
     if(ug !='null')
	{
		
        document.getElementById('usermsg').innerHTML="";
        uservalid = true;

	}
	else{
	
        document.getElementById('usermsg').innerHTML="Must select one user type";
        uservalid = false;
    }
    
    //password validation


	var passvalid =false;
	
	
	if(pass !="")
	{
		
			document.getElementById('passwordmsg').innerHTML="";
			passvalid=true;
		
	}
	else
	{
		document.getElementById('passwordmsg').innerHTML="Field cannot be empty";
		passvalid=false;
    }
    
    // Confirm password validation
    var cpassvalid = false;
    if(pass == pass1)
    {
        document.getElementById('pass2msg').innerHTML="";
			cpassvalid=true;

    }
    else{
        document.getElementById('pass2msg').innerHTML="Password did not match";
		cpassvalid=false;

    }


 //date validation 
	var dobvalid=false;
	var bd=document.getElementById('birthday').value;
	
	if(bd!="")
	{
		
			document.getElementById('dobmsg').innerHTML="";
			dobvalid=true;
		
	}
	else
	{
		document.getElementById('dobmsg').innerHTML ="Field cannot be empty";
		dobvalid=false;
    }

	if(namevalid && emailvalid && gendervalid && dobvalid && uservalid && passvalid && phvalid && unamevalid)
	{
		return true;
	}
	else
	{
		return false;
	}
}

function removername()
{
	var userName =document.getElementById('name').value;
	if(userName!="")
	{
		document.getElementById('namemsg').innerHTML="";
	}
}
function removeremail()
{
	var email =document.getElementById('email').value;
	if(email!="")
	{
		document.getElementById('emailmsg').innerHTML="";
	}
}
function removergender()
{
	document.getElementById('gendermsg').innerHTML="";
}
function removerdob()
{
	var bd =document.getElementById('birthday').value;
	
	if(bd!="")
	{
		document.getElementById('dobmsg').innerHTML="";
	}
}


function removerphone()
{
	var phone =document.getElementById('phone').value;
	if(phone!="")
	{
		document.getElementById('phmsg').innerHTML="";
	}
}
function removeruname()
{
    var uname =document.getElementById('uname').value;
	
	if(uname!="")
	{
		document.getElementById('unamemsg').innerHTML="";
	}

}
function removerpass()
{
    var pass =document.getElementById('passwordmsg').value;
	
	if(pass!="")
	{
		document.getElementById('').innerHTML="";
	}

}
function removerpass1()
{
    var pass1 =document.getElementById('pass2msg').value;
	
	if(pass1!="")
	{
		document.getElementById('').innerHTML="";
	} 

}
function removerutype()
{
    var utype =document.getElementById('selection').value;
	
	if(utype!="")
	{
		document.getElementById('').innerHTML="";
	} 

}