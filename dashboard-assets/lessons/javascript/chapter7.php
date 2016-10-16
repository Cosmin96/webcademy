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

<p align="center"><font size="6"><b><u>
Chapter 7: JavaScript in Web Development</b></u></font></p><br>

<p><font size="5">So why have we learned JavaScript until now? As you already know by now, we use HTML to define the content and CSS to style it. But what do we use JavaScript for? In web development, JavaScript is used in order to create events and interact with the elements of a webpage.</p>

<p>We call this the HTML DOM, which means HTML Document Object Model. With it we can consider every HTML element an object and we can control its methods, events and properties using JavaScript.</p>

<p>A property is a value that can be set or get and a method is an action that an element can do. This sounds exactly like the principles of Object-Oriented Programming we learned in the previous chapters. Now we&rsquo;re getting somewhere!</p>

<p><!-- HTML generated using hilite.me --><div style="background: #111111; overflow:auto;width:auto;border:solid gray;border-width:.1em .1em .1em .8em;padding:.2em .6em;"><pre style="margin: 0; line-height: 125%"><span style="color: #fed136; font-weight: bold">&lt;p</span> <span style="color: #ff0086; font-weight: bold">id =</span><span style="color: #0086d2">”hi”</span><span style="color: #fed136; font-weight: bold">&gt;&lt;/p&gt;</span>
<span style="color: #fed136; font-weight: bold">&lt;script&gt;</span>
<span style="color: #ffffff">document.getElementById(</span><span style="color: #0086d2">&quot;hi&quot;</span><span style="color: #ffffff">).innerHTML</span> <span style="color: #ffffff">=</span> <span style="color: #0086d2">&quot;Hello&quot;</span><span style="color: #ffffff">;</span>
<span style="color: #fed136; font-weight: bold">&lt;/script&gt;</span>
</pre></div>
</p>

<p>See how we used a paragraph tag and we didn&rsquo;t write anything in it? Well test the code and see that we actually did, but in a different way. Can you see the script tag? Well we kind of did some JavaScript magic there and wrote the text. We first assigned an id to the paragraph tag and using the getElementById method we accessed the element. After that we used the innerHTML property in order to get the interior of the tag and set it to our desired message.</p>

<p>Another way of finding elements in HTML DOM is by tag:</p>

<p><!-- HTML generated using hilite.me --><div style="background: #111111; overflow:auto;width:auto;border:solid gray;border-width:.1em .1em .1em .8em;padding:.2em .6em;"><pre style="margin: 0; line-height: 125%"><span style="color: #fed136; font-weight: bold">var</span> <span style="color: #ffffff">x</span> <span style="color: #ffffff">=</span> <span style="color: #ffffff">document.getElementById(</span><span style="color: #0086d2">&quot;hi&quot;</span><span style="color: #ffffff">);</span>
<span style="color: #fed136; font-weight: bold">var</span> <span style="color: #ffffff">y</span> <span style="color: #ffffff">=</span> <span style="color: #ffffff">x.document.getElementByTagName(</span><span style="color: #0086d2">&quot;p&quot;</span><span style="color: #ffffff">);</span>
</pre></div>
</p>

<p>In this example we find all the &ldquo;p&rdquo; tags with the id &ldquo;hi&rdquo;.</p>

<p>And yet we have another way for this is by finding the class name:</p>

<p><!-- HTML generated using hilite.me --><div style="background: #111111; overflow:auto;width:auto;border:solid gray;border-width:.1em .1em .1em .8em;padding:.2em .6em;"><pre style="margin: 0; line-height: 125%"><span style="color: #fed136; font-weight: bold">var</span> <span style="color: #ffffff">x</span> <span style="color: #ffffff">=</span> <span style="color: #ffffff">document.getElementByClassName(</span><span style="color: #0086d2">&quot;hello&quot;</span><span style="color: #ffffff">);</span>
</pre></div>
</p>

<p>By doing so we get a list of elements with the class name &ldquo;hello&rdquo;.</p>

<p>Accessing elements is really important as in order to manipulate them, we firs need to find them. There are a few more ways to find elements, but for the basics, this is enough.</p>

<p>Now that we know how to access elements in HTML, let&rsquo;s have a look of how we can change the content as well. As we saw in the previous example, this is possible by using the &ldquo;innerHTML&rdquo; property.</p>

