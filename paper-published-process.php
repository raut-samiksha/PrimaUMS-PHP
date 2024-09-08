<?php
include("session.php");
include("connect-register.php");
$value_pName = $_POST["pname"];
$value_pLink = $_POST["plink"];


$mysql ="insert into paper ( paperName, paperLink, email, userID) values('$value_pName', '$value_pLink', '$mySessionEmail', '$mySessionId')";



if(mysqli_query($conn, $mysql)){   
    header("location:paper-published.php");
    echo "Data Sucessfully Added";
}
else{
    echo "Data is Not Added";
}

?>