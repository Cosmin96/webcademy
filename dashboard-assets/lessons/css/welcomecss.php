<?php
    session_start();
    if($_SESSION['logged_in']==false){
        header("Location: login.php");
        die();
    }
?>

<html>
<body>
<br><br><br><br>
<p align="center"><font size="7" color="#000000">Welcome to</p>
<p align="center"><font size="7" color="#000000">CSS</p>
<p align="center"><font size="5" color="#000000">Please use the menu on the left to navigate</p>
</body>
</html>