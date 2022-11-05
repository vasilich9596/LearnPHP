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
<form action="autirization.php" method="post">
    <p>email</p>
    <input type="text"  name="email">
    <p>Password</p>
    <input type="number" name="password"> <br> <br>
    <button type="submit">autorize</button>
</form>
</body>
</html>
<?php
$login =filter_var(trim($_POST['email']),
FILTER_SANITIZE_STRING);
$login =filter_var(trim($_POST['password']),
    FILTER_SANITIZE_STRING);

$email = $_POST['email'];
$password = $_POST['password'];

$mysql = new mysqli('localhost','root','','CRUD');
$result = $mysql->query("SELECT * FROM `register` WHERE `email` = '$email' AND `password` = '$password'");
$user = $result->fetch_assoc();
if(count($user)==0){
    echo "user not found";
    exit();
}

setcookie('user',$user['name'],time()+3600, "/");
$mysql->close();

if ($_COOKIE['user'] == ''):
?>
<?php else: ?>
<p>hello <?=$_COOKIE['user']?></p>
<?php endif; ?>