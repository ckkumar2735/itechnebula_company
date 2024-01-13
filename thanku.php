<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

session_start();
$server_name = "localhost";
$username = "root";
$password = "";
$db = "itechnebula";
$conn = new mysqli($server_name, $username, $password, $db);

if ($conn->connect_error) {
    die("connection failed" . $conn->connect_error);
} else {
    echo "connected successfully";
}

// Check if 'orderNumber' is set in the $_POST array
if (isset($_POST['orderNumber'])) {
    // Use mysqli_real_escape_string to prevent SQL injection
    $orderNumber = mysqli_real_escape_string($conn, $_POST['orderNumber']);
    $city = $_SESSION['city'];
    $name = $_SESSION['name'];
    $email = $_SESSION['email'];
    $phone = $_SESSION['phone'];
    $coupon_code = isset($_POST['coupon_code']) ? mysqli_real_escape_string($conn, $_POST['coupon_code']) : '';

    // Insert data into the 'offers' table
    $sql = "INSERT INTO offers(orderNumber, city, name, email, phone,coupon_code) VALUES ('$orderNumber', '$city', '$name', '$email', '$phone','$coupon_code')";
    $result = mysqli_query($conn, $sql);

    if ($result) {
        echo "insert data successfully";
    } else {
        echo "insert data not successful: " . mysqli_error($conn);
    }

    echo "Order Number: $orderNumber<br>";
    echo "City: $city<br>";
    echo "Name: $name<br>";
    echo "Email: $email<br>";
    echo "Phone: $phone<br>";
    echo "coupon_code: $coupon_code<br>";
} else {
    echo "Error: 'orderNumber' not set in the POST data.";
}

$conn->close();
?>












<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css">




    <!-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css"> -->

    <!-- -----------------------------------google font---------------- -->
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <!-- <link href="https://fonts.googleapis.com/css2?family=DM+Sans:opsz,wght@9..40,500&family=Lato&display=swap" rel="stylesheet"> -->

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <!-- <link href="https://fonts.googleapis.com/css2?family=DM+Sans:opsz,wght@9..40,500&family=Lato&family=Space+Grotesk:wght@400;500;600;700&display=swap" rel="stylesheet"> -->
    <!-- <link rel="stylesheet" href="style.css"> -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
    <script src="script.js" defer></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=DM+Sans:ital,opsz,wght@0,9..40,100;0,9..40,200;0,9..40,300;0,9..40,400;0,9..40,500;0,9..40,600;0,9..40,700;0,9..40,800;0,9..40,900;0,9..40,1000;1,9..40,200;1,9..40,300;1,9..40,400;1,9..40,500;1,9..40,600;1,9..40,700;1,9..40,800;1,9..40,900;1,9..40,1000&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans|Varela+Round">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Space+Grotesk:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <!-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css"> -->
    <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"> -->

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Lato:ital,wght@0,100;0,300;0,400;0,700;0,900;1,100;1,300;1,400;1,700;1,900&family=Space+Grotesk:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <!-- <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script> -->
    <!-- <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script> -->
    <!-- <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script> -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/canvas-confetti@1.3.1/dist/canvas-confetti.min.js"></script>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>


    <!-- -------------css----------- -->
    <!-- <link rel="stylesheet" href="style.css" /> -->
    <link rel="stylesheet" href="Styles/thanku.css" />

    <!-- ----------------------------- -->
    <title>Wlcm ITB</title>

    <!-- <style>
        canvas {
            position: absolute;
            top: 0;
            left: 0;
            z-index: 10;
        }
    </style> -->

</head>

