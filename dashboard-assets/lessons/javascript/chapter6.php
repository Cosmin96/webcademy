
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

<p align="center"><font size="6"><b><u>Chapter 6: Objects</b></u></font></p><br>

<p><font size="5">Alright, so by now we know a lot about programming and using different concepts. Let&rsquo;s move on to more pressing issues like objects in JavaScript. As I said in the previous chapter, we are going to learn some Object-Oriented Programming concepts, and objects are some of them. With objects we can bring functions and variables into the same place and use them even more efficient and easily.</p>

<p>You can think of objects in JavaScript just as objects in real life. Let&rsquo;s take for example a car. A car can have a name, a brand and a color. Well so can a programmed one:</p>

<p><!-- HTML generated using hilite.me --><div style="background: #111111; overflow:auto;width:auto;border:solid gray;border-width:.1em .1em .1em .8em;padding:.2em .6em;"><pre style="margin: 0; line-height: 125%"><span style="color: #fed136; font-weight: bold">var</span> <span style="color: #ffffff">Car</span> <span style="color: #ffffff">=</span> <span style="color: #ffffff">{</span>
<span style="color: #ffffff">name</span> <span style="color: #ffffff">=</span> <span style="color: #0086d2">&quot;Focus&quot;</span><span style="color: #ffffff">,</span>
<span style="color: #ffffff">brand</span> <span style="color: #ffffff">=</span> <span style="color: #0086d2">&quot;Ford&quot;</span><span style="color: #ffffff">,</span>
<span style="color: #ffffff">color</span> <span style="color: #ffffff">=</span> <span style="color: #0086d2">&quot;white&quot;</span><span style="color: #ffffff">,</span>
<span style="color: #ffffff">};</span>
</pre></div>
</p>

<p>An empty object can be created easily:</p>

<p><!-- HTML generated using hilite.me --><div style="background: #111111; overflow:auto;width:auto;border:solid gray;border-width:.1em .1em .1em .8em;padding:.2em .6em;"><pre style="margin: 0; line-height: 125%"><span style="color: #fed136; font-weight: bold">var</span> <span style="color: #ffffff">Car</span> <span style="color: #ffffff">=</span> <span style="color: #fed136; font-weight: bold">new</span> <span style="color: #ffffff">Object();</span>
</pre></div>
</p>

<p>You can then add properties to it by doing so:</p>

<p><!-- HTML generated using hilite.me --><div style="background: #111111; overflow:auto;width:auto;border:solid gray;border-width:.1em .1em .1em .8em;padding:.2em .6em;"><pre style="margin: 0; line-height: 125%"><span style="color: #ffffff">Car.name</span> <span style="color: #ffffff">=</span> <span style="color: #0086d2">&quot;Focus&quot;</span><span style="color: #ffffff">;</span>
<span style="color: #ffffff">Car.color</span> <span style="color: #ffffff">=</span> <span style="color: #0086d2">&quot;white&quot;</span><span style="color: #ffffff">;</span>
</pre></div>
</code></p>

<p>As you can see, objects allow us to represent real world data and situations more easily. Up until now we only used properties. What about functions? We usually call them methods as these are actually functions associated to an object.</p>

<p><!-- HTML generated using hilite.me --><div style="background: #111111; overflow:auto;width:auto;border:solid gray;border-width:.1em .1em .1em .8em;padding:.2em .6em;"><pre style="margin: 0; line-height: 125%"><span style="color: #ffffff">Car.setcolor</span> <span style="color: #ffffff">=</span> <span style="color: #fed136; font-weight: bold">function</span><span style="color: #ffffff">(newColor)</span> <span style="color: #ffffff">{</span>
<span style="color: #ffffff">Car.color</span> <span style="color: #ffffff">=</span> <span style="color: #ffffff">newColor;</span>
<span style="color: #ffffff">}</span>
<span style="color: #ffffff">Car.setcolor</span> <span style="color: #ffffff">=</span> <span style="color: #0086d2">&quot;red&quot;</span><span style="color: #ffffff">;</span>
</pre></div>
</p>

<p>So we just painted our car red. There is not that much of difference in syntax between methods and functions. Just remember that methods are functions tied to objects and every parameter will use the object&rsquo;s name.</p>

