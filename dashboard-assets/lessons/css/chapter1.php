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

<p align="center"><font size="6"><b><u>Chapter 1: Introduction to CSS</b></u></font></p><br>

<p><font size="5">So if you looked at how HTML displays webpages you would see that they look very bland, ugly even, like this resume example: </p>

<p align="center"><img src="images/1.jpg"></p>
<p>The code for this being:</p>

<p>
<div style="background: #111111; overflow:auto;width:auto;border:solid gray;border-width:.1em .1em .1em .8em;padding:.2em .6em;"><pre style="margin: 0; line-height: 125%"><span style="color: #ff0007; font-weight: bold; font-style: italic; background-color: #0f140f">&lt;!DOCTYPE html&gt;</span>
<span style="color: #fed136; font-weight: bold">&lt;html&gt;</span>
<span style="color: #fed136; font-weight: bold">&lt;head&gt;</span>
<span style="color: #fed136; font-weight: bold">&lt;title&gt;&lt;/title&gt;</span>
<span style="color: #fed136; font-weight: bold">&lt;/head&gt;</span>
<span style="color: #fed136; font-weight: bold">&lt;body&gt;</span>
<span style="color: #fed136; font-weight: bold">&lt;div</span> <span style="color: #ff0086; font-weight: bold">id=</span><span style="color: #0086d2">&quot;header&quot;</span><span style="color: #fed136; font-weight: bold">&gt;</span> 
<span style="color: #fed136; font-weight: bold">&lt;p</span> <span style="color: #ff0086; font-weight: bold">id=</span><span style="color: #0086d2">&quot;name&quot;</span><span style="color: #fed136; font-weight: bold">&gt;<font color="ffffff"></span> Mario <span style="color: #fed136; font-weight: bold">&lt;/p&gt;</span>
<span style="color: #fed136; font-weight: bold">&lt;a</span> <span style="color: #ff0086; font-weight: bold">href=</span><span style="color: #0086d2">&quot;https://www.nintendo.co.uk/index.html&quot;</span><span style="color: #fed136; font-weight: bold">&gt;</span> <span style="color: #fed136; font-weight: bold">&lt;p</span> <span style="color: #ff0086; font-weight: bold">id=</span><span style="color: #0086d2">&quot;contact_webpage&quot;</span><span style="color: #fed136; font-weight: bold">&gt;</span> Contact me <span style="color: #fed136; font-weight: bold">&lt;/p&gt;</span> <span style="color: #fed136; font-weight: bold">&lt;/a&gt;</span>
<span style="color: #fed136; font-weight: bold">&lt;/div&gt;</span>
<span style="color: #fed136; font-weight: bold">&lt;div</span> <span style="color: #ff0086; font-weight: bold">class=</span><span style="color: #0086d2">&quot;left&quot;</span><span style="color: #fed136; font-weight: bold">&gt;</span> <span style="color: #fed136; font-weight: bold">&lt;img</span> <span style="color: #ff0086; font-weight: bold">src=</span><span style="color: #0086d2">&quot;http://cdn.wccftech.com/wp-content/uploads/2015/04/mario-2.png&quot;</span> <span style="color: #ff0086; font-weight: bold">id=</span><span style="color: #0086d2">”portrait”/</span><span style="color: #fed136; font-weight: bold">&gt;</span> <span style="color: #fed136; font-weight: bold">&lt;/div&gt;</span>
<span style="color: #fed136; font-weight: bold">&lt;div</span> <span style="color: #ff0086; font-weight: bold">class=</span><span style="color: #0086d2">&quot;right&quot;</span><span style="color: #fed136; font-weight: bold">&gt;</span> 
<span style="color: #fed136; font-weight: bold">&lt;h4&gt;</span> Application for: <span style="color: #fed136; font-weight: bold">&lt;/h4&gt;</span>
<span style="color: #fed136; font-weight: bold">&lt;p&gt;</span> Knight of the Mushroom kingdom <span style="color: #fed136; font-weight: bold">&lt;/p&gt;</span>
<span style="color: #fed136; font-weight: bold">&lt;h4&gt;</span> Experience <span style="color: #fed136; font-weight: bold">&lt;/h4&gt;</span>
<span style="color: #fed136; font-weight: bold">&lt;p&gt;</span> Plumber (1981-Present) <span style="color: #fed136; font-weight: bold">&lt;/p&gt;</span>
<span style="color: #fed136; font-weight: bold">&lt;h4&gt;</span> Skills <span style="color: #fed136; font-weight: bold">&lt;/h4&gt;</span>
<span style="color: #fed136; font-weight: bold">&lt;p&gt;</span> Plumbing <span style="color: #fed136; font-weight: bold">&lt;/p&gt;</span>
<span style="color: #fed136; font-weight: bold">&lt;p&gt;</span> Saving princesses, Dragon slaying <span style="color: #fed136; font-weight: bold">&lt;/p&gt;</span>
<span style="color: #fed136; font-weight: bold">&lt;h4&gt;</span> Education <span style="color: #fed136; font-weight: bold">&lt;/h4&gt;</span>
<span style="color: #fed136; font-weight: bold">&lt;p&gt;</span> None <span style="color: #fed136; font-weight: bold">&lt;/p&gt;</span>
<span style="color: #fed136; font-weight: bold">&lt;/div&gt;</span>
<span style="color: #fed136; font-weight: bold">&lt;div</span> <span style="color: #ff0086; font-weight: bold">id=</span><span style="color: #0086d2">&quot;footer&quot;</span><span style="color: #fed136; font-weight: bold">&gt;</span> Princess Toadstool&#39;s Quarters, Mushroom Kingdom </font><span style="color: #fed136; font-weight: bold">&lt;/div&gt;</span>
<span style="color: #fed136; font-weight: bold">&lt;/body&gt;</span>
<span style="color: #fed136; font-weight: bold">&lt;/html&gt;</span> 
</pre></td></tr></table></div>

