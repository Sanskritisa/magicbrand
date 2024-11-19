<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'vendor/autoload.php';

$result_message = "";
$result_message_color = "";

// Check if the form was submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    // Get form fields and remove HTML tags to prevent XSS
    $name = strip_tags(trim($_POST["name"]));
    $email = filter_var(trim($_POST["email"]), FILTER_SANITIZE_EMAIL);
    $date = strip_tags(trim($_POST["date"]));
    $time = strip_tags(trim($_POST["time"]));
    $message = strip_tags(trim($_POST["message"]));

    // Validate the form data
    if (empty($name) || empty($message) || !filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $result_message = "Please fill out the form completely and provide a valid email address.";
        $result_message_color = "red";
    } else {
        // Create a new PHPMailer instance
        $mail = new PHPMailer(true);

        try {
            //Server settings
            $mail->SMTPDebug = 0;                                   // Disable debugging output
            $mail->isSMTP();                                        // Send using SMTP
            $mail->Host       = 'smtp.gmail.com';                   // Set the SMTP server
            $mail->SMTPAuth   = true;                               // Enable SMTP authentication
            $mail->Username   = 'naveensahuu01@gmail.com';             // Your Gmail email
            $mail->Password   = 'ytcy ityz eiwy xgae';              // Your Gmail password or app password
            $mail->SMTPSecure = 'tls';                              // Enable TLS encryption
            $mail->Port       = 587;                                // TCP port to connect to

            //Recipients
            $mail->setFrom($email, $name);                          // From email and name (user form)
            $mail->addAddress('naveensahuu01@gmail.com');         // Your email to receive the message

            // Email content
            $mail->isHTML(false);                                   // Set email format to plain text
            $mail->Subject = "New Contact from $name";
            $mail->Body    = "Name: $name\nEmail: $email\nDate: $date\nTime: $time\nMessage:\n$message\n";

            $mail->send();
            $result_message = "Message has been sent successfully!";
            $result_message_color = "green";
        } catch (Exception $e) {
            $result_message = "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
            $result_message_color = "red";
        }
    }
}
?>