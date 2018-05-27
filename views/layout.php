<?php

/* 
 * Copy from Peter's you can delete all. this is only for reference
 */


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
        <?php
        if ( !isset($_SESSION) ) {
            session_start();
}
        ?>
        <li style="float:left"><a class="active" href="?controller=blog&action=viewAll">Home</a></li>  
        <li style="float:left"><a href="?controller=blog&action=create">Create Blog</a></li> 
                
        <?php 
          if (empty($_SESSION['username'])){ 
        ?>
        <li><a href="?controller=user&action=login">Login</a></li>
        <li><a href="?controller=user&action=register">Create Account</a></li>
        <?php } else{ 
            $name = $_SESSION['username']; ?>              
        <li><a href="?controller=user&action=logout">Sign Out</a></li>       
        <li><a href='?controller=user&action=show'><?=$name; ?></a></li>
         <?php } ?>

    </ul>

    <?php require_once('routes.php'); ?>
   
    <footer>       
        For support contact us at support@BlogsAreUs.com <br>
         Created by The6Rogues &COPY; <?= date('Y'); ?>
     <!--   Copyright &COPY; <?= date('Y'); ?> -->
    
     <?php
        if ( !isset($_SESSION) ) {
            echo "session is not set </br>";
        }else{
            echo "session is set </br>";
        }
     
         
        if ( empty($_SESSION) ) {
            echo "session is empty </br>";
        }else{
            echo "session isnot empty </br>";
        }
      
        var_dump($_SESSION);  ?>
    </footer>
    
  </body>
</html>