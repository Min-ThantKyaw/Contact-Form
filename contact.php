<?php
session_start();
require 'PHPMailer/src/Exception.php';
require 'PHPMailer/src/PHPMailer.php';
require 'PHPMailer/src/SMTP.php';

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
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
			$mail->Host = 'smtp.gmail.com';
			$mail->SMTPAuth = true;
			$mail->Username = 'minthant1590@gmail.com';
			$mail->Password = '';
			$mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
			$mail->Port = 587;
			
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