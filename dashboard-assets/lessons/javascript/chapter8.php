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

<p align="center"><font size="6"><b><u>Chapter 8: Introduction to jQuery</b></u></font></p><br>

<p><font size="5">In the last chapter we learned how to apply the principles of OOP we learned in the first chapters and how to use JavaScript in Web Development. Now we will learn a few basics of jQuery, something that is going to make our lives better. jQuery is a JavaScript library that has functions which simplify programming in JavaScript. Not to mention that jQuery is easy to learn!</p>

<p>IMPORTANT! : In jQuery the use of semicolons is compulsory so that it knows when a line has been finished.</p>

<p>First of all we need to link our jQuery to the HTML document:</p>

<p><!-- HTML generated using hilite.me --><div style="background: #111111; overflow:auto;width:auto;border:solid gray;border-width:.1em .1em .1em .8em;padding:.2em .6em;"><pre style="margin: 0; line-height: 125%"><span style="color: #fed136; font-weight: bold">&lt;script </span><span style="color: #ff0086; font-weight: bold">type=</span><span style="color: #0086d2">”text/javascript”</span> <span style="color: #ff0086; font-weight: bold">src=</span><span style="color: #0086d2">”script.js”</span><span style="color: #fed136; font-weight: bold">&gt;&lt;/script&gt;</span>
</pre></div>
</p>

<p>Let&rsquo;s get a little used to it&rsquo;s sintax as well:</p>

<p><!-- HTML generated using hilite.me --><div style="background: #111111; overflow:auto;width:auto;border:solid gray;border-width:.1em .1em .1em .8em;padding:.2em .6em;"><pre style="margin: 0; line-height: 125%"><span style="color: #ffffff">$(document).ready(event);</span>
</pre></div>
</p>

<p>The code above does this:<br>
&bull; $() - tells jQuery that something is about to happen<br>
&bull; document &ndash; tells jQuery on which HTML document to act<br>
&bull; .ready() &ndash; tells us that when the document is ready, the function will execute an event that is defined inside the parenthesis</p>

<p>It sure looks easier than using JavaScript. Also a little more ordered. Now let&rsquo;s write a function for the event:</p>

<p><!-- HTML generated using hilite.me --><div style="background: #111111; overflow:auto;width:auto;border:solid gray;border-width:.1em .1em .1em .8em;padding:.2em .6em;"><pre style="margin: 0; line-height: 125%"><span style="color: #ffffff">$(document).ready(</span><span style="color: #fed136; font-weight: bold">function</span><span style="color: #ffffff">(){</span>
<span style="color: #fed136; font-weight: bold">do</span> <span style="color: #ffffff">something;</span>
<span style="color: #ffffff">});</span>
</pre></div>
</p>

<p>Here, &ldquo;do something&rdquo; is of course a placeholder. Don&rsquo;t expect the function to do something. We&rsquo;ll have a look right away at writing functions to actually do stuff. Just make sure you remember every concept there is in programming before going on.</p>

<p>Let&rsquo;s say we want to have a button disappear when clicked:</p>

<p><!-- HTML generated using hilite.me --><div style="background: #111111; overflow:auto;width:auto;border:solid gray;border-width:.1em .1em .1em .8em;padding:.2em .6em;"><pre style="margin: 0; line-height: 125%"><span style="color: #ffffff">$(document).ready(</span><span style="color: #fed136; font-weight: bold">function</span><span style="color: #ffffff">(){</span>
<span style="color: #ffffff">$(‘button’).click(</span> <span style="color: #ffffff">dissappear(){</span>
<span style="color: #ffffff">$(</span><span style="color: #fed136; font-weight: bold">this</span><span style="color: #ffffff">).hide();</span>
<span style="color: #ffffff">});</span>
<span style="color: #ffffff">});</span>
</pre></div>
<code></p>

<p>So as we can see we selected the button element, applied a click to create an event handler, and then told the button to disappear when clicked. Easy!</p>

