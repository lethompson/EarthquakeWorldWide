<?php

$server     = "awseduinstance.ccq1ha3xaabo.us-west-1.rds.amazonaws.com";//RDS Endpoint (California)
$username   = "Admin";//username
$password   = "205cuPA!";//RDS password
$db         = "opsworksdb"; //RDS DBname

// Create a connection
$conn = mysqli_connect( $server, $username, $password, $db );

// Check connection
if (!$conn) {
    die( "Connection failed: " . mysqli_connect_error() );
}

 //echo "Connected successfully to a Database!";

//mysqli_close($conn);

?>