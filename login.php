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
        <form method="post" action="signin.php">
<div class="box" id="loginForm">

<div class="header">
  <h1>
  
  <i class="fa fa-user" aria-hidden="true"></i>
  
  Sign In</h1>
</div>


<label for="email"> User Email </label><br>
<input name="email" type="email" placeholder="email" id="email" required><br>
<label for="password"> Password </label><br>
<input name="password" type="password" placeholder="password" id="password" required><br>
<button type="submit" class="btn" name="login_user">Login</button>
</div>
</form>
</div>

<footer>
    <p>ICS0008 Project</p>
</footer>




    </body>
    </html>