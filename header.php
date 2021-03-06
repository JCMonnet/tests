<!DOCTYPE html>
<html>

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Site de Recettes - Page d'accueil</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body class="d-flex flex-column min-vh-100">
  <?php include_once('variables.php'); ?>
  <?php include_once('functions.php'); ?>
  <!-- header.php -->


  <!-- Navigation -->
  <div class="container">
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
      <div class="container-fluid">
        <a class="navbar-brand" href="index.php">Site de recettes</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li class="nav-item"> <a class="nav-link" href="home.php">Home</a>  </li>
            <li class="nav-item"> <a class="nav-link" href="contact.php">Contact</a>  </li>
            <li class="nav-item">
            <li class="nav-item"> <a class="nav-link" href="create.php">Ajouter une recette</a>  </li>
            <li class="nav-item"> <a class="nav-link" href="edition.php">Modifier une recette</a>  </li>
            <li class="nav-item"> <a class="nav-link" href="suppression.php">Supprimer une recette</a>  </li>
            <a class="nav-link" href="deconnexion.php">Se déconnecter</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
   