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

<p align="center"><font size="6"><b><u>Chapter 9: HTML5</b></u></font></p><br>

<p><font size="5"><b>What is HTML5?</b></p>

<p>HTML5 is the most recent hyper text markup language for website from the World Wide Web Consortium (W3C). It was first launched in 2011, and people started writing about it and using it but, as with many new technologies, its support in different browsers was still poor. Today, all major browsers (Chrome, Safari, Firefox, Opera, IE) offer HTML5 support, making it the newest HTML technology that can be used today.</p>

<p>Although HTML5 works with CSS3, both technologies are still in development, adding more and more features over time.</p>

<p>HTML5 is the successor of HTML 4.01, firstly released in 1999. The World Wide Web has significantly changed since 1999, so the creation of HTML5 was fundamental. The new markup language was developed based on pre-established standards:</p>

<p>&bull; New features should be based on HTML, CSS and JavaScript.<br>
&bull; The need of external plugins (such as Flash) needs to be reduced.<br>
&bull; Error handling should be easier than in prior versions.<br>
&bull; Scripting has to be replaced by more markup.<br>
&bull; HTML5 should be platform-independent.</p>

<p><b>What is new?</b></p>

<p>HTML5 was conceived with the idea of making the coding process easier and more logical. </p>

<p>The unique and impressive features HTML5 comes with are in the multimedia area. Most of the features it comes with have been created taking into consideration that users should be able to run heavy content on low-powered devices.</p>

<p>The syntactic features include the new &lt;video&gt;, &lt;audio&gt; and &lt;canvas&gt; elements, but also the integration of vector graphics content. Now, this simply means that multimedia and graphic content on the web will be handled and executed easier and faster, without the need of plugins or APIs (Application Programming Interface).</p>

<p>There are several new syntaxes added, but below the most important ones are named and described. The rest of them can be found in W3C&rsquo;s HTML5 New Elements and HTML5 Semantic Elements sections.<br>
</p>

<p><b>New Semantic/Structural Elements in HTML5</b></p>

<p>Semantics is the study of the meanings of words and phrases in language. A semantic element clearly describes its meaning to both the browser and the developer.</p>

<p>HTML5 offers new pre-defined tags for better document structure and to define different parts of a web page:<br>
</p>

<p align="center"><img src="images/1.png"></p>

<p>In HTML5, there is no need to manually name IDs for them, as they now have pre-defined tags.</p>

<p>
Below is an illustration that represents the layout of the different parts of a webpage:<br>
</p>

<p align="center"><img src="images/2.png"></p>

<p>It is important to remember that these new HTML5 tags do not always work as the ones before. </p>

<p>The header and footer tags, for example, will not only mark the start and the end of a page, but also the start and the end of each section of the page. This means that these two tags are likely to be used more than once in the whole page. </p>

<p>Have a look at the code below to understand it better.</p>

