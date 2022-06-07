<?php include_once('header.php'); ?>
        <h1>Votre recette</h1>
        <form action="post_create.php" method="POST">
            <div class="mb-3">
                <label for="title" class="form-label">Titre de la recette</label>
                <input type="text" class="form-control" id="title" name="title">
                <div id="title-help" class="form-text">Soyez précis dans le titre.</div>
            </div>
            <div class="mb-3">
                <label for="recipe" class="form-label">Description de la recette</label>
                <textarea class="form-control" placeholder="Exprimez vous" id="recipe" name="recipe"></textarea>
            </div>
            <button type="submit" class="btn btn-primary">envoyer</button>     
        </form>
        <br />
    </div>

    <?php include_once('footer.php'); ?>
