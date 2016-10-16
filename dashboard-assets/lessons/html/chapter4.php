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

<p align="center"><font size="6"><b><u>Chapter 4: Styling the font</b></u></font></p><br>

<p><font size="5"><b>Making comments</b></p>

<p>We have covered quite a lot about lists. Let's now change the topic and do some styling. If you recall, HTML is the skeleton of the webpage, while CSS lets you give the skeleton some skin and makeup</p>

<p>However, it is also possible to do some <strong>inline CSS</strong>. This simply means we can do basic styling in our HTML file without worrying about a separate CSS file. We will learn this first as it will make learning CSS a lot easier later on.</p>

<p>Before we dive into fonts, it is important to learn about making comments. Comments are like little notes in your HTML code that the browser will skip, but that will be visible in the code to help you remember why you did certain things or just to make code clearer.</p>

<p><div style="background: #111111; overflow:auto;width:auto;border:solid gray;border-width:.1em .1em .1em .8em;padding:.2em .6em;"><pre style="margin: 0; line-height: 125%"><span style="color: #008800; font-style: italic; background-color: #0f140f">&lt;!-- This is an example of a comment! --&gt;</span>
</pre></td></tr></table></div>
</p>

<p><b>Font size</b></p>

<p>Recall from previous lessons that &lt;p&gt; and &lt;/p&gt; are opening and closing <strong>tags</strong>.</p>

<p>We can give tags more instructions by including <strong>attributes</strong> in the opening tag. An attribute is simply a feature or some description for the content in the element. Clear examples of attributes are src in &lt;img&gt; and href in &lt;a&gt;.</p>

<p>For example: we can change the size of the text using the <strong>style</strong> attribute. We make it equal to font-size, followed by a colon, the size you want, and end with px (short for “pixels”). For instance:</p>

<p>
<div style="background: #111111; overflow:auto;width:auto;border:solid gray;border-width:.1em .1em .1em .8em;padding:.2em .6em;"><pre style="margin: 0; line-height: 125%"><span style="color: #fed136; font-weight: bold">&lt;p</span> <span style="color: #ff0086; font-weight: bold">style=</span><span style="color: #0086d2">&quot;font-size: 12px&quot;</span><span style="color: #fed136; font-weight: bold">&gt;</span>
</pre></td></tr></table></div>
</p>


<p><b>
Font colour</b></p>

<p>The <strong>style</strong> attribute is really important in HTML as it is used a lot! What's more, it can also be used with other different tags, not just &lt;p&gt;. Check out how to change the colours of our text in a heading in HTML.</p>

<p>To change the colour of text, simply add the style attribute in the opening tag, then make the style equal to color:red (or whatever colour you like). For example:</p>

<p>
<div style="background: #111111; overflow:auto;width:auto;border:solid gray;border-width:.1em .1em .1em .8em;padding:.2em .6em;"><pre style="margin: 0; line-height: 125%"><span style="color: #fed136; font-weight: bold">&lt;h1</span> <span style="color: #ff0086; font-weight: bold">style=</span><span style="color: #0086d2">&quot;color:green&quot;</span><span style="color: #fed136; font-weight: bold">&gt;</span>
</pre></td></tr></table></div>

</p>

<p>Also, if you want to change both colour and size of the text, there is an easy way to do it: just add a semi-colon between each element. For instance:</p>

<p>
<div style="background: #111111; overflow:auto;width:auto;border:solid gray;border-width:.1em .1em .1em .8em;padding:.2em .6em;"><pre style="margin: 0; line-height: 125%"><span style="color: #fed136; font-weight: bold">&lt;h1</span> <span style="color: #ff0086; font-weight: bold">style=</span><span style="color: #0086d2">&quot;color:blue; font-size:12px&quot;</span><span style="color: #fed136; font-weight: bold">&gt;</span>
</pre></td></tr></table></div>

</p>

<p>A full list of available colours can be found here: <a href="http://www.w3.org/TR/css3-color">W3Schools</a></p>

<p><b>Font family</b></p>

<p>We have seen font colours and font sizes so far. But we also want to be able to decide what font type to use. We can do this using font-family, like this:</p>

<p>
<div style="background: #111111; overflow:auto;width:auto;border:solid gray;border-width:.1em .1em .1em .8em;padding:.2em .6em;"><pre style="margin: 0; line-height: 125%"><span style="color: #fed136; font-weight: bold">&lt;h1</span> <span style="color: #ff0086; font-weight: bold">style=</span><span style="color: #0086d2">&quot;font-family: Arial&quot;</span><span style="color: #fed136; font-weight: bold">&gt;</span><font color="ffffff">Title</font><span style="color: #fed136; font-weight: bold">&lt;/h1&gt;</span>
</pre></td></tr></table></div>

</p>

<p>In the example above, we used the &lt;h1&gt; tag, but we can do the same for other tags as well. So we could have a &lt;li&gt;:</p>

