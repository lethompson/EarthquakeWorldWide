<?php

$server     = "aadejmeiqo85rb.cjpd7jwiabca.us-west-2.rds.amazonaws.com";//RDS Endpoint (oregon)
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