</p>

<p>You can always add a style parameter to each and every tag to personalize them, but that makes the code harder to read and is a huge time sink. Meet CSS (Cascading Style Sheets), a language which can easily transform this resume into a master piece, like this: </p>

<p align="center"><img src="images/2.jpg"></p>

<p>It does look better if I might say so myself. Here&rsquo;s the CSS code for this:</p>


<p>
<div style="background: #111111; overflow:auto;width:auto;border:solid gray;border-width:.1em .1em .1em .8em;padding:.2em .6em;"><pre style="margin: 0; line-height: 125%"><span style="color: #fed136; font-weight: bold">div</span> <span style="color: #ffffff">{</span>
<span style="color: #fed136; font-weight: bold">border</span><span style="color: #ffffff">-radius:</span> <span style="color: #0086f7; font-weight: bold">10px</span><span style="color: #ffffff">;</span>
<span style="color: #ffffff">}</span>

<span style="color: #ff0086; font-weight: bold">#header</span> <span style="color: #ffffff">{</span>
<span style="color: #fed136; font-weight: bold">z-index</span><span style="color: #ffffff">:</span> <span style="color: #0086f7; font-weight: bold">1</span><span style="color: #ffffff">;</span>
<span style="color: #fed136; font-weight: bold">position</span><span style="color: #ffffff">:</span> <span style="color: #fed136; font-weight: bold">fixed</span><span style="color: #ffffff">;</span>
<span style="color: #fed136; font-weight: bold">width</span><span style="color: #ffffff">:</span> <span style="color: #0086f7; font-weight: bold">100</span><span style="color: #ffffff">%;</span>
<span style="color: #fed136; font-weight: bold">margin-top</span><span style="color: #ffffff">:</span> <span style="color: #0086f7; font-weight: bold">-20px</span><span style="color: #ffffff">;</span>
<span style="color: #fed136; font-weight: bold">height</span><span style="color: #ffffff">:</span> <span style="color: #0086f7; font-weight: bold">60px</span><span style="color: #ffffff">;</span>
<span style="color: #fed136; font-weight: bold">background-color</span><span style="color: #ffffff">:</span> <span style="color: #0086f7; font-weight: bold">#d1d1ff</span><span style="color: #ffffff">;</span>
<span style="color: #fed136; font-weight: bold">margin-bottom</span><span style="color: #ffffff">:</span> <span style="color: #0086f7; font-weight: bold">10px</span><span style="color: #ffffff">;</span>
<span style="color: #ffffff">}</span>

