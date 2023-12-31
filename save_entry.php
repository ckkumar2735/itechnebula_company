<?php
session_start();

// Check if unique_user_id is set in the session, if not, generate and set it
if (!isset($_SESSION['unique_user_id'])) {
    $_SESSION['unique_user_id'] = time() . mt_rand(1, 1000);
}

// Database connection details
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "itechnebula";

// ipstack API key
$ipstack_api_key = "b5f793d793e28ad2ee213423ae07487f";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Function to get user IP address
function getIpAddress()
{
    // Check for shared Internet/ISP IP
    if (!empty($_SERVER['HTTP_CLIENT_IP']) && filter_var($_SERVER['HTTP_CLIENT_IP'], FILTER_VALIDATE_IP)) {
        return $_SERVER['HTTP_CLIENT_IP'];
    }

    // Check for IP addresses passing through proxies
    if (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) {
        $ipAddresses = explode(',', $_SERVER['HTTP_X_FORWARDED_FOR']);
        foreach ($ipAddresses as $ip) {
            if (filter_var($ip, FILTER_VALIDATE_IP)) {
                return $ip;
            }
        }
    }
    // Check for the remote address (default)
    return $_SERVER['REMOTE_ADDR'];
}

function getUserLocation($ip, $api_key)
{
    $url = "http://api.ipstack.com/$ip?access_key=$api_key";
    $location_data = json_decode(file_get_contents($url), true);

    // Log the API response
    // echo "API Response:<pre>";
    // print_r($location_data);
    // echo "</pre>";

    return $location_data;
}


// Get user information
$user_ip = getIpAddress();
$entry_time = date("Y-m-d H:i:s");
$exit_time = date("Y-m-d H:i:s");
$device_info = isset($_SERVER['HTTP_USER_AGENT']) ? $_SERVER['HTTP_USER_AGENT'] : "Unknown";

// Get unique user ID from session
$unique_user_id = isset($_SESSION['unique_user_id']) ? $_SESSION['unique_user_id'] : null;

// Debugging information
// echo "Debug Information:<br>";
// echo "user_ip: $user_ip<br>";
// echo "entry_time: $entry_time<br>";
// echo "exit_time: $exit_time<br>";
// echo "device_info: $device_info<br>";
// echo "unique_user_id: $unique_user_id<br>";

// Check if unique_user_id is set
if ($unique_user_id === null) {
    // echo "Error: unique_user_id cannot be null.";
    exit;
}

// Get user location data
$location_data = getUserLocation($user_ip, $ipstack_api_key);

// Debugging information
// echo "Location Data:<pre>";
// print_r($location_data);
// echo "</pre>";

// Insert user entry into the database
$sql = "INSERT INTO user_entries (user_ip, entry_time, exit_time, device_info, city, state, country, area, pincode, unique_user_id) 
        VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";

// Use prepared statement to avoid SQL injection
$stmt = $conn->prepare($sql);
$stmt->bind_param(
    "ssssssssss",
    $user_ip,
    $entry_time,
    $exit_time,
    $device_info,
    $location_data['city'],
    $location_data['region_name'], // Assuming region_name is the state
    $location_data['country_name'],
    $location_data['region_name'], // Assuming region_name is the area
    $location_data['zip'],
    $unique_user_id
);

$stmt->execute();

if ($stmt->affected_rows > 0) {
    // Get the ID of the inserted record
    $_SESSION['last_id'] = $stmt->insert_id;

    $last_id = $_SESSION['last_id'];
    $time_spent = isset($_GET['time_spent']) ? $_GET['time_spent'] : 0;

    // Update the time_spent in the database
    $update_sql = "UPDATE user_entries SET time_spent = ? WHERE id = ?";
    $update_stmt = $conn->prepare($update_sql);
    $update_stmt->bind_param("ii", $time_spent, $last_id);

    if ($update_stmt->execute()) {
        // echo "Time spent updated successfully!";
    } else {
        // echo "Error updating time spent: " . $update_stmt->error;
    }
} else {
    // echo "Error inserting data: " . $stmt->error;
}

// Close the prepared statement
$stmt->close();

// Close the database connection
$conn->close();
?>




