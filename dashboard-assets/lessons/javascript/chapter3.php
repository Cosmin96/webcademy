
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

<p align="center"><font size="6"><b><u>Chapter 3: Loops and statements</b></u></font></p><br>

<p><font size="5">In the last chapter we learned to use basic concepts of programming and to apply them in different situations. Now, we are going to learn a new concept that we will be using from now on. This is called loops and statements.</p>

<p>In programming we use statements to specify actions to the computer. These statements have conditions that will determine what happens. Imagine the use of statements is like driving a car on a road, when you get to a crossroad. The way the car will go can vary. So is with programming. The choice a program makes is based on conditions.</p>

<p>The most important statements in programming are:</p>

<p>- If statement<br />
- For loop<br />
- While loop<br />
- Switch statement</p>

<p><b>1) If Statement</b></p>

<p>An if statement determines what command a program will execute. It is formed of an &ldquo;if&rdquo; keyword and &ldquo;else&rdquo;, and in the case we have more than two commands, an &ldquo;else if&rdquo;. An if statement looks like this:</p>

<p>
<div style="background: #111111; overflow:auto;width:auto;border:solid gray;border-width:.1em .1em .1em .8em;padding:.2em .6em;"><pre style="margin: 0; line-height: 125%"><span style="color: #fed136; font-weight: bold">if</span><span style="color: #ffffff">(condition){</span>
<span style="color: #ffffff">instruction1;</span>
<span style="color: #ffffff">}</span>
<span style="color: #fed136; font-weight: bold">else</span> <span style="color: #ffffff">instruction2;</span>
</pre></div>

</p>

<p>The condition can be anything we need. As mentioned in the previous chapter, a condition would be to check a number is even or odd. Let&rsquo;s say we want to create a program that prints a number if it is even, and prints the number plus 1 if it is odd:</p>

<p>
<div style="background: #111111; overflow:auto;width:auto;border:solid gray;border-width:.1em .1em .1em .8em;padding:.2em .6em;"><pre style="margin: 0; line-height: 125%"><span style="color: #fed136; font-weight: bold">var</span> <span style="color: #ffffff">x=</span><span style="color: #0086f7; font-weight: bold">5</span><span style="color: #ffffff">;</span>
<span style="color: #fed136; font-weight: bold">if</span><span style="color: #ffffff">(x</span> <span style="color: #ffffff">%</span> <span style="color: #0086f7; font-weight: bold">2</span> <span style="color: #ffffff">===</span> <span style="color: #0086f7; font-weight: bold">0</span><span style="color: #ffffff">){</span>
<span style="color: #ffffff">console.log(x);</span>
<span style="color: #ffffff">}</span>
<span style="color: #fed136; font-weight: bold">else</span> <span style="color: #ffffff">console.log(x+</span><span style="color: #0086f7; font-weight: bold">1</span><span style="color: #ffffff">);</span>
</pre></div>

</p>

<p>In the above example, we have an x variable declared to 5. In the if statement we check if the number is even and we print it out. If it is not even, the else command will return an x+1.</p>

<p>The if statement is easy to use and it is also efficient. An if statement can use more conditions at once by using the logic operators &amp;&amp; or || mentioned in the previous chapter.</p>

<p><b>2) For Loop</b></p>

<p>For loops are also statements that allow the code to be executed repeatedly. A for loop uses a counter that is increased at each iteration so that the command is executed a limited number of times. A for-loop looks like this:</p>

<p><div style="background: #111111; overflow:auto;width:auto;border:solid gray;border-width:.1em .1em .1em .8em;padding:.2em .6em;"><pre style="margin: 0; line-height: 125%"><span style="color: #fed136; font-weight: bold">for</span><span style="color: #ffffff">(declare</span> <span style="color: #ffffff">counter;</span> <span style="color: #ffffff">condition;</span> <span style="color: #ffffff">increment</span> <span style="color: #ffffff">counter){</span>
<span style="color: #ffffff">instruction;</span>
<span style="color: #ffffff">}</span>
</pre></div>
</p>

<p>Let&rsquo;s have a look at our first for-loop:</p>

<p>
<div style="background: #111111; overflow:auto;width:auto;border:solid gray;border-width:.1em .1em .1em .8em;padding:.2em .6em;"><pre style="margin: 0; line-height: 125%"><span style="color: #fed136; font-weight: bold">for</span><span style="color: #ffffff">(</span><span style="color: #fed136; font-weight: bold">var</span> <span style="color: #ffffff">counter</span> <span style="color: #ffffff">=</span> <span style="color: #0086f7; font-weight: bold">0</span><span style="color: #ffffff">;</span> <span style="color: #ffffff">counter</span> <span style="color: #ffffff">&lt;</span> <span style="color: #0086f7; font-weight: bold">5</span><span style="color: #ffffff">;</span> <span style="color: #ffffff">counter++){</span>
<span style="color: #ffffff">console.log(“Hello”);</span>
<span style="color: #ffffff">}</span>
</pre></div>

