<?php
// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve form data
    $firstName = $_POST["First_Name"];
    $lastName = $_POST["Last_Name"];
    $country = $_POST["Country"];
    $streetAddress = $_POST["street_address"];
    $city = $_POST["City"];
    $state = $_POST["State"];
    $zipCode = $_POST["Zip_Code"];
    $phoneNumber = $_POST["Phone_Number"];

    // Additional addresses from dynamically added fields
    $additionalAddresses = isset($_POST["Add_Line_Address"]) ? $_POST["Add_Line_Address"] : [];

    // Database connection parameters
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "itechnebula";

    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);

    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // Insert main address into the 'shipping_address' table
    $sql = "INSERT INTO `shiping address` (first_name, last_name, country, street_address, city, state, zip_code, phone_number)
            VALUES ('$firstName', '$lastName', '$country', '$streetAddress', '$city', '$state', '$zipCode', '$phoneNumber')";

    if ($conn->query($sql) === TRUE) {
        // echo "Main address inserted successfully";
        header('Location:https://www.instamojo.com/@itechnebula/');
        // header('Location:thankyou.html');


    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    // Insert additional addresses into the 'shipping_address' table
    foreach ($additionalAddresses as $address) {
        $sql = "INSERT INTO `shiping address` (additional_address) VALUES ('$address')";

        if ($conn->query($sql) !== TRUE) {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }
    }

    // Close connection
    $conn->close();
}
?>