<body>




    <section class="ck_768">
        <div class="container-fluid">
            <div class="d-flex justify-content-center align-items-center ck_767">
                <div class="">
                    <div class="">
                        <div class="card mb-3 ck_765" style="max-width: 900px;">
                            <div class="row g-0">
                                <div class="col-md-3 d-flex align-items-center">
                                    <img src="Assets/Images/cone1.png" class="img-fluid rounded-start" alt="...">
                                </div>
                                <div class="col-md-9">
                                    <div class="card-body">
                                        <!-- <p class="card-text ck_766"> -->
                                        <p class="card-text ck_766" id="orderNumber" name="orderNumber"></p>
                                        <p class="card-text ck_766" id="coupon_code" name="coupon_code" style="display: none;">
                                            <input type="text" id="coupon_code_input" name="coupon_code" value="HOLI20" />
                                        </p>
                                        <p class="card-text ck_766">Discount Code: MAKAR_SANKRANTI20 </p>

                                        <p class="card-text ck_766">Applied: Up to 20% Off</p>
                                        <!-- </p> -->
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row d-flex justify-content-end align-items-end">
                            <div class="col-md-3">
                                <img src="Assets/Images/hand2.png" class="img-fluid" alt="...">
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </section>


    <section class="ck_769" style="display: none;">
        <div class="container-fluid">
            <div class="d-flex justify-content-center align-items-center ck_767">
                <div class="">
                    <div class="">
                        <div class="card mb-3 ck_765" style="max-width: 900px;">
                            <div class="row g-0">
                                <div class="col-md-3 d-flex align-items-center">
                                    <img src="Assets/Images/cone2.png" class="img-fluid rounded-start" alt="...">
                                </div>
                                <div class="col-md-9">
                                    <div class="card-body">
                                        <p class="card-text ck_766"> Need help or have questions about your order? Our cheerful customer support team is here to assist. Simply reply to this email or contact us at contact@itechnebula.com/+91-6205104602.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row d-flex justify-content-end align-items-end">
                            <div class="col-md-3">
                                <img src="Assets/Images/hand2.png" class="img-fluid" alt="...">
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </section>

    <section class="ck_770" style="display: none;">
        <div class="wrapper">
            <!-- Confetti elements will be dynamically generated here -->

            <div class="container-fluid">
                <div class="d-flex justify-content-center align-items-center ck_767">

                    <!-- <form method="post" action="" enctype="multipart/form-data"> -->
                    <form method="post" action="" enctype="multipart/form-data" id="cartForm">



                        <div class="">

                            <div class="">

                                <div class="card mb-3 ck_765" style="max-width: 900px;">
                                <!-- <canvas class="can-rj" id="my-canvas"></canvas> -->

                                    <div class="row g-0">

                                        <div class="col-md-3 d-flex align-items-center">

                                            <img src="Assets/Images/cone3.png" class="img-fluid rounded-start mt-5" alt="...">

                                          

                                            <!--  -->

                                            <!-- <canvas id="canvas"></canvas> -->
                                            <!--  -->
                                        </div>
                                        <div class="col-md-9">
                                            <div class="card-body">
                                                <p class="card-text ck_768 align-items-center text-center"> Lets grow
                                                    together your business Digitally in 2023</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="d-flex justify-content-between ">
                                    <div class="row  ">
                                        <div class="col-md-6">
                                            <!-- <a class="ck_771" name="submit3" href="/index.html"> Go to Home</a> -->
                                            <button type="submit" name="submit3" id="addToCartBtn" class="ck_771">Add to Cart</button>

                                        </div>
                                    </div>

                                    <!-- <div class="row ">
                                        <div class="col-md-6 ">
                                            <button type="submit" name="submit3" class="ck_771" href="/index.html">Add to Cart</button>

                                        </div>
                                    </div> -->


                                    <div class="row ">
                                        <div class="col-md-6 ">
                                            <img src="Assets/Images/hand2.png" class="img-fluid" alt="...">
                                        </div>
                                    </div>
                                </div>




                            </div>
                        </div>
                    </form>
                </div>


            </div>

        </div>
    </section>

    <script>
        document.addEventListener("DOMContentLoaded", function() {
            function switchSections(current, next) {
                document.querySelector(current).style.display = "none";
                document.querySelector(next).style.display = "block";
            }

            function loopSections() {
                setTimeout(function() {
                    switchSections(".ck_768", ".ck_769");

                    setTimeout(function() {
                        switchSections(".ck_769", ".ck_770");
                        // The loop will stop at ck_770
                    }, 2000);
                }, 2000);
            }



            loopSections(); // Start the loop
        });
    </script>

    <script>
        function generateRandomNumber() {
            return Math.floor(10000 + Math.random() * 90000);
        }

        function generateOrderNumber() {
            const randomDigits = generateRandomNumber();
            const orderNumber = "itech" + randomDigits;

            document.getElementById("orderNumber").textContent = orderNumber;

            const couponCodeInput = document.getElementById("coupon_code_input");
            const couponCode = couponCodeInput.value.trim();

            $.ajax({
                type: 'POST',
                url: 'thanku.php',
                data: {
                    orderNumber: orderNumber,
                    coupon_code: couponCode
                },
                success: function(response) {
                    console.log(response);
                },
                error: function(error) {
                    console.error('Error sending AJAX request:', error);
                }
            });

            // showConfettiPopup();
        }

        window.onload = generateOrderNumber;

        // function showConfettiPopup() {
        //     const confettiSettings = {
        //         target: 'canvas',
        //         size: 2,
        //         max: 200,
        //         rotate: true,
        //     };

        //     canvasConfetti(confettiSettings);
        // }
    </script>

