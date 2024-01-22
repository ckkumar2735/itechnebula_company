<?php
include('db.php'); // Include your database connection file

$email_error = $password_error = ''; // Define variables to avoid "Undefined variable" warnings

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $email = isset($_POST['email']) ? $_POST['email'] : '';
    $password = isset($_POST['password']) ? $_POST['password'] : '';

    $query = "SELECT * FROM login_dashboard WHERE email = '$email' AND password = '$password'";
    $result = mysqli_query($con, $query);

    if ($result) {
        $row_count = mysqli_num_rows($result);

        if ($row_count > 0) {
            // Email and password match, redirect to the next page
            header('Location: dashboard.php');
            exit();
        } else {
            // Check which field is incorrect and set the error message accordingly
            $user_query = "SELECT * FROM login_dashboard WHERE email = '$email'";
            $user_result = mysqli_query($con, $user_query);

            if (mysqli_num_rows($user_result) > 0) {
                $password_error = 'Wrong password';
            } else {
                $email_error = 'Wrong email';
            }
        }
    } else {
        echo "Error: " . mysqli_error($con);
    }

    mysqli_close($con);
}
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <!-- <link rel="stylesheet" href="Responsive.css"> -->
    <link rel="stylesheet" href="Styles/Dashboard/login_Dashboard.css">
    <title>Log in form</title>
</head>

<body>

    <section>
        <div class="container gd-form-container">
        <!-- <div class="container "> -->

            <div class="myCard">
                <div class="row">

                        <div class="col-lg-7 col-md-6 ">
                            <div class="myLeftCtn">
                                <!-- <form class="myForm" action="login_Dashboard_submit.php" method="post"> PHP code for fetching data from database -->
                                <form class="myForm" action="login_Dashboard.php" method="post">

                                <div class="container">
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <img class="img-fluid gd-logo-img" src="./images/logo 2.png" alt="">
                                            <p class="gd-form-p mt-3">Welcome back Partner !!!</p>
                                            <h2 class="gd-form-h2">Log In</h2>
                                            <div class="form-group row">
                                                <label class="col-lg-2 col-md-4 col-sm-12   gd-label" for="emailInput">Email</label>
                                                <div class="col-lg-9 col-md-8 col-sm-12  ">
                                                    <input id="emailInput" type="email" name="email" class="form-control gd-input-form" placeholder="login@gmail.com">
                                                    <!-- Display email error message -->
                                                    <span style="color: red;"><?php echo $email_error; ?></span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group row mt-5 position-relative">
                                        <label class="col-lg-2 col-md-10 col-sm-12  " for="passwordInput">Password</label>
                                        <div class="col-lg-9 col-md-10 col-sm-12 ">
                                            <div class="input-group">
                                                <input id="passwordInput" type="password" name="password" class="form-control gd-input-form" placeholder="**************" aria-describedby="togglePassword">
                                                <button type="button" class="btn btn-outline-secondary gd-eye-btn toggle-password" id="togglePassword">
                                                    <i class="bi bi-eye"></i>
                                                </button>
                                            </div>
                                            <!-- Display password error message -->
                                            <span style="color: red;"><?php echo $password_error; ?></span>
                                        </div>
                                    </div>
                                    <div class="gd-login-btn mt-3">
                                        <div class="row gd-form-login-btn">
                                            <div class="col-lg-9  col-md-10 col-sm-12 ">
                                                <button type="submit" class="btn btn-primary">Login <i class="bi bi-arrow-right"></i></button>
                                                <p class="gd-f mt-3">or continue with</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row gd-form-para1">
                                        <div class="col-lg-9 col-md-10 col-sm-12">
                                            <p class=" mt-3">or continue with</p>
                                        </div>
                                    </div>
                                    <div class="mt-3 gd-social-btn col-md-11 ">
                                        <button type="button" class="btn btn-outline-primary"><img src="./images/Google.png" alt=""></button>
                                        <button type="button" class="btn btn-outline-primary"><img src="./images/Facebook.jpg" alt=""></button>

                                        <button type="button" class="btn btn-outline-primary"><img src="./images/Linked.png" alt=""></button>


                                    </div>
                                    <div class="mt-4 col-lg- col-md-9 col-sm-12 text-center ">
                                        <span class="gd-form-p3 ">Don’t have an account yet?</span>&nbsp;<span class="gd-form-span ">Mail at partner@itechnebula.com</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                    <div class="col-lg-5  gd-col2 ">
                        <div class="myRightCtn">
                            <div class="box">
                                <img class="gd_girl img-fluid" src="./images/Character-working-laptop-while-sitting-chair.jpg" style="width: 800px;" alt="">
                                <img class="cactus img-fluid" src="./images/cactus.png" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
        </div>
        </div>
    </section>












    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
        $(document).ready(function() {
            $(".toggle-password").click(function() {
                $(this).toggleClass("active");
                var input = $($(this).siblings("input"));
                if (input.attr("type") === "password") {
                    input.attr("type", "text");
                } else {
                    input.attr("type", "password");
                }
            });
        });
    </script>
    <script>
        const userInput = document.getElementById('userInput');

        userInput.addEventListener('input', function() {
            const inputText = userInput.value;
            userInput.style.color = inputText;
        });
    </script>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>

</html>