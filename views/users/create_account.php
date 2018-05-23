<!DOCTYPE html>
<!--
-->
<html>
    <head>
        <title>Create an Account</title>
        <link href="main.css" rel="stylesheet" type="text/css"/>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    
    <body>
        
        <!-- This all needs to be centered and styled -->
        
        
        <h1>Create Account</h1>
        
        <h2>Please fill in all fields</h2>
        
        <form  action=""
              method="post" >
             
     
            <p>First name: <input type="text" name="first_name" placeholder="Enter First Name" required autofocus/></p>
            <p>Last name: <input type="text" name="last_name" placeholder="Enter Last Name" required /></p>
            <p>Email: <input type="email" name="email"  placeholder="name@example.com" required /></p>   
            <p>Choose a username: <input type="text" name="username" placeholder="Choose a Username" required /> </p> 
            <p>Choose a password: <input type="password" name="password" placeholder="Choose a Password" required/></p>
            <p>Repeat Password: <input type="password" name="password-repeat" placeholder="Repeat Password" required/></p>  
               
          <!--  <input type="checkbox" checked="checked" name="remember" style="margin-bottom:15px"> Remember me  -->

    <p>By creating an account you agree to our <a href="#" style="color:dodgerblue">Terms & Privacy</a>.</p>   
     
   <input type="submit" value = "submit" href="?controller=user&action=register" />
   <input type="button" value="Cancel" onclick="window.location.href = 'views/pages/home.php'"/>

            
    </body>
    <?PHP
     print_r($_POST);
    
    ?>
</html>


