<?php

	session_start();
	$end = $_POST['end'];
	if($end == 1)
	{
		session_destroy();
		echo "OK";
	}

?>