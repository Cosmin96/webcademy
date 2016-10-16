<?php
	require_once 'src/Google_Client.php';
	require 'src/contrib/Google_Oauth2Service.php';
	require_once 'src/contrib/Google_PlusService.php';
	session_start();
 	$api = new Google_Client();
 	$api->setApplicationName("Webcademy"); // Set Application name
 	$api->setClientId('383520336419-77qqvi29mgmp445q76pagkf2a8ee030n.apps.googleusercontent.com'); // Set Client ID
 	$api->setClientSecret('rEP1LDtszcx8E1Eyhzwx9hCZ'); //Set client Secret
 	$api->setAccessType('online'); // Access method
 	$api->setScopes(array('https://www.googleapis.com/auth/plus.login', 'https://www.googleapis.com/auth/plus.me', 'https://www.googleapis.com/auth/userinfo.email', 'https://www.googleapis.com/auth/userinfo.profile'));
 	$api->setRedirectUri('http://webcademy.fomrad.com/php/googlelogin/login.php'); // (Redirect Uri) that you have set to get client ID in API console
 	$service = new Google_PlusService($api);
 	$URI = $api->createAuthUrl();
?>

<!DOCTYPE html>
<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<title>Login with Google Plus Oauth - Webcademy</title>
	</head>
	<body>
	
		<script>
	
		window.onload=function(){
                	var w_left = (screen.width/4);
                	var w_top = (screen.height/4);
			window.open('<?php echo $URI; ?>', '_self','toolbar=no,titlebar=no,location=no,status=no,menubar=no,scrollbars=no,resizable=no,width=900,height=500,top='+w_top+',left='+w_left+'');
        	}

		</script>
		
	</body>
</html>