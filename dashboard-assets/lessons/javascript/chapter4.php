
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

<p align="center"><font size="6"><b><u>Chapter 4: Functions</b></u></font></p><br>

<p><font size="5">So by now we know how to use simple programming concepts like variables and operators and advanced ones like loops and statements. Now we want to make use of these learn how to implement and use functions. By using functions, we can make sure a computer will execute tasks efficiently.</p>

<p>Functions are sections of a program that perform certain tasks. Most programming language come with pre-defined functions that we can use, but we can also define our own. One example of a pre-defined function in JavaScript is &ldquo;substr&rdquo; that we used in the second chapter.</p>

<p><!-- HTML generated using hilite.me --><div style="background: #111111; overflow:auto;width:auto;border:solid gray;border-width:.1em .1em .1em .8em;padding:.2em .6em;"><pre style="margin: 0; line-height: 125%"><span style="color: #0086d2">&quot;I love Webcademy&quot;</span><span style="color: #ffffff">.substr(</span><span style="color: #0086f7; font-weight: bold">7</span><span style="color: #ffffff">,</span><span style="color: #0086f7; font-weight: bold">15</span><span style="color: #ffffff">);</span>
</pre></div>
</p>

<p>Can you guess what the above code evaluates to?</p>

<p>Let&rsquo;s take a look at how we can define our own functions:</p><br>

<p>
<!-- HTML generated using hilite.me --><div style="background: #111111; overflow:auto;width:auto;border:solid gray;border-width:.1em .1em .1em .8em;padding:.2em .6em;"><pre style="margin: 0; line-height: 125%"><span style="color: #fed136; font-weight: bold">function</span> <span style="color: #ffffff">hello(myName)</span> <span style="color: #ffffff">{</span>
<span style="color: #ffffff">console.log(“Hello</span> <span style="color: #ffffff">”</span> <span style="color: #ffffff">+</span> <span style="color: #ffffff">myName);</span>
<span style="color: #ffffff">}</span>
</pre></div>
</p>

<p>In the example above we built a function that uses a string as a parameter and then prints &ldquo;Hello&rdquo; with the specified name. To build a function, we declare it with &ldquo;var&rdquo; and assign it a name. If we need, we can also specify some parameters we will use inside the function. We then create a block using {} where we will write our commands. </p>

<p>An important principle in programming is not repeating yourself. If you find yourself repeating something in a code, then you probably can use a function. The part you keep repeating will go inside the command block.</p>

<p>We can use functions in our codes to do lots of different stuff. For example, let&rsquo;s say we want to convert some Fahrenheit degree values into Celsius. Instead of repeating each time the conversion formula, we can define a function that will make the conversion automatically.</p>

<p><!-- HTML generated using hilite.me --><div style="background: #111111; overflow:auto;width:auto;border:solid gray;border-width:.1em .1em .1em .8em;padding:.2em .6em;"><pre style="margin: 0; line-height: 125%"><span style="color: #fed136; font-weight: bold">function</span> <span style="color: #ffffff">toCelsius(f)</span> <span style="color: #ffffff">{</span>
<span style="color: #fed136; font-weight: bold">var</span> <span style="color: #ffffff">c</span> <span style="color: #ffffff">=</span> <span style="color: #ffffff">(</span><span style="color: #0086f7; font-weight: bold">5</span><span style="color: #ffffff">/</span><span style="color: #0086f7; font-weight: bold">9</span><span style="color: #ffffff">)</span> <span style="color: #ffffff">*</span> <span style="color: #ffffff">(f-</span><span style="color: #0086f7; font-weight: bold">32</span><span style="color: #ffffff">);</span>
<span style="color: #ffffff">console.log(c);</span>
<span style="color: #ffffff">}</span>
<span style="color: #ffffff">toCelsius(</span><span style="color: #0086f7; font-weight: bold">32</span><span style="color: #ffffff">);</span>
</pre></div>
</p>

<p>See how easy it is? Outside the function we do something named &ldquo;calling a function&rdquo;. In order to call a function we specify its name and a parameter. In this case, the parameter is assigned to a variable f that is then used in the formula to calculate Celsius degrees. </p>

<p>However, when we call a function we might not want to just print values. For example we might want to get a value from a function that is then used in the code. To do so, we can simply use the &ldquo;return&rdquo; keyword, which gives the value that comes out of the function:</p>

