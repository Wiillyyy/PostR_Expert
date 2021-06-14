<?php

function connexionBDD(){
  include("paramCon.php");

  $dsn='pgsql:host='.$lehost.';dbname='.$dbname.';port='.$leport; // connexion � la bdd (connexion non persistante) avec le connecteur nomm� $conn1

  try { // essai de connexion
      $connex = new PDO($dsn, $user, $pass); // tentative de connexion
      print "Vous êtes Connecté à la base de donnés :)<br />"; // message de debug

  } catch (PDOException $e) { // si erreur
      print "Erreur !! Connexion Incorecte (Vérifier Login ou status Serveur) : " . $e->getMessage(); // pour exception
      die(); // Arret du script - sortie.
  }
  return $connex;
  //si pas erreur, on continue !

}

function deconnexionBDD($connex){
  $connex = null;
}
?>
