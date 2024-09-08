<?php

include("session.php");
include("connect-register.php");

$valueId = $_GET["id"];
// echo $mySessionId;
$Edituser = "SELECT * FROM `paper` WHERE id = '$valueId' AND email='$mySessionEmail' AND userID = '$mySessionId'";

// echo $Edituser;

$myresult = mysqli_query($conn, $Edituser);

if($myresult->num_rows>0){

    while ($myrows=$myresult->fetch_assoc()){
        
    $mypaperName = $myrows['paperName'];
        
    $myspaperLink = $myrows['paperLink']; 
 
}
}

?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update Paper Published</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="register.css">
</head>
<body>
    <?php 
    include('navbar.php');
   ?>
    <div class="container">
        <div class="row">
            <div class="col">

        <?php
        if(isset($_SESSION["updateMsg"])){

        ?>
            <div class="alert alert-success" role="alert">
            <?php
            echo $_SESSION["updateMsg"];
            unset($_SESSION["updateMsg"]);
            ?>
        </div>

    <?php
    }
    ?>

    <form action="paper-update.php" method="post">
           
        <h1 class="new-h1">Paper Published Details </h1>
        <input type="hidden" name ="userid" value ="<?php echo $mySessionId ?>"> 
        <b>Paper Name : </b>
        <input type="string" name="pname" id="" value ="<?php echo $mypaperName ?>" > <br> <br>

        <b>Paper Link : </b>
        <input type="string" name="plink" id="" value ="<?php echo $myspaperLink ?>"> <br> <br>

        <button type="submit" name="submit">Update</button>
        
    </form>
        </div>
        </div>
    </div>
    

    
    <?php 

    include('footer.php');
   ?>
    
</body>
</html>

