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
                    <a href="profilepage.php" target="frame">Profile</a>
                </li>
                <li>
                    <a href="settings.php" target="frame">Settings</a>
                </li>
                <li>
                    <a href="courses.php">Back to courses</a>
                </li>
                <li>
                    <a href="index.php" onclick='session_over()'>Log Out</a>
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
                    </div>
                </div>
            </div>
            <hr>
            <br>
            <iframe name="frame" src="profilepage.php" width=100% height=100% style="border:none">
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

    <script type="text/javascript">
    function session_over(){
        $.ajax({
        type: 'POST',
        url: 'php/end.php',
        data: {
           end: 1
        },
        success: function(data){
           window.location.href("index.php");
        }
       });
    }
    </script>

</body>

</html>
