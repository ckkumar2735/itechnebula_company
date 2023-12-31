<?php
// Include your database connection file
include('db.php');

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Check if the keys exist in the $_POST array
    $packageName = isset($_POST['package_name']) ? $_POST['package_name'] : '';
    $packagePrice = isset($_POST['packageprice']) ? (float)$_POST['packageprice'] : 0;
    $months = isset($_POST['months']) ? (int)$_POST['months'] : 0;
    $subtotal = isset($_POST['subtotal']) ? (float)$_POST['subtotal'] : 0;
    // $promoCode = isset($_POST['promoCode']) ? $_POST['promoCode'] : '';

    // Use prepared statements to prevent SQL injection
    $stmt = $con->prepare("INSERT INTO cart_main (package_name, package_price, months, subtotal) VALUES (?, ?, ?, ?)");
    $stmt->bind_param('sdii', $packageName, $packagePrice, $months, $subtotal);

    // Execute the prepared statement
    if ($stmt->execute()) {
        // echo "Package information saved successfully";
    } else {
        // echo "Error: " . $stmt->error;
    }

    // Close the prepared statement
    $stmt->close();
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

    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">

    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,300;1,400;1,700&family=Space+Grotesk:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Mulish:ital,wght@0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;0,1000;1,200;1,400;1,600&family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,300;1,400;1,700&family=Space+Grotesk:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="Styles/ck.css" />
    <link rel="stylesheet" href="style.css" />
    <link rel="stylesheet" href="/Styles/Cart/cart1.css">

    <title>Casestudies</title>
</head>