</p>

<p>The for loop above takes a variable and assigns it the value 0, then it prints &ldquo;Hello&rdquo; and increments the value by 1 until the condition is not satisfied. In this case, the message will be printed 5 times.</p>

<p>Incrementing means adding the value of 1 to the counter each time the iteration takes place. We write that by using counter++. There&rsquo;s also the concept of decrementing, which is written counter--.</p>

<p><b>3) While Loop</b></p>

<p>The while loop is similar to the for loop as it reruns the code until a condition is no longer satisfied. The only difference between these two is that while uses Boolean conditions. The while loop looks like this:</p>

<p>
<div style="background: #111111; overflow:auto;width:auto;border:solid gray;border-width:.1em .1em .1em .8em;padding:.2em .6em;"><pre style="margin: 0; line-height: 125%"><span style="color: #fed136; font-weight: bold">while</span><span style="color: #ffffff">(condition){</span>
<span style="color: #ffffff">instruction;</span>
<span style="color: #ffffff">}</span>
</pre></div>

</p>

<p>Let&rsquo;s see how a while loop works now:</p>

<p><div style="background: #111111; overflow:auto;width:auto;border:solid gray;border-width:.1em .1em .1em .8em;padding:.2em .6em;"><pre style="margin: 0; line-height: 125%"><span style="color: #fed136; font-weight: bold">var</span> <span style="color: #ffffff">x</span> <span style="color: #ffffff">=</span> <span style="color: #fed136; font-weight: bold">true</span><span style="color: #ffffff">;</span>
<span style="color: #fed136; font-weight: bold">while</span><span style="color: #ffffff">(x</span> <span style="color: #ffffff">===</span> <span style="color: #fed136; font-weight: bold">true</span><span style="color: #ffffff">){</span>
<span style="color: #ffffff">console.log(“Hello”);</span>
<span style="color: #ffffff">x</span> <span style="color: #ffffff">=</span> <span style="color: #fed136; font-weight: bold">false</span><span style="color: #ffffff">;</span>
<span style="color: #ffffff">}</span>
</pre></div>
</p>

<p>The while loop above runs the code only once. We assign &ldquo;true&rdquo; to x and we use the while loop to check on the condition. If the condition is satisfied, the message is printed and the value of x is changed to &ldquo;false&rdquo;.</p>

<p>Why do we change the value of x to &ldquo;false&rdquo;. This is a thing called infinite loops and we never want this to happen. In the worst case, the program will run the code a few times and then crash. We want to avoid infinite loops as much as possible. An infinite loop is therefore a loop that has it&rsquo;s condition satisfied continuously and never ends. Think of it as a car with unlimited gas, that never stops moving.</p>

<p>Another version of the while loop is the do while loop. A do while loop is the same as a while, but it makes sure that at least one iteration of the code is done. An example would be:</p>

<p><!-- HTML generated using hilite.me --><div style="background: #111111; overflow:auto;width:auto;border:solid gray;border-width:.1em .1em .1em .8em;padding:.2em .6em;"><pre style="margin: 0; line-height: 125%"><span style="color: #fed136; font-weight: bold">var</span> <span style="color: #ffffff">x</span> <span style="color: #ffffff">=</span> <span style="color: #0086f7; font-weight: bold">2</span>
<span style="color: #fed136; font-weight: bold">do</span><span style="color: #ffffff">{</span>
<span style="color: #ffffff">console.log(x);</span>
<span style="color: #ffffff">}</span>
<span style="color: #fed136; font-weight: bold">while</span> <span style="color: #ffffff">(</span> <span style="color: #ffffff">x</span> <span style="color: #ffffff">!=</span> <span style="color: #0086f7; font-weight: bold">2</span><span style="color: #ffffff">)</span>
</pre></div>
</p>

<p>In the above example we made sure the condition is not executed as we declared x as 2 and the condition was that x should be different than 2. However, the program runs one time due to the do loop and prints x. When the program reaches while, it skips it and ends running.</p>

<p>As seen above, there is a small difference between while and for loops, but when can we use each? For is useful when we know before how many iterations we want and we can keep track of it with a counter. While is useful when we don&rsquo;t know exactly how many times we want the code to run. However, we can use counters in while loops as well:</p>

