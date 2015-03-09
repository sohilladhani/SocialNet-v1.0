function validate(signup)
{
    var email = document.signup.email.value;
    var name = document.signup.name1.value;
    //var check_name = /^[A-Za-z0-9 ]{6,30}$/;
    var password = document.signup.password.value;
    var check_pass = /^[A-Za-z0-9 ]{6,10}$/;
    var repassword = document.signup.repassword.value;
    var check_email = /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;
    var gender = document.signup.gender.selectedIndex;
    var date = document.signup.date.selectedIndex;
    var month = document.signup.month.selectedIndex;
    var year = document.signup.year.selectedIndex;

    if(name=="") //|| (!check_name.test(name)))
    {
        document.getElementById('name').innerHTML="<font color='red' size='2'>Name must not be empty</font>";
        return false;
    }

    if((email=="") || (!check_email.test(email)))
    {
        document.getElementById('validateemail').innerHTML="<font color='red' size='2'>Invalid Email</font>";
        return false;
    }

    if(gender==0)
    {
        document.getElementById('gender').innerHTML="<font color='red' size='2'>Enter Male or Female</font>";
        return false;
    }
    
    if((password=="") || (!check_pass.test(password)))
    {
    document.getElementById('pass').innerHTML="<font color='red' size='2'>Password must be of 6-10 characters</font>";
        return false;
    }


    if(password!=repassword)
    {
        document.getElementById('inner').innerHTML="<font color='red' size='2'>Passwords must match</font>";
        return false;
    }

    if(date==0 || month==0 || year==0)
    {
        document.getElementById('dob').innerHTML="<font color='red' size='2'>Enter the date</font>";
        return false;
    }

    else
    {
        return true;
    }

}