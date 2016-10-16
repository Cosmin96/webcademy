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

<p align="center"><font size="6"><b><u>Chapter 2: Body elements</b></u></font></p><br>

<p><font size="5"><b>Paragraphs and headings</b></p>

<p>So far, we have learned when and why we use HTML. Moreover, we have also learned how to:</p>

<p>a. Set up from the scratch an HTML file with tags<br>
b. Give the webpage a correspponding title.<br>
c. Create paragraphs</p>

<p>Now, in this lesson, we will learn how to give our paragraphs headings using <strong>heading</strong> tags. We will start with the &lt;h1&gt; tag, as the content between this tag will be the biggest in size!</p>

<p><strong>Try it:</strong></p>

<p><em>1. In the body section, create a heading by typing in an &lt;h1&gt; tag.<br>
2. Add some content that you like.<br>
3. Close the element with a closing tag &lt;/h1&gt;. Your content should now be between &lt;h1&gt; and &lt;/h1&gt;.<br>
4. Under the heading tags, create two paragraphs using &lt;p&gt; tags adding some content that you like .</em></p>

<p><b>More about headings!</b></p>

<p>The fact is that HTML actually lets us have more than one heading size. There are six heading sizes in total, where &lt;h1&gt; is the highest and &lt;h6&gt; is the lowest.</p>

<p><strong>
See it for yourself:</strong></p>

<p><em>1. Your code currently has one &lt;h1&gt; heading and two paragraphs from the last exercise.<br>
2. Add an &lt;h3&gt; heading before the second paragraph.<br>
3. Add an &lt;h5&gt; heading right after the second paragraph, and then add a third paragraph after this heading. See the difference in size?<br>
4. Add three more headings to the code, making use of &lt;h2&gt;, &lt;h4&gt; and &lt;h6&gt;. Also, make sure to close all your tags.<br>
5. Under each heading, add a short paragraph. Don't forget paragraphs need opening and closing &lt;p&gt; &lt;/p&gt; tags.</em></p>

<p><b>
Quick summary</b></p>

<p>
Here's a quick summary of everything we have learned so far:</p>

<p>
1. HTML gives websites structure.<br>
2. HTML files are opened using a browser, and its task is to show us the file.<br>
3. HTML files have a &lt;head&gt; and a &lt;body&gt;.<br>
4. In the head, we have the &lt;title&gt; tags, and we use them to specify the website's name.<br>
5. How to make paragraphs and headings.</p>

<p><b>
You are going places!</b></p>

<p>
What if you wanted the user to be directed to another part of your website, or even to a completely different website? Well, for that purpose, you use hyperlinks, or links, to keep it short!</p>

<p>
<div style="background: #111111; overflow:auto;width:auto;border:solid gray;border-width:.1em .1em .1em .8em;padding:.2em .6em;"><pre style="margin: 0; line-height: 125%"><span style="color: #fed136; font-weight: bold">&lt;a</span> <span style="color: #ff0086; font-weight: bold">href=</span><span style="color: #ffffff"> </span><span style="color: #0086d2">&quot;http://www.facebook.com&quot;</span><span style="color: #fed136; font-weight: bold">&gt;</span><font color="ffffff">My favourite social network!</font><span style="color: #fed136; font-weight: bold">&lt;/a&gt;</span>
</pre></td></tr></table></div>
</p>

<p>
1. First, there is an opening &lt;a&gt; tag and that tag has an attribute called href. The href value tells your link where you want it to go, in this case http://www.facebook.com<br>
2. Then, there is a description of your link between the opening &lt;a&gt; and your closing &lt;/a&gt; tags. This is what you will click on.<br>
3. Finally, you have the closing &lt;/a&gt; tag.</p>

<p><b>
Adding images</b></p>

<p>
Images can be added to websites to make them look better.</p>

<p>
To do so, we use an image tag such as &lt;img&gt;. This tag works differently from the others, because instead of putting the content between the tags, the tag is told where to get the picture from using src. It is also different because it has no ending tag, but only a / in the tag to close it: &lt;img src="url" /&gt;.</p>

<p>
Every single image on the web has its own image address or URL. In order to get the image URL, simply right-click on an image and choose “Copy image URL.” Paste that URL in quotes after src= to insert with your &lt;img&gt; tag.</p>

<p><b>
Click that image</b></p>

<p>Now that you know how to add links and images to your website, we will learn how to make an image a link. For example:</p>

<p>
<div style="background: #111111; overflow:auto;width:auto;border:solid gray;border-width:.1em .1em .1em .8em;padding:.2em .6em;"><pre style="margin: 0; line-height: 125%"><span style="color: #fed136; font-weight: bold">&lt;a</span> <span style="color: #ff0086; font-weight: bold">href=</span><span style="color: #0086d2">&quot;https://www.facebook.com&quot;</span><span style="color: #fed136; font-weight: bold">&gt;&lt;img</span> <span style="color: #ff0086; font-weight: bold">src=</span><span style="color: #0086d2">&quot;https://www.facebookbrand.com/img/fb-art.jpg&quot;</span> <span style="color: #fed136; font-weight: bold">&gt;&lt;/a&gt;</span>
</pre></td></tr></table></div>
</p>

<p>
1. First we open the &lt;a&gt; tag and point the href to https://www.facebook.com again.<br>
2. But this time, instead of using text inside the &lt;a&gt; tag, we use an &lt;img&gt; tag.<br>
3. Finally, we add the closing &lt;/a&gt; tag.<br>
</p>

<p>Now, every time you click on the image, you will be taken to https://www.facebook.com </p>

<p> From the former example, we can see that an HTML tag has been added inside of another. This action is called <strong>nesting</strong>, and it is widely used in HTML. </p>

<p><strong>
Try and see it for yourself:</strong></p>

<p><em>
1. In the body section, add an &lt;a&gt; tag.<br>
2. Choose a website to point your link to, like in the example above.<br>
3. Now create your &lt;img&gt; tag between the opening &lt;a&gt; tag and closing &lt;/a&gt; tag. Don't forget the src.<br>
4. Finally, close the &lt;/a&gt; tag after the &lt;img&gt; tag.</em></p>

<p>
Let's make sure you really understand images and links before we move on to the review.</p>

<p><em>
1. Between the &lt;body&gt; tags, add two images using the &lt;img&gt; tag. Just one of them should be a link. The link can go anywhere you want.<br>
2. After your two images, create a link that's just a simple line of text. It can link anywhere you want. Review the last three sections if you need help.</em></p>


</body>
</html>