<p>
<div style="background: #111111; overflow:auto;width:auto;border:solid gray;border-width:.1em .1em .1em .8em;padding:.2em .6em;"><pre style="margin: 0; line-height: 125%"><span style="color: #fed136; font-weight: bold">&lt;li</span> <span style="color: #ff0086; font-weight: bold">style=</span><span style="color: #0086d2">&quot;font-family: Arial&quot;</span><span style="color: #fed136; font-weight: bold">&gt;</span><font color="ffffff">Hello World!</font><span style="color: #fed136; font-weight: bold">&lt;/li&gt;</span>
</pre></td></tr></table></div>
</p>

<p>Here is a list of available fonts: <a href="http://www.w3.org/TR/CSS21/fonts.html#generic-font-families">W3Schools</a></p>

<p><b>Summary</b></p>

<p>Great job! You can now stylize your webpage at your liking, including the colour, size and type of your font. To summarize everything, we use the style attribute in the opening tag, like this:</p>

<p>a. font-size: 12px<br>
b. color: green<br>
c. font-family: Arial</p>

<p>
<div style="background: #111111; overflow:auto;width:auto;border:solid gray;border-width:.1em .1em .1em .8em;padding:.2em .6em;"><pre style="margin: 0; line-height: 125%"><span style="color: #fed136; font-weight: bold">&lt;p</span> <span style="color: #ff0086; font-weight: bold">style =</span><span style="color: #ffffff"> </span><span style="color: #0086d2">&quot;font-size:12px; color: green; font-family: Arial&quot;</span><span style="color: #fed136; font-weight: bold">&gt;</span>
</pre></td></tr></table></div>

</p>

<p>It is important to know that you can also use the style attribute for paragraphs, headings, and even links!</p>

<p><strong>Final task</strong></p>

<p><em>Create a paragraph and make the font have the following style:</em></p>

<p><em>a. A size of 20px<br>
b. A colour of green<br>
c. A font-family of MS Trebuchet</em></p>

<p><b>
Nicer styling: Background colour</b></p>

<p>The last sections presented us different ways to change the looks of the text. Now we want to learn about how to change the colour of the webpage's background.</p>

<p>We can use the style attribute again, and set it equal to background-color: blue (or whatever colour you want).</p>

<p>For example, here is how to change the background colour of a &lt;p&gt; tag to red:</p>

<p>
<div style="background: #111111; overflow:auto;width:auto;border:solid gray;border-width:.1em .1em .1em .8em;padding:.2em .6em;"><pre style="margin: 0; line-height: 125%"><span style="color: #fed136; font-weight: bold">&lt;p</span> <span style="color: #ff0086; font-weight: bold">style=</span><span style="color: #0086d2">&quot;background-color:red;&quot;</span><span style="color: #fed136; font-weight: bold">&gt;</span><font color="ffffff">Hello!</font><span style="color: #fed136; font-weight: bold">&lt;/p&gt;</span>
</pre></td></tr></table></div>

</p>

<p><b>Nicer styling: Aligning the text</b></p>

<p>Usually, it is necessary to be able to move the text around. To do so, we again use the <strong>style</strong> attribute. And then we use text-align:left (or right, or center) to determine the location of the text.</p>

<p>
<div style="background: #111111; overflow:auto;width:auto;border:solid gray;border-width:.1em .1em .1em .8em;padding:.2em .6em;"><pre style="margin: 0; line-height: 125%"><span style="color: #fed136; font-weight: bold">&lt;h1</span> <span style="color: #ff0086; font-weight: bold">style=</span><span style="color: #0086d2">&quot;text-align:center&quot;</span><span style="color: #fed136; font-weight: bold">&gt;</span>
</pre></td></tr></table></div>

</p>

<p><b>Nicer styling: Bolding and Emphasizing words</b></p>

<p>We can change the appearance of words and make them <strong>bold</strong>, for example. There is no need to use the style attribute. Here are the steps:</p>

<p>1. Find the word or words you want to <strong>bold</strong>.<br>
2. Surround those words with the opening tag &lt;strong&gt; and closing tag &lt;/strong&gt;.</p>

<p>Aside from bolding, we can also <em>italicize</em> words for <strong>em</strong>phasis. Like bolding, we do not need to use the style attribute. Instead:</p>

<p>1. Identify the word or words you want to <em>italicize</em>.<br>
2. Surround the word or words with the opening tag &lt;em&gt; and closing tag &lt;/em&gt;.</p>

<p><b>
Summary</b></p>

<p>This has been a really demanding lesson, and you have covered a lot. Congratulations! We have learned how to:</p>

<p>1. Make ordered and unordered lists<br>
2. Change the colour, size and type of font<br>
3. Add comments to HTML files<br>
4. Change the page's background colour<br>
5. Align text<br>
6. Bold and italicize text</p>

<p><strong>Final task</strong></p>

<p><em>Test out if you really have understood the lessons so far on a project and make something to show your friends using all what you have learnt in these two lessons.</em><br>
</p>

</body>
</html>
