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
<p align="center"><font size = "6"><b><u>Quiz 6: Div and span</b></u></font></p><br>
<font size ="4">
<p><b>1) With &lt;div&gt; you can style bits of your website, all at the same time, for easy styling:</b></p>

<p><input id="qh611" type="radio" name="q19" value="">True<br>
<input id="qh612" type="radio" name="q19" value="">False</p><br>

<p><b>2) With &lt;span&gt; you can select small bits of your website and control their styling:</b></p>

<p><input id="qh621" type="radio" name="q20" value="">True<br>
<input id="qh622" type="radio" name="q20" value="">False</p><br>

<p><b>3) One disadvantage of &lt;span&gt; tags is that they only allow to change font size and font family:</b></p>

<p><input id="qh631" type="radio" name="q21" value="">True<br>
<input id="qh632" type="radio" name="q21" value="">False<br>
</p><br>

<p align="center"><button onclick="quizSubmission('qh6', 3)" name"submitbtn" class="submit">Submit</button></p>
</body>
</html>