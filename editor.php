<?php
  session_start();
  if($_SESSION['logged_in']==false){
    header("Location: login.php");
    die();
  }
?>

<link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/codemirror/3.19.0/codemirror.css">
<link rel="stylesheet" href="css/editor.css">
<link href="css/jquery-linedtextarea.css" type="text/css" rel="stylesheet" />

<div id="wrap">

  <!-- Code Editors -->
<section id="code_editors">
    <div class="tabs">
    <ul class="tab-links">
        <li class="active"><a href="#tab1">HTML</a></li>
        <li><a href="#tab2">CSS</a></li>
        <li><a href="#tab3">JavaScript</a></li>

    </ul>
 
    <div class="tab-content">
        <div id="tab1" class="tab active">
          <div id="html" class="code_box">
            <textarea class="textareaLinesNumbers" name="html"></textarea>
          </div>
        </div>
 
        <div id="tab2" class="tab">
          <div id="css" class="code_box">
            <textarea class="textareaLinesNumbers" name="css"></textarea>
          </div>
        </div>
 
        <div id="tab3" class="tab">
          <div id="js" class="code_box">
            <textarea class="textareaLinesNumbers" name="js"></textarea>
          </div>
        </div>
    </div>
    </div>
  </section>
  
  <!-- Sandboxing -->
  <section id="output">
    <iframe></iframe>
  </section>
  
</div>



<script src="//cdnjs.cloudflare.com/ajax/libs/codemirror/3.19.0/codemirror.js"></script>

<!-- For HTML/XML -->
<script src="//cdnjs.cloudflare.com/ajax/libs/codemirror/3.19.0/mode/xml/xml.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/codemirror/3.19.0/mode/htmlmixed/htmlmixed.js"></script>

<!-- For CSS -->
<script src="//cdnjs.cloudflare.com/ajax/libs/codemirror/3.16.0/mode/css/css.js"></script>

<!-- For JS -->
<script src="//cdnjs.cloudflare.com/ajax/libs/codemirror/3.19.0/mode/javascript/javascript.js"></script>
<script src="js/editor.js"></script>
<script src="js/jquery.js"></script>


<script type="text/javascript">

$(document).ready(function() {
    $('.tabs .tab-links a').on('click', function(e)  {
        var currentAttrValue = $(this).attr('href');
 
        // Show/Hide Tabs
        $('.tabs ' + currentAttrValue).show().siblings().hide();
 
        // Change/remove current tab to active
        $(this).parent('li').addClass('active').siblings().removeClass('active');
 
        e.preventDefault();
    });
});
</script>

<script>
$(function() {

  // Target all classed with ".lined"
  $(".lined").linedtextarea(
    {selectedLine: 1}
  );

});
</script>
