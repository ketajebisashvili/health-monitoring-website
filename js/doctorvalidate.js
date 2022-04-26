function validateForm(){
    var username = document.getElementById("name").value;
    var email = document.getElementById("email").value;
    
    var password1 = document.getElementById("password1").value;
    var password2 = document.getElementById("password2").value;
    var address = document.getElementById("address").value;
    var gender = document.getElementById("gender").value;
    var did = document.getElementById("did").value;
   

    if (username.length < 2) {
        document.getElementById("registerAlert").innerHTML = "<b>Username is too short!</b>";
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
    var validRegex = /\S+@\S+\.\S+/;
    if (!email.match(validRegex))
    {
        document.getElementById("registerAlert").innerHTML = "<b>Please enter valid email address!</b>";
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
