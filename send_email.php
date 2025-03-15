<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  // Collect form data
  $name = htmlspecialchars($_POST['name']);
  $email = htmlspecialchars($_POST['email']);
  $subject = htmlspecialchars($_POST['subject']);
  $message = htmlspecialchars($_POST['message']);

  // Set recipient email (replace with your Gmail address)
  $to = "mujahid@in4solution.com";

  // Set email headers
  $headers = "From: $name <$email>\r\n";
  $headers .= "Reply-To: $email\r\n";
  $headers .= "Content-Type: text/plain; charset=UTF-8\r\n";

  // Compose the email body
  $email_body = "Name: $name\n";
  $email_body .= "Email: $email\n";
  $email_body .= "Subject: $subject\n";
  $email_body .= "Message:\n$message\n";

  // Send the email
  if (mail($to, $subject, $email_body, $headers)) {
    echo "Thank you! Your message has been sent.";
  } else {
    echo "Oops! Something went wrong. Please try again.";
  }
}
?>