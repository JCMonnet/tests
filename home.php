<?php session_start(); ?>
<?php include_once('header.php'); ?>
<!-- Inclusion du formulaire de connexion -->
<?php include_once('login.php'); ?>

<?php include_once('connexion.php');?>

<!-- Si l'utilisateur existe, on affiche les recettes -->
<?php if (isset($_SESSION['LOGGED_USER'])) : ?>
    <!-- <?php foreach ($recipes as $recipe) : ?>
        <article>
            <h3><?php echo $recipe['title']; ?></h3>
            <div><?php echo $recipe['recipe']; ?></div>
            <i><?php echo displayAuthor($recipe['author'], $users); ?></i>
        </article>
    <?php endforeach ?> -->
    
    <!-- variable $recipes qui pointe vers dbeaver, table recipe, et query pour lancer la requete "ttes les recettes" -->
   <?php $recipes = $mysqlConnection -> query('SELECT * from recipes');?>
   <?php foreach ($recipes as $recipe) : ?>
        <article>
            <h3><?php echo $recipe['title']; ?></h3>
            <div><?php echo $recipe['recipe']; ?></div>
            <i><?php echo displayAuthor($recipe['author'], $users); ?></i>
        </article>
        <?php endforeach ?>
<?php endif; ?>
</div>
<?php include_once('footer.php'); ?>