<p>Selecting elements in jQuery is approximately the same as in JavaScript. In jQuery we have these selectors:<br>
&bull; By class &ndash; we use the CSS class of a tag to find the element<br>
&bull; By ID &ndash; we use the id of a tag to find the element (we have to use # before the id so that jQuery knows it&rsquo;s an id)<br>
&bull; By using &#8222;this&rdquo; &ndash; using this is really important as we can make sure jQuery affects only one element that we want. Basically we can control which element gets accessed. Check the previous example to actually see how we used it.</p>

<p>Alright so by nw you should know and understand enough of jQuery. There is one last thing that we should learn: time for some effects!</p>

<p>Let&rsquo;s have some practice with the animate() effect:</p>

<p><!-- HTML generated using hilite.me --><div style="background: #111111; overflow:auto;width:auto;border:solid gray;border-width:.1em .1em .1em .8em;padding:.2em .6em;"><pre style="margin: 0; line-height: 125%"><span style="color: #ffffff">$(‚div’).animate({bottom:</span><span style="color: #0086d2">&#39;+=5px&#39;</span><span style="color: #ffffff">),</span><span style="color: #0086f7; font-weight: bold">1000</span><span style="color: #ffffff">);</span>
</pre></div>
</p>

<p>Looks weird, doesn&rsquo;t it? Well it&rsquo;s not as difficult as it seems. We apply to a div an animation effect that moves the div down by 5 pixels every second. The &#8222;1000&rdquo; tells us that the effect will happen from 1000 to 1000 miliseconds.</p>

<p>There&rsquo;s a really good library out there for jQuery that has a lot of effects and it is mostly used to create games. The library we&rsquo;re talking about is jQuery UI. In jQuery UI we have the effect method. First we import the library in our HTML doc:</p>

<p><!-- HTML generated using hilite.me --><div style="background: #111111; overflow:auto;width:auto;border:solid gray;border-width:.1em .1em .1em .8em;padding:.2em .6em;"><pre style="margin: 0; line-height: 125%"><span style="color: #fed136; font-weight: bold">&lt;script </span><span style="color: #ff0086; font-weight: bold">src=</span><span style="color: #0086d2">&quot;//ajax.googleapis.com/ajax/libs/jqueryui/1.9.1/jquery-ui.min.js&quot;</span><span style="color: #fed136; font-weight: bold">&gt;&lt;/script&gt;</span>
</pre></div>
</p>

<p>And now let&rsquo;s say we create a div that has a circle, and that we want to shatter it into pieces. Can we do it with jQuery? No, but it&rsquo;s nothing jQuery UI can&rsquo;t handle:</p>

<p><!-- HTML generated using hilite.me --><div style="background: #111111; overflow:auto;width:auto;border:solid gray;border-width:.1em .1em .1em .8em;padding:.2em .6em;"><pre style="margin: 0; line-height: 125%"><span style="color: #ffffff">$(document).ready(</span><span style="color: #fed136; font-weight: bold">function</span><span style="color: #ffffff">()</span> <span style="color: #ffffff">{</span>
<span style="color: #ffffff">$(</span><span style="color: #0086d2">&#39;div&#39;</span><span style="color: #ffffff">).click(</span><span style="color: #fed136; font-weight: bold">function</span><span style="color: #ffffff">()</span> <span style="color: #ffffff">{</span>
<span style="color: #ffffff">$(</span><span style="color: #fed136; font-weight: bold">this</span><span style="color: #ffffff">).effect(</span><span style="color: #0086d2">&#39;explode&#39;</span><span style="color: #ffffff">);</span>
<span style="color: #ffffff">});</span>
<span style="color: #ffffff">});</span>
</pre></div>
</p>

<p>We use here the effect() method and assign it the value &#8222;explode&rdquo; which is standard in this library. Other effects are bounce, which makes an object bounce on the screen, and slide, which makes an object move on the screen. There are of course a lot of effects and we recommend looking on the documentation in order to find what you need.</p>

<p>Let&rsquo;s cross quickly to what else jQuery UI has to offer:<br>
&bull; Draggable() &ndash; function that allows the user to drag an object with the mouse on the screen<br>
&bull; Resizeable() &ndash; allows the user to resize an object how he wants<br>
&bull; Selectabe() &ndash; makes objects selectable (especially used with lists)<br>
&bull; Sortable() &ndash; lets elements in a list be reordered</p>

<p>As we said before, we recommend looking on the documentation in order to find and learn how to use other functions.</p>

<p>So as you can see, jQuery is a really powerful tool and it is easier to use than JavaScript directly. Now it&rsquo;s time for a bonus lesson (Hooray!). We learned that we could use jQuery in games right? Well you&rsquo;ll be making your own game in the next chapter.<br>
</p>

</body>
</html>