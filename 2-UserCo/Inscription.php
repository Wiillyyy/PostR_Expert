<?php
session_start();
require_once("assets/sql/connexionSilent.php");
$conn1=connexionBDD();
require_once("assets/sql/fonctionSQL.php");

if(!empty($_POST)){ //Si l'user selectionne le bouton submit execution de la tâche on attribue les variables qu'il a rentré

    $nom = htmlspecialchars($_POST['nom']);
    $prenom = htmlspecialchars($_POST['prenom']);
    $email = htmlspecialchars($_POST['email']);
    $mdp = htmlspecialchars($_POST['mdp']);

      $reqemail = $conn1->prepare('SELECT email FROM USERS WHERE email = ? ;');  //On recupere les email de la table utilisateurs 
      $reqemail->execute(array($email));  //mise en tableau des valeurs
      $emailexist = $reqemail->rowCount();
      
      if($emailexist != 0){  //Verifie si l'email est déja utilisé ou non 
        $erreur = "L'adresse E-mail est déjà utilisée !";
      }else {
          $req = $conn1->prepare('INSERT INTO USERS (email, mdp, prenom, nom) VALUES (?,?,?,?);');
          $req->execute([$email, $mdp, $prenom, $nom]);
          header("Location: InscriptionOK.php"); 
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

      <title>Inscription</title>
      <link rel="icon" type="image/png" href="/assets/logo/posterexpertlogo.png">
    </head>
  
    <body>

    <a href="../index.php">
    <p><i class="fleche gauche"></i></p></a>

    <a href="../index.php">
    <div id="cercle"></div></a>

<div class="wrapper fadeInDown">
    <div id="formContent">
      <!-- deux tabs -->
      <h2 class="inactive underlineHover"><a href="index.php">Se Connecter</a></h2>
      <h2 class="active"> S'inscrire </h2>
  
  
      <!-- page Inscription -->
      <form METHOD="POST" ACTION="">
      
      <input type="text" id="login" class="fadeIn second" name="nom" placeholder="Nom" 
      pattern="[\w]+" title="Merci d'entrer un nom qui existe !" required>

      <input type="text" id="login" class="fadeIn second" name="prenom" placeholder="Prénom" 
      pattern="[\w]+" title="Merci d'entrer un prénom qui existe !" required>

      <input type="text" id="login" class="fadeIn second" name="email" placeholder="Email" 
      pattern="^([\w\.\-]+)@([\w\-]+)((\.(\w){2,3})+)$" title="Merci d'entrer un E-mail valide !" required>

      <input type="password" id="password" class="fadeIn third" name="mdp" placeholder="Mot de Passe" pattern="^[a-zA-Z0-9_.-]*$" title="Merci d'entrer un MDP sans espace ou caracteres spéciaux" 
      required>

      <?php
      if(isset($erreur)) {
            echo '<font color="red">'.$erreur."</font>";
         } 
         ?>
         
      <input type="submit" class="fadeIn fourth" value="Inscription">
      </form>

      <label class="switch">
      <input type="checkbox" onclick="myFunction()" Class="AfficheMDP">
      <span class="slider round"></span>
      </label>
      <h3>Voir le mot de passe</h3>
    </div>
  </div>
</body>
  </html>

 