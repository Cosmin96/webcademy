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

    <title>JavaScript</title>

    <!-- Bootstrap Core CSS -->
    <link href="dashboard-assets/css/bootstrap.min.css" rel="stylesheet">
        <link href="css/sweetalert.css" rel="stylesheet">
        <script src="js/sweetalert.min.js"></script>

    <!-- Custom CSS -->
    <link href="dashboard-assets/css/simple-sidebar.css" rel="stylesheet">
    <link href="iframe.css" rel="stylesheet">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
<link rel="shortcut icon" href="dashboard-assets/ico/favicon.png">
</head>

<body onload="setProgress('j', 'none')">

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
                    <a id="lj1" onclick="setProgress('j', 'lj1')" href="dashboard-assets/lessons/javascript/chapter1.php" target="lectii">Chapter 1: Introduction to JavaScript</a>
                </li>
                <li>
                    <a id="lj2" onclick="setProgress('j', 'lj2')" href="dashboard-assets/lessons/javascript/chapter2.php" target="lectii">Chapter 2: Basic Concepts</a>
                </li>
                <li>
                    <a id="qj1" href="dashboard-assets/lessons/javascript/jquiz1.php" style="color:#fed136;" target="lectii">Quiz 1: Basic Concepts</a>
                </li>
                <li>
                    <a id="lj3" onclick="setProgress('j', 'lj3')" href="dashboard-assets/lessons/javascript/chapter3.php" target="lectii">Chapter 3: Loops and Statements</a>
                </li>
                <li>
                    <a id="qj2" href="dashboard-assets/lessons/javascript/jquiz2.php" style="color:#fed136;" target="lectii">Quiz 2: Loops and Statements</a>
                </li>
                <li>
                    <a id="lj4" onclick="setProgress('j', 'lj4')" href="dashboard-assets/lessons/javascript/chapter4.php" target="lectii">Chapter 4: Functions</a>
                </li>
                <li>
                    <a id="qj3" href="dashboard-assets/lessons/javascript/jquiz3.php" style="color:#fed136;" target="lectii">Quiz 3: Functions</a>
                </li>
                <li>
                    <a id="lj5" onclick="setProgress('j', 'lj5')" href="dashboard-assets/lessons/javascript/chapter5.php" target="lectii">Chapter 5: Arrays</a>
                </li>
                <li>
                    <a id="lj6" onclick="setProgress('j', 'lj6')" href="dashboard-assets/lessons/javascript/chapter6.php" target="lectii">Chapter 6: Objects</a>
                </li>
                <li>
                    <a id="qj4" href="dashboard-assets/lessons/javascript/jquiz4.php" style="color:#fed136;" target="lectii">Quiz 4: Arrays and Objects</a>
                </li>
                <li>
                    <a id="lj7" onclick="setProgress('j', 'lj7')" href="dashboard-assets/lessons/javascript/chapter7.php" target="lectii">Chapter 7: JS in Web Development</a>
                </li>
                <li>
                    <a id="qj5" href="dashboard-assets/lessons/javascript/jquiz5.php" style="color:#fed136;" target="lectii">Quiz 5: JS in Web Development</a>
                </li>
                <li>
                    <a id="lj8" onclick="setProgress('j', 'lj8')" href="dashboard-assets/lessons/javascript/chapter8.php" target="lectii">Chapter 8: Introduction to JQuery</a>
                </li>
                <li>
                    <a id="lj9" onclick="setProgress('j', 'lj9')" href="dashboard-assets/lessons/javascript/chapter9.php" target="lectii">Bonus Chapter: Games in JS</a>
                </li>
                <li>
                    <a id="qj6" href="dashboard-assets/lessons/javascript/jquiz6.php" style="color:#fed136;" target="lectii">Quiz 6: JQuery</a>
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
                        <img class="imagine" src="dashboard-assets/img/logo/javascript.png" width="4%" height="4%">
                        <ul class="nav navbar-nav navbar-right">
                        <li class="cutiuta">
                            <a class="page-scroll " href="editor.php" target="_blank">Code Editor</a> 
                        </li>
                        <li class="cutiuta">
                        <a class="page-scroll " href="profile.php">Profile</a>
                    </li></ul>
                    </div>
                </div>
            </div>
            <hr>
            <iframe name="lectii" src="dashboard-assets/lessons/javascript/welcomejava.php" width=100% height=100% style="border:30px solid #e8e1ce"></iframe>
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
        var ok = "";
        function setProgress(type, id){
            $.ajax({
                type: 'POST',
                url: 'php/progress.php',
                data: {type:type, id:id},
                success: function(data){
                    if(data != "none")
                    {
                        for (var i = 0; i < data.length; i += 3) {
                            var aux = data.substr(i, 3);
                            if(aux[0] == 'l'){
                                var a = document.getElementById(aux).innerHTML;
                                if(data.indexOf(aux) >= 0 && ok.indexOf(aux) < 0){
                                    document.getElementById(aux).innerHTML = "&#10004 " + a;
                                }
                                document.getElementById(aux).style.color = "cyan";
                            }
                            else{
                                var a = document.getElementById(aux).innerHTML;
                                if(data.indexOf(aux) >= 0 && ok.indexOf(aux) < 0){
                                    document.getElementById(aux).innerHTML = "&#10004 " + a;
                                }
                                document.getElementById(aux).style.color = "#74ba31";
                            }
                        }
                        if( (ok.match(/j/g) || []).length == (data.match(/j/g) || []).length - 1 && (data.match(/j/g) || []).length == 13 ){
                            swal({   
                            title: "Congratulations!",   
                            text: "You have completed the JavaScript course! You can now access your certificate in the 'Profile' section of your account",
                            type: "success",   
                            confirmButtonText: "Ok" 
                            });
                        }
                        ok = data;
                    }
               }
            });
        }

    </script>
</body>

</html>
