<?php
	session_start();
	$fname=$_POST['fname'];
	$lname=$_POST['lname'];
	$password=$_POST['password'];

	if($fname == '' && $lname == '' && $password == '')
		echo "No changes to be made!";
	else{
		require_once('database.php');
		$conn = new mysqli($servername, $usn, $psw,$database);
		if($conn->connect_errno)echo 'There was a problem with connecting to our server. Please, try again!';
		else{

			$id = $_SESSION['id'];

			if($fname != ''){
				$query1="UPDATE users SET fname='$fname' WHERE id='$id'";
				$conn->query($query1);
				$_SESSION['fname'] = $fname;
			}

			if($lname != ''){
				$query2="UPDATE users SET lname='$lname' WHERE id='$id'";
				$conn->query($query2);
				$_SESSION['lname'] = $lname;
			}
			
			if($password != ''){
				$query3="UPDATE users SET password='$password' WHERE id='$id'";
				$conn->query($query3);
				$_SESSION['password'] = $password;
			}
			
			echo "OK";
		}
		$conn->close();
	}

?>