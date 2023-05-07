<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $message = $_POST['message'];
    $to = 'prjla35@gmail.com';
    $subject = 'New message from your website';
    $headers = 'From: your-website@domain.com' . "\r\n" .
               'Reply-To: your-website@domain.com' . "\r\n" .
               'X-Mailer: PHP/' . phpversion();

    if (mail($to, $subject, $message, $headers)) {
        echo 'Message sent successfully!';
    } else {
        echo 'An error occurred while sending the message.';
    }
}
?>