<p><!-- HTML generated using hilite.me --><div style="background: #111111; overflow:auto;width:auto;border:solid gray;border-width:.1em .1em .1em .8em;padding:.2em .6em;"><pre style="margin: 0; line-height: 125%"><span style="color: #fed136; font-weight: bold">function</span> <span style="color: #ffffff">toCelsius(f)</span> <span style="color: #ffffff">{</span>
<span style="color: #fed136; font-weight: bold">return</span> <span style="color: #ffffff">c</span> <span style="color: #ffffff">=</span> <span style="color: #ffffff">(</span><span style="color: #0086f7; font-weight: bold">5</span><span style="color: #ffffff">/</span><span style="color: #0086f7; font-weight: bold">9</span><span style="color: #ffffff">)</span> <span style="color: #ffffff">*</span> <span style="color: #ffffff">(f-</span><span style="color: #0086f7; font-weight: bold">32</span><span style="color: #ffffff">);</span>
<span style="color: #ffffff">}</span>
</pre></div>
</p>

<p>We can also define loops inside functions in order to make more complex programs:</p>

<p><!-- HTML generated using hilite.me --><div style="background: #111111; overflow:auto;width:auto;border:solid gray;border-width:.1em .1em .1em .8em;padding:.2em .6em;"><pre style="margin: 0; line-height: 125%"><span style="color: #fed136; font-weight: bold">function</span> <span style="color: #ffffff">returnEven(n){</span>
<span style="color: #fed136; font-weight: bold">if</span><span style="color: #ffffff">(n%</span><span style="color: #0086f7; font-weight: bold">2</span><span style="color: #ffffff">==</span><span style="color: #0086f7; font-weight: bold">0</span><span style="color: #ffffff">)</span> <span style="color: #ffffff">{</span>
<span style="color: #fed136; font-weight: bold">return</span> <span style="color: #ffffff">n;</span> <span style="color: #ffffff">}</span>
<span style="color: #fed136; font-weight: bold">else</span> <span style="color: #fed136; font-weight: bold">return</span> <span style="color: #ffffff">n-</span><span style="color: #0086f7; font-weight: bold">1</span><span style="color: #ffffff">;</span>
<span style="color: #ffffff">}</span>
</pre></div>
</p>

<p>So far we only used functions with one parameter, but we are able to create functions that use two or more:</p>

<p><!-- HTML generated using hilite.me --><div style="background: #111111; overflow:auto;width:auto;border:solid gray;border-width:.1em .1em .1em .8em;padding:.2em .6em;"><pre style="margin: 0; line-height: 125%"><span style="color: #fed136; font-weight: bold">function</span> <span style="color: #ffffff">speed(distance,</span> <span style="color: #ffffff">time){</span>
<span style="color: #fed136; font-weight: bold">return</span> <span style="color: #ffffff">distance/time;</span>
<span style="color: #ffffff">}</span>
</pre></div>
</p>

<p>As seen above, we used a function with two parameters to calculate the speed using the physics formula from school.</p>

<p>One last thing regarding functions is the use of local and global variables. We had a look at variables before, but now we need to understand the concept of scope. As mentioned before, scope can be local or global. Variables that are declared outside a function are global, as they can be used by any other function in the program. Variables defined inside a function are local and can be used only by that respective function.</p>

<p><!-- HTML generated using hilite.me --><div style="background: #111111; overflow:auto;width:auto;border:solid gray;border-width:.1em .1em .1em .8em;padding:.2em .6em;"><pre style="margin: 0; line-height: 125%"><span style="color: #fed136; font-weight: bold">var</span> <span style="color: #ffffff">number</span> <span style="color: #ffffff">=</span> <span style="color: #0086f7; font-weight: bold">4</span><span style="color: #ffffff">;</span>
<span style="color: #fed136; font-weight: bold">function</span> <span style="color: #ffffff">myFunction(){</span>
<span style="color: #fed136; font-weight: bold">var</span> <span style="color: #ffffff">string=</span><span style="color: #0086d2">&quot;Hello&quot;</span><span style="color: #ffffff">;</span>
<span style="color: #ffffff">}</span>
</pre></div>
</p>

<p>The variable number is defined outside the function myFunction, therefore it has a global scope. However, the variable string is defined inside the function and can be used only there.</p>

<p>Functions are really easy to use and very efficient in complex programs. We will be waiting for you in our next chapter where we will cover the subject of arrays.<br />
</p>

</body>
</html>