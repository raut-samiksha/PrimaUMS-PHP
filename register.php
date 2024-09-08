<?php

?>

<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="register.css">

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
    <script>

        $(document).ready(function () {
            $('#first_form').submit(function (e) {
                e.preventDefault();
                var first_name = $('#first_name').val();
                var middle_name = $('#middle_name').val();
                var last_name = $('#last_name').val();
                var designation = $('#designation').val();
                var qualification = $('#qualification').val();
                var sub-taught = $('#sub-taught').val();
                var Texp = $('#Texp').val();
                var Iexp = $('#Iexp').val();
                var areaInt = $('#areaInt').val();
                var national = $('#national').val();
                var international = $('#international').val();
                var email = $('#email').val();
                var mob = $('#mob').val();
                var password = $('#password').val();


                $(".error").remove();
                if (first_name.length < 1) {
                    $('#first_name').after('<span class="error">This field is required</span>');
                }

                if (middle_name.length < 1) {
                    $('#middle_name').after('<span class="error">This field is required</span>');
                }

                if (last_name.length < 1) {
                    $('#last_name').after('<span class="error">This field is required</span>');
                }

                if (qualification.length < 1) {
                    $('#qualification').after('<span class="error">This field is required</span>');
                }

                if (sub - taught.length < 1) {
                    $('#sub-taught').after('<span class="error">This field is required</span>');
                }
                if (Texp.length < 1) {
                    $('#Texp').after('<span class="error">This field is required</span>');
                }
                if (Iexp.length < 1) {
                    $('#Iexp').after('<span class="error">This field is required</span>');
                }
                if (areaInt.length < 1) {
                    $('#areaInt').after('<span class="error">This field is required</span>');
                }
                if (national.length < 1) {
                    $('#national').after('<span class="error">This field is required</span>');
                }
                if (international.length < 1) {
                    $('#international').after('<span class="error">This field is required</span>');
                }


                if (email.length < 1) {
                    $('#email').after('<span class="error">This field is required</span>');
                }
                else {
                    var regEx = /^[A-Z0-9][A-Z0-9._%+-]{0,63}@(?:[A-Z0-9-]{1,63}\.){1,125}[A-Z]{2,63}$/;
                    var validEmail = regEx.test(email);

                    if (!validEmail) {
                        $('#email').after('<span class="error">Enter a valid email</span>');
                    }
                }
                if (password.length < 8) {
                    $('#password').after('<span class="error">Password must be at least 8 characters long</span>');
                }
                if (mob.length > 1) {
                    $('#mob').after('<span class="error">This field is required</span>');
                }
            });

            $('form[id="second_form"]').validate({
                rules: {
                    fname: 'required',
                    lname: 'required',
                    user_email: {
                        required: true,
                        email: true,
                    },
                    psword: {
                        required: true,
                        minlength: 8,
                    }
                },
                messages: {
                    fname: 'This field is required',
                    lname: 'This field is required',
                    user_email: 'Enter a valid email',
                    psword: {
                        minlength: 'Password must be at least 8 characters long'
                    }
                },
                submitHandler: function (form) {
                    form.submit();
                }
            });
        });  
    </script>

</head>

<body>
    <?php
    include ('navbar.php');
    ?>
    <div class="container">
        <div class="row">
            <div class="col">

                <form action="register-process.php" method="post" id="first_form" enctype="multipart/form-data">
                    <h1 class="new-h1">Register Users</h1>

                    <h2>Personal Information</h2>

                    
                    <b>Profile</b>
                    <input type="file" name="photo" id="" required> <br> <br>

                    <b>First Name : </b>
                    <input type="string" name="fname" id="first_name" required> <br> <br>

                    <b>Middle Name : </b>
                    <input type="string" name="mname" id="middle_name" required> <br> <br>

                    <b>Last Name : </b>
                    <input type="string" name="lname" id="last_name" required> <br> <br>

                    <b>Designation : </b>
                    <input type="string" name="designation" id="designation" required> <br> <br>


                    <h2>Teaching Details</h2>

                    <b>Qualification : </b>
                    <textarea type="string" name="qualification" id="qualification" required> </textarea> <br> <br>

                    <b>Subject Taught : </b>
                    <textarea type="string" name="sub-taught" id="sub-taught" required> </textarea> <br> <br>

                    <div class="main-exp">
                        <div class="exp">
                            <b class="bold">Teaching Experience : </b>
                            <input type="number" name="Texp" id="Texp" required class="exp"> <br> <br>
                        </div>

                        <div class="exp">
                            <b class="bold">Industrial Experience : </b>
                            <input type="number" name="Iexp" id="Iexp" required class="exp"> <br> <br>
                        </div>
                    </div>
                    <b>Area of Interest : </b>
                    <textarea type="string" name="areaInt" id="areaInt" required> </textarea> <br> <br>

                    <h2>Papers Published : </h2>
                    <div class="main-paper">
                        <div class="paper">
                            <b>Nationaal :</b>
                            <input type="number" name="national" id="" required>
                        </div>

                        <div class="paper">
                            <b>International :</b>
                            <input type="number" name="international" id="" required> <br> <br>
                        </div>
                    </div>

                    <h2>Contact : </h2>
                    <div class="main-contact">
                        <div class="contact">
                            <b>Email :</b>
                            <span class="email_error" ></span>
                            <input type="email" name="email" id="email_id" class=""required>
                            <span id="cemsg"></span>

                            <input type="hidden" id="hidden1">
                            <input type="hidden" id="hidden2">
                        </div>


                        <div class="contact">
                            <b>Mobile Number :</b>
                            <input type="number" name="mob" id="mob" required> <br> <br>
                        </div>
                    </div>

                    <b>Password :</b>
                    <input type="string" name="password" id="password" class="passwrd" required> <br> <br>

                    <button type="submit" name="submit">Submit</button>


                </form>
            </div>
        </div>
    </div>
    
    
    <?php
    include ('footer.php');
    ?>

<script>
     var allowSubmit;
     var allowSubmit1;
        $(document).ready(function (){

            $("#email_id").keyup(function (e){
                var cemail = $("#email_id").val();
                // console.log(email); it check the if user enter email it print in console
                
                $.ajax({
                    type: "POST",
                    url: "email-check.php",
                    data: "pass=" + cemail,
                    dataType: 'text',
                    success: function (data) {
                        //alert(data);
                        if (data == 'Sucess') {
                            $("#cemsg").text("Old Password Match");
                            var allowSubmit = 1;
                            $('#hidden1').attr("value", "1");
                            
                        } else {
                            $("#omsg").text("Old Password NOT Match");
                            var allowSubmit = 2;
                            $('#hidden1').attr("value", "2");


                        }
                    }

                });
                
            });
        });


    </script>
</body>
</html>