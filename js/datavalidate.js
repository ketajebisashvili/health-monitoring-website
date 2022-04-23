function validateForm(){
    var date = document.getElementById("date").value;
    var did = document.getElementById("did").value;
    var temperature = document.getElementById("temperature").value;
    var pulse = document.getElementById("pulse").value;
    var sugar = document.getElementById("sugar").value;
    var pressure = document.getElementById("pressure").value;
   
    var REnumber  = /^-{0,1}\d*\.{0,1}\d+$/;

   if (validatedate(date) == false){
    document.getElementById("dataAlert").innerHTML = "<b>Invalid date!</b>";
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




}


function validatedate(dateString){      
    let dateformat = /^(0?[1-9]|1[0-2])[\/](0?[1-9]|[1-2][0-9]|3[01])[\/]\d{4}$/;      
          
    // Match the date format through regular expression      
    if(dateString.match(dateformat)){      
        let operator = dateString.split('/');      
      
        // Extract the string into month, date and year      
        let datepart = [];      
        if (operator.length>1){      
            pdatepart = dateString.split('/');      
        }      
        let month= parseInt(datepart[0]);      
        let day = parseInt(datepart[1]);      
        let year = parseInt(datepart[2]);      
              
        // Create list of days of a month      
        let ListofDays = [31,28,31,30,31,30,31,31,30,31,30,31];      
        if (month==1 || month>2){      
            if (day>ListofDays[month-1]){      
                ///This check is for Confirming that the date is not out of its range      
                return false;      
            }      
        }else if (month==2){      
            let leapYear = false;      
            if ( (!(year % 4) && year % 100) || !(year % 400)) {      
                leapYear = true;      
            }      
            if ((leapYear == false) && (day>=29)){      
                return false;      
            }else      
            if ((leapYear==true) && (day>29)){      
                     
                return false;      
            }      
        }      
    }else{      
          
        return false;      
    }      
    return true;      
}   