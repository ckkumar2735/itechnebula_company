<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

require 'PHPMailer/src/Exception.php';
require 'PHPMailer/src/PHPMailer.php';
require 'PHPMailer/src/SMTP.php';


if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Collect form data
    $name = isset($_POST["Name"]) ? $_POST["Name"] : '';
    $email = isset($_POST["Email"]) ? $_POST["Email"] : '';
    $number = isset($_POST["Number"]) ? $_POST["Number"] : '';
    $companyName = isset($_POST["Company_Name"]) ? $_POST["Company_Name"] : '';
    $city = isset($_POST["City"]) ? $_POST["City"] : '';
    $companyWebsite = isset($_POST["Company_Website"]) ? $_POST["Company_Website"] : '';
    $sourceCategory = isset($_POST["Source_Category"]) ? $_POST["Source_Category"] : '';

    $bodyHTML = "<p>Name: $name</p>
    <p>Email: $email</p>
    <p>Number: $number</p>
    <p>Company Name: $companyName</p>
    <p>City: $city</p>
    <p>Company Website: $companyWebsite</p>
    <p>Source Category: $sourceCategory</p>";

    // Initialize PHPMailer
    $mail = new PHPMailer(true);

    try {
        $mail->isSMTP();
        $mail->Host = 'smtp.hostinger.com';
        $mail->SMTPAuth = true;
        $mail->Username = 'info@drahmedhaque.com';
        $mail->Password = 'Unknown@1';
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;
        $mail->Port = 465;

        $mail->setFrom('info@drahmedhaque.com', 'From drahmedhaque.com');
        $mail->addAddress('kumarchandra9122@gmail.com');
        $mail->isHTML(true);
        $mail->Subject = 'ITECHNEBULA Enquiry From: ' . $name . " - " . date("Y-m-d", time());
        $mail->Body = "Name: $name <br>Email: $email <br>Number: $number <br>Company Name: $companyName <br>City: $city <br>Company Website: $companyWebsite <br>Source Category: $sourceCategory";

        header('location:thankyou.html');
        // Send email
        $mail->send();
    } catch (Exception $e) {
        echo "Error sending email. Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
    }
} else {
    echo "Invalid request.";
}
?>
