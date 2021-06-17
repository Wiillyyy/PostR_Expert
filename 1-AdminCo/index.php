<?php
session_start();
require_once("assets/sql/connexionSilent.php");
$conn1=connexionBDD();
 
if(isset($_GET['connexion'])) {
   $idconnect = htmlspecialchars($_GET['idconnect']);
   $mdpconnect = htmlspecialchars($_GET['mdpconnect']);


   if(!empty($idconnect) AND !empty($mdpconnect)) {
      $requser = $conn1->prepare("SELECT * FROM ADMINS WHERE pseudo = ? AND mdp = ?");
      $requser->execute(array($idconnect, $mdpconnect));
      $userexist = $requser->rowCount();
      
      if($userexist == 1) {
         $userinfo = $requser->fetch();
         $_SESSION['id'] = $userinfo['idadmin'];
         $_SESSION['pseudo'] = $userinfo['pseudo'];
         header("Location: dashboardA.php?id=".$_SESSION['id']);
      } else {
         $erreur = "Mauvais pseudo ou mot de passe !";
      }
   } else {
      $erreur = "Tous les champs doivent être complétés !";
   }
}
?>

<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
      <meta name="description" content="LoginClient">
      <meta name="author" content="William">
      <link type="text/css" rel="stylesheet" href="assets/css/style.css">
      <script src="assets/js/mdp.js"></script>
      <title>Connexion Admin</title>
      <link rel="icon" type="image/png" href="/assets/logo/posterexpertadmin.png">
</head>

    <body>
    <a href="../index.php">
    <p><i class="fleche gauche"></i></p></a>

    <a href="../index.php">
    <div id="cercle"></div></a>

      <h1>Bienvenue Root !</h1>
<div class="wrapper fadeInDown">
    <div id="formContent">
      <!-- Se connecter / -->
      <h2 class="active"> Connexion </h2>
  
  
      <!-- Section Login -->
      <form action="" method="GET">
        <input type="text" id="login" class="fadeIn second" name="idconnect" placeholder="Pseudo" title="Merci de taper le pseudo de l'admin " required>
        <input type="password" id="password" class="fadeIn third" name="mdpconnect" placeholder="Mot de Passe" pattern="^[a-zA-Z0-9_.-]*$" required>
        <input type="submit" class="fadeIn fourth" name="connexion" value="connexion">

      </form>

      <label class="switch">
      <input type="checkbox" onclick="myFunction()" Class="AfficheMDP">
      <span class="slider round"></span>
      </label>
      <h3>Voir le mot de passe</h3>
      <?php
       if(isset($erreur)) {
        echo '<font color="red">'.$erreur."</font>";
     } 
     ?>
  
    </div>
  </div>
</body>
  </html>