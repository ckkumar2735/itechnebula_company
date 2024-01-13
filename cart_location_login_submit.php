<?php

include('db.php');

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $email = isset($_POST['email']) ? trim($_POST['email']) : '';
    $password = isset($_POST['password']) ? trim($_POST['password']) : '';
    $rePassword = isset($_POST['password_repeat']) ? trim($_POST['password_repeat']) : '';

    echo "email: $email<br>";
    echo "password: $password <br>";

    // Check if any field is empty
    if (empty($email) || empty($password) || empty($rePassword)) {
        // Handle the case where any field is empty, you can display an error message
        echo "All fields are required!";
    } else {
        // Check if the passwords match
        if ($password !== $rePassword) {
            // Handle the case where passwords do not match, you can display an error message
            echo "Passwords do not match!";
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
                echo "Error occurred while inserting into the database.";
            }

            $stmt->close();
        }
    }
}
?>
