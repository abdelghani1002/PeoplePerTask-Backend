<?php

require_once './mail.php';

if (empty($_POST['name']) || empty($_POST['email']) || empty($_POST['message'])) {
  echo "please enter your informations";
} else {
  $name = $_POST['name'];
  $email = $_POST['email'];
  $message = $_POST['message'];

  //Recipients
  $mail->setFrom($email, $name);
  $mail->addAddress("aaittamghart8@gmail.com", 'test');

  $mail->Subject = 'Here is the subject';
  $mail->Body    = $message;
  $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

  $mail->send();
  header("location: " . $_SERVER['HTTP_REFERER']);
}
