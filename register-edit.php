<?php

include("session.php");
include("connect-register.php");

// $valueId = $_GET["id"];
// echo $mySessionId;
$Edituser = "SELECT * FROM `users` WHERE id = '$mySessionId'";
// echo $Edituser;

$myresult = mysqli_query($conn, $Edituser);

if($myresult->num_rows>0){

    while ($myrows=$myresult->fetch_assoc()){
        
      $myfname= $myrows['fname'];
        
        $mymname = $myrows['mname']; 

        $mylname = $myrows['lname']; 

        $mydesignation = $myrows['designation']; 

        $myqualification = $myrows['qualification']; 

        $mysubjectTaught =  $myrows['subjectTaught']; 

        $myteachExp = $myrows['teachExp']; 

        $myindExp =  $myrows['indExp']; 

        $myareaIntrest =  $myrows['areaIntrest']; 

        $mynationalPaper = $myrows['nationalPaper']; 

        $myinternationalPaper =  $myrows['internationalPaper']; 

        $myemail = $myrows['email']; 

        $mymob = $myrows['mob']; 

        $mypass =$myrows['password'];
      
}
}

?>


<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update Register</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="register.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
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
    <form action="register-update.php" method="post">
    <h1>Update Details of  Users </h1> <br>
        <h2>Personal Information</h2> <br>
        <input type="hidden" name ="userid" value ="<?php echo $mySessionId ?>"> 
        
        <b>First Name : </b>
        <input type="string" name="fname" id="" value ="<?php echo $myfname ?>" required> 
        <br> <br>
        
        <b>Middle Name : </b>
        <input type="string" name="mname" id="" value ="<?php echo $mymname ?>" required> 
        <br> <br>
        
        <b>Last Name : </b>
        <input type="string" name="lname" id="" value ="<?php echo $mylname ?>" required> <br> <br>

        <b>Designation : </b>
        <input type="string" name="designation" id="" value ="<?php echo $mydesignation ?>" required> <br> <br>

        <h2>Teaching Details</h2> <br>

        <b>Qualification : </b>
        <textarea type="string" name="qualification" id="" required><?php echo $myqualification ?> </textarea> <br> <br>

        <b>Subject Taught : </b>
        <textarea type="string" name="sub-taught" id=""   required><?php echo $mysubjectTaught ?> </textarea> <br> <br>

        <b>Teaching Experience : </b>
        <input type="number" name="Texp" id=""  value ="<?php echo $myteachExp ?>" required> <br> <br>

        <b>Industrial Experience : </b>
        <input type="number" name="Iexp" id=""  value ="<?php echo $myindExp ?>" required> <br> <br>

        <b>Area of Interest : </b>
        <textarea type="string" name="areaInt" id="" required><?php echo $myareaIntrest ?> </textarea> <br> <br>
        
        <b>Papers Published : </b> <br>
        <span>National :</span>
        <input type="number" name="national" id=""  value ="<?php echo $mynationalPaper ?>" required>

        <span>International :</span>
        <input type="number" name="international" id=""  value ="<?php echo $myinternationalPaper ?>" required> <br> <br>

        <b>Contact : </b> <br>
        <span>Email :</span>
        <input type="email" name="email" id=""  value ="<?php echo $myemail ?>" required>

        <span>Mobile Number :</span>
        <input type="number" name="mob" id=""  value ="<?php echo $mymob ?>" required> <br> <br>

        <span>Password :</span>
        <input type="string" name="password" id="" value ="<?php echo $mypass ?>" required> <br> <br>

        <button type="submit" name="submit">Submit</button>
        

    </form>
    </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

</body>
</html>