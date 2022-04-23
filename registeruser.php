<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="author" content="Group:404NotFound">
        <title>Health Monitoring Website</title>
        <link rel="stylesheet" href="styles/prelogin.css">
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

<form action='/~kejebi/webtechproject/registeruser.php' method="POST">


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
<input name="password" type="password" placeholder="PASSWORD" id="password" required><br>
</div>
<div class="form-group">
<label> RE-TYPE PASSWORD * </label>
<input name="password_confirm" type="password" placeholder="RE-TYPE PASSWORD" id="password" required><br>
</div>


<div class="form-group">
<label> ADDRESS * </label>
<input name="address" type="text" placeholder="YOUR CURRENT ADDRESS" id="address" required><br>
</div>
<div class="form-group">

<label for="gender"> GENDER *</label>
<select name="gender">
	<option value="none" selected>Gender</option>
	<option value="male">Male</option>
	<option value="female">Female</option>
	<option value="other">other</option>
</select><br>
</div>
<div class="form-group">
                <input type="submit" class="btn btn-primary" value="Submit">
                </div>
                <p>Already have an account? <a href="signin.php">Sign in here</a>.</p>
</form>
</div>
</div>
</div>
<footer>
    <p>ICS0008 Project</p>
</footer>

</body>
</html>
