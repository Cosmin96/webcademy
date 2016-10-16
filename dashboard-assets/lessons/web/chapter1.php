<?php
    session_start();
    if($_SESSION['logged_in']==false){
        header("Location: login.php");
        die();
    }
?>

<p align="center"><font size="6"><b><u>Chapter 1: Introduction</b></u></font></p><br>

<p align="center"><font size="6">Lately, you learnt about the basics of web development languages: HTML, CSS and JavaScript (including jQuery). If you got this far in the Webcademy course, you must have already a good intuition of how you should combine all of these languages in order to create simple webpages and, maybe, some effects.<br />
But how would you build an interactive website with the possibility of really interacting with the pages? Well, this last module, called &ldquo;Building and Interactive Website&rdquo;, is designed to teach you exactly this kind of things so that, after completing it, you can really create amazing projects.</p>

<p align="center"><font size="6">Before, we begin let&rsquo;s make a short recap of what you have leant until now and how should everything fit together in a website.<br />
1) HTML (HyperText Markup Language) is the most basic tool for Internet webpages. Its main purpose is to create the elements of a page, add resources to it and to connect multiple files. <br />
2) CSS (Cascading Style Sheets) is a style sheet language which is simply used for describing the appearance of a document written in a markup language such as HTML. So, we can easily deduce that the aim of CSS is to style our webpage.<br />
3) JavaScript is a high-level programming language, more similar to modern programming languages (C++, Java, C#) than HTML and CSS. It is used for running certain applications, features and interactions in the user&rsquo;s browser and, in this way, it makes web applications interactive.<br />
4) jQuery is a JavaScript library developed by programmers in order for the JavaScript scripting to be easier for the development of webpages. It has multiple pre-built functionality that becomes important when manipulating the HTML elements.<br />
 <br />
 So, in our next lessons, we are going to cover how we should use all of these together and, hopefully, after this chapter, you will be able to create your own online application.<br />
</p>