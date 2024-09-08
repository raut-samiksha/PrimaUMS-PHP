<?php
include("session.php");
include("connect-register.php");

$NewPassword = MD5($_POST["new-password"]);
$CNewPassword = MD5($_POST["c-new-password"]);


if ($NewPassword == $CNewPassword){
    $mysql ="UPDATE users SET password= '$NewPassword'  WHERE email='$mySessionEmail'";
    echo $mysql;
    $myresult = mysqli_query($conn, $mysql);

    if($myresult>0){  
        echo "Sucess";
        header("location:login.php");
    }
    else{
        echo "Failed";
    }
}
else{
    echo "Password does not Match";
}

?>