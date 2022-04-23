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
                <img src="/img/logo.png" alt="logo" width="100px"> 
            </div>
            <div class="right">
                <ul>
                <i class="fa fa-sign-out" aria-hidden="true"></i> <a href="logout.php">Log out</a> 
                </ul>
            </div>
            
            
            

        </nav>
        <div class="sidebar">
        <aside id="sidebar">
                <ul id="sidemenu" class="sidebar-nav">
                    <li>
                        <a href="/userhome.php" class="active">
                            <span class="sidebar-icon"><i class="fa fa-dashboard"></i></span>
                            <span class="sidebar-title">Dashboard</span>
                        </a>
                    </li>
                    <li>
                        <a href="/profile.php" class="active">
                            <span class="sidebar-icon"><i class="fa fa-pencil-square-o"></i></span>
                            <span class="sidebar-title">Profile</span>
                        </a>
                    </li>
                    <li>
                        <a href="/data.php" class="active">
                            <span class="sidebar-icon"><i class="fa fa-pencil-square-o"></i></span>
                            <span class="sidebar-title">View/Add Data</span>
                        </a>
                    </li>
                    <li>
                        <a href="/document.php" class="active">
                            <span class="sidebar-icon"><i class="fa fa-pencil-square-o"></i></span>
                            <span class="sidebar-title">Add Document</span>
                        </a>
                    </li>
                    <li>
                        <a href="/appointment.php" class="active">
                            <span class="sidebar-icon"><i class="fa fa-pencil-square-o"></i></span>
                            <span class="sidebar-title">Make an Appointment</span>
                        </a>
                    </li>
                </ul>
            </aside>
</div>

<div id="header">
    <h1>
    <div id="headerLeft">
    <i class="fa-solid fa-bed"></i> User Profile
   
    

    </div>
    <div id="headerRight">
    <a href="document.php">Add Document</a> 
</div>
<div id="content">
   <p> User Data Table </p>
</div>
</h1>
</div>
</body>