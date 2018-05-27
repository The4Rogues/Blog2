


 <section>
   
    <?php if (!empty($_SESSION['username'])){  ?>
     <a href='?controller=comment&action=create&post_id=<?= $_GET['post_id']; ?>'>Add Comment</a> &nbsp; &nbsp; 
    <?php } ?>
    <p>All comments:</p>
    <?php 
        if(empty($comments)){ 
            echo "Noone has commented on this post yet";}
        else { //loop thru comments to display 
            foreach($comments as $comment) { ?>
    <div>
        <p><?php echo  $comment->created_at.' '.$comment->comment_body ;?>&nbsp; &nbsp;

        <?php if ($_SESSION['user_id']==$comment->user_id){  ?>
        <a href='?controller=comment&action=delete&comment_id=<?php echo $comment->id; ?>'>Delete Comment</a> &nbsp; &nbsp;
        <?php } ?>
    </div>    
    
    <?php }

        }?>

 </section>
