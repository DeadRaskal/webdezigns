<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get form data
    $name = $_POST["name"];
    $email = $_POST["email"];
    $subject = $_POST["subject"];
    $message = $_POST["message"];

    // Compose email message
    $to = "kilofree60@gmail.com";
    $headers = "From: $name <$email>";

    // Send email
    if (mail($to, $subject, $message, $headers)) {
        echo "Your message has been sent!";
    } else {
        echo "Failed to send message. Please try again later.";
    }
} else {
    echo "Direct access not allowed.";
}
?>
