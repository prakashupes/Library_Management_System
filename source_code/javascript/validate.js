function validate()
{
    var user=document.getElementById("user").value;
    if(user=="")
    {
        //alert("* user name is required");
        document.getElementById("error1").innerHTML=" (This feild can't be empty!)";
        return false;
    }
    var pass=document.getElementById("pass").value;
    var cpass=document.getElementById("conpass").value;
    if(cpass!=pass)
    {
        document.getElementById("error2").innerHTML=" (Password Not same!)";
        return false;
    }
    var email=document.getElementById("email").value;
    if(email=="")
    {
        //alert("* user name is required");
        document.getElementById("error3").innerHTML=" (This feild can't be empty!)";
        return false;
    }
    var num=document.getElementById("mobile").value;
    if(num=="")
    {
        //alert("* user name is required");
        document.getElementById("error6").innerHTML=" (This feild can't be empty!)";
        return false;
    }
    if (isNaN(num)){  
  document.getElementById("error6").innerHTML="Enter Numeric value only";  
  return false;
    }
    
    
}

