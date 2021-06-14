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
      <form METHOD="GET" ACTION="inscriptionOK.php">
      
      <input type="text" id="login" class="fadeIn second" name="P_Email" placeholder="Email" 
      pattern="/^[\w-\.]+@([\w-]+\.)+[\w-]{2,4}$/g" title="Merci d'entrer un E-mail valide !" required>

      <input type="password" id="password" class="fadeIn third" name="P_MDP" placeholder="Mot de Passe" required>
      <input type="submit" class="fadeIn fourth" value="Inscription">
      </form>

      <label class="switch">
      <input type="checkbox" onclick="myFunction()" Class="AfficheMDP">
      <span class="slider round"></span>
      </label>
      <h3>Voir le mot de passe</h3>
  
      <?php
	require_once("assets/sql/connexion.php");
	$conn1=connexionBDD();
	require_once("assets/sql/fonctionBDD.php");
 ?>
    </div>
  </div>
</body>
  </html>

 