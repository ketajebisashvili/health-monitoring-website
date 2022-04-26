function validateForm(){
    var date = document.getElementById("date").value;
    var did = document.getElementById("did").value;
    var temperature = document.getElementById("temperature").value;
    var pulse = document.getElementById("pulse").value;
    var sugar = document.getElementById("sugar").value;
    var pressure = document.getElementById("pressure").value;
   
    var REnumber  = /^(?!0*[.,]0*$|[.,]0*$|0*$)\d+[,.]?\d{0,2}$/;

   if (isValidDate(date) == false){
    document.getElementById("dataAlert").innerHTML = "<b>Please enter valid date!</b>";
    return false;
   }
   
   if (isNaN(did)){
    document.getElementById("dataAlert").innerHTML = "<b>Please enter valid doctor's id!</b>";
    return false;
}

if ( !temperature.match(REnumber) || (temperature < 36 || temperature > 42 ))
{
    document.getElementById("dataAlert").innerHTML = "<b>Please enter valid temperature!</b>";
    return false;
}

if ( !pulse.match(REnumber) )
{
    document.getElementById("dataAlert").innerHTML = "<b>Please enter valid pulse!</b>";
    return false;
}

if ( !sugar.match(REnumber))
{
    document.getElementById("dataAlert").innerHTML = "<b>Please enter valid sugar!</b>";
    return false;
}

if ( !pressure.match(REnumber) )
{
    document.getElementById("dataAlert").innerHTML = "<b>Please enter valid pressure!</b>";
    return false;
}

return true;



}


function isValidDate(dateString) {
    var regEx = /^\d{4}-\d{2}-\d{2}$/;
    if(!dateString.match(regEx)) return false;  // Invalid format
    var d = new Date(dateString);
    var dNum = d.getTime();
    if(!dNum && dNum !== 0) return false; // NaN value, Invalid date
    return d.toISOString().slice(0,10) === dateString;
  }
