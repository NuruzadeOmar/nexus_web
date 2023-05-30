<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $name = $_POST["Full Name"];
  $company = $_POST["Company"];
  $email = $_POST["Email"];
  $message = $_POST["Message"];
  
  $to = "nuruzadeomar3@gmail.com"; // Replace with your email address
  $subject = "NEXUS - New Contact Form Submission";
  $body = "Name: $name\nCompany: $company\nEmail: $email\nMessage: $message";
  
  // Headers
  $headers = "From: $email\r\n";
  $headers .= "Reply-To: $email\r\n";
  
  // Send email
  if (mail($to, $subject, $body, $headers)) {
    echo "Email sent successfully.";
  } else {
    echo "Error sending email.";
  }
}
?>
