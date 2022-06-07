<?php
// Souvent on identifie cet objet par la variable $conn ou $db
$mysqlConnection = new PDO(
    'mysql:host=localhost;port=3308;dbname=we_love_food;charset=utf8',
    'root',
    'Mot2passekitu'
);
?>