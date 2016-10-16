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

    <title>CSS</title>

    <link href="css/sweetalert.css" rel="stylesheet">
        <script src="js/sweetalert.min.js"></script>

    <!-- Bootstrap Core CSS -->
    <link href="dashboard-assets/css/bootstrap.min.css" rel="stylesheet">

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

<body onload="setProgress('c', 'none')">

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
                    <a id="lc1" onclick="setProgress('c', 'lc1')" href="dashboard-assets/lessons/css/chapter1.php" target="lectii">Chapter 1: Introduction to CSS</a>
                </li>
                <li>
                    <a id="lc2" onclick="setProgress('c', 'lc2')" href="dashboard-assets/lessons/css/chapter2.php" target="lectii">Chapter 2: Blocks, backgrounds, borders… Oh my</a>
                </li>
                <li>
                    <a id="qc1" href="dashboard-assets/lessons/css/cquiz1.php" style="color:#fed136;" target="lectii">Quiz 1: Introduction to CSS</a>
                </li>
                <li>
                    <a id="lc3" onclick="setProgress('c', 'lc3')" href="dashboard-assets/lessons/css/chapter3.php" target="lectii">Chapter 3: Selecting selectors</a>
                </li>
                <li>
                    <a id="qc2" href="dashboard-assets/lessons/css/cquiz2.php" style="color:#fed136;" target="lectii">Quiz 2: Selecting selectors</a>
                </li>
                <li>
                    <a id="lc4" onclick="setProgress('c', 'lc4')" href="dashboard-assets/lessons/css/chapter4.php" target="lectii">Chapter 4: Positioning</a>
                </li>
                <li>
                    <a id="qc3" href="dashboard-assets/lessons/css/cquiz3.php" style="color:#fed136;" target="lectii">Quiz 3: Positioning</a>
                </li>
                <li>
                    <a id="lc5" onclick="setProgress('c', 'lc5')" href="dashboard-assets/lessons/css/chapter5.php" target="lectii">Chapter 5: CSS3</a>
                </li>
                                <li>
                    <a id="qc4" href="dashboard-assets/lessons/css/cquiz4.php" style="color:#fed136;" target="lectii">Quiz 4: CSS3</a>
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
                        <img class="imagine" src="dashboard-assets/img/logo/css3.png" width="4%" height="4%">
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
            <iframe name="lectii" src="dashboard-assets/lessons/css/welcomecss.php" width=100% height=100% style="border:30px solid #e8e1ce"></iframe>
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
                        if( (ok.match(/c/g) || []).length == (data.match(/c/g) || []).length - 1 && (data.match(/c/g) || []).length == 8 ){
                            swal({   
                            title: "Congratulations!",   
                            text: "You have completed the CSS course! You can now access your certificate in the 'Profile' section of your account",
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
