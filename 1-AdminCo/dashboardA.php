<?php
session_start();
require_once("assets/sql/connexion.php");
$conn1=connexionBDD();
 
if(isset($_GET['id']) AND $_GET['id'] > 0) {
   $getid = intval($_GET['id']);
   $requser = $conn1->prepare('SELECT * FROM ADMINS WHERE idadmin = ?');
   $requser->execute(array($getid));
   $userinfo = $requser->fetch();
?>
<html>
   <head>
      <title>Dashboard Admin</title>
      <meta charset="utf-8">
   </head>
   <body>
      <div align="center">
         <h2>Profil de <?php echo $userinfo['pseudo']; ?></h2>
         <br /><br />
         Bienvenue Maitre :)
         <?php
         if(isset($_SESSION['iduser']) AND $userinfo['iduser'] == $_SESSION['id']) { ?>
         <br />
         <a href="editionprofil.php">Editer mon profil</a>
         <a href="deconnexion.php">Se déconnecter</a>
         <?php
         }
         ?>
      </div>
   </body>
</html>
<?php   
}
?>