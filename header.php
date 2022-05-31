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
    <h1>Site de Recettes !</h1>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
      <div class="container-fluid">
        <a class="navbar-brand" href="index.php">Site de recettes</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav me-auto mb-2 mb-lg-0">

            <?php
            // N'affiche le lien que si ce n'est pas la page active
            if (getLocation() !== '/home.php') {

              echo ' <li class="nav-item"> <a class="nav-link" href="home.php">Home</a>  </li>';
            } ?>


            <?php
            // N'affiche le lien que si ce n'est pas la page active
            if (getLocation() !== '/contact.php') {

              echo '  <li class="nav-item"> <a class="nav-link" href="contact.php">Contact</a>  </li>';
            } ?>

            <li class="nav-item">
              <a class="nav-link" href="deconnexion.php">Se déconnecter</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
    <?php if (isset($_SESSION['LOGGED_USER'])) {

      echo $_SESSION['LOGGED_USER'];
    }
    ?>