<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $Name = $_POST['Name'];
    $Email = $_POST['Email'];
    $Number = $_POST['Number'];
    $Nature_of_Business = $_POST['Nature_of_Business'];
    $City = $_POST['City'];
    $Service = $_POST['Service'];
    $Share_your_idea = $_POST['Share_your_idea'];
    $Message = $_POST['Message'];

    $conn = new mysqli('localhost', 'root', '', 'itechnebula');

    if ($conn->connect_error) {
        die('Connection failed: ' . $conn->connect_error);
    } else {
        $stmt = $conn->prepare("INSERT INTO get_a_quote_now (Name, Email, Number,  City, Service, Share_your_idea,Message,Nature_of_Business) VALUES (?, ?, ?, ?, ?, ?, ?, ?)");
        
        $stmt->bind_param("ssisssss", $Name, $Email, $Number,  $City, $Service, $Share_your_idea, $Message,$Nature_of_Business,);
        
        $stmt->execute();

        header("Location: index.php");

        echo "Successfully inserted into the database.";
        
        $stmt->close();
        $conn->close();
    }
} else {
    echo "Form not submitted.";
}
?>