<span style="color: #ff0086; font-weight: bold">#name</span> <span style="color: #ffffff">{</span>
<span style="color: #fed136; font-weight: bold">float</span><span style="color: #ffffff">:</span><span style="color: #fed136; font-weight: bold">left</span><span style="color: #ffffff">;</span>
<span style="color: #fed136; font-weight: bold">margin-left</span><span style="color: #ffffff">:</span> <span style="color: #0086f7; font-weight: bold">5px</span><span style="color: #ffffff">;</span>
<span style="color: #fed136; font-weight: bold">padding-top</span><span style="color: #ffffff">:</span> <span style="color: #0086f7; font-weight: bold">5px</span><span style="color: #ffffff">;</span>
<span style="color: #fed136; font-weight: bold">font-size</span><span style="color: #ffffff">:</span> <span style="color: #0086f7; font-weight: bold">16px</span><span style="color: #ffffff">;</span>
<span style="color: #fed136; font-weight: bold">font-family</span><span style="color: #ffffff">:</span> <span style="color: #fed136; font-weight: bold">sans-serif</span><span style="color: #ffffff">;</span>
<span style="color: #fed136; font-weight: bold">color</span><span style="color: #ffffff">:</span> <span style="color: #0086f7; font-weight: bold">#ffffff</span><span style="color: #ffffff">;</span>
<span style="color: #ffffff">}</span>

<span style="color: #ff0086; font-weight: bold">#contact_webpage</span><span style="color: #ffffff">{</span>
<span style="color: #fed136; font-weight: bold">float</span><span style="color: #ffffff">:</span> <span style="color: #fed136; font-weight: bold">right</span><span style="color: #ffffff">;</span>
<span style="color: #fed136; font-weight: bold">margin-right</span><span style="color: #ffffff">:</span> <span style="color: #0086f7; font-weight: bold">5px</span><span style="color: #ffffff">;</span>
<span style="color: #fed136; font-weight: bold">padding-top</span><span style="color: #ffffff">:</span> <span style="color: #0086f7; font-weight: bold">5px</span><span style="color: #ffffff">;</span>
<span style="color: #fed136; font-weight: bold">font-size</span><span style="color: #ffffff">:</span> <span style="color: #0086f7; font-weight: bold">16px</span><span style="color: #ffffff">;</span>
<span style="color: #fed136; font-weight: bold">font-family</span><span style="color: #ffffff">:</span> <span style="color: #fed136; font-weight: bold">sans-serif</span><span style="color: #ffffff">;</span>
<span style="color: #fed136; font-weight: bold">color</span><span style="color: #ffffff">:</span> <span style="color: #0086f7; font-weight: bold">#ffffff</span><span style="color: #ffffff">;</span>
<span style="color: #ffffff">}</span>

<span style="color: #fed136; font-weight: bold">h4</span> <span style="color: #ffffff">{</span>
<span style="color: #fed136; font-weight: bold">margin-left</span><span style="color: #ffffff">:</span> <span style="color: #0086f7; font-weight: bold">5px</span><span style="color: #ffffff">;</span>
<span style="color: #fed136; font-weight: bold">margin-bottom</span><span style="color: #ffffff">:</span> <span style="color: #0086f7; font-weight: bold">15px</span><span style="color: #ffffff">;</span>
<span style="color: #fed136; font-weight: bold">font-family</span><span style="color: #ffffff">:</span> <span style="color: #ffffff">Comic</span> <span style="color: #ffffff">Sans,</span> <span style="color: #fed136; font-weight: bold">serif</span><span style="color: #ffffff">;</span>
<span style="color: #fed136; font-weight: bold">font-weight</span><span style="color: #ffffff">:</span> <span style="color: #fed136; font-weight: bold">bold</span><span style="color: #ffffff">;</span>
<span style="color: #ffffff">}</span>

