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

<p align="center"><font size="6"><b><u>Chapter 2: Basic programming concepts</b></u></font></p><br>

<p><font size="5">Before we are able to use JavaScript and learn its syntax, we have to understand some basic programming concepts and how to use them.</font></p>

<p><font size="5">First of all, what is programming? Programming simply means sending commands to a computer, which it then executes. The way to communicate with a computer and send these commands is through a programming language. By understanding and using these, we can create programs.</font></p>

<p><font size="5">Programs use inputs given by a user and they return an output. These input and output can be called data. Data comes in different types. Some simple examples to understand the concept of data types are:<br /></p>
<p><font size="5">a) Numbers &ndash; these show quantity and you can do math with them, just like everyone is used to.<br /></p>

<p><div style="background: #111111; overflow:auto;width:auto;border:solid gray;border-width:.1em .1em .1em .8em;padding:.2em .6em;"><pre style="margin: 0; line-height: 125%"><span style="color: #ffffff">Example:</span> <span style="color: #0086f7; font-weight: bold">2</span><span style="color: #ffffff">,</span> <span style="color: #0086f7; font-weight: bold">29</span><span style="color: #ffffff">,</span> <span style="color: #0086f7; font-weight: bold">6.5</span>
</pre></div>
</p>

<p><font size="5">b) Strings &ndash; strings are sequences of characters of different types, like letters or even numbers and are used as labels or names in programs.<br /></p>

<p><div style="background: #111111; overflow:auto;width:auto;border:solid gray;border-width:.1em .1em .1em .8em;padding:.2em .6em;"><pre style="margin: 0; line-height: 125%"><span style="color: #ffffff">Example:</span> <span style="color: #0086d2">&quot;The quick brown fox jumps over the lazy dog.&quot;</span> <span style="color: #ffffff">,</span> <span style="color: #0086d2">&quot;2+2=4&quot;</span>
</pre></div>
</p>

<p><font size="5">c) Booleans &ndash; Booleans are data types that specify whether a logic proposition is true or false.</p>

<p><div style="background: #111111; overflow:auto;width:auto;border:solid gray;border-width:.1em .1em .1em .8em;padding:.2em .6em;"><pre style="margin: 0; line-height: 125%"><span style="color: #ffffff">Example:</span> <span style="color: #0086f7; font-weight: bold">7</span> <span style="color: #ffffff">&gt;</span> <span style="color: #0086f7; font-weight: bold">5</span> <span style="color: #ffffff">is</span> <span style="color: #fed136; font-weight: bold">true</span><span style="color: #ffffff">;</span> <span style="color: #0086f7; font-weight: bold">3</span> <span style="color: #ffffff">&lt;</span> <span style="color: #0086f7; font-weight: bold">2</span> <span style="color: #ffffff">is</span> <span style="color: #fed136; font-weight: bold">false</span>
</pre></div>
</p>

<p><font size="5">In a program, numbers are written normally, while strings have to be surrounded by quotes (&ldquo; &ldquo;).</p>

<p><font size="5">In programming, we call displaying the values a program calculates, printing out. In JavaScript, in order to print out we use:<br /></p>
<p><font size="5">
<div style="background: #111111; overflow:auto;width:auto;border:solid gray;border-width:.1em .1em .1em .8em;padding:.2em .6em;"><pre style="margin: 0; line-height: 125%"><span style="color: #ffffff">console.log(</span><span style="color: #0086f7; font-weight: bold">3</span><span style="color: #ffffff">);</span>
</pre></div>


</p>
<p>This will print a 3 in the console. Printing can be used on everything. We can print numbers, strings or even Booleans. In web development, in order to print out values and messages we use:<br /></p>
<p>
<!-- HTML generated using hilite.me --><div style="background: #111111; overflow:auto;width:auto;border:solid gray;border-width:.1em .1em .1em .8em;padding:.2em .6em;"><pre style="margin: 0; line-height: 125%"><span style="color: #ffffff">window.alert(</span><span style="color: #0086f7; font-weight: bold">3</span><span style="color: #ffffff">);</span>
</pre></div>


