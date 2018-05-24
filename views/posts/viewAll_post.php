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

<p>All posts:</p>

<?php foreach($posts as $post) { ?>
  <p>
  <p><?php echo  $post->blog->blog_title.$post->post_title ;?>
    <?php //printf("%s - %s", $post->blog->blog_title, $post->post_title); ?> &nbsp; &nbsp;
    <a href='?controller=post&action=show&id=<?php echo $post->id; ?>'>See post</a> &nbsp; &nbsp;
    <a href='?controller=post&action=delete&id=<?php echo $post->id; ?>'>Delete Post</a> &nbsp; &nbsp;
    <a href='?controller=post&action=update&id=<?php echo $post->id; ?>'>Update Post</a> &nbsp;
  </p>
<?php } ?>
  
   <!--           
     <span><a href="?controller=post&action=update" >Edit Post</a></span>
     <span><a href="?controller=post&action=register" >Delete Post</a></span>
     </p>
     </div>
 </section>