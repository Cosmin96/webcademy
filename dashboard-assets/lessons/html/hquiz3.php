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
<p align="center"><font size = "6"><b><u>Quiz 3: Making Lists</b></u></font></p><br>
<font size ="4">
<p><b>1) How can you make a numbered list?</b></p>

<p>
<input id="qh311" type="radio" name="q9" value="">&lt;ol&gt;<br>
<input id="qh312" type="radio" name="q9" value="">&lt;ul&gt;<br>
<input id="qh313" type="radio" name="q9" value="">&lt;nl&gt;<br>
<input id="qh314" type="radio" name="q9" value="">&lt;dl&gt;</p><br>

<p><b>2) How can you make a bulleted list?</b></p>

<p>
<input id="qh321" type="radio" name="q10" value="">&lt;bl&gt;<br>
<input id="qh322" type="radio" name="q10" value="">&lt;ul&gt;<br>
<input id="qh323" type="radio" name="q10" value="">&lt;dl&gt;<br>
<input id="qh324" type="radio" name="q10" value="">&lt;ol&gt;</p><br>

<p><b>3) When nesting tags, the last tag you open is the last one you close:</b></p>

<p>
<input id="qh331" type="radio" name="q11" value="">True<br>
<input id="qh332" type="radio" name="q11" value="">False<br>
</p><br>

<p align="center"><button onclick="quizSubmission('qh3', 3)" name"submitbtn" class="submit">Submit</button></p>
</body>
</html>