</p>
<p><font size="5">When using window.alert(), a small window will open and display the message. Console.log() and window.alert() are identical in theory, but the latter is used for websites. </p>

<p><font size="5">Notice the semicolon (;) ? In programming we use semicolons at the end of every line of code. Forgetting to write it would create an error when running the program. However, JavaScript is an exception, where semicolons can be omitted.</p>

<p><font size="5">Until now we learned about three data types: numbers, strings and Booleans. Now let&rsquo;s understand how to use operators:</p>

<p><font size="5">- > is greater than<br />
- < is smaller than<br />
- <= is less than or equal to<br />
- >= is greater than or equal to<br />
- === is equal to<br />
- !== is not equal to</p>

<p><font size="5">We use these operators to compare values and types in programming. Comparisons can be used in statements that we will learn a little later.</p>

<p><div style="background: #111111; overflow:auto;width:auto;border:solid gray;border-width:.1em .1em .1em .8em;padding:.2em .6em;"><pre style="margin: 0; line-height: 125%"><span style="color: #ffffff">Example:</span> <span style="color: #0086f7; font-weight: bold">5</span><span style="color: #ffffff">&gt;=</span><span style="color: #0086f7; font-weight: bold">5</span> <span style="color: #ffffff">would</span> <span style="color: #fed136; font-weight: bold">return</span> <span style="color: #fed136; font-weight: bold">true</span><span style="color: #ffffff">;</span> <span style="color: #0086f7; font-weight: bold">5</span> <span style="color: #ffffff">===</span> <span style="color: #0086d2">&quot;5&quot;</span> <span style="color: #ffffff">would</span> <span style="color: #fed136; font-weight: bold">return</span> <span style="color: #fed136; font-weight: bold">false</span>
</pre></div>

</p>

<p><font size="5">In the second example we compared a number with a string. Because they are different data types, it would return a false value, even though they look so similar.</p>

<p><font size="5">Another type of operators are logic operators:</p>

<p><font size="5">- &amp;&amp; means &ldquo;and&rdquo;<br />
- || means &ldquo;or&rdquo;</p>

<p><font size="5">Logic operators can be used to specify multiple conditions at once in a statement.</p>

<p><font size="5">In programming we can do basic mathematics just like in real life. The basic math symbols work the same as before:</p>

<p><font size="5">- + and &ndash; for addition and substraction<br />
- * and / for multiplication and division<br />
- () &ndash; for controlling the order of operations</p>

<p><font size="5"><div style="background: #111111; overflow:auto;width:auto;border:solid gray;border-width:.1em .1em .1em .8em;padding:.2em .6em;"><pre style="margin: 0; line-height: 125%"><span style="color: #ffffff">Example:</span> <span style="color: #0086f7; font-weight: bold">5</span> <span style="color: #ffffff">–</span> <span style="color: #0086f7; font-weight: bold">3</span> <span style="color: #ffffff">=</span> <span style="color: #0086f7; font-weight: bold">2</span><span style="color: #ffffff">;</span> <span style="color: #0086f7; font-weight: bold">4</span> <span style="color: #ffffff">*</span> <span style="color: #0086f7; font-weight: bold">4</span> <span style="color: #ffffff">=</span> <span style="color: #0086f7; font-weight: bold">16</span><span style="color: #ffffff">;</span> <span style="color: #0086f7; font-weight: bold">3</span> <span style="color: #ffffff">*</span> <span style="color: #ffffff">(</span> <span style="color: #0086f7; font-weight: bold">2</span> <span style="color: #ffffff">-</span> <span style="color: #0086f7; font-weight: bold">1</span> <span style="color: #ffffff">)</span> <span style="color: #ffffff">=</span> <span style="color: #0086f7; font-weight: bold">3</span>
</pre></div>
</p>

<p><font size="5">Let&rsquo;s meet a probably new concept called modulo. Modulo is written in mathematics with % and it is used to calculate the remainder of a division.</p>

