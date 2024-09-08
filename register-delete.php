<?php
include("connect-register.php");

$valueId = $_GET["id"];
$Deleteuser = "DELETE FROM `users` WHERE id = '$valueId'";
echo $Deleteuser;

$myresult = mysqli_query($conn, $Deleteuser);


?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DELETE</title>
    <link rel="stylesheet" href="register.css">
</head>
<body>

    
    <form action="register-process.php" method="post">
    <h1>Register Users </h1>
        <h2>Personal Information</h2>
        <b>First Name : </b>
        <input type="string" name="fname" id="" required> <br> <br>
        
        <b>Middle Name : </b>
        <input type="string" name="mname" id="" required> <br> <br>
        
        <b>Last Name : </b>
        <input type="string" name="lname" id="" required> <br> <br>

        <b>Designation : </b>
        <input type="string" name="designation" id="" required> <br> <br>

        <h2>Teaching Details</h2>

        <b>Qualification : </b>
        <textarea type="string" name="qualification" id="" required> </textarea> <br> <br>

        <b>Subject Taught : </b>
        <textarea type="string" name="sub-taught" id="" required> </textarea> <br> <br>

        <b>Teaching Experience : </b>
        <input type="number" name="Texp" id="" required> <br> <br>

        <b>Industrial Experience : </b>
        <input type="number" name="Iexp" id="" required> <br> <br>

        <b>Area of Interest : </b>
        <textarea type="string" name="areaInt" id="" required> </textarea> <br> <br>
        
        <b>Papers Published : </b> <br>
        <span>Nationaal :</span>
        <input type="number" name="national" id="" required>

        <span>International :</span>
        <input type="number" name="international" id="" required> <br> <br>

        <b>Contact : </b> <br>
        <span>Email :</span>
        <input type="email" name="email" id="" required>

        <span>Mobile Number :</span>
        <input type="number" name="mob" id="" required> <br> <br>
        
        <span>Password :</span>
        <input type="string" name="password" id="" required> <br> <br>

        <button type="submit" name="submit">Submit</button>
        

    </form>

    
</body>
</html>