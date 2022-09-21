<?php


$name = $_POST['name'];
$email = $_POST['email'];
$subject = $_POST['subject'];
$message = $_POST['message'];


$email_from = 'mido5@gmail.com';

$email_subject = 'new form submission';
$email_body = "user name : $name.\n".
                "user email : $email.\n".
                "subject : $subject.\n".
                "user message : $message.\n";

$to = 'miladyahoo842@gmail.com';
$headers = "from : $email_from \r \n";
$headers .= "Replay_to : $email \r\n";

mail($to , $email_subject , $email_body , $headers);
header('Location: contact.html');

?>