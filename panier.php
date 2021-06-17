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
              <li class="nav-item">
                <a class="nav-link" href="produit.php">Produits</a>
              </li>

              <li class="nav-item active">
                <a class="nav-link" href="panier.php">Panier</a>
              </li>

 
              </li>
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
                <h4>Panier</h4>
                <h2>Un peu vide par ici...</h2>
              </div>
            </div>
          </div>
        </div>
      </section>
    </div>
    
    <!-- Banner Ends Here -->

    <!-- 
    <section class="contact-us">
      <div class="container">
        <br>
        <br>

        <ul class="list-group list-group-flush">
          <li class="list-group-item">
            <div class="row">
                  <div class="col-6">
                       <em>Sous-Total</em>
                  </div>
                  
                  <div class="col-6 text-right">
                       <strong>1128.99€</strong>
                  </div>
             </div>
          </li>
          
          <li class="list-group-item">
               <div class="row">
                    <div class="col-6">
                         <em>Frais de Ports</em>
                    </div>

                    <div class="col-6 text-right">
                         <strong>4.99€</strong>
                    </div>
               </div>
          </li>

          <li class="list-group-item">
               <div class="row">
                    <div class="col-6">
                         <em>TVA</em>
                    </div>

                    <div class="col-6 text-right">
                         <strong>20.00€</strong>
                    </div>
               </div>
          </li>

          <li class="list-group-item">
               <div class="row">
                    <div class="col-6">
                         <em>Total</em>
                    </div>

                    <div class="col-6 text-right">
                         <strong>2€</strong>
                    </div>
               </div>
          </li>

          <li class="list-group-item">
               <div class="row">
                    <div class="col-6">
                         <em>Carte de fidélité</em>
                    </div>

                    <div class="col-6 text-right">
                         <strong>6.87€</strong>
                    </div>
               </div>
          </li>
        </ul>

        <div class="inner-content">
          <div class="contact-us">
            <div class="contact-form">
                <form action="#">
                     <div class="row">
                          <div class="col-sm-6 col-xs-12">
                               <div class="form-group">
                                    <label class="control-label">Entre tes cuisses:</label>
                                    <select class="form-control" data-msg-required="This field is required.">
                                         <option value="">-- Choisir --</option>
                                         <option value="dr">Dr.</option>
                                         <option value="miss">Miss</option>
                                         <option value="mr">Mr.</option>
                                         <option value="mrs">Mrs.</option>
                                         <option value="ms">Ms.</option>
                                         <option value="other">Other</option>
                                         <option value="prof">Prof.</option>
                                         <option value="rev">Rev.</option>
                                    </select>
                               </div>
                          </div>
                          <div class="col-sm-6 col-xs-12">
                               <div class="form-group">
                                    <label class="control-label">Nom:</label>
                                    <input type="text" class="form-control">
                               </div>
                          </div>
                     </div>
                     <div class="row">
                          <div class="col-sm-6 col-xs-12">
                               <div class="form-group">
                                    <label class="control-label">Email:</label>
                                    <input type="text" class="form-control">
                               </div>
                          </div>
                          <div class="col-sm-6 col-xs-12">
                               <div class="form-group">
                                    <label class="control-label">Tel:</label>
                                    <input type="text" class="form-control">
                               </div>
                          </div>
                     </div>
                     <div class="row">
                          <div class="col-sm-6 col-xs-12">
                               <div class="form-group">
                                    <label class="control-label">Addresse 1:</label>
                                    <input type="text" class="form-control">
                               </div>
                          </div>
                          <div class="col-sm-6 col-xs-12">
                               <div class="form-group">
                                    <label class="control-label">Addresse 2:</label>
                                    <input type="text" class="form-control">
                               </div>
                          </div>
                     </div>
                     <div class="row">
                          <div class="col-sm-6 col-xs-12">
                               <div class="form-group">
                                    <label class="control-label">Ville:</label>
                                    <input type="text" class="form-control">
                               </div>
                          </div>
                          <div class="col-sm-6 col-xs-12">
                               <div class="form-group">
                                    <label class="control-label">Département:</label>
                                    <input type="text" class="form-control">
                               </div>
                          </div>
                     </div>
                     <div class="row">
                          <div class="col-sm-6 col-xs-12">
                               <div class="form-group">
                                    <label class="control-label">Code Postal:</label>
                                    <input type="text" class="form-control">
                               </div>
                          </div>
                          <div class="col-sm-6 col-xs-12">
                               <div class="form-group">
                                    <label class="control-label">Pays:</label>
                                    <select class="form-control">
                                         <option value="">-- Choisir --</option>
                                         <option value="">-- France --</option>
                                         <option value="">-- Anglais --</option>
                                         <option value="">-- Arabes --</option>
                                    </select>
                               </div>
                          </div>
                     </div>

                     <div class="row">
                          <div class="col-sm-6 col-xs-12">
                               <div class="form-group">
                                    <label class="control-label">Méthode de Reglement</label>

                                    <select class="form-control">
                                         <option value="">-- Choisir --</option>
                                         <option value="bank">CB</option>
                                         <option value="cash">PaySafeCard</option>
                                         <option value="paypal">PayPal</option>
                                    </select>
                               </div>
                          </div>

                          <div class="col-sm-6 col-xs-12">
                               <div class="form-group">
                                    <label class="control-label">Captcha</label>
                                    <input type="text" class="form-control">
                               </div>
                          </div>
                     </div>

                     <div class="clearfix">
                          <button type="button" class="filled-button pull-left">Retour</button>
                          
                          <button type="submit" class="filled-button pull-right">Terminé</button>
                     </div>
                </form>
            </div>
          </div>
        </div>
      </div>
    </section> -->
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