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

<p align="center"><font size="6"><b><u>Chapter 8: Forms</b></u></font></p><br>

<p>Good job if you got to this part so far! Now, in this lesson we will introduce some of the most powerful features of HTML, and those are HTML Forms.</p>

<p>While other elements of HTML give style and meaning to a web page, an HTML form adds interactivity. They handle important functions like taking orders, surveys, user registration and much more. You will hardly find a single web page without forms.</p>

<p>Essentially, HTML Forms are used to gather input from a user. All the input elements should be enclosed within the opening and closing &lt;form&gt; tags. HTML forms contain the so called form elements.</p>

<p><b>
HTML Form Elements</b></p>

<p>Form elements are different styles of input elements, checkboxes, radio buttons, submit buttons and much more.</p>

<p><b>&lt;input&gt; Element</b></p>

<p>From these, the &lt;input&gt; element is the most important. It has many variations, depending on the type attribute. Here is a table with the main types:</p>

<p align="center"><img src="images/7.png"></p>

<p>
With this in mind, if we want to define a one-line input field for text input, we will use &lt;input type=&ldquo;text&rdquo;&gt;.</p>

<p>
<div style="background: #111111; overflow:auto;width:auto;border:solid gray;border-width:.1em .1em .1em .8em;padding:.2em .6em;"><pre style="margin: 0; line-height: 125%"><span style="color: #fed136; font-weight: bold">&lt;form&gt;</span>
  <font color="#ffffff">First name:<span style="color: #fed136; font-weight: bold">&lt;br&gt;</span>
  <span style="color: #fed136; font-weight: bold">&lt;input</span> <span style="color: #ff0086; font-weight: bold">type=</span><span style="color: #0086d2">&quot;text&quot;</span> <span style="color: #ff0086; font-weight: bold">name=</span><span style="color: #0086d2">&quot;firstname&quot;</span><span style="color: #fed136; font-weight: bold">&gt;&lt;br&gt;</span> 
<span style="color: #008800; font-style: italic; background-color: #0f140f">&lt;!--Each input must have a name attribute in order to be submmited correctly.--&gt;</span>
  Last name:</font><span style="color: #fed136; font-weight: bold">&lt;br&gt;</span>
  <span style="color: #fed136; font-weight: bold">&lt;input</span> <span style="color: #ff0086; font-weight: bold">type=</span><span style="color: #0086d2">&quot;text&quot;</span> <span style="color: #ff0086; font-weight: bold">name=</span><span style="color: #0086d2">&quot;lastname&quot;</span><span style="color: #fed136; font-weight: bold">&gt;</span>
<span style="color: #fed136; font-weight: bold">&lt;/form&gt;</span>
</pre></div>

</p>

<p>Alternatively, if we want to define a radio button, we use &lt;input type=&ldquo;radio&rdquo;&gt;. They allow us to select one option from a limited number of choices.</p>

<p>
<div style="background: #111111; overflow:auto;width:auto;border:solid gray;border-width:.1em .1em .1em .8em;padding:.2em .6em;"><pre style="margin: 0; line-height: 125%"><span style="color: #fed136; font-weight: bold">&lt;form&gt;</span>
  <span style="color: #fed136; font-weight: bold">&lt;input</span> <span style="color: #ff0086; font-weight: bold">type=</span><span style="color: #0086d2">&quot;radio&quot;</span> <span style="color: #ff0086; font-weight: bold">name=</span><span style="color: #0086d2">&quot;question&quot;</span> <span style="color: #ff0086; font-weight: bold">value=</span><span style="color: #0086d2">&quot;yes&quot;</span> <span style="color: #ff0086; font-weight: bold">checked</span><span style="color: #fed136; font-weight: bold">&gt;</span><font color="#ffffff"> Yes<span style="color: #fed136; font-weight: bold">&lt;br&gt;</span> 
  <span style="color: #008800; font-style: italic; background-color: #0f140f">&lt;!--Checked attribute sets a pre-defined option--&gt;</span>
  <span style="color: #fed136; font-weight: bold">&lt;input</span> <span style="color: #ff0086; font-weight: bold">type=</span><span style="color: #0086d2">&quot;radio&quot;</span> <span style="color: #ff0086; font-weight: bold">name=</span><span style="color: #0086d2">&quot;question&quot;</span> <span style="color: #ff0086; font-weight: bold">value=</span><span style="color: #0086d2">&quot;no&quot;</span><span style="color: #fed136; font-weight: bold">&gt;</span> No</font>
