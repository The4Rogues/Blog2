<?php
/* 
 * show the profile of user (controller may contribute or request specific tag)
 */
?>

<section>
    <div>
        <h2> Your profile </h2>
        <p> Your first name</p>
        <p> Your last name</p>
        <p>Your username</p>
        <p>Your email</p>
        <p>created or update date</p>
    </div>
    <?php // update delete need id - codein php by controller ?>
    <a class ="button" href="?controller=user&action=update" >Update your profile</a>
    <a class ="button" href="?controller=user&action=delete" >Delete your profile</a>
    <a class ="button" href="?controller=blog&action=viewAll" >Back to home page</a>
    
</section>