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
<p align="center"><font size = "6"><b><u>Quiz 4: CSS3</b></u></font></p><br>
<font size ="4">

<p><b>1) Which of the following is a value used in background-size?</b></p>

<p><input id="qc411" type="radio" name="q25" value="">Cover<br>
<input id="qc412" type="radio" name="q25" value="">Contain<br>
<input id="qc413" type="radio" name="q25" value="">Initial<br>
<input id="qc414" type="radio" name="q25" value="">All the above are correct</p><br>

<p><b>2) In CSS3, the animation container must be preceded by:</b></p>

<p><input id="qc421" type="radio" name="q26" value="">@animation<br>
<input id="qc422" type="radio" name="q26" value="">@keyframes<br>
<input id="qc423" type="radio" name="q26" value="">@frame<br>
<input id="qc424" type="radio" name="q26" value="">None of the above</p><br>

<p><b>3) In order to link an animation with an element, we use:</b></p>

<p><input id="qc431" type="radio" name="q27" value="">Div { Animation-name: animation; }<br>
<input id="qc432" type="radio" name="q27" value="">Div { Animation-name: animation }<br>
<input id="qc433" type="radio" name="q27" value="">Div { Animation-link: animation }<br>
<input id="qc434" type="radio" name="q27" value="">Div { Animation-link: animation; }</p><br>

<p><b>4) Which of the properties below is used in animations?</b></p>

<p><input id="qc441" type="radio" name="q28" value="">Animation-iteration<br>
<input id="qc442" type="radio" name="q28" value="">Animation-delay<br>
<input id="qc443" type="radio" name="q28" value="">Animation-repeat<br>
<input id="qc444" type="radio" name="q28" value="">All the above are correct</p><br>

<p><b>5) The following statements:</b></p>

<p>animation { from {background-color: white;} to {background-color: green;} } animation { 0% {background-color: white;} 100% {background-color: green;} }</p>

<p><b>are the same:</b></p>

<p><input id="qc451" type="radio" name="q29" value="">True<br>
<input id="qc452" type="radio" name="q29" value="">False </p><br>

<p><b>6) The speed curve influences on the duration of an animation:</b></p>

<p><input id="qc461" type="radio" name="q30" value="">True<br>
<input id="qc462" type="radio" name="q30" value="">False </p><br>

<p align="center"><button onclick="quizSubmission('qc4', 6)" name"submitbtn" class="submit">Submit</button></p>
</body>
</html>