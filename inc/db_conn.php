<?php 
	define("DB_SERVER", "localhost");
	define("DB_USER", "vilas");
	define("DB_PASS", "K12ishn4!");
	define("DB_NAME", "bus_reservations_system");

	$connection 	=	mysqli_connect(DB_SERVER, DB_USER, DB_PASS, DB_NAME);

	if(mysqli_connect_errno()) {
		die("Database connection failed: " .
 			mysqli_connect_error() . 
			"(" . mysqli_connect_errno(). ")"

		);
	}

	
?>