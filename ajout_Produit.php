<?php

  include("config/fonctions.php");

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ajouter un produit</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
</head>
<body>

<nav class="navbar navbar-dark bg-primary">
 <div class="container-fluid">
    <a class="navbar-brand" href="index.php">GameX-Zone</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">Accueil</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" href="#">Administrateur</a>
        </li>
      </ul>
    </div>
  </div>
</nav>

<div class="container-fluid">
<div class="row">
    <div class="col-md-2"></div>
    <div class="col-md-8">

    <br>

    <h1>Ajouter un produit :</h1>

    <br>



<form method="post" action="">
  <div class="mb-3">

    <label for="name" class="form-label">titre de l'image :</label>
    <input type="name" class="form-control" name="photo" required>

  </div>

  <div class="mb-3">

<label for="firstname" class="form-label">Nom du produit :</label>
<input type="text" class="form-control" name="nom" required>

</div>

  <div class="mb-3">
    <label for="prix" class="form-label">Prix :</label>
    <input type="number" class="form-control" name="prix" required>
  </div>

  <div class="mb-3">
    <label for="descriptions" class="form-label">Description du produit :</label>
    <textarea class="form-control" name="descriptions" required></textarea>
  </div>


  <button type="submit" class="btn btn-primary" name="envoyer" value="Envoyer">Ajouter un nouveau produit</button>
</form>
    
</div>
</div>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-kjU+l4N0Yf4ZOJErLsIcvOU2qSb74wXpOhqTvwVx3OElZRweTnQ6d31fXEoRD1Jy" crossorigin="anonymous"></script>
</body>
</html>


<?php

if(isset($_POST['envoyer']))
{
  if(isset($_POST['photo']) AND isset($_POST['nom']) AND isset($_POST['prix']) AND isset($_POST['descriptions']))
  {
    if(!empty($_POST['photo']) AND !empty($_POST['nom']) AND !empty($_POST['prix']) AND !empty($_POST['descriptions']))
    {

      $photo = htmlspecialchars($_POST['photo']);
      $nom = htmlspecialchars($_POST['nom']);
      $prix = htmlspecialchars($_POST['prix']);
      $descriptions = htmlspecialchars($_POST['descriptions']);

      try
      {
        ajouterProduits($photo, $nom, $prix, $descriptions);
      }
      catch (Exception $e)
      {
        $e->getMessage();
      }

    }

  }
}

?>