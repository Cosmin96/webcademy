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
<p align="center"><font size = "6"><b><u>Quiz 5: Tables</b></u></font></p><br>
<font size ="4">
<p><b>1) Which elements are part of &lt;table&gt;?</b></p>

<p>
<input id="qh511" type="radio" name="q17" value="">&lt;table&gt;&lt;tr&gt;&lt;tt&gt;<br>
<input id="qh512" type="radio" name="q17" value="">&lt;table&gt;&lt;head&gt;&lt;tfoot&gt;<br>
<input id="qh513" type="radio" name="q17" value="">&lt;thead&gt;&lt;body&gt;&lt;tr&gt;<br>
<input id="qh514" type="radio" name="q17" value="">&lt;table&gt;&lt;tr&gt;&lt;td&gt;</p><br>

<p><b>2) Which elements are part of &lt;table&gt;?</b></p>

<p>
<input id="qh521" type="radio" name="q18" value="">&lt;table&gt;&lt;tq&gt;&lt;td&gt;<br>
<input id="qh522" type="radio" name="q18" value="">&lt;table&gt;&lt;thead&gt;&lt;tbody&gt;<br>
<input id="qh523" type="radio" name="q18" value="">&lt;table&gt;&lt;head&gt;&lt;body&gt;<br>
<input id="qh524" type="radio" name="q18" value="">&lt;table&gt;&lt;tq&gt;&lt;tt&gt;<br>
</p><br>

<p align="center"><button onclick="quizSubmission('qh5', 2)" name"submitbtn" class="submit">Submit</button></p>
</body>
</html>