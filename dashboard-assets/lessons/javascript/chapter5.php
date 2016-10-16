
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

<p align="center"><font size="6"><b><u>Chapter 5: Arrays</b></u></font></p><br>

<p><font size="5">We learned that variables can store numbers or strings. But what if we want to store more than one value? We can do that by using arrays. Arrays are able to store lists of data of different types, that can be accessed easily due to their fixed position.</p>

<p><!-- HTML generated using hilite.me --><div style="background: #111111; overflow:auto;width:auto;border:solid gray;border-width:.1em .1em .1em .8em;padding:.2em .6em;"><pre style="margin: 0; line-height: 125%"><span style="color: #fed136; font-weight: bold">var</span> <span style="color: #ffffff">array</span> <span style="color: #ffffff">=</span> <span style="color: #ffffff">[data,</span> <span style="color: #ffffff">data,</span> <span style="color: #ffffff">data]</span> <span style="color: #ffffff">;</span>
</pre></div>
</p>

<p>As seen above, arrays are defined using square brackets. Whenever we see this notation, we can be sure it is an array. Let's take a look at a more specific example:</p>

<p><!-- HTML generated using hilite.me --><div style="background: #111111; overflow:auto;width:auto;border:solid gray;border-width:.1em .1em .1em .8em;padding:.2em .6em;"><pre style="margin: 0; line-height: 125%"><span style="color: #fed136; font-weight: bold">var</span> <span style="color: #ffffff">numbers</span> <span style="color: #ffffff">=</span> <span style="color: #ffffff">[</span><span style="color: #0086f7; font-weight: bold">1</span><span style="color: #ffffff">,</span> <span style="color: #0086f7; font-weight: bold">2</span><span style="color: #ffffff">,</span> <span style="color: #0086f7; font-weight: bold">3</span><span style="color: #ffffff">,</span> <span style="color: #0086f7; font-weight: bold">4</span><span style="color: #ffffff">,</span> <span style="color: #0086f7; font-weight: bold">5</span><span style="color: #ffffff">];</span>
</pre></div>
</p>

<p>It's easy to store data in an array, but what about accessing it? Well, remember what we found out in the second chapter? Programmers are funny people. They like counting from 0. This is also the case with arrays:</p>

<p><!-- HTML generated using hilite.me --><div style="background: #111111; overflow:auto;width:auto;border:solid gray;border-width:.1em .1em .1em .8em;padding:.2em .6em;"><pre style="margin: 0; line-height: 125%"><span style="color: #fed136; font-weight: bold">var</span> <span style="color: #ffffff">numbers</span> <span style="color: #ffffff">=</span> <span style="color: #ffffff">[</span><span style="color: #0086f7; font-weight: bold">1</span><span style="color: #ffffff">,</span> <span style="color: #0086f7; font-weight: bold">2</span><span style="color: #ffffff">,</span> <span style="color: #0086f7; font-weight: bold">3</span><span style="color: #ffffff">,</span> <span style="color: #0086f7; font-weight: bold">4</span><span style="color: #ffffff">,</span> <span style="color: #0086f7; font-weight: bold">5</span><span style="color: #ffffff">];</span>
<span style="color: #ffffff">console.log(numbers[</span><span style="color: #0086f7; font-weight: bold">0</span><span style="color: #ffffff">]);</span>
</pre></div>
></p>

<p>This will print out number "1" from the array. Do you now remember how positions in a string worked? Well the same applies for arrays.</p>

<p>Now that we can access certain elements in an array, what happens if we want to get elements from an array with thousands of elements? In order to do so, we can use for loops to access elements progressively.</p>

