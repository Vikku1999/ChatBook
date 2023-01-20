<?php

    session_start();
    include "UI_include.php";
    include INC_DIR.'header.html';

?>
<style>

/* Add a black background color to the top navigation */
.topnav {
background-color: #333;
overflow: hidden;
}

/* Style the links inside the navigation bar */
.topnav a {
float: left;
color: #f2f2f2;
text-align: center;
padding: 14px 16px;
text-decoration: none;
font-size: 17px;
}

/* Change the color of links on hover */
.topnav a:hover {
background-color: #ddd;
color: black;
}

/* Add a color to the active/current link */
.topnav a.active {
background-color: #04AA6D;
color: white;
}

</style>
    <body style="background-image:linear-gradient(to right, blue, yellow);">
    <br>
        <br>
        <br>
        
        <div class="topnav">

  <a href="logout.php?admin=1">&nbsp;   &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;   &nbsp; &nbsp;   &nbsp;  &nbsp;  &nbsp;   &nbsp;&nbsp; &nbsp;   &nbsp; &nbsp;   &nbsp;  &nbsp;  &nbsp;   &nbsp;&nbsp; &nbsp;   &nbsp; &nbsp;   &nbsp;  &nbsp;  &nbsp;   &nbsp;&nbsp; &nbsp;   &nbsp; &nbsp;   &nbsp;  &nbsp;  &nbsp;   &nbsp;&nbsp; &nbsp;   &nbsp; &nbsp;   &nbsp;  &nbsp;  &nbsp;   &nbsp;&nbsp; &nbsp;   &nbsp; &nbsp;   &nbsp;  &nbsp;  &nbsp;   &nbsp;  &nbsp; &nbsp;   &nbsp;  &nbsp;&nbsp; &nbsp;   &nbsp; &nbsp;   &nbsp;  &nbsp;  &nbsp;   &nbsp;&nbsp; &nbsp;   &nbsp; &nbsp;   &nbsp;  &nbsp;  &nbsp;   &nbsp;&nbsp; &nbsp;   &nbsp; &nbsp;   &nbsp;  &nbsp;  &nbsp;   &nbsp;&nbsp; &nbsp;   &nbsp; &nbsp;   &nbsp;  &nbsp;  &nbsp;   &nbsp;&nbsp; &nbsp;   &nbsp; &nbsp;   &nbsp;  &nbsp;  &nbsp;   &nbsp;&nbsp; &nbsp;   &nbsp; &nbsp;   &nbsp;  &nbsp;  &nbsp;   &nbsp;&nbsp; &nbsp;   &nbsp; &nbsp;   &nbsp;  &nbsp;  &nbsp;   &nbsp;&nbsp; &nbsp;   &nbsp; &nbsp;   &nbsp;  &nbsp;  &nbsp;   &nbsp;&nbsp; &nbsp;   &nbsp; &nbsp;   &nbsp;  &nbsp;  &nbsp;   &nbsp; Logout </a>
  
</div>

    <?php 
        include INC_DIR."/process/p-read.php";
      //  include INC_DIR."/process/write.php";
    ?>
	</body>
</html>