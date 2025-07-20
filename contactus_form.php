<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];

    // You can perform additional validation or processing here

    // Display the submitted data
    echo "<p>Name: $name</p>";
    echo "<p>Email: $email</p>";
    echo "<p>Message: $message</p>";

    // Process form submission here...

    // Send a response to the JavaScript
    echo json_encode(['status' => 'success']);
    exit(); // Make sure to exit after sending the response
}
?>