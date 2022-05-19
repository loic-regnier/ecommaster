
<?php
session_start();

require("../config/fonctions.php");

if(!isset($_SESSION['admin']))
{
    header("Location: ../login.php");
}

if(empty($_SESSION['admin']))
{
    header("Location: ../login.php");
}

?>

 
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
</head>
<body>



<<style>
        .vertical-nav {
            position: fixed;
            top: 0px;
            left: 0;
            width: 200px;
            height: 100%;
            font-weight: bold;
            background-color: #1a1106;
            overflow-y: auto;
            padding-top: 30px
            }

    </style>

    

<!-- Vertical navbar -->

<div class="vertical-nav bg-white" id="sidebar">
  <div class="py-4 px-3 mb-4 bg-light">
    <div class="media d-flex align-items-center">
      <div class="media-body">
        <h4 class="m-0">GameX-Zone</h4>
        <p class="font-weight-light text-muted mb-0">administrateur</p>
      </div>
    </div>
  </div>

  

  <ul class="nav flex-column bg-white mb-0">
    <li class="nav-item">
      <a href="index.php" class="nav-link text-dark font-italic bg-light">
                <i class="fa fa-th-large mr-3 text-primary fa-fw"></i>
                Accueil
            </a>
    </li>
    <li class="nav-item">
      <a href="ajout_Produit.php" class="nav-link text-dark font-italic">
                <i class="fa fa-address-card mr-3 text-primary fa-fw"></i>
                Ajouter un produit
            </a>
    </li>
  </ul>
</div>


<!-- tableau admin -->

<div class="container-fluid">
<div class="row">
    <div class="col-md-2"></div>
    <div class="col-md-8">


<h1>Bienvenue administrateur !</h1>

<table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Nom</th>
      <th scope="col">Prénom</th>
      <th scope="col">E-mail</th>
    </tr>
  </thead>
  <tbody class="table-group-divider">
    <tr>
      <th scope="row">1</th>
      <td>Loïc</td>
      <td>Régnier</td>
      <td>loic@admin.com</td>
    </tr>
  </tbody>
 </table>
</div>

</div>


<br>

<br>


<!-- tableau utlisateurs -->

<div class="container-fluid">
<div class="row">
    <div class="col-md-2"></div>
    <div class="col-md-8">


<h1>Listes utilisateurs :</h1>

<table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Nom</th>
      <th scope="col">Prénom</th>
      <th scope="col">E-mail</th>
    </tr>
  </thead>
  <tbody class="table-group-divider">
    <tr>
      <th scope="row">1</th>
      <td>Loïc</td>
      <td>Régnier</td>
      <td>loic@admin.com</td>
    </tr>
  </tbody>
 </table>
</div>


</div>




<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-kjU+l4N0Yf4ZOJErLsIcvOU2qSb74wXpOhqTvwVx3OElZRweTnQ6d31fXEoRD1Jy" crossorigin="anonymous"></script>
</body>
</html>


<?php

if(isset($_POST['envoyer'])){
    if(!empty($_POST['email']) AND !empty($_POST['nom']) AND !empty($_POST['prenom']) AND !empty($_POST['age']))
    {
        $email = $_POST['email'];
        $nom = $_POST['nom'];
        $prenom = $_POST['prenom'];
        $age = $_POST['age'];

        ajouter($email, $nom, $prenom, $age);
    }

}

?>