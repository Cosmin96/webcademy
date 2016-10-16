<?php

	$fname = $_POST['fname'];
	$lname = $_POST['lname'];
	$email = $_POST['email'];
	$password = $_POST['password'];

	if($fname == '' || $lname == '' || $email == '' || $password == '')
		echo "Please, complete all the fields from the above!";
	else if (filter_var($email, FILTER_VALIDATE_EMAIL) === false)
		echo "Please insert a valid email address!";
	else{
		require_once('database.php');
		$conn = new mysqli($servername, $usn, $psw,$database);
		if($conn->connect_errno)echo 'There was a problem with connecting to our server. Please, try again!';
		else{
			$query="SELECT email from users where email='$email'";
			$result=$conn->query($query);
			if($result->num_rows > 0)
				echo 'The email is already in use!';
			else{
				$hash=md5(rand(0,1000000));
				$query = "INSERT INTO users(fname,lname,email,password,hash) VALUES('$fname','$lname','$email','$password','$hash')";

				$link = 'http://webcademy.fomrad.com/php/verify_email.php?email='.$email.'&hash='.$hash;
				//Send confirmation email!
				$to = $email;
				$subject = 'Welcome to Webcademy!';
				$message = 'Hello, '.$fname.'!

Thank you for choosing Webcademy.
In order to benefit from our online courses, please access the confirmation link below:
'.$link.'

Best wishes,
Webcademy Team';

				require_once('phpmailer/PHPMailerAutoload.php');
				$mail = new PHPMailer;

				$mail->IsSMTP();                                      // Set mailer to use SMTPDebug
				$mail->Host = 'localhost';                            // Specify main and backup SMTP servers
				$mail->SMTPAuth = true;                               // Enable SMTP authentication
				$mail->Username = 'smtp@fomrad.com';                  // SMTP username
				$mail->Password = 'TpwCGhLgg{OW';                     // SMTP password
				$mail->Port = 25;                                     // TCP port to connect to

				$mail->SetFrom('noreply@webcademy.fomrad.com');
				$mail->AddAddress($to);     					  // Add a recipient

				$mail->Subject = $subject;
				$mail->Body = $message;

				if(!$mail->Send())echo 'Sorry, but a problem occured while processing your request. Please, try again!';
				else{
					$conn->query($query);
					echo 'OK';
				}
			}
		}
		$conn->close();
	}
?>