<?php
include ("session.php");
include ("connect-register.php");
?>

<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Change Password</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="register.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.0/jquery.min.js"> </script>
    <script>
        var allowSubmit;
        var allowSubmit1;
        $(document).ready(function () {

            $("#oldpsw").change(function () {
                var opass = $("#oldpsw").val();

                // alert(opass);
                // $("#omsg").text(opass);
                $.ajax({
                    type: "POST",
                    url: "change-password-check.php",
                    data: "pass=" + opass,
                    dataType: 'text',
                    success: function (data) {
                        //alert(data);
                        if (data == 'Sucess') {
                            $("#omsg").text("Old Password Match");
                            var allowSubmit = 1;
                            $('#hidden1').attr("value", "1");
                            // $("#hidden1").val(1);

                            // alert(allowSubmit);
                        } else {
                            $("#omsg").text("Old Password NOT Match");
                            var allowSubmit = 2;
                            $('#hidden1').attr("value", "2");

                            // alert(allowSubmit);

                        }

                    }
                });



            });

            $("#cnewpsw").change(function () {
                var npass = $("#newpsw").val();
                var cnpass = $("#cnewpsw").val();
                //alert(npass); 
                if (npass == cnpass) {
                    $("#nmsg").text("Confitm Password Match");
                    var allowSubmit1 = 1;
                    // alert(allowSubmit1);
                    $('#hidden2').attr("value", "1");

                    // $("#hidden2").val(1);

                } else {
                    $("#nmsg").text("Confirm Password Not  Match");
                    var allowSubmit1 = 2;
                    $('#hidden2').attr("value", "2");

                    // alert(allowSubmit1);

                }

            });

            $("#submitbtn").click(function (e) {
                var myhidden1 = $("#hidden1").val();
                var myhidden2 = $("#hidden2").val();
                // alert(myhidden1);
                // alert(myhidden2); die;


                if ((myhidden1 == 1) && (myhidden2 == 1)) {
                    $("#myform").submit();
                }
                else {
                    e.preventDefault();
                    e.stopPropagation();
                    returnToPreviousPage();
                    return false;
                }
            });

        });
    </script>
</head>

<body>

    <?php
    include ("navbar.php");
    ?>

    <div class="container">
        <div class="row">
            <div class="col">
                <h1>Change Password</h1> <br>
                <form action="change-password-new.php" method="post" id="myform">
                    <b>Old Password :</b>
                    <input type="string" name="old-password" id="oldpsw" class="password" required>
                    <span id="omsg"></span> <br> <br>

                    <b>New Password :</b>
                    <input type="string" name="new-password" id="newpsw" class="password" required>
                    <br> <br>

                    <b>Comfirm New Password :</b>
                    <input type="string" name="c-new-password" id="cnewpsw" class="password" required>
                    <span id="nmsg"></span><br> <br><br> <br>

                    <input type="hidden" id="hidden1">
                    <input type="hidden" id="hidden2">

                    <input type="submit" value="Submit" id="submitbtn">

                </form>
            </div>
        </div>
    </div>

</body>

</html>