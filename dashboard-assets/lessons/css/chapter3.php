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

<p align="center"><font size="6"><b><u>Chapter 3: Selecting selectors</b></u></font></p><br>

<p><font size="5">We have learned basic syntax and properties, now next up is how to select a certain tag from the html. Just putting "p" as selector will modify all parts that use the tag "p". Consider this:</p>

<p>
<div style="background: #111111; overflow:auto;width:auto;border:solid gray;border-width:.1em .1em .1em .8em;padding:.2em .6em;"><pre style="margin: 0; line-height: 125%"><span style="color: #fed136; font-weight: bold">&lt;body&gt;</span>
<span style="color: #fed136; font-weight: bold">&lt;p&gt;</span><font color="ffffff">I am a normal paragraph <span style="color: #fed136; font-weight: bold">&lt;/p&gt;</span>
<span style="color: #fed136; font-weight: bold">&lt;div&gt;</span>
<span style="color: #fed136; font-weight: bold">&lt;p&gt;</span> I want to be red</font> <span style="color: #fed136; font-weight: bold">&lt;/p&gt;</span>
<span style="color: #fed136; font-weight: bold">&lt;/div&gt;</span>
<span style="color: #fed136; font-weight: bold">&lt;/body&gt;</span>
</pre></td></tr></table></div>

</p>

<p>How do we make just the paragraph inside the div red?</p>

<p>Answer:</p>

<p>
<div style="background: #111111; overflow:auto;width:auto;border:solid gray;border-width:.1em .1em .1em .8em;padding:.2em .6em;"><pre style="margin: 0; line-height: 125%"><span style="color: #fed136; font-weight: bold">div</span> <span style="color: #fed136; font-weight: bold">p</span> <span style="color: #ffffff">{</span>
<span style="color: #fed136; font-weight: bold">color</span><span style="color: #ffffff">:</span> <span style="color: #ffffff">red;</span>
<span style="color: #ffffff">}</span>
</pre></td></tr></table></div>
</p>

<p>Simple! This piece of code tells the computer to only make the color red the paragraphs that are inside a div tag. Another tool that can be used is the "&gt;" sign. To illustrate its usage, we shall use this HTML code:</p>

<p>
<div style="background: #111111; overflow:auto;width:auto;border:solid gray;border-width:.1em .1em .1em .8em;padding:.2em .6em;"><pre style="margin: 0; line-height: 125%"><span style="color: #fed136; font-weight: bold">&lt;body&gt;</span>
<span style="color: #fed136; font-weight: bold">&lt;p&gt;</span><font color="ffffff"> I am a normal paragraph <span style="color: #fed136; font-weight: bold">&lt;/p&gt;</span>
<span style="color: #fed136; font-weight: bold">&lt;div&gt;</span> <span style="color: #fed136; font-weight: bold">&lt;ls&gt;</span>
<span style="color: #fed136; font-weight: bold">&lt;p&gt;</span> I don&#39;t want to be red! <span style="color: #fed136; font-weight: bold">&lt;/p&gt;</span>
<span style="color: #fed136; font-weight: bold">&lt;/ls&gt;</span> <span style="color: #fed136; font-weight: bold">&lt;/div&gt;</span>
<span style="color: #fed136; font-weight: bold">&lt;div&gt;</span>
<span style="color: #fed136; font-weight: bold">&lt;p&gt;</span> I want to be red </font><span style="color: #fed136; font-weight: bold">&lt;/p&gt;</span>
<span style="color: #fed136; font-weight: bold">&lt;/div&gt;</span>
<span style="color: #fed136; font-weight: bold">&lt;/body&gt;</span>
</pre></td></tr></table></div>

</p>

<p>Using the aforementioned CSS code will also make the second paragraph red which is not what we want. However, using:</p>

<p>
<div style="background: #111111; overflow:auto;width:auto;border:solid gray;border-width:.1em .1em .1em .8em;padding:.2em .6em;"><pre style="margin: 0; line-height: 125%"><span style="color: #fed136; font-weight: bold">div</span> <span style="color: #ffffff">&gt;</span> <span style="color: #fed136; font-weight: bold">p</span> <span style="color: #ffffff">{</span>
<span style="color: #fed136; font-weight: bold">color</span><span style="color: #ffffff">:</span> <span style="color: #ffffff">red;</span>
<span style="color: #ffffff">}</span>
</pre></td></tr></table></div>

</p>

<p>Will only make red the paragraph that is a direct "child" of the div tag.</p>

<p>Speaking of children, if a tag has more than one children, like here: </p>

<p>
<div style="background: #111111; overflow:auto;width:auto;border:solid gray;border-width:.1em .1em .1em .8em;padding:.2em .6em;"><pre style="margin: 0; line-height: 125%"><span style="color: #fed136; font-weight: bold">&lt;body&gt;</span>
<span style="color: #fed136; font-weight: bold">&lt;div&gt;</span>
<span style="color: #fed136; font-weight: bold">&lt;p&gt;</span><font color="ffffff"> I am red <span style="color: #fed136; font-weight: bold">&lt;/p&gt;</span>
<span style="color: #fed136; font-weight: bold">&lt;p&gt;</span> I am black <span style="color: #fed136; font-weight: bold">&lt;/p&gt;</span>
<span style="color: #fed136; font-weight: bold">&lt;p&gt;</span> I am also black <span style="color: #fed136; font-weight: bold">&lt;/p&gt;</span>
<span style="color: #fed136; font-weight: bold">&lt;p&gt;</span> I am violet</font> <span style="color: #fed136; font-weight: bold">&lt;/p&gt;</span>
<span style="color: #fed136; font-weight: bold">&lt;/div&gt;</span>
<span style="color: #fed136; font-weight: bold">&lt;/body&gt;</span>
</pre></td></tr></table></div>

