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
<p align="center"><font size = "6"><b><u>Quiz 6: JQuery</b></u></font></p><br>
<font size ="4">

<p><b>1) jQuery is a Java library used along JavaScript:</b></p>

<p><input id="qj611" type="radio" name="q30" value="">True<br>
<input id="qj612" type="radio" name="q30" value="">False</p><br>

<p><b>2) As in JavaScript, semicolons can be omitted:</b></p>

<p><input id="qj621" type="radio" name="q31" value="">True<br>
<input id="qj622" type="radio" name="q31" value="">False</p><br>

<p><b>3) In order to link our jQuery to the HTML document, we use:</b></p>

<p><input id="qj631" type="radio" name="q32" value="">&lt;script type=&ldquo;text/javascript&rdquo; src=&ldquo;script.js&rdquo;&gt;<br>
<input id="qj632" type="radio" name="q32" value="">&lt;script type=&ldquo;text/javascript&rdquo; src=&ldquo;script.js&rdquo;&gt;&lt;/script&gt;<br>
<input id="qj633" type="radio" name="q32" value="">&lt;script type=&ldquo;text/javascript&rdquo; src=&ldquo;index.html&rdquo;&gt;<br> 
<input id="qj634" type="radio" name="q32" value="">&lt;script type=&ldquo;text/javascript&rdquo; src=&ldquo;index.html&rdquo;&gt;&lt;/script&gt;</p><br>

<p><b>4) Which of the following is NOT a selector?</b></p>

<p><input id="qj641" type="radio" name="q33" value="">&ldquo;this&rdquo; keyword<br>
<input id="qj642" type="radio" name="q33" value="">CSS class<br>
<input id="qj643" type="radio" name="q33" value="">#id<br>
<input id="qj644" type="radio" name="q33" value="">href=id</p><br>

<p><b>5) Which of the following is NOT a function included in the jQuery UI Library?</b></p>

<p><input id="qj651" type="radio" name="q34" value="">effect()<br>
<input id="qj652" type="radio" name="q34" value="">function()<br>
<input id="qj653" type="radio" name="q34" value="">Selectable()<br>
<input id="qj654" type="radio" name="q34" value="">Draggable()</p><br>

<p align="center"><button onclick="quizSubmission('qj6', 5)" name"submitbtn" class="submit">Submit</button></p>
</body>
</html>