<?php
session_start();
require_once("assets/sql/connexion.php");
$conn1=connexionBDD();

if(!isset($_SESSION['pseudo'])) {  //Si un utilisateur malveillant tente de d'acceder via l'url à la page, sans être log, il sera renvoyé a la page 403
   header('Location: error.html');
}

if(isset($_GET['id']) AND $_GET['id'] > 0) {
   $getid = intval($_GET['id']);
   $requser = $conn1->prepare('SELECT * FROM ADMINS WHERE idadmin = ?');
   $requser->execute(array($getid));
   $userinfo = $requser->fetch();
?>
<html>
   <head>
      <title>Dashboard Admin</title>
      <link type="text/css" rel="stylesheet" href="assets/css/dashboard.css">
      <script src="assets/js/jsquery.js"></script>
      <meta charset="utf-8">
   </head>
   <body>
   <div id="wrap">
  <header class="header">
    <nav class="nav">
      <a href="#wrap" id="open">
    <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="34px" height="27px" viewBox="0 0 34 27" enable-background="new 0 0 34 27" xml:space="preserve">
    <rect fill="#FFFFFF" width="34" height="4"/> <!-- On remplit les 3 barres de blanc -->
    <rect y="11" fill="#FFFFFF" width="34" height="4"/> <!-- Celle du milieu -->
    <rect y="23" fill="#FFFFFF" width="34" height="4"/> <!-- Dernière -->
</svg>
      </a>
      <a href="#" id="close">×</a>
      <h1><a href="#">Dashboard()</a></h1>
      <a href="dashA/listerClient.php">Lister Client</a>
      <a href="#">Lister Posters</a>
      <a href="#">Gestion Commandes</a>
      <a href="#">Graphe</a>
      <a style="position: fixed" href="#">Déconnexion</a>
    </nav>
  </header>
  <main class="main">
  <h1>Bienvenue <?php echo $userinfo['pseudo']; ?> !</h1>
    <h2> Quelques Chiffres :</h2>
   
    <h1>Nombres de ..</h1>

    <p>Contenu 2</p>

    <h1>Franklin Gothic</h1>

    <p>Franklin Gothic est une police d’écriture sans serif réaliste dessinée par Morris Fuller Benton en 1902 pour l’American Type Founders. Elle est complétée au fil des années en une famille de polices de caractères large et polyvalente.</p>

  </main>
</div>

      </div>
   </body>
</html>
<?php   
}
?>