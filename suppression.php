<?php include_once('header.php');
include_once('connexion.php'); 
?>

<?php

if (isset($_POST['recipe_id'])) {
    // déclaration des variables issues du formulaire
    $recipe_id = $_POST['recipe_id'];
   


    $req = $mysqlConnection->prepare('DELETE FROM recipes WHERE recipe_id = ?');
    $req->execute(array(
        
        $recipe_id
    ));
}
?>

<h2>selectionner votre recette à supprimer</h2>
<?php $recipes = $mysqlConnection->query('SELECT * from recipes'); ?>
<!-- création d'un select pour choisir la recette à modifier -->


<form action="" method="POST">
    <select name="recipe_id" id="recipe_id">
        <?php foreach ($recipes as $recipe) {  ?>
            <!-- en option du select, la value qui est l'id de la recette dans la BD -->
            <option value=<?php echo $recipe['recipe_id'] ?> name='recipe_id'><?php echo $recipe['title'] ?></option>
        <?php } ?>
    </select>
    
    <button type="submit" class="btn btn-primary">supprimer</button>
    <?php echo 'votre recette a bien été supprimée'?>
</form>
<br />
</div>

<?php include_once('footer.php'); ?>
