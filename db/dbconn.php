<?php
	// Database configuration
	$db_host = 'localhost'; // Change this to your hosting provider's database host
	$db_user = 'root';      // Change this to your database username
	$db_pass = '';          // Change this to your database password
	$db_name = 'alphaware'; // Change this if you used a different database name
	
	// Create connection
	$conn = new mysqli($db_host, $db_user, $db_pass, $db_name);
	
	// Check connection
	if(!$conn){
		die("Fatal Error: Connection Error!");
	}
?>