<body>
    <section>
        <div class="container-fluid">
            <div class="row d-flex justify-content-center">
                <div class="col-md-10">
                    <div class="row">
                        <div class="col-md-2">
                            <div class="ck_cart1_sec1">
                                <div class="d-flex flex-column align-items-center">
                                    <div class="d-flex icon-container ck_cart1_sec1_cart justify-content-center align-items-center active" data-icon-type="cart">
                                        <i class="fas fa-shopping-cart fa-2x" style="color: #ffffff;"></i>
                                    </div>
                                    <div class="d-flex icon-container ck_cart1_sec1_location justify-content-center align-items-center" data-icon-type="location">
                                        <i class="fas fa-location-dot fa-2x" style="color: #ffffff;"></i>
                                    </div>
                                    <div class="d-flex icon-container ck_cart1_sec1_arrow justify-content-center align-items-center" data-icon-type="arrow">
                                        <i class="fas fa-arrow-right-from-bracket fa-2x" style="color: #ffffff;"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-7">
                            <div class="">
                                <div class="d-flex justify-content-between ck_cart1_text3 ">
                                    <div class="ck_cart1_text10">
                                        <h2><u>CART</u></h2>
                                    </div>
                                    <div class="ck_cart1_text10">
                                        <h2><u>Duration</u></h2>
                                    </div>
                                </div>
                                <div class="  ck_cart1_bg1 ">
                                    <div class="d-flex  justify-content-between" style="margin: 50px;" id="noobPackage">
                                        <div class="mt-5">
                                            <input type="radio" name="selectedPackage" class="ck_cart1_package_radio" data-package-price="49999" data-months="3" checked>
                                        </div>
                                        <div class="mt-4"><img src="/Assets/cart-1.png"></div>
                                        <div class="mt-4">
                                            <p class="ck_cart1_text4" name="package_name" id="packageNameNoob"> Noob package</p>
                                            <p id="packagePriceNoob"> 49,999/-M</p>
                                        </div>
                                        <div class="">
                                            <p class="ck_cart1_text5 mx-4">Month</p>
                                            <div class="d-flex justify-content-evenly " style="gap: 5px;">
                                                <div class="ck_cart_minus">-</div>
                                                <div class=""><input type="text" class="ck_cart1_input1 text-center" id="monthsNoob" value="1" readonly data-package-price="49999"></div>
                                                <div class="ck_cart_plus">+</div>
                                            </div>
                                        </div>
                                        <div class="mt-5">
                                            <i class="fa-solid fa-xmark fa-xl deletePackage"></i>
                                        </div>
                                    </div>
                                    <div class="d-flex  justify-content-between" style="margin: 50px;" id="midPackage">
                                        <div class="mt-5">
                                            <input type="radio" name="selectedPackage" class="ck_cart1_package_radio" data-package-price="89999" data-months="3">
                                        </div>
                                        <div class="mt-2"><img src="/Assets/cart-2.png"></div>
                                        <div class="mt-2">
                                            <p class="ck_cart1_text4" id="packageNameMid">MID package</p>
                                            <p id="packagePriceMid"> 89,999/-M</p>
                                        </div>
                                        <div class="mt-3">
                                            <div class="d-flex justify-content-evenly " style="gap: 5px;">
                                                <div class="ck_cart_minus">-</div>
                                                <div class=""><input type="text" class="ck_cart1_input1 text-center" id="monthsMid" value="1" readonly data-package-price="89999"></div>
                                                <div class="ck_cart_plus">+</div>
                                            </div>
                                        </div>
                                        <div class="mt-4">
                                            <i class="fa-solid fa-xmark fa-xl"></i>
                                        </div>
                                    </div>
                                    <div class="d-flex  justify-content-between" style="margin: 50px;" id="proPackage">
                                        <div class="mt-5">
                                            <input type="radio" name="selectedPackage" class="ck_cart1_package_radio" data-package-price="149999" data-months="3">
                                        </div>
                                        <div class="mt-2"><img src="/Assets/cart-3.png"></div>
                                        <div class="mt-2">
                                            <p class="ck_cart1_text4" id="packageNamePro"> PRO package</p>
                                            <p id="packagePricePro"> 1,49999/-M</p>
                                        </div>
                                        <div class="mt-3">
                                            <div class="d-flex justify-content-evenly " style="gap: 5px;">
                                                <div class="ck_cart_minus">-</div>
                                                <div class=""><input type="text" class="ck_cart1_input1 text-center" id="monthsPro" value="1" readonly data-package-price="149999"></div>
                                                <div class="ck_cart_plus">+</div>
                                            </div>
                                        </div>
                                        <div class="mt-4">
                                            <i class="fa-solid fa-xmark fa-xl"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="d-flex justify-content-center ">
                                <i class="far fa-user fa-2xl  ck_cart1_icon1" style="width: 51px; height: 48px;"></i>
                            </div>
                            <div class="ck_cart1_bg2 ">
                                <p class="text-center ck_cart1_text6 ">Your Subtotal</p>
                                <form id="orderForm" method="post" action="cart1_order.php">
                                    <div id="packageDetails" class="mx-2">
                                        <input type="hidden" id="subtotalInput" name="subtotal" value="">
                                        <input type="hidden" id="selectedPackagePrice" name="selectedPackagePrice" value="">
                                        <input type="hidden" id="selectedQuantity" name="selectedQuantity" value="">
                                        <input type="hidden" id="selectedPackageName" name="selectedPackageName" value="">
                                        <div class="d-flex justify-content-center">
                                            <div class="ck_cart1_text7">Subtotal: </div>
                                            <div>
                                                <p class="ck_cart1_text11"></p>
                                            </div>
                                        </div>
                                        <!-- <div class="d-flex">
                                            <div class="ck_cart1_text_71" name="package_name">Package Name: </div>
                                            <div><span class="ck_cart1_text_71_1" id="selectedPackageName"></span></div>
                                        </div>
                                        <div class="d-flex">
                                            <div class="ck_cart1_text_72">Package Price: ₹</div>
                                            <div><span class="ck_cart1_text_72_1" id="selectedPackagePrice"></span></div>
                                        </div>
                                        <div class="d-flex">
                                            <div class="ck_cart1_text_73">Month: </div>
                                            <div><span class="ck_cart1_text_73_1" id="selectedQuantity"></span></div>
                                        </div> -->
                                    </div>
                                    <div class="row d-flex justify-content-center">
                                        <div class="col-md-10">
                                            <button type="submit" class="ck_cart1_button1" id="confirmOrderBtn">Confirm Order</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                            <div class="ck_cart1_bg3  ">
                                <div>
                                    <p class="ck_cart1_text8 ">Promo Code</p>
                                </div>
                                <div>
                                    <input type="text" id="promoCode" name="promoCode" placeholder="Enter promo code" class="ck_cart1_input2 text-center " readonly>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <script>
       document.addEventListener("DOMContentLoaded", function() {
    var buttons = document.querySelectorAll('.ck_cart_plus, .ck_cart_minus');
    var deleteButtons = document.querySelectorAll('.fa-xmark');
    var packageRadios = document.querySelectorAll('.ck_cart1_package_radio');
    var quantityInputs = document.querySelectorAll('.ck_cart1_input1');

    buttons.forEach(function(button) {
        button.addEventListener('click', function() {
            var currentPackage = document.querySelector('input[name="selectedPackage"]:checked');
            var quantityInput = currentPackage.closest('.d-flex.justify-content-between').querySelector('.ck_cart1_input1');
            var currentValue = parseInt(quantityInput.value, 10);
            var increment = this.classList.contains('ck_cart_plus') ? 2 : -3;
            var newValue = Math.min(Math.max(currentValue + increment, 1), 24);
            quantityInput.value = newValue;
            updateSubtotal();
        });
    });

    deleteButtons.forEach(function(button) {
        button.addEventListener('click', function() {
            var row = this.closest('.d-flex.justify-content-between');
            row.remove();
            updateSubtotal();
        });
    });

    function updateSubtotal() {
        var total = 0;
        var selectedPackage = document.querySelector('input[name="selectedPackage"]:checked');

        if (selectedPackage) {
            var packageName = selectedPackage.closest('.d-flex.justify-content-between').querySelector('.ck_cart1_text4').textContent;
            var packagePrice = parseInt(selectedPackage.dataset.packagePrice) || 0;
            var quantityInput = selectedPackage.closest('.d-flex.justify-content-between').querySelector('.ck_cart1_input1');
            var quantity = parseInt(quantityInput.value) || 1;

            total = (packagePrice / quantity);

            var promoCode = document.getElementById('promoCode').value;
            if (promoCode && promoCode.toUpperCase() === 'MAKAR20') {
                total *= 0.8;
            }

            total = Math.round(total);

            document.getElementById('selectedPackageName').textContent = packageName;
            document.getElementById('selectedPackagePrice').textContent = '₹' + packagePrice;
            document.getElementById('selectedQuantity').textContent = quantity;

            document.getElementById('selectedPackageName').value = packageName;
            document.getElementById('selectedPackagePrice').value = packagePrice;
            document.getElementById('selectedQuantity').value = quantity;

            // Display details in HTML
            document.querySelector('.ck_cart1_text11').textContent = '₹' + total + '/M';

            document.getElementById('subtotalInput').value = total;
        }
    }

    document.getElementById('confirmOrderBtn').addEventListener('click', function(event) {
        event.preventDefault(); // Prevent the default form submission

        updateSubtotal();
        document.getElementById('orderForm').submit();

        // window.location.href = 'cart_location.html';
// window.location.href='cart_location.html';
        // Now, you can manually submit the form
        // document.getElementById('orderForm').submit();
        document.getElementById('orderForm').submit();

    });

    packageRadios.forEach(function(radio) {
        radio.addEventListener('change', function() {
            updateSubtotal();
        });
    });

    document.getElementById('promoCode').addEventListener('input', function() {
        updateSubtotal();
    });

    // Trigger the updateSubtotal function when the page loads
    updateSubtotal();
});

    </script>


    <section>
        <p class="text-center ck_cart1_text9 mt-5">Copyright © 2023 CODEDELHIITES TECH PVT LTD</p>
    </section>

    <!-- promo code -->
    <script>
        const urlParams = new URLSearchParams(window.location.search);
        const promoCode = urlParams.get('promo');

        if (promoCode) {
            document.getElementById('promoCode').value = promoCode;
        }
    </script>

    <!-- promo code End -->

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>

</html>