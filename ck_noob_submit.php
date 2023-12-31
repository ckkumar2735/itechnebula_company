<?php
// Include your database connection file
include('db.php');

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Check if the keys exist in the $_POST array
    $packageName = isset($_POST['selectedPackageName']) ? $_POST['selectedPackageName'] : '';
    $packagePrice = isset($_POST['selectedPackagePrice']) ? (float)$_POST['selectedPackagePrice'] : 0;
    $months = isset($_POST['selectedQuantity']) ? (int)$_POST['selectedQuantity'] : 0;
    $subtotal = isset($_POST['subtotal']) ? (float)$_POST['subtotal'] : 0;

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
