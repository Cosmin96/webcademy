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

<p align="center"><font size="6"><b><u>Chapter 1: Introduction to HTML</u></b></font></p><br>

<p><font size="5"><b>Why learn HTML?</b></p>

<p>Every webpage you see is written in a language called HTML. You can think of it as the skeleton that gives every webpage structure. In this lesson, we will introduce the basic structure of an HTML document, add headings and paragraphs, images and links to a webpage.</p>

<p>Like every language around, HTML has its own special syntax or rules that enable communication. What browsers like Chrome or Mozilla Firefox do is to convert all the code in an html file into a website!</p>

<p><b>HTML and CSS</b></p>

<p>HTML stands for HyperText Markup Language. Hypertext means &ldquo;text with links in it&rdquo;. Basically, any time you click on a word that takes you to another website, you have clicked on hypertext!</p>

<p>A markup language is a programming language used to make text do more than just be displayed in a page: it can turn text into links, images, tables or lists, among others.</p>

<p>HTML is essentially the structure of a webpage. What it really turns it into a proper webpage is CSS, which stands for Cascading Style Sheets. CSS can be thought of as the skin and makeup that covers the bones of HTML. We will learn HTML first, and then focus on CSS in a later course.</p>

<p>Normally, when writing HTML code, we follow a simple structure:</p>

<p>a. The tag &lt;!DOCTYPE html&gt; on the first line, which tells the browser what languages it is reading.<br>
b. The tag &lt;html&gt; on the next line, which starts the HTML document.<br>
c. Finally, the tag &lt;/html&gt; on the last line, which ends the HTML document.</p>

<p><strong>Time to test it:</strong></p>

<p><em>1. Go ahead and put the three lines mentioned above into a new file called test.html<br>
2. In between the second and last line (between the &lt;html&gt; and the &lt;/html&gt;), feel free to write whatever message you like.</em></p>

<p></p>

<p></p>

<p><b>
Basic terminology</b></p>

<p>You might have noticed that &lt;&gt; are used a lot.</p>

<p>1. Everything inside the angle brackets &lt;&gt; is called a <strong>tag</strong>.<br>
2. Tags usually come in pairs: one for the opening and another one for the closing.<br>
3. Example of opening tag: &lt;html&gt;<br>
4. Example of closing tag: &lt;/html&gt;</p>

<p>Tags are similar to parentheses: whenever you open one, you should close it. They are also nest, so they should be closed in the right order: the most recently opened tag should be the first one closed, like in the example below:</p>

<p>&lt;first tag&gt;&lt;second tag&gt;Text&lt;/second tag&gt;&lt;/first tag&gt;</p>

<p><strong>Time to practise it one more time:</strong></p>

<p>1. Put the &lt;!DOCTYPE html&gt; tag.<br>
2. Put in the &lt;html&gt; opening and closing tags.<br>
3. Between the &lt;html&gt; tags, write whatever you like.<br>
4. Save your file by giving it a name and followed by the .html extension and run it by double clicking on it to see what you have written appear on the page!</p>

<p><b>Make the head</b></p>

<p>Always remember that everything in the HTML file has to go between the opening &lt;html&gt; and closing &lt;/html&gt; tags, as previously mentioned.</p>

<p>In an HTML file there are mainly two parts: the head and the body.</p>

<p>The head includes information about the HTML file, like its title for example. The title is what we see in the browser&rsquo;s page tab.</p>

<p><strong>Adding a head and a title to our webpage: </strong></p>

<p><em>1. Add an opening &lt;head&gt; tag and closing &lt;/head&gt; tag.<br>
2. Between the &lt;head&gt; tags, add in an opening &lt;title&gt; tag and closing &lt;/title&gt; tag.<br>
3. Between the &lt;title&gt; tags, write in a title for your page. For example, &ldquo;My First Webpage&rdquo;.<br>
4. Save the file and run it by double-clicking on it. </em></p>

<p><b>
Paragraphs in the body</b></p>

<p>Recall from the last lesson that an HTML file has both a head and a body. The head is where all the information about your HTML file is stored, like its title.</p>

<p>The body, on the other hand, is where all the content such as text, images and links are included. The content in the body is actually the visible part on the page.</p>

<p>The body is placed inside the &lt;html&gt; tags, just after the &lt;head&gt; tags, like this:</p>

<p>
<div style="background: #111111; overflow:auto;width:auto;border:solid gray;border-width:.1em .1em .1em .8em;padding:.2em .6em;">
<pre style="margin: 0; line-height: 125%"><span style="color: #fed136; font-weight: bold">&lt;html&gt;</span>
<span style="color: #fed136; font-weight: bold">&lt;head&gt;</span>
<span style="color: #fed136; font-weight: bold">&lt;title&gt;</span><font color="ffffff">My Webpage</font><span style="color: #fed136; font-weight: bold">&lt;/title&gt;</span>
<span style="color: #fed136; font-weight: bold">&lt;/head&gt;</span>
<span style="color: #fed136; font-weight: bold">&lt;body&gt;&lt;/body&gt;</span>
<span style="color: #fed136; font-weight: bold">&lt;/html&gt;</span>
</pre></td></tr></table></div>
</p>

<p><strong>Time to try it:</strong></p>

<p><em>1. Under the closing &lt;/head&gt; tag, put an opening &lt;body&gt; tag and a closing &lt;/body&gt; tag, like in the example above.<br>
2. Inside the body, create two paragraphs. Each one needs to start with an opening &lt;p&gt; tag and ends with a closing &lt;/p&gt; tag, writing content in between the tags.<br>
</em></p>

</body>
</html>
