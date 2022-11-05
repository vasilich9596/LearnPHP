<?php
require_once '../config/connect.php';

?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Products</title>
</head>

<body>

<h3>register</h3>
<form action="create.php" method="post">
    <p>name</p>
    <input type="text" name="first_name">
    <p>email</p>
    <input type="text"  name="email">
    <p>Password</p>
    <input type="number" name="password"> <br> <br>
    <button type="submit">Add new registration
</form>
</body>
</html>

