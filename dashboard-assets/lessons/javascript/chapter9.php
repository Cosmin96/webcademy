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

<p align="center"><font size="6"><b><u>Bonus Chapter: Games in JavaScript</b></u></font></p><br>
<font size="5">
<p>Creating a game in JavaScript is extremely simple, and just requires a bit of HTML and optionally some CSS experience. In this course we will be creating a somewhat similar version of the popular Flappy Bird game. Note that we will have a handful of code so paying attention to it is really important in order to understand. On we go.</p>

<p><b><u>1) Starting out</u></b></p>

<p>Firstly we will need to actually connect the javascript function created with our HTML code:<br>
</p>

<p><div style="background: #111111; overflow:auto;width:auto;border:solid gray;border-width:.1em .1em .1em .8em;padding:.2em .6em;"><pre style="margin: 0; line-height: 125%"><span style="color: #fed136; font-weight: bold">&lt;body</span> <span style="color: #ff0086; font-weight: bold">onload=</span><span style="color: #0086d2">&quot;startGame()&quot;</span><span style="color: #fed136; font-weight: bold">&gt;&lt;/body&gt;</span>
</pre></div></p>

<p>Time to now create a canvas in Javascript:</p>

<p>
<div style="background: #111111; overflow:auto;width:auto;border:solid gray;border-width:.1em .1em .1em .8em;padding:.2em .6em;"><pre style="margin: 0; line-height: 125%"><span style="color: #fed136; font-weight: bold">function</span> <span style="color: #ffffff">startGame()</span> <span style="color: #ffffff">{</span>
<span style="color: #ffffff">gameArea.start();</span>
<span style="color: #ffffff">}</span>

<span style="color: #fed136; font-weight: bold">var</span> <span style="color: #ffffff">gameArea</span> <span style="color: #ffffff">=</span> <span style="color: #ffffff">{</span>
<span style="color: #ffffff">canvas</span> <span style="color: #ffffff">:</span> <span style="color: #ffffff">document.createElement(“canvas”)</span>
<span style="color: #ffffff">start</span> <span style="color: #ffffff">:</span> <span style="color: #fed136; font-weight: bold">function</span><span style="color: #ffffff">()</span> <span style="color: #ffffff">{</span>
<span style="color: #fed136; font-weight: bold">this</span><span style="color: #ffffff">.canvas.width</span> <span style="color: #ffffff">=</span> <span style="color: #0086f7; font-weight: bold">500</span>
<span style="color: #fed136; font-weight: bold">this</span><span style="color: #ffffff">.canvas.height</span> <span style="color: #ffffff">=</span> <span style="color: #0086f7; font-weight: bold">300</span>
<span style="color: #fed136; font-weight: bold">this</span><span style="color: #ffffff">.context</span> <span style="color: #ffffff">=</span> <span style="color: #fed136; font-weight: bold">this</span><span style="color: #ffffff">.canvas.getContext(“</span><span style="color: #0086f7; font-weight: bold">2</span><span style="color: #ffffff">d”)</span>
<span style="color: #ffffff">document.body.insertBefore(</span><span style="color: #fed136; font-weight: bold">this</span><span style="color: #ffffff">.canvas,</span> <span style="color: #ffffff">document.body.childNodes[</span><span style="color: #0086f7; font-weight: bold">0</span><span style="color: #ffffff">])</span>    
<span style="color: #ffffff">}</span>
</pre></div></p>

<p>Worth noting is that the &ldquo;canvas&rdquo; element comes with a built-in object called &ldquo;getContext(&ldquo;2d&rdquo;)&rdquo; which contains the properties and methods for drawing. The second to last line calls this object. The last line inserts the canvas in the first child of body, so our canvas will always be at the top of the page.</p>

<p>Now to make sure it is there we could add CSS properties for border and background:<br>
</p>

<p><div style="background: #111111; overflow:auto;width:auto;border:solid gray;border-width:.1em .1em .1em .8em;padding:.2em .6em;"><pre style="margin: 0; line-height: 125%"><span style="color: #fed136; font-weight: bold">canvas</span> <span style="color: #ffffff">{</span>
<span style="color: #fed136; font-weight: bold">background-color</span><span style="color: #ffffff">:</span> <span style="color: #0086f7; font-weight: bold">#f1f1f1</span><span style="color: #ffffff">;</span>
<span style="color: #fed136; font-weight: bold">border</span><span style="color: #ffffff">:</span> <span style="color: #0086f7; font-weight: bold">1px</span> <span style="color: #fed136; font-weight: bold">solid</span> <span style="color: #ffffff">black;</span>
<span style="color: #ffffff">}</span>
</pre></div></p>

<p><b><u>2) Adding components</u></b></p>

<p>Time to populate the canvas, we shall do this by creating a component constructor and calling it to create our elements:<br>
</p>

<p><div style="background: #111111; overflow:auto;width:auto;border:solid gray;border-width:.1em .1em .1em .8em;padding:.2em .6em;"><pre style="margin: 0; line-height: 125%"><span style="color: #fed136; font-weight: bold">function</span> <span style="color: #ffffff">component(width,</span> <span style="color: #ffffff">height,</span> <span style="color: #ffffff">color,</span> <span style="color: #ffffff">x,</span> <span style="color: #ffffff">y)</span> <span style="color: #ffffff">{</span>
    <span style="color: #fed136; font-weight: bold">this</span><span style="color: #ffffff">.width</span> <span style="color: #ffffff">=</span> <span style="color: #ffffff">width;</span>
    <span style="color: #fed136; font-weight: bold">this</span><span style="color: #ffffff">.height</span> <span style="color: #ffffff">=</span> <span style="color: #ffffff">height;</span>
    <span style="color: #fed136; font-weight: bold">this</span><span style="color: #ffffff">.x</span> <span style="color: #ffffff">=</span> <span style="color: #ffffff">x;</span>
    <span style="color: #fed136; font-weight: bold">this</span><span style="color: #ffffff">.y</span> <span style="color: #ffffff">=</span> <span style="color: #ffffff">y;</span> 
    <span style="color: #ffffff">ctx</span> <span style="color: #ffffff">=</span> <span style="color: #ffffff">gameArea.context;</span>
    <span style="color: #ffffff">ctx.fillStyle</span> <span style="color: #ffffff">=</span> <span style="color: #ffffff">color;</span>
    <span style="color: #ffffff">ctx.fillRect(</span><span style="color: #fed136; font-weight: bold">this</span><span style="color: #ffffff">.x,</span> <span style="color: #fed136; font-weight: bold">this</span><span style="color: #ffffff">.y,</span> <span style="color: #fed136; font-weight: bold">this</span><span style="color: #ffffff">.width,</span> <span style="color: #fed136; font-weight: bold">this</span><span style="color: #ffffff">.height);</span>
<span style="color: #ffffff">}</span>
</pre></div></p>

<p>Now we also need to create the component, we do this in our start game function, which after this should now look like this:<br><p>

<p>
<div style="background: #111111; overflow:auto;width:auto;border:solid gray;border-width:.1em .1em .1em .8em;padding:.2em .6em;"><pre style="margin: 0; line-height: 125%"><span style="color: #fed136; font-weight: bold">var</span> <span style="color: #ffffff">gamePiece</span>
<span style="color: #fed136; font-weight: bold">function</span> <span style="color: #ffffff">startGame()</span> <span style="color: #ffffff">{</span>
    <span style="color: #ffffff">gameArea.start();</span>
    <span style="color: #ffffff">gamePiece</span> <span style="color: #ffffff">=</span> <span style="color: #fed136; font-weight: bold">new</span> <span style="color: #ffffff">component(</span><span style="color: #0086f7; font-weight: bold">20</span><span style="color: #ffffff">,</span> <span style="color: #0086f7; font-weight: bold">20</span><span style="color: #ffffff">,</span> <span style="color: #0086d2">&quot;yellow&quot;</span><span style="color: #ffffff">,</span> <span style="color: #0086f7; font-weight: bold">10</span><span style="color: #ffffff">,</span> <span style="color: #0086f7; font-weight: bold">150</span><span style="color: #ffffff">);</span>
<span style="color: #ffffff">}</span>
</pre></div>

</p>

<p>This will display a 20 by 20 pixels yellow object at the 10, 150 coordinates (slightly off the left edge, in the center). Feel free to modify these parameters to your liking.</p>

<p>Now that we have our very first &ldquo;mobile&rdquo; element it is time to learn how to move stuff. It is simple, we erase everything and then redraw in the updated positions, and no, I am NOT kidding. Keep in mind that the computer moves extremely fast so we can set very high refresh rates. Updating the canvas every 20 milliseconds will mean having 50 refreshes per second, more than enough to be perceived as smooth movement by our brain. Why clear the area? Because otherwise everything will leave a trail and soon the canvas will transform in an expressionist painting, rather than a game board.</p>

<p>First, let&rsquo;s modify our component object and put the last 3 lines (which are related to drawing it) in our update function:<br>
</p>

<p>
<div style="background: #111111; overflow:auto;width:auto;border:solid gray;border-width:.1em .1em .1em .8em;padding:.2em .6em;"><pre style="margin: 0; line-height: 125%"><span style="color: #fed136; font-weight: bold">function</span> <span style="color: #ffffff">component(width,</span> <span style="color: #ffffff">height,</span> <span style="color: #ffffff">color,</span> <span style="color: #ffffff">x,</span> <span style="color: #ffffff">y)</span> <span style="color: #ffffff">{</span>
    <span style="color: #fed136; font-weight: bold">this</span><span style="color: #ffffff">.width</span> <span style="color: #ffffff">=</span> <span style="color: #ffffff">width;</span>
    <span style="color: #fed136; font-weight: bold">this</span><span style="color: #ffffff">.height</span> <span style="color: #ffffff">=</span> <span style="color: #ffffff">height;</span>
    <span style="color: #fed136; font-weight: bold">this</span><span style="color: #ffffff">.x</span> <span style="color: #ffffff">=</span> <span style="color: #ffffff">x;</span>
    <span style="color: #fed136; font-weight: bold">this</span><span style="color: #ffffff">.y</span> <span style="color: #ffffff">=</span> <span style="color: #ffffff">y;</span> 
  <span style="color: #fed136; font-weight: bold">this</span><span style="color: #ffffff">.update</span> <span style="color: #ffffff">=</span> <span style="color: #fed136; font-weight: bold">function</span><span style="color: #ffffff">(){</span>
    <span style="color: #ffffff">ctx</span> <span style="color: #ffffff">=</span> <span style="color: #ffffff">gameArea.context;</span>
    <span style="color: #ffffff">ctx.fillStyle</span> <span style="color: #ffffff">=</span> <span style="color: #ffffff">color;</span>
    <span style="color: #ffffff">ctx.fillRect(</span><span style="color: #fed136; font-weight: bold">this</span><span style="color: #ffffff">.x,</span> <span style="color: #fed136; font-weight: bold">this</span><span style="color: #ffffff">.y,</span> <span style="color: #fed136; font-weight: bold">this</span><span style="color: #ffffff">.width,</span> <span style="color: #fed136; font-weight: bold">this</span><span style="color: #ffffff">.height);</span>
  <span style="color: #ffffff">}</span>
<span style="color: #ffffff">}</span>
</pre></div>
</p>

<p>Second, modify the game area variable to clear everything. While we&rsquo;re at it, also set the update interval to 20ms.</p>

<p>
<div style="background: #111111; overflow:auto;width:auto;border:solid gray;border-width:.1em .1em .1em .8em;padding:.2em .6em;"><pre style="margin: 0; line-height: 125%"><span style="color: #fed136; font-weight: bold">var</span> <span style="color: #ffffff">gameArea</span> <span style="color: #ffffff">=</span> <span style="color: #ffffff">{</span>
    <span style="color: #ffffff">canvas</span> <span style="color: #ffffff">:</span> <span style="color: #ffffff">document.createElement(</span><span style="color: #0086d2">&quot;canvas&quot;</span><span style="color: #ffffff">),</span>
    <span style="color: #ffffff">start</span> <span style="color: #ffffff">:</span> <span style="color: #fed136; font-weight: bold">function</span><span style="color: #ffffff">()</span> <span style="color: #ffffff">{</span>
        <span style="color: #fed136; font-weight: bold">this</span><span style="color: #ffffff">.canvas.width</span> <span style="color: #ffffff">=</span> <span style="color: #0086f7; font-weight: bold">500</span><span style="color: #ffffff">;</span>
        <span style="color: #fed136; font-weight: bold">this</span><span style="color: #ffffff">.canvas.height</span> <span style="color: #ffffff">=</span> <span style="color: #0086f7; font-weight: bold">300</span><span style="color: #ffffff">;</span>
        <span style="color: #fed136; font-weight: bold">this</span><span style="color: #ffffff">.context</span> <span style="color: #ffffff">=</span> <span style="color: #fed136; font-weight: bold">this</span><span style="color: #ffffff">.canvas.getContext(</span><span style="color: #0086d2">&quot;2d&quot;</span><span style="color: #ffffff">);</span>
        <span style="color: #ffffff">document.body.insertBefore(</span><span style="color: #fed136; font-weight: bold">this</span><span style="color: #ffffff">.canvas,</span> <span style="color: #ffffff">document.body.childNodes[</span><span style="color: #0086f7; font-weight: bold">0</span><span style="color: #ffffff">]);</span>
        <span style="color: #fed136; font-weight: bold">this</span><span style="color: #ffffff">.interval</span> <span style="color: #ffffff">=</span> <span style="color: #ffffff">setInterval(updateGameArea,</span> <span style="color: #0086f7; font-weight: bold">20</span><span style="color: #ffffff">);</span>
    <span style="color: #ffffff">},</span>
    <span style="color: #ffffff">clear</span> <span style="color: #ffffff">:</span> <span style="color: #fed136; font-weight: bold">function</span><span style="color: #ffffff">()</span> <span style="color: #ffffff">{</span>
        <span style="color: #fed136; font-weight: bold">this</span><span style="color: #ffffff">.context.clearRect(</span><span style="color: #0086f7; font-weight: bold">0</span><span style="color: #ffffff">,</span> <span style="color: #0086f7; font-weight: bold">0</span><span style="color: #ffffff">,</span> <span style="color: #fed136; font-weight: bold">this</span><span style="color: #ffffff">.canvas.width,</span> <span style="color: #fed136; font-weight: bold">this</span><span style="color: #ffffff">.canvas.height);</span>
    <span style="color: #ffffff">}</span>
<span style="color: #ffffff">}</span>
</pre></div>

