<?php
	session_start();
	if($_SESSION['logged_in']==false){
		header("Location: login.php");
		die();
	}
?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Webcademy</title>

    <!-- Bootstrap Core CSS -->
    <link href="course-assets/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="course-assets/css/agency.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="course-assets/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
    <link href='https://fonts.googleapis.com/css?family=Kaushan+Script' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Droid+Serif:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700' rel='stylesheet' type='text/css'>

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
    <link rel="shortcut icon" href="course-assets/ico/favicon.png">
</head>

<body id="page-top" class="index">

    <!-- Navigation -->
    <nav class="navbar navbar-default navbar-fixed-top">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header page-scroll">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand page-scroll" href="index.php">Webcademy</a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    <li class="hidden">
                        <a href="#page-top"></a>
                    </li>
                    <li>
                        <a href="editor.php" target="_blank">Code Editor</a>
                    </li>
                    <li>
                        <a href="profile.php">Profile</a>
                    </li>
                    <li>
                        <a href="index.php" onclick='session_over()'>Sign Out</a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container-fluid -->
    </nav>

    <!-- Header -->
    <header>
        <div class="container">
            <div class="intro-text">
                <div class="intro-lead-in">Your courses</div>
                
            <a style="display:block" href="htmllesson.php">
                <div class="col-sm-4">
                    <div class="team-member">
                        <img src="course-assets/img/logo/html5.png" class="img-responsive img-circle" alt="">
                        <h4 class="text-muted">HTML5</h4>
                        <br>
                        <p class="text-muted">Learn HTML with this easy tutorial that will introduce you to the world of web development through simple lessons.</p>
                    </div>
                </div>
            </a>

            <a style="display:block" href="csslesson.php">
                <div class="col-sm-4">
                    <div class="team-member">
                        <img src="course-assets/img/logo/css3.png" class="img-responsive img-circle" alt="">
                        <h4 class="text-muted">CSS3</h4>
                        <br>
                        <p class="text-muted">Learn how to use CSS alongside HTML to style a webpage and become a master of web design with step-by-step tutorials.</p>
                    </div>
                </div>
            </a>

            <a style="display:block" href="javascriptlesson.php">
                <div class="col-sm-4">
                    <div class="team-member">
                        <img src="course-assets/img/logo/javascript.png" class="img-responsive img-circle" alt="">
                        <h4 class="text-muted">JavaScript</h4>
                        <br>
                        <p class="text-muted">Become an expert in interactive effects on the web, while learning one of the easiest and most popular languages.</p>
                    </div>
                </div>
            </a>
            <a style="display:block" href="#">
                <div class="col-sm-4">
                    <div class="team-member">
                        <img src="course-assets/img/logo/design.png" class="img-responsive img-circle" alt="">
                        <h4 class="text-muted">Building a website</h4>
                        <br>
                        <p class="text-muted">Coming soon<br><br><br><br></p>
                    </div>
                </div>
            </a>
            <!--
            <a style="display:block" href="weblesson.php">
                <div class="col-sm-4">
                    <div class="team-member">
                        <img src="course-assets/img/logo/design.png" class="img-responsive img-circle" alt="">
                        <h4 class="text-muted">Building a website</h4>
                        <br>
                        <p class="text-muted">Learn how to combine the languages in the previous chapters to make an interactive website.</p>
                    </div>
                </div>
            </a>
            -->
            </div>
        </div>
    </header>

    <footer>
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <span class="copyright">Copyright &copy; Webcademy 2016</span>
                </div>
                <div class="col-md-4">
                    <ul class="list-inline social-buttons">
                        <li><a href="#"><i class="fa fa-twitter"></i></a>
                        </li>
                        <li><a href="https://www.facebook.com/WebcademyUCL/"><i class="fa fa-facebook"></i></a></li>
                    </ul>
                </div>
                <div class="col-md-4">
                    <ul class="list-inline quicklinks">
                        <li><img src="img/weblogo.png">
                        </li>

                    </ul>
                </div>
            </div>
        </div>
    </footer>

    <script type="text/javascript">
    function session_over(){
    	$.ajax({
    	type: 'POST',
    	url: 'php/end.php',
    	data: {
      	   end: 1
    	},
    	success: function(data){
        }
       });
    }
    </script>

    <!-- jQuery -->
    <script src="course-assets/js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="course-assets/js/bootstrap.min.js"></script>

    <!-- Plugin JavaScript -->
    <script src="http://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script>
    <script src="course-assets/js/classie.js"></script>
    <script src="course-assets/js/cbpAnimatedHeader.js"></script>

    <!-- Contact Form JavaScript -->
    <script src="course-assets/js/jqBootstrapValidation.js"></script>
    <script src="course-assets/js/contact_me.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="course-assets/js/agency.js"></script>

</body>

</html>