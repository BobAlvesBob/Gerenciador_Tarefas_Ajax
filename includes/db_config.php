<?php
// Connect to database
$dbhost = "localhost";
$dbuser = "bob"; 
$dbpass = "123"; 
$dbname = "minitask";
$connection = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);

if(mysqli_connect_errno()){
  die("Database connection failed: " .
    mysqli_connect_error() .
    " (". mysqli_connect_errno() . ")"
    );
}
?>
