<?php
// pramas to connect to database
$dbHost = "localhost";
$dbUser = "root";
$dbPass = "";
$dbName = "login_system";


// use mysqli instead of mysql because it contains some functions that the old version don't have.
// connection to database
$conn = mysqli_connect($dbHost, $dbUser, $dbPass, $dbName);

if (!$conn) {
    die("Database Connection Failed!");
} else {
   
}

?>