<span style="color: #fed136; font-weight: bold">&lt;/form&gt;</span>
</pre></div>

</p>

<p>
Lastly, if we want to define a button for submitting a form to a form-handler, we use &lt;input type=&ldquo;submit&rdquo;&gt;.</p>

<p>The form handler is normally a web page or a server page with a script for processing the data the user inputs. The form-handler is specified in the form&rsquo;s action attribute, which defines the action to be performed when the form is submitted.</p>

<p>
<div style="background: #111111; overflow:auto;width:auto;border:solid gray;border-width:.1em .1em .1em .8em;padding:.2em .6em;"><pre style="margin: 0; line-height: 125%"><span style="color: #fed136; font-weight: bold">&lt;form</span> <span style="color: #ff0086; font-weight: bold">action=</span><span style="color: #0086d2">&quot;page.php&quot;</span><span style="color: #fed136; font-weight: bold">&gt;</span>
<span style="color: #008800; font-style: italic; background-color: #0f140f">&lt;!-- This defines the action to be performed when the form is submitted--&gt;</span>
  <font color="#ffffff">First name:<span style="color: #fed136; font-weight: bold">&lt;br&gt;</span>
  <span style="color: #fed136; font-weight: bold">&lt;input</span> <span style="color: #ff0086; font-weight: bold">type=</span><span style="color: #0086d2">&quot;text&quot;</span> <span style="color: #ff0086; font-weight: bold">name=</span><span style="color: #0086d2">&quot;firstname&quot;</span> <span style="color: #ff0086; font-weight: bold">value=</span><span style="color: #0086d2">&quot;John&quot;</span><span style="color: #fed136; font-weight: bold">&gt;&lt;br&gt;</span>
  Last name:</font><span style="color: #fed136; font-weight: bold">&lt;br&gt;</span>
  <span style="color: #fed136; font-weight: bold">&lt;input</span> <span style="color: #ff0086; font-weight: bold">type=</span><span style="color: #0086d2">&quot;text&quot;</span> <span style="color: #ff0086; font-weight: bold">name=</span><span style="color: #0086d2">&quot;lastname&quot;</span> <span style="color: #ff0086; font-weight: bold">value=</span><span style="color: #0086d2">&quot;Smith&quot;</span><span style="color: #fed136; font-weight: bold">&gt;&lt;br&gt;&lt;br&gt;</span>
  <span style="color: #fed136; font-weight: bold">&lt;input</span> <span style="color: #ff0086; font-weight: bold">type=</span><span style="color: #0086d2">&quot;submit&quot;</span> <span style="color: #ff0086; font-weight: bold">value=</span><span style="color: #0086d2">&quot;Confirm&quot;</span><span style="color: #fed136; font-weight: bold">&gt;</span>
<span style="color: #fed136; font-weight: bold">&lt;/form&gt;</span>
</pre></div>

</p>

<p>
To be submitted correctly, each input must have a name attribute.</p>


<p>
Finally, we can group related data in a form with the &lt;fieldset&gt; element and we can define a caption for the &lt;fieldset&gt; element with the &lt;legend&gt; element.</p>

