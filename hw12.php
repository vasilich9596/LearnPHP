<?php
$dsn ='mysql:host=localhost;dbname=hwDB12';
$pdo = new PDO($dsn,'root','');
?>

<?php
echo'<ul>';
$query = $pdo->query('SELECT * FROM `users`');
while ($row = $query->fetch(PDO::FETCH_OBJ)){
    echo'<li><b>'.$row->first_name.'</b></li>';

}
echo '</ul>';

echo'<ul>';
$query = $pdo->query('SELECT * FROM `post`');
while ($row = $query->fetch(PDO::FETCH_OBJ)){
    echo'<li><b>'.$row->post.'</b></li>';

}
echo '</ul>';

echo'<ul>';
$query = $pdo->query('SELECT * FROM `contacts`');
while ($row = $query->fetch(PDO::FETCH_OBJ)){
    echo'<li><b>'.$row->telephone.'</b></li>';
    echo'<li><b>'.$row->email.'</b></li>';

}
echo '</ul>';

