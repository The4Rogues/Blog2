
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

    <h1>Update post</h1>
        
    <h3>Edit your post?</h3>
        <form action="" method="post" enctype="multipart/form-data" >
 
            
            <p><textarea class="post_title" name = "post_title" rows="1" cols="60" ><?php echo $post->post_title ;?>
       
        </textarea></p>
                
        <p><textarea class="post_body" name = "post_body" rows="15" cols="80"><?php echo $post->post_body ;?>
        
        </textarea></p>
        
        <?php // here need to check if re-upload is possble? ?>
        <input id="image_upload" type="file" name="fileToUpload" id="fileToUpload">
        
        <input type="submit" name="update" href="?controller=post&action=update" />
        <a href="?controller=blog&action=show&blog_id=<?= $post->blog_id ?>">Cancel</a>
    </form>
            
</section>