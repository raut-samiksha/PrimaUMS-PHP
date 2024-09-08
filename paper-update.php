<?php

include("session.php");
include("connect-register.php");

if (isset($_POST['submit'])) {

    $valueId = $_POST["userid"];

    $valuepname =$_POST["pname"];   

    $valueplink =$_POST["plink"];   

    $updateuser = "UPDATE paper SET paperName='$valuepname', paperLink='$valueplink'
                WHERE id= $mySessionId";

    $myresult = mysqli_query($conn, $updateuser);

    if (mysqli_query($conn, $updateuser)) {
        session_start();
        $_SESSION["updateMsg"] = "Record updated successfully";
        header("location:profile.php");
        // echo "Record updated successfully";

    } else {
        echo "Error updating record: " . mysqli_error($conn);
    }

}

?>