<p>
<!-- HTML generated using hilite.me --><div style="background: #111111; overflow:auto;width:auto;border:solid gray;border-width:.1em .1em .1em .8em;padding:.2em .6em;"><pre style="margin: 0; line-height: 125%"><span style="color: #ff0007; font-weight: bold; font-style: italic; background-color: #0f140f">&lt;!DOCTYPE html&gt;</span> <span style="color: #008800; font-style: italic; background-color: #0f140f">&lt;!--The new DOCTYPE declaration, simpler and easier to remember--&gt;</span>
    <span style="color: #fed136; font-weight: bold">&lt;head&gt;</span> <span style="color: #008800; font-style: italic; background-color: #0f140f">&lt;!--The style declaration goes here--&gt;</span>
    <span style="color: #fed136; font-weight: bold">&lt;/head&gt;</span>

    <span style="color: #fed136; font-weight: bold">&lt;body&gt;</span>

          <span style="color: #fed136; font-weight: bold">&lt;header&gt;</span> <span style="color: #008800; font-style: italic; background-color: #0f140f">&lt;!--This marks the header of the page and includes the navigation--&gt;</span>
                <span style="color: #fed136; font-weight: bold">&lt;nav&gt;</span>
                <span style="color: #fed136; font-weight: bold">&lt;/nav&gt;</span>
          <span style="color: #fed136; font-weight: bold">&lt;/header&gt;</span>

          <span style="color: #fed136; font-weight: bold">&lt;section&gt;</span> <span style="color: #008800; font-style: italic; background-color: #0f140f">&lt;!--Start of the content section--&gt;</span>

                <span style="color: #fed136; font-weight: bold">&lt;header&gt;</span>
                <span style="color: #008800; font-style: italic; background-color: #0f140f">&lt;!--This time the header tag marks the beginning of the content section--&gt;</span>
                <span style="color: #fed136; font-weight: bold">&lt;/header&gt;</span>

                <span style="color: #fed136; font-weight: bold">&lt;article&gt;</span>
                <span style="color: #fed136; font-weight: bold">&lt;/article&gt;</span>

                <span style="color: #fed136; font-weight: bold">&lt;footer&gt;</span>
                <span style="color: #008800; font-style: italic; background-color: #0f140f">&lt;!--As with the header tag, the footer marks the end of the content section--&gt;</span>
                <span style="color: #fed136; font-weight: bold">&lt;/footer&gt;</span>

          <span style="color: #fed136; font-weight: bold">&lt;/section&gt;</span> <span style="color: #008800; font-style: italic; background-color: #0f140f">&lt;!--End of the content section--&gt;</span>

          <span style="color: #fed136; font-weight: bold">&lt;aside&gt;</span>
          <span style="color: #008800; font-style: italic; background-color: #0f140f">&lt;!--Here comes the sidebar content--&gt;</span>
          <span style="color: #fed136; font-weight: bold">&lt;/aside&gt;</span>

          <span style="color: #fed136; font-weight: bold">&lt;footer&gt;</span>
          <span style="color: #008800; font-style: italic; background-color: #0f140f">&lt;!--This footer marks the end of the page--&gt;</span>
          <span style="color: #fed136; font-weight: bold">&lt;/footer&gt;</span>

    <span style="color: #fed136; font-weight: bold">&lt;/body&gt;</span>
<span style="color: #fed136; font-weight: bold">&lt;/html&gt;</span>
</pre></div>

</p>

<p>One thing to note is that the DOCTYPE declaration makes more sense now, it is simpler and easier to remember. In HTML5, we start a document with &lt;!DOCTYPE html&gt; closed by </html>.</p>

<p>What&rsquo;s more, complex XHTML (Extensible HyperText Markup Language, a hybrid of HTML and XML) declarations can now be replaced with &lt;html lang=&ldquo;en&rdquo;&gt; and long encoding declarations can simply be written as &lt;meta charset=&ldquo;utf-8&rdquo;&gt;. The former is used to declare the language of a web page or a portion of a web page, whereas the latter specifies the character encoding for the HTML document.<br>
</p>

<p align="center"><img src="images/3.png"></p>
<p align="center"><img src="images/4.png"></p>

<p><b>Removed elements in HTML5</b></p>

<p>The following tags from HTML 4.01 are now removed from HTML5, which means browsers do not offer support for them anymore. Here is a table with the tags removed in HTML 4.01 and what to use instead:<br>
</p>

<p align="center"><img src="images/5.png"></p>

<p>Remember that, with HTML5, you are not learning a totally new language here. HTML5 is built on the success of its previous version, HTML 4.01. So, in order to be better using HTML5, you do not need to forget everything about the previous version, but only remember that now you build upon the coding skills you already have from the previous lessons. With HTML5, you build upon what you have previously learned with HTML 4.01.</p>

<p>Learning HTML5 now is very important, as the markup language works right away, you can do whatever you want with it today and it is supported in all major browsers.</p>

<p><b>
Summary</b></p>

<p>Great job! In this lesson you have learned:</p>

<p>&bull; What HTML5 is<br>
&bull; New features of HTML5<br>
&bull; New structural elements in HTML5<br>
&bull; New Media Elements and Graphics in HTML5<br>
&bull; Removed tags in HTML5<br>
</p>

</body>
</html>
