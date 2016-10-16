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

<p align="center"><font size="6"><b><u>Chapter 2: Blocks, backgrounds, borders... Oh my</b></u></font></p><br>

<p><font size="5">In the previous lesson, some examples of properties were mentioned. Now let's go in these a bit deeper. Consider this html code:</p>

<p>
<div style="background: #111111; overflow:auto;width:auto;border:solid gray;border-width:.1em .1em .1em .8em;padding:.2em .6em;"><pre style="margin: 0; line-height: 125%"><span style="color: #ff0007; font-weight: bold; font-style: italic; background-color: #0f140f">&lt;!DOCTYPE html&gt;</span>
<span style="color: #fed136; font-weight: bold">&lt;html&gt;</span>
<span style="color: #fed136; font-weight: bold">&lt;head&gt;</span>
<span style="color: #fed136; font-weight: bold">&lt;link</span> <span style="color: #ff0086; font-weight: bold">type=</span><span style="color: #0086d2">&quot;text/css&quot;</span> <span style="color: #ff0086; font-weight: bold">rel=</span><span style="color: #0086d2">&quot;stylesheet&quot;</span> <span style="color: #ff0086; font-weight: bold">href=</span><span style="color: #0086d2">&quot;stylesheet.css&quot;</span><span style="color: #fed136; font-weight: bold">/&gt;</span>
<span style="color: #fed136; font-weight: bold">&lt;title&gt;</span><font color="ffffff">Result</font><span style="color: #fed136; font-weight: bold">&lt;/title&gt;</span>
<span style="color: #fed136; font-weight: bold">&lt;/head&gt;</span>
<span style="color: #fed136; font-weight: bold">&lt;body&gt;</span>
<span style="color: #fed136; font-weight: bold">&lt;div&gt;&lt;/div&gt;</span>
<span style="color: #fed136; font-weight: bold">&lt;/body&gt;</span>
<span style="color: #fed136; font-weight: bold">&lt;/html&gt;</span>
</pre></td></tr></table></div>

</p>

<p>Normally, this does not display anything, but with CSS that will soon change. Let's add this in CSS:</p>

<p>
<div style="background: #111111; overflow:auto;width:auto;border:solid gray;border-width:.1em .1em .1em .8em;padding:.2em .6em;"><pre style="margin: 0; line-height: 125%"><span style="color: #fed136; font-weight: bold">div</span> <span style="color: #ffffff">{</span>
<span style="color: #fed136; font-weight: bold">background-color</span><span style="color: #ffffff">:</span> <span style="color: #ffffff">blue;</span>
<span style="color: #fed136; font-weight: bold">border</span><span style="color: #ffffff">:</span> <span style="color: #0086f7; font-weight: bold">3px</span> <span style="color: #fed136; font-weight: bold">solid</span> <span style="color: #ffffff">red;</span>
<span style="color: #fed136; font-weight: bold">width</span><span style="color: #ffffff">:</span> <span style="color: #0086f7; font-weight: bold">100px</span><span style="color: #ffffff">;</span>
<span style="color: #fed136; font-weight: bold">height</span><span style="color: #ffffff">:</span> <span style="color: #0086f7; font-weight: bold">100px</span><span style="color: #ffffff">;</span>
<span style="color: #ffffff">}</span>
</pre></td></tr></table></div>


</p>

<p>Now it should look something like this:<br>
 </p>

 <p align="center"><img src="images/3.jpg"></p>

<p>As you can see, a blue square with a red border appeared. Hopefully just by looking at the code you can infer what each line does, if not here's a quick rundown:</p>

<p>&bull; Background-color: changes the background color of the block to the specified one<br>
&bull; Border: creates a border around the block, first value represents the thickness of the border in pixels, second the type of border (solid, dashed are possible values), and lastly the color of the border.<br>
&bull; Width: the width of the block in pixels, as big as the screen if this is not used<br>
&bull; Height: the height of the block in pixels</p>

<p>Let's add another property:</p>

<p>
<div style="background: #111111; overflow:auto;width:auto;border:solid gray;border-width:.1em .1em .1em .8em;padding:.2em .6em;"><pre style="margin: 0; line-height: 125%"><span style="color: #fed136; font-weight: bold">border-radius</span><span style="color: #ffffff">:</span> <span style="color: #fed136; font-weight: bold">10px;</span>
</pre></td></tr></table></div>

</p>

<p>Now all corners are round. Awesome.</p>

<p>Time for a quick test: What does this do?</p>

<p>
<div style="background: #111111; overflow:auto;width:auto;border:solid gray;border-width:.1em .1em .1em .8em;padding:.2em .6em;"><pre style="margin: 0; line-height: 125%"><span style="color: #fed136; font-weight: bold">width</span><span style="color: #ffffff">:</span> <span style="color: #fed136; font-weight: bold">50</span><span style="color: #ffffff">%;</span>
</pre></td></tr></table></div>

</p>


<p>Well... </p>
 <p align="center"><img src="images/4.jpg"></p>


<p>Seems like it makes the block only take 50% of the screen. Using percentages can be used in some cases for better control (e.g. you want something to use only a certain amount of space which may vary from computer to computer). Additionally, using "border-radius: 100%;" makes the block a circle or an oval. Don't believe me? Try it.<br>
 <br>
</p>

</body>
</html>