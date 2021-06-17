<?php
session_start();
require_once("assetsdash/db/fonctionSQL.php");
require_once("assetsdash/db/connexionSilent.php");
$conn1=connexionBDD();

if(!isset($_SESSION['pseudo'])) {  //Si un utilisateur malveillant tente de d'acceder via l'url à la page, sans être log, il sera renvoyé a la page 403
  header('Location: ../error.html');
}

?>
<html>
   <head>
      <title>Dashboard Admin</title>
      <link type="text/css" rel="stylesheet" href="assetsdash/list.css">
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
      <a href="../dashboardA.php?id=1">Dashboard</a>
      <a href="Client.php">Clients</a>
      <a href="Poster.php">Posters</a>
      <a href="gestionCommande.php">Gestion Commandes</a>
      <a href="Commande.php">Commandes()</a>
      <a href="fichiers.php">BDD/MCD/Graphe</a>
      <a style="position: fixed" href="../deco.php">Déconnexion</a>
    </nav>
  </header>
  <main class="main">
  <h1>Bienvenue <?php echo $_SESSION['pseudo']; ?> !</h1>
   
    <h1>Enregstrer une commande dans la base de donnés</b></h1>

    <div class="wrapper fadeInDown">
    <div id="formContent">
	<form>
      <h2> Enregistrer une commande : </h2> <br />

  <div>
      </form>

  </main>
</div>

      </div>
   </body>
</html>