<p>Let&rsquo;s stop a little for a quick tip. Instead of defining the same method for multiple objects, we can create a universal method that uses the keyword &ldquo;this&rdquo;. </p>

<p><!-- HTML generated using hilite.me --><div style="background: #111111; overflow:auto;width:auto;border:solid gray;border-width:.1em .1em .1em .8em;padding:.2em .6em;"><pre style="margin: 0; line-height: 125%"><span style="color: #fed136; font-weight: bold">var</span> <span style="color: #ffffff">setcolor</span> <span style="color: #ffffff">=</span> <span style="color: #fed136; font-weight: bold">function</span><span style="color: #ffffff">(newColor)</span> <span style="color: #ffffff">{</span>
<span style="color: #fed136; font-weight: bold">this</span><span style="color: #ffffff">.color</span> <span style="color: #ffffff">=</span> <span style="color: #ffffff">newColor;</span>
<span style="color: #ffffff">}</span>
<span style="color: #fed136; font-weight: bold">var</span> <span style="color: #ffffff">Car</span> <span style="color: #ffffff">=</span> <span style="color: #fed136; font-weight: bold">new</span> <span style="color: #ffffff">Object();</span>
<span style="color: #ffffff">Car.color</span> <span style="color: #ffffff">=</span> <span style="color: #0086d2">&quot;white&quot;</span><span style="color: #ffffff">;</span>
<span style="color: #ffffff">Car.setcolor</span> <span style="color: #ffffff">=</span> <span style="color: #ffffff">setcolor;</span>
<span style="color: #ffffff">Car.setcolor(</span><span style="color: #0086d2">&quot;red&quot;</span><span style="color: #ffffff">);</span>
</pre></div>
</p>

<p>So what we do is actually creating a function and then linking the object to the functions. The &ldquo;this&rdquo; keyword will just remember the object we are using.</p>

<p>Until now we&rsquo;ve only seen methods that change parameters. Of course we can also create methods that actually do things. Just like functions!</p>

<p><!-- HTML generated using hilite.me --><div style="background: #111111; overflow:auto;width:auto;border:solid gray;border-width:.1em .1em .1em .8em;padding:.2em .6em;"><pre style="margin: 0; line-height: 125%"><span style="color: #fed136; font-weight: bold">var</span> <span style="color: #ffffff">Rectangle</span> <span style="color: #ffffff">=</span> <span style="color: #fed136; font-weight: bold">new</span> <span style="color: #ffffff">Object();</span>
<span style="color: #ffffff">Rectangle.width</span> <span style="color: #ffffff">=</span> <span style="color: #0086f7; font-weight: bold">4</span><span style="color: #ffffff">;</span>
<span style="color: #ffffff">Rectangle.height</span> <span style="color: #ffffff">=</span> <span style="color: #0086f7; font-weight: bold">6</span><span style="color: #ffffff">;</span>
<span style="color: #ffffff">Rectangle.calculateArea</span> <span style="color: #ffffff">=</span> <span style="color: #fed136; font-weight: bold">function</span><span style="color: #ffffff">()</span> <span style="color: #ffffff">{</span>
<span style="color: #fed136; font-weight: bold">return</span> <span style="color: #fed136; font-weight: bold">this</span><span style="color: #ffffff">.width</span> <span style="color: #ffffff">*</span> <span style="color: #fed136; font-weight: bold">this</span><span style="color: #ffffff">.height;</span>
<span style="color: #ffffff">}</span>
</pre></div>
</p>

<p>Have you noticed the keyword &ldquo;new&rdquo; that we keep using when creating an object? These are called constructors, ways of creating objects. &ldquo;New&rdquo; is pre-defined in JavaScript and creates objects without any properties and methods. We&rsquo;re going to take a look at how we&rsquo;re going to create our custom constructor.</p>

