<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Check if the required fields are provided
    if (isset($_POST['email']) && isset($_POST['message'])) {
        $email = $_POST['email'];
        $message = $_POST['message'];

        // Additional headers
        $headers = "From: your_email@example.com"; // Replace with the sender's email address

        // Send the email
        if (mail($email, $message)) {
            // If the email is sent successfully, redirect back to the previous page
            header("Location: " . $_SERVER["HTTP_REFERER"]);
            exit();
        } else {
            // Handle error if email sending fails
            echo "Error sending email.";
        }
    } else {
        echo "Please provide all required fields.";
    }
}
?>
