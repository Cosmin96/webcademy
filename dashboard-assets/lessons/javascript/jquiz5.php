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
<p align="center"><font size = "6"><b><u>Quiz 5: Objects</b></u></font></p><br>
<font size ="4">

<p><b>1) What is the HTML DOM?</b></p>

<p>
<input id="qj511" type="radio" name="q25" value="">Device Orientation Manager<br>
<input id="qj512" type="radio" name="q25" value="">Document Origin Monitor<br>
<input id="qj513" type="radio" name="q25" value="">Document Object Model<br>
<input id="qj514" type="radio" name="q25" value="">Dynamic Optional Marker</p><br>

<p><b>2) What is the correct JavaScript syntax to change the content of the HTML element below?</b></p>

<p><b>&lt;p id=&ldquo;hi&rdquo;&gt;&lt;/p&gt;</b></p>

<p>
<input id="qj521" type="radio" name="q26" value="">document.getElementByName(&ldquo;p&rdquo;).innerHTML= &ldquo;Hello!&rdquo;;<br>
<input id="qj522" type="radio" name="q26" value="">document.getElementById(&ldquo;hi&rdquo;).innerHTML= &ldquo;Hello!&rdquo;;<br>
<input id="qj523" type="radio" name="q26" value="">document.getElement(&ldquo;p&rdquo;).innerHTML= &ldquo;Hello!&rdquo;;<br>
<input id="qj524" type="radio" name="q26" value="">#hi.innerHTML= &ldquo;Hello&rdquo;;</p><br>

<p><b>3) We can&rsquo;t change a photo using JavaScript:</b></p>

<p>
<input id="qj531" type="radio" name="q27" value="">True<br>
<input id="qj532" type="radio" name="q27" value="">False</p><br>

<p><b>4) CSS properties can be attributed to elements using their ids:</b></p>

<p>
<input id="qj541" type="radio" name="q28" value="">True<br>
<input id="qj542" type="radio" name="q28" value="">False</p><br>

<p><b>5) Which event occurs when the user clicks on an HTML element?</b></p>

<p>
<input id="qj551" type="radio" name="q29" value="">onmouseclick<br>
<input id="qj552" type="radio" name="q29" value="">onclick<br>
<input id="qj553" type="radio" name="q29" value="">onmouseover<br>
<input id="qj554" type="radio" name="q29" value="">onchange<br>
</p><br>

<p align="center"><button onclick="quizSubmission('qj5', 5)" name"submitbtn" class="submit">Submit</button></p>
</body>
</html>