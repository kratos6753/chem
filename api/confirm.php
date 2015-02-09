<?php
include_once 'includes/connection.php';
include_once 'includes/function.php';
session_start();
	

	if (isset($_GET['key'])){
		
		$query = "SELECT * FROM users_temp WHERE user_key = '{$_GET['key']}' ";
		$user_set = mysql_query($query);
			if ($user = mysql_fetch_array($user_set)) {
				$name = $user['name'];
				$password = $user['password'];
				$college = $user['college'];
				$city = $user['city'];
				$phone_number = $user['phone_number'];
				$accomodation = $user['accomodation'];
				$email = $user['email'];
						$query = "SELECT * FROM users WHERE email = '{$email}' ";
						$user_set = mysql_query($query);
						if ($user = mysql_fetch_array($user_set)) {
							$_SESSION['logged_in'] = true;
							$_SESSION['email'] = $email;
							echo "Congragulations. Your Registration is completed.";
						} else {
							$query = "INSERT INTO users (name, password, college, email, phone_number, city, accomodation)
					 		VALUES ('{$name}', '{$password}','{$college}','{$email}', '{$phone_number}', '{$city}', '{$accomodation}'  ) ";
							$addition = mysql_query($query);
							confirm_query($addition, "Insertion");
							echo "Congragulations. Your Registration is completed.";	
							$_SESSION['logged_in'] = true;	
						}		
			}else{
				echo "invalid token";
			} 	
	}else {
		header("Location:../?page=home");
	} 
	
?>