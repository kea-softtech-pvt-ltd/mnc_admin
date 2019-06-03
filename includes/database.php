<?php

include_once('config.php');

// specify your own database credentials
$host = hostname;
$dbname = dbname;
$username = username;
$password = password;
 
// Create connection
$conn = mysqli_connect($host, $username, $password, $dbname);

// Check connection
if(!$conn) {
	die("Connection field because:".mysqli_connect_error());
}

?>