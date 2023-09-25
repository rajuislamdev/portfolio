<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    $email = $_POST["email"];
    $subject = $_POST["subject"];
    $message = $_POST["message"];

    $to = "marsfarhad@gmail.com"; // Replace with the recipient's email address
    $headers = "From: $email\r\n";
    $headers .= "Content-Type: text/plain; charset=UTF-8\r\n";


    // Create the email message
    $emailMessage = "Name: $name\n";
    $emailMessage .= "Email: $email\n";
    $emailMessage .= "Subject: $subject\n";
    $emailMessage .= "Message:\n$message";

    // Send the email using Gmail SMTP
    if (mail($to, $subject, $emailMessage, $headers)) {
        header("Location: success.html"); // Redirect to a success page
    } else {
        header("Location: error.html"); // Redirect to an error page
    }
} else {
    // If someone tries to access this script directly, redirect them to the form page
    header("Location: contact.html");
}
?>
