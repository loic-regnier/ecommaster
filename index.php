<?php
include "config/fonctions.php";

$produits = afficherProduits();


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GameX-Zone</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
</head>
<body>

<!-- bar de naviguation -->

<nav class="navbar navbar-dark bg-primary">
 <div class="container-fluid">
    <a class="navbar-brand" href="#">GameX-Zone</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="index.php">Accueil</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" href="login.php">Se connecter</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" href="admin\index.php">Administrateur</a>
        </li>
      </ul>
    </div>
  </div>
</nav>

<br>

<div class="container">

<div class="row d-flex">

<?php foreach ($produits as $produit): ?>

      <div class="col col-md-4 pt-3">
        <div class="card" style="width: 18rem;">
        <img src="<?= $produit->photo ?>" class="card-img-top" alt="...">
        <div class="card-body">
            <h5 class="card-title"><?= $produit->nom ?></h5>
            <h6 class="card-title"><?= $produit->prix ?>€</h6>
            <p class="card-text"><?= $produit->descriptions ?></p>
            <a href="#" class="btn btn-primary">Commander</a>
        </div>
    </div>
    </div>

<?php endforeach; ?>

    </div>

</div>



<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-kjU+l4N0Yf4ZOJErLsIcvOU2qSb74wXpOhqTvwVx3OElZRweTnQ6d31fXEoRD1Jy" crossorigin="anonymous"></script>
</body>
</html>