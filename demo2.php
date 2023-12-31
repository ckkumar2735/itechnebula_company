<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $latitude = $_POST['latitude'];
    $longitude = $_POST['longitude'];

    // Process the coordinates as needed
    // For example, you can store them in a database
    // or perform actions based on the location

    // Send a response (optional)
    echo json_encode(['status' => 'success', 'message' => 'Location received successfully']);
} else {
    // Handle invalid requests
    http_response_code(400);
    echo json_encode(['status' => 'error', 'message' => 'Invalid request']);
}

?>