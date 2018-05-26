<?php
/* 
 * (controller may contribute or request specific tag)
 * all list of post
 */
?>
 <section>

     <div>
         <!--
         image will be here by controller 
         <img src="smiley.gif" alt="Smiley face" width="200" height="100">
         -->
        <p>All posts:</p>

<?php //loop thru posts to display 
        foreach($posts as $post) { ?>
  <p>
  <p><?php echo  $post->blog->blog_title.' '.$post->post_title ;?>
    <?php //printf("%s - %s", $post->blog->blog_title, $post->post_title); ?> &nbsp; &nbsp;
    <a href='?controller=post&action=show&post_id=<?php echo $post->id; ?>'>See post</a> &nbsp; &nbsp;
    <a href='?controller=post&action=delete&post_id=<?php echo $post->id; ?>'>Delete Post</a> &nbsp; &nbsp;
    <a href='?controller=post&action=update&post_id=<?php echo $post->id; ?>'>Update Post</a> &nbsp;
  </p>
<?php } ?>
  
   <!--           
     <span><a href="?controller=post&action=update" >Edit Post</a></span>
     <span><a href="?controller=post&action=register" >Delete Post</a></span>
     </p>
     </div>
 </section>