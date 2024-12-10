<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $fullName = htmlspecialchars($_POST['fullName']);
    $projectType = htmlspecialchars($_POST['projectType']);
    $email = htmlspecialchars($_POST['email']);
    $pageUrl = htmlspecialchars($_POST['pageUrl']);

    $to = "ammar.aliashar29@gmail.com";
    $subject = "New Project Inquiry";
    $message = "Full Name: $fullName\nProject Type: $projectType\nEmail: $email\nPage URL: $pageUrl";

    // Use wordwrap() if lines are longer than 70 characters
    $message = wordwrap($message, 70);

    // Send email
    if (mail($to, $subject, $message)) {
        echo "Email successfully sent to $to";
    } else {
        echo "Email sending failed.";
    }

    // Optionally, redirect to a thank you page
    header("Location: thank-you.html");
    exit();
}
?>
