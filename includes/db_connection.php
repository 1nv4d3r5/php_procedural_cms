<?php

define("DB_SERVER", "localhost");
define("DB_USER", "root");
define("DB_PASS", "abc123");
define("DB_NAME", "procedural_cms");

// 1. Create a database connection
	$connection = mysqli_connect(DB_SERVER, DB_USER, DB_PASS, DB_NAME);

// Test if connection occurred
	if (mysqli_connect_errno()) {
		die("Databse connection failed: " . 
			mysqli_connect_error() . 
			"(" . mysqli_connect_errno() . ")"
		);
	}
?>