<p><!-- HTML generated using hilite.me --><div style="background: #111111; overflow:auto;width:auto;border:solid gray;border-width:.1em .1em .1em .8em;padding:.2em .6em;"><pre style="margin: 0; line-height: 125%"><span style="color: #fed136; font-weight: bold">var</span> <span style="color: #ffffff">friends</span> <span style="color: #ffffff">=</span> <span style="color: #ffffff">[</span><span style="color: #0086d2">&quot;Peter&quot;</span><span style="color: #ffffff">,</span><span style="color: #0086d2">&quot;Jackson&quot;</span><span style="color: #ffffff">,</span><span style="color: #0086d2">&quot;Mike&quot;</span><span style="color: #ffffff">,</span><span style="color: #0086d2">&quot;John&quot;</span><span style="color: #ffffff">];</span>
<span style="color: #fed136; font-weight: bold">for</span><span style="color: #ffffff">(</span><span style="color: #fed136; font-weight: bold">var</span> <span style="color: #ffffff">i=</span><span style="color: #0086f7; font-weight: bold">0</span><span style="color: #ffffff">;</span> <span style="color: #ffffff">i&lt;</span> <span style="color: #ffffff">friends.length;</span> <span style="color: #ffffff">i++){</span>
<span style="color: #ffffff">console.log(</span><span style="color: #0086d2">&quot;It&#39;s &quot;</span> <span style="color: #ffffff">+</span> <span style="color: #ffffff">friends[i]</span> <span style="color: #ffffff">+</span> <span style="color: #0086d2">&quot;&#39;s birthday!&quot;</span><span style="color: #ffffff">);</span>
<span style="color: #ffffff">}</span>
</pre></div>
</p>

<p>As seen above, the .length property that we used for strings applies here for arrays as well.</p>

<p>Now that we've covered some basic array ground, let's go a little deeper. As I mentioned in the beginning of the chapter, arrays can store data of different types. These are called heterogeneous arrays:</p>

<p><!-- HTML generated using hilite.me --><div style="background: #111111; overflow:auto;width:auto;border:solid gray;border-width:.1em .1em .1em .8em;padding:.2em .6em;"><pre style="margin: 0; line-height: 125%"><span style="color: #fed136; font-weight: bold">var</span> <span style="color: #ffffff">array=[</span><span style="color: #0086d2">&quot;Hello&quot;</span><span style="color: #ffffff">,</span> <span style="color: #0086f7; font-weight: bold">20</span><span style="color: #ffffff">,</span> <span style="color: #fed136; font-weight: bold">false</span><span style="color: #ffffff">];</span>
</pre></div>
</p>

<p>A little unimpressive right? Well take a look at this:</p>

<p><!-- HTML generated using hilite.me --><div style="background: #111111; overflow:auto;width:auto;border:solid gray;border-width:.1em .1em .1em .8em;padding:.2em .6em;"><pre style="margin: 0; line-height: 125%"><span style="color: #fed136; font-weight: bold">var</span> <span style="color: #ffffff">array=[</span> <span style="color: #ffffff">[</span><span style="color: #0086f7; font-weight: bold">1</span><span style="color: #ffffff">,</span><span style="color: #0086f7; font-weight: bold">2</span><span style="color: #ffffff">,</span><span style="color: #0086f7; font-weight: bold">3</span><span style="color: #ffffff">]</span> <span style="color: #ffffff">,</span> <span style="color: #ffffff">[</span><span style="color: #0086f7; font-weight: bold">4</span><span style="color: #ffffff">,</span><span style="color: #0086f7; font-weight: bold">5</span><span style="color: #ffffff">]</span> <span style="color: #ffffff">];</span>
</pre></div>
</p>

<p>Say what? These are called nested arrays or arrays of arrays and you can make multidimensional arrays using them. The arrays inside the array can be different in length. You can have in the first one for example 5 elements and 2 in the second one. JavaScript allows these types of arrays, called jagged arrays.</p>

<p>And simply put, these are arrays. They are really efficient ways of storing data that can be then easily accessed in the program. In the next chapter we will see our first Object-Oriented Programming concepts or, for short, OOP.<br>
</p>

</body>
</html>