<?php
    session_start();
    if($_SESSION['logged_in']==false){
        header("Location: login.php");
        die();
    }
?>

<html>
<head>
<link rel="stylesheet" type="text/css" href="textstyle.css">
<link href='https://fonts.googleapis.com/css?family=PT+Sans:700,400' rel='stylesheet' type='text/css'>
</head>
<body>
<p align="center"><font size="6"><b><u>Chapter 1: Introduction</b></u></font></p><br>

<p align="center"><font size="6">Previously you learned to use HTML and CSS to create and style a webpage. But what if you want to do more complex things like creating a slideshow or manipulating different objects like textboxes or buttons? The answer is JavaScript.</font></p>

<p align="center"><font size="6">JavaScript is a programming language that is used alongside HTML and CSS to create websites. JavaScript is also considered to be one of the essential technologies of World Wide Web content production as a lot of websites use it and it is also supported by every browser. JavaScript is also similar to languages like C or C++, which are some of the most used languages, so before we get started with it, let&rsquo;s learn some programming concepts first.<br /></font>
</p>
</body>
</html>