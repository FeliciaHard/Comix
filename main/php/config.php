<?php

	// Database Section

	// Set a variable to determine the environment
	$isOnline = false; // Change this to true for production

	// Set MySQL credentials based on the environment
	if ($isOnline) {
		$server = '';
		$dbname = '';
		$usrnme = '';
		$pass 	= '';
	} else { // Default to localhost configuration
		$server = 'localhost';
		$dbname = 'comix';
		$usrnme = 'root';
		$pass = '';
	}

	// Attempt to connect to the database
	$connect = mysqli_connect($server, $usrnme, $pass, $dbname);

	// Check for connection errors
	if (!$connect) {
		die('Connection failed: ' . mysqli_connect_error());
	}

	// Website Header Section
	$title = ' | Comix';

	// Additional website setup can go here

?>
