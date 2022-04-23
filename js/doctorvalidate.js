function validateForm(){
    var username = document.getElementById("name").value;
    var email = document.getElementById("email").value;
    var phone = document.getElementById("phone").value;
    var password1 = document.getElementById("password1").value;
    var password2 = document.getElementById("password2").value;
    var address = document.getElementById("address").value;
    var gender = document.getElementById("gender").value;
    var did = document.getElementById("did").value;
   

    var usernameRE =   /^(?!_*\_*\_*)[A-Za-z]([A-Za-z0-9_]*[A-Za-z0-9])?$/;
    if (!username.match(usernameRE)) {
        document.getElementById("registerAlert").innerHTML = "<b>Invalid username! </b>";
        return false;
    } else if (password1.length < 2) {
        document.getElementById("registerAlert").innerHTML = "<b>Password is too short!</b>";
        return false;
    }
    if (password1 != password2)
    {
        document.getElementById("registerAlert").innerHTML = "<b>Passwords don't match!</b>";
        return false;
    }
    var validRegex = /^(?:\+?\d{2}[ -]?[\d -][\d -]+)$/;
    if (!email.match(validRegex))
    {
        document.getElementById("registerAlert").innerHTML = "<b>Please enter valid email address!</b>";
        return false;
    }
    var re = /^(?:\+?\d{2}[ -]?[\d -][\d -]+)$/;
    if (!phone.match(re))
    {
        document.getElementById("registerAlert").innerHTML = "<b>Please enter valid phone number!</b>";
        return false;
    }
    if(!(gender == "male" || gender == "female" || gender == "other")){
        document.getElementById("registerAlert").innerHTML = "<b>Please select your gender!</b>";
        return false;
    }

    if (isNaN(did)){
        document.getElementById("registerAlert").innerHTML = "<b>Please enter valid doctor's id!</b>";
        return false;
    }
}