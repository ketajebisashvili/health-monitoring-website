<?php
// Include config file
require_once "config.php";
 
// Define variables and initialize with empty values
$username = $password = $email = $gender  = $address = "";
 
// Processing form data when form is submitted
if($_SERVER["REQUEST_METHOD"] == "POST"){
 
    // Validate username
    if(empty(trim($_POST["name"]))){
        $username_err = "Please enter a username.";
    } else{
        // Prepare a select statement
        $sql = "SELECT id FROM user WHERE username = ?";
        $sql2 = "SELECT doctorid FROM doctor WHERE username = ?";
        if($stmt = mysqli_prepare($link, $sql)){
            // Bind variables to the prepared statement as parameters
            mysqli_stmt_bind_param($stmt, "s", $param_username);
            
            // Set parameters
            $param_username = trim($_POST["name"]);
            
            // Attempt to execute the prepared statement
            if(mysqli_stmt_execute($stmt)){
                /* store result */
                mysqli_stmt_store_result($stmt);
                
                if(mysqli_stmt_num_rows($stmt) == 1){
                    $username_err = "This username is already taken.";
                } else{
                    $username = trim($_POST["name"]);
                }
            } else{
                echo "Oops! Something went wrong. Please try again later.";
            }

            // Close statement
            mysqli_stmt_close($stmt);
        }

        if($stmt = mysqli_prepare($link, $sql2)){
            // Bind variables to the prepared statement as parameters
            mysqli_stmt_bind_param($stmt, "s", $param_username);
            
            // Set parameters
            $param_username = trim($_POST["name"]);
            
            // Attempt to execute the prepared statement
            if(mysqli_stmt_execute($stmt)){
                /* store result */
                mysqli_stmt_store_result($stmt);
                
                if(mysqli_stmt_num_rows($stmt) == 1){
                    $username_err = "This username is already taken.";
                } else{
                    $username = trim($_POST["name"]);
                }
            } else{
                echo "Oops! Something went wrong. Please try again later.";
            }

            // Close statement
            mysqli_stmt_close($stmt);
        }



    }


        // Validate email

  if(empty(trim($_POST["email"]))){
    $email_err = "Please enter an email.";
} else{
    // Prepare a select statement
    $sql = "SELECT doctorid FROM doctor WHERE email = ?";
    $sql2 = "SELECT id FROM user WHERE email = ?";
    if($stmt = mysqli_prepare($link, $sql)){
        // Bind variables to the prepared statement as parameters
        mysqli_stmt_bind_param($stmt, "s", $param_email);
        
        // Set parameters
        $param_email = trim($_POST["email"]);
        
        // Attempt to execute the prepared statement
        if(mysqli_stmt_execute($stmt)){
            /* store result */
            mysqli_stmt_store_result($stmt);
            
            if(mysqli_stmt_num_rows($stmt) >= 1){
                $email_err = "This email is already taken.";
            } else{
                $email = trim($_POST["email"]);
            }
        } else{
            echo "Oops! Something went wrong. Please try again later. email";
        }

        // Close statement
        mysqli_stmt_close($stmt);
    }
    

    if($stmt = mysqli_prepare($link, $sql2)){
      // Bind variables to the prepared statement as parameters
      mysqli_stmt_bind_param($stmt, "s", $param_email);
      
      // Set parameters
      $param_email = trim($_POST["email"]);
      
      // Attempt to execute the prepared statement
      if(mysqli_stmt_execute($stmt)){
          /* store result */
          mysqli_stmt_store_result($stmt);
          
          if(mysqli_stmt_num_rows($stmt) >= 1){
              $email_err = "This email is already taken.";
          } else{
              $email = trim($_POST["email"]);
          }
      } else{
          echo "Oops! Something went wrong. Please try again later. email";
      }

      // Close statement
      mysqli_stmt_close($stmt);
  }




}

    
    
    
    // Check input errors before inserting in database
    if(empty($username_err) && empty($password_err) && empty($confirm_password_err)){
        
        // Prepare an insert statement
        $sql = "INSERT INTO user (username,email, password, address, gender) VALUES (?, ?, ?, ?, ?)";
         
        if($stmt = mysqli_prepare($link, $sql)){
            // Bind variables to the prepared statement as parameters
            mysqli_stmt_bind_param($stmt, "sssss", $username, $email,  $param_password, $address, $gender);
            
            // Set parameters
            $username = $_POST['name'];
            $email = $_POST['email'];
            $gender = $_POST['gender'];
            $password = $_POST['password'];
            $address = $_POST['address'];
            $param_password = password_hash($password, PASSWORD_DEFAULT); // Creates a password hash
            
            // Attempt to execute the prepared statement
            if(mysqli_stmt_execute($stmt)){
                // Redirect to login page
                header("location: login.php");
            } else{
                echo "Oops! Something went wrong. Please try again later.";
            }

            // Close statement
            mysqli_stmt_close($stmt);
        }
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
        <link rel="stylesheet" href="styles/prelogin.css">
        <script src="js/uservalidate.js"></script>
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
                <li> <a href="index.php"> Home </a>&nbsp; | <a href="login.php">Login</a>&nbsp; | <a href="register.php"> Register </a>  </li>
                  </ul>
            </div>
            
            
            

        </nav>
      <div class="wrapper">
       
        <div class="box" id="registerFormDoctor">
        <div class="header">
<h1>

      
<i class="fa fa-user" aria-hidden="true"></i>

User Register</h1>

<form action='<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>' method="POST" onsubmit='return validateForm()'>


<div class="form-group">
                <label>USERNAME *</label><br>
                <input name="name" type="text" value="" placeholder="ENTER YOUR USERNAME" id="name" required><br>
              
</div>    




<div class="form-group">
<label> EMAIL * </label>

<input name="email" type="email" placeholder="YOUR NAME" id="email" required><br>
       
</div>

<div class="form-group">
<label> MOBILE NUMBER * </label>

<input name="phone" type="text" placeholder="PHONE NUMBER" id="phone" required> <br>
       
</div>


<div class="form-group">
<label> PASSWORD * </label>
<input name="password" type="password" placeholder="PASSWORD" id="password1" required><br>
</div>
<div class="form-group">
<label> RE-TYPE PASSWORD * </label>
<input name="password_confirm" type="password" placeholder="RE-TYPE PASSWORD" id="password2" required><br>
</div>


<div class="form-group">
<label> ADDRESS * </label>
<input name="address" type="text" placeholder="YOUR CURRENT ADDRESS" id="address" required><br>
</div>
<div class="form-group">

<label for="gender"> GENDER *</label>
<select name="gender" id="gender">
	<option value="none" selected>Gender</option>
	<option value="male">Male</option>
	<option value="female">Female</option>
	<option value="other">other</option>
</select><br>
</div>
<div class="form-group">
                <input type="submit" class="btn btn-primary" value="Submit">
                </div>
                <p>Already have an account? <a href="login.php">Sign in here</a>.</p>
                <p id = "registerAlert"></p>
</form>
</div>
</div>
</div>

<footer>
    <p>ICS0008 Project</p>
</footer>

</body>
</html>
