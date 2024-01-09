<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  // Get the form data
  $name = $_POST["name"];
  $email = $_POST["email"];
  $subject = $_POST["subject"];
  $message = $_POST["message"];

  // Set the recipient email address
  $to = "info@sarvitap.com";

  // Set the email headers
  $headers = "From: $name <$email>\r\n";
  $headers .= "Reply-To: $email\r\n";
  $headers .= "Content-type: text/plain\r\n";

  // Send the email
  mail($to, $subject, $message, $headers);

  // Redirect to a thank-you page
  header("Location: thank_you.html");
  exit();
}
?>