<p>
<div style="background: #111111; overflow:auto;width:auto;border:solid gray;border-width:.1em .1em .1em .8em;padding:.2em .6em;"><pre style="margin: 0; line-height: 125%"><span style="color: #fed136; font-weight: bold">&lt;form</span> <span style="color: #ff0086; font-weight: bold">action=</span><span style="color: #0086d2">&quot;page.php&quot;</span><span style="color: #fed136; font-weight: bold">&gt;</span>
  <span style="color: #fed136; font-weight: bold">&lt;fieldset&gt;</span> <span style="color: #008800; font-style: italic; background-color: #0f140f">&lt;!--Grouping related data--&gt;</span>
    <span style="color: #fed136; font-weight: bold">&lt;legend&gt;</span><font color="#ffffff">Personal Information:<span style="color: #fed136; font-weight: bold">&lt;/legend&gt;</span> <span style="color: #008800; font-style: italic; background-color: #0f140f">&lt;!--Defining a caption--&gt;</span>
    First name:<span style="color: #fed136; font-weight: bold">&lt;br&gt;</span>
    <span style="color: #fed136; font-weight: bold">&lt;input</span> <span style="color: #ff0086; font-weight: bold">type=</span><span style="color: #0086d2">&quot;text&quot;</span> <span style="color: #ff0086; font-weight: bold">name=</span><span style="color: #0086d2">&quot;firstname&quot;</span> <span style="color: #ff0086; font-weight: bold">value=</span><span style="color: #0086d2">&quot;John&quot;</span><span style="color: #fed136; font-weight: bold">&gt;&lt;br&gt;</span>
    Last name:</font><span style="color: #fed136; font-weight: bold">&lt;br&gt;</span>
    <span style="color: #fed136; font-weight: bold">&lt;input</span> <span style="color: #ff0086; font-weight: bold">type=</span><span style="color: #0086d2">&quot;text&quot;</span> <span style="color: #ff0086; font-weight: bold">name=</span><span style="color: #0086d2">&quot;lastname&quot;</span> <span style="color: #ff0086; font-weight: bold">value=</span><span style="color: #0086d2">&quot;Smith&quot;</span><span style="color: #fed136; font-weight: bold">&gt;&lt;br&gt;&lt;br&gt;</span>
    <span style="color: #fed136; font-weight: bold">&lt;input</span> <span style="color: #ff0086; font-weight: bold">type=</span><span style="color: #0086d2">&quot;submit&quot;</span> <span style="color: #ff0086; font-weight: bold">value=</span><span style="color: #0086d2">&quot;Confirm&quot;</span><span style="color: #fed136; font-weight: bold">&gt;</span>
  <span style="color: #fed136; font-weight: bold">&lt;/fieldset&gt;</span>
<span style="color: #fed136; font-weight: bold">&lt;/form&gt;</span>
</pre></div>

</p>

<p>Here is a summary of the different input types, with some more elements added:</p>

<p align="center"><img src="images/8.png"></p>

<p><b>&lt;select&gt; Element</b></p>

<p>The &lt;select&gt; element defines a drop-down list:</p>

<p>
<div style="background: #111111; overflow:auto;width:auto;border:solid gray;border-width:.1em .1em .1em .8em;padding:.2em .6em;"><pre style="margin: 0; line-height: 125%"><span style="color: #fed136; font-weight: bold">&lt;select</span> <span style="color: #ff0086; font-weight: bold">name=</span><span style="color: #0086d2">&quot;cities&quot;</span><span style="color: #fed136; font-weight: bold">&gt;</span>
  <span style="color: #fed136; font-weight: bold">&lt;option</span> <span style="color: #ff0086; font-weight: bold">value=</span><span style="color: #0086d2">&quot;brazil&quot;</span><span style="color: #fed136; font-weight: bold">&gt;</span><font color="#ffffff">Brazil<span style="color: #fed136; font-weight: bold">&lt;/option&gt;</span>
  <span style="color: #fed136; font-weight: bold">&lt;option</span> <span style="color: #ff0086; font-weight: bold">value=</span><span style="color: #0086d2">&quot;capetown&quot;</span><span style="color: #fed136; font-weight: bold">&gt;</span>Cape Town<span style="color: #fed136; font-weight: bold">&lt;/option&gt;</span>
  <span style="color: #fed136; font-weight: bold">&lt;option</span> <span style="color: #ff0086; font-weight: bold">value=</span><span style="color: #0086d2">&quot;london&quot;</span><span style="color: #fed136; font-weight: bold">&gt;</span>London<span style="color: #fed136; font-weight: bold">&lt;/option&gt;</span>
  <span style="color: #fed136; font-weight: bold">&lt;option</span> <span style="color: #ff0086; font-weight: bold">value=</span><span style="color: #0086d2">&quot;newyork&quot;</span><span style="color: #fed136; font-weight: bold">&gt;</span>New York<span style="color: #fed136; font-weight: bold">&lt;/option&gt;</span>
  <span style="color: #fed136; font-weight: bold">&lt;option</span> <span style="color: #ff0086; font-weight: bold">value=</span><span style="color: #0086d2">&quot;sydney&quot;</span><span style="color: #fed136; font-weight: bold">&gt;</span>Sydney<span style="color: #fed136; font-weight: bold">&lt;/option&gt;</span>
  <span style="color: #fed136; font-weight: bold">&lt;option</span> <span style="color: #ff0086; font-weight: bold">value=</span><span style="color: #0086d2">&quot;tokyo&quot;</span><span style="color: #fed136; font-weight: bold">&gt;</span>Tokyo</font><span style="color: #fed136; font-weight: bold">&lt;/option&gt;</span>
