<h3 align=center>

<?php
session_start();
require_once("assets/sql/connexion.php");
$conn1=connexionBDD();
 
if(!isset($_SESSION['prenom'])) {  //Si l'user tente de d'acceder via l'url à la page, sans être log, il sera renvoyé a la page 403
    header('Location: error.html'); // envoi  vers erreur
}

if(isset($_GET['id']) AND $_GET['id'] > 0) {  // on choppe l'id de la session précédente 
   $getid = intval($_GET['id']);
   $requser = $conn1->prepare('SELECT * FROM USERS WHERE iduser = ?');  // on prends toutes les depuis la BDD concercant les infos de l'user par rapport a son ID 
   $requser->execute(array($getid));
   $userinfo = $requser->fetch();
}
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

   <div align="center">
         <h2>Bienvenue Mr. ou Mme. <?php echo $userinfo['prenom']; ?></h2>
         <br />
         Voici une liste d'informations vous concernant :
         <br /><br />
         Votre Prénom = <?php echo $userinfo['prenom']; ?>
         <br />
         Votre Nom = <?php echo $userinfo['nom']; ?>
         <br />
         Mail = <?php echo $userinfo['email']; ?>
         <br />
         Nombre de commandes = 
         <br />
         <?php
         if(isset($_SESSION['iduser']) AND $userinfo['iduser'] == $_SESSION['id'])
             ?>
 
  </head>
  <body><div class="area"></div><nav class="main-menu">
            <ul>
                <li>
                    <a href="http://justinfarrow.com">
                        <i class="fa fa-home fa-2x"></i>
                        <span class="nav-text">
                            Dashboard
                        </span>
                    </a>
                  
                </li>
                <li class="has-subnav">
                    <a href="#">
                        <i class="fa fa-laptop fa-2x"></i>
                        <span class="nav-text">
                            Informations
                        </span>
                    </a>
                    
                </li>
                <li class="has-subnav">
                    <a href="#">
                       <i class="fa fa-list fa-2x"></i>
                        <span class="nav-text">
                            Commandes
                        </span>
                    </a>
                    
                </li>
                <li class="has-subnav">
                    <a href="#">
                       <i class="fa fa-folder-open fa-2x"></i>
                        <span class="nav-text">
                            Éditer Profil
                        </span>
                    </a>
                   
                </li>

 
            </ul>

            <ul class="logout">
                <li>
                   <a href="deco.php">
                         <i class="fa fa-power-off fa-2x"></i>
                        <span class="nav-text">
                            Déconnexion
                        </span>
                    </a>
                </li>  
            </ul>
        </nav>