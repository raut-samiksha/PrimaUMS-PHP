<?php
include("connect-register.php");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $token = $_POST['token'];
    $new_password = $_POST['password'];

    // Validate token and update password
    $result = mysqli_query($conn, "SELECT * FROM users WHERE reset_token='$token' AND token_expiry > NOW()");
    if (mysqli_num_rows($result) > 0) {
        $hashed_password = password_hash($new_password, PASSWORD_DEFAULT);
        mysqli_query($conn, "UPDATE users SET password='$hashed_password', reset_token=NULL, token_expiry=NULL WHERE reset_token='$token'");
        echo "Password has been reset successfully.";
    } else {
        echo "Invalid or expired token. Please try again.";
    }
}
?>
