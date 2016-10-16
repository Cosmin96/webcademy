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
<p align="center"><font size = "6"><b><u>Quiz 8: HTML5</b></u></font></p><br>
<font size ="4">

<p><b>1) HTML5 is based in the use of plugins or external APIs (Application Programming Interface):</b></p>

<p><input id="qh811" type="radio" name="q26" value="">True<br>
<input id="qh812" type="radio" name="q26" value="">False</p><br>

<p><b>2) As with the previous version of HTML, with HTML5 you need to manually name IDs for the tags:</b></p>

<p><input id="qh821" type="radio" name="q27" value="">True<br>
<input id="qh822" type="radio" name="q27" value="">False</p><br>

<p><b>3) In HTML5, the header and footer tags: </b></p>

<p><input id="qh831" type="radio" name="q28" value="">Mark the start and end of a web page<br>
<input id="qh832" type="radio" name="q28" value="">Mark the start and end of a section of the web page.<br>
<input id="qh833" type="radio" name="q28" value="">All the above are true</p><br>

<p><b>4) In HTML5, we start a document with <!DOCTYPE html> closed by &lt;/html&gt;:</b></p>

<p><input id="qh841" type="radio" name="q29" value="">True<br>
<input id="qh842" type="radio" name="q29" value="">False</p><br>

<p><b>5) The &lt;canvas&gt; tag defines graphic drawing using JavaScript:</b></p>

<p><input id="qh851" type="radio" name="q30" value="">True<br>
<input id="qh852" type="radio" name="q30" value="">False</p><br>

<p><b>6) Which of the following define different parts of a web page in HTML5?</b></p>

<p>
<input id="qh861" type="radio" name="q31" value="">&lt;header&gt;, &lt;nav&gt;, &lt;canvas&gt;, &lt;frame&gt;<br>
<input id="qh862" type="radio" name="q31" value="">&lt;nav&gt;, &lt;aside&gt;, &lt;article&gt;, &lt;footer&gt;<br> 
<input id="qh863" type="radio" name="q31" value="">&lt;frame&gt;, &lt;tt&gt;, &lt;header&gt;, &lt;section&gt;<br> 
<input id="qh864" type="radio" name="q31" value="">&lt;header&gt;, &lt;canvas&gt;, &lt;footer&gt;, &lt;aside&gt;</p><br>


<p align="center"><button onclick="quizSubmission('qh8', 6)" name"submitbtn" class="submit">Submit</button></p>
</body>
</html>