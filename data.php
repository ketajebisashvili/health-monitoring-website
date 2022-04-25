<?php
require_once "config.php";

function sanitize_sql($link, $var)
{
    $var = stripslashes($var);
    $var = htmlentities($var);
    $var = strip_tags($var);
    $var = mysqli_real_escape_string($link, $var);
    return $var;
}

function clean_post($data)
{
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}



if($_SERVER["REQUEST_METHOD"] == "POST")
{








    $sql = "INSERT INTO user (userid, doctorid, date, temperature, pulse, sugar, blood_pressure) VALUES (?, ?, ?, ?, ?, ?, ?)";
    if($stmt = mysqli_prepare($link, $sql)){
    mysqli_stmt_bind_param($stmt, "iisdddd", $id $did, $date, $temperature, $pulse, $sugar $pressure)
            // Define variables and initialize with empty values
 $temperature = $pulse = $sugar = $date = $id = $did = $pressure = "";
 
 $temperature = clean_post(sanitize_sql($link, $_POST['temperature']));
 $pulse =  clean_post(sanitize_sql($link, $_POST['pulse']));
 $sugar = clean_post(sanitize_sql($link, $_POST['sugar']));
 

 
 $date = clean_post(sanitize_sql($link, $_POST['sugar']));

 $id = $_SESSION["id"]

 $did = clean_post(sanitize_sql($link, $_POST['did']));

$pressure = clean_post(sanitize_sql($link, $_POST['pressure']));



    



if(mysqli_stmt_execute($stmt)){
    // Redirect to login page
    header("location: login.php");
} else{
    echo "Oops! Something went wrong. Please try again later.";
}
mysqli_stmt_close($stmt);


}



mysqli_close($link);
}


?>