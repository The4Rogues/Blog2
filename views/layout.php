<?php

/* 
 * Copy from Peter's you can delete all. this is only for reference
 */
session_start();

// hard code test for when logged in
//$_SESSION['username']='Edward';
$name= '';
$name = $_SESSION['username'];
//$_SESSION['user_id'] = '1';

?>

<!DOCTYPE html>
<html>
  <head>
<meta name="viewport" content="width=device-width, initial-scale=1">


<link rel="stylesheet" href="views/css/main.css">
<title>Blog</title>
  </head>
  <body>
    <ul>
        <li style="float:left"><a class="active" href="?controller=blog&action=viewAll">Home</a></li>  
        <li style="float:left"><a href="?controller=blog&action=create">Create Blog</a></li> 
      
        <?php 
          if (empty($_SESSION['username'])){ 
        ?>
        <li><a href="?controller=user&action=login">Login</a></li>
        <li><a href="?controller=user&action=register">Create Account</a></li>
        <?php } else{ ?>              
        <li><a href="?controller=user&action=logout">Sign Out</a></li>       
        <li><a href='?controller=user&action=show'><?=$name; ?></a></li>
         <?php } ?>
    </ul>

    <?php require_once('routes.php'); ?>
   
    <footer>       
        For support contact us at support@BlogsAreUs.com <br>
         Created by The6Rogues &COPY; <?= date('Y'); ?>
     <!--   Copyright &COPY; <?= date('Y'); ?> -->
    </footer>
    
</div>
  </body>
</html>
