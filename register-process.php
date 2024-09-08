<?php
include("connect-register.php");

if(isset($_POST["check emailbtn"])){

}

// File upload handling
$filename = $_FILES["photo"]["name"];
$tempname = $_FILES["photo"]["tmp_name"];
$folder = "images/" . $filename;

if (move_uploaded_file($tempname, $folder)) {
    // Retrieve form data
    $value_fName = $_POST["fname"];
    $value_mName = $_POST["mname"];
    $value_lName = $_POST["lname"];
    $valueDesignation = $_POST["designation"];
    $valueQualification = $_POST["qualification"];
    $valueSubTaught = $_POST["sub-taught"];
    $value_Texp = $_POST["Texp"];
    $value_Iexp = $_POST["Iexp"];
    $value_AreaInt = $_POST["areaInt"];
    $value_national = $_POST["national"];
    $value_international = $_POST["international"];
    $value_email = $_POST["email"];
    $value_mob = $_POST["mob"];
    $value_password = MD5($_POST["password"]);

    // Prepare the SQL query
    $stmt = $conn->prepare("INSERT INTO users (profPhoto, fname, mname, lname, designation, qualification, subjectTaught, teachExp, indExp, areaIntrest, nationalPaper, internationalPaper, email, mob, password) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");
    
    // Bind parameters
    $stmt->bind_param("ssssssssissssss", $folder, $value_fName, $value_mName, $value_lName, $valueDesignation, $valueQualification, $valueSubTaught, $value_Texp, $value_Iexp, $value_AreaInt, $value_national, $value_international, $value_email, $value_mob, $value_password);
    
    
    // Execute the statement
    if ($stmt->execute()) {
        echo "<script>alert('User Register Successfully');</script>";
        
    } 
    else {
        echo "Error: " . $stmt->error;
    }
    
    // Close the statement
    $stmt->close();
    header('location:login.php');
} else {
    echo "Failed to upload image.";
}
?>