<span style="color: #fed136; font-weight: bold">&lt;/select&gt;</span>
</pre></div>

</p>

<p>The &lt;option&gt; elements define the options to select.</p>

<p><b>&lt;textarea&gt; Element</b></p>

<p>The &lt;textarea&gt; element defines a multi-line input field or a text area:</p>

<p>
<div style="background: #111111; overflow:auto;width:auto;border:solid gray;border-width:.1em .1em .1em .8em;padding:.2em .6em;"><pre style="margin: 0; line-height: 125%"><span style="color: #fed136; font-weight: bold">&lt;textarea</span> <span style="color: #ff0086; font-weight: bold">name=</span><span style="color: #0086d2">&quot;text&quot;</span> <span style="color: #ff0086; font-weight: bold">rows=</span><span style="color: #0086d2">&quot;10&quot;</span> <span style="color: #ff0086; font-weight: bold">cols=</span><span style="color: #0086d2">&quot;20&quot;</span><span style="color: #fed136; font-weight: bold">&gt;</span>
  <font color="#ffffff">The quick brown fox jumps over the lazy dog.</font>
<span style="color: #fed136; font-weight: bold">&lt;/textarea&gt;</span>
</pre></div>

</p>


<p><b>&lt;button&gt; Element</b></p>

<p>The &lt;button&gt; element defines a clickable button:</p>

<p>
<div style="background: #111111; overflow:auto;width:auto;border:solid gray;border-width:.1em .1em .1em .8em;padding:.2em .6em;"><pre style="margin: 0; line-height: 125%"><span style="color: #fed136; font-weight: bold">&lt;button</span> <span style="color: #ff0086; font-weight: bold">type=</span><span style="color: #0086d2">&quot;button&quot;</span> <span style="color: #ff0086; font-weight: bold">onclick=</span><span style="color: #0086d2">&quot;alert(&#39;Success!&#39;)&quot;</span><span style="color: #fed136; font-weight: bold">&gt;</span><font color="#ffffff">Click Me</font><span style="color: #fed136; font-weight: bold">&lt;/button&gt;</span>
<span style="color: #008800; font-style: italic; background-color: #0f140f">&lt;!--onclick pops up an alert box with a specific message whenever the button is clicked.--&gt;</span>
</pre></div>

</p>


<p><b>
Summary</b></p>

<p>Great job! In this lesson we have covered:</p>

<p>- HTML Forms and its function.<br>
- HTML Form Elements.<br>
- &lt;input&gt; Element, &lt;select&gt; Element, &lt;textarea&gt; Element and &lt;button&gt; Element.</p>

<p><b>Test yourself!</b></p>

<p>Create two input fields, the first one should specify a username, and the second one a password. Below the fields, create a checkbox with the text &ldquo;Remember me&rdquo; and below that, a button called Log in that will pop up an alert box with the following message: &ldquo;You have successfully logged in&rdquo;.<br>
</p>

</body>
</html>
