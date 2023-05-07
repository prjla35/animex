<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $message = $_POST['message'];
    $to = 'prjla35@gmail.com';
    $subject = 'New message from your website';
    $headers = 'From: https://prjla35.github.io/animex/' . "\r\n" .
               'Reply-To: prjla36@gmail.com' . "\r\n" .
               'X-Mailer: PHP/' . phpversion();

    if (mail($to, $subject, $message, $headers)) {
        echo 'Message sent successfully!';
    } else {
        echo 'An error occurred while sending the message.';
    }
}
?>
