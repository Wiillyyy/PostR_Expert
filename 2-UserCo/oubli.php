<?php

?>


<!DOCTYPE html>
<html>
    <head>
    <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
      <meta name="description" content="LoginClient">
      <meta name="author" content="William">
      <link type="text/css" rel="stylesheet" href="assets/css/style.css">
      
      <title>Oubli MDP</title>
      <link rel="icon" type="image/png" href="/assets/logo/posterexpertlogo.png">
    </head>


    <body>
    <a href="index.php">
    <p><i class="fleche gauche"></i></p></a>

    <a href="index.php">
    <div id="cercle"></div></a>

<div class="wrapper fadeInDown">
    <div id="formContent">
      <!-- Tabs Titles -->
      <h2 class="active"> E-Mail oublié </h2>
  
    
      <!-- Login Form -->
      <form metod>
      <h3>Entrez l'email</h3>
      <input type="text" id="login" class="fadeIn second" name="email" placeholder="Email" 
      pattern="^([\w\.\-]+)@([\w\-]+)((\.(\w){2,3})+)$" title="Merci d'entrer un E-mail valide !" required>

      <a href="oublisend.php">
        <input type="submit" onclick="oublisend.php" class="fadeIn fourth" value="Envoyer le mot de passe" href="oublisend.php">
      </a>
      </form>
  
  
  
    </div>
  </div>
  </html>