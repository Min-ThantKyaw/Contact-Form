<?php
session_start();
require 'vendor/autoload.php';

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

	if($_SERVER['REQUEST_METHOD'] == "POST") {
		$firstName = $_POST["first_name"];
		$lastName = $_POST["last_name"];
		$email = $_POST["email"];
		$subject = $_POST["subject"];
		$message = $_POST["message"];
		
		$mail = new PHPMailer(true);
		
		try {
			$mail->isSMTP();
			$mail->Host = 'localhost';
			$mail->Port = 1025;
			$mail->setFrom($email, $firstName . ' ' . $lastName);
			$mail->addAddress('minthant1590@gmail.com');
			
			$mail->Subject = $subject;
			$mail->Body = "Name: $firstName $lastName\nEmail: $email\n\nMessage:\n$message";
			
			$mail->send();
			$_SESSION['message'] = 'success';
		} catch (Exception $e) {
			$_SESSION['message'] = 'error';
		}
		
		header("Location: index.php");
		exit();
	}
?>