<p><!-- HTML generated using hilite.me --><div style="background: #111111; overflow:auto;width:auto;border:solid gray;border-width:.1em .1em .1em .8em;padding:.2em .6em;"><pre style="margin: 0; line-height: 125%"><span style="color: #fed136; font-weight: bold">function</span> <span style="color: #ffffff">Car(name,</span> <span style="color: #ffffff">brand,</span> <span style="color: #ffffff">color){</span>
<span style="color: #fed136; font-weight: bold">this</span><span style="color: #ffffff">.name</span> <span style="color: #ffffff">=</span> <span style="color: #ffffff">name;</span>
<span style="color: #fed136; font-weight: bold">this</span><span style="color: #ffffff">.brand</span> <span style="color: #ffffff">=</span> <span style="color: #ffffff">brand;</span>
<span style="color: #fed136; font-weight: bold">this</span><span style="color: #ffffff">.color</span> <span style="color: #ffffff">=</span> <span style="color: #ffffff">color;</span>
<span style="color: #ffffff">}</span>
</pre></div>
</p>

<p>The constructor above uses the parameters and &ldquo;this&rdquo; to assign the variables to an object. Now we can define an object and it&rsquo;s parameters using only one line:</p>

<p><!-- HTML generated using hilite.me --><div style="background: #111111; overflow:auto;width:auto;border:solid gray;border-width:.1em .1em .1em .8em;padding:.2em .6em;"><pre style="margin: 0; line-height: 125%"><span style="color: #fed136; font-weight: bold">var</span> <span style="color: #ffffff">Car</span> <span style="color: #ffffff">=</span> <span style="color: #fed136; font-weight: bold">new</span> <span style="color: #ffffff">Car(</span><span style="color: #0086d2">&quot;Focus&quot;</span><span style="color: #ffffff">,</span> <span style="color: #0086d2">&quot;Ford&quot;</span><span style="color: #ffffff">,</span> <span style="color: #0086d2">&quot;white&quot;</span><span style="color: #ffffff">);</span>
</pre></div>
</p>

<p>An object is just another type, just like numbers, strings or even arrays. Speaking of the wolf, what if we could save objects in arrays? Does it sound ridiculous? Well take a look:</p>

<p><!-- HTML generated using hilite.me --><div style="background: #111111; overflow:auto;width:auto;border:solid gray;border-width:.1em .1em .1em .8em;padding:.2em .6em;"><pre style="margin: 0; line-height: 125%"><span style="color: #fed136; font-weight: bold">var</span> <span style="color: #ffffff">Garage</span> <span style="color: #ffffff">=</span> <span style="color: #fed136; font-weight: bold">new</span> <span style="color: #ffffff">Array();</span>
<span style="color: #ffffff">Garage[</span><span style="color: #0086f7; font-weight: bold">0</span><span style="color: #ffffff">]</span> <span style="color: #ffffff">=</span> <span style="color: #fed136; font-weight: bold">new</span> <span style="color: #ffffff">Car(</span><span style="color: #0086d2">&quot;Focus&quot;</span><span style="color: #ffffff">,</span><span style="color: #0086d2">&quot;Ford&quot;</span><span style="color: #ffffff">,</span><span style="color: #0086d2">&quot;white&quot;</span><span style="color: #ffffff">);</span>
<span style="color: #ffffff">Garage[</span><span style="color: #0086f7; font-weight: bold">1</span><span style="color: #ffffff">]</span> <span style="color: #ffffff">=</span> <span style="color: #fed136; font-weight: bold">new</span> <span style="color: #ffffff">Car(</span><span style="color: #0086d2">&quot;Aventador&quot;</span><span style="color: #ffffff">,</span> <span style="color: #0086d2">&quot;Lamborghini&quot;</span><span style="color: #ffffff">,</span><span style="color: #0086d2">&quot;red&quot;</span><span style="color: #ffffff">);</span>
</pre></div>
</p>

<p>As you can see, we are using our constructor from before and creating objects directly into the array.</p>

<p>
What happens if we do not know what the type of an object is? If we wanted to check that we can use the &ldquo;typeof&rdquo; command:</p>

<p><!-- HTML generated using hilite.me --><div style="background: #111111; overflow:auto;width:auto;border:solid gray;border-width:.1em .1em .1em .8em;padding:.2em .6em;"><pre style="margin: 0; line-height: 125%"><span style="color: #fed136; font-weight: bold">var</span> <span style="color: #ffffff">Car</span> <span style="color: #ffffff">=</span> <span style="color: #fed136; font-weight: bold">new</span> <span style="color: #ffffff">Car(</span><span style="color: #0086d2">&quot;Focus&quot;</span><span style="color: #ffffff">,</span><span style="color: #0086d2">&quot;Ford&quot;</span><span style="color: #ffffff">,</span><span style="color: #0086d2">&quot;white&quot;</span><span style="color: #ffffff">);</span>
<span style="color: #ffffff">console.log(</span> <span style="color: #fed136; font-weight: bold">typeof</span> <span style="color: #ffffff">Car);</span>
</pre></div>
</p>

