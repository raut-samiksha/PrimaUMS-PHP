<?php

include("connect-register.php");
require 'PHPMailer-6.9.1/src/PHPMailer.php';
require 'PHPMailer-6.9.1/src/SMTP.php';
require 'PHPMailer-6.9.1/src/Exception.php';
include 'connect-register.php';

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST['email'];

    // Check if user exists
    $result = mysqli_query($conn, "SELECT * FROM users WHERE email='$email'");
    if (mysqli_num_rows($result) > 0) {
        $token = bin2hex(random_bytes(32));
        $expiry = date('Y-m-d H:i:s', strtotime('+1 hour'));

        mysqli_query($conn, "UPDATE users SET reset_token='$token', token_expiry='$expiry' WHERE email='$email'");

        // PHPMailer configuration
        $mail = new PHPMailer(true);
        try {
            $mail->SMTPDebug = 2; // Enable detailed debugging
            $mail->Debugoutput = 'html'; // Show output in HTML
            $mail->isSMTP();
            $mail->Host = 'smtp.gmail.com';
            $mail->SMTPAuth = true;
            $mail->Username = 'digitalaboli14@gmail.com'; // Your Gmail email
            $mail->Password = 'Aboli@1234'; // Your app-specific password
            $mail->SMTPSecure = 'tls';
            $mail->Port = 587;

            $mail->setFrom('your-email@gmail.com', 'Your Name');
            $mail->addAddress($email);

            $mail->Subject = 'Password Reset Request';
            $mail->Body    = "Click the link to reset your password: http://yourdomain.com/reset-password.php?token=$token";

            $mail->send();
            echo "A password reset link has been sent to your email.";
        } catch (Exception $e) {
            echo "Mailer Error: " . $mail->ErrorInfo;
        }
    } else {
        echo "No account found with that email.";
    }
}
?>
