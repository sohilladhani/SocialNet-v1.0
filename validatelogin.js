function validatelogin(login)
{
	var email = document.login.email.value;
	var check_email = /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;
	var password = document.login.password.value;

	if((email=="") || (!check_email.test(email)))
    {
        document.getElementById('validateemail').innerHTML="<font color='red' size='2'>Invalid Email</font>";
        return false;
    }

    if((password==""))
    {
    	document.getElementById('pass').innerHTML="<font color='red' size='2'>Password must be not be empty</font>";
        return false;
    }

    else
    {
    	return true;
    }

}