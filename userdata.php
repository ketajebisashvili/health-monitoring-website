<?php
// Include config file
require_once "config.php";
// Initialize the session
session_start();
 
// Check if the user is logged in, if not then redirect him to login page
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: login.php");
    exit;
}



 

 
// Processing form data when form is submitted
if($_SERVER["REQUEST_METHOD"] == "POST"){
 
// Define variables and initialize with empty values
$did = $uid = $temperature = $pulse = $sugar  = $datadate =  $pressure = $datadate = "";
   
        
        // Prepare an insert statement
        $sql = "INSERT INTO data (userid, doctorid, date, temperature, pulse, sugar, blood_pressure) VALUES (?, ?, ?, ?, ?, ?, ?)";
         
        if($stmt = mysqli_prepare($link, $sql)){
            // Bind variables to the prepared statement as parameters
            mysqli_stmt_bind_param($stmt, "iisdddd",  $uid, $did, $datadate, $temperature, $pulse, $sugar, $pressure);
            
            // Set parameters
            $uid = $_SESSION["id"];
            $did = $_POST['did'];
            $temperature = $_POST['temperature'];
            $pulse = $_POST['pulse'];
            $sugar = $_POST['sugar'];
            $datadate = $_POST['datadate'];
            $pressure = $_POST['pressure'];
            
            
            // Attempt to execute the prepared statement
            if(mysqli_stmt_execute($stmt)){
                // Redirect to login page
                header("location: userhome.php");
            } else{
                echo "Oops! Something went wrong. Please try again later. entering";
            }

            // Close statement
            mysqli_stmt_close($stmt);
        }
    
    
    // Close connection
    mysqli_close($link);
}
?>



<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="author" content="Group:404NotFound">
        <title>Health Monitoring Website</title>
        <link rel="stylesheet" href="styles/postlogin.css">
        <script src="js/datavalidate.js"></script>
    </head>
    <body>
    <link 
  href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.3.0/css/font-awesome.css" 
  rel="stylesheet"  type='text/css'>
<nav>
            <div class="left">
                <img src="img/logo.jpg" alt="logo" width="100px">
            </div>
            <div class="right">
                <ul>
                 <a href="logout.php">Log out</a> 
                </ul>
            </div>
            
            
            

        </nav>
        <div class="sidebar">
        <aside id="sidebar">
                <ul id="sidemenu" class="sidebar-nav">
                    <li>
                        <a href="userhome.php" class="active">
                            <span class="sidebar-icon"></span>
                            <span class="sidebar-title">Dashboard</span>
                        </a>
                    </li>
                    
                    <li>
                        <a href="userdata.php" class="active">
                            <span class="sidebar-icon"></span>
                            <span class="sidebar-title">View/Add Data</span>
                        </a>
                    </li>
                    
                </ul>
            </aside>
</div>

<div id="header">
    <h1>
    
    Doctor's Appointment
     
    

    
    
    <a href="userhome.php">Dashboard</a> 
    
</h1>
</div>

<div id="form">
<form action='<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>' method="POST" onsubmit='return validateForm()'>
  <p> 
  <h2>Add Data<h2>
  <div class="form-group">
<label> Date: * </label> <br>
<input name="datadate" type="date"  max="3000-01-01" onfocus="this.max=new Date().toISOString().split('T')[0]"  id ="date" required><br>
</div>

<div class="form-group">
<label> Enter Doctor's ID if you want to share:  </label> <br>
<input name="did" type="text" placeholder="Doctor's ID" id="did"><br> 
</div>
<div class="form-group">
<label> Temperature * </label> <br>
<input name="temperature" type="number" placeholder="temperature" id="temperature" required> <br>
</div>
<div class="form-group">
<label> Pulse * </label> <br>
<input name="pulse" type="number" placeholder="pulse" id="pulse" required> <br>
</div>
<div class="form-group">
<label> Sugar * </label> <br>
<input name="sugar" type="number" placeholder="sugar" id="sugar" required> <br>
</div>
<div class="form-group">
<label> Blood Pressure * </label> <br>
<input name="pressure" type="number" placeholder="pressure" id="pressure" required> <br>
</div>
<div class="form-group">
<input type="submit" name="submit" value="Add data">

</div>
</p>
<p id = "dataAlert"></p>
</form>
</div>

</body>