</p>

<p>New additions were put in bold. In the setInterval call, you can see an inexistent &ldquo;updateGameArea&rdquo;, not for long, we shall add it now:</p>

<p>
<div style="background: #111111; overflow:auto;width:auto;border:solid gray;border-width:.1em .1em .1em .8em;padding:.2em .6em;"><pre style="margin: 0; line-height: 125%"><span style="color: #fed136; font-weight: bold">function</span> <span style="color: #ffffff">updateGameArea()</span> <span style="color: #ffffff">{</span>
    <span style="color: #ffffff">gameArea.clear();</span>
    <span style="color: #ffffff">gamePiece.update();</span>
<span style="color: #ffffff">}</span>
</pre></div></p>

<p>For this function, we clear the whole canvas, but obviously redraw only the elements. Note that if there are more than one component, you will need to call update on every single one of them.</p>

<p><b><u>3) Creating obstacles</u></b></p>

<p>Time to create these iconic &ldquo;gates&rdquo;, for this we should each time create 2 objects, one for the upper part, one for the lower part, we also need to provide some constraints, like the minimum and maximum heights and gaps, as well as an array to hold the obstacles. At the same time we should also make them appear at regular intervals, and make sure if we collide with them that the game ends&#8230;&#8230;aaand that&rsquo;s already quite the list. Let&rsquo;s start with the timing first: we can count the number of frames that have passed, and when a certain number is reached, a new obstacle appears. Since the board is reset at constant intervals, the obstacles will appear at constant intervals&#8230; Simple!</p>

<p>In the start function add:<br>
</p>

<p>
	<div style="background: #111111; overflow:auto;width:auto;border:solid gray;border-width:.1em .1em .1em .8em;padding:.2em .6em;"><pre style="margin: 0; line-height: 125%">    <span style="color: #ffffff">start</span> <span style="color: #ffffff">:</span> <span style="color: #fed136; font-weight: bold">function</span><span style="color: #ffffff">()</span> <span style="color: #ffffff">{</span>
        <span style="color: #fed136; font-weight: bold">this</span><span style="color: #ffffff">.canvas.width</span> <span style="color: #ffffff">=</span> <span style="color: #0086f7; font-weight: bold">500</span><span style="color: #ffffff">;</span>
        <span style="color: #fed136; font-weight: bold">this</span><span style="color: #ffffff">.canvas.height</span> <span style="color: #ffffff">=</span> <span style="color: #0086f7; font-weight: bold">300</span><span style="color: #ffffff">;</span>
        <span style="color: #fed136; font-weight: bold">this</span><span style="color: #ffffff">.context</span> <span style="color: #ffffff">=</span> <span style="color: #fed136; font-weight: bold">this</span><span style="color: #ffffff">.canvas.getContext(</span><span style="color: #0086d2">&quot;2d&quot;</span><span style="color: #ffffff">);</span>
        <span style="color: #fed136; font-weight: bold">this</span><span style="color: #ffffff">.frameNo</span> <span style="color: #ffffff">=</span> <span style="color: #0086f7; font-weight: bold">0</span><span style="color: #ffffff">;</span>
        <span style="color: #ffffff">document.body.insertBefore(</span><span style="color: #fed136; font-weight: bold">this</span><span style="color: #ffffff">.canvas,</span> <span style="color: #ffffff">document.body.childNodes[</span><span style="color: #0086f7; font-weight: bold">0</span><span style="color: #ffffff">]);</span>
        <span style="color: #fed136; font-weight: bold">this</span><span style="color: #ffffff">.interval</span> <span style="color: #ffffff">=</span> <span style="color: #ffffff">setInterval(updateGameArea,</span> <span style="color: #0086f7; font-weight: bold">20</span><span style="color: #ffffff">);</span>
    <span style="color: #ffffff">}</span>
</pre></div></p>


<p>Now we also add:</p>

<p><div style="background: #111111; overflow:auto;width:auto;border:solid gray;border-width:.1em .1em .1em .8em;padding:.2em .6em;"><pre style="margin: 0; line-height: 125%"><span style="color: #fed136; font-weight: bold">function</span> <span style="color: #ffffff">everyinterval(n)</span> <span style="color: #ffffff">{</span>
    <span style="color: #fed136; font-weight: bold">if</span> <span style="color: #ffffff">((gameArea.frameNo</span> <span style="color: #ffffff">/</span> <span style="color: #ffffff">n)</span> <span style="color: #ffffff">%</span> <span style="color: #0086f7; font-weight: bold">1</span> <span style="color: #ffffff">==</span> <span style="color: #0086f7; font-weight: bold">0</span><span style="color: #ffffff">)</span> <span style="color: #ffffff">{</span><span style="color: #fed136; font-weight: bold">return</span> <span style="color: #fed136; font-weight: bold">true</span><span style="color: #ffffff">;}</span>
    <span style="color: #fed136; font-weight: bold">return</span> <span style="color: #fed136; font-weight: bold">false</span><span style="color: #ffffff">;</span>
<span style="color: #ffffff">}</span>
</pre></div></p>

<p>This function returns true if our frame number equals the predetermined n. Now time to add obstacles.</p>

<p><div style="background: #111111; overflow:auto;width:auto;border:solid gray;border-width:.1em .1em .1em .8em;padding:.2em .6em;"><pre style="margin: 0; line-height: 125%"><span style="color: #fed136; font-weight: bold">var</span> <span style="color: #ffffff">obstacles</span> <span style="color: #ffffff">=</span> <span style="color: #ffffff">[];</span>
</pre></div></p>

<p>Create the storage space, now new object parameters and at the same time finally implement the appearance at certain frames. When we run the update game area, we add:</p>

<p><div style="background: #111111; overflow:auto;width:auto;border:solid gray;border-width:.1em .1em .1em .8em;padding:.2em .6em;"><pre style="margin: 0; line-height: 125%"><span style="color: #fed136; font-weight: bold">function</span> <span style="color: #ffffff">updateGameArea()</span> <span style="color: #ffffff">{</span>
   <span style="color: #fed136; font-weight: bold">var</span> <span style="color: #ffffff">x,</span> <span style="color: #ffffff">height,</span> <span style="color: #ffffff">gap,</span> <span style="color: #ffffff">minHeight,</span> <span style="color: #ffffff">maxHeight,</span> <span style="color: #ffffff">minGap,</span> <span style="color: #ffffff">maxGap;</span>
    <span style="color: #ffffff">gameArea.clear();</span>
    <span style="color: #ffffff">gameArea.frameNo</span> <span style="color: #ffffff">+=</span> <span style="color: #0086f7; font-weight: bold">1</span><span style="color: #ffffff">;</span>
    <span style="color: #fed136; font-weight: bold">if</span> <span style="color: #ffffff">(gameArea.frameNo</span> <span style="color: #ffffff">==</span> <span style="color: #0086f7; font-weight: bold">1</span> <span style="color: #ffffff">||</span> <span style="color: #ffffff">everyinterval(</span><span style="color: #0086f7; font-weight: bold">100</span><span style="color: #ffffff">))</span> <span style="color: #ffffff">{</span>
        <span style="color: #ffffff">x</span> <span style="color: #ffffff">=</span> <span style="color: #ffffff">gameArea.canvas.width;</span>
        <span style="color: #ffffff">minHeight</span> <span style="color: #ffffff">=</span> <span style="color: #0086f7; font-weight: bold">20</span><span style="color: #ffffff">;</span>
        <span style="color: #ffffff">maxHeight</span> <span style="color: #ffffff">=</span> <span style="color: #0086f7; font-weight: bold">200</span><span style="color: #ffffff">;</span>
        <span style="color: #ffffff">height</span> <span style="color: #ffffff">=</span> <span style="color: #ffffff">Math.floor(Math.random()*(maxHeight-minHeight+</span><span style="color: #0086f7; font-weight: bold">1</span><span style="color: #ffffff">)+minHeight);</span>
        <span style="color: #ffffff">minGap</span> <span style="color: #ffffff">=</span> <span style="color: #0086f7; font-weight: bold">50</span><span style="color: #ffffff">;</span>
        <span style="color: #ffffff">maxGap</span> <span style="color: #ffffff">=</span> <span style="color: #0086f7; font-weight: bold">200</span><span style="color: #ffffff">;</span>
        <span style="color: #ffffff">gap</span> <span style="color: #ffffff">=</span> <span style="color: #ffffff">Math.floor(Math.random()*(maxGap-minGap+</span><span style="color: #0086f7; font-weight: bold">1</span><span style="color: #ffffff">)+minGap);</span>
        <span style="color: #ffffff">obstacles.push(</span><span style="color: #fed136; font-weight: bold">new</span> <span style="color: #ffffff">component(</span><span style="color: #0086f7; font-weight: bold">10</span><span style="color: #ffffff">,</span> <span style="color: #ffffff">height,</span> <span style="color: #0086d2">&quot;green&quot;</span><span style="color: #ffffff">,</span> <span style="color: #ffffff">x,</span> <span style="color: #0086f7; font-weight: bold">0</span><span style="color: #ffffff">));</span>
        <span style="color: #ffffff">obstacles.push(</span><span style="color: #fed136; font-weight: bold">new</span> <span style="color: #ffffff">component(</span><span style="color: #0086f7; font-weight: bold">10</span><span style="color: #ffffff">,</span> <span style="color: #ffffff">x</span> <span style="color: #ffffff">-</span> <span style="color: #ffffff">height</span> <span style="color: #ffffff">-</span> <span style="color: #ffffff">gap,</span> <span style="color: #0086d2">&quot;green&quot;</span><span style="color: #ffffff">,</span> <span style="color: #ffffff">x,</span> <span style="color: #ffffff">height</span> <span style="color: #ffffff">+</span> <span style="color: #ffffff">gap));</span>
    <span style="color: #ffffff">}</span>
    <span style="color: #fed136; font-weight: bold">for</span> <span style="color: #ffffff">(i</span> <span style="color: #ffffff">=</span> <span style="color: #0086f7; font-weight: bold">0</span><span style="color: #ffffff">;</span> <span style="color: #ffffff">i</span> <span style="color: #ffffff">&lt;</span> <span style="color: #ffffff">obstacles.length;</span> <span style="color: #ffffff">i</span> <span style="color: #ffffff">+=</span> <span style="color: #0086f7; font-weight: bold">1</span><span style="color: #ffffff">)</span> <span style="color: #ffffff">{</span>
        <span style="color: #ffffff">obstacles[i].x</span> <span style="color: #ffffff">+=</span> <span style="color: #ffffff">-</span><span style="color: #0086f7; font-weight: bold">1</span><span style="color: #ffffff">;</span>
        <span style="color: #ffffff">obstacles[i].update();</span>
    <span style="color: #ffffff">}</span>
    <span style="color: #ffffff">gamePiece.update();</span>
<span style="color: #ffffff">}</span>
</pre></div></p>

<p>Wow, that&rsquo;s a lot of new stuff. First each time we run the update function we increase the frame count by 1, then every 100 intervals (2 seconds) we define 2 new obstacles with randomized positions and sizes. Finally, we iterate through the entire obstacles array and update the position of every obstacle in order to be closer to the left edge.</p>

<p>And now we just have to add a collision detection system, to stop the game once our square collides with an obstacle. For this we add another function into our component constructor to check if 2 objects overlap, return true if they do, and false if they don&rsquo;t:<br>
</p>

