<?php
session_start();
require_once("assets/sql/connexion.php");
$conn1=connexionBDD();
 
if(!isset($_SESSION['prenom'])) {  //Si l'user tente de d'acceder via l'url à la page, sans être log, il sera renvoyé a la page de connexion
    header('Location: error.html');
}

if(isset($_GET['id']) AND $_GET['id'] > 0) {
   $getid = intval($_GET['id']);
   $requser = $conn1->prepare('SELECT * FROM USERS WHERE iduser = ?');
   $requser->execute(array($getid));
   $userinfo = $requser->fetch();
?>
<html>
   <head>
      <title>Dashboard Client</title>
      <meta charset="utf-8">
   </head>
   <body>
      <div align="center">
         <h2>Profil de <?php echo $userinfo['nom']; echo $userinfo['prenom']; ?></h2>
         <br /><br />
         Prénom = <?php echo $userinfo['prenom']; ?>
         <br />
         Mail = <?php echo $userinfo['email']; ?>
         <br />
         <a href="deco.php">Se déconnecter</a>
         <?php
         if(isset($_SESSION['iduser']) AND $userinfo['iduser'] == $_SESSION['id']) { 
             ?>

         <br />
         <a href="editionprofil.php">Editer mon profil</a>
         <a href="deco.php">Se déconnecter</a>

         <?php
         }
         ?>
      </div>
   </body>
</html>
<?php   
}
?>