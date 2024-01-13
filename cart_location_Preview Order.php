<?php
// Start the session
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
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">

    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,300;1,400;1,700&family=Space+Grotesk:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Mulish:ital,wght@0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;0,1000;1,200;1,400;1,600&family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,300;1,400;1,700&family=Space+Grotesk:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="Styles/ck.css" />
    <link rel="stylesheet" href="style.css" />
    <link rel="stylesheet" href="/Styles/Cart/cart1.css">
    <link rel="stylesheet" href="/Styles/Cart/cart_location.css">
    <link rel="stylesheet" href="/Styles/Cart/cart_location_login.css">
    <link rel="stylesheet" href="/Styles/Cart/cart_location_shipping_address.css">
    <link rel="stylesheet" href="/Styles/Cart/cart_location_Preview Order.css">



    <title>Casestudies</title>
</head>

<body>

    <section>
        <div class="container">
            <div class="row d-flex justify-content-center">
                <div class="col-md-11">
                    <div class="row d-flex justify-content-evenly">
                        <div class="col-md-2 ck_cart_location_preview_hide">
                            <div class="ck_cart1_sec1">
                                <div class="d-flex flex-column align-items-center">
                                    <div class="d-flex icon-container ck_cart1_sec1_cart justify-content-center align-items-center " data-icon-type="cart">
                                        <i class="fas fa-shopping-cart fa-2x" style="color: #ffffff;"></i>
                                    </div>
                                    <div class="d-flex icon-container ck_cart1_sec1_location justify-content-center align-items-center active" data-icon-type="location">
                                        <i class="fas fa-location-dot fa-2x" style="color: #ffffff;"></i>
                                    </div>
                                    <div class="d-flex icon-container ck_cart1_sec1_arrow justify-content-center align-items-center" data-icon-type="arrow">
                                        <i class="fas fa-arrow-right-from-bracket fa-2x" style="color: #ffffff;"></i>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-10 mt-4">
                            <div class="row mt-5 d-flex justify-content-evenly">
                                <div class="col-md-10">
                                    <h1 class="ck_preview text-center">Preview Order</h1>
                                    <div class="row">
                                        <div class="cart_location_Preview_order_row1 mt-4">
                                            <div class="d-flex justify-content-between">
                                                <div class="">
                                                    <h2>Shipping Address</h2>
                                                </div>
                                                <div class="">
                                                    <h2 class="cart_location_Preview_order_row1_color"><a href="cart_location_shipping_address.php">Change
                                                            <i class="fa-solid fa-greater-than fa-sm mt-1"></i> </a> </h2>
                                                </div>
                                            </div>

                                            <?php
                                            // Display the stored session data
                                            echo "<p> 
                                            " . $_SESSION["First_Name"] . "  
                                            " . $_SESSION["Last_Name"] . "<br/>
                                            " . $_SESSION["Country"] . " <br/>
                                            " . $_SESSION["street_address"] . " <br/>
                                            " . $_SESSION["City"] . "<br/>
                                            " . $_SESSION["State"] . "<br/>
                                            " . $_SESSION["Zip_Code"] . "<br/>
                                            " . $_SESSION["Phone_Number"] . " <br/>
        
                                            </p>";



                                            // Display additional addresses
                                            if (!empty($_SESSION["Add_Line_Address"])) {
                                                echo "<p>Additional Addresses:</p>";
                                                foreach ($_SESSION["Add_Line_Address"] as $address) {
                                                    echo "<p>" . $address . "</p>";
                                                }
                                            }
                                            ?>


                                        </div>
                                    </div>



                                </div>
                            </div>

                            <div class="row mt-5 d-flex justify-content-evenly">
                                <div class="col-md-10">

                                    <div class="row">
                                        <div class="cart_location_Preview_order_row2 mt-4">
                                            <div class="d-flex justify-content-between">
                                                <div class="">
                                                    <h2>Billing Address</h2>
                                                </div>
                                                <div class="">
                                                    <h2 class="cart_location_Preview_order_row1_color"><a href="cart_location_billing_address.php">Change
                                                            <i class="fa-solid fa-greater-than fa-sm mt-1"></i> </a> </h2>
                                                </div>
                                            </div>

                                            <?php
                                            // Display the stored session data
                                            echo "<p> 
                                            " . $_SESSION["First_Name"] . "  
                                            " . $_SESSION["Last_Name"] . "<br/>
                                            " . $_SESSION["Country"] . " <br/>
                                            " . $_SESSION["street_address"] . " <br/>
                                            " . $_SESSION["City"] . "<br/>
                                            " . $_SESSION["State"] . "<br/>
                                            " . $_SESSION["Zip_Code"] . "<br/>
                                            " . $_SESSION["Phone_Number"] . " <br/>
        
                                            </p>";



                                            // Display additional addresses
                                            if (!empty($_SESSION["Add_Line_Address"])) {
                                                echo "<p>Additional Addresses:</p>";
                                                foreach ($_SESSION["Add_Line_Address"] as $address) {
                                                    echo "<p>" . $address . "</p>";
                                                }
                                            }
                                            ?>


                                        </div>
                                    </div>



                                </div>
                            </div>

                            <div class="row">
                                <div class="">
                                    <div class="d-flex justify-content-center mt-5">
                                  <a href="https://www.instamojo.com/@itechnebula/"> <button type="submit" class="cart_location_Preview_order_button">Continue</button></a> 

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

    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>



    <section>
        <p class="text-center ck_cart1_text9 mt-5">Copyright © 2023 CODEDELHIITES TECH PVT LTD</p>
    </section>

</body>

</html>