<span style="color: #ffffff">.right</span> <span style="color: #fed136; font-weight: bold">p</span> <span style="color: #ffffff">{</span>
<span style="color: #fed136; font-weight: bold">margin-left</span><span style="color: #ffffff">:</span> <span style="color: #0086f7; font-weight: bold">5px</span><span style="color: #ffffff">;</span>
<span style="color: #fed136; font-weight: bold">margin-right</span><span style="color: #ffffff">:</span> <span style="color: #0086f7; font-weight: bold">5px</span><span style="color: #ffffff">;</span>
<span style="color: #fed136; font-weight: bold">margin-top</span><span style="color: #ffffff">:</span> <span style="color: #0086f7; font-weight: bold">-10px</span><span style="color: #ffffff">;</span>
<span style="color: #fed136; font-weight: bold">font-family</span><span style="color: #ffffff">:</span> <span style="color: #ffffff">Calibri;</span>
<span style="color: #fed136; font-weight: bold">color</span><span style="color: #ffffff">:</span> <span style="color: #0086f7; font-weight: bold">#000000</span><span style="color: #ffffff">;</span>
<span style="color: #ffffff">}</span>

<span style="color: #fed136; font-weight: bold">li</span> <span style="color: #ffffff">{</span>
<span style="color: #fed136; font-weight: bold">list-style-type</span><span style="color: #ffffff">:</span> <span style="color: #fed136; font-weight: bold">square</span><span style="color: #ffffff">;</span>
<span style="color: #ffffff">}</span>

<span style="color: #fed136; font-weight: bold">a</span><span style="color: #ffffff">:hover</span> <span style="color: #ffffff">{</span>
<span style="color: #fed136; font-weight: bold">font-weight</span><span style="color: #ffffff">:</span> <span style="color: #fed136; font-weight: bold">bold</span><span style="color: #ffffff">;</span>
<span style="color: #ffffff">}</span>

<span style="color: #ffffff">.left</span> <span style="color: #ffffff">{</span>
<span style="color: #fed136; font-weight: bold">position</span><span style="color: #ffffff">:</span> <span style="color: #fed136; font-weight: bold">relative</span><span style="color: #ffffff">;</span>
<span style="color: #fed136; font-weight: bold">float</span><span style="color: #ffffff">:</span> <span style="color: #fed136; font-weight: bold">left</span><span style="color: #ffffff">;</span>
<span style="color: #fed136; font-weight: bold">margin-top</span><span style="color: #ffffff">:</span> <span style="color: #0086f7; font-weight: bold">50px</span><span style="color: #ffffff">;</span>
<span style="color: #fed136; font-weight: bold">width</span><span style="color: #ffffff">:</span> <span style="color: #0086f7; font-weight: bold">10</span><span style="color: #ffffff">%;</span>
<span style="color: #fed136; font-weight: bold">height</span><span style="color: #ffffff">:</span> <span style="color: #0086f7; font-weight: bold">400px</span><span style="color: #ffffff">;</span>
<span style="color: #fed136; font-weight: bold">background-color</span><span style="color: #ffffff">:</span> <span style="color: #0086f7; font-weight: bold">#B9D7D9</span><span style="color: #ffffff">;</span>
<span style="color: #fed136; font-weight: bold">margin-bottom</span><span style="color: #ffffff">:</span> <span style="color: #0086f7; font-weight: bold">10px</span><span style="color: #ffffff">;</span>
<span style="color: #ffffff">}</span>

