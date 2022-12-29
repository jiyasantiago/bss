<?php
	// Database configuration 	
	$hostname = "localhost"; 
	$username = "root"; 
	$password = ""; 
	$dbname   = "bsis";
	 
	// Create database connection 
	global $conn;
 	$conn = new mysqli($hostname, $username, $password, $dbname); 
	 
	// Check connection 
	if ($conn->connect_error) { 
	    die("Connection failed: " . $conn->connect_error); 
	}
