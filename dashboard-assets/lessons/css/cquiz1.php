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
<p align="center"><font size = "6"><b><u>Quiz 1: Introduction to CSS</b></u></font></p><br>
<font size ="4">

<p><b>1) What does CSS stand for?</b></p>

<p>
<input id="qc111" type="radio" name="q1" value="">Colourful Style Sheets<br>
<input id="qc112" type="radio" name="q1" value="">Creative Style Sheets<br>
<input id="qc113" type="radio" name="q1" value="">Cascading Style Sheets <br>
<input id="qc114" type="radio" name="q1" value="">Canvas Style Sheets</p><br>

<p><b>2) How do we refer to an external style sheet?</b></p>

<p>
<input id="qc121" type="radio" name="q2" value="">&lt;stylesheet&gt;mystyle.css&lt;/stylesheet&gt;<br>
<input id="qc122" type="radio" name="q2" value="">&lt;link type=&ldquo;text.css&rdquo; rel=&ldquo;stylesheet&rdquo; href=&ldquo;stylesheet.css&rdquo;&gt;<br>
<input id="qc123" type="radio" name="q2" value="">&lt;style src=&ldquo;mystyle.css&rdquo;&gt;</p><br>

<p><b>3) Where in an HTML document do we refer to an external style sheet?</b></p>

<p>
<input id="qc131" type="radio" name="q3" value="">In the &lt;head&gt; section<br>
<input id="qc132" type="radio" name="q3" value="">In the &lt;body&gt; section<br>
<input id="qc133" type="radio" name="q3" value="">At the end of the document, before &lt;/html&gt;</p><br>

<p><b>4) Which one of these defines a correct CSS syntax?</b></p>

<p>
<input id="qc141" type="radio" name="q4" value="">{body:color=red;}<br>
<input id="qc142" type="radio" name="q4" value="">body:color=red;<br>
<input id="qc143" type="radio" name="q4" value="">{body; color: red;}<br>
<input id="qc144" type="radio" name="q4" value="">body {color: red;}</p><br>

<p><b>5) Which property is used to change the font of an element?</b></p>

<p>
<input id="qc151" type="radio" name="q5" value="">font-family<br>
<input id="qc152" type="radio" name="q5" value="">font<br>
<input id="qc153" type="radio" name="q5" value="">All of the above</p><br>

<p><b>6) What do we use to change the text colour of an element in CSS?</b></p>

<p>
<input id="qc161" type="radio" name="q6" value="">text-colour<br>
<input id="qc162" type="radio" name="q6" value="">text-color<br>
<input id="qc163" type="radio" name="q6" value="">color<br>
<input id="qc164" type="radio" name="q6" value="">text-style</p><br>

<p>
<b>7) Which one of these properties controls the text size in CSS?</b></p>

<p>
<input id="qc171" type="radio" name="q7" value="">font-style<br>
<input id="qc172" type="radio" name="q7" value="">text-style<br>
<input id="qc173" type="radio" name="q7" value="">font-size<br>
<input id="qc174" type="radio" name="q7" value="">text-size</p><br>

<p><b>8) What do we use to change the background colour in CSS?</b></p>

<p>
<input id="qc181" type="radio" name="q8" value="">background-color<br>
<input id="qc182" type="radio" name="q8" value="">bcolor<br>
<input id="qc183" type="radio" name="q8" value="">background-colour<br>
<input id="qc184" type="radio" name="q8" value="">colour</p><br>

<p><b>9) How do you make the text bold?</b></p>

<p>
<input id="qc191" type="radio" name="q9" value="">style:bold;<br>
<input id="qc192" type="radio" name="q9" value="">font:bold;<br>
<input id="qc193" type="radio" name="q9" value="">font-weight:bold;</p><br>

<p><b>10) In the following template:</b></p>

<p>Selector {<br>
Property: value;<br>
} /* A comment */</p><br>

Selector represents what is to be modified and property refers to the tag that will be affected:</b></p>

<p>
<input id="qc1101" type="radio" name="q11" value="">True<br>
<input id="qc1102" type="radio" name="q11" value="">False</p><br>

<p></b>11) How do you insert a comment in a CSS file?</b></p>

<p>
<input id="qc1111" type="radio" name="q12" value="">// I am a comment<br>
<input id="qc1112" type="radio" name="q12" value="">** I am a comment **<br>
<input id="qc1113" type="radio" name="q12" value="">/* I am a comment */<br>
<input id="qc1114" type="radio" name="q12" value="">// I am a comment //</p><br>

<p><b>12) We can generally omit &ldquo;;&rdquo; when writing CSS code:</b></p>

<p>
<input id="qc1121" type="radio" name="q13" value="">True<br>
<input id="qc1122" type="radio" name="q13" value="">False</p><br>

<p></p>

<p><b>13) Which HTML tag is used to define an internal stylesheet?</b></p>

<p>
<input id="qc1131" type="radio" name="q14" value="">&lt;css&gt;<br>
<input id="qc1132" type="radio" name="q14" value="">&lt;style&gt;<br>
<input id="qc1133" type="radio" name="q14" value="">&lt;ssh&gt;<br>
<input id="qc1134" type="radio" name="q14" value="">&lt;ss&gt;<br>
</p><br>

<p align="center"><button onclick="quizSubmission('qc1', 13)" name"submitbtn" class="submit">Submit</button></p>
</body>
</html>