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
							echo "Your registration is already verified. Go to <a href='../?page=register'>Login</a>.";
						} else {
							$query = "INSERT INTO users (name, password, college, email, phone_number, city, accomodation)
					 		VALUES ('{$name}', '{$password}','{$college}','{$email}', '{$phone_number}', '{$city}', '{$accomodation}'  ) ";
							$addition = mysql_query($query);
							confirm_query($addition, "Insertion");
							echo "Congragulations. Your Registration is completed.";	
							$_SESSION['logged_in'] = true;
							$_SESSION['email'] = $email;
							echo "Congratulations. Your Registration is completed. Go to <a href='../?page=dashboard'>Dashboard</a>.";
							$query = "SELECT id,password FROM users WHERE email='{$email}'";
							$result = mysql_query($query);
							$row = mysql_fetch_array($result);
							$id = $row['id'];
							$pwd = $row['password'];
							if($id<10){$id='00'.(string)$id;}elseif($id<100){$id='0'.(string)$id;}
							$headers = "From:notify@chemclave.org\r\n";
							$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
							$message = "Hi {$name} \r\n<br>You have been successfully registered for ChemClave 2015. Your account has been setup and now you can log in to ChemClave website using the details below. Your ChemClave ID is <b>CH15A".$id."</b>. \r\n\r\n<br><br>Email Address: {$email} \r\n<br>Password: {$pwd} \r\n<br>To login, visit <a href='http://www.chemclave.org'>http://www.chemclave.org</a> \r\n\r\n<br><br>Regards \r\n<br>Team ChemClave";
							mail("$email", "Account details", "$message", "$headers");		
						}		
			}else{
				echo "invalid token";
			} 	
	}else {
		header("Location:../?page=home");
	} 
	
?>