<span style="color: #ffffff">.right</span> <span style="color: #ffffff">{</span>
<span style="color: #fed136; font-weight: bold">position</span><span style="color: #ffffff">:</span> <span style="color: #fed136; font-weight: bold">relative</span><span style="color: #ffffff">;</span>
<span style="color: #fed136; font-weight: bold">float</span><span style="color: #ffffff">:</span> <span style="color: #fed136; font-weight: bold">right</span><span style="color: #ffffff">;</span>
<span style="color: #fed136; font-weight: bold">margin-top</span><span style="color: #ffffff">:</span> <span style="color: #0086f7; font-weight: bold">50px</span><span style="color: #ffffff">;</span>
<span style="color: #fed136; font-weight: bold">width</span><span style="color: #ffffff">:</span> <span style="color: #0086f7; font-weight: bold">89</span><span style="color: #ffffff">%;</span>
<span style="color: #fed136; font-weight: bold">height</span><span style="color: #ffffff">:</span> <span style="color: #0086f7; font-weight: bold">400px</span><span style="color: #ffffff">;</span>
<span style="color: #fed136; font-weight: bold">background-color</span><span style="color: #ffffff">:</span> <span style="color: #0086f7; font-weight: bold">#a6eef0</span><span style="color: #ffffff">;</span>
<span style="color: #fed136; font-weight: bold">margin-bottom</span><span style="color: #ffffff">:</span> <span style="color: #0086f7; font-weight: bold">10px</span><span style="color: #ffffff">;</span>
<span style="color: #ffffff">}</span>

<span style="color: #ff0086; font-weight: bold">#footer</span> <span style="color: #ffffff">{</span>
<span style="color: #fed136; font-weight: bold">position</span><span style="color: #ffffff">:</span> <span style="color: #fed136; font-weight: bold">relative</span><span style="color: #ffffff">;</span>
<span style="color: #fed136; font-weight: bold">height</span><span style="color: #ffffff">:</span> <span style="color: #0086f7; font-weight: bold">50px</span><span style="color: #ffffff">;</span>
<span style="color: #fed136; font-weight: bold">background-color</span><span style="color: #ffffff">:</span> <span style="color: #0086f7; font-weight: bold">#8b93d9</span><span style="color: #ffffff">;</span>
<span style="color: #fed136; font-weight: bold">clear</span><span style="color: #ffffff">:</span> <span style="color: #fed136; font-weight: bold">both</span><span style="color: #ffffff">;</span>
<span style="color: #fed136; font-weight: bold">font-family</span><span style="color: #ffffff">:</span> <span style="color: #fed136; font-weight: bold">sans-serif</span><span style="color: #ffffff">;</span>
<span style="color: #fed136; font-weight: bold">font-size</span><span style="color: #ffffff">:</span> <span style="color: #0086f7; font-weight: bold">14px</span><span style="color: #ffffff">;</span>
<span style="color: #fed136; font-weight: bold">text-align</span><span style="color: #ffffff">:</span> <span style="color: #fed136; font-weight: bold">center</span><span style="color: #ffffff">;</span>
<span style="color: #fed136; font-weight: bold">color</span><span style="color: #ffffff">:</span> <span style="color: #0086f7; font-weight: bold">#ffffff</span><span style="color: #ffffff">;</span>
<span style="color: #ffffff">}</span>

<span style="color: #ff0086; font-weight: bold">#footer</span> <span style="color: #fed136; font-weight: bold">p</span> <span style="color: #ffffff">{</span>
<span style="color: #fed136; font-weight: bold">position</span><span style="color: #ffffff">:</span> <span style="color: #fed136; font-weight: bold">relative</span><span style="color: #ffffff">;</span>
<span style="color: #fed136; font-weight: bold">padding-top</span><span style="color: #ffffff">:</span> <span style="color: #0086f7; font-weight: bold">15px</span><span style="color: #ffffff">;</span>
<span style="color: #ffffff">}</span>

<span style="color: #ff0086; font-weight: bold">#portrait</span> <span style="color: #ffffff">{</span>
<span style="color: #fed136; font-weight: bold">height</span><span style="color: #ffffff">:</span> <span style="color: #0086f7; font-weight: bold">120px</span><span style="color: #ffffff">;</span>
<span style="color: #fed136; font-weight: bold">position</span><span style="color: #ffffff">:</span> <span style="color: #fed136; font-weight: bold">fixed</span><span style="color: #ffffff">;</span>
<span style="color: #ffffff">}</span>
</pre></td></tr></table></div>