<p><div style="background: #111111; overflow:auto;width:auto;border:solid gray;border-width:.1em .1em .1em .8em;padding:.2em .6em;"><pre style="margin: 0; line-height: 125%"><span style="color: #fed136; font-weight: bold">function</span> <span style="color: #ffffff">component(width,</span> <span style="color: #ffffff">height,</span> <span style="color: #ffffff">color,</span> <span style="color: #ffffff">x,</span> <span style="color: #ffffff">y)</span> <span style="color: #ffffff">{</span>
    <span style="color: #fed136; font-weight: bold">this</span><span style="color: #ffffff">.width</span> <span style="color: #ffffff">=</span> <span style="color: #ffffff">width;</span>
    <span style="color: #fed136; font-weight: bold">this</span><span style="color: #ffffff">.height</span> <span style="color: #ffffff">=</span> <span style="color: #ffffff">height;</span>
    <span style="color: #fed136; font-weight: bold">this</span><span style="color: #ffffff">.x</span> <span style="color: #ffffff">=</span> <span style="color: #ffffff">x;</span>
    <span style="color: #fed136; font-weight: bold">this</span><span style="color: #ffffff">.y</span> <span style="color: #ffffff">=</span> <span style="color: #ffffff">y;</span> 
  <span style="color: #fed136; font-weight: bold">this</span><span style="color: #ffffff">.update</span> <span style="color: #ffffff">=</span> <span style="color: #fed136; font-weight: bold">function</span><span style="color: #ffffff">(){</span>
    <span style="color: #ffffff">ctx</span> <span style="color: #ffffff">=</span> <span style="color: #ffffff">gameArea.context;</span>
    <span style="color: #ffffff">ctx.fillStyle</span> <span style="color: #ffffff">=</span> <span style="color: #ffffff">color;</span>
    <span style="color: #ffffff">ctx.fillRect(</span><span style="color: #fed136; font-weight: bold">this</span><span style="color: #ffffff">.x,</span> <span style="color: #fed136; font-weight: bold">this</span><span style="color: #ffffff">.y,</span> <span style="color: #fed136; font-weight: bold">this</span><span style="color: #ffffff">.width,</span> <span style="color: #fed136; font-weight: bold">this</span><span style="color: #ffffff">.height);</span>
  <span style="color: #ffffff">}</span>
      <span style="color: #fed136; font-weight: bold">this</span><span style="color: #ffffff">.crashWith</span> <span style="color: #ffffff">=</span> <span style="color: #fed136; font-weight: bold">function</span><span style="color: #ffffff">(otherobj)</span> <span style="color: #ffffff">{</span>
        <span style="color: #fed136; font-weight: bold">var</span> <span style="color: #ffffff">myleft</span> <span style="color: #ffffff">=</span> <span style="color: #fed136; font-weight: bold">this</span><span style="color: #ffffff">.x;</span>
        <span style="color: #fed136; font-weight: bold">var</span> <span style="color: #ffffff">myright</span> <span style="color: #ffffff">=</span> <span style="color: #fed136; font-weight: bold">this</span><span style="color: #ffffff">.x</span> <span style="color: #ffffff">+</span> <span style="color: #ffffff">(</span><span style="color: #fed136; font-weight: bold">this</span><span style="color: #ffffff">.width);</span>
        <span style="color: #fed136; font-weight: bold">var</span> <span style="color: #ffffff">mytop</span> <span style="color: #ffffff">=</span> <span style="color: #fed136; font-weight: bold">this</span><span style="color: #ffffff">.y;</span>
        <span style="color: #fed136; font-weight: bold">var</span> <span style="color: #ffffff">mybottom</span> <span style="color: #ffffff">=</span> <span style="color: #fed136; font-weight: bold">this</span><span style="color: #ffffff">.y</span> <span style="color: #ffffff">+</span> <span style="color: #ffffff">(</span><span style="color: #fed136; font-weight: bold">this</span><span style="color: #ffffff">.height);</span>
        <span style="color: #fed136; font-weight: bold">var</span> <span style="color: #ffffff">otherleft</span> <span style="color: #ffffff">=</span> <span style="color: #ffffff">otherobj.x;</span>
        <span style="color: #fed136; font-weight: bold">var</span> <span style="color: #ffffff">otherright</span> <span style="color: #ffffff">=</span> <span style="color: #ffffff">otherobj.x</span> <span style="color: #ffffff">+</span> <span style="color: #ffffff">(otherobj.width);</span>
        <span style="color: #fed136; font-weight: bold">var</span> <span style="color: #ffffff">othertop</span> <span style="color: #ffffff">=</span> <span style="color: #ffffff">otherobj.y;</span>
        <span style="color: #fed136; font-weight: bold">var</span> <span style="color: #ffffff">otherbottom</span> <span style="color: #ffffff">=</span> <span style="color: #ffffff">otherobj.y</span> <span style="color: #ffffff">+</span> <span style="color: #ffffff">(otherobj.height);</span>
        <span style="color: #fed136; font-weight: bold">var</span> <span style="color: #ffffff">crash</span> <span style="color: #ffffff">=</span> <span style="color: #fed136; font-weight: bold">true</span><span style="color: #ffffff">;</span>
        <span style="color: #fed136; font-weight: bold">if</span> <span style="color: #ffffff">((mybottom</span> <span style="color: #ffffff">&lt;</span> <span style="color: #ffffff">othertop)</span> <span style="color: #ffffff">||</span>
               <span style="color: #ffffff">(mytop</span> <span style="color: #ffffff">&gt;</span> <span style="color: #ffffff">otherbottom)</span> <span style="color: #ffffff">||</span>
               <span style="color: #ffffff">(myright</span> <span style="color: #ffffff">&lt;</span> <span style="color: #ffffff">otherleft)</span> <span style="color: #ffffff">||</span>
               <span style="color: #ffffff">(myleft</span> <span style="color: #ffffff">&gt;</span> <span style="color: #ffffff">otherright))</span> <span style="color: #ffffff">{</span>
           <span style="color: #ffffff">crash</span> <span style="color: #ffffff">=</span> <span style="color: #fed136; font-weight: bold">false</span><span style="color: #ffffff">;</span>
        <span style="color: #ffffff">}</span>
        <span style="color: #fed136; font-weight: bold">return</span> <span style="color: #ffffff">crash;</span>
    <span style="color: #ffffff">}</span>
<span style="color: #ffffff">}</span>
</pre></div></p>

<p>There is quite a lot going for this function, but it isn&rsquo;t really that difficult. It calculates from each object&rsquo;s x, y (coordinates of a corner), height, and width whether they overlap or not. If you are unsure how this work it may be better to take a sheet of paper and try to figure the collision detection on your own.</p>

<p>Now we will add to the gameArea a function that stops refreshing the canvas, which we will call if a collision was detected.<br>
</p>

<p>
<div style="background: #111111; overflow:auto;width:auto;border:solid gray;border-width:.1em .1em .1em .8em;padding:.2em .6em;"><pre style="margin: 0; line-height: 125%"><span style="color: #fed136; font-weight: bold">var</span> <span style="color: #ffffff">gameArea</span> <span style="color: #ffffff">=</span> <span style="color: #ffffff">{</span>
    <span style="color: #ffffff">canvas</span> <span style="color: #ffffff">:</span> <span style="color: #ffffff">document.createElement(</span><span style="color: #0086d2">&quot;canvas&quot;</span><span style="color: #ffffff">),</span>
    <span style="color: #ffffff">start</span> <span style="color: #ffffff">:</span> <span style="color: #fed136; font-weight: bold">function</span><span style="color: #ffffff">()</span> <span style="color: #ffffff">{</span>
        <span style="color: #fed136; font-weight: bold">this</span><span style="color: #ffffff">.canvas.width</span> <span style="color: #ffffff">=</span> <span style="color: #0086f7; font-weight: bold">500</span><span style="color: #ffffff">;</span>
        <span style="color: #fed136; font-weight: bold">this</span><span style="color: #ffffff">.canvas.height</span> <span style="color: #ffffff">=</span> <span style="color: #0086f7; font-weight: bold">300</span><span style="color: #ffffff">;</span>
        <span style="color: #fed136; font-weight: bold">this</span><span style="color: #ffffff">.context</span> <span style="color: #ffffff">=</span> <span style="color: #fed136; font-weight: bold">this</span><span style="color: #ffffff">.canvas.getContext(</span><span style="color: #0086d2">&quot;2d&quot;</span><span style="color: #ffffff">);</span>
        <span style="color: #fed136; font-weight: bold">this</span><span style="color: #ffffff">.frameNo</span> <span style="color: #ffffff">=</span> <span style="color: #0086f7; font-weight: bold">0</span><span style="color: #ffffff">;</span>
        <span style="color: #ffffff">document.body.insertBefore(</span><span style="color: #fed136; font-weight: bold">this</span><span style="color: #ffffff">.canvas,</span> <span style="color: #ffffff">document.body.childNodes[</span><span style="color: #0086f7; font-weight: bold">0</span><span style="color: #ffffff">]);</span>
        <span style="color: #fed136; font-weight: bold">this</span><span style="color: #ffffff">.interval</span> <span style="color: #ffffff">=</span> <span style="color: #ffffff">setInterval(updateGameArea,</span> <span style="color: #0086f7; font-weight: bold">20</span><span style="color: #ffffff">);</span>
    <span style="color: #ffffff">},</span>
    <span style="color: #ffffff">clear</span> <span style="color: #ffffff">:</span> <span style="color: #fed136; font-weight: bold">function</span><span style="color: #ffffff">()</span> <span style="color: #ffffff">{</span>
        <span style="color: #fed136; font-weight: bold">this</span><span style="color: #ffffff">.context.clearRect(</span><span style="color: #0086f7; font-weight: bold">0</span><span style="color: #ffffff">,</span> <span style="color: #0086f7; font-weight: bold">0</span><span style="color: #ffffff">,</span> <span style="color: #fed136; font-weight: bold">this</span><span style="color: #ffffff">.canvas.width,</span> <span style="color: #fed136; font-weight: bold">this</span><span style="color: #ffffff">.canvas.height);</span>
    <span style="color: #ffffff">},</span>
    <span style="color: #ffffff">stop</span> <span style="color: #ffffff">:</span> <span style="color: #fed136; font-weight: bold">function</span><span style="color: #ffffff">()</span> <span style="color: #ffffff">{</span>
        <span style="color: #ffffff">clearInterval(</span><span style="color: #fed136; font-weight: bold">this</span><span style="color: #ffffff">.interval);</span>
    <span style="color: #ffffff">}</span>
<span style="color: #ffffff">}</span>
<span style="color: #ffffff">&lt;/code&gt;</span>
<span style="color: #fed136; font-weight: bold">function</span> <span style="color: #ffffff">updateGameArea()</span> <span style="color: #ffffff">{</span>
     <span style="color: #fed136; font-weight: bold">var</span> <span style="color: #ffffff">x,</span> <span style="color: #ffffff">height,</span> <span style="color: #ffffff">gap,</span> <span style="color: #ffffff">minHeight,</span> <span style="color: #ffffff">maxHeight,</span> <span style="color: #ffffff">minGap,</span> <span style="color: #ffffff">maxGap;</span>
    <span style="color: #fed136; font-weight: bold">for</span> <span style="color: #ffffff">(i</span> <span style="color: #ffffff">=</span> <span style="color: #0086f7; font-weight: bold">0</span><span style="color: #ffffff">;</span> <span style="color: #ffffff">i</span> <span style="color: #ffffff">&lt;</span> <span style="color: #ffffff">obstacles.length;</span> <span style="color: #ffffff">i</span> <span style="color: #ffffff">+=</span> <span style="color: #0086f7; font-weight: bold">1</span><span style="color: #ffffff">)</span> <span style="color: #ffffff">{</span>
        <span style="color: #fed136; font-weight: bold">if</span> <span style="color: #ffffff">(gamePiece.crashWith(obstacles[i]))</span> <span style="color: #ffffff">{</span>
            <span style="color: #ffffff">gameArea.stop();</span>
            <span style="color: #fed136; font-weight: bold">return</span><span style="color: #ffffff">;</span>
        <span style="color: #ffffff">}</span> 
    <span style="color: #ffffff">}</span>
    <span style="color: #ffffff">gameArea.clear();</span>
    <span style="color: #ffffff">gameArea.frameNo</span> <span style="color: #ffffff">+=</span> <span style="color: #0086f7; font-weight: bold">1</span><span style="color: #ffffff">;</span>
    <span style="color: #fed136; font-weight: bold">if</span> <span style="color: #ffffff">(gameArea.frameNo</span> <span style="color: #ffffff">==</span> <span style="color: #0086f7; font-weight: bold">1</span> <span style="color: #ffffff">||</span> <span style="color: #ffffff">everyinterval(</span><span style="color: #0086f7; font-weight: bold">100</span><span style="color: #ffffff">))</span> <span style="color: #ffffff">{</span>
        <span style="color: #ffffff">x</span> <span style="color: #ffffff">=</span> <span style="color: #ffffff">gameArea.canvas.width;</span>
        <span style="color: #ffffff">minHeight</span> <span style="color: #ffffff">=</span> <span style="color: #0086f7; font-weight: bold">20</span><span style="color: #ffffff">;</span>
        <span style="color: #ffffff">maxHeight</span> <span style="color: #ffffff">=</span> <span style="color: #0086f7; font-weight: bold">200</span><span style="color: #ffffff">;</span>
        <span style="color: #ffffff">height</span> <span style="color: #ffffff">=</span> <span style="color: #ffffff">Math.floor(Math.random()*(maxHeight-minHeight+</span><span style="color: #0086f7; font-weight: bold">1</span><span style="color: #ffffff">)+minHeight);</span>
        <span style="color: #ffffff">minGap</span> <span style="color: #ffffff">=</span> <span style="color: #0086f7; font-weight: bold">50</span><span style="color: #ffffff">;</span>
        <span style="color: #ffffff">maxGap</span> <span style="color: #ffffff">=</span> <span style="color: #0086f7; font-weight: bold">200</span><span style="color: #ffffff">;</span>
        <span style="color: #ffffff">gap</span> <span style="color: #ffffff">=</span> <span style="color: #ffffff">Math.floor(Math.random()*(maxGap-minGap+</span><span style="color: #0086f7; font-weight: bold">1</span><span style="color: #ffffff">)+minGap);</span>
        <span style="color: #ffffff">obstacles.push(</span><span style="color: #fed136; font-weight: bold">new</span> <span style="color: #ffffff">component(</span><span style="color: #0086f7; font-weight: bold">10</span><span style="color: #ffffff">,</span> <span style="color: #ffffff">height,</span> <span style="color: #0086d2">&quot;green&quot;</span><span style="color: #ffffff">,</span> <span style="color: #ffffff">x,</span> <span style="color: #0086f7; font-weight: bold">0</span><span style="color: #ffffff">));</span>
        <span style="color: #ffffff">obstacles.push(</span><span style="color: #fed136; font-weight: bold">new</span> <span style="color: #ffffff">component(</span><span style="color: #0086f7; font-weight: bold">10</span><span style="color: #ffffff">,</span> <span style="color: #ffffff">x</span> <span style="color: #ffffff">-</span> <span style="color: #ffffff">height</span> <span style="color: #ffffff">-</span> <span style="color: #ffffff">gap,</span> <span style="color: #0086d2">&quot;green&quot;</span><span style="color: #ffffff">,</span> <span style="color: #ffffff">x,</span> <span style="color: #ffffff">height</span> <span style="color: #ffffff">+</span> <span style="color: #ffffff">gap));</span>
    <span style="color: #ffffff">}</span>
    <span style="color: #fed136; font-weight: bold">for</span> <span style="color: #ffffff">(i</span> <span style="color: #ffffff">=</span> <span style="color: #0086f7; font-weight: bold">0</span><span style="color: #ffffff">;</span> <span style="color: #ffffff">i</span> <span style="color: #ffffff">&lt;</span> <span style="color: #ffffff">obstacles.length;</span> <span style="color: #ffffff">i</span> <span style="color: #ffffff">+=</span> <span style="color: #0086f7; font-weight: bold">1</span><span style="color: #ffffff">)</span> <span style="color: #ffffff">{</span>
        <span style="color: #ffffff">obstacles[i].x</span> <span style="color: #ffffff">+=</span> <span style="color: #ffffff">-</span><span style="color: #0086f7; font-weight: bold">1</span><span style="color: #ffffff">;</span>
        <span style="color: #ffffff">obstacles[i].update();</span>
    <span style="color: #ffffff">}</span>
    <span style="color: #ffffff">gamePiece.update();</span>
<span style="color: #ffffff">}</span>
</pre></div></p>

