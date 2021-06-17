<?php
session_start();
require_once("../assets/sql/connexion.php");
$conn1=connexionBDD();


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
      <h1><a href="../dashboardA.php">Dashboard</a></h1>
      <a href="#">Lister Client()</a>
      <a href="#">Lister Posters</a>
      <a href="#">Gestion Commandes</a>
      <a href="#">Graphe</a>
      <a style="position: fixed" href="#">Déconnexion</a>
    </nav>
  </header>
  <main class="main">
  <h1>Bienvenue <?php echo $userinfo['pseudo']; ?> !</h1>
   
    <h1>Lister tout les Client de la base de donnés :</b></h1>

    <div class="wrapper fadeInDown">
    <div id="formContent">
	<form>
      <h2 class="active"> Liste des clients </h2> <br />
      
  <div>
      </form>

  </main>
</div>

      </div>
   </body>
</html>
