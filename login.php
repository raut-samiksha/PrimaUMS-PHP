<?php

?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="login.css">
</head>
<body>
    <?php 
    include('navbar.php');
   ?>

   <div class="container">
    <div class="row">
        <div class="col">
    <h1>Login User</h1>
    <form action="login-process.php" method="post">
        <b>Email</b>
        <input type="email" name="email" id=""> <br> <br>

        <b>Password</b>
        <input type="password" name="password" id=""> <br> <br>
        <p><a href="forgot-password.php" class="fpass">Forgot Password</a></p>
        <button type="submit" name="submit" class="btn">Login</button>
        <p style="font-size:16px">New User 
            <a href="register.php" style="color:blue " >Create an Account</a></p>

    </form>
    

    </div>
    </div>
   </div>
    . <?php 
    include('footer.php');
   ?>
</body>
</html>