<?php


$host = 'localhost';
$db = 'shit';
$user = 'root';
$password = '';
$charset = 'utf8mb4';
$dsn = "mysql:host=$host;dbname=$db;charset=$charset";
$pdo = new PDO($dsn, $user, $password);


echo 'jaja <br>';

?>
<a href="insert-steps.php">
    <input type="submit" value="add steps">
</a>
<br>
<?php

$stmt = $pdo->query('SELECT * FROM shittest1 ORDER BY id ASC');
    while ($row = $stmt->fetch()) {
        echo "step ", $row['stepid'], " ", $row['steps'] . "\n" . '<br>'; ?><br><?php
    }

?>