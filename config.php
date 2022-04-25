<?php
/* Database credentials. */
define('DB_SERVER', 'anysql.itcollege.ee');
define('DB_USERNAME', 'ICS0008_22');
define('DB_PASSWORD', '36d20eb6edc0');
define('DB_NAME', 'ICS0008_22');

/* Attempt to connect to MySQL database */
$link = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);

// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
?>
