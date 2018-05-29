<?php

class PostController {

    public function viewAll() {
        // we store all the posts in a variable
        $posts = Post::all($_GET['blog_id']);
        //$posts = Post::allByBlog($_GET['blog_id']);
        require_once('views/posts/viewAll_post.php');
    }

  
public function show() {
        // we expect a url of form ?controller=post&action=show&id=x
        // without an id we just redirect to the error page as we need the post id to find it in the database
        
       //If not in URL, then post_id should be passed in SESSION. Clear post_id from SESSION once it's been accessed.
        
        if (!isset($_GET['post_id'])){
            If (isset($_SESSION['post_id'])){
                $_GET['post_id'] = $_SESSION['post_id'];
                $_SESSION['post_id'] = NULL;
            }  
        }
        
        if (!isset($_GET['post_id']))
            return call('pages', 'error');
        try {
            // we use the given id to get the correct post
            $post = Post::find($_GET['post_id']);
            require_once('views/posts/show_post.php');
            
            call('comment', 'viewAll');
            
        } catch (Exception $ex) {
            return call('pages', 'error');
        }
    }
    public function create() {
        // we expect a url of form ?controller=post&action=create
        // if it's a GET request display a blank form for creating a new post
        // else it's a POST so add to the database and redirect to viewAll action
        if ($_SERVER['REQUEST_METHOD'] == 'GET') {
            require_once('views/posts/create_post.php');
        } else {
            
            //Create post, then display all blog posts 
            Post::add($_GET['blog_id']);
            
              call('blog', 'show'); 
           //$posts = Post::all($_GET['blog_id']); //$posts is used within the view
           //require_once('views/posts/viewAll_post.php');
        }
    }

    public function update() {

        if ($_SERVER['REQUEST_METHOD'] == 'GET') {
            if (!isset($_GET['post_id']))
                return call('pages', 'error');
            // we use the given id to get the correct post
            $post = Post::find($_GET['post_id']);

            require_once('views/posts/update_post.php');
        }
        else {
            $id = $_GET['post_id'];
            Post::update($id);
            //call('blog', 'show'); potencially 
            call('blog', 'viewAll'); 

  
  //require_once('views/blogs/viewAll_blog.php');
    //require_once('views/layout.php');
            //$post = Post::all($_GET['blog_id']);
            //require_once('views/posts/viewAll_post.php');
        }
    }

    public function delete() {
        Post::remove($_GET['post_id']);
        
         call('blog', 'viewAll'); 

        //$posts = Post::all($_GET['blog_id']);
        //require_once('views/posts/viewAll_post.php');
    }

}

?>

