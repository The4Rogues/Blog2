<!--<section>
    <?php // loop start here ?>
     <div>
         <p>comment here    
        <?php //dlete button only show for logged in user and id will be coded in php on href?>     
        <span><a href="?controller=comment&action=delete" >delete Comment</a></span>     
        </p>
        <a class = "button" href="?controller=comment&action=create" >Create Comment</a>
     </div>
 </section>
-->

 <section>

     <div>
        <a href='?controller=comment&action=create&post_id=<?= $_GET['post_id']; ?>'>Add Comment</a> &nbsp; &nbsp; 
      
        <p>All comments:</p>
<?php 
  

        if(empty($comments)){ 
            echo "Noone has commented on this post yet";}
        else {
    
    
            //loop thru comments to display 
            foreach($comments as $comment) { ?>
  <p>
                <p><?php echo  $comment->created_at.' '.$comment->comment_body ;?>&nbsp; &nbsp;
  
                <?php // if user logged in ?>
                <a href='?controller=comment&action=delete&comment_id=<?php echo $comment->id; ?>'>Delete Comment</a> &nbsp; &nbsp;
   
  </p>
        <?php }
        
            }?>