<p><!-- HTML generated using hilite.me --><div style="background: #111111; overflow:auto;width:auto;border:solid gray;border-width:.1em .1em .1em .8em;padding:.2em .6em;"><pre style="margin: 0; line-height: 125%"><span style="color: #fed136; font-weight: bold">&lt;p</span> <span style="color: #ff0086; font-weight: bold">id=</span><span style="color: #0086d2">&quot;p1&quot;</span><span style="color: #fed136; font-weight: bold">&gt;</span><font color="ffffff">Hi</font><span style="color: #fed136; font-weight: bold">&lt;/p&gt;</span>
<span style="color: #fed136; font-weight: bold">&lt;script&gt;</span>
<span style="color: #ffffff">document.getElementById(</span><span style="color: #0086d2">&quot;p1&quot;</span><span style="color: #ffffff">).innerHTML</span> <span style="color: #ffffff">=</span> <span style="color: #0086d2">&quot;Hello!&quot;</span><span style="color: #ffffff">;</span>
<span style="color: #fed136; font-weight: bold">&lt;/script&gt;</span>
</pre></div>
</p>

<p>We can even change the src attribute of an image:</p>

<p><!-- HTML generated using hilite.me --><div style="background: #111111; overflow:auto;width:auto;border:solid gray;border-width:.1em .1em .1em .8em;padding:.2em .6em;"><pre style="margin: 0; line-height: 125%"><span style="color: #fed136; font-weight: bold">&lt;img</span> <span style="color: #ff0086; font-weight: bold">id=</span><span style="color: #0086d2">”image”</span> <span style="color: #ff0086; font-weight: bold">src=</span><span style="color: #0086d2">”photo1.jpg”</span><span style="color: #fed136; font-weight: bold">&gt;</span>
<span style="color: #fed136; font-weight: bold">&lt;script&gt;</span>
<span style="color: #ffffff">document.getElementById(“image”).src</span> <span style="color: #ffffff">=</span> <span style="color: #0086d2">&quot;photo2.jpg&quot;</span><span style="color: #ffffff">;</span>
<span style="color: #fed136; font-weight: bold">&lt;/script&gt;</span>
</pre></div>
</p>

<p>Finally, we can even change the style of a HTML using CSS properties:</p>

<p><!-- HTML generated using hilite.me --><div style="background: #111111; overflow:auto;width:auto;border:solid gray;border-width:.1em .1em .1em .8em;padding:.2em .6em;"><pre style="margin: 0; line-height: 125%"><span style="color: #fed136; font-weight: bold">&lt;p</span> <span style="color: #ff0086; font-weight: bold">id=</span><span style="color: #0086d2">”p1”</span><span style="color: #fed136; font-weight: bold">&gt;</span><font color="ffffff">Hello</font><span style="color: #fed136; font-weight: bold">&lt;/p&gt;</span>
<span style="color: #fed136; font-weight: bold">&lt;script&gt;</span>
<span style="color: #ffffff">document.getElementById(</span><span style="color: #0086d2">&quot;p1&quot;</span><span style="color: #ffffff">).style.color</span> <span style="color: #ffffff">=</span> <span style="color: #0086d2">&quot;blue&quot;</span><span style="color: #ffffff">;</span>
<span style="color: #fed136; font-weight: bold">&lt;/script&gt;</span>
</pre></div>
</p>

<p>Let&rsquo;s go to the next level and learn how to create animations and events. We&rsquo;ll first want to create a div container for the animation.</p>

<p><!-- HTML generated using hilite.me --><div style="background: #111111; overflow:auto;width:auto;border:solid gray;border-width:.1em .1em .1em .8em;padding:.2em .6em;"><pre style="margin: 0; line-height: 125%"><span style="color: #fed136; font-weight: bold">&lt;div</span> <span style="color: #ff0086; font-weight: bold">id=</span><span style="color: #0086d2">”animation&quot;</span><span style="color: #fed136; font-weight: bold">&gt;&lt;/div&gt;</span>
</pre></div>
</p>

<p>Now that we created our animation container, we have to write the JavaScript code in order to change the position. Of course, if you want more complex animations you&rsquo;ll also want to add some CSS styling. </p>

<p><!-- HTML generated using hilite.me --><div style="background: #111111; overflow:auto;width:auto;border:solid gray;border-width:.1em .1em .1em .8em;padding:.2em .6em;"><pre style="margin: 0; line-height: 125%"><span style="color: #fed136; font-weight: bold">function</span> <span style="color: #ffffff">Animation(){</span>
<span style="color: #fed136; font-weight: bold">var</span> <span style="color: #ffffff">animate</span> <span style="color: #ffffff">=</span> <span style="color: #ffffff">document.getElementById(“animation”);</span>
<span style="color: #fed136; font-weight: bold">var</span> <span style="color: #ffffff">position</span> <span style="color: #ffffff">=</span> <span style="color: #0086f7; font-weight: bold">0</span><span style="color: #ffffff">;</span>
<span style="color: #fed136; font-weight: bold">var</span> <span style="color: #ffffff">id</span> <span style="color: #ffffff">=</span> <span style="color: #ffffff">setInterval(frame,</span> <span style="color: #0086f7; font-weight: bold">5</span><span style="color: #ffffff">);</span>
<span style="color: #fed136; font-weight: bold">function</span> <span style="color: #ffffff">frame(){</span>
<span style="color: #fed136; font-weight: bold">if</span><span style="color: #ffffff">(</span> <span style="color: #ffffff">pos</span> <span style="color: #ffffff">==</span> <span style="color: #0086f7; font-weight: bold">300</span><span style="color: #ffffff">){</span>
<span style="color: #ffffff">clearInterval(id);</span>
<span style="color: #ffffff">}</span>
<span style="color: #fed136; font-weight: bold">else</span> <span style="color: #ffffff">{</span>
<span style="color: #ffffff">position++;</span>
<span style="color: #ffffff">animate.style.top</span> <span style="color: #ffffff">=</span> <span style="color: #ffffff">pos</span> <span style="color: #ffffff">+</span> <span style="color: #0086d2">&quot;px&quot;</span><span style="color: #ffffff">;</span>
<span style="color: #ffffff">animate.style.right</span> <span style="color: #ffffff">=</span> <span style="color: #ffffff">pos</span> <span style="color: #ffffff">+</span> <span style="color: #0086d2">&quot;px&quot;</span><span style="color: #ffffff">;</span>
<span style="color: #ffffff">}}}</span>
</pre></div>
</p>

