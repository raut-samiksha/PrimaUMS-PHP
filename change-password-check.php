<?php
include("session.php");
include("connect-register.php");

$OldPassword = MD5($_POST["pass"]);

$mysql ="select * from `users` WHERE email='$mySessionEmail' AND password='$OldPassword'";

$myresult = mysqli_query($conn, $mysql);

if($myresult->num_rows>0){  
     echo "Sucess";
}
else{
    echo "Failed";
}



?>