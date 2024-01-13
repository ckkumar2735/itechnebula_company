
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
    <link
        href="https://fonts.googleapis.com/css2?family=DM+Sans:opsz,wght@9..40,300&family=Libre+Bodoni:wght@500;600;700&family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,300;1,400;1,700&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="Styles/ck.css" />
    <link rel="stylesheet" href="style.css" />
    <link rel="stylesheet" href="/Styles/Cart/cart1.css">
    <link rel="stylesheet" href="/Styles/Cart/cart_location.css">
    <link rel="stylesheet" href="/Styles/Cart/cart_location_login.css">
    <link rel="stylesheet" href="/Styles/Cart/cart_location_shipping_address.css">


    <title>Casestudies</title>
</head>

<body>

    <section>
        <div class="container">
            <div class="row d-flex justify-content-center">
                <div class="col-lg-11">
                    <div class="row d-flex justify-content-evenly">
                        <div class="col-lg-2 ck_cart_location_shipping_address_sec1_hide">
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

                        <div class="col-lg-10 ">
                            <div class="row mt-5 d-flex justify-content-evenly">
                                <div class="col-lg-10">
                                    <div class="cart_location_shipping_address_row1 mt-4">
                                        <!-- <form id="shipping_order" method="post"
                                            action="cart_location_shipping_submit.php"  > -->
                                        <form id="shipping_order" method="post"
                                            action="cart_location_shipping_submit.php" onsubmit="return validateForm()">

                                            <p class="ck_location_shipping_address_text1 "><h3>2. Shiping Address</h3></p>
                                            <?php
                                        // Display error message if there is any
                                       
                                        $errorMsg = isset($_SESSION["error"]) ? $_SESSION["error"] : "";
                                        unset($_SESSION["error"]); // Clear the error message

                                        if (!empty($errorMsg)) {
                                            echo '<div class="alert alert-danger" role="alert">' . $errorMsg . '</div>';
                                        }
                                        ?>
                                            <div class="row ">
                                                <div class="col-lg-6 flex-column">
                                                    <div><label class="ck_location_shipping_address_text2">First
                                                            Name</label></div>
                                                    <div class=""><input type="text" placeholder="First Name"
                                                            style="text-align: start;" name="First_Name"
                                                            class="ck_location_shipping_address_input1"></div>
                                                </div>
                                                <div class="col-lg-6 flex-column">
                                                    <div><label class="ck_location_shipping_address_text3">Last
                                                            Name</label></div>
                                                    <div><input type="text" placeholder="Last Name"
                                                            style="text-align: start;" name="Last_Name"
                                                            class="ck_location_shipping_address_input2"></div>

                                                </div>
                                            </div>

                                            <div class="row">
                                                <div class="">
                                                    <div><label for="Country"
                                                            class="ck_location_shipping_address_text4">Country</label>
                                                    </div>
                                                    <!-- <div class=""><input type="dropdown" placeholder="Country" ></div>   -->
                                                    <input list="Countries" id="Country" name="Country"
                                                        placeholder="Country"
                                                        class="ck_location_shipping_address_input3">
                                                    <datalist id="Countries">
                                                        <option value="India">

                                                            <!-- <option value=" ">
                                                        <option value="Orange">
                                                        <option value="Mango"> -->
                                                    </datalist>
                                                </div>

                                            </div>
                                            <div class="row">
                                                <div class="">
                                                    <div><label for="Street Address"
                                                            class="ck_location_shipping_address_text5">Street
                                                            Address</label></div>
                                                    <div class=""><input type="text" placeholder="Street Address"
                                                            name="street_address"
                                                            class="ck_location_shipping_address_input4"></div>

                                                </div>

                                            </div>

                                            <div class="row">
                                                <p class="ck_location_shipping_address_text6" onclick="addInputField()">
                                                    + Add Line</p>
                                                <div class="add-line-container">
                                                    <!-- Initially, show one input field -->
                                                    <div>
                                                        <!-- <input type="text" placeholder="Street Address"
                                                        class="ck_location_shipping_address_input4"> -->
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="row">
                                                <div class="ck_location_shipping_address_text7"><label>City</label>
                                                </div>
                                                <div class=""><input type="text" placeholder="City" name="City"
                                                        class="ck_location_shipping_address_input5"></div>

                                            </div>


                                            <div class="row ">
                                                <div class="col-lg-6 flex-column">
                                                    <div><label class="ck_location_shipping_address_text8">State</label>
                                                    </div>
                                                    <div><input type="text" placeholder="State" name="State"
                                                            style="text-align: start;"
                                                            class="ck_location_shipping_address_input6"></div>
                                                </div>
                                                <div class="col-lg-6 flex-column">
                                                    <div><label class="ck_location_shipping_address_text9">Zip
                                                            Code</label></div>
                                                    <div><input type="text" placeholder="Zip Code" name="Zip_Code"
                                                            style="text-align: start;"
                                                            class="ck_location_shipping_address_input7"></div>

                                                </div>
                                            </div>

                                            <div class="row">
                                                <div class=""><label class="ck_location_shipping_address_text10">Phone
                                                        Number</label> </div>
                                                <div class=""><input type="number" placeholder="Phone_Number"
                                                        name="Phone Number" class="ck_location_shipping_address_input8">
                                                </div>

                                            </div>

                                            <div class="row">
                                                <div class="d-flex mt-3" style="gap: 20px;">
                                                    <div><input type="checkbox" id="myCheckbox" name="myCheckbox"></div>
                                                    <div>
                                                        <p class="ck_location_shipping_address_text11">Save this
                                                            informations for a future fast checkout</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class=" d-flex justify-content-end">
                                                <div class="mx-auto">
                                                    <button
                                                        class="ck_location_shipping_address_button1">Continue</button>

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
        </div>
    </section>

    <!-- Dynamic Content Container -->
    <div id="content-container"></div>

    <script>
        function addInputField() {
            const addLineContainer = document.querySelector('.add-line-container');
            const newInputField = document.createElement('div');
            newInputField.innerHTML = `<div><input type="text" name="Add_Line_Address" placeholder=" Add Address "
                                class="ck_location_shipping_address_input4"></div>`;
            addLineContainer.appendChild(newInputField);
        }
    </script>





    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
        crossorigin="anonymous"></script>



    <section>
        <p class="text-center ck_cart1_text9 mt-5">Copyright © 2023 CODEDELHIITES TECH PVT LTD</p>
    </section>

</body>

</html>