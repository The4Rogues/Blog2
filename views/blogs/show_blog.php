
<section>
    <h1> Viewing a Blog (test)</h1>

    <div>
        <p> Title: <?= $blog->blog_title; ?></p>
        <p> Date: <?= $blog->date_created; ?></p>
        <p>Summary: <?= $blog ->blog_summary; ?></p>
    </div>
    <div>
        <a href="?controller=post&action=create&blog_id=<?= $blog->id ?>" class="button js-button" role="button">Create Post</a>
        <a href="?controller=blog&action=update&blog_id=<?= $blog->id ?>" class="button js-button" role="button">Edit Blog</a>
        <a href="?controller=blog&action=delete&blog_id=<?= $blog->id ?>" class="button js-button" role="button">Delete Blog</a>
    </div>
</section>
