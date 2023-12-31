<?php

include('db.php');

if ($_SERVER['REQUEST_METHOD'] === 'POST'){

    $email = isset($_POST['email']) ? $_POST['email'] : 0;
    $password = isset($_POST['password']) ? $_POST['password'] : 0;

    echo "email: $email<br>";
    echo "password: $password <br>";

    $stmt = $con->prepare("INSERT INTO cart_location_login (email, password) VALUES (?, ?)");
    $stmt->bind_param('ss', $email, $password);

    if ($stmt->execute()) {
        // echo "inserted";
        header('Location: cart_location_shipping_address.html');
    } else {
        // Handle error if needed
    }

    $stmt->close();
}
?>
