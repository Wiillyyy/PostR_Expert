<?php
session_start();
require_once("assets/pgSQL.php");

	$menuID=1; // forcé à 1 au départ

	if (isset($_GET['id'])) {
		$menuID = $_GET['id'];
	  } else {
		$menuID = 1;
	  }

    if (isset($_SESSION['prenom'])) { // isset permet de vérifier si une variable est présente et non nulle //on verifie si la session est démarrée
      $connexion = "Mon Compte"; //si elle est démarrée le menu Mon Compte est présent sur la page
      $url = "2-UserCo/dashboard.php?".$_SESSION['id'];
      $commander = "2-UserCo/dashboard.php?".$_SESSION['id'];
    }
     else {
      $connexion = "Connexion"; //sinon c'est le menu de connexion qui est présent
      $url = "2-UserCo/index.php";
      $commander = "2-UserCo/index.php";
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
    
    <title>PostR Expert - D. Prdouits</title>

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

    <!-- Header et navbar -->
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
                <a class="nav-link" href="produit.php">Produits</a>
              </li>

              <li class="nav-item">
                <a class="nav-link" href="panier.php">Panier</a>

              <li class="nav-item">
              <a class="nav-link2" href=<?php echo $url ?>> <?php echo $connexion ?> </a> <!--- On installe la fonction qui remplace connexion par mon compte SI SESSION --->
              </li>
            </ul>
          </div>
        </div>
      </nav>
    </header>

    <!-- contenu de la page -->
    <!-- la bannière fumée -->
    <div class="heading-page header-text">
      <section class="page-heading">
        <div class="container">
          <div class="row">
            <div class="col-lg-12">
              <div class="text-content">
                <h4>19.99€</h4>
                <h2>Voyez dans le détail nos posters.</h2>
              </div>
            </div>
          </div>
        </div>
      </section>
    </div>
    
    <!-- Banière se termine ici -->

    
    <section class="blog-posts grid-system">
      <div class="container">
        <div class="row">
          <div class="col-md-7">
            <div>
            <img src="<?php print ($imageArr[$menuID]); ?>" alt="" class="img-fluid"></a>  <!-- Image en grand qui change en fonction du menuID --> 
            </div>

            <br>

            <div class="row">
              <div class="col-sm-4 col-6">
                <div><a href="produitdetail.php?id=1">
                  <img src="assets/images/produit-1.png" alt="" class="img-fluid"></a>
                </div>
                <br>
              </div>
              <div class="col-sm-4 col-6">
                <div><a href="produitdetail.php?id=2">
                  <img src="assets/images/produit-2.png" alt="" class="img-fluid"></a>
                </div>
                <br>
              </div>
              <div class="col-sm-4 col-6">
                <div><a href="produitdetail.php?id=3">
                  <img src="assets/images/produit-3.png" alt="" class="img-fluid"></a>
                </div>
                <br>
              </div>

              <div class="col-sm-4 col-6">
                <div><a href="produitdetail.php?id=4">
                  <img src="assets/images/produit-4.png" alt="" class="img-fluid"></a>
                </div>
                <br>
              </div>
              <div class="col-sm-4 col-6">
                <div><a href="produitdetail.php?id=5">
                  <img src="assets/images/produit-5.png" alt="" class="img-fluid"></a>
                </div>
                <br>
              </div>
              <div class="col-sm-4 col-6">
              <div><a href="produitdetail.php?id=6">
              <img src="assets/images/produit-6.png" alt="" class="img-fluid"></a>
              </div>
                <br>
              </div>
            </div>

            <br>
          </div>

          <div class="col-md-5">
            <div class="sidebar-item recent-posts">
              <div class="sidebar-heading">
                <h2>information produit</h2>
              </div>

              <div class="content">
                <p><?php print ($texte[$menuID]); ?></p>  <!-- INFORMATION PRODUIT qui change en fonction de menuID--> 
              </div>
            </div>

            <br>
            <br>
          
            <div class="contact-us">
              <div class="sidebar-item contact-form">
                <div class="sidebar-heading">
                  <h2>Ajouter au panier</h2>
                </div>

                <div class="content">
                  <form id="quantité" action="" method="GET"> <!-- liste déroulante pour choisir montant--> 
                    <div class="row">
                      <div class="col-md-6 col-sm-12">
                        <fieldset>
                          <label for="">Quantité</label>
                          <select>
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                            <option value="4">4</option>
                            <option value="5">5</option>
                            <option value="6">6</option>
                            <option value="7">7</option>
                            <option value="8">8</option>
                            <option value="9">9</option>
                            <option value="10">10</option>
                          </select>
                        </fieldset>
                      </div>
                    </div>

                    <div class="row">
                      <div class="col-md-6 col-sm-12">

                      </div>
                      <div class="col-lg-12">
                        <fieldset>
                          <button type="submit" id="form-submit" class="main-button" href="<?php $commander ?>">Commander</button>
                        </fieldset>
                      </div>
                    </div>
                  </form>
                </div>
              </div>
            </div>

            <br>
          </div>
        </div>
      </div>
    </section>

    <div class="section contact-us">
      <div class="container">
        <div class="sidebar-item recent-posts">
          <div class="sidebar-heading">
            <h2>Description</h2>
          </div>

          <div class="content">
          <p><?php print ($info[$menuID]); ?></p> <!-- DESCRIPTION PRODUIT qui change en fonction de menuID-->
          </div>

          <br>
          <br>
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
              </p>
            </div>
          </div>
        </div>
      </div>
    </footer>
  </body>
</html>
<!-- Et voici donc mon produitdetail.php -->
<!-- Merci d'avoir pris le temps d'étudier mon code :D -->