<?php
session_start();
	if(isset($_SESSION['logged_in']))
		if($_SESSION['logged_in']==true){
			header("Location: courses.php");
			die();
		}
?>

<!DOCTYPE html>
<html lang="en">

    <head>

        <link href="css/sweetalert.css" rel="stylesheet">
        <script src="js/sweetalert.min.js"></script>

        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Log In &amp; Sign Up</title>

        <!-- CSS -->
        <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Roboto:400,100,300,500">
        <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
        <link rel="stylesheet" href="assets/font-awesome/css/font-awesome.min.css">
		<link rel="stylesheet" href="assets/css/form-elements.css">
        <link rel="stylesheet" href="assets/css/style.css">

        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
            <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
            <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
        <![endif]-->

        <!-- Favicon and touch icons -->
        <link rel="shortcut icon" href="assets/ico/favicon.png">

    </head>

    <body>

        <!-- Top content -->
        <div class="top-content">
        	
            <div class="inner-bg">
                <div class="container">
                	
                    <div class="row">
                        <div class="col-sm-8 col-sm-offset-2 text">
                            <a href="index.php"> <img src="assets/img/logo/webcademy.png" width= 40% height= 5%> </a>
                            <h1>Log In &amp; Sign Up</h1>
                            <div class="description">

                            </div>
                        </div>
                    </div>
                    
                    <div class="row">
                        <div class="col-sm-5">
                        	
                        	<div class="form-box">
	                        	<div class="form-top">
	                        		<div class="form-top-left">
	                        			<h3>Login to our site</h3>
	                            		<p>Enter username and password to log on:</p>
	                        		</div>
	                        		<div class="form-top-right">
	                        		</div>
	                            </div>
	                            <div class="form-bottom">
				                    	<div class="form-group">
				                    		<label class="sr-only" for="form-username">Email</label>
				                        	<input type="text" name="form-username" placeholder="Email..." class="form-username form-control" id="form-login-email">
				                        </div>
				                        <div class="form-group">
				                        	<label class="sr-only" for="form-password">Password</label>
				                        	<input type="password" name="form-password" placeholder="Password..." class="form-password form-control" id="form-login-password">
				                        </div>
				                        <button onclick="login(document.getElementById('form-login-email').value, document.getElementById('form-login-password').value)" class="btn">Sign in!</button>
			                    </div>
		                    </div>
		                
		                	<div class="social-login">
	                        	<h3>...or login with:</h3>
	                        	<div class="social-login-buttons">
		                        	<a class="btn btn-link-2" href="php/facebook/fbconfig.php">
		                        		<i class="fa fa-facebook"></i> Facebook
		                        	</a>
		                        	<a class="btn btn-link-4" href="php/googlelogin/api.php">
		                        		<i class="fa fa-google-plus"></i> Google Plus
		                        	</a>
	                        	</div>
	                        </div>
	                        
                        </div>
                        
                        <div class="col-sm-1 middle-border"></div>
                        <div class="col-sm-1"></div>
                        	
                        <div class="col-sm-5">
                        	
                        	<div class="form-box">
                        		<div class="form-top">
	                        		<div class="form-top-left">
	                        			<h3>Sign up now</h3>
	                            		<p>Fill in the form below to get instant access:</p>
	                        		</div>
	                        		<div class="form-top-right">
	                        		</div>
	                            </div>
	                            <div class="form-bottom">
				                    	<div class="form-group">
				                    		<label class="sr-only" for="form-first-name">First name</label>
				                        	<input type="text" name="form-first-name" placeholder="First name..." class="form-first-name form-control" id="form-first-name">
				                        </div>
				                        <div class="form-group">
				                        	<label class="sr-only" for="form-last-name">Last name</label>
				                        	<input type="text" name="form-last-name" placeholder="Last name..." class="form-last-name form-control" id="form-last-name">
				                        </div>
				                        <div class="form-group">
				                        	<label class="sr-only" for="form-email">Email</label>
				                        	<input type="text" name="form-email" placeholder="Email..." class="form-email form-control" id="form-email">
				                        </div>
				                        <div class="form-group">
				                        	<label class="sr-only" for="form-about-yourself">Password</label>
                                            <input type="password" name="form-email" placeholder="Password..." class="form-email form-control" id="form-password">
				                        </div>
				                        <button onclick="register(document.getElementById('form-first-name').value, document.getElementById('form-last-name').value, document.getElementById('form-email').value, document.getElementById('form-password').value)" class="btn">Sign me up!</button>
			                    </div>
                        	</div>
                        	
                        </div>
                    </div>
                    
                </div>
            </div>
            
        </div>

        <!-- Footer -->
        <footer>
        	<div class="container">
        		<div class="row">
        			
        			<div class="col-sm-8 col-sm-offset-2">
        				<div class="footer-border"></div>
        				<p><span class="copyright">Copyright &copy; Webcademy 2016</span></p>
        			</div>
        			
        		</div>
        	</div>
        </footer>

        <!-- Javascript -->
        <script src="assets/js/jquery-1.11.1.min.js"></script>
        <script src="assets/bootstrap/js/bootstrap.min.js"></script>
        <script src="assets/js/jquery.backstretch.min.js"></script>
        <script src="assets/js/scripts.js"></script>
        
        <!--[if lt IE 10]>
            <script src="assets/js/placeholder.js"></script>
        <![endif]-->
        <script type="text/javascript">
            function register(fname, lname, email, password){
                $.ajax({
                type: 'POST',
                url: 'php/register.php',
                data: {fname:fname, lname:lname, email:email, password:password},
                success: function(data){
                    if(data!="OK")
                    {
                        swal({   
                            title: "Error!",   
                            text: data,
                            type: "error",   
                            confirmButtonText: "Ok" 
                        });
                    }
                    else
                    {     
                        swal({   
                            title: "Success!",   
                            text: "Thank you for registering on Webcademy! A confirmation email has been sent to your email address! Please, follow the instructions in order to activate your account",
                            type: "success",   
                            confirmButtonText: "Ok" 
                        });

                        document.getElementById("form-first-name").value="";
                        document.getElementById("form-last-name").value="";
                        document.getElementById("form-email").value="";
                        document.getElementById("form-password").value="";
                    }
               }
            });
            }


            function login(email, password){
             $.ajax({
                type: 'POST',
                url: 'php/LogIn.php',
                data: {email:email, password:password},
                success: function(data){
                    if(data!="OK")
                    {
                        swal({   
                            title: "Error!",   
                            text: data,
                            type: "error",   
                            confirmButtonText: "Ok" 
                        });
                    }
                    else
                    {     
                        document.getElementById("form-login-email").value="";
                        document.getElementById("form-login-password").value="";
                        window.location.href='courses.php';
                    }
               }
            });
            }
        </script>

    </body>

</html>