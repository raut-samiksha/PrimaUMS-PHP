<?php
$host ='localhost';
$user ='root';
$pass = '';
$db_name ='primaums';
$conn =mysqli_connect($host, $user, $pass, $db_name);

if($conn){
    // echo "coonected";
}
else{
echo "Database is Not Connected".mysqli_connect_error();
}
?>