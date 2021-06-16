<?php
session_start();
require_once("assets/sql/connexion.php");
$conn1=connexionBDD();


if(isset($_POST['submit'])){ //Si l'user selectionne le bouton submit execution de la tâche
    $lePseudo = htmlspecialchars($_POST['p_pseudo']); //Htmlspecialchars permet de convertir au format html des entrées dans des inputs afin de "bloquer" des injections sql par input
    $leMDP = htmlspecialchars($_POST['p_mdp']);

        if(!empty($lePseudo) && !empty($leMDP)){ //Verification que les informations sont remplies, sinon $erreur pour signaler l'oublie.
        
        $requser = $conn1->prepare('SELECT pseudo, mdp FROM ADMINS WHERE pseudo = ? ;');  //On recupere les identifiants de la table admitable et on les compares à celles entrees
        $requser->execute(array($lePseudo));  //mise en tableau des valeurs
        $mailexist = $requser->rowCount();
        if($mailexist == 1){  //Verifie si le mail existe

            $userinfo = $requser->fetch();
                header("Location: RT/1projet27/1-AdminCo/dashboard.php?id=".$_SESSION['id']);  //Envoie vers le dashboard
            }else{
                $erreur = "Mauvais Mail et/ou mot de passe";
            }
        }else{ //sinon affichage d'un message erreur
            $erreur = "Mauvais Mail et/ou mot de passe";
        }
    }else{
        $erreur = "Erreur, veuillez remplir tous les champs !"; //Peut remplacer la fonction required dans HTML.
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
      <form action="" method="POST">
        <input type="text" id="login" class="fadeIn second" name="p_pseudo" placeholder="Pseudo" required>
        <input type="password" id="password" class="fadeIn third" name="p_mdp" placeholder="Mot de Passe" required>
        <input type="submit" class="fadeIn fourth" name="submit" value="Connexion">

      </form>

      <label class="switch">
      <input type="checkbox" onclick="myFunction()" Class="AfficheMDP">
      <span class="slider round"></span>
      </label>
      <h3>Voir le mot de passe</h3>
      <?php
 // tentative de connexion
    print "Vous êtes Connecté à la base de donnés :)<br />"; // message de debug
      ?>
  
    </div>
  </div>
</body>
  </html>