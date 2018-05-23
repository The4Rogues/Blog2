       
<h1>Create Account</h1>
        
<h2>Please fill in all fields</h2>
        
    <form  action="" method="post" >

        <p>First name: <input type="text" name="first_name" placeholder="Enter First Name" required autofocus/></p>
        <p>Last name: <input type="text" name="last_name" placeholder="Enter Last Name" required /></p>
        <p>Email: <input type="email" name="email"  placeholder="name@example.com" required /></p>   
        <p>Choose a username: <input type="text" name="username" placeholder="Choose a Username" required /> </p> 
        <p>Choose a password: <input type="password" name="password" id="password" placeholder="Choose a Password" required/></p>
        <p>Repeat Password: <input type="password" name="password-repeat" id="confirm_password" placeholder="Repeat Password" required/></p>  
               
    <p>By creating an account you agree to our <a href="#" style="color:dodgerblue">Terms & Privacy</a>.</p>   
     
    <input type="submit" value = "Submit" href="?controller=user&action=register" />
    <!--not sure if it works -->
    <input type="button" value="Cancel" onclick="window.location.href = '?controller=blog&action=viewAll'"/>

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



