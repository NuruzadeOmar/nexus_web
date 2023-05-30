<?php
// Retrieve form data
$fullName = $_POST['Full Name'];
$companyName = $_POST['Company Name'];
$email = $_POST['Email'];
$message = $_POST['message'];

// Create email content
$subject = "NEXUS - New message from $fullName";
$body = "Company: $companyName\n\n";
$body .= "Email: $email\n\n";
$body .= "Message: $message";

// Set up email headers
$headers = "From: $fullName <$email>\r\n";
$headers .= "Reply-To: $email\r\n";
$headers .= "MIME-Version: 1.0\r\n";
$headers .= "Content-Type: text/plain; charset=utf-8\r\n";
$headers .= "X-Mailer: PHP/" . phpversion();

// Send the email
$recipientEmail = "recipient@example.com"; // Replace with the recipient's email address
$mailSent = mail($recipientEmail, $subject, $body, $headers);

// Check if the email was sent successfully
if ($mailSent) {
  echo "Email sent successfully.";
} else {
  echo "Failed to send email.";
}
?>
