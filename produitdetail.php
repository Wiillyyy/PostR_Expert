<?php
	$menuID=1; // forcé à 1 au départ

	if (isset($_GET['id'])) {
		$menuID = $_GET['id'];
	  } else {
		$menuID = 1;
	  }

	// doit afficher la valeur du paramètre reçu 
	echo "Numéro du menu : ".$menuID;

  $image1 = echo "<img src='assets/random/produit-1.png'>";
  $image2 = echo "<img src='image_path'>";

?>

<!DOCTYPE html>
<html lang="fr">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i&display=swap" rel="stylesheet">

    <title>PostR Expert - Détail</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link rel="icon" type="image/png" href="/assets/logo/posterexpertlogo.png">


    <!-- Additional CSS Files -->
    <link rel="stylesheet" href="assets/css/fontawesome.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/owl.css">

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
                <a class="nav-link" href="produit.php">Produits</a>
              </li>

              <li class="nav-item">
                <a class="nav-link" href="panier.php">Panier</a>

              <li class="nav-item">
                <a class="nav-link2" href="2-UserCo/index.php">Connexion</a>
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
                <h4>19.99€</h4>
                <h2>Lorem ipsum dolor sit amet.</h2>
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
              <img src="<?php echo $image1 ?>" alt="" class="img-fluid wc-image">
            </div>

            <br>

            <div class="row">
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
              <div class="col-sm-4 col-6">
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
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sed velit eveniet quibusdam animi eos, cum! Alias, dicta. Minima repudiandae sequi iste, nostrum! Neque temporibus officiis harum esse aperiam voluptate? Quibusdam.</p>
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
                  <form id="contact" action="" method="post">
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
                          <button type="submit" id="form-submit" class="main-button">Ajouter au Panier</button>
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
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Mollitia doloremque sit, enim sint odio corporis illum perferendis, unde repellendus aut dolore doloribus minima qui ullam vel possimus magnam ipsa deleniti.</p>

            <br>

            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Necessitatibus ducimus ab numquam magnam aliquid, odit provident consectetur corporis eius blanditiis alias nulla commodi qui voluptatibus laudantium quaerat tempore possimus esse nam sed accusantium inventore? Sapiente minima dicta sed quia sunt?</p>

            <br>

            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Rerum qui, corrupti consequuntur. Officia consectetur error amet debitis esse minus quasi, dicta suscipit tempora, natus, vitae voluptatem quae libero. Sunt nulla culpa impedit! Aliquid cupiditate, impedit reiciendis dolores, illo adipisci, omnis dolor distinctio voluptas expedita maxime officiis maiores cumque sequi quaerat culpa blanditiis. Quia tenetur distinctio rem, quibusdam officiis voluptatum neque!</p>
          </div>

          <br>
          <br>
        </div>
      </div>
    </div>

    <footer>
      <div class="container">
        <div class="row">
          <div class="col-lg-12">
            <ul class="social-icons">
              <li><a href="https://willydev.xyz/">Mon Site</a></li>
              <li><a href="https://twitter.com/willy_appl">Twitter</a></li>
              <li><a href="https://github.com/Wiillyyy">Repo du Site</a></li>
              <li><a href="#">Linkedin</a></li>
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

    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Additional Scripts -->
    <script src="assets/js/custom.js"></script>
    <script src="assets/js/owl.js"></script>
    <script src="assets/js/slick.js"></script>
    <script src="assets/js/isotope.js"></script>
    <script src="assets/js/accordions.js"></script>

    <script language = "text/Javascript"> 
      cleared[0] = cleared[1] = cleared[2] = 0; //set a cleared flag for each field
      function clearField(t){                   //declaring the array outside of the
      if(! cleared[t.id]){                      // function makes it static and global
          cleared[t.id] = 1;  // you could use true and false, but that's more typing
          t.value='';         // with more chance of typos
          t.style.color='#fff';
          }
      }
    </script>

  </body>
</html>