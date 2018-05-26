<?php

/* 
 * form to update profile
 *
 */

?>
       
<h1>Change on your Account</h1>
        
<h2>Change where need to be</h2>
<p>You must add your current password or new password on the both password and confirm your password fields </P>        
    <form  action="" method="post" >

        <p>First name: <input type="text" name="first_name" value="<?= $user->first_name ?>" /></p>
        <p>Last name: <input type="text" name="last_name" value="<?= $user->last_name ?>" /></p>
        <p>Email: <input type="email" name="email" value="<?= $user->email ?>" /></p>          
        <p>Password: <input type="password" name="password" id="password" ? /></p>
        <p>Confirm your password: <input type="password" name="password-repeat" id="confirm_password" /></p>  
  
     
    <input type="submit" value = "Submit" href="?controller=user&action=update" />
    <!--not sure if it works -->
    <a type= "button" href="?controller=blog&action=viewAll">Cancel</a>

<script>
    var password = document.getElementById("password")
      , confirm_password = document.getElementById("confirm_password");

    function validatePassword(){
      if(password.value !== confirm_password.value) {
        confirm_password.setCustomValidity("Passwords Don't Match");
      } else {
        confirm_password.setCustomValidity('');
      }
    }

    password.onchange = validatePassword;
    confirm_password.onkeyup = validatePassword;
</script>        

    <?PHP
    // print_r($_POST)   
    ?>



