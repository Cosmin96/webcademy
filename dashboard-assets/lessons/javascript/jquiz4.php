<?php
    session_start();
    if($_SESSION['logged_in']==false){
        header("Location: login.php");
        die();
    }
?>

<html>
<link rel="stylesheet" type="text/css" href="textstyle.css">
<link rel="stylesheet" type="text/css" href="../../../css/sweetalert.css">
<link href='https://fonts.googleapis.com/css?family=PT+Sans:700,400' rel='stylesheet' type='text/css'>
<script src="../../js/quiz.js"></script>
<script src="../../../js/sweetalert.min.js"></script>
<script src="../../../js/jquery.js"></script>
<body>
<p align="center"><font size = "6"><b><u>Quiz 4: Arrays and Objects</b></u></font></p><br>
<font size ="4">

<p><b>1) What is the correct way to write a JavaScript array?</b></p>

<p>
<input id="qj411" type="radio" name="q21" value="">var names = [&ldquo;John&rdquo;, &ldquo;Sarah&rdquo;, &ldquo;Tom&rdquo;]<br>
<input id="qj412" type="radio" name="q21" value="">var names = (1:&rdquo;John&rdquo;, 2:&rdquo;Sarah&rdquo;, 3:&rdquo;Tom&rdquo;)<br>
<input id="qj413" type="radio" name="q21" value="">var names = 1 = (&ldquo;John&rdquo;), 2 = (&ldquo;Sarah&rdquo;), 3 = (&ldquo;Tom&rdquo;)<br>
<input id="qj414" type="radio" name="q21" value="">var names = &ldquo;John&rdquo;, &ldquo;Sarah&rdquo;, &ldquo;Tom&rdquo;</p><br>

<p><b>2) What does the following statement return: </b></p>

<p><b>var colours = [&ldquo;red&rdquo;, &ldquo;blue&rdquo;, &ldquo;green&rdquo;, &ldquo;yellow&rdquo;];<br>
console.log(colours[2]);</b></p>

<p>
<input id="qj421" type="radio" name="q22" value="">Red<br>
<input id="qj422" type="radio" name="q22" value="">Blue<br>
<input id="qj423" type="radio" name="q22" value="">Green<br>
<input id="qj424" type="radio" name="q22" value="">Yellow</p><br>

<p><b>3) The keyword &ldquo;new&rdquo; creates objects with empty properties and methods:</b></p>

<p>
<input id="qj431" type="radio" name="q23" value="">True<br>
<input id="qj432" type="radio" name="q23" value="">False</p><br>

<p><b>4) The keyword &ldquo;this&rdquo;:</b></p>

<p>
<input id="qj441" type="radio" name="q24" value="">Creates a universal method<br>
<input id="qj442" type="radio" name="q24" value="">Defines the same method for multiple objects<br>
<input id="qj443" type="radio" name="q24" value="">Refers to the object being used<br>
<input id="qj444" type="radio" name="q24" value="">All of the above are true<br>
</p><br>

<p align="center"><button onclick="quizSubmission('qj4', 4)" name"submitbtn" class="submit">Submit</button></p>
</body>
</html>