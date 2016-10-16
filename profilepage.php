<?php
    session_start();
    if($_SESSION['logged_in']==false){
        header("Location: login.php");
        die();
    }
    require_once('php/constants.php');
?>

<!DOCTYPE html>
<html lang="en">

<head>

    <base target="_parent" />

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
    <link href="dashboard-assets/css/simple-sidebar.css" rel="stylesheet">
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

</head>

<body id="page-top" class="index alb">
                <br>
                <div class="detalii"><u><b>Your details</b></u></div><br>
                <div class="bordel">
                <div class="detalii"><u>First Name: <?php echo $_SESSION['fname']?></u></div>
                <div class="detalii"><u>Last Name: <?php echo $_SESSION['lname']?></u></div>
                <div class="detalii"><u>E-mail address: <?php echo $_SESSION['email']?></u></div><br>
            </div>

    <!-- Header -->
    <header class="alb">
        <div class="container">
            <div class="intro-text">
                <div class="detalii"><u><b>Your progress</b></u></div><br>

            <a style="display:block" href="htmllesson.php">
                <div class="col-sm-4 chenar">
                    <div class="team-member">
                        <img src="course-assets/img/logo/html5.png" class="img-responsive img-circle" alt="">
                        <h4 class="text-muted">HTML5</h4>
                        <br>
                    </div>
                    <div class="negru">
                        <?php
                            echo ( ( substr_count($_SESSION['prog'], "h") / $_html ) * 100 ) . "% complete</div>";
                            if(( substr_count($_SESSION['prog'], "h") / $_html ) * 100 == 100)
                                echo '<a class="page-scroll " href="php/fpdf/diplomaHTML.php" target="_blank"><font size="5">Get Certificate</font></a>';
                        ?>

                </div>
            </a>

            <a style="display:block" href="csslesson.php">
                <div class="col-sm-4">
                    <div class="team-member">
                        <img src="course-assets/img/logo/css3.png" class="img-responsive img-circle" alt="">
                        <h4 class="text-muted">CSS3</h4>
                        <br>
                    </div>
                    <div class="negru">
                        <?php
                            echo ( ( substr_count($_SESSION['prog'], "c") / $_css ) * 100 ) . "% complete</div>";
                            if(( substr_count($_SESSION['prog'], "c") / $_css ) * 100 == 100)
                                echo '<a class="page-scroll " href="php/fpdf/diplomaCSS.php" target="_blank"><font size="5">Get Certificate</font></a>';
                        ?>
                    
                </div>
            </a>

            <a style="display:block" href="javascriptlesson.php">
                <div class="col-sm-4">
                    <div class="team-member">
                        <img src="course-assets/img/logo/javascript.png" class="img-responsive img-circle" alt="">
                        <h4 class="text-muted">JavaScript</h4>
                        <br>
                    </div>
                    <div class="negru">
                        <?php
                            echo ( ( substr_count($_SESSION['prog'], "j") / $_js ) * 100 ) . "% complete</div>";
                            if(( substr_count($_SESSION['prog'], "j") / $_js ) * 100 == 100)
                                echo '<a class="page-scroll " href="php/fpdf/diplomaJS.php" target="_blank"><font size="5">Get Certificate</font></a>';
                        ?>

                </div>
            </a>
            <a style="display:block" href="#">
                <div class="col-sm-4">
                    <div class="team-member">
                        <img src="course-assets/img/logo/design.png" class="img-responsive img-circle" alt="">
                        <h4 class="text-muted">Building a website</h4>
                        <br>
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
                    </div>
                    <div class="negru">
                        <?php
                            echo ( ( substr_count($_SESSION['prog'], "w") / $_web ) * 100 ) . "% complete</div>";
                            if(( substr_count($_SESSION['prog'], "w") / $_web ) * 100 == 100)
                                echo '<a class="page-scroll " href="php/fpdf/diplomaWeb.php" target="_blank"><font size="5">Get Certificate</font></a>';
                        ?>
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
