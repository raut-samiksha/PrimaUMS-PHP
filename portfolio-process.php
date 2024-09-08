<?php
include("session.php");
include("connect-register.php");
$value_portName = $_POST["portname"];
$value_sDate = $_POST["sdate"];
$value_eDate = $_POST["edate"];

$mysql ="insert into portfolio (portfolioName, startDate, endDate,  email, userID) values('$value_portName', '$value_sDate', '$value_eDate',  '$mySessionEmail', '$mySessionId')";
//  echo $mysql;


if(mysqli_query($conn, $mysql)){   
    echo "<script>('Portfolio Data Sucessfully Added')</script>";
}
else{
    echo "Data is Not Added";
}



?>