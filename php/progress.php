<?php

	session_start();
    $prog = $_SESSION['prog'];
    $type = $_POST['type'];
    $pid = $_POST['id'];
    $id = $_SESSION['id'];

    if($pid != 'none'){
    	
    	$ok = false;
    	$aux = '';
    	for($i = 0; $i < strlen($prog) && $ok == false; $i += 3){

    		$aux = substr($prog, $i, 3);
    		if($aux == $pid){
    			$ok = true;
    		}

    	} 
    	if($ok == false){
    		$prog .= $pid;
    		$_SESSION['prog'] = $prog;

    		require_once('database.php');
			$conn = new mysqli($servername, $usn, $psw,$database);
			if($conn->connect_errno)echo 'There was a problem with connecting to our server. Please, try again!';
			else
			{
				$query = "UPDATE users SET prog='$prog' WHERE id='$id'";
				$conn->query($query);
    		}
    	}
    }

    $result = ''; $aux = '';
    for($i = 0; $i < strlen($prog); $i += 3){

    	$aux = substr($prog, $i, 3);
    	if(strlen($aux) > 1){
    		if($aux[1] == $type){
    			$result .= $aux;
    		}
    	}

    } 

   	if($result == '')
   		$result = 'none';
   		
    echo $result;

?>