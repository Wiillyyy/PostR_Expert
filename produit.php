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

?>

<!DOCTYPE html>
<html lang="fr">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i&display=swap" rel="stylesheet">
    
    <title>PostR Expert - Prdouits</title>

    <!-- Script Java POSTR animé (ne marche pas) -->
    <script type="text/javascript"></script>
	<script src="https://unpkg.com/typewriter-effect@2.3.1/dist/core.js"></script>
	<script src="java.js"></script>
    <link rel="icon" type="image/png" href="/assets/logo/posterexpertlogo.png">

    <!-- Fichier Bootstrap (banque d'images/logos de couelur) CSS -->
    <link href="assets/css/banque.css" rel="stylesheet">


    <!-- Fichier CSS principaux -->
    <link rel="stylesheet" href="assets/css/style.css">
  </head>

  <body>

    <!-- ***** Preloader Start ***** -->
    <div id="preloader">
        <div class="jumper">
            <div></div>
            <div></div>
            <div></div>
        </div>
    </div>  
    <!-- ***** Preloader End ***** -->

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
              <li class="nav-item active">
                <a class="nav-link" href="products.html">Produits</a>
              </li>

              <li class="nav-item">
                <a class="nav-link" href="panier.php">Panier</a>
              </li>
              </li>
              <li class="nav-item">
              <a class="nav-link2" href=<?php echo $url ?>> <?php echo $connexion ?> </a> <!--- On installe la fonction qui remplace connexion par mon compte SI SESSION --->
              </li>
            </ul>
          </div>
        </div>
      </nav>
    </header>

    <!-- Page Content -->
    <!-- Banner Starts Here -->
    <div class="heading-page header-text">
      <section class="page-heading">
        <div class="container">
          <div class="row">
            <div class="col-lg-12">
              <div class="text-content">
                <h4>Produits</h4>
                <h2>Choisissez le meilleur poster en fonction de vos goûts</h2>
              </div>
            </div>
          </div>
        </div>
      </section>
    </div>
    
    <!-- Banner Ends Here -->

    <section class="blog-posts grid-system">
      <div class="container">
        <div class="all-blog-posts">
          <div class="row">
            <div class="col-md-4 col-sm-6">
              <div class="blog-post">
                <div class="blog-thumb">
                  <img src="assets/images/produit-1.png" alt="">
                </div>
                <div class="down-content">
                  <span>19,99€</span>
                  <a href="produitdetail.php"><h4>Poster héro de dessin animés : Monkey D. Luffy</h4></a>
                  <p><?php print ($texte[1]); ?></p>
                  <div class="post-options">
                    <div class="row">
                      <div class="col-lg-12">
                        <ul class="post-tags">
                          <li><i class="fa fa-bullseye"></i></li>
                          <li><a href="produitdetail.php">Voir le produit</a></li>
                        </ul>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-4 col-sm-6">
              <div class="blog-post">
                <div class="blog-thumb">
                  <img src="assets/images/produit-2.png" alt="">
                </div>
                <div class="down-content">
                  <span>19,99€</span>
                  <a href="produitdetail.php"><h4>Poster de Grande ville : New York sous les rayons de soleil</h4></a>
                  <p><?php print ($texte[2]); ?></p>
                  <div class="post-options">
                    <div class="row">
                      <div class="col-lg-12">
                        <ul class="post-tags">
                          <li><i class="fa fa-bullseye"></i></li>
                          <li><a href="produitdetail.php">Voir le produit</a></li>
                        </ul>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-4 col-sm-6">
              <div class="blog-post">
                <div class="blog-thumb">
                  <img src="assets/images/produit-3.png" alt="">
                </div>
                <div class="down-content">
                  <span>19,99€</span>
                  <a href="produitdetail.php"><h4>Poster de Films à grand budget : Stranger Things</h4></a>
                  <p><?php print ($texte[3]); ?></p>
                  <div class="post-options">
                    <div class="row">
                      <div class="col-lg-12">
                        <ul class="post-tags">
                          <li><i class="fa fa-bullseye"></i></li>
                          <li><a href="produitdetail.php">Voir le produit</a></li>
                        </ul>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-4 col-sm-6">
              <div class="blog-post">
                <div class="blog-thumb">
                  <img src="assets/images/produit-4.png" alt="">
                </div>
                <div class="down-content">
                  <span>19,99€</span>
                  <a href="produitdetail.php"><h4>Poster Lieu de Tourisme d'été : Lac d'Annecy</h4></a>
                  <p><?php print ($texte[4]); ?></p>
                  <div class="post-options">
                    <div class="row">
                      <div class="col-lg-12">
                        <ul class="post-tags">
                          <li><i class="fa fa-bullseye"></i></li>
                          <li><a href="produitdetail.php">Voir le produit</a></li>
                        </ul>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-4 col-sm-6">
              <div class="blog-post">
                <div class="blog-thumb">
                  <img src="assets/images/produit-5.png" alt="">
                </div>
                <div class="down-content">
                  <span>19,99€</span>
                  <a href="produitdetail.php"><h4>Poster Jeux Vidéo : Super Mario Bros 3</h4></a>
                  <p><?php print ($texte[5]); ?></p>
                  <div class="post-options">
                    <div class="row">
                      <div class="col-lg-12">
                        <ul class="post-tags">
                          <li><i class="fa fa-bullseye"></i></li>
                          <li><a href="produitdetail.php">Voir le produit</a></li>
                        </ul>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-4 col-sm-6">
              <div class="blog-post">
                <div class="blog-thumb">
                  <img src="assets/images/produit-6.png" alt="">
                </div>
                <div class="down-content">
                  <span>19,99€</span>
                  <a href="produitdetail.php"><h4>Poster Musique Metal : Groupe de musique </h4></a>
                  <p><?php print ($texte[6]); ?></p>
                  <div class="post-options">
                    <div class="row">
                      <div class="col-lg-12">
                        <ul class="post-tags">
                          <li><i class="fa fa-bullseye"></i></li>
                          <li><a href="produitdetail.php">Voir le produit</a></li>
                        </ul>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

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
                </a>
              </p>
            </div>
          </div>
        </div>
      </div>
    </footer>

  </body>
</html>
<!-- Et voici donc mon produit.php -->
<!-- Merci d'avoir pris le temps d'étudier mon code :D -->