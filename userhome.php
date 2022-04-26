<?php
// Initialize the session
require_once "config.php";
session_start();
 
// Check if the user is logged in, if not then redirect him to login page
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: login.php");
    exit;
}


$uid = $_SESSION["id"];

?>














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
                <i class="fa fa-sign-out" aria-hidden="true"></i> <a href="logout.php">Log out</a> 
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
  
    <i class="fa-solid fa-bed"></i> User Profile
   
    

 
  

</h1>
</div>
<div id="content">
   <p> 
       
   
   <table class="table">
        <thead>
			<tr>
				<th>doctor's id</th>
				<th>date</th>
				<th>temperature</th>
				<th>pulse</th>
				<th>sugar</th>
				<th>blood pressure</th>
			
			</tr>
		</thead>




        <tbody>
            <?php
            

            // read all row from database table
			$sql = "SELECT * FROM data where userid = '$uid' order by date DESC";
			$result = $link->query($sql);

            if (!$result) {
				die("Invalid query: " . $link->error);
			}

            // read data of each row
			while($row = $result->fetch_assoc()) {
                echo "<tr>
                    <td>" . $row["doctorid"] . "</td>
                    <td>" . $row["date"] . "</td>
                    <td>" . $row["temperature"] . "</td>
                    <td>" . $row["pulse"] . "</td>
                    <td>" . $row["sugar"] . "</td>
                    <td>" . $row["blood_pressure"] . "</td>
                    
                </tr>";
            }

            $link->close();
            ?>
        </tbody>
    </table>
</body>
</html>




</p>
</div>

</body>
