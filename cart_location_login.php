<?php

include('db.php');

$error = ''; // Initialize an error variable

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $email = isset($_POST['email']) ? trim($_POST['email']) : '';
    $password = isset($_POST['password']) ? trim($_POST['password']) : '';
    $rePassword = isset($_POST['password_repeat']) ? trim($_POST['password_repeat']) : '';

    // Validate email
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $error = "Invalid email format";
    }

    // Validate password
    elseif (strlen($password) < 8) {
        $error = "Password must be at least 8 characters long";
    }

    // Check if any field is empty
    elseif (empty($email) || empty($password) || empty($rePassword)) {
        // Handle the case where any field is empty, you can display an error message
        $error = "All fields are required!";
    } else {
        // Check if the passwords match
        if ($password !== $rePassword) {
            // Handle the case where passwords do not match, you can display an error message
            $error = "Passwords do not match!";
        } else {
            // All checks passed, proceed with database insertion
            $stmt = $con->prepare("INSERT INTO cart_location_login (email, password) VALUES (?, ?)");
            $stmt->bind_param('ss', $email, $password);

            if ($stmt->execute()) {
                // echo "inserted";
                header('Location: cart_location_shipping_address.php');
                exit; // Add exit to stop further execution
            } else {
                // Handle error if needed
                $error = "Error occurred while inserting into the database.";
            }

            $stmt->close();
        }
    }
}
?>




<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="stylesheet" type="text/css"
        href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">

    <link
        href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,300;1,400;1,700&family=Space+Grotesk:wght@300;400;500;600;700&display=swap"
        rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Mulish:ital,wght@0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;0,1000;1,200;1,400;1,600&family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,300;1,400;1,700&family=Space+Grotesk:wght@300;400;500;600;700&display=swap"
        rel="stylesheet">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=DM+Sans:opsz,wght@9..40,300&family=Libre+Bodoni:wght@500;600;700&family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,300;1,400;1,700&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="Styles/ck.css" />
    <link rel="stylesheet" href="style.css" />
    <link rel="stylesheet" href="/Styles/Cart/cart1.css">
    <link rel="stylesheet" href="/Styles/Cart/cart_location.css">
    <link rel="stylesheet" href="/Styles/Cart/cart_location_login.css">


    <title>Casestudies</title>
</head>

<body>

    <section>
        <div class="container">
            <div class="row d-flex justify-content-center">
                <div class="col-lg-11">
                    <div class="row d-flex justify-content-evenly">
                        <div class="col-lg-2 ck_cart_location_login_sec_left_hide">
                            <div class="ck_cart1_sec1">
                                <div class="d-flex flex-column align-items-center">
                                    <div class="d-flex icon-container ck_cart1_sec1_cart justify-content-center align-items-center "
                                        data-icon-type="cart">
                                        <i class="fas fa-shopping-cart fa-2x" style="color: #ffffff;"></i>
                                    </div>
                                    <div class="d-flex icon-container ck_cart1_sec1_location justify-content-center align-items-center active"
                                        data-icon-type="location">
                                        <i class="fas fa-location-dot fa-2x" style="color: #ffffff;"></i>
                                    </div>
                                    <div class="d-flex icon-container ck_cart1_sec1_arrow justify-content-center align-items-center"
                                        data-icon-type="arrow">
                                        <i class="fas fa-arrow-right-from-bracket fa-2x" style="color: #ffffff;"></i>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-10 mt-4">
                            <div class="row mt-5">
                                <div class="col-lg-10">
                                <form action="" method="post">
                                        <div class="cart_location_login_row1 mt-5" style="padding-top: 30px;">
                                        <?php if (!empty($error)) : ?>
                                <div class="alert alert-danger" role="alert">
                                    <?php echo $error; ?>
                                </div>
                            <?php endif; ?>
                                            <p class="ck_cart_location_login_text1">New Customer</p>
                                            <div class="mb-3">
                                                <label for="email" class="form-label ck_cart_location_login_text2">Email Address</label>
                                                <input type="text" class="form-control ck_cart_location_login_input1" id="email" name="email"
                                                    placeholder="Email Address" style="text-align: start;">
                                            </div>
                                            <div class="mb-3">
                                                <label for="password" class="form-label ck_cart_location_login_text3">Password</label>
                                                <input type="password" class="form-control ck_cart_location_login_input2" id="password"
                                                    name="password" placeholder="Password" style="text-align: start;">
                                            </div>
                                            <div class="mb-3">
                                                <label for="password_repeat" class="form-label ck_cart_location_login_text4">Re-Password</label>
                                                <input type="password" class="form-control ck_cart_location_login_input3" id="password_repeat"
                                                    name="password_repeat" placeholder="Re-Password" style="text-align: start;">
                                            </div>
                                            <div class="d-flex justify-content-evenly mt-5" style="gap: 10px;">
                                                <div class="ck_cart_location_login_backText_mobile_hide">
                                                    <p class="ck_cart_location_login_icon1">
                                                        <i class="fa-light fa-less-than fa-lg"></i> <a href="cart_location.php">Back to Сustomer Info</a>
                                                    </p>
                                                </div>
                                                <div class="">
                                                    <p class="ck_cart_location_login_backText_TabDesktop_hide mt-2">
                                                        <i class="fa-light fa-less-than fa-lg"></i> <a href="cart_location.php">Back</a>
                                                    </p>
                                                </div>
                                                <div>
                                                    <button class=" ck_cart_location_login_button1" type="submit">Continue</button>
                                                </div>
                                            </div>

                                           
                                        </div>
                                    </form>
                                    
                                </div>
                            </div>


                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Dynamic Content Container -->
    <div id="content-container"></div>

    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
        crossorigin="anonymous"></script>

        
        

    <section>
        <p class="text-center ck_cart1_text9 mt-5">Copyright © 2023 CODEDELHIITES TECH PVT LTD</p>
    </section>

</body>

</html>