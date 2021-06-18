<?php
session_start();
require_once("assets/sql/connexionSilent.php");
$conn1=connexionBDD();
 
if(!isset($_SESSION['prenom'])) {  //Si l'user tente de d'acceder via l'url à la page, sans être log, il sera renvoyé a la page 403
    header('Location: error.html'); // envoi vers erreur.html
}

if(isset($_GET['id']) AND $_GET['id'] > 0) {  // on choppe l'id de la session précédente 
   $getid = intval($_GET['id']);
   $requser = $conn1->prepare('SELECT * FROM USERS WHERE iduser = ?');  // on prends toutes les depuis la BDD concercant les infos de l'user par rapport a son ID 
   $requser->execute(array($getid));
   $userinfo = $requser->fetch();
}

$cmdID = $_SESSION['id'];
// var_dump ($cmdID); debug 
$countCmds = $conn1->query('SELECT * FROM COMMANDES WHERE refuser = ('.$cmdID.')'); //Compte le nombre de commandes SELON L'ID
$nbrCmd = $countCmds->rowCount();
// var_dump ($nbrCmd); debug

?>
</h3>

<html>
   <head>
      <title>Dashboard Client</title>
      <link type="text/css" rel="stylesheet" href="assets/css/dashboard.css">
      <meta charset="utf-8">
   </head>
   <body>

   <html>
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
      <a href="Commande.php">Commandes</a>
      <a style="color: red;" href="deco.php">Déconnexion</a>
    </nav>
  </header>
  <main class="main">

  <div class="wrapper fadeInDown">
    <div id="formContent">
	<form>
      <h2> Dashboard Client ! </2> <br />
      <div align="center">
         <h3>Bienvenue Mr. ou Mme. <br><?php echo $_SESSION['prenom']; ?>  <?php echo $_SESSION['nom']; ?> </h3>
         <br />
         <h3>Voici une liste d'informations vous concernant :</h3>
         <br /><br />
         <h3>Votre Prénom = <?php echo $_SESSION['prenom']; ?></h3>
         <br />
         <h3>Votre Nom = <?php echo $_SESSION['nom']; ?></h3>
         <br />
         <h3>Mail = <?php echo $_SESSION['mail']; ?></h3>
         <br />
         <h3>Nombre de commandes = <?php echo $nbrCmd; ?> </h3>
         <br />
      <a href="../index.php">
      <input type="button" class="fadeIn fourth" value="Retour à l'acceuil !"></a>


  </main>
</div>

      </div>
   </body>
</html>