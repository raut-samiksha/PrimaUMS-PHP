<?php

?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Forgot Password</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="register.css">
</head>
<body>

     <?php
        include("navbar.php");
    ?> 
    <div class="container">
        <div class="row">
            <div class="col">
            <h1>Forgot Password</h1>
            <form action="send-reset-link.php" method="post">
                <label for="email">Email:</label>
                <input type="email" name="email" required>
                <input type="submit" value="Submit">
            </form>
            </div>
        </div>
    </div>
   
</body>
</html>