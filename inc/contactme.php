<?php
require 'vendor/autoload.php'; // Include PHPMailer autoload file

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

//////////////////////////////
// Validation PHP
//////////////////////////////

$name = $surname = $email = $message = "";
$nameErr = $surnameErr = $emailErr = $messageErr = "";
$successMessage = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Sanitize input
    $name = test_input($_POST["name"]);
    $surname = test_input($_POST["surname"]);
    $email = test_input($_POST["email"]);
    $subject = test_input($_POST["subject"]);
    $message = test_input($_POST["message"]);

    // Validate name
    if (empty($name)) {
        $nameErr = "Name is required";
    }

    if (empty($email)) {
        $emailErr = "Email is required";
    } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $emailErr = "Invalid email format";
    }

    // Validate message
    if (empty($message)) {
        $messageErr = "Message is required";
    }

    // Proceed with sending email if there are no errors
    if (empty($nameErr) && empty($emailErr) && empty($messageErr))  {
        try {
            // Initialize PHPMailer for sending email
    

            $phpmailer = new PHPMailer();
            $phpmailer->isSMTP();
            $phpmailer->Host = 'sandbox.smtp.mailtrap.io';
            $phpmailer->SMTPAuth = true;
            $phpmailer->Port = 2525;
            $phpmailer->Username = '1b09d513b25e82';
            $phpmailer->Password = '60fa72710c7703';
            // Sender and recipient for email
            $phpmailer->setFrom($email, $name . ' ' . $surname);
            $phpmailer->addAddress('markskobelevs@gmail.com'); // Your email address
            $phpmailer->Subject = $subject;
            $phpmailer->Body = $message;

            // Send email
            $emailSent = $phpmailer->send();

            // Save to database
            include_once "dbCon.php";
            $sql = "INSERT INTO contact (name, surname, email, subject, message) VALUES (?, ?, ?, ?, ?)";
            $stmt = mysqli_stmt_init($conn);
            if (!mysqli_stmt_prepare($stmt, $sql)) {
                throw new Exception(mysqli_error($conn));
            }
            mysqli_stmt_bind_param($stmt, "sssss", $name, $surname, $email, $subject, $message);
            $databaseInserted = mysqli_stmt_execute($stmt);
            mysqli_stmt_close($stmt);
            mysqli_close($conn);

            // Set success message based on email and database insertion status
            if ($emailSent && $databaseInserted) {
                $successMessage = "Your message has been submitted successfully and an email notification has been sent.";
            } elseif ($emailSent) {
                $successMessage = "Your message has been submitted successfully but there was an issue sending the email notification.";
            } else {
                $successMessage = "Your message has been submitted successfully but there was an issue with database insertion.";
            }

            // Clear form fields after successful submission
            $name = $surname = $email = $subject = $message = "";
        } catch (Exception $e) {
            echo "Error: " . $e->getMessage();
        }
    }
}

// Function to sanitize input
function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}
?>
