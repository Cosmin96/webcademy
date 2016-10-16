<?php
session_start();

if(isset($_SESSION['logged_in']))
    if($_SESSION['logged_in']==true){
      header("Location:../../courses.php");
      die();
    }

require_once('autoload.php');

// added in v4.0.0
use Facebook\FacebookSession;
use Facebook\FacebookRedirectLoginHelper;
use Facebook\FacebookRequest;
use Facebook\FacebookResponse;
use Facebook\FacebookSDKException;
use Facebook\FacebookRequestException;
use Facebook\FacebookOtherException;
use Facebook\FacebookAuthorizationException;
use Facebook\GraphObject;
use Facebook\GraphSessionInfo;

FacebookSession::setDefaultApplication('195969304101419','90408693251fb99a9e3177ea29d62c6a');

$helper = new FacebookRedirectLoginHelper('http://www.webcademy.fomrad.com/php/facebook/fbconfig.php');
try {
  $session = $helper->getSessionFromRedirect();
} catch(FacebookRequestException $ex) {
  echo $ex;
} catch(Exception $ex) {
  echo $ex;
}
if (isset($session)) {
  $request = new FacebookRequest( $session, 'GET', '/me?fields=id,first_name,last_name,email' );
  $response = $request->execute();
  // get response
  $graphObject = $response->getGraphObject();
      $fbid = $graphObject->getProperty('id');              // To Get Facebook ID
      
      setlocale(LC_CTYPE, 'en_US.UTF8');
      $fbfname = $graphObject->getProperty('first_name'); // To Get Facebook fname
      $fbfname=iconv('utf-8', 'ascii//TRANSLIT', $fbfname);
      
      $fblname = $graphObject->getProperty('last_name'); // To Get Facebook lname
      $fblname=iconv('utf-8', 'ascii//TRANSLIT', $fblname);
      
      $fbemail = $graphObject->getProperty('email');    // To Get Facebook email ID
      if($fbemail == '')
      	$fbemail = $fbid.'@facebook.com';
  
  require_once('../database.php');

  $conn = new mysqli($servername, $usn, $psw,$database);
  if($conn->connect_errno)echo 'There was a problem with connecting to our server. Please, try again!';
  else{
    $query = "SELECT * FROM users WHERE id='$fbid'";
    $result=$conn->query($query);
      if($result->num_rows == 0)
      {
        $query = "SELECT * FROM users WHERE email='$fbemail'";
        $result=$conn->query($query);
        if($result->num_rows == 0)
        { 
          $query = "INSERT INTO users (id,fname,lname,email,verified,hash) VALUES ('$fbid','$fbfname','$fblname','$fbemail',1,'fbk')";
          $conn->query($query);
          $_SESSION['logged_in'] = true;
          $_SESSION['id'] = $fbid;
          $_SESSION['fname'] = $fbfname;           
          $_SESSION['lname'] = $fblname;
          $_SESSION['email'] = $fbemail;
          $_SESSION['prog'] = '';
        }
        else
        {
          $row = $result->fetch_assoc();
          $prog=$row['prog'];

          $query = "UPDATE users SET id='$fbid', fname='$fbfname', lname='$fblname', verified=1 WHERE email='$fbemail'";
          $conn->query($query);

          $_SESSION['logged_in'] = true;
          $_SESSION['id'] = $fbid;
          $_SESSION['email'] = $fbemail;
          $_SESSION['fname'] = $fbfname;
          $_SESSION['lname'] = $fblname;
          $_SESSION['prog'] = $prog;
        }
      }
      else{
        $row = $result->fetch_assoc();
        $prog=$row['prog'];
        $query = "UPDATE users SET fname='$fbfname', lname='$fblname', email='$fbemail' WHERE id='$fbid'";
	$conn->query($query);
        $_SESSION['logged_in'] = true;
        $_SESSION['id'] = $fbid;
        $_SESSION['email'] = $fbemail;
        $_SESSION['fname'] = $fbfname;
        $_SESSION['lname'] = $fblname;
        $_SESSION['prog'] = $prog;
      }
    }
    $conn->close();
    header("Location:../../courses.php");
}
else {
  $loginUrl = $helper->getLoginUrl();
  header("Location:".$loginUrl);
}
?>