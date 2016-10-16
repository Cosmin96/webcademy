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
<p align="center"><font size = "6"><b><u>Quiz 7: Forms</b></u></font></p><br>
<font size ="4">
<p><b>1) What is the correct HTML for making a checkbox?</b></p>

<p>
<input id="qh711" type="radio" name="q22" value="">&lt;input type=&ldquo;checkbox&rdquo;&gt;<br>
<input id="qh712" type="radio" name="q22" value="">&lt;checkbox&gt;<br>
<input id="qh713" type="radio" name="q22" value="">&lt;input type=&ldquo;check&rdquo;&gt;<br>
<input id="qh714" type="radio" name="q22" value="">&lt;input form=check&gt;</p><br>

<p><b>2) What is the correct HTML for making a text input field?</b></p>

<p>
<input id="qh721" type="radio" name="q23" value="">&lt;input type=&ldquo;textfield&rdquo;&gt;<br>
<input id="qh722" type="radio" name="q23" value="">&lt;textfield&gt;<br>
<input id="qh723" type="radio" name="q23" value="">&lt;textinput type=&ldquo;text&rdquo;&gt;<br>
<input id="qh724" type="radio" name="q23" value="">&lt;input type=&ldquo;text&rdquo;&gt;</p><br>

<p><b>3) What is the correct HTML for making a dropdown list?</b></p>

<p>
<input id="qh731" type="radio" name="q24" value="">&lt;input type=&ldquo;dropdown&rdquo;&gt;<br>
<input id="qh732" type="radio" name="q24" value="">&lt;dropdown&gt;<br>
<input id="qh733" type="radio" name="q24" value="">&lt;input type=&ldquo;list&rdquo;&gt;<br>
<input id="qh734" type="radio" name="q24" value="">&lt;input form=&ldquo;list&rdquo;&gt;</p><br>

<p><b>4) What is the correct HTML for making a text area?</b></p>

<p>
<input id="qh741" type="radio" name="q25" value="">&lt;input form=&ldquo;textarea&rdquo;&gt;<br>
<input id="qh742" type="radio" name="q25" value="">&lt;input type= &ldquo;textbox&rdquo;&gt;<br>
<input id="qh743" type="radio" name="q25" value="">&lt;textarea&gt;<br>
<input id="qh744" type="radio" name="q25" value="">&lt;input type=&ldquo;textarea&rdquo;&gt;<br>
</p><br>

<p align="center"><button onclick="quizSubmission('qh7', 4)" name"submitbtn" class="submit">Submit</button></p>
</body>
</html>