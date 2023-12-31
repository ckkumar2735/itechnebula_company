<?php
// efg.php

// Start the session
session_start();

// Check if ABC form data is present
if (isset($_POST['username']) && isset($_POST['password'])) {
    // Store ABC form data in session
    $_SESSION['abc_data'] = [
        'username' => $_POST['username'],
        'password' => $_POST['password']
    ];
}

// Check if BCD form data is present
if (isset($_POST['email']) && isset($_POST['password'])) {
    // Store BCD form data in session
    $_SESSION['bcd_data'] = [
        'username' => $_POST['username'],
        'email' => $_POST['email'],
        'password' => $_POST['password']
    ];
}

// Check if both ABC and BCD data are present in sessions
if (isset($_SESSION['abc_data']) && isset($_SESSION['bcd_data'])) {
    // Connect to MySQL database
    $servername = "your_database_server";
    $username = "your_username";
    $password = "your_password";
    $dbname = "company";

    $conn = new mysqli($servername, $username, $password, $dbname);

    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // Retrieve data from sessions
    $abc_data = $_SESSION['abc_data'];
    $bcd_data = $_SESSION['bcd_data'];

    // Insert data into the cm_login table
    $sql = "INSERT INTO cm_login (abc_username, abc_password, bcd_username, bcd_email, bcd_password) VALUES (
        '{$abc_data['username']}', '{$abc_data['password']}',
        '{$bcd_data['username']}', '{$bcd_data['email']}', '{$bcd_data['password']}'
    )";

    if ($conn->query($sql) === TRUE) {
        echo "Data inserted successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    // Print the session data for debugging purposes
    echo '<pre>';
    print_r($_SESSION);
    echo '</pre>';

    // Close the database connection
    $conn->close();
} else {
    echo "Data not available from both forms.";
}
?>
