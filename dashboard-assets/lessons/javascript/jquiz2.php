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
<p align="center"><font size = "6"><b><u>Quiz 2: Loops and Statements</b></u></font></p><br>
<font size ="4">

<p><b>1) How do you write an IF statement in JavaScript?</b></p>

<p>
<input id="qj211" type="radio" name="q11" value="">if x = 2<br>
<input id="qj212" type="radio" name="q11" value="">if x === 2 then<br>
<input id="qj213" type="radio" name="q11" value="">if (x === 2)<br>
<input id="qj214" type="radio" name="q11" value="">if x == 2 then </p><br>

<p><b>2) An IF statement can use more conditions at once:</b></p>

<p>
<input id="qj221" type="radio" name="q12" value="">True<br>
<input id="qj222" type="radio" name="q12" value="">False</p><br>

<p><b>3) How does a WHILE loop start?</b></p>

<p>
<input id="qj231" type="radio" name="q13" value="">while (i &lt;= 10; i++)<br>
<input id="qj232" type="radio" name="q13" value="">while i = 1 to 10<br>
<input id="qj233" type="radio" name="q13" value="">while (i &lt;= 10)</p><br>

<p><b>4) WHILE statements are normally used when we now exactly how many times we want the code to run:</b></p>

<p>
<input id="qj241" type="radio" name="q14" value="">True<br>
<input id="qj242" type="radio" name="q14" value="">False</p><br>

<p><b>5) How does a FOR loop start?</b></p>

<p>
<input id="qj251" type="radio" name="q15" value="">for (i = 0; i &lt; 10)<br>
<input id="qj252" type="radio" name="q15" value="">for (i = 0; i &lt; 10; i++)<br>
<input id="qj253" type="radio" name="q15" value="">for (i &lt; 10; i++)<br>
<input id="qj254" type="radio" name="q15" value="">for i = 1 to 10</p><br>

<p><b>6) Switch statements can be used instead of IF statements:</b></p>

<p>
<input id="qj261" type="radio" name="q16" value="">True<br>
<input id="qj262" type="radio" name="q16" value="">False<br>
</p><br>

<p align="center"><button onclick="quizSubmission('qj2', 6)" name"submitbtn" class="submit">Submit</button></p>
</body>
</html>