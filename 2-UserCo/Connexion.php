<?php
session_start();
require_once("assets/sql/connexionSilent.php");
$conn1=connexionBDD();


if(isset($_POST['submit'])){ //Si l'user selectionne le bouton submit execution de la tâche
    $leMail = htmlspecialchars($_POST['Email']); //Htmlspecialchars permet de convertir au format html des entrées dans des inputs afin de "bloquer" des injections sql par input
    $leMDP = htmlspecialchars($_POST['MDP']);

        if(!empty($pseudo) && !empty($mdp)){ //Verification que les informations sont remplies, sinon $erreur pour signaler l'oublie.
        
        $requser = $conn1->prepare('SELECT Email, MDP FROM USERS WHERE Email = ? ;');  //On recupere les identifiants de la table admitable et on les compares à celles entrees
        $requser->execute(array($leMail));  //mise en tableau des valeurs
        $mailexist = $requser->rowCount();
        if($mailexist == 1){  //Verifie si le mail existe

            $userinfo = $requser->fetch();
            $pwd = $userinfo['MDP']; //On  recupere le mdp dans la table admintable
            if(password_verify($mdp, $pwd)){  //On verifie si le mdp entree est similaire au hash dans la table 
                $_SESSION['id'] = $userinfo['iduser'];
                header("Location: RT/1projet27/2-UserCo/dashboard.php?id=".$_SESSION['id']);  //Envoie vers le dashboard
            }else{
                $erreur = "Mauvais Mail et/ou mot de passe";
            }
        }else{ //sinon affichage d'un message erreur
            $erreur = "Mauvais Mail et/ou mot de passe";
        }
    }else{
        $erreur = "Erreur, veuillez remplir tous les champs !"; //Peut remplacer la fonction required dans HTML.
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
      <form action="" method="POST">
                        <!-- AlertBox -->
                        <?php 
                        if(isset($erreur)){  ?>
                            <div class="alert">
                            <span class="closebtn" onclick="this.parentElement.style.display='none';">&times;</span>
                            <?php echo $erreur; ?>
                            </div>
                        <?php } ?>
                    <!-- Fin alertbox -->

        <input type="text" id="login" class="fadeIn second" name="Email" placeholder="Email">

        <input type="password" id="password" class="fadeIn third" name="MDP" placeholder="Mot de Passe">

        <input type="submit" class="fadeIn fourth" value="Connexion">
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