<?php
/* 
 * (controller may contribute or request specific tag)
 * all list of post
 */
?>
 <section>
<?php // loop start here ?>
     <div>
         <!--
         image will be here by controller 
         <img src="smiley.gif" alt="Smiley face" width="200" height="100">
         -->
         <p>post title would be here with href to click to read 
     
         <?php // here is php code for showing button only to owner 
     //or controllers may wants it on indivisual - show_post page
     // also need id of post with php code on href?>
             
     <span><a href="?controller=post&action=update" >Edit Post</a></span>
     <span><a href="?controller=post&action=register" >Delete Post</a></span>
     </p>
     </div>
 </section>