<?php
session_start();
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
<link href="https://fonts.googleapis.com/css2?family=DM+Sans:opsz,wght@9..40,300&family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,300;1,400;1,700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="Styles/ck.css" />
    <link rel="stylesheet" href="style.css" />
    <link rel="stylesheet" href="/Styles/Cart/cart1.css">
    <link rel="stylesheet" href="/Styles/Cart/cart_location.css">


    <title></title>
</head>

<body>

    <section>
        <div class="container">
            <div class="row d-flex justify-content-center">
                <div class="col-md-11">
                    <div class="row d-flex justify-content-evenly">
                        <div class="col-md-2 ck_cart_location_left">
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

                        <div class="col-md-10 mt-1">
                            <div class="row mt-4">
                                <div class="col-md-10">
                                    <div class="cart_location_row1 mt-5">
                                        <p class="ck_cart1_sec1_location_text1">1. Contact Information</p>
                                        <label class="ck_cart1_sec1_location_text2">Email Address</label>
                                        <div class="row">
                                            <div class="">
                                                <form>
                                                    <input type="text" placeholder="Email Address"
                                                        style="text-align: start;" class="ck_cart1_sec1_location_input1" readonly>
                                                </form>
                                            </div>

                                        </div>
                                        <div class="d-flex" style="gap: 10px;">
                                            <div class="">
                                                 <p class="ck_cart1_sec1_location_text3">Already have an account? </p>
                                            </div>
                                            <div class="">
                                                <a href="cart_location_login.php"><span class="ck_cart1_sec1_location_text4">Login</span></a>

                                            </div>
                                        </div>
                                       
                                    <div class=" d-flex justify-content-end">
                                        <button class="ck_cart1_sec1_location_btn1" id="confirmBtn" >Confirm Order</button>
                                    </div>
                                    </div>
                                </div>
                            </div>

                            <div class="row mt-3">
                                <div class="col-md-10">
                                    <div class="cart_location_row2">
                                        <div class="d-flex justify-content-between">
                                            <div class=""><p class="ck_cart1_sec1_location_text5">2. Shipping Address</p></div>
                                            <div class="ck_cart1_sec1_location_text6"><a href="cart_location_shipping_address.php">     Change <i class="fa-sharp fa-light fa-greater-than fa-lg"></i> </a></div>
                                        </div>

                                    </div>
                                    </div>
                              
                            </div>

                            <div class="row mt-3">
                                <div class="col-md-10">
                                    <div class="cart_location_row3">
                                        <div class="">
                                            <p class="ck_cart1_sec1_location_text7">3. Payment Method</p>
                                        </div>

                                    </div>
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

    <script>
      document.addEventListener("DOMContentLoaded", function() {
    // Check if the email is set in the session
    let email = "<?php echo isset($_SESSION['email']) ? $_SESSION['email'] : ''; ?>";

    // If email is set, auto-fill the input field
    if (email) {
        document.querySelector('.ck_cart1_sec1_location_input1').value = email;
    }

    // Add an event listener to the Confirm Order button
    document.querySelector('#confirmBtn').addEventListener('click', function () {
        // Check if the input field is blank
        let inputField = document.querySelector('.ck_cart1_sec1_location_input1');
        if (inputField.value.trim() === "") {
            // If the input field is blank, you can prevent the default action (here, redirection)
            // and display an alert or perform any other action as needed.
            alert("Please Login");
        } else {
            // If the input field is not blank, proceed with the redirection
            window.location.href = 'cart_location_shipping_address.php';
        }
    });
});

        </script>
        

    <!-- <script>
        document.querySelector('#confirmBtn').addEventListener('click', function () {
                window.location.href = 'cart_location_shipping_address.html';
            });
    </script> -->

    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
        crossorigin="anonymous"></script>



    <section>
        <p class="text-center ck_cart1_text9 mt-5">Copyright © 2023 CODEDELHIITES TECH PVT LTD</p>
    </section>

</body>

</html>