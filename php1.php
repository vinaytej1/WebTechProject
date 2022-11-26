<?php
$name = $_POST['name'];
$email = $_POST['email'];
$header = $_POST['header'];
$message = $_POST['message'];
$mes = "Name: $name \nE-mail: $email \nSubject: $header \nMessage: $message";
$send = mail ($email,$header,$mes,"Content-type:text/plain; charset = UTF-8\r\nFrom:$email");
header("location:thankyou.html")
?>