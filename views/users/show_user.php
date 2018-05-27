<?php
/* 
 * show the profile of user (controller may contribute or request specific tag)
 */

?>

<section>
    <div>
        <h2> Your profile </h2>
        <p> First name:<?= $user->first_name; ?></p>
        <p> Last name: <?= $user->last_name; ?></p>
        <p> Your Username: <?= $user->username; ?></p>
        <p> your email: <?= $user->email; ?></p>
        
    </div>
    <?php // update delete need id - codein php by controller ?>
    <a class ="button" href="?controller=user&action=update" >Update your profile</a>
    <a class ="button" href="?controller=user&action=delete" >Delete your profile</a>
    <a class ="button" href="?controller=blog&action=viewAll" >Back to home page</a>
    
</section>