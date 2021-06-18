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

$erreurs = [];  // tentative d'envoi mail mais ne fonctionne PAS ENCORE !!!!!
$errorMessage = ''; 

if (!empty($_POST)) {
   $name = $_POST['name'];
   $email = $_POST['email'];
   $message = $_POST['message'];

   if (empty($name)) {
       $erreurs[] = 'Pas de nom !';
   }

   if (empty($email)) {
       $erreurs[] = 'Pas de mail';
   } else if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
       $erreurs[] = 'Email invalide';
   }

   if (empty($message)) {
       $erreurs[] = 'le message est vide !';
   }

   if (empty($erreurs)) {
    $toEmail = 'example@example.com';
    $emailSubject = 'New email from your contant form';
    $headers = ['From' => $email, 'Reply-To' => $email, 'Content-type' => 'text/html; charset=iso-8859-1'];

    $bodyParagraphs = ["Name: {$name}", "Email: {$email}", "Message:", $message];
    $body = join(PHP_EOL, $bodyParagraphs);

    if (mail($toEmail, $emailSubject, $body, $headers)) {
        header('Location: thank-you.html');
    } else {
        $errorMessage = 'Oops, something went wrong. Please try again later';
    }
} else {
    $allErrors = join('<br/>', $erreurs);
    $errorMessage = "<p style='color: red;'>{$allErrors}</p>";
}
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
    
    <title>PostR Expert - Contact</title>

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

    <!-- header et la navbar -->
    <header class="">
      <nav class="navbar navbar-expand-lg">
        <div class="container">
          <a class="navbar-brand" href="index.php"><h2>Post<span style="color: #f48840">R</span> Expert<em>.</em></h2></a>
          <div id="app"><h3>ㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤ</h3></div>
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
                <a class="nav-link" href="panier.php">Contact</a>
              </li>
              <li class="nav-item">
              <a class="nav-link2" href=<?php echo $url ?>> <?php echo $connexion ?> </a>
              </li>
            </ul>
          </div>
        </div>
      </nav>
    </header>

    <!-- contenu de la page -->
    <!-- début de banière fumée ici -->
    <div class="heading-page header-text">
      <section class="page-heading">
        <div class="container">
          <div class="row">
            <div class="col-lg-12">
              <div class="text-content">
                <h4>Contact</h4>
                <h2>Un beau formulaire de contact</h2>
              </div>
            </div>
          </div>
        </div>
      </section>
    </div>
    
    <!-- fin de bannière -->
    <?php
    $allErrors ?>
    <section class="contact-us">
      <div class="container">
        <div class="row">
        
          <div class="col-lg-12">
            <div class="down-contact">
              <div class="row">
                <div class="col-lg-8">
                  <div class="sidebar-item contact-form">
                    <div class="sidebar-heading">
                      <h2>Envoie moi un petit message !</h2>
                    </div>
                    <div class="content">
                      <form id="contact" action="" method="POST">
                        <div class="row">
                          <div class="col-md-6 col-sm-12">
                            <fieldset>
                              <input name="name" type="text" id="name" placeholder="Nom" required>
                            </fieldset>
                          </div>
                          <div class="col-md-6 col-sm-12">
                            <fieldset>
                              <input name="email" type="text" id="email" placeholder="Email" required>
                            </fieldset>
                          </div>
                          <div class="col-md-12 col-sm-12">
                            <fieldset>
                              <input name="subject" type="text" id="sujet" placeholder="Sujet du Message">
                            </fieldset>
                          </div>
                          <div class="col-lg-12">
                            <fieldset>
                              <textarea name="message" rows="6" id="message" placeholder="Ton Message" required=></textarea>
                            </fieldset>
                          </div>
                          <div class="col-lg-12">
                            <fieldset>
                              <button type="submit" id="submit" class="main-button">Envoi !</button>
                            </fieldset>
                          </div>
                        </div>
                      </form>
                    </div>
                  </div>
                </div>
                <div class="col-lg-4">
                  <div class="sidebar-item contact-information">
                    <div class="sidebar-heading">
                      <h2>Contact</h2>
                    </div>
                    <div class="content"> <!--iframe google maps qui affiche la localisation de l'iut d'annecy -->
                      <ul>
                        <li>
                          <h5>06 74 XX XX XX</h5>
                          <span>Mon numéro</span>
                        </li>
                        <li>
                          <h5>contact@willydev.xyz</h5>
                          <span>Mon mail</span>
                        </li>
                        <li>
                          <h5>Quelque part en France 😏</h5>
                          <span>Mon addresse</span>
                        </li>
                      </ul>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!--iframe google maps qui affiche la localisation de l'iut d'annecy -->
          <div class="col-lg-12">
            <div id="map">
              <iframe src="https://maps.google.com/maps?width=700&amp;height=440&amp;hl=en&amp;q=IUT%20Annecy+(Titre)&amp;ie=UTF8&amp;t=&amp;z=10&amp;iwloc=B&amp;output=embed" width="100%" height="450px" frameborder="0" style="border:0" allowfullscreen></iframe>
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
              </p>
            </div>
          </div>
        </div>
      </div>
    </footer>
  </body>
</html>
<!-- Et voici donc mon contact.php -->
<!-- Merci d'avoir pris le temps d'étudier mon code :D -->