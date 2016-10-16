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
<p align="center"><font size = "6"><b><u>Quiz 1: Basic Concepts</b></u></font></p><br>
<font size ="4">

<p><b>1) Where is the correct place to insert JavaScript?</b></p>

<p>
<input id="qj111" type="radio" name="q1" value="">Both the &lt;head&gt; and &lt;body&gt; sections<br>
<input id="qj112" type="radio" name="q1" value="">The &lt;head&gt; section only<br>
<input id="qj113" type="radio" name="q1" value="">The &lt;body&gt; section only</p><br>

<p><b>2) Inside which HTML element do we put the JavaScript?</b></p>

<p>
<input id="qj121" type="radio" name="q2" value="">&lt;javascript&gt;<br>
<input id="qj122" type="radio" name="q2" value="">&lt;jscript&gt;<br>
<input id="qj123" type="radio" name="q2" value="">&lt;script&gt;<br>
<input id="qj124" type="radio" name="q2" value="">&lt;js&gt;</p><br>

<p><b>3) In a program both numbers and strings must be surrounded by quotes (&ldquo; &rdquo;).</b></p>

<p>
<input id="qj131" type="radio" name="q3" value="">True<br>
<input id="qj132" type="radio" name="q3" value="">False</p><br>

<p><b>4)How do we write &ldquo;Welcome!&rdquo; in an alert box?</b></p>

<p>
<input id="qj141" type="radio" name="q4" value="">alertBox(&ldquo;Welcome!&rdquo;);<br>
<input id="qj142" type="radio" name="q4" value="">msgBox(&ldquo;Welcome!&rdquo;);<br>
<input id="qj143" type="radio" name="q4" value="">alert(&ldquo;Welcome!&rdquo;);<br>
<input id="qj144" type="radio" name="q4" value="">msg(&ldquo;Welcome!&rdquo;);</p><br>

<p><b>5) Console.log() and window.alert() are mostly different:</b></p>

<p>
<input id="qj151" type="radio" name="q5" value="">True<br>
<input id="qj152" type="radio" name="q5" value="">False</p><br>

<p><b>6) In JavaScript, semicolons ( ; ) can be omitted and the program can still run without creating errors:</b></p>

<p>
<input id="qj161" type="radio" name="q6" value="">True<br>
<input id="qj162" type="radio" name="q6" value="">False</p><br>

<p><b>7) What does the following statement evaluate to?</b></p>

<p><b>5 === &ldquo;5&rdquo;</b></p>

<p>
<input id="qj171" type="radio" name="q7" value="">True<br>
<input id="qj172" type="radio" name="q7" value="">False</p><br>

<p><b>8) What is the result of the following statement: &ldquo;hello&rdquo;.substring(1, 4);</b></p>

<p>
<input id="qj181" type="radio" name="q8" value="">hell<br>
<input id="qj182" type="radio" name="q8" value="">ell<br>
<input id="qj183" type="radio" name="q8" value="">ello<br>
<input id="qj184" type="radio" name="q8" value="">lo</p><br>

<p><b>9) How do you declare a variable in JavaScript?</b></p>

<p>
<input id="qj191" type="radio" name="q9" value="">variable myVariable;<br>
<input id="qj192" type="radio" name="q9" value="">var myVariable;<br>
<input id="qj193" type="radio" name="q9" value="">v myVariable;</p><br>

<p><b>10) Which operator is used to assign a value to a variable?</b></p>

<p>
<input id="qj1101" type="radio" name="q10" value="">:<br>
<input id="qj1102" type="radio" name="q10" value="">==<br>
<input id="qj1103" type="radio" name="q10" value="">&gt;<br>
<input id="qj1104" type="radio" name="q10" value="">=<br>
</p><br>

<p align="center"><button onclick="quizSubmission('qj1', 10)" name"submitbtn" class="submit">Submit</button></p>
</body>
</html>