<p><div style="background: #111111; overflow:auto;width:auto;border:solid gray;border-width:.1em .1em .1em .8em;padding:.2em .6em;"><pre style="margin: 0; line-height: 125%"><span style="color: #ffffff">Example:</span> <span style="color: #0086f7; font-weight: bold">14</span> <span style="color: #ffffff">%</span> <span style="color: #0086f7; font-weight: bold">3</span> <span style="color: #ffffff">=</span> <span style="color: #0086f7; font-weight: bold">2</span><span style="color: #ffffff">;</span> <span style="color: #0086f7; font-weight: bold">5</span> <span style="color: #ffffff">%</span> <span style="color: #0086f7; font-weight: bold">2</span> <span style="color: #ffffff">=</span> <span style="color: #0086f7; font-weight: bold">3</span><span style="color: #ffffff">;</span> <span style="color: #0086f7; font-weight: bold">7</span> <span style="color: #ffffff">%</span> <span style="color: #0086f7; font-weight: bold">8</span> <span style="color: #ffffff">=</span> <span style="color: #0086f7; font-weight: bold">7</span>
</pre></div>
</p>

<p><font size="5">Why is modulo useful? In programming we can use modulo to check if a number is odd or even. For example:</p>

<p><div style="background: #111111; overflow:auto;width:auto;border:solid gray;border-width:.1em .1em .1em .8em;padding:.2em .6em;"><pre style="margin: 0; line-height: 125%"><span style="color: #0086f7; font-weight: bold">5</span> <span style="color: #ffffff">%</span> <span style="color: #0086f7; font-weight: bold">2</span> <span style="color: #ffffff">=</span> <span style="color: #0086f7; font-weight: bold">1</span><span style="color: #ffffff">,</span> <span style="color: #ffffff">therefore</span> <span style="color: #0086f7; font-weight: bold">5</span> <span style="color: #ffffff">is</span> <span style="color: #ffffff">odd</span>
</pre></div>
</p>

<p>Modulo is usually combined with statements which we will use a little later.</p>

<p>Now that we learned how to work with numbers, let&rsquo;s learn a little something about working with strings as well. In order to obtain the length of a string in JavaScript we use:</p>

<p>
<div style="background: #111111; overflow:auto;width:auto;border:solid gray;border-width:.1em .1em .1em .8em;padding:.2em .6em;"><pre style="margin: 0; line-height: 125%"><span style="color: #0086d2">&quot;string&quot;</span><span style="color: #ffffff">.length;</span>
</pre></div>


</p>

<p>This will show us how many characters a string has. Blank spaces in a string will also count to the total number of characters. </p>

<p><div style="background: #111111; overflow:auto;width:auto;border:solid gray;border-width:.1em .1em .1em .8em;padding:.2em .6em;"><pre style="margin: 0; line-height: 125%"><span style="color: #ffffff">Example:</span> <span style="color: #0086d2">&quot;Mary has apples&quot;</span><span style="color: #ffffff">.length</span> <span style="color: #ffffff">=</span> <span style="color: #0086f7; font-weight: bold">15</span>
</pre></div>
</p>

<p>Sometimes you don&rsquo;t want to use a whole string and you want to work only with parts. This is called a substring, a part of a string. In order to obtain a substring we use:</p>

<p>
<div style="background: #111111; overflow:auto;width:auto;border:solid gray;border-width:.1em .1em .1em .8em;padding:.2em .6em;"><pre style="margin: 0; line-height: 125%"><span style="color: #0086d2">&quot;string&quot;</span><span style="color: #ffffff">.substring(x,y);</span>
</pre></div>



</p>

<p>Here, x and y are numbers that specify the positions in a string as follows: we start from x and we count until y. However, in order to obtain a substring we need to take into consideration a certain rule: Programmers are funny people. They like counting from 0!</p>

<p>In this case, to obtain the substring &ldquo;he&rdquo; from the string &ldquo;here&rdquo; we do:</p>

