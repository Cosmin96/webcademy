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
<p align="center"><font size = "6"><b><u>Quiz 4: Styling the font</b></u></font></p><br>
<font size ="4">
<p><b>1) HTML comments start with &lt;-- and end with --&gt;:</b></p>

<p>
<input id="qh411" type="radio" name="q12" value="">True<br>
<input id="qh412" type="radio" name="q12" value="">False</p><br>

<p><b>2) Inline elements are normally displayed without starting a new line:</b></p>

<p>
<input id="qh421" type="radio" name="q13" value="">True<br>
<input id="qh422" type="radio" name="q13" value="">False</p><br>

<p><b>3)Which one of the following is correct for adding a background colour in HTML?</b></p>

<p>
<input id="qh431" type="radio" name="q14" value="">&lt;background&gt;green&lt;/background&gt;<br>
<input id="qh432" type="radio" name="q14" value="">&lt;body bg=&ldquo;green&rdquo;<br>
<input id="qh433" type="radio" name="q14" value="">&lt;body style=&ldquo;background-color:green;&rdquo;&gt;</p><br>

<p><b>4) How do we make text bold in HTML?</b></p>

<p>
<input id="qh441" type="radio" name="q15" value="">&lt;bb&gt;<br>
<input id="qh442" type="radio" name="q15" value="">&lt;strong&gt;<br>
<input id="qh443" type="radio" name="q15" value="">&lt;i&gt;<br>
<input id="qh444" type="radio" name="q15" value="">&lt;bold&gt;</p><br>

<p><b>5) How do we italicize text in HTML?</b></p>

<p>
<input id="qh451" type="radio" name="q16" value="">&lt;italic&gt;<br>
<input id="qh452" type="radio" name="q16" value="">&lt;em&gt;<br>
<input id="qh453" type="radio" name="q16" value="">&lt;it&gt;<br><br>
</p>

<p align="center"><button onclick="quizSubmission('qh4', 5)" name"submitbtn" class="submit">Submit</button></p>
</body>
</html>