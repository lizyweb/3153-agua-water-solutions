<?php

$name = $_POST['name'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$comments = $_POST['comments'];

if (trim($name) == '') {
    echo 'Attention! You must enter your name.';
    exit();
} elseif (trim($email) == '') {
    echo 'Attention! Please enter a valid email address.';
    exit();
} elseif (trim($phone) == '') {
    echo 'Attention! Please enter your phone.';
    exit();
} elseif (trim($comments) == '') {
    echo 'Attention! Please enter your message.';
    exit();
}

$to = "Aguawatersolutions@gmail.com";
$subject = 'You\'ve been contacted by ' . $name . '.';
$msg = "Name: " . $name . "\n\nEmail: " . $email . "\n\nPhone: " . $phone . "\n\nComments:\n" . $comments;
$headers = "From: $email";

if (mail($to, $subject, $msg, $headers)) {
    echo 'success';
} else {
    echo 'ERROR!';
}
?>
