<?php
include("session.php");
?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portfolio Profile</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="register.css">
    
</head>
<body>
   <?php 
    include('navbar.php');
   ?>

    </div>
        <div class="container">
            <h1 class="new-h1">Profile</h1> <br>
            <?php
       
            if (isset($_SESSION['sid'])) {
            $uid=$_SESSION['sid'];
            echo "<b> First Name : </b>".$_SESSION["sname"]."<br> <br>";
            echo "<b> Middle Name : </b>".$_SESSION["smname"]."<br> <br>";
            echo "<b> Last Name : </b>".$_SESSION["slname"]."<br> <br>";
            echo "<b> Designation : </b>".$_SESSION['sdesignation']."<br> <br>";
            echo "<b> Qualification : </b>".$_SESSION['squalification']."<br> <br>";
            echo "<b> Subject Taught : </b>".$_SESSION['ssubjectTaught']."<br> <br>";
            echo "<b> Teaching Exp : </b> ".$_SESSION["steachExp"]."<br> <br>";
            echo "<b> industrial Exp : </b>".$_SESSION["sindExp"]."<br> <br>";
            echo "<b> Area Intrest : </b>".$_SESSION["sareaIntrest"]."<br> <br>";
            echo "<b> National Paper : </b>".$_SESSION["snationalPaper"]."<br> <br>";
            echo "<b> International Paper : </b>".$_SESSION["sinternationalPaper"]."<br> <br>";
            echo "<b> Mobile No : </b> ".$_SESSION["smob"]."<br> <br>";
            echo "<b> Email : </b>". $_SESSION["email"]."<br> <br>";
            echo "<b> Password : </b>".$_SESSION['spassword']."<br> <br>";
             
            }else{  
                header("location:logout.php");
            }
            ?>
            <button><a href="register-edit.php">Edit</a></button>
          <button> <a href="logout.php">Logout</a></button>

       

            
        </div>


    <?php
        include("footer.php");
    ?>
    
</body>
</html>