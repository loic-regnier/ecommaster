<?php


function getAdmin($email, $motdepasse){

    if(require("connexion.php")){
  
      $req = $bdd->prepare("SELECT * FROM admin WHERE id=33");
  
      $req->execute();
  
      if($req->rowCount() == 1){
        
        $data = $req->fetchAll(PDO::FETCH_OBJ);
  
        foreach($data as $i){
          $mail = $i->email;
          $mdp = $i->motdepasse;
        }
  
        if($mail == $email AND $mdp == $motdepasse)
        {
          return $data;
        }
        else{
            return false;
        }
  
      }
  
    }
  
  }

function ajouterProduits($photo, $nom, $prix, $descriptions){
    if(require("connexion.php"))
    {
        $requete = $bdd->prepare("INSERT INTO produits (photo, nom, prix, descriptions) VALUES (?,?,?,?)");
        $requete->execute(array($photo, $nom, $prix, $descriptions));

        $requete->closeCursor();
    }else{
        echo "La fonction n'a pas pu se connecter à la BDD";
    }
}

function afficherProduits(){
    if(require("connexion.php"))
    {
        $requete = $bdd->prepare("SELECT * FROM produits ORDER BY id DESC");
        $requete->execute();

        $data = $requete->fetchAll(PDO::FETCH_OBJ);
        return $data;
        $requete->closeCursor();
    }else{
        echo "La fonction n'a pas pu se connecter à la BDD";
    }
}

function supprimerProduits($id){
    if(require("connexion.php"))
    {
        $requete = $bdd->prepare("DELETE FROM produits WHERE id = ?");
        $requete->execute(array($id));
        $requete->closeCursor();
    }else{
        echo "La fonction n'a pas pu se connecter à la BDD";
    }
}


function modifierProduits($id, $photo, $nom, $prix, $descriptions){
    if(require("connexion.php"))
    {
        $requete = $bdd->prepare("UPDATE produits SET photo=?, nom=?, prix=?, descriptions = ? WHERE id=?");
        $requete->execute(array($photo, $nom, $prix, $descriptions, $id));

        $requete->closeCursor();
    }else{
        echo "La fonction n'a pas pu se connecter à la BDD";
    }
}


?>
