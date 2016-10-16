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
<p align="center"><font size = "6"><b><u>Quiz 1: Introduction to HTML</b></u></font></p><br>
<font size ="4">
<p><b>1) What does HTML stand for?</b></p>


<p><input id="qh111" type="radio" name="q1" value="">Hyperlinks and Text Markup Language<br>
<input id="qh112" type="radio" name="q1" value="">HyperText Marking Language<br>
<input id="qh113" type="radio" name="q1" value="">HyperText Markup Language</p><br>


<p><b>2) Using HTML, we can build a complete website, with most of the styling and design features:</b></p>

<p><input id="qh121" type="radio" name="q2" value="">True<br>
<input id="qh122" type="radio" name="q2" value="">False</p><br>

<p><b>3) What tag do we start an HTML document with?</b></p>

<p><input id="qh131" type="radio" name="q3" value="">&lt;!DOCTYPE&gt;<br>
<input id="qh132" type="radio" name="q3" value="">&lt;DOCTYPE html&gt;<br>
<input id="qh133" type="radio" name="q3" value="">&lt;!DOCTYPE html&gt;<br>
<input id="qh134" type="radio" name="q3" value="">&lt;/DOCTYPE html&gt;</p><br>

<p><b>4)Which character specifies an end tag?</b></p>

<p><input id="qh141" type="radio" name="q4" value="">&lt;<br>
<input id="qh142" type="radio" name="q4" value="">\<br>
<input id="qh143" type="radio" name="q4" value="">&gt;<br>
<input id="qh144" type="radio" name="q4" value="">/</p><br>

<p><b>5) The content in the body is visible to the user:</b></p>

<p><input id="qh151" type="radio" name="q5" value="">True<br>
<input id="qh152" type="radio" name="q5" value="">False<br>
</p><br>

<p align="center"><button onclick="quizSubmission('qh1', 5)" name"submitbtn" class="submit">Submit</button></p>

</body>
</html>