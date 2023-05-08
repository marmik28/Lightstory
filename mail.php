<?php
// Get the form data
$name = $_POST['name'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$subject = $_POST['subject'];
$message = $_POST['message'];

// Set the recipient email address
$to = 'marmik1128@gmail.com';

// Set the email subject
$subject = 'New message from ' . $name . ': ' . $subject;


// Build the email body
$body = "Name: $name\n\n";
$body .= "Email: $email\n\n";
$body .= "Phone: $phone\n\n";
$body .= "Message:\n$message";

// Set additional headers
$headers = "From: $email\r\n";
$headers .= "Reply-To: $email\r\n";
$headers .= "Content-type: text/plain; charset=UTF-8\r\n";

mail($to, $subject, $body, $headers)
or die("An error occurred while sending your message. Please try again later.");
// Send the email


echo 'Thank you for your message!';

?>
