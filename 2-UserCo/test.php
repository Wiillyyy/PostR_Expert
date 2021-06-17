<?php
session_start();
require_once("assets/sql/connexion.php");
$conn1=connexionBDD();
 
if(isset($_POST['formconnexion'])) {
   $mailconnect = htmlspecialchars($_POST['mailconnect']);
   $mdpconnect = htmlspecialchars($_POST['mdpconnect']);


   if(!empty($mailconnect) AND !empty($mdpconnect)) {
      $requser = $conn1->prepare("SELECT * FROM USERS WHERE email = ? AND mdp = ?");
      $requser->execute(array($mailconnect, $mdpconnect));
      $userexist = $requser->rowCount();
      
      if($userexist == 1) {
         $userinfo = $requser->fetch();
         $_SESSION['id'] = $userinfo['iduser'];
         $_SESSION['prenom'] = $userinfo['prenom'];
         $_SESSION['nom'] = $userinfo['nom'];
         $_SESSION['mail'] = $userinfo['Email'];
         header("Location: dashboard.php?id=".$_SESSION['id']);
      } else {
         $erreur = "Mauvais mail ou mot de passe !";
      }
   } else {
      $erreur = "Tous les champs doivent être complétés !";
   }
}
?>


<html>
   <head>
      <title>TUTO PHP</title>
      <meta charset="utf-8">
   </head>
   <body>
      <div align="center">
         <h2>Connexion</h2>
         <br /><br />
         <form method="POST" action="">
            <input type="email" name="mailconnect" placeholder="Mail" />
            <input type="password" name="mdpconnect" placeholder="Mot de passe" />
            <br /><br />
            <input type="submit" name="formconnexion" value="Se connecter !" />
         </form>
         <?php
         if(isset($erreur)) {
            echo '<font color="red">'.$erreur."</font>";
         }
         ?>
      </div>
   </body>
</html>