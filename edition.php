<?php include_once('header.php');
include_once('connexion.php'); ?>

<?php

if (isset($_POST['recipe_id'])) {
    // déclaration des variables issues du formulaire
    $recipe_id = $_POST['recipe_id'];
    $title =  $_POST['title'];
    $recipe =  $_POST['recipe'];
}
    // 1ere methode
      

    // 2e methode
//     $req = $mysqlConnection->prepare('UPDATE recipes SET title= ?, recipe= ? WHERE recipe_id = ?');
//     $req->execute(array(
//         $title,
//         $recipe,
//         $recipe_id
//     ));
// }


?>

<h1>Votre recette à modifier</h1>
<h2>selectionner votre recette</h2>
<?php $recipes = $mysqlConnection->query('SELECT * from recipes'); ?>
<!-- création d'un select pour choisir la recette à modifier -->




<form action="edition.php" method="POST">
    <select name="recipe_id" id="recipe_id">
        <?php foreach ($recipes as $recipe) {  ?>
            <!-- en option du select, la value qui est l'id de la recette dans la BD -->
            <option value=<?php echo $recipe['recipe_id'] ?> name='recipe_id'><?php echo $recipe['title'] ?></option>
        <?php } ?>
    </select>

    <div class="mb-3">
        <label for="title" class="form-label">Titre modifié</label>
        <input type="text" class="form-control" id="title" name="title">
        <div id="title-help" class="form-text">Soyez précis dans le titre.</div>
    </div>
    <div class="mb-3">
        <label for="recipe" class="form-label">Recette modifiée</label>
        <textarea class="form-control" placeholder="Exprimez vous" id="recipe" name="recipe"></textarea>
    </div>
    <button type="submit" class="btn btn-primary">envoyer</button>
</form>
<br />
</div>

<?php include_once('footer.php'); ?>