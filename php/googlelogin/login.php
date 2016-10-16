<?php

class G_login {

function lib_include() {
       require_once 'src/Google_Client.php';
       require_once 'src/contrib/Google_Oauth2Service.php';
       require_once 'src/contrib/Google_PlusService.php';
	   }


function login(){
 	session_start();
 	$this->lib_include();
 	$api = new Google_Client();
 	$api->setApplicationName("Webcademy");
 	$api->setClientId('383520336419-77qqvi29mgmp445q76pagkf2a8ee030n.apps.googleusercontent.com');
 	$api->setClientSecret('rEP1LDtszcx8E1Eyhzwx9hCZ');
 	$api->setAccessType('online');
 	$api->setScopes(array('https://www.googleapis.com/auth/plus.login', 'https://www.googleapis.com/auth/plus.me', 'https://www.googleapis.com/auth/userinfo.email', 'https://www.googleapis.com/auth/userinfo.profile'));
        $api->setRedirectUri('http://webcademy.fomrad.com/php/googlelogin/login.php');   // Enter redirect URI
 	$service = new Google_PlusService($api);
 	$oauth2 = new Google_Oauth2Service($api);
 	$api->authenticate();
 	$_SESSION['token'] = $api->getAccessToken();
 	if (isset($_SESSION['token'])) {
 		$set_asess_token = $api->setAccessToken($_SESSION['token']);
 	}
 	if ($api->getAccessToken()) {
 		$data = $service->people->get('me');
            	$user_data = $oauth2->userinfo->get();
            	
            	$gpid = $user_data['id'];
            	$aux = (string)$gpid;
            	if(strlen($aux) > 19)
            	     $aux = substr($aux, 0, 19);
            	$gpid = (int)$aux;
            	setlocale(LC_CTYPE, 'en_US.UTF8');
            	
            	$gpfname = $user_data['given_name'];
            	$gpfname=iconv('utf-8', 'ascii//TRANSLIT', $gpfname);
            	
            	$gplname = $user_data['family_name'];
            	$gplname=iconv('utf-8', 'ascii//TRANSLIT', $gplname);
            	
            	$gpemail = $user_data['email'];
            	
            	require_once('../database.php');

  		$conn = new mysqli($servername, $usn, $psw,$database);
  if($conn->connect_errno)echo 'There was a problem with connecting to our server. Please, try again!';
  else{
    $query = "SELECT * FROM users WHERE id='$gpid'";
    $result=$conn->query($query);
      if($result->num_rows == 0)
      {
        $query = "SELECT * FROM users WHERE email='$gpemail'";
        $result=$conn->query($query);
        if($result->num_rows == 0)
        { 
          $query = "INSERT INTO users (id,fname,lname,email,verified,hash) VALUES ('$gpid','$gpfname','$gplname','$gpemail',1,'ggl')";
          $conn->query($query);
          $_SESSION['logged_in'] = true;
          $_SESSION['id'] = $gpid;
          $_SESSION['fname'] = $gpfname;           
          $_SESSION['lname'] = $gplname;
          $_SESSION['email'] = $gpemail;
          $_SESSION['prog'] = '';
        }
        else
        {
          $row = $result->fetch_assoc();
          $prog=$row['prog'];

          $query = "UPDATE users SET id='$gpid', fname='$gpfname', lname='$gplname', verified=1 WHERE email='$gpemail'";
          $conn->query($query);

          $_SESSION['logged_in'] = true;
          $_SESSION['id'] = $gpid;
          $_SESSION['email'] = $gpemail;
          $_SESSION['fname'] = $gpfname;
          $_SESSION['lname'] = $gplname;
          $_SESSION['prog'] = $prog;
        }
      }
      else{
        $row = $result->fetch_assoc();
        $mprog=$row['mprog'];
        $lprog=$row['lprog'];
        $query = "UPDATE users SET fname='$gpfname', lname='$gplname', email='$gpemail' WHERE id='$gpid'";
	$conn->query($query);
        $_SESSION['logged_in'] = true;
        $_SESSION['id'] = $gpid;
        $_SESSION['email'] = $gpemail;
        $_SESSION['fname'] = $gpfname;
        $_SESSION['lname'] = $gplname;
        $_SESSION['prog'] = $prog;
      }
    }
    $conn->close();
    header("Location:../../courses.php");
 	}
 }
 
 }
 
$obj= new G_login();
$obj->login();
		
 ?>