
<?php
/* 
 * (controller may contribute or request specific tag)
 * all list of post
 */
?>
 <secion>
<?php // loop start here ?>
     <div>
         <p>post title would be here with href to click to read 
     
         <?php // here is php code for showing button only to owner 
     //or controllers may wants it on indivisual - show_post page
     // also need id of post with php code on href?>
             
     <span><a href="?controller=post&action=update" >Edit Post</a></span>
     <span><a href="?controller=post&action=register" >Delete Post</a></span>
     </p>
     </div>
 </secion>