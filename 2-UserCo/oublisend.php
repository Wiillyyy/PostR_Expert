<?php
require_once("assets/sql/connexionSilent.php");
$conn1=connexionBDD();
require_once("assets/sql/fonctionSQL.php");
if(isset($_GET['submit'])) {

// $mdp = 'SELECT mdp FROM USERS where email = destinataire'

$destinataire = $_GET['email'];

$headers = "From: PostR Experts <no-reply@poster.net>\r\n";
$headers .= "MIME-version: 1.0\r\n";
$headers .= "Content-type: text/html; charset=utf-8";
$headers .= 'Content-Transfer-Encoding: 8bit';

$sujet = "Reinitialisation de votre mot de passe";

$message = '<html>
<head>
  <title>Récupération de mot de passe - PostR Expert</title>
  <meta charset="utf-8" />
</head>
<body>
  <font color="#303030";>
    <div align="center">
      <table width="600px">
        <tr>
          <td>

            <div align="center"> <h1>Bonjour,</h1></div>
            <p align="center">Vous avez perdu votre Mot de passe ? oh c\'est ballaud ça, mais bon heureusement que je suis la :)
            <br> Pour eviter que ces choses se reproduisent, pensez a noter le mot de passe la prochaine fois, la bande passante pousse pas sur les arbres !
            <br> Votre mot de passe : <b> '.$mdp.' </b> </p>
            <p align="center"> A bientôt sur <a href="#">PostR Expert</a> !</p>

          </td>
        </tr>
        <tr>
          <td align="center">
            <font size="5">
              Ceci est un email automatique, merci de ne pas y répondre.
            </font>
          </td>
        </tr>
      </table>
    </div>
  </font>
</body>
</html>';

$reqemail = $conn1->prepare('SELECT email FROM USERS WHERE email = ? ;');  // On recupere les emails de la table USERS 
$reqemail->execute(array($destinataire));  // mise en tableau des valeurs pour comparaison
$emailexist = $reqemail->rowCount();

if($emailexist != 0){
  $erreur = "L'adresse E-mail n'existe pas dans la !"; 
}else

  if( mail($destinataire, $sujet, $message, $headers) ){  //si le mail contient tous les elements il s'execute sinon erreur
  $erreur = 'Merci de regarder votre boite mail!';
} else{ 
  $erreur =  'une erreur est survenue lors de lenvoi du message';
    }
  }
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="refresh" content="5; url=../index.php" /> <!--- Redirection automatique au bout de 5 secondes --->
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
      <meta name="description" content="LoginClient">
      <meta name="author" content="William">
      <link type="text/css" rel="stylesheet" href="assets/css/style.css">
      
      <title>Oubli MDP</title>
      <link rel="icon" type="image/png" href="/assets/logo/posterexpertlogo.png">
    </head>

<div class="wrapper fadeInDown">
    <div id="formContent">
      <!-- Tabs Titles -->
      <h2 class="active"> E-Mail oublié </h2>
  
  
      <!-- Login Form -->
      <form>
      <h3>Le mail a bien été envoyé !</h3>
      <h3><?php echo ($erreur); ?>
      <a href="index.php">
      <input type="submit" class="fadeIn fourth" value="Retour">
      </a>
      </form>
  
  
  
    </div>
  </div>
  </html>