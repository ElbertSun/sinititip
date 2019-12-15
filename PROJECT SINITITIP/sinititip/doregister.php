<?php 
	session_start();

	if (isset($_POST["email_customer"])) {
		
		$email = $_POST["email_customer"];
		$password = $_POST["password_customer"];

		if($email==""){
			$_SESSION["message"] = "Email harus diisi";
			header("location:register.php");
			exit();
		}else if($password==""){
			$_SESSION["message"] = "Password harus diisi";
			header("location:register.php");
			exit();
	}




 ?>