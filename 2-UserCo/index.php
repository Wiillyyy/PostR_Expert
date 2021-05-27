<!DOCTYPE html>
<html>
    <head>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
      <meta name="description" content="LoginClient">
      <meta name="author" content="William">

      <link type="text/css" rel="stylesheet" href="style.css">
      <script src="mdp.js"></script>

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
  
  
      <!-- Section Login -->
      <form>
        <input type="text" id="login" class="fadeIn second" name="Email" placeholder="Email">
        <input type="password" id="password" class="fadeIn third" name="Mot De Passe" placeholder="Mot de Passe">
        <input type="submit" class="fadeIn fourth" value="Connexion">
      </form>
      <input type="checkbox" onclick="myFunction()">Voir le mot de passe
  
      <!-- Remind Passowrd -->
      <div id="formFooter">
        <a class="underlineHover" href="oubli.php">Mot de passe oublié ?</a>
      </div>
  
    </div>
  </div>

</body>
  </html>