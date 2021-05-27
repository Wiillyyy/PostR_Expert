<?php
function connexionBDD(){
  include("paramCon.php");

  $dsn='pgsql:host='.$lehost.';dbname='.$dbname.';port='.$leport; // connexion � la bdd (connexion non persistante) avec le connecteur nomm� $conn1

  try { // essai de connexion
      $connex = new PDO($dsn, $user, $pass); // tentative de connexion
      print "Connecté :)"<br />""; // message de debug

  } catch (PDOException $e) { // si erreur
      print "Erreur de connexion � la base de donn�es ! : " . $e->getMessage(); // pour exception
      die(); // Arr�t du script - sortie.
  }
  return $connex;
  //si pas erreur, on continue !
  // $conn1 est le connecteur de notre base de donn�es.
}

function deconnexionBDD($connex){
  $connex = null;
}
?>