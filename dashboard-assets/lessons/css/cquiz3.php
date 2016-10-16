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
<p align="center"><font size = "6"><b><u>Quiz 3: Positioning</b></u></font></p><br>
<font size ="4">

<p><b>1) Padding refers to the distance between the content and the border:</b></p>

<p>
<input id="qc311" type="radio" name="q19" value="">True<br>
<input id="qc312" type="radio" name="q19" value="">False</p><br>

<p><b>2) How do you display the following border:</b></p>

<p><b>Top border of 10 pixels<br>
Bottom border of 5 pixels<br>
Right border of 20 pixels<br>
Left border of 40 pixels</b></p>

<p>
<input id="qc321" type="radio" name="q20" value="">border-width: 5px 40px 10px 20px<br>
<input id="qc322" type="radio" name="q20" value="">border-width: 10px 5px 40px 20px<br>
<input id="qc323" type="radio" name="q20" value="">border-width: 10px 40px 5px 20px<br>
<input id="qc324" type="radio" name="q20" value="">border-width: 10px 20px 5px 40px</p><br>

<p><b>3) What does the following command margin: auto; do?</b></p>

<p>
<input id="qc331" type="radio" name="q21" value="">It sets the left and right margins to a specific value<br>
<input id="qc332" type="radio" name="q21" value="">It sets both left and right margins to the same value<br>
<input id="qc333" type="radio" name="q21" value="">It centres the object<br>
<input id="qc334" type="radio" name="q21" value="">All the above are true</p><br>

<p><b>4) You are allowed to use negative values when using the padding property:</b></p>

<p>
<input id="qc341" type="radio" name="q22" value="">True<br>
<input id="qc342" type="radio" name="q22" value="">False</p><br>

<p><b>5) How do you change the left margin of an element?</b></p>

<p>
<input id="qc351" type="radio" name="q23" value="">margin-left<br>
<input id="qc352" type="radio" name="q23" value="">padding-left<br>
<input id="qc353" type="radio" name="q23" value="">position-left</p><br>

<p><b>6) What is the default value of the position property?</b></p>

<p>
<input id="qc361" type="radio" name="q24" value="">absolute<br>
<input id="qc362" type="radio" name="q24" value="">relative<br>
<input id="qc363" type="radio" name="q24" value="">static<br>
<input id="qc364" type="radio" name="q24" value="">fixed<br>
</p><br>

<p align="center"><button onclick="quizSubmission('qc3', 6)" name"submitbtn" class="submit">Submit</button></p>
</body>
</html>