<p>Another thing we can do with objects is check if an object has a particular property:</p>

<p><!-- HTML generated using hilite.me --><div style="background: #111111; overflow:auto;width:auto;border:solid gray;border-width:.1em .1em .1em .8em;padding:.2em .6em;"><pre style="margin: 0; line-height: 125%"><span style="color: #ffffff">console.log(</span> <span style="color: #ffffff">Car.hasOwnProperty(</span><span style="color: #0086d2">&#39;engine&#39;</span><span style="color: #ffffff">));</span>
</pre></div>
</p>

<p>The example above should print false as we do not have an engine property attached to the object Car.</p>

<p>Now let&rsquo;s recap a little: we learned what objects are, how to assign them properties and methods, how to use constructors and how to do a lot of other stuff. Be proud of yourself! Now let&rsquo;s explore more of what OOP has to offer.</p>

<p>We learnt before how to define a constructor. What you didn&rsquo;t learn is that when you define a constructor, you basically create a class as well. A class can be regarded as a type of objects, just as numbers are types of data.</p>

<p>So we can expect a class to have properties and methods, but what keeps track of all of these? The answer is a prototype. The prototype of a class is defined automatically in JavaScript using a constructor. This prototype will remember that a class has a certain property and a certain method.</p>

<p>But why do we use classes? Classes are very important in OOP as they tell us information about an object. Actually, objects are instances of classes. </p>

<p>An important concept in OOP is inheritance. Inheritance allows a class to use the methods and properties of other classes. We will see a little further why this is important. Let&rsquo;s first create two classes:</p>

<p><!-- HTML generated using hilite.me --><div style="background: #111111; overflow:auto;width:auto;border:solid gray;border-width:.1em .1em .1em .8em;padding:.2em .6em;"><pre style="margin: 0; line-height: 125%"><span style="color: #fed136; font-weight: bold">function</span> <span style="color: #ffffff">Plant</span> <span style="color: #ffffff">(</span> <span style="color: #ffffff">type,</span> <span style="color: #ffffff">color){</span>
<span style="color: #fed136; font-weight: bold">this</span><span style="color: #ffffff">.type</span> <span style="color: #ffffff">=</span> <span style="color: #ffffff">type;</span>
<span style="color: #fed136; font-weight: bold">this</span> <span style="color: #ffffff">color</span> <span style="color: #ffffff">=</span> <span style="color: #ffffff">color;</span>
<span style="color: #ffffff">}</span>
<span style="color: #fed136; font-weight: bold">function</span> <span style="color: #ffffff">Fruit(</span> <span style="color: #ffffff">type){</span>
<span style="color: #fed136; font-weight: bold">this</span><span style="color: #ffffff">.type</span> <span style="color: #ffffff">=</span> <span style="color: #ffffff">type;</span>
<span style="color: #ffffff">}</span>
<span style="color: #ffffff">Fruit.prototype</span> <span style="color: #ffffff">=</span> <span style="color: #fed136; font-weight: bold">new</span> <span style="color: #ffffff">Plant();</span>
</pre></div>
</p>

<p>We just created two classes: Plant and Fruit. We then define the prototype of Fruit as Plant and, in this way, Fruit inherits the properties and methods of Plant (in this case color). Can you see now why inheritance is that important?</p>

<p>One last thing before we finish this chapter (finally!). Remember when I mentioned global and local variables? Well I mentioned them because they are really important for OOP. Remember what they did? Well global variables, or public as we like to call them in OOP, are variables that can be accessed outside a class. Local, or private variables, can only be accessed inside a class.</p>

<p>It was a little difficult, wasn&rsquo;t it? OOP is a little different than normal programming. Well, we&rsquo;re in luck as we only wanted to touch a little of the concepts of it and understand how to code the basics for what we&rsquo;re going to do next. Tune in!<br>
</p>

</body>
</html>