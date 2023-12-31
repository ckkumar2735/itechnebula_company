<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

require 'PHPMailer/src/Exception.php';
require 'PHPMailer/src/PHPMailer.php';
require 'PHPMailer/src/SMTP.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $selectedOption = isset($_POST["city"]) ? $_POST["city"] : "Option Not Selected";

    // Create the email body
    $bodyHTML = '<p><strong>Selected Option: </strong>' . $selectedOption . '</p>';

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
        $mail->Body = $bodyHTML;

        $mail->send();

        // Email sent successfully, now redirect to "thanku.html"
        header("Location: emoji.html");
        exit; // Ensure that no further code is executed
    } catch (Exception $e) {
        // Email sending failed
        echo json_encode(['success' => false, 'error' => 'Email not sent']);
    }
}
?>
