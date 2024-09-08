<?php
include("session.php");
include("connect-register.php");
?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portfolio</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="register.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

</head>
<body>
    <?php 
        include('navbar.php');
    ?>

<div class="container">
        <div class="row">
            <div class="col">
            <form action="portfolio-process.php" method="post">


            <b>Portfolio Name : </b>
            <input type="string" name="portname" id="" > <br> <br>

            <b>Start Date : </b>
            <input type="date" name="sdate" id="" > <br> <br>

            <b>End Date : </b>
            <input type="date" name="edate" id="" > <br> <br>

            <button type="submit" name="submit">Submit</button>
        
            </form>
            </div>
        </div>
    </div>

    <?php
       
       if (isset($_SESSION['sid'])) {
       // echo $uid=$_SESSION['sid'];
       // echo $mySessionId;
       // echo $mySessionEmail;
       $myquery = "SELECT * FROM portfolio WHERE userID='$mySessionId' && email='$mySessionEmail'";
       // echo $myquery;
       $data =  mysqli_query($conn, $myquery);
       $total = mysqli_num_rows($data);

       
       if($total != 0){
        echo "<br>";
        echo"<table class='table table-bordered table-striped w-75 ms-5' border=1 >";
        echo "<tr> <td><b>Portfolio Name </b></td>";
        echo "<td><b> Start Date </b></td>";
        echo "<td><b> End Date </b></td>";
        echo "<td><b>Operation</b></td>";
        echo "</tr> ";
           while($result = mysqli_fetch_assoc($data)){
            
            echo "<tr> <td>".$result["portfolioName"]."</td> ";
            echo "<td>".$result['startDate']."</td> ";
            echo "<td>".$result['endDate']."</td> ";
            echo "<td><a href='portfolio-edit.php?id=".$result['id']."'style='color:blue;'>"."Edit"."</a>"."</td>"."<td><a href='portfolio-delete.php?id=$result[id]'style='color:blue;'>"."Delete"."</td>";
            echo "</tr>";
           }

           echo "</table>";   
       }else{
           echo "The Record is not found";
       }
      
       }else{  
           header("location:logout.php");
       }
       ?>

    
    <?php 
        include('footer.php');
    ?>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>