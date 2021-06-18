<?php
session_start();
if (isset($_SESSION['prenom'])) { // isset permet de vérifier si une variable est présente et non nulle //on verifie si la session est démarrée
  $connexion = "Mon Compte"; //si elle est démarrée le menu Mon Compte est présent sur la page
  $url = "2-UserCo/dashboard.php?".$_SESSION['id'];
}
 else {
  $connexion = "Connexion"; //sinon c'est le menu de connexion qui est présent
  $url = "2-UserCo/index.php";
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
    
    <title>PostR Expert - Avis</title>

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
    <!-- Le header -->
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

              <li class="nav-item">
                <a class="nav-link" href="panier.php">Panier</a>
              </li>

              <li class="nav-item active">
                <a class="nav-link" href="panier.php">Avis</a>
              </li>
              <li class="nav-item active">
              <a class="nav-link2" href=<?php echo $url ?>> <?php echo $connexion ?> </a>
              </li>
            </ul>
          </div>
        </div>
      </nav>
    </header>

    <!-- début de la page ici -->
    <!-- la bannière fumée noir pour assombrir -->
    <div class="heading-page header-text">
      <section class="page-heading">
        <div class="container">
          <div class="row">
            <div class="col-lg-12">
              <div class="text-content">
                <h4>Avis</h4>
                <h2>Qu'avez vous pensé de nos Posters ?</h2>
              </div>
            </div>
          </div>
        </div>
      </section>
    </div>
    
    <!-- fin de bannière -->

    <!-- les commentaires drôles -->
    <div class="blog-posts">
      <div class="container">
        <div class="sidebar-item comments">
          <div class="content">
            <ul>
              <li>
                <div class="author-thumb">
                <img src="assets/images/commentaire.jpg" alt="">
                </div>
                <div class="right-content">
                <h4>Clement Perroune<span>25.03.2021</span></h4>
                <p>Je suis vraiment fan de ces Posters, j'en ai acheté un que j'ai collé au dessus de mon lit, à mon reveil la premiere chose que je vois c'est le cours de M2 en version Poster et j'adore !</p>
                </div>
              </li>
              <li>
                <div class="author-thumb">
                <img src="assets/images/commentaire.jpg" alt="">
                </div>
                <div class="right-content">
                <h4>Léo Galazzi<span>31.02.2021</span></h4>
                <p>J'ai acheté le poster de Sanji car j'aimais bien les formes de son visage et de ces sourcils, je le trouvais vraiment beau et réaliste, après coup j'ai décidé d'en recommander pour l'accrocher partout dans ma chambre, mais je me suis rendu compte que j'avais acheté tout les stocks </p>
                </div>
              </li>
              <li>
                <div class="author-thumb">
                <img src="assets/images/commentaire.jpg" alt="">
                </div>
                <div class="right-content">
                <h4>Evanne Brandier<span>20.12.2020</span></h4>
                <p>Déçu, nul, ne recommande absolument pas ce site, aucun poster de bière ou de bouteilles d'alcools, je vais faire une réclamation à l'auteur de ce site c'est moi que vous le dit..</p>
                </div>
              </li>

              <li>
                <div class="author-thumb">
                <img src="assets/images/commentaire.jpg" alt="">
                </div>
                <div class="right-content">
                  <h4>Rafael Chien<span>12.07.2020</span></h4>
                  <p>Arnaque ! J'ai acheté le poster en Metal pour essayer de miner du bitcoin mais je ne comprends pas cela ne marche pas, je demande immédiatement un remboursement.</p>
                </div>
              </li>
              <li>
                <div class="author-thumb">
                <img src="assets/images/commentaire.jpg" alt="">
                </div>
                <div class="right-content">
                  <h4>Artur Résistant<span>05.07.2020</span></h4>
                  <p>J'aime bien le design du poster de Luffy, étant un grand fan de One Pièce je l'ai accroché dans mon salon et je le regarde avant de lancer un nouvel épisode ! </p>
                </div>
              </li>
              <li>
                <div class="author-thumb">
                <img src="assets/images/commentaire.jpg" alt="">
                </div>
                <div class="right-content">
                  <h4>Stéphanie Perier<span>??.??.20??</span></h4>
                  <p>Grâce à mes connaissances de H4C3R, lors de mon achat je me suis retrouvé redirigé vers la page d'administration, je suis donc Super Admin ! </p>
                </div>
              </li>
            </ul>
          </div>
        </div>
        <!-- fin des commentaires -->
        <br>
        <br>
        <div class="row justify-content-md-center"> <!-- Prototype de commentaires !! NE MARCHE PAS !! -->
            <div class="col-md-3">
              <div class="main-button">
                <a href="#">Ajouter un commentaire !</a>
                <div class="content">

                      <form id="contact" action="" method="POST">
                        <div class="row">
                          <div class="col-md-6 col-sm-12">
                            <fieldset>
                              <input name="name" type="text" id="name" placeholder="Prénom et Nom" required>
                            </fieldset>
                          </div>
                          <div class="col-lg-12">
                            <fieldset>
                              <textarea name="message" rows="6" id="commentaire" placeholder="Ton Commentaire" required=></textarea>
                            </fieldset>
                          </div>
                        </div>
                      </form>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
      </div>
    </div>
    <!-- fin de page -->

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
<!-- Et voici donc mon avis.php -->
<!-- Merci d'avoir pris le temps d'étudier mon code :D -->