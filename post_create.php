<?php session_start(); ?>
<?php include_once('header.php'); ?>

<?php include_once('connexion.php');?>
<?php include_once('variable.php'); ?>

<!--  verification du formulaire soumis -->
<?php 
if (!isset($_POST ['title']) || !isset($_POST ['recipe'])) {
    echo 'il faut un titre et une recette pour soumettre le formulaire';
    return;
}

$title = $_POST['title'];
$recipe = $_POST['recipe'];

// faire l'insetion en base
$insertRecipe = $mysqlConnection->prepare('INSERT INTO recipes(title,recipe,author, is_enabled) VALUES (:title, :recipe, :author, :is_enabled)');
$insertRecipe->execute([
    'title' => $title,
    'recipe' => $recipe,
    'is_enabled' =>1,
    'author' =>  $_SESSION['LOGGED_USER'],
]);

// $_SESSION['message']='votre recette a bien été ajoutée';
echo 'Votre recette a été ajoutée';
include_once('create.php');
