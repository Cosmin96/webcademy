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

<p align="center"><font size="6"><b><u>Chapter 6: Better tables</b></u></font></p><br>

<p><font size="5"><b>Head of the table</b></p>

<p>We can use the &lt;thead&gt; and &lt;tbody&gt; tags to make our table like like a proper table. These go within the &lt;table&gt; tag and stand for <strong>t</strong>able head and <strong>t</strong>able body, respectively.</p>

<p>The &lt;head&gt; HTML tag contains information about a webpage (e.g. its title) and the &lt;body&gt; tag contains the contents of the webpage. Similarly, the &lt;thead&gt; tag contains information about a table and the &lt;tbody&gt; tag contains the actual tabular data.</p>

<p><b>Table heads</b></p>

<p>We have just added a &lt;thead&gt; tag above the &lt;tbody&gt;. It will hold the heading for each column.</p>

<p>You add text to a &lt;thead&gt; similar to a &lt;tbody&gt;, like this:</p>

<p>
<div style="background: #111111; overflow:auto;width:auto;border:solid gray;border-width:.1em .1em .1em .8em;padding:.2em .6em;"><pre style="margin: 0; line-height: 125%"><span style="color: #fed136; font-weight: bold">&lt;thead&gt;&lt;tr&gt;&lt;th&gt;</span><font color="ffffff">Name</font><span style="color: #fed136; font-weight: bold">&lt;/th&gt;&lt;/tr&gt;&lt;/thead&gt;</span>
</pre></td></tr></table></div>
</p>

<p>1. First, we have an opening &lt;thead&gt; tag for the table head.<br>
2. Then we have an opening &lt;tr&gt; tag that starts the row.<br>
3. After that, a &lt;th&gt;&lt;/th&gt; cell for the Name column heading. Notice that we use &lt;th&gt;&lt;/th&gt; for the table heading cells instead of &lt;td&gt;&lt;/td&gt;.<br>
4. Then another &lt;th&gt;&lt;/th&gt; cell for the Favourite City column heading.<br>
5. Finally, we close the row element with a closing &lt;/tr&gt; tag, and close out the table heading element with a closing &lt;/thead&gt; tag.</p>

<p><b>Naming your table</b></p>

<p>The previous table is missing a title. In order to add one, we need to use the colspan attribute for the &lt;th&gt; tag. Table cells take up to 1 column by default. If we want a table cell to take up the space of 3 columns instead of 1, we can set the colspan attribute to 3.</p>

<p>It should look like this:</p>

<p>
<div style="background: #111111; overflow:auto;width:auto;border:solid gray;border-width:.1em .1em .1em .8em;padding:.2em .6em;"><pre style="margin: 0; line-height: 125%"><span style="color: #fed136; font-weight: bold">&lt;th</span> <span style="color: #ff0086; font-weight: bold">colspan=</span><span style="color: #0086d2">&quot;3&quot;</span><span style="color: #fed136; font-weight: bold">&gt;</span><font color="ffffff">My title now takes three columns!</font><span style="color: #fed136; font-weight: bold">&lt;/th&gt;</span>
</pre></td></tr></table></div>

</p>

<p><b>Styling the head</b></p>

<p>The table is now starting to look better, but it still lacks style. We have added some styling to the table to make it a bit easier to read, check it out.</p>

<p>Feel free to play around with any of the style attributes added; you will learn much more about these later in the CSS lessons.</p>

<p>If you want to add more than one style, you just separate your styles with a semicolon, like this:</p>

<p>
<div style="background: #111111; overflow:auto;width:auto;border:solid gray;border-width:.1em .1em .1em .8em;padding:.2em .6em;"><pre style="margin: 0; line-height: 125%"><span style="color: #fed136; font-weight: bold">&lt;th</span> <span style="color: #ff0086; font-weight: bold">style=</span><span style="color: #0086d2">&quot;font-size:12px; color:red&quot;</span><span style="color: #fed136; font-weight: bold">&gt;&lt;/th&gt;</span>
</pre></td></tr></table></div>

</p>

<p><b>Summary</b></p>

<p>We have learned a lot so far! What can you do now?</p>

<p>1. Write an HTML comment<br>
2. Create a list (either ordered or unordered)<br>
3. Make text stand out using &lt;em&gt; and &lt;strong&gt;<br>
4. Change the colour, size, and alignment of text using the style attribute<br>
5. Create HTML tables<br>
</p>

</body>
</html>
