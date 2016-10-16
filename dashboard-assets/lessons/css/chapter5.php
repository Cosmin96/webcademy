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

<p align="center"><font size="6"><b><u>Chapter 5: CSS3</b></u></font></p><br>

<p><font size="5">So now it&rsquo;s time for some more advanced stuff. The next elements were introduced in CSS3 and deserve some special mentions. Don&rsquo;t worry, most of these were released a while ago, and chances are that if you are unsure which version of CSS you are on, then you probably are using CSS3. On with the lesson:</p>

<p>The first interesting addition is the background images. You can now put any image or gif from the internet, you just need the URL. You can also set size, position, and whether the image or gif repeats itself to cover the whole box. Here&rsquo;s an example:</p>

<p align="center"><img src="images/16.png"></p>

<p>The command should be self-explanatory by now, but still here&rsquo;s a quick rundown:</p>

<p>&bull; Background-image: you provide the url with this one<br>
&bull; Background-position: set the position of the image if the box is too large<br>
&bull; Background-repeat: on repeat the image is duplicated until it covers the whole surface, on no-repeat it only appears in the designated position and takes as much space as it needs<br>
&bull; Background-size: contain makes the image as large as possible without exceeding the contained area, cover makes it fit but spilling outside is permitted</p>

<p>You can also set and image as a border, and it works similarly to the background. Without further ado, here&rsquo;s a demonstration:</p>
<p align="center"><img src="images/17.png"></p>
<p>
Here&rsquo;s the code for it:</p>

