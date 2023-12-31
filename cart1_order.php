<?php
// Include your database connection file
include('db.php');

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Check if the keys exist in the $_POST array
    $packagePrice = isset($_POST['selectedPackagePrice']) ? (int)$_POST['selectedPackagePrice'] : 0;
$months = isset($_POST['selectedQuantity']) ? (int)$_POST['selectedQuantity'] : 0;
$packageName = isset($_POST['selectedPackageName']) ? $_POST['selectedPackageName'] : '';

    // Assuming you want to save the subtotal as well
    $subtotal = isset($_POST['subtotal']) ? (int)$_POST['subtotal'] : 0;

    // $promoCode = isset($_POST['promoCode']) ? $_POST['promoCode'] : '';

    // Debugging: Print received data
    echo "Package Name: $packageName<br>";
    echo "Package Price: $packagePrice<br>";
    echo "Months: $months<br>";
    echo "Subtotal: $subtotal<br>";
    // echo "Promo Code: $promoCode<br>";

    // Use prepared statements to prevent SQL injection
    $stmt = $con->prepare("INSERT INTO cart_main (package_name, package_price, months, subtotal) VALUES ( ?, ?, ?, ?)");
    $stmt->bind_param('siii', $packageName, $packagePrice, $months, $subtotal);

    // Execute the prepared statement
    if ($stmt->execute()) {
        // echo "Package information saved successfully";
        header('Location:cart_location.php');
    } else {
        // echo "Error: " . $stmt->error;
    }

    // Close the prepared statement
    $stmt->close();
}
?>
