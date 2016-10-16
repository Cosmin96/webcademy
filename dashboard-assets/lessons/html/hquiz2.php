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
<p align="center"><font size = "6"><b><u>Quiz 2: Body Elements</b></u></font></p><br>
<font size ="4">
<p><b>1) Which is the tag for the largest heading?</b></p>

<p><input id="qh211" type="radio" name="q6" value="">&lt;h6&gt;<br>
<input id="qh212" type="radio" name="q6" value="">&lt;lhead&gt;<br>
<input id="qh213" type="radio" name="q6" value="">&lt;h1&gt;<br>
<input id="qh214" type="radio" name="q6" value="">&lt;head&gt;</p><br>

<p><b>
2) What is the correct form for inserting an image in HTML?</b></p>

<p><input id="qh221" type="radio" name="q7" value="">&lt;img href= &ldquo;image.png&rdquo; alt=&ldquo;Hello!&rdquo;&gt;<br>
<input id="qh222" type="radio" name="q7" value="">&lt;image src=&ldquo;image.png&rdquo; alt=&ldquo;Hello!&rdquo;&gt;<br>
<input id="qh223" type="radio" name="q7" value="">&lt;img src=&ldquo;image.png&rdquo; alt=&ldquo;Hello!&rdquo;&gt;<br>
<input id="qh224" type="radio" name="q7" value="">&lt;img alt=&ldquo;Hello!&rdquo;&gt;image.png&lt;/img&gt;</p><br>

<p><b>3) How do we create a hyperlink in HTML?</b></p>

<p><input id="qh231" type="radio" name="q8" value="">&lt;a href=&ldquo;https://www.google.co.uk&rdquo;&gt; Google&lt;/a&gt;<br>
<input id="qh232" type="radio" name="q8" value="">&lt;a&gt;https://www.google.co.uk&lt;/a&gt;<br>
<input id="qh233" type="radio" name="q8" value="">&lt;a url=&ldquo;https://www.google.co.uk&rdquo;&gt;Google&lt;/a&gt;<br>
<input id="qh234" type="radio" name="q8" value="">&lt;a name=&ldquo;https://www.google.co.uk&rdquo;&gt;Google&lt;/a&gt;<br>
</p><br>

<p align="center"><button onclick="quizSubmission('qh2', 3)" name"submitbtn" class="submit">Submit</button></p>

</body>
</html>