<p>We iterate through the existing obstacles. If any hits the object, the drawing stops.</p>

<p><b><u>4) Controls and gravity</b></u></p>

<p>Right now you might be thinking that the objects move towards the object, they collide and you lose, but there is currently no way to deal with this. We shall change this soon, but first we need to learn how to implement gravity. To this end we need to add 3 new variables and a whole new function to our &ldquo;component&rdquo; friend:<br>
</p>

<p><div style="background: #111111; overflow:auto;width:auto;border:solid gray;border-width:.1em .1em .1em .8em;padding:.2em .6em;"><pre style="margin: 0; line-height: 125%"><span style="color: #fed136; font-weight: bold">function</span> <span style="color: #ffffff">component(width,</span> <span style="color: #ffffff">height,</span> <span style="color: #ffffff">color,</span> <span style="color: #ffffff">x,</span> <span style="color: #ffffff">y)</span> <span style="color: #ffffff">{</span>
    <span style="color: #fed136; font-weight: bold">this</span><span style="color: #ffffff">.width</span> <span style="color: #ffffff">=</span> <span style="color: #ffffff">width;</span>
    <span style="color: #fed136; font-weight: bold">this</span><span style="color: #ffffff">.height</span> <span style="color: #ffffff">=</span> <span style="color: #ffffff">height;</span>
    <span style="color: #fed136; font-weight: bold">this</span><span style="color: #ffffff">.x</span> <span style="color: #ffffff">=</span> <span style="color: #ffffff">x;</span>
    <span style="color: #fed136; font-weight: bold">this</span><span style="color: #ffffff">.y</span> <span style="color: #ffffff">=</span> <span style="color: #ffffff">y;</span>
    <span style="color: #fed136; font-weight: bold">this</span><span style="color: #ffffff">.speedY</span> <span style="color: #ffffff">=</span> <span style="color: #0086f7; font-weight: bold">0</span><span style="color: #ffffff">;</span> 
    <span style="color: #fed136; font-weight: bold">this</span><span style="color: #ffffff">.gravity</span> <span style="color: #ffffff">=</span> <span style="color: #0086f7; font-weight: bold">0.05</span><span style="color: #ffffff">;</span>
    <span style="color: #fed136; font-weight: bold">this</span><span style="color: #ffffff">.gravitySpeed</span> <span style="color: #ffffff">=</span> <span style="color: #0086f7; font-weight: bold">0</span><span style="color: #ffffff">;</span>
    <span style="color: #fed136; font-weight: bold">this</span><span style="color: #ffffff">.update</span> <span style="color: #ffffff">=</span> <span style="color: #fed136; font-weight: bold">function</span><span style="color: #ffffff">(){</span>
      <span style="color: #ffffff">ctx</span> <span style="color: #ffffff">=</span> <span style="color: #ffffff">gameArea.context;</span>
      <span style="color: #ffffff">ctx.fillStyle</span> <span style="color: #ffffff">=</span> <span style="color: #ffffff">color;</span>
      <span style="color: #ffffff">ctx.fillRect(</span><span style="color: #fed136; font-weight: bold">this</span><span style="color: #ffffff">.x,</span> <span style="color: #fed136; font-weight: bold">this</span><span style="color: #ffffff">.y,</span> <span style="color: #fed136; font-weight: bold">this</span><span style="color: #ffffff">.width,</span> <span style="color: #fed136; font-weight: bold">this</span><span style="color: #ffffff">.height);</span>
    <span style="color: #ffffff">}</span>
    <span style="color: #fed136; font-weight: bold">this</span><span style="color: #ffffff">.crashWith</span> <span style="color: #ffffff">=</span> <span style="color: #fed136; font-weight: bold">function</span><span style="color: #ffffff">(otherobj)</span> <span style="color: #ffffff">{</span>
      <span style="color: #fed136; font-weight: bold">var</span> <span style="color: #ffffff">left</span> <span style="color: #ffffff">=</span> <span style="color: #fed136; font-weight: bold">this</span><span style="color: #ffffff">.x;</span>
      <span style="color: #fed136; font-weight: bold">var</span> <span style="color: #ffffff">right</span> <span style="color: #ffffff">=</span> <span style="color: #fed136; font-weight: bold">this</span><span style="color: #ffffff">.x</span> <span style="color: #ffffff">+</span> <span style="color: #ffffff">(</span><span style="color: #fed136; font-weight: bold">this</span><span style="color: #ffffff">.width);</span>
      <span style="color: #fed136; font-weight: bold">var</span> <span style="color: #ffffff">top</span> <span style="color: #ffffff">=</span> <span style="color: #fed136; font-weight: bold">this</span><span style="color: #ffffff">.y;</span>
      <span style="color: #fed136; font-weight: bold">var</span> <span style="color: #ffffff">bottom</span> <span style="color: #ffffff">=</span> <span style="color: #fed136; font-weight: bold">this</span><span style="color: #ffffff">.y</span> <span style="color: #ffffff">+</span> <span style="color: #ffffff">(</span><span style="color: #fed136; font-weight: bold">this</span><span style="color: #ffffff">.height);</span>
      <span style="color: #fed136; font-weight: bold">var</span> <span style="color: #ffffff">otherleft</span> <span style="color: #ffffff">=</span> <span style="color: #ffffff">otherobj.x;</span>
      <span style="color: #fed136; font-weight: bold">var</span> <span style="color: #ffffff">otherright</span> <span style="color: #ffffff">=</span> <span style="color: #ffffff">otherobj.x</span> <span style="color: #ffffff">+</span> <span style="color: #ffffff">(otherobj.width);</span>
      <span style="color: #fed136; font-weight: bold">var</span> <span style="color: #ffffff">othertop</span> <span style="color: #ffffff">=</span> <span style="color: #ffffff">otherobj.y;</span>
      <span style="color: #fed136; font-weight: bold">var</span> <span style="color: #ffffff">otherbottom</span> <span style="color: #ffffff">=</span> <span style="color: #ffffff">otherobj.y</span> <span style="color: #ffffff">+</span> <span style="color: #ffffff">(otherobj.height);</span>
      <span style="color: #fed136; font-weight: bold">var</span> <span style="color: #ffffff">crash</span> <span style="color: #ffffff">=</span> <span style="color: #fed136; font-weight: bold">true</span><span style="color: #ffffff">;</span>
      <span style="color: #fed136; font-weight: bold">if</span> <span style="color: #ffffff">((bottom</span> <span style="color: #ffffff">&lt;</span> <span style="color: #ffffff">othertop)</span> <span style="color: #ffffff">||</span>
             <span style="color: #ffffff">(top</span> <span style="color: #ffffff">&gt;</span> <span style="color: #ffffff">otherbottom)</span> <span style="color: #ffffff">||</span>
             <span style="color: #ffffff">(right</span> <span style="color: #ffffff">&lt;</span> <span style="color: #ffffff">otherleft)</span> <span style="color: #ffffff">||</span>
             <span style="color: #ffffff">(left</span> <span style="color: #ffffff">&gt;</span> <span style="color: #ffffff">otherright))</span> <span style="color: #ffffff">{</span>
                 <span style="color: #ffffff">crash</span> <span style="color: #ffffff">=</span> <span style="color: #fed136; font-weight: bold">false</span><span style="color: #ffffff">;</span>
                  <span style="color: #ffffff">}</span>
      <span style="color: #fed136; font-weight: bold">return</span> <span style="color: #ffffff">crash;</span>
    <span style="color: #ffffff">}</span>
    <span style="color: #fed136; font-weight: bold">this</span><span style="color: #ffffff">.newPos</span> <span style="color: #ffffff">=</span> <span style="color: #fed136; font-weight: bold">function</span><span style="color: #ffffff">()</span> <span style="color: #ffffff">{</span>
      <span style="color: #fed136; font-weight: bold">this</span><span style="color: #ffffff">.gravitySpeed</span> <span style="color: #ffffff">+=</span> <span style="color: #fed136; font-weight: bold">this</span><span style="color: #ffffff">.gravity;</span>
      <span style="color: #fed136; font-weight: bold">this</span><span style="color: #ffffff">.y</span> <span style="color: #ffffff">+=</span> <span style="color: #fed136; font-weight: bold">this</span><span style="color: #ffffff">.speedY</span> <span style="color: #ffffff">+</span> <span style="color: #fed136; font-weight: bold">this</span><span style="color: #ffffff">.gravitySpeed;</span> 
    <span style="color: #ffffff">}</span>
<span style="color: #ffffff">}</span>
</pre></div></p>

<p>This should hopefully be self-explanatory. Of course we also need to add the new function call to the update function.</p>

<p><div style="background: #111111; overflow:auto;width:auto;border:solid gray;border-width:.1em .1em .1em .8em;padding:.2em .6em;"><pre style="margin: 0; line-height: 125%"><span style="color: #ffffff">gamePiece.newPos();</span>
</pre></div></p>


<p>You should see now that the object falls through the screen, so we need to add a new function to prevent that.</p>

<p><div style="background: #111111; overflow:auto;width:auto;border:solid gray;border-width:.1em .1em .1em .8em;padding:.2em .6em;"><pre style="margin: 0; line-height: 125%">    <span style="color: #fed136; font-weight: bold">this</span><span style="color: #ffffff">.newPos</span> <span style="color: #ffffff">=</span> <span style="color: #fed136; font-weight: bold">function</span><span style="color: #ffffff">()</span> <span style="color: #ffffff">{</span>
      <span style="color: #fed136; font-weight: bold">this</span><span style="color: #ffffff">.gravitySpeed</span> <span style="color: #ffffff">+=</span> <span style="color: #fed136; font-weight: bold">this</span><span style="color: #ffffff">.gravity;</span>
      <span style="color: #fed136; font-weight: bold">this</span><span style="color: #ffffff">.y</span> <span style="color: #ffffff">+=</span> <span style="color: #fed136; font-weight: bold">this</span><span style="color: #ffffff">.speedY</span> <span style="color: #ffffff">+</span> <span style="color: #fed136; font-weight: bold">this</span><span style="color: #ffffff">.gravitySpeed;</span>
      <span style="color: #fed136; font-weight: bold">this</span><span style="color: #ffffff">.hitBottom();</span>
      <span style="color: #fed136; font-weight: bold">this</span><span style="color: #ffffff">.hitTop();</span>
    <span style="color: #ffffff">}</span>
    <span style="color: #fed136; font-weight: bold">this</span><span style="color: #ffffff">.hitBottom</span> <span style="color: #ffffff">=</span> <span style="color: #fed136; font-weight: bold">function</span><span style="color: #ffffff">()</span> <span style="color: #ffffff">{</span>
      <span style="color: #fed136; font-weight: bold">var</span> <span style="color: #ffffff">bottom</span> <span style="color: #ffffff">=</span> <span style="color: #ffffff">gameArea.canvas.height</span> <span style="color: #ffffff">-</span> <span style="color: #fed136; font-weight: bold">this</span><span style="color: #ffffff">.height;</span>
      <span style="color: #fed136; font-weight: bold">if</span> <span style="color: #ffffff">(</span><span style="color: #fed136; font-weight: bold">this</span><span style="color: #ffffff">.y</span> <span style="color: #ffffff">&gt;</span> <span style="color: #ffffff">bottom)</span> <span style="color: #ffffff">{</span>
          <span style="color: #fed136; font-weight: bold">this</span><span style="color: #ffffff">.y</span> <span style="color: #ffffff">=</span> <span style="color: #ffffff">bottom;</span>
      <span style="color: #ffffff">}</span>
    <span style="color: #ffffff">}</span>
    <span style="color: #fed136; font-weight: bold">this</span><span style="color: #ffffff">.hitTop</span> <span style="color: #ffffff">=</span> <span style="color: #fed136; font-weight: bold">function</span><span style="color: #ffffff">()</span> <span style="color: #ffffff">{</span>
      <span style="color: #fed136; font-weight: bold">var</span> <span style="color: #ffffff">top</span> <span style="color: #ffffff">=</span> <span style="color: #0086f7; font-weight: bold">0</span><span style="color: #ffffff">;</span>
      <span style="color: #fed136; font-weight: bold">if</span> <span style="color: #ffffff">(</span><span style="color: #fed136; font-weight: bold">this</span><span style="color: #ffffff">.y</span> <span style="color: #ffffff">&lt;</span> <span style="color: #ffffff">top)</span> <span style="color: #ffffff">{</span>
          <span style="color: #fed136; font-weight: bold">this</span><span style="color: #ffffff">.y</span> <span style="color: #ffffff">=</span> <span style="color: #0086f7; font-weight: bold">0</span><span style="color: #ffffff">;</span>
        <span style="color: #ffffff">}</span>
    <span style="color: #ffffff">}</span>
