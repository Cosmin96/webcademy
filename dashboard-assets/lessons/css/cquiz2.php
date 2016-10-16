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
<p align="center"><font size = "6"><b><u>Quiz 2: Selecting selectors</b></u></font></p><br>
<font size ="4">

<p><b>1) How do you group selectors?</b></p>

<p>
<input id="qc211" type="radio" name="q14" value="">Separate each selector with a space<br>
<input id="qc212" type="radio" name="q14" value="">Separate each selector with a plus sign<br>
<input id="qc213" type="radio" name="q14" value="">Separate each selector with a comma</p><br>

<p><b>2) What is the correct CSS syntax for making all the &lt;p&gt; elements bold?</b></p>

<p>
<input id="qc221" type="radio" name="q15" value="">p {text-size:bold;}<br>
<input id="qc222" type="radio" name="q15" value="">&lt;p style=&ldquo;text-size:bold;&rdquo;&gt;<br>
<input id="qc223" type="radio" name="q15" value="">&lt;p style=&ldquo;font-size:bold;&rdquo;&gt;<br>
<input id="qc224" type="radio" name="q15" value="">p {font-weight:bold;}</p><br>

<p><b>3) How do you select all p elements inside a div element?</b></p>

<p>
<input id="qc231" type="radio" name="q16" value="">div.p<br>
<input id="qc232" type="radio" name="q16" value="">div p<br>
<input id="qc233" type="radio" name="q16" value="">div + p</p><br>

<p><b>4) How do you select an element with id &ldquo;identity&rdquo;?</b></p>

<p>
<input id="qc241" type="radio" name="q17" value="">identity<br>
<input id="qc242" type="radio" name="q17" value="">#identity<br>
<input id="qc243" type="radio" name="q17" value="">*identity<br>
<input id="qc244" type="radio" name="q17" value="">.identity</p><br>

<p><b>5) How do you select elements with class name &ldquo;class_name&rdquo;?</b></p>

<p>
<input id="qc251" type="radio" name="q18" value="">class_name<br>
<input id="qc252" type="radio" name="q18" value="">#class_name<br>
<input id="qc253" type="radio" name="q18" value="">*class_name<br>
<input id="qc254" type="radio" name="q18" value="">.class_name<br>
</p><br>

<p align="center"><button onclick="quizSubmission('qc2', 5)" name"submitbtn" class="submit">Submit</button></p>
</body>
</html>