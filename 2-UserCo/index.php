<?php
session_start();
require_once("assets/sql/connexionSilent.php");
$conn1=connexionBDD();
 
if(isset($_POST['connexion'])) {
   $mailconnect = htmlspecialchars($_POST['mailconnect']); //  Récupère en post les variables entrés en htmlspecialchars
   $mdpconnect = htmlspecialchars($_POST['mdpconnect']);


   if(!empty($mailconnect) AND !empty($mdpconnect)) {
      $requser = $conn1->prepare("SELECT * FROM USERS WHERE email = ? AND mdp = ?");  //  Vérifie et compare les informations de la base de donnés
      $requser->execute(array($mailconnect, $mdpconnect));
      $userexist = $requser->rowCount();
      
      if($userexist == 1) {
         $userinfo = $requser->fetch(); //  Crée une sessions avec beacoup de variables
         $_SESSION['id'] = $userinfo['iduser'];
         $_SESSION['prenom'] = $userinfo['prenom'];
         $_SESSION['mail'] = $userinfo['email'];
         $_SESSION['nom'] = $userinfo['nom'];
         header("Location: dashboard.php?id=".$_SESSION['id']); //  Redirige vers le dashboard AVEC tout les id correspondant a la session
      } else {
         $erreur = "Mauvais mail ou mot de passe !"; //  affiche une erreur
      }
   } else {
      $erreur = "Tous les champs doivent être complétés !"; //  affiche une erreur
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

      <title>Connexion</title>
      <link rel="icon" type="image/png" href="/assets/logo/posterexpertlogo.png">
  </head>

    <body>

    <a href="../index.php">
    <p><i class="fleche gauche"></i></p></a>

    <a href="../index.php">
    <div id="cercle"></div></a>


<div class="wrapper fadeInDown">
    <div id="formContent">
      <!-- Se connecter / -->
      <h2 class="active"> Se Connecter </h2>
      <h2 class="inactive underlineHover"> <a href="Inscription.php">S'inscrire</a></h2>
  
  
      <!-- la section Login -->
      <form method="POST">

        <input type="text" id="login" class="fadeIn second" name="mailconnect" placeholder="Email"
        pattern="^([\w\.\-]+)@([\w\-]+)((\.(\w){2,3})+)$" title="Merci d'entrer un E-mail valide !" required>

        <input type="password" id="password" class="fadeIn third" name="mdpconnect" placeholder="Mot de Passe" pattern="^[a-zA-Z0-9_.-]*$" 
        title="Merci d'entrer un MDP sans espace ou caracteres spéciaux"
        required>

        <input type="submit" class="fadeIn fourth" name="connexion" value="Connexion">
       
        
        <div>
        <?php
         if(isset($erreur)) {  // lieu d'affichage de l'erreur 
            echo '<font color="red">'.$erreur."</font>";
         } 
         ?></div>

      </form>

      <label class="switch">
      <input type="checkbox" onclick="myFunction()" Class="AfficheMDP">
      <span class="slider round"></span>
      </label>
      <h3>Voir le mot de passe</h3>

  
      <!--  Passowrd oublié -->
      <div id="formFooter">
        <a class="underlineHover" href="oubli.php">Mot de passe oublié ?</a>
      </div>
  
    </div>
  </div>

</body>

  </html>