</pre></div></p>

<p>I have also taken the liberty to add a sister function for the top edge.</p>

<p>And now, the moment we&rsquo;ve all been waiting for, the actual input. For this we will need yet another function to change the acceleration of our object.<br>
</p>

<p><div style="background: #111111; overflow:auto;width:auto;border:solid gray;border-width:.1em .1em .1em .8em;padding:.2em .6em;"><pre style="margin: 0; line-height: 125%"><span style="color: #fed136; font-weight: bold">function</span> <span style="color: #ffffff">accelerate(n)</span> <span style="color: #ffffff">{</span>
    <span style="color: #ffffff">gamePiece.gravity</span> <span style="color: #ffffff">=</span> <span style="color: #ffffff">n;</span>
<span style="color: #ffffff">}</span>
</pre></div></p>

<p>And now we shall create an observer event which will log whether we press a key on our keyboard or not, for this demonstration we will bind the &ldquo;w&rdquo; key to the controls. This is done in the start function in gameArea:</p>

<p><div style="background: #111111; overflow:auto;width:auto;border:solid gray;border-width:.1em .1em .1em .8em;padding:.2em .6em;"><pre style="margin: 0; line-height: 125%"><span style="color: #ffffff">start</span> <span style="color: #ffffff">:</span> <span style="color: #fed136; font-weight: bold">function</span><span style="color: #ffffff">()</span> <span style="color: #ffffff">{</span>
        <span style="color: #fed136; font-weight: bold">this</span><span style="color: #ffffff">.canvas.width</span> <span style="color: #ffffff">=</span> <span style="color: #0086f7; font-weight: bold">500</span><span style="color: #ffffff">;</span>
        <span style="color: #fed136; font-weight: bold">this</span><span style="color: #ffffff">.canvas.height</span> <span style="color: #ffffff">=</span> <span style="color: #0086f7; font-weight: bold">300</span><span style="color: #ffffff">;</span>
        <span style="color: #fed136; font-weight: bold">this</span><span style="color: #ffffff">.context</span> <span style="color: #ffffff">=</span> <span style="color: #fed136; font-weight: bold">this</span><span style="color: #ffffff">.canvas.getContext(</span><span style="color: #0086d2">&quot;2d&quot;</span><span style="color: #ffffff">);</span>
        <span style="color: #fed136; font-weight: bold">this</span><span style="color: #ffffff">.frameNo</span> <span style="color: #ffffff">=</span> <span style="color: #0086f7; font-weight: bold">0</span><span style="color: #ffffff">;</span>
        <span style="color: #ffffff">document.body.insertBefore(</span><span style="color: #fed136; font-weight: bold">this</span><span style="color: #ffffff">.canvas,</span> <span style="color: #ffffff">document.body.childNodes[</span><span style="color: #0086f7; font-weight: bold">0</span><span style="color: #ffffff">]);</span>
        <span style="color: #fed136; font-weight: bold">this</span><span style="color: #ffffff">.interval</span> <span style="color: #ffffff">=</span> <span style="color: #ffffff">setInterval(updateGameArea,</span> <span style="color: #0086f7; font-weight: bold">20</span><span style="color: #ffffff">);</span>
        <span style="color: #ffffff">window.addEventListener(</span><span style="color: #0086d2">&#39;keydown&#39;</span><span style="color: #ffffff">,</span> <span style="color: #fed136; font-weight: bold">function</span> <span style="color: #ffffff">(e)</span> <span style="color: #ffffff">{</span>
            <span style="color: #ffffff">gameArea.key</span> <span style="color: #ffffff">=</span> <span style="color: #ffffff">e.keyCode;</span>
          <span style="color: #ffffff">})</span>
        <span style="color: #ffffff">window.addEventListener(</span><span style="color: #0086d2">&#39;keyup&#39;</span><span style="color: #ffffff">,</span> <span style="color: #fed136; font-weight: bold">function</span> <span style="color: #ffffff">(e)</span> <span style="color: #ffffff">{</span>
            <span style="color: #ffffff">gameArea.key</span> <span style="color: #ffffff">=</span> <span style="color: #fed136; font-weight: bold">false</span><span style="color: #ffffff">;</span>
        <span style="color: #ffffff">})</span>
    <span style="color: #ffffff">}</span>
</pre></div></p>

<p>Also add a check during updating.</p>

<p><div style="background: #111111; overflow:auto;width:auto;border:solid gray;border-width:.1em .1em .1em .8em;padding:.2em .6em;"><pre style="margin: 0; line-height: 125%"><span style="color: #fed136; font-weight: bold">if</span> <span style="color: #ffffff">(gameArea.key</span> <span style="color: #ffffff">&amp;&amp;</span> <span style="color: #ffffff">gameArea.key</span> <span style="color: #ffffff">==</span> <span style="color: #0086f7; font-weight: bold">87</span><span style="color: #ffffff">)</span> <span style="color: #ffffff">{</span>
    <span style="color: #ffffff">accelerate(-</span><span style="color: #0086f7; font-weight: bold">0.2</span><span style="color: #ffffff">)</span>
<span style="color: #ffffff">}</span>
<span style="color: #fed136; font-weight: bold">else</span> <span style="color: #ffffff">{</span> 
    <span style="color: #ffffff">accelerate(</span><span style="color: #0086f7; font-weight: bold">0.1</span><span style="color: #ffffff">)</span> 
<span style="color: #ffffff">}</span>
</pre></div></p>

<p>87 is the keycode for &lsquo;w&rsquo;, if you want to use other keybinds you can find the keycodes online.</p>

<p><b><u>5) Score</u></b></p>

<p>Time to finally calculate the score. We will need a new variable but also to add another parameter to our &ldquo;component&rdquo; constructor.<br>
</p>

<p><div style="background: #111111; overflow:auto;width:auto;border:solid gray;border-width:.1em .1em .1em .8em;padding:.2em .6em;"><pre style="margin: 0; line-height: 125%"><span style="color: #fed136; font-weight: bold">function</span> <span style="color: #ffffff">component(width,</span> <span style="color: #ffffff">height,</span> <span style="color: #ffffff">color,</span> <span style="color: #ffffff">x,</span> <span style="color: #ffffff">y,</span> <span style="color: #ffffff">type)</span> <span style="color: #ffffff">{</span>
    <span style="color: #fed136; font-weight: bold">this</span><span style="color: #ffffff">.type</span> <span style="color: #ffffff">=</span> <span style="color: #ffffff">type;</span>
    <span style="color: #fed136; font-weight: bold">this</span><span style="color: #ffffff">.width</span> <span style="color: #ffffff">=</span> <span style="color: #ffffff">width;</span>
    <span style="color: #fed136; font-weight: bold">this</span><span style="color: #ffffff">.height</span> <span style="color: #ffffff">=</span> <span style="color: #ffffff">height;</span>
    <span style="color: #fed136; font-weight: bold">this</span><span style="color: #ffffff">.x</span> <span style="color: #ffffff">=</span> <span style="color: #ffffff">x;</span>
    <span style="color: #fed136; font-weight: bold">this</span><span style="color: #ffffff">.y</span> <span style="color: #ffffff">=</span> <span style="color: #ffffff">y;</span>
    <span style="color: #fed136; font-weight: bold">this</span><span style="color: #ffffff">.speedY</span> <span style="color: #ffffff">=</span> <span style="color: #0086f7; font-weight: bold">0</span><span style="color: #ffffff">;</span> 
    <span style="color: #fed136; font-weight: bold">this</span><span style="color: #ffffff">.gravity</span> <span style="color: #ffffff">=</span> <span style="color: #0086f7; font-weight: bold">0.05</span><span style="color: #ffffff">;</span>
    <span style="color: #fed136; font-weight: bold">this</span><span style="color: #ffffff">.gravitySpeed</span> <span style="color: #ffffff">=</span> <span style="color: #0086f7; font-weight: bold">0</span><span style="color: #ffffff">;</span>
    <span style="color: #fed136; font-weight: bold">this</span><span style="color: #ffffff">.update</span> <span style="color: #ffffff">=</span> <span style="color: #fed136; font-weight: bold">function</span><span style="color: #ffffff">(){</span>
      <span style="color: #fed136; font-weight: bold">if</span> <span style="color: #ffffff">(</span><span style="color: #fed136; font-weight: bold">this</span><span style="color: #ffffff">.type</span> <span style="color: #ffffff">==</span> <span style="color: #0086d2">&quot;text&quot;</span><span style="color: #ffffff">)</span> <span style="color: #ffffff">{</span>
        <span style="color: #ffffff">ctx.font</span> <span style="color: #ffffff">=</span> <span style="color: #fed136; font-weight: bold">this</span><span style="color: #ffffff">.width</span> <span style="color: #ffffff">+</span> <span style="color: #0086d2">&quot; &quot;</span> <span style="color: #ffffff">+</span> <span style="color: #fed136; font-weight: bold">this</span><span style="color: #ffffff">.height;</span>
        <span style="color: #ffffff">ctx.fillStyle</span> <span style="color: #ffffff">=</span> <span style="color: #ffffff">color;</span>
        <span style="color: #ffffff">ctx.fillText(</span><span style="color: #fed136; font-weight: bold">this</span><span style="color: #ffffff">.text,</span> <span style="color: #fed136; font-weight: bold">this</span><span style="color: #ffffff">.x,</span> <span style="color: #fed136; font-weight: bold">this</span><span style="color: #ffffff">.y);</span>
      <span style="color: #ffffff">}</span>
      <span style="color: #fed136; font-weight: bold">else</span> <span style="color: #ffffff">{</span>
        <span style="color: #ffffff">ctx</span> <span style="color: #ffffff">=</span> <span style="color: #ffffff">gameArea.context;</span>
        <span style="color: #ffffff">ctx.fillStyle</span> <span style="color: #ffffff">=</span> <span style="color: #ffffff">color;</span>
        <span style="color: #ffffff">ctx.fillRect(</span><span style="color: #fed136; font-weight: bold">this</span><span style="color: #ffffff">.x,</span> <span style="color: #fed136; font-weight: bold">this</span><span style="color: #ffffff">.y,</span> <span style="color: #fed136; font-weight: bold">this</span><span style="color: #ffffff">.width,</span> <span style="color: #fed136; font-weight: bold">this</span><span style="color: #ffffff">.height);</span>
      <span style="color: #ffffff">}</span>
    <span style="color: #ffffff">}</span>
<span style="color: #ffffff">&lt;code&gt;</span>
<span style="color: #fed136; font-weight: bold">function</span> <span style="color: #ffffff">startGame()</span> <span style="color: #ffffff">{</span>
    <span style="color: #ffffff">gameArea.start();</span>
    <span style="color: #ffffff">score</span> <span style="color: #ffffff">=</span> <span style="color: #fed136; font-weight: bold">new</span> <span style="color: #ffffff">component(</span><span style="color: #0086d2">&quot;30px&quot;</span><span style="color: #ffffff">,</span> <span style="color: #0086d2">&quot;Calibri&quot;</span><span style="color: #ffffff">,</span> <span style="color: #0086d2">&quot;black&quot;</span><span style="color: #ffffff">,</span> <span style="color: #0086f7; font-weight: bold">325</span><span style="color: #ffffff">,</span> <span style="color: #0086f7; font-weight: bold">40</span><span style="color: #ffffff">,</span> <span style="color: #0086d2">&quot;text&quot;</span><span style="color: #ffffff">);</span>
    <span style="color: #ffffff">gamePiece</span> <span style="color: #ffffff">=</span> <span style="color: #fed136; font-weight: bold">new</span> <span style="color: #ffffff">component(</span><span style="color: #0086f7; font-weight: bold">20</span><span style="color: #ffffff">,</span> <span style="color: #0086f7; font-weight: bold">20</span><span style="color: #ffffff">,</span> <span style="color: #0086d2">&quot;yellow&quot;</span><span style="color: #ffffff">,</span> <span style="color: #0086f7; font-weight: bold">10</span><span style="color: #ffffff">,</span> <span style="color: #0086f7; font-weight: bold">150</span><span style="color: #ffffff">);</span>
<span style="color: #ffffff">}</span>
</pre></div></p>

<p>Since we are writing score as text, we use fillText instead of fillRect. Now we just need to calculate the score and display it and we&rsquo;re set:</p>

<p><div style="background: #111111; overflow:auto;width:auto;border:solid gray;border-width:.1em .1em .1em .8em;padding:.2em .6em;"><pre style="margin: 0; line-height: 125%">    <span style="color: #ffffff">score.text=</span><span style="color: #0086d2">&quot;SCORE: &quot;</span> <span style="color: #ffffff">+</span> <span style="color: #ffffff">Math.floor(gameArea.frameNo/</span><span style="color: #0086f7; font-weight: bold">100</span><span style="color: #ffffff">);</span>
    <span style="color: #ffffff">score.update();</span>
</pre></div></p>

<p>This obviously goes into the updateGameArea function. The score is 1 point for every 100 frames (2 seconds), rounded down to the nearest int.</p>

<p><b><u>6) Bouncing and other kinks</u></b></p>

<p>Bouncing is really simple:<br>
</p>

