<?php
    session_start();
    if($_SESSION['logged_in']==false){
        header("Location: login.php");
        die();
    }
?>

<html>
<head>
<link rel="stylesheet" type="text/css" href="textstyle.css">
<link href='https://fonts.googleapis.com/css?family=PT+Sans:700,400' rel='stylesheet' type='text/css'>
</head>
<body>

<p align="center"><font size="6"><b><u>Chapter 3: Making lists</b></u></font></p><br>

<p><font size="5"><b>Introduction</b></p>

<p>In this lesson we continue learning HTML. You have already covered quite a lot: how to set up -&lt;head&gt;- and -&lt;body&gt;- tags, how to make headings and paragraphs, and how to add images and links.</p>

<p>In the next three lessons, we will be able to:</p>

<p>a. Make ordered and unordered lists<br>
b. Change font size, colour and type<br>
c. Change the background colour<br>
d. Align the text</p>

<p><b>
Indentation is your friend</b></p>

<p>Now, it is important to familiarise ourselves with the term <strong>indentation</strong> - that is, the amount each line is spaced in from the margin. As we keep adding new tags inside of another tags, it is more and more necessary to indent them well in order to make clearer more readable code.</p>

<p> Check out the indentation in the example below and, as an advice, try to stick with this indentation style when you are writing HTML so you don’t get confused.</p>

<p>(Example to be added)</p>

<p><b>Ordered lists</b></p>

<p> An <strong>ordered list</strong> is simply a list that is numbered. Now it is time to learn how to make them, so check out the example below.</p>

<p>
<div style="background: #111111; overflow:auto;width:auto;border:solid gray;border-width:.1em .1em .1em .8em;padding:.2em .6em;"><pre style="margin: 0; line-height: 125%"><span style="color: #fed136; font-weight: bold">&lt;ol</span> <span style="color: #ff0086; font-weight: bold">type=</span><span style="color: #0086d2">&quot;1&quot;</span><span style="color: #fed136; font-weight: bold">&gt;</span>
 <span style="color: #fed136; font-weight: bold">&lt;li&gt;</span><font color="ffffff">Coffee<span style="color: #fed136; font-weight: bold">&lt;/li&gt;</span>
 <span style="color: #fed136; font-weight: bold">&lt;li&gt;</span>Tea<span style="color: #fed136; font-weight: bold">&lt;/li&gt;</span>
 <span style="color: #fed136; font-weight: bold">&lt;li&gt;</span>Milk</font><span style="color: #fed136; font-weight: bold">&lt;/li&gt;</span>
<span style="color: #fed136; font-weight: bold">&lt;/ol&gt;</span>
</pre></td></tr></table></div>

</p>

<p>1. The opening tag -&lt;ol&gt;- creates the ordered list.<br>
2. The -&lt;li&gt;- and -&lt;/li&gt;- tags <strong>surround</strong> each individual item.<br>
3. As each listed item is only on one line, the entire <strong>element</strong> is set on one line.<br>
4. Lastly, the closing tag -&lt;/ol&gt;- ends the ordered list.</p>

<p>But actually, how useful is this? Well, we can now add ordered lists to headings and paragraphs that can be used in the HTML body and give it structure overall.</p>

<p><b>Unordered lists</b></p>

<p>If the order is not important and if we just want bullet points, then unordered lists are ideal for this purpose.</p>

<p>1. First, we open our list with an unordered list -&lt;ul&gt;- tag.<br>
2. We use a list item tag -&lt;li&gt;- to surround each item we want to add to the list.<br>
3. When we are done with our list, we just call the closing -&lt;/ul&gt;- tag.</p>

<p>Basically, an unordered list is made the same way as an ordered list but replacing the tags -&lt;ol&gt;- -&lt;/ol&gt;- by -&lt;ul&gt;- -&lt;/ul&gt;-, respectively. That simple!</p>

<p><b>Lists inside a list</b></p>

<p>So, you have made ordered lists and unordered lists. Good job!</p>

<p>But, what if you have an ordered list and each element in the ordered list also has an unordered list inside the list? Below, you have an example of this. Copy and paste the code or type it into a text editor, save it and run it to see what the result looks like.</p>

<p>
<div style="background: #111111; overflow:auto;width:auto;border:solid gray;border-width:.1em .1em .1em .8em;padding:.2em .6em;"><pre style="margin: 0; line-height: 125%"><span style="color: #fed136; font-weight: bold">&lt;ul&gt;</span>
<span style="color: #fed136; font-weight: bold">&lt;li&gt;</span><font color="ffffff">Coffee<span style="color: #fed136; font-weight: bold">&lt;/li&gt;</span>
<span style="color: #fed136; font-weight: bold">&lt;li&gt;</span>Tea
<span style="color: #fed136; font-weight: bold">&lt;ul&gt;</span>
 <span style="color: #fed136; font-weight: bold">&lt;li&gt;</span>Blacktea<span style="color: #fed136; font-weight: bold">&lt;/li&gt;</span>
 <span style="color: #fed136; font-weight: bold">&lt;li&gt;</span>Greentea<span style="color: #fed136; font-weight: bold">&lt;/li&gt;</span>
 <span style="color: #fed136; font-weight: bold">&lt;/ul&gt;</span>
 <span style="color: #fed136; font-weight: bold">&lt;/li&gt;</span>
<span style="color: #fed136; font-weight: bold">&lt;li&gt;</span>Milk</font><span style="color: #fed136; font-weight: bold">&lt;/li&gt;</span>
<span style="color: #fed136; font-weight: bold">&lt;/ul&gt;</span>
</pre></td></tr></table></div>

</p>

<p>Also, remember from Lesson 1: Introduction to HTML that when you nest tags, the last tag you open is the first one you close.</p>

<p></p>

<p><strong>Test your knowledge:</strong></p>

<p><em>1. Create an unordered list. This should have two items: "Sports played as an individual" and "Sports played in teams".<br>
2. Under each item of the unordered list, create an ordered list. Use the ordered list to specify your three favourite sports for each category. <br>
</em></p>

</body>
</html>
