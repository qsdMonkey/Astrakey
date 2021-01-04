<?php
session_start();
try {
    $bdd = new PDO('mysql:host=localhost;dbname=astrakey', 'root', '');

} catch (Exception $e) {
    die('Error');
}


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <meta charset="UTF-8">
    <link rel="stylesheet" href="home.css">
    <title>Astrakey</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">


    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">


    <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/solid.js" integrity="sha384-tzzSw1/Vo+0N5UhStP3bvwWPq+uvzCMfrN1fEFe+xBmv1C/AtVX5K0uZtmcHitFZ" crossorigin="anonymous"></script>
    <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/fontawesome.js" integrity="sha384-6OIrr52G08NpOFSZdxxz1xdNSndlD4vdcf/q2myIUVO0VsqaGHJsB0RaBE01VTOY" crossorigin="anonymous"></script>

</head>
<body>

      <nav class="navbar navbar-expand-lg navbar-light navbar-custom">
          <div class="container-fluid">

              <button type="button" id="sidebarCollapse" class="navbar-btn">
                  <span></span>
                  <span></span>
                  <span></span>
              </button>
              <button class="btn btn-dark d-inline-block d-lg-none ml-auto" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                  <i class="fas fa-align-justify"></i>
              </button>

              <div class="collapse navbar-collapse" id="navbarSupportedContent">
                  <ul class="nav navbar-nav ml-auto">

                      <img src="./img/Logo.png" alt="logo" style="height: 70px" >
                      <img src="./img/Astrakey.png" alt="logo" style="height: 80px" >

                      <li class="nav-item active">
                          <a class="nav-link" href="home.php">Accueil</a>
                      </li>
                      <li class="nav-item">
                          <a class="nav-link" href="magasin.php">Magasin</a>
                      </li>
                      <li class="nav-item">
                          <a class="nav-link" href="panier.php">Panier</a>
                      </li>
                      <form class="form-inline">
                          <input class="form-control mr-sm-2 navbar-text" type="search" placeholder="Rechercher" aria-label="Rechercher">
                          <button class=" btn btn-outline-light my-2 my-sm-0 " type="submit">Rechercher</button>
                      </form>
                  </ul>
              </div>
          </div>
      </nav>

      <?php
// Création du panier si n'existe pas dans la session de l'utilisateur
session_start();
if (! isset($_SESSION['panier']))  $_SESSION['panier'] = array();

// Voici les données externes utilisées par le panier
$id_article   = isset($_GET['id_article'])   ? $_GET['id_article']   : null;
$nom_article  = isset($_GET['nom_article'])  ? $_GET['nom_article']  : null;
$prix_article = isset($_GET['prix_article']) ? $_GET['prix_article'] : '?';
$qte_article  = isset($_GET['qte_article'])  ? $_GET['qte_article']  : 1;

// Voici les traitements du panier
if ($id_article == null) echo 'Veuillez sélectionner un article pour le mettre dans le panier!'; // Message si pas d'acticle sélectionné
else
if (isset($_GET['ajouter'])){ // Ajouter un nouvel article
  $_SESSION['panier'][$id_article]['nom']  = $nom_article;
  $_SESSION['panier'][$id_article]['prix'] = $prix_article;
  $_SESSION['panier'][$id_article]['qte']  = $qte_article;
}
else if (isset($_GET['modifier']))  $_SESSION['panier'][$id_article]['qte'] = $qte_article; // Modifier la quantité achetée
else if (isset($_GET['supprimer']))  unset($_SESSION['panier'][$id_article]); // Supprimer un article du panier

// Voici l'affichage du panier
echo '<h2>Contenu de votre panier</h2><ul>';
if (isset($_SESSION['panier']) && count($_SESSION['panier'])>0){
  $total_panier = 0;
  foreach($_SESSION['panier'] as $id_article=>$article_acheté){
    // On affiche chaque ligne du panier : nom, prix et quantité modifiable + 2 boutons : modifier la qté et supprimer l'article
    if (isset($article_acheté['nom']) && isset($article_acheté['prix']) && isset($article_acheté['qte'])){
      echo '<li><form>', $article_acheté['nom'], ' (', number_format($article_acheté['prix'], 2, ',', ' '), ' €) ',
       '<input type="hidden" name="id_article" value="', $id_article , '" />
        <br />Qté: <input type="text" name="qte_article" value="', $article_acheté['qte'] , '" />
        <input type="submit" name="modifier" value="Nouvelle Qté" />
        <input type="submit" name="supprimer" value="Supprimer" />
      </form>
      </li>';

      // Calcule le prix total du panier
      $total_panier += $article_acheté['prix'] * $article_acheté['qte'];
    }
  }
  echo '<hr><h3>Total: ', number_format($total_panier, 2, ',', ' '), ' €'; // Affiche le total du panier
}
else { echo 'Votre panier est vide'; } // Message si le panier est vide
echo "</ul>";
?>



<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js" integrity="sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ" crossorigin="anonymous"></script>

<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js" integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm" crossorigin="anonymous"></script>



</body>
</html>