<p><div style="background: #111111; overflow:auto;width:auto;border:solid gray;border-width:.1em .1em .1em .8em;padding:.2em .6em;"><pre style="margin: 0; line-height: 125%"><span style="color: #fed136; font-weight: bold">function</span> <span style="color: #ffffff">component(width,</span> <span style="color: #ffffff">height,</span> <span style="color: #ffffff">color,</span> <span style="color: #ffffff">x,</span> <span style="color: #ffffff">y,</span> <span style="color: #ffffff">type)</span> <span style="color: #ffffff">{</span>
    <span style="color: #fed136; font-weight: bold">this</span><span style="color: #ffffff">.type</span> <span style="color: #ffffff">=</span> <span style="color: #ffffff">type</span>
    <span style="color: #fed136; font-weight: bold">this</span><span style="color: #ffffff">.width</span> <span style="color: #ffffff">=</span> <span style="color: #ffffff">width;</span>
    <span style="color: #fed136; font-weight: bold">this</span><span style="color: #ffffff">.height</span> <span style="color: #ffffff">=</span> <span style="color: #ffffff">height;</span>
    <span style="color: #fed136; font-weight: bold">this</span><span style="color: #ffffff">.x</span> <span style="color: #ffffff">=</span> <span style="color: #ffffff">x;</span>
    <span style="color: #fed136; font-weight: bold">this</span><span style="color: #ffffff">.y</span> <span style="color: #ffffff">=</span> <span style="color: #ffffff">y;</span>
    <span style="color: #fed136; font-weight: bold">this</span><span style="color: #ffffff">.speedY</span> <span style="color: #ffffff">=</span> <span style="color: #0086f7; font-weight: bold">0</span><span style="color: #ffffff">;</span> 
    <span style="color: #fed136; font-weight: bold">this</span><span style="color: #ffffff">.gravity</span> <span style="color: #ffffff">=</span> <span style="color: #0086f7; font-weight: bold">0.05</span><span style="color: #ffffff">;</span>
    <span style="color: #fed136; font-weight: bold">this</span><span style="color: #ffffff">.gravitySpeed</span> <span style="color: #ffffff">=</span> <span style="color: #0086f7; font-weight: bold">0</span><span style="color: #ffffff">;</span>
    <span style="color: #fed136; font-weight: bold">this</span><span style="color: #ffffff">.bounce</span> <span style="color: #ffffff">=</span> <span style="color: #0086f7; font-weight: bold">0.6</span><span style="color: #ffffff">;</span>
<span style="color: #ffffff">}</span>
</pre></div></p>

<p><div style="background: #111111; overflow:auto;width:auto;border:solid gray;border-width:.1em .1em .1em .8em;padding:.2em .6em;"><pre style="margin: 0; line-height: 125%">    <span style="color: #fed136; font-weight: bold">this</span><span style="color: #ffffff">.hitBottom</span> <span style="color: #ffffff">=</span> <span style="color: #fed136; font-weight: bold">function</span><span style="color: #ffffff">()</span> <span style="color: #ffffff">{</span>
      <span style="color: #fed136; font-weight: bold">var</span> <span style="color: #ffffff">bottom</span> <span style="color: #ffffff">=</span> <span style="color: #ffffff">gameArea.canvas.height</span> <span style="color: #ffffff">-</span> <span style="color: #fed136; font-weight: bold">this</span><span style="color: #ffffff">.height;</span>
      <span style="color: #fed136; font-weight: bold">if</span> <span style="color: #ffffff">(</span><span style="color: #fed136; font-weight: bold">this</span><span style="color: #ffffff">.y</span> <span style="color: #ffffff">&gt;</span> <span style="color: #ffffff">bottom)</span> <span style="color: #ffffff">{</span>
          <span style="color: #fed136; font-weight: bold">this</span><span style="color: #ffffff">.y</span> <span style="color: #ffffff">=</span> <span style="color: #ffffff">bottom;</span>
          <span style="color: #fed136; font-weight: bold">this</span><span style="color: #ffffff">.gravitySpeed</span> <span style="color: #ffffff">=</span> <span style="color: #ffffff">-(</span><span style="color: #fed136; font-weight: bold">this</span><span style="color: #ffffff">.gravitySpeed</span> <span style="color: #ffffff">*</span> <span style="color: #fed136; font-weight: bold">this</span><span style="color: #ffffff">.bounce);</span>
      <span style="color: #ffffff">}</span>
    <span style="color: #ffffff">}</span>
    <span style="color: #fed136; font-weight: bold">this</span><span style="color: #ffffff">.hitTop</span> <span style="color: #ffffff">=</span> <span style="color: #fed136; font-weight: bold">function</span><span style="color: #ffffff">()</span> <span style="color: #ffffff">{</span>
      <span style="color: #fed136; font-weight: bold">var</span> <span style="color: #ffffff">top</span> <span style="color: #ffffff">=</span> <span style="color: #0086f7; font-weight: bold">0</span><span style="color: #ffffff">;</span>
      <span style="color: #fed136; font-weight: bold">if</span> <span style="color: #ffffff">(</span><span style="color: #fed136; font-weight: bold">this</span><span style="color: #ffffff">.y</span> <span style="color: #ffffff">&lt;</span> <span style="color: #ffffff">top)</span> <span style="color: #ffffff">{</span>
          <span style="color: #fed136; font-weight: bold">this</span><span style="color: #ffffff">.y</span> <span style="color: #ffffff">=</span> <span style="color: #0086f7; font-weight: bold">0</span><span style="color: #ffffff">;</span>
          <span style="color: #fed136; font-weight: bold">this</span><span style="color: #ffffff">.gravitySpeed</span> <span style="color: #ffffff">=</span> <span style="color: #ffffff">-(</span><span style="color: #fed136; font-weight: bold">this</span><span style="color: #ffffff">.gravitySpeed</span> <span style="color: #ffffff">*</span> <span style="color: #fed136; font-weight: bold">this</span><span style="color: #ffffff">.bounce);</span>
        <span style="color: #ffffff">}</span>
    <span style="color: #ffffff">}</span>
</pre></div></p>

<p>As you can see, instead of just hugging the uppermost or lowermost edges, now our object gets reflected back at the speed times the value of our bounce variable. This works for both edges and can be somewhat unpredictable so be careful when playing to not hit the edges too hard, but if it happens that means that it does its job.</p>

<p>Now for some proper ending to the game, we will make the object simply drop to the ground and then completely end the game, we need to add a similar function to our updateGameArea one. Don&rsquo;t worry, this will be much simpler:<br>
</p>

<p><div style="background: #111111; overflow:auto;width:auto;border:solid gray;border-width:.1em .1em .1em .8em;padding:.2em .6em;"><pre style="margin: 0; line-height: 125%"><span style="color: #fed136; font-weight: bold">function</span> <span style="color: #ffffff">losers()</span> <span style="color: #ffffff">{</span>
  <span style="color: #ffffff">gameArea.frameNo</span> <span style="color: #ffffff">+=</span> <span style="color: #0086f7; font-weight: bold">1</span><span style="color: #ffffff">;</span>
  <span style="color: #ffffff">gameArea.clear();</span>
  <span style="color: #fed136; font-weight: bold">for</span> <span style="color: #ffffff">(i</span> <span style="color: #ffffff">=</span> <span style="color: #0086f7; font-weight: bold">0</span><span style="color: #ffffff">;</span> <span style="color: #ffffff">i</span> <span style="color: #ffffff">&lt;</span> <span style="color: #ffffff">obstacles.length;</span> <span style="color: #ffffff">i</span> <span style="color: #ffffff">+=</span> <span style="color: #0086f7; font-weight: bold">1</span><span style="color: #ffffff">)</span>
  <span style="color: #ffffff">{</span>
    <span style="color: #ffffff">obstacles[i].update();</span>
  <span style="color: #ffffff">}</span>
  <span style="color: #ffffff">score.update();</span>
  <span style="color: #ffffff">gamePiece.newPos();</span>
  <span style="color: #ffffff">gamePiece.update();</span>
<span style="color: #ffffff">}</span>
</pre></div></p>

<p>We just update the display after clearing, but do not modify anything other than our object. We also need to make a modification to the part when the collision is detected:</p>

<p><div style="background: #111111; overflow:auto;width:auto;border:solid gray;border-width:.1em .1em .1em .8em;padding:.2em .6em;"><pre style="margin: 0; line-height: 125%"><span style="color: #fed136; font-weight: bold">if</span> <span style="color: #ffffff">(gamePiece.crashWith(obstacles[i]))</span> <span style="color: #ffffff">{</span>
            <span style="color: #ffffff">gameArea.stop();</span>
            <span style="color: #ffffff">score.text=</span><span style="color: #0086d2">&quot;SCORE: &quot;</span> <span style="color: #ffffff">+</span> <span style="color: #ffffff">Math.floor(gameArea.frameNo/</span><span style="color: #0086f7; font-weight: bold">100</span><span style="color: #ffffff">);</span>
            <span style="color: #ffffff">gameArea.frameNo</span> <span style="color: #ffffff">=</span> <span style="color: #0086f7; font-weight: bold">0</span><span style="color: #ffffff">;</span>
            <span style="color: #ffffff">accelerate(</span><span style="color: #0086f7; font-weight: bold">0.1</span><span style="color: #ffffff">);</span>
            <span style="color: #ffffff">gameArea.interval</span> <span style="color: #ffffff">=</span> <span style="color: #ffffff">setInterval(losers,</span> <span style="color: #0086f7; font-weight: bold">20</span><span style="color: #ffffff">);</span>
            <span style="color: #fed136; font-weight: bold">if</span> <span style="color: #ffffff">(gameArea.frameNo</span> <span style="color: #ffffff">==</span> <span style="color: #0086f7; font-weight: bold">100</span><span style="color: #ffffff">)</span> <span style="color: #ffffff">{</span>
               <span style="color: #ffffff">gameArea.stop();</span> 
            <span style="color: #ffffff">}</span>
            <span style="color: #fed136; font-weight: bold">return</span><span style="color: #ffffff">;</span>
<span style="color: #ffffff">}</span>
</pre></div></p>

<p>Stop main game, retrieve score, restart drawing using our new function, and stop again after 2 seconds, which are more than enough to get our object to a halt.</p>

<p>There is a lot of other small modification to be made, but I think that&rsquo;s enough, you should be able to handle anything that comes to your mind by now.<br>
</p>

<p><b><u>7) Final code</u></b></p>

<p>Well there you have it folks. Now since the code may be a bit hard to follow along this course, with all the modifications, you will find the entirety of it below:<br>
</p>

<p><div style="background: #111111; overflow:auto;width:auto;border:solid gray;border-width:.1em .1em .1em .8em;padding:.2em .6em;"><pre style="margin: 0; line-height: 125%"><span style="color: #fed136; font-weight: bold">var</span> <span style="color: #ffffff">gamePiece;</span>
<span style="color: #fed136; font-weight: bold">var</span> <span style="color: #ffffff">obstacles</span> <span style="color: #ffffff">=</span> <span style="color: #ffffff">[];</span>
<span style="color: #fed136; font-weight: bold">var</span> <span style="color: #ffffff">score;</span>

<span style="color: #fed136; font-weight: bold">function</span> <span style="color: #ffffff">startGame()</span> <span style="color: #ffffff">{</span>
    <span style="color: #ffffff">gameArea.start();</span>
    <span style="color: #ffffff">score</span> <span style="color: #ffffff">=</span> <span style="color: #fed136; font-weight: bold">new</span> <span style="color: #ffffff">component(</span><span style="color: #0086d2">&quot;30px&quot;</span><span style="color: #ffffff">,</span> <span style="color: #0086d2">&quot;Calibri&quot;</span><span style="color: #ffffff">,</span> <span style="color: #0086d2">&quot;black&quot;</span><span style="color: #ffffff">,</span> <span style="color: #0086f7; font-weight: bold">325</span><span style="color: #ffffff">,</span> <span style="color: #0086f7; font-weight: bold">40</span><span style="color: #ffffff">,</span> <span style="color: #0086d2">&quot;text&quot;</span><span style="color: #ffffff">);</span>
    <span style="color: #ffffff">gamePiece</span> <span style="color: #ffffff">=</span> <span style="color: #fed136; font-weight: bold">new</span> <span style="color: #ffffff">component(</span><span style="color: #0086f7; font-weight: bold">20</span><span style="color: #ffffff">,</span> <span style="color: #0086f7; font-weight: bold">20</span><span style="color: #ffffff">,</span> <span style="color: #0086d2">&quot;yellow&quot;</span><span style="color: #ffffff">,</span> <span style="color: #0086f7; font-weight: bold">10</span><span style="color: #ffffff">,</span> <span style="color: #0086f7; font-weight: bold">150</span><span style="color: #ffffff">);</span>
<span style="color: #ffffff">}</span>