<!-- <script>
    let colors = ['#26ccff', '#a25afd', '#ff5e7e', '#88ff5a', '#fcff42', '#ffa62d', '#ff36ff'];
    let canvas = document.getElementById('my-canvas');
    canvas.width = window.innerWidth;
    canvas.height = window.innerHeight;
    let ctx = canvas.getContext('2d');

    function random(min, max) {
        return Math.random() * (max - min) + min;
    }

    let confettiPieces = [];

    function createConfetti() {
        ctx.clearRect(0, 0, canvas.width, canvas.height);

        if (Math.random() < 0.1) { // Create confetti with a 10% chance
            let size = random(10, 20);
            confettiPieces.push({
                x: random(0, canvas.width),
                y: 0,
                size: size, // Size of the square
                color: colors[Math.floor(random(0, colors.length))],
                velocity: random(2, 4) // Adjust to control fall speed
            });
        }

        for (let piece of confettiPieces) {
            ctx.fillStyle = piece.color;
            ctx.fillRect(piece.x, piece.y, piece.size, piece.size); // Draw a square
            piece.y += piece.velocity;

            // Remove confetti when it reaches the bottom
            if (piece.y > canvas.height) {
                confettiPieces.splice(confettiPieces.indexOf(piece), 1);
            }
        }

        requestAnimationFrame(createConfetti);
    }

    createConfetti();
</script> -->


    <!-- <script>
        function generateRandomNumber() {
            return Math.floor(10000 + Math.random() * 90000);
        }

        function generateOrderNumber() {
            const orderNumberElement = document.getElementById("orderNumber");
            const randomDigits = generateRandomNumber();
            const orderNumber = "itech" + randomDigits;

            orderNumberElement.textContent = "Order Number: [" + orderNumber + "]";
        }

        window.onload = generateOrderNumber;
    </script> -->

    <!-- Add this script tag in your HTML file -->
    <!-- <script>
        // Function to generate a random 5-digit number
        function generateRandomNumber() {
            return Math.floor(10000 + Math.random() * 90000);
        }

        // Function to generate the order number
        // Function to generate the order number
        function generateOrderNumber() {
            const randomDigits = generateRandomNumber();
            const orderNumber = "itech" + randomDigits;

            // Set the content of the element
            document.getElementById("orderNumber").textContent = orderNumber;

            // Get the coupon code from the hidden input field
            const couponCodeInput = document.getElementById("coupon_code_input");
            const couponCode = couponCodeInput.value.trim();

            // Log the coupon code to the console for debugging
            console.log('Coupon Code:', couponCode);

            // Send orderNumber and coupon_code to PHP using AJAX
            $.ajax({
                type: 'POST',
                url: 'thanku.php',
                data: {
                    orderNumber: orderNumber,
                    coupon_code: couponCode
                },
                success: function(response) {
                    console.log(response); // Log the response from PHP
                },
                error: function(error) {
                    console.error('Error sending AJAX request:', error);
                }
            });
            showConfettiPopup();
        }

        // Call the function when the page loads
        window.onload = generateOrderNumber;




        // Call the function when the page loads
        window.onload = generateOrderNumber;
    </script> -->


    <script>
        $(document).ready(function() {
            // Add confetti elements to the wrapper
            var i = 149;
            while (i > -1) {
                $('.wrapper').append(`<div class="confetti-${i}"></div>`);
                i--;
            }

            // Apply animation to confetti elements
            $("[class|='confetti']").each(function() {
                var duration = 4 + Math.random() * 4; // random duration between 4 and 8 seconds
                var delay = Math.random() * 4; // random delay between 0 and 4 seconds
                $(this).css({
                    left: Math.random() * 100 + "%",
                    animation: `drop ${duration}s ${delay}s infinite`
                });
            });
        });
    </script>

  

<!-- <script>
    function showConfettiPopup() {
        const confettiSettings = {
            target: 'canvas', // Change this to the ID of the actual canvas element
            size: 2,
            max: 200,
            rotate: true,
        };

        document.getElementById('confetti-popup').style.display = 'block';
        canvasConfetti(confettiSettings);
    }

    function closeConfettiPopup() {
        document.getElementById('confetti-popup').style.display = 'none';
    }

    // Call showConfettiPopup after a delay (e.g., 2000 milliseconds)
    setTimeout(showConfettiPopup, 2000);
</script> -->



    <!-- button  -->
    <!-- <script>
    document.getElementById('cartForm').addEventListener('submit', function(event) {
        event.preventDefault();

        window.location.href = 'cart1.html';
    });
</script> -->

    <script>
        // Add an event listener to the form
        document.getElementById('cartForm').addEventListener('submit', function(event) {
            // Prevent the default form submission behavior
            event.preventDefault();

            // Get the promo code from the button or any other source
            var promoCode = 'HOLI20';

            // Redirect the user to cart1.html with the promo code as a query parameter
            window.location.href = 'cart1.html?promo=' + encodeURIComponent(promoCode);
        });
    </script>



    <!-- button end -->

    <!-- <script src="https://cdn.jsdelivr.net/npm/canvas-confetti@1.3.1/dist/canvas-confetti.min.js"></script> -->

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>


    <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script> -->
    <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script> -->
    <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script> -->

</body>

</html>