<p>Wow that&rsquo;s a lot! Let&rsquo;s understand how it works! We get the animated element, we set the position to 0, and then we set an interval of 5 seconds for the frame to be updated. In the frame function we make sure that if the position is not the one we desire, we update it with each iteration of the code.</p>

<p>Animations are not that hard. Let&rsquo;s have a look and see if events are more difficult. In order to create an event, we can use the typical method called &ldquo;onClick&rdquo;. As the name suggests, this event activates when you click on a certain element.</p>

<p><!-- HTML generated using hilite.me --><div style="background: #111111; overflow:auto;width:auto;border:solid gray;border-width:.1em .1em .1em .8em;padding:.2em .6em;"><pre style="margin: 0; line-height: 125%"><span style="color: #fed136; font-weight: bold">&lt;p</span> <span style="color: #ff0086; font-weight: bold">onclick=</span><span style="color: #0086d2">&quot;this.innerHTML=&#39;Congratulations!&#39;&quot;</span><span style="color: #fed136; font-weight: bold">&gt;</span><font color="ffffff">Click on me!</font><span style="color: #fed136; font-weight: bold">&lt;/p&gt;</span>
</pre></div>
</p>

<p>This is how you can also make a button and have it do something:</p>

<p><!-- HTML generated using hilite.me --><div style="background: #111111; overflow:auto;width:auto;border:solid gray;border-width:.1em .1em .1em .8em;padding:.2em .6em;"><pre style="margin: 0; line-height: 125%"><span style="color: #fed136; font-weight: bold">&lt;button</span> <span style="color: #ff0086; font-weight: bold">onclick =</span><span style="color: #ffffff"> </span><span style="color: #0086d2">&quot;displayDate()&quot;</span><span style="color: #fed136; font-weight: bold">&gt;</span><font color="ffffff">Click me</font><span style="color: #fed136; font-weight: bold">&lt;/button&gt;</span>
</pre></div>
</p>

<p>There are, of course, some other click events we need to learn:<br>
&bull; Onload and onunload &ndash; events that occur when an user enters or exits a website<br>
&bull; Onchange &ndash; events that occur when something in an input field has been changed<br>
&bull; Onmouseover and onmouseout &ndash; events that occur when the mouse hovers over an area<br>
&bull; Onmousedown and onmouseup &ndash; events that occur when the mouse has been clicked or released<br>
&bull; Onclick &ndash; events that occur when the mouse has been clicked</p>

<p>All these events are as easy and straightforward to use as you&rsquo;ve seen in the example before. </p>

<p>So are we done with events? No, not yet. There is still one more thing on the list and that&rsquo;s Event listeners. Event listeners create handlers, that are more powerful than normal events as they can be included directly into the HTML code, rather than inside the script tag.</p>

<p>When we create an Event Listener using the addEventListener() method, a handler is automatically attached to the specified element like this:</p>

<p><!-- HTML generated using hilite.me --><div style="background: #111111; overflow:auto;width:auto;border:solid gray;border-width:.1em .1em .1em .8em;padding:.2em .6em;"><pre style="margin: 0; line-height: 125%"><span style="color: #fed136; font-weight: bold">&lt;script&gt;</span>
<span style="color: #ffffff">document.getElementById(</span><span style="color: #0086d2">&quot;button&quot;</span><span style="color: #ffffff">).addEventListener(</span><span style="color: #0086d2">&quot;click&quot;</span><span style="color: #ffffff">,</span> <span style="color: #ffffff">displayDate);</span>
<span style="color: #fed136; font-weight: bold">&lt;/script&gt;</span>
</pre></div>
</p>

<p>So yes, we are done for now with JavaScript in WebDevelopment. We will see it again however in the course about creating your own webpage.<br>
</p>
</body>
</html>