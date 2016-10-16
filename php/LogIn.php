<?php
	session_start();
	$email=$_POST['email'];
	$password=$_POST['password'];

	if($email == '' || $password == '')
		echo "Please, complete all the fields from the above!";
	else{
		require_once('database.php');
		$conn = new mysqli($servername, $usn, $psw,$database);
		if($conn->connect_errno)echo 'There was a problem with connecting to our server. Please, try again!';
		else{
			$query="SELECT * from users where email='$email' and verified=1";
			$result=$conn->query($query);
			if($result->num_rows == 0)
				echo 'The account does not exist or was not verified yet! Please, re-enter your data or make sure you have verified your email.';
			else{
				$row = $result->fetch_assoc();
				$apassword=$row['password'];
				$id=$row['id'];
				$fname=$row['fname'];
				$lname=$row['lname'];
				$prog=$row['prog'];

				if($apassword != $password)
					echo 'The password is not correct!';
				else{
					$_SESSION['logged_in'] = true;
					$_SESSION['id'] = $id;
					$_SESSION['email'] = $email;
					$_SESSION['fname'] = $fname;
					$_SESSION['lname'] = $lname;
					$_SESSION['prog'] = $prog;
					echo "OK";
				}
			}
		}
		$conn->close();
	}

?>