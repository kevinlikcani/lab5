function validateEmail(mail) 
{
  if (/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/.test(mail))
  {
    return true;
  }
    return (false);
}

function Reset()
{
  document.getElementsById("ballSelected").reset();
  document.getElementsById("cleatSelected").reset();
  document.getElementsById("guardSelected").reset();
  document.getElementsById("quantity").reset();
  document.getElementsById("username").reset();
  document.getElementsById("password").reset();
  document.getElementById("shipping").reset();
 
}

function ValidateInput()
{  
 
  let username = document.getElementById("username").value;
  let password = document.getElementById("password").value;
  let quantity1 = document.getElementById("q1").value;
  let quantity2 = document.getElementById("q2").value;
  let quantity3 = document.getElementById("q3").value;
  let radioq1 = document.getElementById("qr1").checked;
  let radioq2 = document.getElementById("qr2").checked;
  let radioq3 = document.getElementById("qr3").checked;

  
    if(radioq1 == true && quantity1 == "") 
    {
        alert ( "Please type in a quantity for the soccer ball." );
	return false;
    } 
    else if(radioq2 == true && quantity2 == "") 
    {
        alert ( "Please type in a quantity for the soccer cleats." );
	return false;
    }  
    else if(radioq3 == true && quantity3 == "") 
    {
        alert ( "Please type in a quantity for the shin guards." );
	return false;
    }  
    else if(radioq1 == false && radioq2 == false && radioq3 == false) 
    {
        alert ( "Please select an item to buy" );
	return false;
    }  
    else if(validateEmail(username) == false) 
    {
        alert ( "Please type in a valid username." );
	return false;
    } 
    else if(password == "")
    {
        alert ( "Please type in a password." );
	return false;
    }   
    else if (document.getElementById("shipping").value == "None" ) 
    {
        alert ( "Please select a shipping method" );
        return false;
  }	
    else
    {
	document.myForm.submit();
	return true;	
    }
}