</p>

<p>We can select only certain children with the help of "first-child" and "nth-child":
</p>

<p>
<div style="background: #111111; overflow:auto;width:auto;border:solid gray;border-width:.1em .1em .1em .8em;padding:.2em .6em;"><pre style="margin: 0; line-height: 125%"><span style="color: #fed136; font-weight: bold">p</span><span style="color: #ffffff">:first-child</span> <span style="color: #ffffff">{</span>
<span style="color: #fed136; font-weight: bold">color</span><span style="color: #ffffff">:</span> <span style="color: #ffffff">red;</span>
<span style="color: #ffffff">}</span>

<span style="color: #fed136; font-weight: bold">p</span><span style="color: #ffffff">:nth-child(</span><span style="color: #fed136; font-weight: bold">4</span><span style="color: #ffffff">)</span> <span style="color: #ffffff">{</span>
<span style="color: #fed136; font-weight: bold">color</span><span style="color: #ffffff">:</span> <span style="color: #ffffff">violet;</span>
<span style="color: #ffffff">}</span>
</pre></td></tr></table></div>

</p>

<p>This will make the first paragraph red and the fourth violet. As you can see when using "nth-child" the number "n" has to be specified in the parenthesis at the end. Note that the second and third children do not necessarily have to use the "p" tag as well.</p>

<p>Now if you paid special attention to the HTML code in the very first example you would see the presence of something called "class" and "id" inside the tags. These are cross-tag selectors for CSS. The syntax for a class is as follows: in the HTML tag it is used 'class="class_name" ' while in CSS the class is called as ".class_name", and for ID it is similar: 'id="identity"' in html, and "#identity" in CSS. Functionally, they are the same, but class is intended to be used for multiple tags, while id should only be used to pinpoint one tag.</p>

<p>It is very important to understand which properties a certain block will take if it could choose from several selectors. CSS gives priority to the more specific selectors, for example:</p>

<p>HTML code:</p>

<p>
<div style="background: #111111; overflow:auto;width:auto;border:solid gray;border-width:.1em .1em .1em .8em;padding:.2em .6em;"><pre style="margin: 0; line-height: 125%"><span style="color: #fed136; font-weight: bold">&lt;body&gt;</span>
<span style="color: #fed136; font-weight: bold">&lt;p&gt;</span><font color="ffffff"> I am red <span style="color: #fed136; font-weight: bold">&lt;/p&gt;</span>
<span style="color: #fed136; font-weight: bold">&lt;p&gt;</span> I am red too <span style="color: #fed136; font-weight: bold">&lt;/p&gt;</span>
<span style="color: #fed136; font-weight: bold">&lt;div&gt;</span>
<span style="color: #fed136; font-weight: bold">&lt;p&gt;</span> I am blue <span style="color: #fed136; font-weight: bold">&lt;/p&gt;</span>
<span style="color: #fed136; font-weight: bold">&lt;p</span> <span style="color: #ff0086; font-weight: bold">id=</span><span style="color: #0086d2">&quot;rogue&quot;</span><span style="color: #fed136; font-weight: bold">&gt;</span> I am violet </font><span style="color: #fed136; font-weight: bold">&lt;/p&gt;</span>
<span style="color: #fed136; font-weight: bold">&lt;/div&gt;</span>
<span style="color: #fed136; font-weight: bold">&lt;/body&gt;</span>
</pre></td></tr></table></div>
</p>

<p>CSS code:</p>

<p>
<div style="background: #111111; overflow:auto;width:auto;border:solid gray;border-width:.1em .1em .1em .8em;padding:.2em .6em;"><pre style="margin: 0; line-height: 125%"><span style="color: #fed136; font-weight: bold">p</span> <span style="color: #ffffff">{</span>
<span style="color: #fed136; font-weight: bold">color</span><span style="color: #ffffff">:</span> <span style="color: #ffffff">red;</span>
<span style="color: #ffffff">}</span>

<span style="color: #fed136; font-weight: bold">div</span> <span style="color: #fed136; font-weight: bold">p</span> <span style="color: #ffffff">{</span>
<span style="color: #fed136; font-weight: bold">color</span><span style="color: #ffffff">:</span> <span style="color: #ffffff">blue;</span>
<span style="color: #ffffff">}</span>

<span style="color: #ff0086; font-weight: bold">#rogue</span> <span style="color: #ffffff">{</span>
<span style="color: #fed136; font-weight: bold">color</span><span style="color: #ffffff">:</span> <span style="color: #ffffff">violet;</span>
<span style="color: #ffffff">}</span>
</pre></td></tr></table></div>

</p>

<p>Result:<br>
 </p>
  <p align="center"><img src="images/5.jpg"></p>

<p>Now that we know how to pinpoint certain elements, all that remains is to see how we can modify everything at once. Simple, using the "*" (universal) selector.</p>

<p>
<div style="background: #111111; overflow:auto;width:auto;border:solid gray;border-width:.1em .1em .1em .8em;padding:.2em .6em;"><pre style="margin: 0; line-height: 125%"><span style="color: #ffffff">*</span> <span style="color: #ffffff">{</span>
<span style="color: #fed136; font-weight: bold">color</span><span style="color: #ffffff">:</span> <span style="color: #ffffff">yellow;</span>
<span style="color: #ffffff">}</span>
</pre></td></tr></table></div>

</p>

<p>Will make absolutely everything yellow.<br>
</p>

</body>
</html>