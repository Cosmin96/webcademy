<?php


	$name = $_POST['name'];
	$email = $_POST['email'];
	$phone = $_POST['phone'];
	$message = $_POST['message'];

	if($name == '' || $email == '' || $phone == '' || $message == '')
		echo "Please complete all the fields!";
	else if (filter_var($email, FILTER_VALIDATE_EMAIL) === false)
		echo "Please insert a valid email address!";
	else{
		$to = 'contact@webcademy.fomrad.com';
		$subject = 'A new request from '.$name;
		$message .= '
  Email from: '.$name.'
  '.$email.' 
  '.$phone;

		require_once('phpmailer/PHPMailerAutoload.php');
		$mail = new PHPMailer;

		$mail->IsSMTP();                                      // Set mailer to use SMTPDebug
		$mail->Host = 'localhost';                            // Specify main and backup SMTP servers
		$mail->SMTPAuth = true;                               // Enable SMTP authentication
		$mail->Username = 'smtp@fomrad.com';                  // SMTP username
		$mail->Password = 'TpwCGhLgg{OW';                     // SMTP password
		$mail->Port = 25;                                     // TCP port to connect to

		$mail->SetFrom($email);
		$mail->AddAddress($to);     					  // Add a recipient

		$mail->Subject = $subject;
		$mail->Body = $message;

		if(!$mail->Send())echo 'Sorry, but a problem occured while sending your message. Please, try again!';
		else echo 'OK';
	}
?>