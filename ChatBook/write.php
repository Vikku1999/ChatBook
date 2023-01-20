<?php

    session_start();
    include "UI_include.php";
    include INC_DIR."/process/p-write.php";
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
        <script>
            $(function(){
            setTimeout(function() {
                $('#error').fadeOut();
            }, 3000); 

            });
        </script>   
        <br>
        <br>
        <br>
        
        <div class="topnav">
  <a class="active" href="#home">&nbsp;   &nbsp; &nbsp; &nbsp;   &nbsp; &nbsp;   &nbsp;  &nbsp;Home &nbsp; &nbsp;   &nbsp; &nbsp;   &nbsp;  &nbsp; &nbsp;   &nbsp;</a>
  <a href="read.php"> &nbsp;   &nbsp; &nbsp; &nbsp;   &nbsp; &nbsp;   &nbsp;  &nbsp;All posts &nbsp; &nbsp; &nbsp;   &nbsp; &nbsp;   &nbsp;  &nbsp;  &nbsp;</a>
  <a href="logout.php?admin=1">&nbsp;   &nbsp; &nbsp; &nbsp;   &nbsp; &nbsp;   &nbsp;  &nbsp; Logout &nbsp; &nbsp;   &nbsp; &nbsp;   &nbsp;  &nbsp;  &nbsp;   &nbsp;</a>
  <a href="#about">&nbsp;   &nbsp; &nbsp; &nbsp;   &nbsp; &nbsp;   &nbsp;  &nbsp; &nbsp; &nbsp;   &nbsp; &nbsp; &nbsp;   &nbsp; &nbsp;   &nbsp;  &nbsp; &nbsp;   &nbsp; &nbsp; &nbsp;   &nbsp; &nbsp;   &nbsp;  &nbsp; &nbsp;   &nbsp; &nbsp; &nbsp;   &nbsp; &nbsp;   &nbsp;  &nbsp; &nbsp;   &nbsp; &nbsp; &nbsp;   &nbsp; &nbsp;   &nbsp;  &nbsp;   &nbsp; &nbsp; &nbsp;   &nbsp; &nbsp;   &nbsp;  &nbsp;@ Hii Vikash</a>
</div>





		<div id="container">
            <h1>New Post</h1>
            <form method="post" action="">                 
                <div id = "inputtitle">
                    <input id = "txttitle" type="text" name="title" placeholder="Enter Title" autofocus <?php if ($msg != 'Message saved successfully') $h->keepValues($title, 'textbox'); ?>>                    
                </div>
                <div id="message">
                    <textarea name = "post"><?php if ($msg != 'Message saved successfully') $h->keepValues($post, 'textarea'); ?></textarea>
                    <script>CKEDITOR.replace('post', {height: 500});
                    </script>                    
                </div>
                <div id = "error" class="error"><?php echo $msg; ?></div>
                <div id="submit-section">        
                    <input id = "postsubmit" class="btn btn-primary" type="submit" name="submit" value="Send" />                    
                    <select id = "postoptions" class = "custom-select" name = "audience">
                        <option value = ''>Available to: </option>
                        <option value = '1' <?php if ($msg != 'Message saved successfully') $h->keepValues($audience, 'select', '1'); ?> >Public</option>
                        <option value = '2' <?php if ($msg != 'Message saved successfully') $h->keepValues($audience, 'select', '2'); ?>>Members Only</option>           
                    </select>                                        
                </div>                
            </form>                
		</div>
        <div id = 'postlogout'>
            <a href = "logout.php?admin=1">Click here to logout</a> | 
            <a href = "read.php" target="_blank">Click here to read posts</a>            
        </div>        

	</body>
</html>