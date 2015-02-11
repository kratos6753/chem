<?php 
include_once 'includes/connection.php';
include_once 'includes/function.php';
session_start();

	if (isset($_POST['submit'])){
		$email = $_POST['email'];
		$password = $_POST['password'];
		$query = "SELECT * FROM users WHERE email = '{$email}' AND password = '{$password}' ";
		$user_set = mysql_query($query);
		if (mysql_fetch_array($user_set)) {
			$_SESSION['logged_in'] = true;
			$_SESSION['email'] = $email;
			header("Location: ../?page=dashboard");
		}else {
			$_SESSION['user_error'] = 2;
			$_SESSION['temp_name'] = $_POST['email'];
			header("Location: ../?page=register");
		}


		 
	}else{
		header("Location:../?page=home");
	}
?>