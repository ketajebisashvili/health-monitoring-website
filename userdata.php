<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="author" content="Group:404NotFound">
        <title>Health Monitoring Website</title>
        <link rel="stylesheet" href="styles/postlogin.css">
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
    
  <p> 
  <h2>Add Data<h2>
  <div class="form-group">
<label> Date: * </label> <br>
<input name="datadate" type="date"  max="3000-01-01" onfocus="this.max=new Date().toISOString().split('T')[0]"  id ="birthdate" required><br>
</div>

<div class="form-group">
<label> Enter Doctor's ID if you want to share:  </label> <br>
<input name="doctorid" type="text" placeholder="Doctor's ID" id="doctorid"><br> 
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
</div>
</body>