<?php

/* 
 * ready for test
 * form to create a blog
 *  original styling is at the bottom to keep for further use
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
<h1>Create Your Blog</h1>
        
    <h3>Enjoy writing you blog!</h3>
        <form action="" method="post" >
        
            <p>Blog Title</p>
            <textarea class="blog_title" name = "blog_title" rows="1" cols="60" placeholder="Write your title here" required>
                </textarea>

            <p>Topic</p>
            <textarea class="topic" name = "topic" rows="1" cols="60" placeholder="Write your blog topic here" required>
                </textarea>

            <p>Summary</p>
            <textarea class="blog_body" name = "blog_summary" rows="15" cols="80" placeholder="What is your blog about?" required>
                </textarea>

            <input type="submit" name="update" href="?controller=blog&action=create" />
            <a c href="?controller=blog&action=viewAll">Cancel</a>
        </form>            
</section>


























<!--<!DOCTYPE html>

<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
* {
    box-sizing: border-box;
}

/* Add a gray background color with some padding */
body {
    font-family: Arial;
    padding: 20px;
    background: #f1f1f1;
}

/* Header/Blog Title */
.header {
    padding: 30px;
    font-size: 40px;
    text-align: center;
    background: white;
}

/* Create two unequal columns that floats next to each other */
/* Left column */
.leftcolumn {   
    float: left;
    width: 75%;
}

/* Right column */
.rightcolumn {
    float: left;
    width: 25%;
    padding-left: 20px;
}

/* Fake image */
.fakeimg {
    background-color: #aaa;
    width: 100%;
    padding: 20px;
}

/* Add a card effect for articles */
.card {
     background-color: white;
     padding: 20px;
     margin-top: 20px;
}

/* Clear floats after the columns */
.row:after {
    content: "";
    display: table;
    clear: both;
}

/* Footer */
.footer {
    padding: 20px;
    text-align: center;
    background: #ddd;
    margin-top: 20px;
}

/* Responsive layout - when the screen is less than 800px wide, make the two columns stack on top of each other instead of next to each other */
@media screen and (max-width: 800px) {
    .leftcolumn, .rightcolumn {   
        width: 100%;
        padding: 0;
    }
}
</style>
</head>
<body>

<div class="header">
  <h2>Enter your Blog Name here</h2>
</div>

<div class="row">
  <div class="leftcolumn">
    <div class="card">
       
<p><textarea rows="20" cols="131" autofocus placeholder="Write your summary here - Capture your audience and tell them what your blog is about">
</textarea></p>

    </div> 
    <div class="fakeimg" style="height:200px;">Optional Image</div>
    
    <br>
    <br>  
 
    <input type="submit" value="Create Blog" />

  </div>
  <div class="rightcolumn">
    <div class="card">
      <h2>About Me</h2>
      <div class="fakeimg" style="height:100px;">Image</div>
      <p>Some text about me..</p>
    </div>

    <div class="card">
      <h3>Follow Me</h3>
      <p>Some text..</p>
    </div>
  </div>
</div>

</body>
</html>

--!>
