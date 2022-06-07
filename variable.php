<?php

// Récupération des variables à l'aide du client MySQL
$usersStatement = $mysqlConnection->prepare('SELECT * FROM users');
$usersStatement->execute();
$users = $usersStatement->fetchAll();

$recipesStatement = $mysqlConnection->prepare('SELECT * FROM recipes WHERE is_enabled is TRUE');
$recipesStatement->execute();
$recipes = $recipesStatement->fetchAll();

if(isset($_GET['limit']) && is_numeric($_GET['limit'])) {
    $limit = (int) $_GET['limit'];
} else {
    $limit = 100;
}
