 <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $name = $_POST["name"];
        $email = $_POST["email"];
        $website = $_POST["website"];
        $comment = $_POST["comment"];

        // Perform any necessary processing or validation
        // For example, you can store the data in a database or send an email

        // Display a confirmation message
        echo "<p>Thank you, $name! Your form has been submitted successfully.</p>";
        echo "<p>We will contact you at $email.</p>";
    }
    ?>



