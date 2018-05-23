<?php

/* 
 * 
 * form to edit a post
 * $_POST key nemes are - post_title, post_body 
 * Can we update image too?
 * 
 */
?>
<style>
    .post_body .post_title
    { font-size: 20px; }
    #image_upload{
        display:block;
        margin: auto;
    }
</style>

<section>

    <h1>Create Post</h1>
        
    <h3>Edit your post?</h3>
        <form action="" method="post" >
               
        <p><textarea class="post_title" name = "post_title" rows="1" cols="60" placeholder="Write your title here">
        <?php // here will be original title delivered by controllers ?>
        </textarea></p>
                
        <p><textarea class="post_body" name = "post_body" rows="15" cols="80" placeholder="Write your Story here">
        <?php // here will be original body delivered by controllers ?>
        </textarea></p>
        
        <?php // here need to check if re-upload is possble? ?>
        <input id="image_upload" type="file" name="fileToUpload" id="fileToUpload">
        
        <input type="submit" name="update" href="?controller=post&action=create" />
        <a href="?controller=blog&action=show&blog_id=<?= $_GET['blog_id']; ?>">Cancel</a>
    </form>
            
</section>