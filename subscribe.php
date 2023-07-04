<?php
// Check if the form is submitted
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Get the submitted email address
    $email = $_POST['email'];

    // Validate the email address (you can add more validation if needed)
    if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
        // Store the email address in a database or perform any other actions
        // Here, we're just displaying a success message
        echo "Thank you for subscribing!";
    } else {
        // Invalid email address
        echo "Invalid email address. Please try again.";
    }
}

?>
