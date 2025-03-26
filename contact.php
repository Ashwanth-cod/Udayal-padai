<?php
require 'PHPMailer/PHPMailer.php'; // Include PHPMailer class
require 'PHPMailer/SMTP.php';      // Include SMTP class
require 'PHPMailer/Exception.php'; // Include Exception class

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Get form data
    $first_name = $_POST['first_name'];
    $last_name = $_POST['last_name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $message = $_POST['message'];

    // Create a new PHPMailer instance
    $mail = new PHPMailer(true);

    try {
        // Server settings
        $mail->isSMTP(); // Send using SMTP
        $mail->Host = 'smtp.gmail.com'; // Set the SMTP server to send through (adjust based on your mail service)
        $mail->SMTPAuth = true; // Enable SMTP authentication
        $mail->Username = 'mpandieswar@gmail.com'; // SMTP username
        $mail->Password = 'gyzvqqtqyavckyvq'; // SMTP password
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS; // Enable TLS encryption
        $mail->Port = 587; // TCP port to connect to

        // Recipients
        $mail->setFrom($email, $first_name . ' ' . $last_name); // Sender email and name
        $mail->addAddress('ashwanth.ars@gmail.com', 'Udayal Padai Charitable Trust'); // Add recipient email

        // Content
        $mail->isHTML(false); // Set email format to plain text
        $mail->Subject = 'New Contact Form Submission';
        $mail->Body    = "Contact Information\n\n
                          Name: $first_name $last_name\n\n
                          Email: $email\n\n
                          Phone: $phone\n\n
                          Message: $message";
        

        // Send email
        if ($mail->send()) {
            echo '<p>Message has been sent successfully!</p>';
        } else {
            echo '<p>Message could not be sent. Please try again later.</p>';
        }
    } catch (Exception $e) {
        echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
    }
}
?>