</p>

<p>First things first: one has to link a CSS file with the HTML file. This is done by adding a link tag to the HTML file, like this:</p>

<p>
<div style="background: #111111; overflow:auto;width:auto;border:solid gray;border-width:.1em .1em .1em .8em;padding:.2em .6em;"><pre style="margin: 0; line-height: 125%"><span style="color: #fed136; font-weight: bold">&lt;link</span> <span style="color: #ff0086; font-weight: bold">type=</span><span style="color: #0086d2">&quot;text/css&quot;</span> <span style="color: #ff0086; font-weight: bold">rel=</span><span style="color: #0086d2">&quot;stylesheet&quot;</span> <span style="color: #ff0086; font-weight: bold">href=</span><span style="color: #0086d2">&quot;stylesheet.css&quot;</span><span style="color: #fed136; font-weight: bold">/&gt;</span>
</pre></td></tr></table></div>

</p>

<p>In this tag, the &ldquo;type&rdquo; and &ldquo;rel&rdquo; values have to be those in the above example. The &ldquo;href&rdquo; value represents the address of the CSS file. In this case the attached file is called &ldquo;stylesheet.css&rdquo; and resides in the same folder as the HTML source code. Should you wish to give it another name, it has to be reflected in the link tag.</p>

<p>Now onto the actual CSS programming, I strongly suggest that you use an editor and see for yourself how everything works (my personal recommendation is the one available online at http://cssdeck.com/labs and has both a HTML and CSS part). The basic principle is as follows:</p>

<p>
<div style="background: #111111; overflow:auto;width:auto;border:solid gray;border-width:.1em .1em .1em .8em;padding:.2em .6em;"><pre style="margin: 0; line-height: 125%"><span style="color: #fed136; font-weight: bold">Selector</span> <span style="color: #ffffff">{</span>
<span style="color: #ffffff">Property:</span> <span style="color: #ffffff">value;</span>
<span style="color: #ffffff">}</span> <span style="color: #008800; font-style: italic; background-color: #0f140f">/* This is a comment */</span>
</pre></td></tr></table></div>

</p>

<p>Selector means the tag that will be affected. Property represents what is to be modified (e.g. color, font-size, font-family), and value into what it will be modified. For color, possible values are blue, red, and others, but hexadecimal color codes are also supported (e.g. a3f5b3; do note that letters are case insensitive). Font-size is denoted by an integer value followed immediately by px (pixels), for example 12px. Font-family should be self-explanatory, and it supports both font names (Calibri, Verdana), and font categories (serif, sans-serif). Worth noting is that multiple values can be attributed in this case, so that:</p>

<p>
<div style="background: #111111; overflow:auto;width:auto;border:solid gray;border-width:.1em .1em .1em .8em;padding:.2em .6em;"><pre style="margin: 0; line-height: 125%"><span style="color: #fed136; font-weight: bold">p</span> <span style="color: #ffffff">{</span>
<span style="color: #fed136; font-weight: bold">font-family</span><span style="color: #ffffff">:</span> <span style="color: #ffffff">Verdana,</span> <span style="color: #fed136; font-weight: bold">sans-serif</span><span style="color: #ffffff">;</span>
<span style="color: #ffffff">}</span>
</pre></td></tr></table></div>

</p>

<p>In this case, the computer would first try to display the paragraph in Verdana, but if it does not support that particular font, it would default to any sans-serif font that is available.</p>

<p>The list of properties presented above is by no means an exhaustive list, but it does present some of the most used properties. However, it is important to observe the syntax. The curly braces are needed to determine the properties of each tag, at the same time, the semicolon &ldquo;;&rdquo; is important in letting the computer know when it is done with a property and can move on to the next. Also, any writing between &ldquo;/*&rdquo; and &ldquo;*/&rdquo; will be ignored by the computer. These are comments and serve to tell another human what the code is supposed to do. Use them both to help other people understand and to remind yourself from time to time what each part is supposed to do, but do not abuse them.<br>
</p>

</body>
</html>