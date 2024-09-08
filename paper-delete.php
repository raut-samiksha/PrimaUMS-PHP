<?php
include("connect-register.php");

$valueId = $_GET["id"];
$Deleteuser = "DELETE FROM `paper` WHERE id = '$valueId'";
echo $Deleteuser;

$myresult = mysqli_query($conn, $Deleteuser);

echo "<script>('Paper Deleted Sucessfully')</script>";

header("location:paper-published.php");
?>