<p>
<div style="background: #111111; overflow:auto;width:auto;border:solid gray;border-width:.1em .1em .1em .8em;padding:.2em .6em;"><pre style="margin: 0; line-height: 125%"><span style="color: #fed136; font-weight: bold">div</span> <span style="color: #ffffff">{</span>
<span style="color: #fed136; font-weight: bold">border</span><span style="color: #ffffff">:</span> <span style="color: #0086f7; font-weight: bold">100px</span> <span style="color: #fed136; font-weight: bold">solid</span> <span style="color: #fed136; font-weight: bold">transparent</span><span style="color: #ffffff">;</span>
<span style="color: #fed136; font-weight: bold">padding</span><span style="color: #ffffff">:</span> <span style="color: #0086f7; font-weight: bold">50px</span><span style="color: #ffffff">;</span>
<span style="color: #fed136; font-weight: bold">height</span><span style="color: #ffffff">:</span> <span style="color: #0086f7; font-weight: bold">500px</span><span style="color: #ffffff">;</span>
<span style="color: #fed136; font-weight: bold">width</span><span style="color: #ffffff">:</span> <span style="color: #0086f7; font-weight: bold">700px</span><span style="color: #ffffff">;</span>
<span style="color: #fed136; font-weight: bold">border</span><span style="color: #ffffff">-image:</span> <span style="color: #0086d2">url(http://www.gifstop.com/images/borders/border2.jpg)</span> <span style="color: #0086f7; font-weight: bold">150</span> <span style="color: #ffffff">stretch</span>
<span style="color: #ffffff">}</span>
</pre></td></tr></table></div>

</p>

<p>And now lastly&#8230;.Animations. Yes, now you can animate blocks in certain ways. For this you need two CSS rules, one for the animation, and one for the block which implements the animation.</p>

<p>The animation ruleset is preceded by &ldquo;@keyframes&rdquo; and then its name. Inside you specify the states that the animation must pass through, like this:</p>

<p>
<div style="background: #111111; overflow:auto;width:auto;border:solid gray;border-width:.1em .1em .1em .8em;padding:.2em .6em;"><pre style="margin: 0; line-height: 125%"><span style="color: #fed136; font-weight: bold">@keyframes</span> <span style="color: #fed136; font-weight: bold">animation</span><span style="color: #ffffff">{</span>
<span style="color: #fed136; font-weight: bold">from</span> <span style="color: #ffffff">{</span><span style="color: #fed136; font-weight: bold">background-color</span><span style="color: #ffffff">:</span> <span style="color: #ffffff">white;}</span>
<span style="color: #fed136; font-weight: bold">to</span> <span style="color: #ffffff">{</span><span style="color: #fed136; font-weight: bold">background-color</span><span style="color: #ffffff">:</span> <span style="color: #ffffff">blue;}</span>
<span style="color: #ffffff">}</span>
</pre></td></tr></table></div>

</p>

<p>In this case the respective element starts as white, then starts to turn red, and stops when it is completely red.</p>

<p>We can also use percentages to define intermediary points:</p>

<p><div style="background: #111111; overflow:auto;width:auto;border:solid gray;border-width:.1em .1em .1em .8em;padding:.2em .6em;"><pre style="margin: 0; line-height: 125%"><span style="color: #fed136; font-weight: bold">@keyframes</span> <span style="color: #fed136; font-weight: bold">animation</span><span style="color: #ffffff">{</span>
<span style="color: #fed136; font-weight: bold">0</span><span style="color: #ffffff">%</span> <span style="color: #ffffff">{</span><span style="color: #fed136; font-weight: bold">background-color</span><span style="color: #ffffff">:</span> <span style="color: #ffffff">white;}</span>
<span style="color: #fed136; font-weight: bold">25</span><span style="color: #ffffff">%</span> <span style="color: #ffffff">{</span><span style="color: #fed136; font-weight: bold">background-color</span><span style="color: #ffffff">:</span> <span style="color: #ffffff">yellow;}</span>
<span style="color: #fed136; font-weight: bold">50</span><span style="color: #ffffff">%</span> <span style="color: #ffffff">{</span><span style="color: #fed136; font-weight: bold">background-color</span><span style="color: #ffffff">:</span> <span style="color: #ffffff">blue;}</span>
<span style="color: #fed136; font-weight: bold">75</span><span style="color: #ffffff">%</span> <span style="color: #ffffff">{</span><span style="color: #fed136; font-weight: bold">background-color</span><span style="color: #ffffff">:</span> <span style="color: #ffffff">grey;}</span>
<span style="color: #fed136; font-weight: bold">100</span><span style="color: #ffffff">%</span> <span style="color: #ffffff">{</span><span style="color: #fed136; font-weight: bold">background-color</span><span style="color: #ffffff">:</span> <span style="color: #ffffff">black;}</span>
<span style="color: #ffffff">}</span>
</pre></td></tr></table></div>
</p>

<p>Also worth noting is that from is equivalent to 0% and to is equivalent to 100%.</p>

<p>Now we also need to link the animation with an element. This is done by simply adding the &ldquo;animation name&rdquo; property, followed by the animation name, like this:</p>

<p>
<div style="background: #111111; overflow:auto;width:auto;border:solid gray;border-width:.1em .1em .1em .8em;padding:.2em .6em;"><pre style="margin: 0; line-height: 125%"><span style="color: #fed136; font-weight: bold">Div</span> <span style="color: #ffffff">{</span>
<span style="color: #ffffff">Animation-name:</span> <span style="color: #ffffff">animation;</span>
<span style="color: #ffffff">}</span>
</pre></td></tr></table></div>

</p>

<p>Now we also need to specify delay, animation duration, and how many times it should repeat:</p>


<p>
<div style="background: #111111; overflow:auto;width:auto;border:solid gray;border-width:.1em .1em .1em .8em;padding:.2em .6em;"><pre style="margin: 0; line-height: 125%"><span style="color: #fed136; font-weight: bold">Div</span> <span style="color: #ffffff">{</span>
<span style="color: #ffffff">Animation-name:</span> <span style="color: #ffffff">animation;</span>
<span style="color: #ffffff">Animation-delay:</span> <span style="color: #0086f7; font-weight: bold">1s</span><span style="color: #ffffff">;</span>
<span style="color: #ffffff">Animation-duration:</span> <span style="color: #0086f7; font-weight: bold">5s</span><span style="color: #ffffff">;</span>
<span style="color: #ffffff">Animation-iteration-count:</span> <span style="color: #0086f7; font-weight: bold">3</span><span style="color: #ffffff">;</span>
<span style="color: #ffffff">}</span>
</pre></td></tr></table></div>

</p>
<p>This way our animation waits 1 second before playing, goes through all steps in 5 seconds, and repeats 3 times. Alternatively, we can also specify the direction, which can be reversed (starts from 100% and goes to 0) or alternate, which alternates between forwards and backwards. Lastly,with &ldquo;animation timing function&rdquo; you can set the speed curve, from the values:</p>

<p>&bull; Ease: start slow, then fast, then end slowly (this is default)<br>
&bull; Linear: same sped at all points<br>
&bull; Ease-in: start slow then gradually faster<br>
&bull; Ease-out: start fast then gradually slower<br>
&bull; Ease-in-out: slow start and end</p>

<p>Note that this does not influence duration at all.<br>
</p>

</body>
</html>