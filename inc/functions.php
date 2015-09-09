<?php

	function redirect_to($new_location)	{
		header("Location: " . $new_location);
		exit;
	}

	function make_query($connection, $query){
		$result = mysqli_query($connection, $query);
		if(!$result)	{
			die("Database Query Failed.");
		}

		return $result;
	}	

	function find_user_by_username($username)	{
		global $connection;

		$username = mysqli_real_escape_string($connection, $username);
		$find_user 	=	"SELECT * ";
		$find_user .=	"FROM user ";
		$find_user .=	"WHERE username = '$username'";
		$user_result 	=	mysqli_query($connection, $find_user);
		
		if ($user = mysqli_fetch_assoc($user_result)) {
			return $user;
		} else {
			return false;
		}
	}

	function check_password($password, $user_password) {
		if ($password === $user_password ) {
			return true;
		} else {
			return false;
		}
	}

	function attempt_login($username, $password) {
		$regd_user = find_user_by_username($username);
		if ($regd_user) {
		 	if (check_password($password, $regd_user['hashed_password'])) {
		 	 	return $regd_user;
		 	 } else {
		 	 	return false;
		 	 } 
		 } else {
		 	return false;
		 }
	}


	function find_user($source=null, $destination=null, $age=null) {
		global $connection;
		$query = "SELECT * ";
		$query .= "FROM ticket as ts ";
		$query .= "INNER JOIN route as rs ";
		$query .= "ON ts.id = rs.ticket_id ";
		$query .= "INNER JOIN user as us ON rs.user_id = us.id ";

		if ($source) {
			$query .= "where ts.source='{$source}' and ts.destination='{$destination}'";
		}
		if ($age) {
			$query .= "and age > 60";
		}		
		return mysqli_query($connection, $query);

		// if ($user = mysqli_fetch_assoc($user_result)) {
		// 	return $user;
		// }	else {
		// 	return false;
		// }
	} 
?>