<span style="color: #fed136; font-weight: bold">var</span> <span style="color: #ffffff">gameArea</span> <span style="color: #ffffff">=</span> <span style="color: #ffffff">{</span>
    <span style="color: #ffffff">canvas</span> <span style="color: #ffffff">:</span> <span style="color: #ffffff">document.createElement(</span><span style="color: #0086d2">&quot;canvas&quot;</span><span style="color: #ffffff">),</span>
    <span style="color: #ffffff">start</span> <span style="color: #ffffff">:</span> <span style="color: #fed136; font-weight: bold">function</span><span style="color: #ffffff">()</span> <span style="color: #ffffff">{</span>
        <span style="color: #fed136; font-weight: bold">this</span><span style="color: #ffffff">.canvas.width</span> <span style="color: #ffffff">=</span> <span style="color: #0086f7; font-weight: bold">500</span><span style="color: #ffffff">;</span>
        <span style="color: #fed136; font-weight: bold">this</span><span style="color: #ffffff">.canvas.height</span> <span style="color: #ffffff">=</span> <span style="color: #0086f7; font-weight: bold">300</span><span style="color: #ffffff">;</span>
        <span style="color: #fed136; font-weight: bold">this</span><span style="color: #ffffff">.context</span> <span style="color: #ffffff">=</span> <span style="color: #fed136; font-weight: bold">this</span><span style="color: #ffffff">.canvas.getContext(</span><span style="color: #0086d2">&quot;2d&quot;</span><span style="color: #ffffff">);</span>
        <span style="color: #fed136; font-weight: bold">this</span><span style="color: #ffffff">.frameNo</span> <span style="color: #ffffff">=</span> <span style="color: #0086f7; font-weight: bold">0</span><span style="color: #ffffff">;</span>
        <span style="color: #ffffff">document.body.insertBefore(</span><span style="color: #fed136; font-weight: bold">this</span><span style="color: #ffffff">.canvas,</span> <span style="color: #ffffff">document.body.childNodes[</span><span style="color: #0086f7; font-weight: bold">0</span><span style="color: #ffffff">]);</span>
        <span style="color: #fed136; font-weight: bold">this</span><span style="color: #ffffff">.interval</span> <span style="color: #ffffff">=</span> <span style="color: #ffffff">setInterval(updateGameArea,</span> <span style="color: #0086f7; font-weight: bold">20</span><span style="color: #ffffff">);</span>
        <span style="color: #ffffff">window.addEventListener(</span><span style="color: #0086d2">&#39;keydown&#39;</span><span style="color: #ffffff">,</span> <span style="color: #fed136; font-weight: bold">function</span> <span style="color: #ffffff">(e)</span> <span style="color: #ffffff">{</span>
            <span style="color: #ffffff">gameArea.key</span> <span style="color: #ffffff">=</span> <span style="color: #ffffff">e.keyCode;</span>
          <span style="color: #ffffff">})</span>
        <span style="color: #ffffff">window.addEventListener(</span><span style="color: #0086d2">&#39;keyup&#39;</span><span style="color: #ffffff">,</span> <span style="color: #fed136; font-weight: bold">function</span> <span style="color: #ffffff">(e)</span> <span style="color: #ffffff">{</span>
            <span style="color: #ffffff">gameArea.key</span> <span style="color: #ffffff">=</span> <span style="color: #fed136; font-weight: bold">false</span><span style="color: #ffffff">;</span>
        <span style="color: #ffffff">})</span>
    <span style="color: #ffffff">},</span>
    <span style="color: #ffffff">clear</span> <span style="color: #ffffff">:</span> <span style="color: #fed136; font-weight: bold">function</span><span style="color: #ffffff">()</span> <span style="color: #ffffff">{</span>
        <span style="color: #fed136; font-weight: bold">this</span><span style="color: #ffffff">.context.clearRect(</span><span style="color: #0086f7; font-weight: bold">0</span><span style="color: #ffffff">,</span> <span style="color: #0086f7; font-weight: bold">0</span><span style="color: #ffffff">,</span> <span style="color: #fed136; font-weight: bold">this</span><span style="color: #ffffff">.canvas.width,</span> <span style="color: #fed136; font-weight: bold">this</span><span style="color: #ffffff">.canvas.height);</span>
    <span style="color: #ffffff">},</span>
    <span style="color: #ffffff">stop</span> <span style="color: #ffffff">:</span> <span style="color: #fed136; font-weight: bold">function</span><span style="color: #ffffff">()</span> <span style="color: #ffffff">{</span>
        <span style="color: #ffffff">clearInterval(</span><span style="color: #fed136; font-weight: bold">this</span><span style="color: #ffffff">.interval);</span>
    <span style="color: #ffffff">}</span>
<span style="color: #ffffff">}</span>

<span style="color: #fed136; font-weight: bold">function</span> <span style="color: #ffffff">component(width,</span> <span style="color: #ffffff">height,</span> <span style="color: #ffffff">color,</span> <span style="color: #ffffff">x,</span> <span style="color: #ffffff">y,</span> <span style="color: #ffffff">type)</span> <span style="color: #ffffff">{</span>
    <span style="color: #fed136; font-weight: bold">this</span><span style="color: #ffffff">.type</span> <span style="color: #ffffff">=</span> <span style="color: #ffffff">type</span>
    <span style="color: #fed136; font-weight: bold">this</span><span style="color: #ffffff">.width</span> <span style="color: #ffffff">=</span> <span style="color: #ffffff">width;</span>
    <span style="color: #fed136; font-weight: bold">this</span><span style="color: #ffffff">.height</span> <span style="color: #ffffff">=</span> <span style="color: #ffffff">height;</span>
    <span style="color: #fed136; font-weight: bold">this</span><span style="color: #ffffff">.x</span> <span style="color: #ffffff">=</span> <span style="color: #ffffff">x;</span>
    <span style="color: #fed136; font-weight: bold">this</span><span style="color: #ffffff">.y</span> <span style="color: #ffffff">=</span> <span style="color: #ffffff">y;</span>
    <span style="color: #fed136; font-weight: bold">this</span><span style="color: #ffffff">.speedY</span> <span style="color: #ffffff">=</span> <span style="color: #0086f7; font-weight: bold">0</span><span style="color: #ffffff">;</span> 
    <span style="color: #fed136; font-weight: bold">this</span><span style="color: #ffffff">.gravity</span> <span style="color: #ffffff">=</span> <span style="color: #0086f7; font-weight: bold">0.05</span><span style="color: #ffffff">;</span>
    <span style="color: #fed136; font-weight: bold">this</span><span style="color: #ffffff">.gravitySpeed</span> <span style="color: #ffffff">=</span> <span style="color: #0086f7; font-weight: bold">0</span><span style="color: #ffffff">;</span>
    <span style="color: #fed136; font-weight: bold">this</span><span style="color: #ffffff">.bounce</span> <span style="color: #ffffff">=</span> <span style="color: #0086f7; font-weight: bold">0.6</span><span style="color: #ffffff">;</span>
    <span style="color: #fed136; font-weight: bold">this</span><span style="color: #ffffff">.update</span> <span style="color: #ffffff">=</span> <span style="color: #fed136; font-weight: bold">function</span><span style="color: #ffffff">(){</span>
      <span style="color: #fed136; font-weight: bold">if</span> <span style="color: #ffffff">(</span><span style="color: #fed136; font-weight: bold">this</span><span style="color: #ffffff">.type</span> <span style="color: #ffffff">==</span> <span style="color: #0086d2">&quot;text&quot;</span><span style="color: #ffffff">)</span> <span style="color: #ffffff">{</span>
        <span style="color: #ffffff">ctx.font</span> <span style="color: #ffffff">=</span> <span style="color: #fed136; font-weight: bold">this</span><span style="color: #ffffff">.width</span> <span style="color: #ffffff">+</span> <span style="color: #0086d2">&quot; &quot;</span> <span style="color: #ffffff">+</span> <span style="color: #fed136; font-weight: bold">this</span><span style="color: #ffffff">.height;</span>
        <span style="color: #ffffff">ctx.fillStyle</span> <span style="color: #ffffff">=</span> <span style="color: #ffffff">color;</span>
        <span style="color: #ffffff">ctx.fillText(</span><span style="color: #fed136; font-weight: bold">this</span><span style="color: #ffffff">.text,</span> <span style="color: #fed136; font-weight: bold">this</span><span style="color: #ffffff">.x,</span> <span style="color: #fed136; font-weight: bold">this</span><span style="color: #ffffff">.y);</span>
      <span style="color: #ffffff">}</span>
      <span style="color: #fed136; font-weight: bold">else</span> <span style="color: #ffffff">{</span>
        <span style="color: #ffffff">ctx</span> <span style="color: #ffffff">=</span> <span style="color: #ffffff">gameArea.context;</span>
        <span style="color: #ffffff">ctx.fillStyle</span> <span style="color: #ffffff">=</span> <span style="color: #ffffff">color;</span>
        <span style="color: #ffffff">ctx.fillRect(</span><span style="color: #fed136; font-weight: bold">this</span><span style="color: #ffffff">.x,</span> <span style="color: #fed136; font-weight: bold">this</span><span style="color: #ffffff">.y,</span> <span style="color: #fed136; font-weight: bold">this</span><span style="color: #ffffff">.width,</span> <span style="color: #fed136; font-weight: bold">this</span><span style="color: #ffffff">.height);</span>
      <span style="color: #ffffff">}</span>
    <span style="color: #ffffff">}</span>
    <span style="color: #fed136; font-weight: bold">this</span><span style="color: #ffffff">.crashWith</span> <span style="color: #ffffff">=</span> <span style="color: #fed136; font-weight: bold">function</span><span style="color: #ffffff">(otherobj)</span> <span style="color: #ffffff">{</span>
      <span style="color: #fed136; font-weight: bold">var</span> <span style="color: #ffffff">left</span> <span style="color: #ffffff">=</span> <span style="color: #fed136; font-weight: bold">this</span><span style="color: #ffffff">.x;</span>
      <span style="color: #fed136; font-weight: bold">var</span> <span style="color: #ffffff">right</span> <span style="color: #ffffff">=</span> <span style="color: #fed136; font-weight: bold">this</span><span style="color: #ffffff">.x</span> <span style="color: #ffffff">+</span> <span style="color: #ffffff">(</span><span style="color: #fed136; font-weight: bold">this</span><span style="color: #ffffff">.width);</span>
      <span style="color: #fed136; font-weight: bold">var</span> <span style="color: #ffffff">top</span> <span style="color: #ffffff">=</span> <span style="color: #fed136; font-weight: bold">this</span><span style="color: #ffffff">.y;</span>
      <span style="color: #fed136; font-weight: bold">var</span> <span style="color: #ffffff">bottom</span> <span style="color: #ffffff">=</span> <span style="color: #fed136; font-weight: bold">this</span><span style="color: #ffffff">.y</span> <span style="color: #ffffff">+</span> <span style="color: #ffffff">(</span><span style="color: #fed136; font-weight: bold">this</span><span style="color: #ffffff">.height);</span>
      <span style="color: #fed136; font-weight: bold">var</span> <span style="color: #ffffff">otherleft</span> <span style="color: #ffffff">=</span> <span style="color: #ffffff">otherobj.x;</span>
      <span style="color: #fed136; font-weight: bold">var</span> <span style="color: #ffffff">otherright</span> <span style="color: #ffffff">=</span> <span style="color: #ffffff">otherobj.x</span> <span style="color: #ffffff">+</span> <span style="color: #ffffff">(otherobj.width);</span>
      <span style="color: #fed136; font-weight: bold">var</span> <span style="color: #ffffff">othertop</span> <span style="color: #ffffff">=</span> <span style="color: #ffffff">otherobj.y;</span>
      <span style="color: #fed136; font-weight: bold">var</span> <span style="color: #ffffff">otherbottom</span> <span style="color: #ffffff">=</span> <span style="color: #ffffff">otherobj.y</span> <span style="color: #ffffff">+</span> <span style="color: #ffffff">(otherobj.height);</span>
      <span style="color: #fed136; font-weight: bold">var</span> <span style="color: #ffffff">crash</span> <span style="color: #ffffff">=</span> <span style="color: #fed136; font-weight: bold">true</span><span style="color: #ffffff">;</span>
      <span style="color: #fed136; font-weight: bold">if</span> <span style="color: #ffffff">((bottom</span> <span style="color: #ffffff">&lt;</span> <span style="color: #ffffff">othertop)</span> <span style="color: #ffffff">||</span>
             <span style="color: #ffffff">(top</span> <span style="color: #ffffff">&gt;</span> <span style="color: #ffffff">otherbottom)</span> <span style="color: #ffffff">||</span>
             <span style="color: #ffffff">(right</span> <span style="color: #ffffff">&lt;</span> <span style="color: #ffffff">otherleft)</span> <span style="color: #ffffff">||</span>
             <span style="color: #ffffff">(left</span> <span style="color: #ffffff">&gt;</span> <span style="color: #ffffff">otherright))</span> <span style="color: #ffffff">{</span>
                 <span style="color: #ffffff">crash</span> <span style="color: #ffffff">=</span> <span style="color: #fed136; font-weight: bold">false</span><span style="color: #ffffff">;</span>
                  <span style="color: #ffffff">}</span>
      <span style="color: #fed136; font-weight: bold">return</span> <span style="color: #ffffff">crash;</span>
    <span style="color: #ffffff">}</span>
    <span style="color: #fed136; font-weight: bold">this</span><span style="color: #ffffff">.newPos</span> <span style="color: #ffffff">=</span> <span style="color: #fed136; font-weight: bold">function</span><span style="color: #ffffff">()</span> <span style="color: #ffffff">{</span>
      <span style="color: #fed136; font-weight: bold">this</span><span style="color: #ffffff">.gravitySpeed</span> <span style="color: #ffffff">+=</span> <span style="color: #fed136; font-weight: bold">this</span><span style="color: #ffffff">.gravity;</span>
      <span style="color: #fed136; font-weight: bold">this</span><span style="color: #ffffff">.y</span> <span style="color: #ffffff">+=</span> <span style="color: #fed136; font-weight: bold">this</span><span style="color: #ffffff">.speedY</span> <span style="color: #ffffff">+</span> <span style="color: #fed136; font-weight: bold">this</span><span style="color: #ffffff">.gravitySpeed;</span>
      <span style="color: #fed136; font-weight: bold">this</span><span style="color: #ffffff">.hitBottom();</span>
      <span style="color: #fed136; font-weight: bold">this</span><span style="color: #ffffff">.hitTop();</span>
    <span style="color: #ffffff">}</span>
    <span style="color: #fed136; font-weight: bold">this</span><span style="color: #ffffff">.hitBottom</span> <span style="color: #ffffff">=</span> <span style="color: #fed136; font-weight: bold">function</span><span style="color: #ffffff">()</span> <span style="color: #ffffff">{</span>
      <span style="color: #fed136; font-weight: bold">var</span> <span style="color: #ffffff">bottom</span> <span style="color: #ffffff">=</span> <span style="color: #ffffff">gameArea.canvas.height</span> <span style="color: #ffffff">-</span> <span style="color: #fed136; font-weight: bold">this</span><span style="color: #ffffff">.height;</span>
      <span style="color: #fed136; font-weight: bold">if</span> <span style="color: #ffffff">(</span><span style="color: #fed136; font-weight: bold">this</span><span style="color: #ffffff">.y</span> <span style="color: #ffffff">&gt;</span> <span style="color: #ffffff">bottom)</span> <span style="color: #ffffff">{</span>
          <span style="color: #fed136; font-weight: bold">this</span><span style="color: #ffffff">.y</span> <span style="color: #ffffff">=</span> <span style="color: #ffffff">bottom;</span>
          <span style="color: #fed136; font-weight: bold">this</span><span style="color: #ffffff">.gravitySpeed</span> <span style="color: #ffffff">=</span> <span style="color: #ffffff">-(</span><span style="color: #fed136; font-weight: bold">this</span><span style="color: #ffffff">.gravitySpeed</span> <span style="color: #ffffff">*</span> <span style="color: #fed136; font-weight: bold">this</span><span style="color: #ffffff">.bounce);</span>
      <span style="color: #ffffff">}</span>
    <span style="color: #ffffff">}</span>
    <span style="color: #fed136; font-weight: bold">this</span><span style="color: #ffffff">.hitTop</span> <span style="color: #ffffff">=</span> <span style="color: #fed136; font-weight: bold">function</span><span style="color: #ffffff">()</span> <span style="color: #ffffff">{</span>
      <span style="color: #fed136; font-weight: bold">var</span> <span style="color: #ffffff">top</span> <span style="color: #ffffff">=</span> <span style="color: #0086f7; font-weight: bold">0</span><span style="color: #ffffff">;</span>
      <span style="color: #fed136; font-weight: bold">if</span> <span style="color: #ffffff">(</span><span style="color: #fed136; font-weight: bold">this</span><span style="color: #ffffff">.y</span> <span style="color: #ffffff">&lt;</span> <span style="color: #ffffff">top)</span> <span style="color: #ffffff">{</span>
          <span style="color: #fed136; font-weight: bold">this</span><span style="color: #ffffff">.y</span> <span style="color: #ffffff">=</span> <span style="color: #0086f7; font-weight: bold">0</span><span style="color: #ffffff">;</span>
          <span style="color: #fed136; font-weight: bold">this</span><span style="color: #ffffff">.gravitySpeed</span> <span style="color: #ffffff">=</span> <span style="color: #ffffff">-(</span><span style="color: #fed136; font-weight: bold">this</span><span style="color: #ffffff">.gravitySpeed</span> <span style="color: #ffffff">*</span> <span style="color: #fed136; font-weight: bold">this</span><span style="color: #ffffff">.bounce);</span>
        <span style="color: #ffffff">}</span>
    <span style="color: #ffffff">}</span>
<span style="color: #ffffff">}</span>
  
