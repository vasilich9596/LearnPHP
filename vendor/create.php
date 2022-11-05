<?php
require_once '../config/connect.php';

$name = $_POST['first_name'];
$email = $_POST['email'];
$password = $_POST['password'];

mysqli_query($connect,"INSERT INTO `register` (`id`, `name`, `email`, `password`) VALUES (NULL, '$name', '$email', '$password')");

header('Location: /');