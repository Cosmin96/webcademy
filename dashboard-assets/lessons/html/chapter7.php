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

<p align="center"><font size="6"><b><u>Chapter 7: Div and span</b></u></font></p><br>

<p><font size="5"><b>Div</b></p>

<p>The &lt;div&gt;&lt;/div&gt; tag is one of the most useful structure tags available. Short for "division", it allows you to divide your page into containers or different pieces, and it will further help you when learning CSS in the next course. With &lt;div&gt; you can style different bits of your website, one by one, for easy styling.</p>

<p align="center"><img src="images/6.png"></p>

<p>Check out the example below. When you test it, you should see three blocks: one red, one green, and one blue. Each one is its own &lt;div&gt; container.</p>

<div style="background: #111111; overflow:auto;width:auto;border:solid gray;border-width:.1em .1em .1em .8em;padding:.2em .6em;"><pre style="margin: 0; line-height: 125%"><span style="color: #fed136; font-weight: bold">&lt;div</span> <span style="color: #ff0086; font-weight: bold">style=</span><span style="color: #0086d2">&quot;width:50px; height:50px; background-color:red;&quot;</span><span style="color: #fed136; font-weight: bold">&gt;&lt;/div&gt;</span>
<span style="color: #fed136; font-weight: bold">&lt;div</span> <span style="color: #ff0086; font-weight: bold">style=</span><span style="color: #0086d2">&quot;width:50px; height:50px; background-color:green;&quot;</span><span style="color: #fed136; font-weight: bold">&gt;&lt;/div&gt;</span>
<span style="color: #fed136; font-weight: bold">&lt;div</span> <span style="color: #ff0086; font-weight: bold">style=</span><span style="color: #0086d2">&quot;width:50px; height:50px; background-color:blue;&quot;</span><span style="color: #fed136; font-weight: bold">&gt;&lt;/div&gt;</span>
</pre></td></tr></table></div>


<p><b>Link it!</b></p>

<p>The clever use of &lt;div&gt;s will ultimately let you create visual HTML objects like sidebars, menus, and much more.</p>

<p>As with images, you can make &lt;div&gt;s clickable by surrounding them with &lt;a&gt;&lt;/a&gt; tags.</p>

<p><b>Span</b></p>

<p>While &lt;div&gt; lets you divide your webpage up into pieces you can style one by one, with &lt;span&gt; you can select smaller bits of your website--such as text--and control their styling. For example, if you always want the first word of your paragraphs to be red, you can wrap each first word in &lt;span&gt;&lt;/span&gt; tags and make them red using CSS!</p>

<p>
<div style="background: #111111; overflow:auto;width:auto;border:solid gray;border-width:.1em .1em .1em .8em;padding:.2em .6em;"><pre style="margin: 0; line-height: 125%"><span style="color: #fed136; font-weight: bold">&lt;p&gt;&lt;span</span> <span style="color: #ff0086; font-weight: bold">style=</span><span style="color: #0086d2">&quot;color:red;font-size:30px&quot;</span> <span style="color: #fed136; font-weight: bold">&gt;</span><font color="ffffff">A<span style="color: #fed136; font-weight: bold">&lt;/span&gt;</span> long time ago, in a galaxy far, far away,<br> there was a young student who wanted to learn HTML</font><span style="color: #fed136; font-weight: bold">&lt;/p&gt;</span>
</pre></td></tr></table></div>

</p>

<p>Beside colour, with &lt;span&gt; tags you can also change font size, font family and any other style attribute that can be thought of.</p>

<p><b>
Summary</b></p>

<p>Great work! In addition to what you have already learned, you now know to:</p>

<p>1. Divide up your webpage for easy styling with &lt;div&gt; tags<br>
2. Select pieces of text and change their properties using &lt;span&gt; tags</p>

<p>Now, congratulations! You are prepared enough to start the next course: Introduction to CSS.</p>

<p>In the following course, we will see how we can take the styling we have been doing-such as controlling font family, font colour, and text alignment-and put it in its own separate file. By doing that, we can use &lt;div&gt; and &lt;span&gt; tags to style our pages without writing style="color:red" every single time!<br>
</p>

</body>
</html>
