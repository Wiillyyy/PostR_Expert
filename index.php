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

  $dir = 'assets/random';
  // Script qui permet de séléctionner aléatoirement des photos parmis un répertoire
  $imgs_arr = array();
  // Vérifie si le dossier existe
  if (file_exists($dir) && is_dir($dir) ) {
    
      // Prends les fichiers depuis le Dossier 'images'
      $dir_arr = scandir($dir);
      $arr_files = array_diff($dir_arr, array('.','..') );
      foreach ($arr_files as $file) {
        //Trouve le file path
        $file_path = $dir."/".$file;
        // Prends l'extension, donc doit être obligatoirement de format (jpg png JPG PNG)
        $ext = pathinfo($file_path, PATHINFO_EXTENSION);
        if ($ext=="jpg" || $ext=="png" || $ext=="JPG" || $ext=="PNG") {
          array_push($imgs_arr, $file);
        }
        
      }
      $count_img_index = count($imgs_arr) - 1;                // J'ai remarqué qu'avec une seule fonct. la même image était répétée en boucle, donc pour que  
      $random_img = $imgs_arr[rand( 2, $count_img_index )];   // chaque image soit différente j'ai changé l'ordre de comptage
      $random_img2 = $imgs_arr[rand( 1, $count_img_index )];
      $random_img3 = $imgs_arr[rand( 0, $count_img_index )];
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
    
    <title>PostR Expert - Menu</title>

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

    <!-- le Header (contient la navbar) -->
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
              <li class="nav-item active">
                <a class="nav-link" href="index.php">Menu
                </a>
              </li> 
              <li class="nav-item">
                <a class="nav-link" href="produit.php">Produits</a>
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
    <!-- fin du header-->

    <!-- Contenu de la page Web a partir de maintenant -->

    <!-- la Banner commence ici   -->
    <div class="main-banner header-text">
      <div class="container-fluid">
        <div class="owl-banner owl-carousel">
          <div class="item">
            
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Banner fini ici -->

    <!-- la section avec les 3 images random -->
    <section class="blog-posts grid-system">
      <div class="container">
        <div class="all-blog-posts">
          <h2 class="text-center">Selection Aléatoire</h2>
          <br>
          <div class="row">
            <div class="col-md-4 col-sm-6">
              <div class="blog-post">
                <div class="blog-thumb">
                  <img src= "<?php echo $dir."/".$random_img ?>" alt="Random 1" /> <!--random image 1 -->
                </div>
                <div class="down-content">
                  <span> 19.99 € </span>
                  <a href="produit.php"><h4>Voici le premier poster qui a été aléatoirement choisi pour vous ! </h4></a>
                  <p>Il est important de se laisser tenter par différents produits d'un site web.</p>
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
                  <img src="<?php echo $dir."/".$random_img2 ?>" alt="Random 2" /> <!--random image 2 -->
                </div>
                <div class="down-content">
                  <span> 19.99 € </span>
                  <a href="produit.php"><h4>Et voici le deuxième choisi spécialement pour vous !</h4></a>
                  <p>Voici un exemple parfait de poster qui sont choisis aléatoirement pour cibler le plus de gens.</p>
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
                  <img src="<?php echo $dir."/".$random_img3 ?>" alt="Random 3" /> <!--random image 3 -->
                </div>
                <div class="down-content">
                  <span> 19.99 € </span>
                  <a href="produit.php"><h4>Et comme nous ne sommes pas des radins, encore un autre. </h4></a>
                  <p>Car il est important de laisser un vaste choix au consommateur.</p>
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
    <!-- se termine ici -->

     <!--petite section pour la page contact -->
    <section class="call-to-action">
      <div class="container">
        <div class="row">
          <div class="col-lg-12">
            <div class="main-content">
              <div class="row">
                <div class="col-lg-8">
                  <span>Une question ? Une envie particulière ?</span>
                </div>
                <div class="col-lg-4">
                  <div class="main-button">
                    <a href="contact.php">Me contacter</a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!--petite section finie -->

     <!-- quelques commentaires assez drôles -->
    <div class="blog-posts">
      <div class="container">
        <div class="sidebar-item comments">
            <h2 class="text-center">Commentaires</h2>
          <br>
          <br>
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
            </ul>
          </div>
        <!-- se terminant ici -->
          <br>
          <br>
        <!-- la suite des commentaires juste ici -->
          <div class="row justify-content-md-center">
            <div class="col-md-3">
              <div class="main-button">
                <a href="avis.php">Voir plus de commentaires</a>
              </div>
            </div>
          </div>
        </div>
      </div>
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
            </div>
          </div>
        </div>
      </div>
    </footer>
  </body>
</html>
<!-- Et voici donc mon index.php -->
<!-- Merci d'avoir pris le temps d'étudier mon code :D -->