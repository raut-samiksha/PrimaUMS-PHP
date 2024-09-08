<?php

include("connect-register.php");
error_reporting(0);

$query = "SELECT * FROM users";
$data =  mysqli_query($conn, $query);

$total = mysqli_num_rows($data);
// echo $total; it gives no of rows found i.e 1

// $result = mysqli_fetch_assoc($data);
// echo $result['fname'];

if($total != 0){
    // echo "Table has record";
    echo "<table border =1 cellspacing=7>";
    echo "<tr> <th>"."First Name"."</th>";
    echo "<th>"."Middle Name"."</th>";
    echo "<th>"."Last Name"."</th>";
    echo "<th>"."Designation"."</th>";
    echo "<th>"."Qualification"."</th>";
    echo "<th>"."Subject Taught"."</th>";
    echo "<th>"."Teaching Exp"."</th>";
    echo "<th>"."Industrial Exp"."</th>";
    echo "<th>"."Area Intrest"."</th>";
    echo "<th>"."National Paper"."</th>";
    echo "<th>"."International Paper"."</th>";
    echo "<th>"."Email"."</th>";
    echo "<th>"."Mobile No"."</th>";
    echo "<th>"."Password"."</th>";
    echo "<th>"."Operation"."</th>";
    echo "</tr>";
    while($result = mysqli_fetch_assoc($data)){
        echo "<tr> <td>".$result['fname']."</td>"; 
        echo "<td>".$result['mname']."</td>"; 
        echo "<td>".$result['lname']."</td>"; 
        echo "<td>".$result['designation']."</td>"; 
        echo "<td>".$result['qualification']."</td>"; 
        echo "<td>".$result['subjectTaught']."</td>"; 
        echo "<td>".$result['teachExp']." years"."</td>"; 
        echo "<td>".$result['indExp']." years"."</td>"; 
        echo "<td>".$result['areaIntrest']."</td>"; 
        echo "<td>".$result['nationalPaper']."</td>"; 
        echo "<td>".$result['internationalPaper']."</td>"; 
        echo "<td>".$result['email']."</td>"; 
        echo "<td>".$result['mob']."</td>"; 
        echo "<td>".$result['password']."</td>"; 
        echo "<td><a href='register-edit.php?id=".$result['$mySessionId']."'>"."Edit"."</a>"."</td>"."<td><a href='register-delete.php?id=$result[id]'>"."Delete"."</td>";
        // echo "<td><a href='register-delete.php?id=$myrows[id]'>"."Delete"."</a>"."</td>";
        echo "</tr>";

    }
    echo "<table>";

}
else{
    echo "Table has no record";
}

?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Display</title>
</head>
<body>
    
</body>
</html>