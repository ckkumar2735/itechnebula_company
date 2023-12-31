<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

require 'PHPMailer/src/Exception.php';
require 'PHPMailer/src/PHPMailer.php';
require 'PHPMailer/src/SMTP.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = isset($_POST["name"]) ? $_POST["name"] : "Name Not Provided";
    $email = isset($_POST["email"]) ? $_POST["email"] : "Email Not Provided";
    $phone = isset($_POST["phone"]) ? $_POST["phone"] : "Mobile Number Not Provided";
    // $selectedOption = isset($_POST["selectedOption"]) ? $_POST["selectedOption"] : "Option Not Selected";
    
    // You can add more form fields as needed

    $bodyHTML = '<p><strong>Name: </strong>' . $name . '</p>';
    $bodyHTML .= '<p><strong>Email: </strong>' . $email . '</p>';
    $bodyHTML .= '<p><strong>Mobile Number: </strong>' . $phone . '</p>';
    // $bodyHTML .= '<p><strong>Selected Option: </strong>' . $selectedOption . '</p>';

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
        $mail->addAddress('kumarchandra9122@gmail.com'); // Change this to the recipient's email

        $mail->isHTML(true);
        $mail->Subject = 'ITECHNEBULA Enquiry From: ' . $name . " - " . date("Y-m-d", time());
        $mail->Body = $bodyHTML;

        $mail->send();

        // Email sent successfully, now redirect to "thanku.html"
        header("Location: thanku.html");
        exit; // Ensure that no further code is executed
    } catch (Exception $e) {
        // Email sending failed
        echo json_encode(['success' => false, 'error' => 'Email not sent']);
    }
}
?>
