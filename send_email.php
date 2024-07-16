<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $FirstName = $_POST['FirstName'] ?? '';
    $Name = $_POST['Name'] ?? '';
    $LastName = $_POST['LastName'] ?? '';
    $Email = $_POST['Email'] ?? '';
    $Mobile = $_POST['Mobile'] ?? '';
    $Message = $_POST['Message'] ?? '';

    if ($FirstName !=='' && $LastName!=='') {
        $Name = $FirstName . " " . $LastName;
    }

    $to = "info@tradomatic.in"; // Change this to your email address
    $subject = "Contact Form";
    $message = "Name: $Name\nEmail: $Email\nPhone: $Mobile\nMessage: $Message";
    $headers = "From: $Email";
   
    if (mail($to, $subject, $message, $headers)) {
        echo "Email sent successfully.";
    } else {
        echo "Failed to send email.";
    }
} else {
    echo "Invalid request.";
}
?>
