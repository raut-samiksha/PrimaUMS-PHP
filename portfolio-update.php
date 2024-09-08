<?php

include("session.php");
include("connect-register.php");

if (isset($_POST['submit'])) {

$valueId = $_POST["userid"];

$valueportfolioName =$_POST["portname"];   

$valuesDate =$_POST["sdate"];   
$valuesDate = date('Y-m-d', strtotime($valuesDate)); 

$valueeDate =$_POST["edate"]; 
$valueeDate = date('Y-m-d', strtotime($valueeDate));  


// $valueDOB = date('Y-m-d', strtotime($valueDOB)); 
                               
$updateuser = "UPDATE portfolio SET portfolioName='$valueportfolioName', startDate ='$valuesDate', 
            endDate ='$valueeDate' WHERE id= $mySessionId";

// echo $updateuser; die;

// echo $updateuser;

$myresult = mysqli_query($conn, $updateuser);

if (mysqli_query($conn, $updateuser)) {
    session_start();
        $_SESSION["updateMsg"] = "Portfolio updated successfully";
        header("location:portfolio.php");
    // echo "Record updated successfully";
} else {
    echo "Error updating record: " . mysqli_error($conn);
}

}   
?>

