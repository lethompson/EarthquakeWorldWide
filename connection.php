<?php

$server     = "";//RDS Endpoint (California)
$username   = "";//username
$password   = "";//RDS password
$db         = ""; //RDS DBname

// Create a connection
$conn = mysqli_connect( $server, $username, $password, $db );

// Check connection
if (!$conn) {
    die( "Connection failed: " . mysqli_connect_error() );
}

 //echo "Connected successfully to a Database!";

//mysqli_close($conn);

?>
