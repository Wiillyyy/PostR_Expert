<?php
session_start();
require_once("assets/pgSQL.php");  // pour inserer les infos des poster précédemments crées


if (isset($_SESSION['prenom'])) { // isset permet de vérifier si une variable est présente et non nulle //on verifie si la session est démarrée
  $connexion = "Mon Compte"; //si elle est démarrée le menu Mon Compte est présent sur la page
  $url = "2-UserCo/dashboard.php?".$_SESSION['id'];
}
 else {
  $connexion = "Connexion"; //sinon c'est le menu de connexion qui est présent
  $url = "2-UserCo/index.php";
}

if (isset($_SESSION['prenom'])) { // isset permet de vérifier si une variable est présente et non nulle //on verifie si la session est démarrée
     $panier = "Faites chauffer la CB !";
}
else {
     $panier = "Un peu vide par ici... Connectez vous !"; //sinon c'est le menu de connexion qui est présent
}

?>

<!DOCTYPE html>
<html lang="fr">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i&display=swap" rel="stylesheet">
    
    <title>PostR Expert - Panier</title>

    <!-- Script Java POSTR animé (ne marche pas) -->
    <script type="text/javascript"></script>
	<script src="https://unpkg.com/typewriter-effect@2.3.1/dist/core.js"></script>
	<script src="java.js"></script>
    <link rel="icon" type="image/png" href="/assets/logo/posterexpertlogo.png">

    <!-- (banque d'images/logos de couelur) CSS -->
    <link href="assets/css/banque.css" rel="stylesheet">


    <!-- Fichier CSS principaux -->
    <link rel="stylesheet" href="assets/css/style.css">
  </head>

  <body>

    <!-- Header -->
    <header class="">
      <nav class="navbar navbar-expand-lg">
        <div class="container">
          <a class="navbar-brand" href="index.php"><h2>Post<span style="color: #f48840">R</span> Expert<em>.</em></h2></a>
          <div id="app"><h3>ㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤ ㅤㅤㅤ</h3></div>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav ml-auto">
              <li class="nav-item">
                <a class="nav-link" href="index.php">Menu
                </a>
              </li> 
              <li class="nav-item">
                <a class="nav-link" href="produit.php">Produits</a>
              </li>

              <li class="nav-item active">
                <a class="nav-link" href="panier.php">Panier</a>
              </li>

 
              </li>
              <li class="nav-item">
              <a class="nav-link2" href=<?php echo $url ?>> <?php echo $connexion ?> </a>
              </li>
            </ul>
          </div>
        </div>
      </nav>
    </header>


    <div class="heading-page header-text">
      <section class="page-heading">
        <div class="container">
          <div class="row">
            <div class="col-lg-12">
              <div class="text-content">
                <h4>Panier</h4>
                <h2><?php echo $panier ?></h2>
              </div>
            </div>
          </div>
        </div>
      </section>
    </div>
    <!-- le footer a la fin qui contient mes liens et les dernières infos -->
    <footer>
      <div class="container">
        <div class="row">
          <div class="col-lg-12">
            <ul class="social-icons">
            <li><a href="https://willydev.xyz/">Mon Site</a></li>
              <li><a href="https://twitter.com/willy_appl">Twitter</a></li>
              <li><a href="https://github.com/Wiillyyy/PostR_Expert">Repo du Site</a></li>
              <li><a href="https://fr.linkedin.com/in/william-zlojo-a1b115201">Linkedin</a></li>
             </ul>
           </div>
           <div class="col-lg-12">
             <div class="copyright-text">
               <p>
                 Copyright © William 2021 • Codé avec le ❤️
               </p>
              </p>
            </div>
          </div>
        </div>
      </div>
    </footer>
  </body>
</html>
<!-- Et voici donc mon panier.php -->
<!-- Merci d'avoir pris le temps d'étudier mon code :D -->