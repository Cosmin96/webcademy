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

<p align="center"><font size="6"><b><u>Chapter 5: Learning about tables</b></u></p><br>

<p><font size="5"><b>Introduction</b></p>

<p>So far we have covered:</p>

<p>1. How to set up the skeleton of an HTML file<br>
2. Headings, paragraphs, images and links<br>
3. Font colours, sizes, and types<br>
4. Background colours, aligning text, bolding and italicizing font</p>

<p>In these last lessons, we will cover some important structural aspects of HTML: &lt;table&gt;s, &lt;div&gt;s, and &lt;span&gt;s.</p>

<p><b>What are tables?</b></p>

<p>Tables are used to store tabular data so it is easy to read. When you want to present information neatly in a table with rows and columns the &lt;table&gt; tag is what you need. There are many tags associated with tables, but it all starts with the &lt;table&gt; tag.</p>

<p><b>Rows of information</b></p>

<p>Essentially, a table is just a bunch of information organised in rows and columns.</p>

<p>We use the &lt;tr&gt; tag to create a table row. In fact, you do not really create columns in &lt;table&gt;s: instead, you tell each row how many cells to have, and that determines your number of columns.</p>

<p><b>A single column</b></p>

<p>Look at the HTML code below. Adding a single &lt;td&gt; ("table data") cell to the first row essentially creates a single column. If you look through the code, you will see &lt;table border="1px"&gt;, which has the effect of adding a border around the cell.</p>

<p>
<div style="background: #111111; overflow:auto;width:auto;border:solid gray;border-width:.1em .1em .1em .8em;padding:.2em .6em;"><pre style="margin: 0; line-height: 125%"><span style="color: #fed136; font-weight: bold">&lt;table&gt;</span>
<span style="color: #fed136; font-weight: bold">&lt;tr&gt;</span>
<span style="color: #fed136; font-weight: bold">&lt;th&gt;</span><font color="ffffff">Name<span style="color: #fed136; font-weight: bold">&lt;/th&gt;</span>
<span style="color: #fed136; font-weight: bold">&lt;th&gt;</span>Peter</font><span style="color: #fed136; font-weight: bold">&lt;/th&gt;</span>
<span style="color: #fed136; font-weight: bold">&lt;/tr&gt;</span>
<span style="color: #fed136; font-weight: bold">&lt;/table&gt;</span>
</pre></td></tr></table></div>

</p>

<p><b>Adding more columns</b></p>

<p>In the previous exercise, you just created a single-column table.</p>

<p>Now, in this other example, notice in the first table row we now have two table data cells. Adding a second data cell has the effect of adding a second table column.</p>

<p>
<div style="background: #111111; overflow:auto;width:auto;border:solid gray;border-width:.1em .1em .1em .8em;padding:.2em .6em;"><pre style="margin: 0; line-height: 125%"><span style="color: #fed136; font-weight: bold">&lt;table</span> <span style="color: #ff0086; font-weight: bold">style=</span><span style="color: #0086d2">&quot;width:100%&quot;</span><span style="color: #fed136; font-weight: bold">&gt;</span>
<span style="color: #fed136; font-weight: bold">&lt;tr&gt;</span>
<span style="color: #fed136; font-weight: bold">&lt;th&gt;</span><font color="ffffff">Name<span style="color: #fed136; font-weight: bold">&lt;/th&gt;</span>
<span style="color: #fed136; font-weight: bold">&lt;th</span> <span style="color: #ff0086; font-weight: bold">colspan=</span><span style="color: #0086d2">&quot;2&quot;</span><span style="color: #fed136; font-weight: bold">&gt;</span>Table<span style="color: #fed136; font-weight: bold">&lt;/th&gt;</span>
<span style="color: #fed136; font-weight: bold">&lt;/tr&gt;</span>
<span style="color: #fed136; font-weight: bold">&lt;tr&gt;</span>
<span style="color: #fed136; font-weight: bold">&lt;td&gt;</span>Col1<span style="color: #fed136; font-weight: bold">&lt;/td&gt;</span>
<span style="color: #fed136; font-weight: bold">&lt;td&gt;</span>Col2<span style="color: #fed136; font-weight: bold">&lt;/td&gt;</span>
<span style="color: #fed136; font-weight: bold">&lt;td&gt;</span>Col3</font><span style="color: #fed136; font-weight: bold">&lt;/td&gt;</span>
<span style="color: #fed136; font-weight: bold">&lt;/tr&gt;</span>
<span style="color: #fed136; font-weight: bold">&lt;/table&gt;</span>
</pre></td></tr></table></div>

</p>

</body>
</html>
