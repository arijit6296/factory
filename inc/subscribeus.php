<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $email = filter_var($_POST['email'], FILTER_SANITIZE_EMAIL);

    // Validate email
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        echo "Invalid email format. Please try again.";
        exit;
    }

    // Save the email to a file (you can use a database for more advanced scenarios)
    $file = 'subscribers.txt';
    $current = file_get_contents($file);
    $current .= "$email\n";
    file_put_contents($file, $current);

    echo "Thank you for subscribing!";
}
?>
