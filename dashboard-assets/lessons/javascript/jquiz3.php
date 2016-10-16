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
<p align="center"><font size = "6"><b><u>Quiz 3: Functions</b></u></font></p><br>
<font size ="4">

<p><b>1) How do you create a function in JavaScript?</b></p>

<p>
<input id="qj311" type="radio" name="q17" value="">function:myFunction()<br>
<input id="qj312" type="radio" name="q17" value="">function = myFunction()<br>
<input id="qj313" type="radio" name="q17" value="">function myFunction()</p><br>

<p><b>2) How do you call a function named &ldquo;myFunction&rdquo;?</b></p>

<p>
<input id="qj321" type="radio" name="q18" value="">myFunction()<br>
<input id="qj322" type="radio" name="q18" value="">call myFunction()<br>
<input id="qj323" type="radio" name="q18" value="">function myFunction()<br>
<input id="qj324" type="radio" name="q18" value="">You used to call me on myFunction()</p><br>

<p><b>3) The scope of a variable can be local or global:</b></p>

<p>
<input id="qj331" type="radio" name="q19" value="">True<br>
<input id="qj332" type="radio" name="q19" value="">False</p><br>

<p><b>4) Functions can take up to two parameters:</b></p>

<p>
<input id="qj341" type="radio" name="q20" value="">True<br>
<input id="qj342" type="radio" name="q20" value="">False<br>
</p><br>

<p align="center"><button onclick="quizSubmission('qj3', 4)" name"submitbtn" class="submit">Submit</button></p>
</body>
</html>