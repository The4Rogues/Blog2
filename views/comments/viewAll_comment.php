
<?php // All comment show on each post
// it should be called on indivisual post - show_post
?>

<section>
    <?php // loop start here ?>
     <div>
         <p>comment here    
        <?php //dlete button only show for logged in user and id will be coded in php on href?>     
        <span><a href="?controller=comment&action=delete" >delete Comment</a></span>     
        </p>
        <a class = "button" href="?controller=comment&action=create" >Create Comment</a>
     </div>
 </section>

