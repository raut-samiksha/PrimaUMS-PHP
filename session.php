<?php
session_start();
if (!isset($_SESSION['sid'])) {
   
    header("Location: login.php");

}
else {
    $mySessionId = $_SESSION['sid'];
    $mySessionEmail = $_SESSION['semail'];
    // echo $mySessionEmail;
}
?>
