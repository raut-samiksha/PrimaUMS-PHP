<?php

include("session.php");
include("connect-register.php");

if (isset($_POST['submit'])) {

$valueId = $_POST["userid"];

$valuefname=$_POST["fname"];   

$valuemname=$_POST["mname"];   

$valuelname=$_POST["lname"];  

$valuedesignation =$_POST["designation"]; 

$valuequalification =$_POST["qualification"];  

$valuesubtaught =$_POST["sub-taught"];  

$valueTexp =$_POST["Texp"];  

$valueIexp=$_POST["Iexp"];  

$valueareaInt =$_POST["areaInt"];  

$valuenational =$_POST["national"];  

$valueinternational =$_POST["international"];  

$valueemail =$_POST["email"];

$valuemobno =$_POST["mob"];  

$valuepass = $_POST["password"];

                               
$updateuser = "UPDATE users SET fname='$valuefname', mname='$valuemname', 
                lname='$valuelname',designation='$valuedesignation',
                qualification='$valuequalification', subjectTaught='$valuesubtaught', 
                teachExp='$valueTexp', indExp= '$valueIexp',areaIntrest='$valueareaInt',
                nationalPaper='$valuenational',  internationalPaper='$valueinternational',
                email='$valueemail', mob='$valuemobno' ,password='$valuepass'
                WHERE id= $mySessionId";

// echo $updateuser; die;

// echo $updateuser;

$myresult = mysqli_query($conn, $updateuser);

if (mysqli_query($conn, $updateuser)) {
    session_start();
    $_SESSION["updateMsg"] = "Record updated successfully";
    
    header("location:register-edit.php");
    // echo "Record updated successfully";

} else {
    echo "Error updating record: " . mysqli_error($conn);
}

}   
?>

