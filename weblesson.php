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

    <title>Web Development</title>

    <!-- Bootstrap Core CSS -->
    <link href="dashboard-assets/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="dashboard-assets/css/simple-sidebar.css" rel="stylesheet">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
<link rel="shortcut icon" href="dashboard-assets/ico/favicon.png">
</head>

<body>

    <div id="wrapper">

        <!-- Sidebar -->
        <div id="sidebar-wrapper">
            <ul class="sidebar-nav">
                <li class="sidebar-brand">
                    <a href="index.php">
                       <img class="highlight" src="dashboard-assets/img/logo/webcademy.png">
                    </a>
                </li>
                <hr>
                <li>
                    <a href="dashboard-assets/lessons/web/chapter1.php" target="lectii">Chapter 1: Introduction to Interactive Web Development</a>
                </li>
            </ul>
        </div>
        <!-- /#sidebar-wrapper -->

        <!-- Page Content -->
        <div id="page-content-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <a href="#menu-toggle" class="btn btn-default glyphicon glyphicon-th" id="menu-toggle"></a>
                        <img class="imagine" src="dashboard-assets/img/logo/design.png" width="4%" height="4%">
                        <ul class="nav navbar-nav navbar-right">
                        <li class="cutiuta">
                        <a class="page-scroll" href="profile.php">Profile</a>
                    </li></ul>
                    </div>
                </div>
            </div>
            <hr>
             <iframe src="dashboard-assets/lessons/web/welcomeweb.php" name="lectii" width=100% height=100% style="border:none">
             </iframe>
        </div>
        <!-- /#page-content-wrapper -->

    </div>
    <!-- /#wrapper -->

    <!-- jQuery -->
    <script src="dashboard-assets/js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="dashboard-assets/js/bootstrap.min.js"></script>

    <!-- Menu Toggle Script -->
    <script>
    $("#menu-toggle").click(function(e) {
        e.preventDefault();
        $("#wrapper").toggleClass("toggled");
    });
    </script>

</body>

</html>
