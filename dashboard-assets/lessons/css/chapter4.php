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

<p align="center"><b><u><font size="6">Chapter 4: Positioning</b></u></font></p><br>

<p><font size="5">So now that we know how to format each and every object, it is time to make them appear nicely on the page. The first property that we will get to use is "display". It may take 4 values: block, inline-block, inline, and none. These are better exemplified first with the following html code:</p>

<p>
<div style="background: #111111; overflow:auto;width:auto;border:solid gray;border-width:.1em .1em .1em .8em;padding:.2em .6em;"><pre style="margin: 0; line-height: 125%"><span style="color: #fed136; font-weight: bold">&lt;html&gt;</span>
<span style="color: #fed136; font-weight: bold">&lt;head&gt;</span>
<span style="color: #fed136; font-weight: bold">&lt;/head&gt;</span>
<span style="color: #fed136; font-weight: bold">&lt;body&gt;</span>
<span style="color: #fed136; font-weight: bold">&lt;div</span> <span style="color: #ff0086; font-weight: bold">id=</span><span style="color: #0086d2">&quot;blue&quot;</span><span style="color: #fed136; font-weight: bold">&gt;&lt;/div&gt;</span>
<span style="color: #fed136; font-weight: bold">&lt;div</span> <span style="color: #ff0086; font-weight: bold">id=</span><span style="color: #0086d2">&quot;red&quot;</span><span style="color: #fed136; font-weight: bold">&gt;&lt;/div&gt;</span>
<span style="color: #fed136; font-weight: bold">&lt;div</span> <span style="color: #ff0086; font-weight: bold">id=</span><span style="color: #0086d2">&quot;yellow&quot;</span><span style="color: #fed136; font-weight: bold">&gt;&lt;/div&gt;</span>
<span style="color: #fed136; font-weight: bold">&lt;div</span> <span style="color: #ff0086; font-weight: bold">id=</span><span style="color: #0086d2">&quot;green&quot;</span><span style="color: #fed136; font-weight: bold">&gt;&lt;/div&gt;</span>
<span style="color: #fed136; font-weight: bold">&lt;/body&gt;</span>
<span style="color: #fed136; font-weight: bold">&lt;/html&gt;</span>
</pre></td></tr></table></div>

</p>

<p>And now for each value:<br>
&bull; Block:<br>
 <br>
 <p align="center"><img src="images/6.jpg"></p>
&bull; Inline-block:<br>
 <br>
 <p align="center"><img src="images/7.jpg"></p>
&bull; Inline:<br>
 <br>
 <p align="center"><img src="images/8.jpg"></p>
&bull; None:<br>
<p align="center"><img src="images/9.jpg"></p>
 </p>

<p>To summarise:</p>

<p>&bull; Block: format the element like as a block, it will not let anything sit next to it on the line<br>
&bull; Inline-block: same as block, but will share the same line with others<br>
&bull; Inline: allows the element to share the line with others, but without formatting it as a block, meaning that it will only take as much space as it needs<br>
&bull; None: makes the element disappear from the page</p>

<p>Now we should also look at how each individual box behaves. Each box is made out of 4 layers, which from outermost to innermost are:</p>

<p>&bull; Margin: the distance between the element and another or the walls of the age, modifying its values moves the element around the page<br>
&bull; Border: the edge of the element, the one we make appear using the "border" command<br>
&bull; Padding: the distance between the content and the border<br>
&bull; Content: where the actual stuff of the element is</p>

<p>Let's start with modifying the margin. This is obviously done with the "margin" command.</p>

<p>
<div style="background: #111111; overflow:auto;width:auto;border:solid gray;border-width:.1em .1em .1em .8em;padding:.2em .6em;"><pre style="margin: 0; line-height: 125%"><span style="color: #fed136; font-weight: bold">margin</span><span style="color: #ffffff">:</span> <span style="color: #fed136; font-weight: bold">auto</span><span style="color: #ffffff">;</span> <span style="color: #008800; font-style: italic; background-color: #0f140f">/* this makes the left and right margins equal, centering the object */</span>
</pre></td></tr></table></div>

</p>

<p>We can also use specialized commands to modify only certain parts of the margin. For example: "margin-top" modifies only the top margin. All parts can be modified at the same time using "margin" followed by 4 values (each modifies one part starting from top and moving clockwise), like so:</p>

<p>
<div style="background: #111111; overflow:auto;width:auto;border:solid gray;border-width:.1em .1em .1em .8em;padding:.2em .6em;"><pre style="margin: 0; line-height: 125%"><span style="color: #fed136; font-weight: bold">margin</span><span style="color: #ffffff">:</span> <span style="color: #fed136; font-weight: bold">10px</span> <span style="color: #fed136; font-weight: bold">20px</span> <span style="color: #fed136; font-weight: bold">30px</span> <span style="color: #fed136; font-weight: bold">40px</span><span style="color: #ffffff">;</span>
</pre></td></tr></table></div>

</p>

<p>Is equivalent to:</p>

<p><div style="background: #111111; overflow:auto;width:auto;border:solid gray;border-width:.1em .1em .1em .8em;padding:.2em .6em;"><pre style="margin: 0; line-height: 125%"><span style="color: #fed136; font-weight: bold">margin-top</span><span style="color: #ffffff">:</span> <span style="color: #fed136; font-weight: bold">10px</span><span style="color: #ffffff">;</span>
<span style="color: #fed136; font-weight: bold">margin-right</span><span style="color: #ffffff">:</span> <span style="color: #fed136; font-weight: bold">20px</span><span style="color: #ffffff">;</span>
<span style="color: #fed136; font-weight: bold">margin-bottom</span><span style="color: #ffffff">:</span> <span style="color: #fed136; font-weight: bold">30px</span><span style="color: #ffffff">;</span>
<span style="color: #fed136; font-weight: bold">margin-left</span><span style="color: #ffffff">:</span> <span style="color: #fed136; font-weight: bold">40px</span><span style="color: #ffffff">;</span>
</pre></td></tr></table></div>

 </p>

 <p align="center"><img src="images/10.jpg"></p>
 <p align="center"><img src="images/11.jpg"></p>

<p>
Note: it is also possible to give the margin negative values, this means that the content will either overlap with another element, or go outside the page:<br>
 </p>
<p align="center"><img src="images/12.jpg"></p>

<p>Padding works in the same way (just replace margin with padding), however it is not advised to give the padding negative values.</p>

<p>Now let's determine where they go on the page. This is done with the float command, which uses the values left and right. Objects like this are "floating" like boats on the sea, meaning that they keep track of each other and do not end up overlapping (though this is still possible in some other cases).<br>
 </p>
 <p align="center"><img src="images/13.jpg"></p>

<p>Here you can see 2 elements floating along on the right. Which ends up in a corner depends on the order in which they appear in the html code: basically first come first served.</p>

<p>However, floating elements may end up overlapping with not floating ones. To solve this, the non-floating elements have to be given the "clear" property. "clear: left" makes it avoid left floating elements, "clear: right" elements which are floating to the right, and "clear: both" obviously avoids both cases.</p>

<p>Now it is finally time to set the "position" property. If this is not specified, the element defaults to "static", meaning where it would normally go. Some position values are:<br>
&bull; Absolute: position is set relative to the parent object<br>
 <br>
 <p align="center"><img src="images/14.jpg"></p>
&bull; Relative: object is moved relative to where it would have been if its position was static<br>
 <br>
 <p align="center"><img src="images/15.jpg"></p>
&bull; Fixed: element position is fixed, like it was glued to the screen<br>
</p>

</body>
</html>