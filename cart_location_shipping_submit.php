<?php
// Start the session
session_start();

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

    // Validate form data
    if (empty($firstName) || empty($lastName) || empty($country) || empty($streetAddress) || empty($city) || empty($state) || empty($zipCode) || empty($phoneNumber)) {
        // Set error message
        $_SESSION["error"] = "Please fill in all required fields.";
        header('Location: cart_location_shipping_address.php');
        exit;
    }

    // Store data in sessions
    $_SESSION["First_Name"] = $firstName;
    $_SESSION["Last_Name"] = $lastName;
    $_SESSION["Country"] = $country;
    $_SESSION["street_address"] = $streetAddress;
    $_SESSION["City"] = $city;
    $_SESSION["State"] = $state;
    $_SESSION["Zip_Code"] = $zipCode;
    $_SESSION["Phone_Number"] = $phoneNumber;
    $_SESSION["Add_Line_Address"] = $additionalAddresses;

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
        // Insert additional addresses into the 'shipping_address' table
        foreach ($additionalAddresses as $address) {
            $sql = "INSERT INTO `shiping address` (additional_address) VALUES ('$address')";
            if ($conn->query($sql) !== TRUE) {
                echo "Error: " . $sql . "<br>" . $conn->error;
            }
        }

        // Close connection
        $conn->close();

        // Redirect to the next page
        header('Location: cart_location_Preview Order.php');
        exit;
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    // Close connection
    $conn->close();
}
?>

