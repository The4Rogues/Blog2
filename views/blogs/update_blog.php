<?php

/* 
 * ready for test
 * form to edit blog
 * need php to put what is on there 
 */
?>
<style>
    .blog_body  { 
       font-size: 20px;
       margin: 5px;
    }
    .blog_title{
      font-size: 20px;
       margin: 5px;
    }
    .topic{
      font-size: 20px;
       margin: 5px;
    }
</style>

<section>
<h1>Edit Your blog</h1>
        
        <form action="" method="post" >
        
            <p>Blog Title</p>
            <textarea class="blog_title" name = "blog_title" rows="1" cols="60" required>
                </textarea>

            <p>Topic</p>
            <textarea class="topic" name = "topic" rows="1" cols="60" required>
                </textarea>

            <p>Summary</p>
            <textarea class="blog_body" name = "blog_summary" rows="15" cols="80" required>
                </textarea>

            <input type="submit" name="update" href="?controller=blog&action=update" />
            <a c href="?controller=blog&action=viewAll">Cancel</a>
        </form>            
</section>