<p><!-- HTML generated using hilite.me --><div style="background: #111111; overflow:auto;width:auto;border:solid gray;border-width:.1em .1em .1em .8em;padding:.2em .6em;"><pre style="margin: 0; line-height: 125%"><span style="color: #fed136; font-weight: bold">var</span> <span style="color: #ffffff">x</span> <span style="color: #ffffff">=</span> <span style="color: #0086f7; font-weight: bold">0</span><span style="color: #ffffff">;</span>
<span style="color: #fed136; font-weight: bold">while</span><span style="color: #ffffff">(</span> <span style="color: #ffffff">x</span> <span style="color: #ffffff">&lt;</span> <span style="color: #0086f7; font-weight: bold">5</span><span style="color: #ffffff">){</span>
<span style="color: #ffffff">console.log(x);</span>
<span style="color: #ffffff">x</span> <span style="color: #ffffff">=</span> <span style="color: #ffffff">x</span> <span style="color: #ffffff">+</span> <span style="color: #0086f7; font-weight: bold">1</span><span style="color: #ffffff">;</span>
<span style="color: #ffffff">}</span>
</pre></div>
</p>

<p>The program will print the value of x 5 times and then it will end as the condition is no longer satisfied. In some cases, it is a matter of preference whether to use for or while.</p>

<p><b>4) Switch Statement</b></p>

<p>The switch statement is an advanced statement that is used whenever we have too many cases that an if statement has to analyze. The switch statement looks like this:</p>

<p>
<!-- HTML generated using hilite.me --><div style="background: #111111; overflow:auto;width:auto;border:solid gray;border-width:.1em .1em .1em .8em;padding:.2em .6em;"><pre style="margin: 0; line-height: 125%"><span style="color: #fed136; font-weight: bold">switch</span><span style="color: #ffffff">(myName){</span>
<span style="color: #fed136; font-weight: bold">case</span> <span style="color: #ffffff">“Jonas”:</span>
<span style="color: #ffffff">console.log(“Jonas”);</span>
<span style="color: #fed136; font-weight: bold">break</span><span style="color: #ffffff">;</span>
<span style="color: #fed136; font-weight: bold">case</span> <span style="color: #ffffff">“James”</span>
<span style="color: #ffffff">console.log(“James”);</span>
<span style="color: #fed136; font-weight: bold">break</span><span style="color: #ffffff">;</span>
<span style="color: #fed136; font-weight: bold">default</span><span style="color: #ffffff">:</span>
<span style="color: #ffffff">myName</span> <span style="color: #ffffff">=</span> <span style="color: #ffffff">“Peter”;</span>
<span style="color: #ffffff">}</span>
</pre></div>

</p>

<p>The switch statement above analyzes each case and compares the myName variable with each case. If a certain case is satisfied, the commands in the case are run by the program.</p>

<p>Switch statements are mostly used when there are too many cases a program can take, instead of using an if statement with a lot of &ldquo;else ifs&rdquo;. </p>

<p>Finally, we can use something called nested loops, which means we can combine statements to further control the program:</p>

<p><!-- HTML generated using hilite.me --><div style="background: #111111; overflow:auto;width:auto;border:solid gray;border-width:.1em .1em .1em .8em;padding:.2em .6em;"><pre style="margin: 0; line-height: 125%"><span style="color: #fed136; font-weight: bold">for</span><span style="color: #ffffff">(</span><span style="color: #fed136; font-weight: bold">var</span> <span style="color: #ffffff">i=</span><span style="color: #0086f7; font-weight: bold">0</span><span style="color: #ffffff">;</span> <span style="color: #ffffff">i&lt;=</span><span style="color: #0086f7; font-weight: bold">4</span><span style="color: #ffffff">;i++){</span>
<span style="color: #fed136; font-weight: bold">for</span><span style="color: #ffffff">(</span><span style="color: #fed136; font-weight: bold">var</span> <span style="color: #ffffff">j=</span><span style="color: #0086f7; font-weight: bold">0</span><span style="color: #ffffff">;</span> <span style="color: #ffffff">j&lt;=</span><span style="color: #0086f7; font-weight: bold">4</span><span style="color: #ffffff">;j++){</span>
<span style="color: #ffffff">console.log(*);</span>
<span style="color: #ffffff">}</span>
<span style="color: #ffffff">console.log(“\n”);</span>
<span style="color: #ffffff">}</span>
</pre></div>
</p>

<p>The example above will display 4 rows of 4 asterisks each. This is a good example of how nested loops can be used, although different statements can be combined with each other.<br />
</p>

</body>
</html>