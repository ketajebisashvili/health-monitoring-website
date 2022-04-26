<?php
// Initialize the session
require_once "config.php";
session_start();
 
// Check if the user is logged in, if not then redirect him to login page
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: login.php");
    exit;
}

$did = $_SESSION["id"];

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
                        <a href="doctorhome.php" class="active">
                         
                            <span class="sidebar-title">Dashboard</span>
                        </a>
                    </li>
                    
                    <li>
                        <a href="doctordata.php" class="active">
                          
                            <span class="sidebar-title">Shared Data</span>
                        </a>
                    </li>
                    
                </ul>
            </aside>
</div>

<div id="header">
    <h1>
    
    <i class="fas fa-file"></i> Patient's Data
   
    </h1>

    </div>
    
<div id="content">
  
<table class="table">
        <thead>
			<tr>
				<th>username</th>
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
			$sql = " SELECT a.username, b.date, b.temperature, b.pulse, b.sugar, b.blood_pressure

            FROM user a, data b
            WHERE a.userid=b.userid AND b.doctorid = '$did'";
			$result = $link->query($sql);

            if (!$result) {
				echo "nodata";
			}

            // read data of each row
			while($row = $result->fetch_assoc()) {
                echo "<tr>
                    <td>" . $row["username"] . "</td>
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
</div>


</div>
</body>
