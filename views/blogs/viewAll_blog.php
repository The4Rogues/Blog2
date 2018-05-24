<?php // leave this in
    if(!empty($_SESSION['username'])){
               echo "Hello, you are logged in as " . $_SESSION['username'] . '<br>';
               echo '<br>';
    }
 ?> 

<!-- move to main.css if you need to keep margin -->
<style>  
    #hp-child1-wrapper{
        margin:100px 0 50px 0;
    }
</style>

<!-- what is the purpose of the script? -->

<section>    
    <h1>BlogsAreUs</h1>  
    <div id="home-page-wrapper">
        <div id="hp-child1-wrapper">
            <p>your voice, your story,</p>
            <p>your idea's, your blog</p>
        </div>
        <div id = "hp-child2-wrapper">    
            <p>Create an online presence that is truly yours, and share it with the world</p>
        </div>
    </div>

    <?php foreach($blogs as $blog){ ?> 
    <div class="preview" class="clearfix">

        <p><?= $blog ->blog_title; ?><p>
        <p><?= $blog ->topic; ?><p>
        <p><?= $blog ->blog_summary; ?><p>
        <p><?= $blog ->date_created; ?><p>    

        <a href="?controller=blog&action=show&blog_id=<?= $blog->id; ?>" class="readmore" style="vertical-align:middle"><span>Read More</span></button></a>
    <?php }?>
    </div>
</section>