<p>
<div style="background: #111111; overflow:auto;width:auto;border:solid gray;border-width:.1em .1em .1em .8em;padding:.2em .6em;"><pre style="margin: 0; line-height: 125%"><span style="color: #0086d2">&quot;here&quot;</span><span style="color: #ffffff">.substring(</span><span style="color: #0086f7; font-weight: bold">0</span><span style="color: #ffffff">,</span><span style="color: #0086f7; font-weight: bold">2</span><span style="color: #ffffff">);</span>
</pre></div>


</p>

<p>The positions in the string are as follows:<br />
0 &ndash; h<br />
1 &ndash; e<br />
2 &ndash; r<br />
3 &ndash; e<br />
This is why we have to start counting a string from 0 when we want to get a substring. </p>

<p>One last concept we are going to use are variables. Variables are containers that we use to store data. We declare these variables to call their values in a program by typing their names. In JavaScript variables are declared like this:</p>

<p>
<div style="background: #111111; overflow:auto;width:auto;border:solid gray;border-width:.1em .1em .1em .8em;padding:.2em .6em;"><pre style="margin: 0; line-height: 125%"><span style="color: #fed136; font-weight: bold">var</span> <span style="color: #ffffff">myVar</span> <span style="color: #ffffff">=</span> <span style="color: #ffffff">data;</span> 
<span style="color: #fed136; font-weight: bold">var</span> <span style="color: #ffffff">a</span> <span style="color: #ffffff">=</span> <span style="color: #0086f7; font-weight: bold">5</span><span style="color: #ffffff">;</span>
<span style="color: #fed136; font-weight: bold">var</span> <span style="color: #ffffff">b</span> <span style="color: #ffffff">=</span> <span style="color: #0086d2">&quot;Jerry&quot;</span><span style="color: #ffffff">;</span>
<span style="color: #fed136; font-weight: bold">var</span> <span style="color: #ffffff">c</span> <span style="color: #ffffff">=</span> <span style="color: #fed136; font-weight: bold">true</span><span style="color: #ffffff">;</span>
</pre></div>



</p>

<p>We can use these variables to make different operations:</p>

<p>
<div style="background: #111111; overflow:auto;width:auto;border:solid gray;border-width:.1em .1em .1em .8em;padding:.2em .6em;"><pre style="margin: 0; line-height: 125%"><span style="color: #fed136; font-weight: bold">var</span> <span style="color: #ffffff">x</span> <span style="color: #ffffff">=</span> <span style="color: #0086f7; font-weight: bold">5</span><span style="color: #ffffff">;</span>
<span style="color: #ffffff">x</span> <span style="color: #ffffff">%</span> <span style="color: #0086f7; font-weight: bold">2</span> <span style="color: #ffffff">=</span> <span style="color: #0086f7; font-weight: bold">1</span><span style="color: #ffffff">;</span>
</pre></td></tr></table></div>

</p>

<p>If we declare a variable we can change its value in the same program:</p>

<p>
<div style="background: #111111; overflow:auto;width:auto;border:solid gray;border-width:.1em .1em .1em .8em;padding:.2em .6em;"><pre style="margin: 0; line-height: 125%"><span style="color: #fed136; font-weight: bold">var</span> <span style="color: #ffffff">a</span> <span style="color: #ffffff">=</span> <span style="color: #0086f7; font-weight: bold">7</span><span style="color: #ffffff">;</span>
<span style="color: #fed136; font-weight: bold">var</span> <span style="color: #ffffff">b</span> <span style="color: #ffffff">=</span> <span style="color: #0086f7; font-weight: bold">8</span><span style="color: #ffffff">;</span>
<span style="color: #fed136; font-weight: bold">var</span> <span style="color: #ffffff">a</span> <span style="color: #ffffff">=</span> <span style="color: #0086f7; font-weight: bold">9</span><span style="color: #ffffff">;</span>
</pre></td></tr></table></div>

</p>

<p>In the above example, the final values will be a = 9 and b = 8, despite having declared a = 7 beforehand.</p>

<p>And so, we learnt some of the basic concepts of programming. In the next lesson we are going to tackle the subject of loops which we will use in almost every program we are going to make in the future.<br />
</p>

</body>
</html>