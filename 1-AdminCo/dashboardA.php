<?php
session_start();
require_once("assets/sql/connexionSilent.php");
$conn1=connexionBDD();

$countMbr = $conn1->query('SELECT * FROM USERS'); //Compte le nombre d'idusers au TOTAL
$nbrMembres = $countMbr->rowCount();

$countPstr = $conn1->query('SELECT * FROM POSTERS'); //Compte le nombre de Posters au TOTAL
$nbrPstr = $countPstr->rowCount();

$countCmds = $conn1->query('SELECT * FROM COMMANDES'); //Compte le nombre de Posters au TOTAL
$nbrCmd = $countCmds->rowCount();

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
      <a href="#" id="close">X</a>
      <a href="#">Dashboard()</a>
      <a href="dashA/Client.php">Clients</a>
      <a href="dashA/Poster.php">Posters</a>
      <a href="dashA/editCmd.php">Éditer une Commande</a>
      <a href="dashA/Commande.php">Commandes</a>
      <a href="dashA/fichiers.php">BDD/MCD/Graphe</a>
      <a style="position: fixed" href="deco.php">Déconnexion</a>
    </nav>
  </header>
  <main class="main">

  <h1 style="font-size: 50px; text-align: center">Bienvenue <?php echo $_SESSION['pseudo']; ?> ! </h1>
    <h2 style="color: red"> Quelques Chiffres ! </h2>
   
    <h1>Nombres de Clients Inscrits : <?php echo $nbrMembres ?> </h1>

    <p>------------------------------------------------------------</p>

    <h1>Nombre de Posters : <?php echo $nbrPstr ?> </h1> 

    <p>------------------------------------------------------------</p>

    <h1>Nombre de Commandes en Cours : <?php echo $nbrCmd ?> </h1>

  </main>
</div>

      </div>
   </body>
</html>
<?php   
}
?>