<span style="color: #fed136; font-weight: bold">function</span> <span style="color: #ffffff">everyinterval(n)</span> <span style="color: #ffffff">{</span>
    <span style="color: #fed136; font-weight: bold">if</span> <span style="color: #ffffff">((gameArea.frameNo</span> <span style="color: #ffffff">/</span> <span style="color: #ffffff">n)</span> <span style="color: #ffffff">%</span> <span style="color: #0086f7; font-weight: bold">1</span> <span style="color: #ffffff">==</span> <span style="color: #0086f7; font-weight: bold">0</span><span style="color: #ffffff">)</span> <span style="color: #ffffff">{</span><span style="color: #fed136; font-weight: bold">return</span> <span style="color: #fed136; font-weight: bold">true</span><span style="color: #ffffff">;}</span>
    <span style="color: #fed136; font-weight: bold">return</span> <span style="color: #fed136; font-weight: bold">false</span><span style="color: #ffffff">;</span>
<span style="color: #ffffff">}</span>

<span style="color: #fed136; font-weight: bold">function</span> <span style="color: #ffffff">updateGameArea()</span> <span style="color: #ffffff">{</span>
     <span style="color: #fed136; font-weight: bold">var</span> <span style="color: #ffffff">x,</span> <span style="color: #ffffff">height,</span> <span style="color: #ffffff">gap,</span> <span style="color: #ffffff">minHeight,</span> <span style="color: #ffffff">maxHeight,</span> <span style="color: #ffffff">minGap,</span> <span style="color: #ffffff">maxGap;</span>
    <span style="color: #fed136; font-weight: bold">for</span> <span style="color: #ffffff">(i</span> <span style="color: #ffffff">=</span> <span style="color: #0086f7; font-weight: bold">0</span><span style="color: #ffffff">;</span> <span style="color: #ffffff">i</span> <span style="color: #ffffff">&lt;</span> <span style="color: #ffffff">obstacles.length;</span> <span style="color: #ffffff">i</span> <span style="color: #ffffff">+=</span> <span style="color: #0086f7; font-weight: bold">1</span><span style="color: #ffffff">)</span> <span style="color: #ffffff">{</span>
        <span style="color: #fed136; font-weight: bold">if</span> <span style="color: #ffffff">(gamePiece.crashWith(obstacles[i]))</span> <span style="color: #ffffff">{</span>
            <span style="color: #ffffff">gameArea.stop();</span>
            <span style="color: #ffffff">score.text=</span><span style="color: #0086d2">&quot;SCORE: &quot;</span> <span style="color: #ffffff">+</span> <span style="color: #ffffff">Math.floor(gameArea.frameNo/</span><span style="color: #0086f7; font-weight: bold">100</span><span style="color: #ffffff">);</span>
            <span style="color: #ffffff">gameArea.frameNo</span> <span style="color: #ffffff">=</span> <span style="color: #0086f7; font-weight: bold">0</span><span style="color: #ffffff">;</span>
            <span style="color: #ffffff">gameArea.interval</span> <span style="color: #ffffff">=</span> <span style="color: #ffffff">setInterval(losers,</span> <span style="color: #0086f7; font-weight: bold">20</span><span style="color: #ffffff">);</span>
            <span style="color: #fed136; font-weight: bold">if</span> <span style="color: #ffffff">(gameArea.frameNo</span> <span style="color: #ffffff">==</span> <span style="color: #0086f7; font-weight: bold">100</span><span style="color: #ffffff">)</span> <span style="color: #ffffff">{</span> <span style="color: #ffffff">gameArea.stop();</span> <span style="color: #ffffff">}</span>
            <span style="color: #fed136; font-weight: bold">return</span><span style="color: #ffffff">;</span>
        <span style="color: #ffffff">}</span> 
    <span style="color: #ffffff">}</span>
    <span style="color: #ffffff">gameArea.clear();</span>
    <span style="color: #ffffff">gameArea.frameNo</span> <span style="color: #ffffff">+=</span> <span style="color: #0086f7; font-weight: bold">1</span><span style="color: #ffffff">;</span>
    <span style="color: #fed136; font-weight: bold">if</span> <span style="color: #ffffff">(gameArea.frameNo</span> <span style="color: #ffffff">==</span> <span style="color: #0086f7; font-weight: bold">1</span> <span style="color: #ffffff">||</span> <span style="color: #ffffff">everyinterval(</span><span style="color: #0086f7; font-weight: bold">100</span><span style="color: #ffffff">))</span> <span style="color: #ffffff">{</span>
        <span style="color: #ffffff">x</span> <span style="color: #ffffff">=</span> <span style="color: #ffffff">gameArea.canvas.width;</span>
        <span style="color: #ffffff">minHeight</span> <span style="color: #ffffff">=</span> <span style="color: #0086f7; font-weight: bold">20</span><span style="color: #ffffff">;</span>
        <span style="color: #ffffff">maxHeight</span> <span style="color: #ffffff">=</span> <span style="color: #0086f7; font-weight: bold">200</span><span style="color: #ffffff">;</span>
        <span style="color: #ffffff">height</span> <span style="color: #ffffff">=</span> <span style="color: #ffffff">Math.floor(Math.random()*(maxHeight-minHeight+</span><span style="color: #0086f7; font-weight: bold">1</span><span style="color: #ffffff">)+minHeight);</span>
        <span style="color: #ffffff">minGap</span> <span style="color: #ffffff">=</span> <span style="color: #0086f7; font-weight: bold">50</span><span style="color: #ffffff">;</span>
        <span style="color: #ffffff">maxGap</span> <span style="color: #ffffff">=</span> <span style="color: #0086f7; font-weight: bold">200</span><span style="color: #ffffff">;</span>
        <span style="color: #ffffff">gap</span> <span style="color: #ffffff">=</span> <span style="color: #ffffff">Math.floor(Math.random()*(maxGap-minGap+</span><span style="color: #0086f7; font-weight: bold">1</span><span style="color: #ffffff">)+minGap);</span>
        <span style="color: #ffffff">obstacles.push(</span><span style="color: #fed136; font-weight: bold">new</span> <span style="color: #ffffff">component(</span><span style="color: #0086f7; font-weight: bold">10</span><span style="color: #ffffff">,</span> <span style="color: #ffffff">height,</span> <span style="color: #0086d2">&quot;green&quot;</span><span style="color: #ffffff">,</span> <span style="color: #ffffff">x,</span> <span style="color: #0086f7; font-weight: bold">0</span><span style="color: #ffffff">));</span>
        <span style="color: #ffffff">obstacles.push(</span><span style="color: #fed136; font-weight: bold">new</span> <span style="color: #ffffff">component(</span><span style="color: #0086f7; font-weight: bold">10</span><span style="color: #ffffff">,</span> <span style="color: #ffffff">x</span> <span style="color: #ffffff">-</span> <span style="color: #ffffff">height</span> <span style="color: #ffffff">-</span> <span style="color: #ffffff">gap,</span> <span style="color: #0086d2">&quot;green&quot;</span><span style="color: #ffffff">,</span> <span style="color: #ffffff">x,</span> <span style="color: #ffffff">height</span> <span style="color: #ffffff">+</span> <span style="color: #ffffff">gap));</span>
    <span style="color: #ffffff">}</span>
    <span style="color: #fed136; font-weight: bold">for</span> <span style="color: #ffffff">(i</span> <span style="color: #ffffff">=</span> <span style="color: #0086f7; font-weight: bold">0</span><span style="color: #ffffff">;</span> <span style="color: #ffffff">i</span> <span style="color: #ffffff">&lt;</span> <span style="color: #ffffff">obstacles.length;</span> <span style="color: #ffffff">i</span> <span style="color: #ffffff">+=</span> <span style="color: #0086f7; font-weight: bold">1</span><span style="color: #ffffff">)</span> <span style="color: #ffffff">{</span>
        <span style="color: #ffffff">obstacles[i].x</span> <span style="color: #ffffff">+=</span> <span style="color: #ffffff">-</span><span style="color: #0086f7; font-weight: bold">1</span><span style="color: #ffffff">;</span>
        <span style="color: #ffffff">obstacles[i].update();</span>
    <span style="color: #ffffff">}</span>
    <span style="color: #fed136; font-weight: bold">if</span> <span style="color: #ffffff">(gameArea.key</span> <span style="color: #ffffff">&amp;&amp;</span> <span style="color: #ffffff">gameArea.key</span> <span style="color: #ffffff">==</span> <span style="color: #0086f7; font-weight: bold">87</span><span style="color: #ffffff">)</span> <span style="color: #ffffff">{</span> <span style="color: #ffffff">accelerate(-</span><span style="color: #0086f7; font-weight: bold">0.2</span><span style="color: #ffffff">)}</span>
    <span style="color: #fed136; font-weight: bold">else</span> <span style="color: #ffffff">{</span> <span style="color: #ffffff">accelerate(</span><span style="color: #0086f7; font-weight: bold">0.1</span><span style="color: #ffffff">)</span> <span style="color: #ffffff">}</span>
    <span style="color: #ffffff">score.text=</span><span style="color: #0086d2">&quot;SCORE: &quot;</span> <span style="color: #ffffff">+</span> <span style="color: #ffffff">Math.floor(gameArea.frameNo/</span><span style="color: #0086f7; font-weight: bold">100</span><span style="color: #ffffff">);</span>
    <span style="color: #ffffff">score.update();</span>
    <span style="color: #ffffff">gamePiece.newPos();</span>
    <span style="color: #ffffff">gamePiece.update();</span>
<span style="color: #ffffff">}</span>
<span style="color: #fed136; font-weight: bold">function</span> <span style="color: #ffffff">accelerate(n)</span> <span style="color: #ffffff">{</span>
    <span style="color: #ffffff">gamePiece.gravity</span> <span style="color: #ffffff">=</span> <span style="color: #ffffff">n;</span>
<span style="color: #ffffff">}</span>

<span style="color: #fed136; font-weight: bold">function</span> <span style="color: #ffffff">losers()</span> <span style="color: #ffffff">{</span>
  <span style="color: #ffffff">gameArea.frameNo</span> <span style="color: #ffffff">+=</span> <span style="color: #0086f7; font-weight: bold">1</span><span style="color: #ffffff">;</span>
  <span style="color: #ffffff">gameArea.clear();</span>
  <span style="color: #fed136; font-weight: bold">for</span> <span style="color: #ffffff">(i</span> <span style="color: #ffffff">=</span> <span style="color: #0086f7; font-weight: bold">0</span><span style="color: #ffffff">;</span> <span style="color: #ffffff">i</span> <span style="color: #ffffff">&lt;</span> <span style="color: #ffffff">obstacles.length;</span> <span style="color: #ffffff">i</span> <span style="color: #ffffff">+=</span> <span style="color: #0086f7; font-weight: bold">1</span><span style="color: #ffffff">)</span>
  <span style="color: #ffffff">{</span>
    <span style="color: #ffffff">obstacles[i].update();</span>
  <span style="color: #ffffff">}</span>
  <span style="color: #ffffff">score.update();</span>
  <span style="color: #ffffff">gamePiece.newPos();</span>
  <span style="color: #ffffff">gamePiece.update();</span>
<span style="color: #ffffff">}</span>
</pre></div></p>

<p>Wow! We really outdid ourselves! So these should be the basics of making a game like Flappy Bird. Feel free to try what we've done so far in the code editor, and we wish you good luck in the next course!</p>

</body>
</html>