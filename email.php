<?php
$email2 = $_POST['email1'];

// Database Connection
$conn = new mysqli('localhost', 'root', '', 'itechnebula');
if ($conn->connect_error) {
    die('Connection failed: ' . $conn->connect_error);
} else {
    // Update 'email2' to the actual column name in your 'email' table
    $stmt = $conn->prepare("INSERT INTO email (email) VALUES (?)");
    $stmt->bind_param("s", $email2);
    $stmt->execute();
    header("Location:index.php");
    $stmt->close();
    $conn->close();
}
?>
