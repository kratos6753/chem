<?php 
include_once 'includes/connection.php';
include_once 'includes/function.php';


	if (isset($_POST['feedback'])){
		$email = $_POST['email'];
		$name = $_POST['name'];
		$phone_number = $_POST['phone_number'];
		$message = $_POST['message'];
		$query = "INSERT INTO feedback (name, email, phone_number, message)
					 		VALUES ('{$name}', '{$email}', '{$phone_number}', '{$message}'  ) ";
		$addition = mysql_query($query);
		confirm_query($addition, "Insertion");
		header("refresh:5;url=../?page=home");
		echo "Thank you  for your feedback.Go to <a href='../?page=home'>Home Page<a>.";
		


		 
	}else{
		echo "Invalid Url";
	}
?>