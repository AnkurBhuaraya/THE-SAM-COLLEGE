<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Sanitize and validate input data
    $name = htmlspecialchars(strip_tags(trim($_POST["name"])));
    $email = filter_var($_POST["email"], FILTER_SANITIZE_EMAIL);
    $subject = htmlspecialchars(strip_tags(trim($_POST["subject"])));
    $message = htmlspecialchars(strip_tags(trim($_POST["message"])));

    // Validate email format
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        die("Invalid email format");
    }

    // Prepare email data
    $to = "ankuruse2004@gmail.com"; // Change this to your email address
    $headers = "From: $email\r\n";
    $headers .= "Reply-To: $email\r\n";
    $headers .= "Content-Type: text/plain; charset=UTF-8\r\n";

    $body = "Name: $name\n";
    $body .= "Email: $email\n";
    $body .= "Subject: $subject\n";
    $body .= "Message:\n$message\n";

    // Send the email
    if (mail($to, $subject, $body, $headers)) {
        echo "Message sent successfully!";
    } else {
        echo "Failed to send message. Please try again.";
    }
} else {
    echo "Invalid request.";
}
?>
