<?php

/* 
 * ready for test
 * form to create a post
 * $_POST key nemes are - blog_id, post_title, post_body 
 */
?>
<style>
    .post_body  { 
       font-size: 20px;
       margin: 5px;
    }
    .post_title{
      font-size: 20px;
       margin: 5px;
    }
    #image_upload{
        display:block;
        margin: auto;
    }
</style>

<section>
<h1>Create Post</h1>
        
    <h3>Enjoy Writing you post!</h3>
        <form action="" method="post" >
        
        <p><textarea class="post_title" name = "post_title" rows="1" cols="60" placeholder="Write your title here">
            </textarea></p>
        <p><textarea class="post_body" name = "post_body" rows="15" cols="80" placeholder="Write your Story here">
            </textarea></p>
        
        <input id="image_upload" type="file" name="fileToUpload" id="fileToUpload">
        
        <input type="submit" name="update" href="?controller=post&action=create" />
        <a c href="?controller=blog&action=show&blog_id=<?= $_GET['blog_id']; ?>">Cancel</a>
    </form>
            
</section>
