<?php
include("connect-register.php");
if(isset($_POST['submit'])){

$value_email = $_POST["email"];
$value_Password = MD5($_POST["password"]);

$mysql ="select * from `users` WHERE email='$value_email' AND password='$value_Password'";

$myresult = mysqli_query($conn, $mysql);

if($myresult->num_rows>0){   
    // echo "Login is found";
    session_start();

    $mydata = $myresult->fetch_assoc();
    $_SESSION["sid"]= $mydata['id']; 
   $_SESSION["sname"]= $mydata['fname'];
   $_SESSION["semail"]= $mydata['email'];
  

   

    header('location:profile.php');


}
else{
    echo "Login is not found";
}
}

?>

<!-- $_SESSION['smname']= $mydata['mname'];
   $_SESSION['slname']= $mydata['lname'];
   $_SESSION['sdesignation']= $mydata['designation'];
   $_SESSION['squalification']= $mydata['qualification'];
   $_SESSION['ssubjectTaught']= $mydata['subjectTaught'];
   $_SESSION['steachExp']= $mydata['teachExp'];
   $_SESSION['sindExp']= $mydata['indExp'];
   $_SESSION['sareaIntrest']= $mydata['areaIntrest'];
   $_SESSION['snationalPaper']= $mydata['nationalPaper'];
   $_SESSION['sinternationalPaper']= $mydata['internationalPaper'];
    $_SESSION["email"]= $mydata['email'];
    $_SESSION['smob']= $mydata['mob']; 
   $_SESSION['spassword']= $mydata['password'];  -->