<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];

    // Here you would typically send an email or save the message to the database
    echo "Thank you for your message, $name!";
}
?>