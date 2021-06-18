<?php
session_start();
require_once("assets/sql/connexionSilent.php");
require_once("assets/sql/fonctionSQL.php");
$conn1=connexionBDD();
 
if(!isset($_SESSION['prenom'])) {  //Si l'user tente de d'acceder via l'url à la page, sans être log, il sera renvoyé a la page 403
    header('Location: error.html'); // envoi vers erreur.html
}

if(isset($_GET['id']) AND $_GET['id'] > 0) {  // on choppe l'id de la session précédente 
   $getid = intval($_GET['id']);
   $requser = $conn1->prepare('SELECT * FROM USERS WHERE iduser = ?');  // on prends toutes les depuis la BDD concercant les infos de l'user par rapport a son ID 
   $requser->execute(array($getid));
   $userinfo = $requser->fetch();
}

function listPerUser($connex){
    $cmdID = $_SESSION['id'];
    $sql='SELECT * FROM COMMANDES WHERE refuser = ('.$cmdID.')';
    $result=$connex->query($sql);
    return $result;
}

?>

<html>
   <head>
      <title>Dashboard Client</title>
      <link type="text/css" rel="stylesheet" href="assets/css/dashboard.css">
      <meta charset="utf-8">
   </head>
   <body>

   <html>
   <body>
   <div id="wrap">
  <header class="header">
    <nav class="nav">
      <a href="#wrap" id="open">
    <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="34px" height="27px" viewBox="0 0 34 27" enable-background="new 0 0 34 27" xml:space="preserve">
    <rect fill="#FFFFFF" width="34" height="4"/> <!-- On remplit les 3 barres de blanc -->
    <rect y="11" fill="#FFFFFF" width="34" height="4"/> <!-- Celle du milieu -->
    <rect y="23" fill="#FFFFFF" width="34" height="4"/> <!-- Dernière -->
</svg>
      </a>
      <a href="#" id="close">X</a>
      <a href="dashboard.php">Dashboard</a>
      <a href="#">Commandes()</a>
      <a style="color: red;" href="deco.php">Déconnexion</a>
    </nav>
  </header>
  <main class="main">
<div>
  <h1>Passer une Commande ou Lister une Commande !</h1></div>
   
  <div class="wrapper fadeInDown">
    <div id="formContent">
    <form>
      <h2> Liste des Commandes </h2> <br />
      <style>
		table, th, td {
        border-collapse: collapse;
		align: center;
		margin-left: auto;
        margin-right: auto;
		}
		</style>
        <table Border=1.1 bgcolor="red">
            <tr>
                <th>ID</th>
                <th>Date de Cmd</th> 
                <th>Client</th>
            </tr>
      <Table Border=1>
      <?php
        $res=listPerUser($conn1);			          // execution de la requête.
        $resu = $res->fetchAll();               // on rrecupere le tout dans un tableau. la 1ère ligne est associcé a chaque ligne qui suit.

				// Debut code pour affichage du resultat :
				//====================================================================
				foreach ($resu as $ligne) {
                    $idc = $ligne["idcommande"]; // pour chaque ligne du tableau globale 2D (une ligne est vue comme un tableau 1D)
					$dtc = $ligne["datecmd"];
                    $ref = $ligne["refuser"]; 
                    echo "<tr><td> ".$idc." &nbsp|&nbsp ".$dtc." &nbsp|&nbsp ".$ref." </td></tr>";

				}

				// fin code affichage du resultat
				?></table></div>
    <!-- Debut Enregistrer une Cmde --->
    
    <div class="wrapper fadeInDown">
    <div id="formContent">

    <form METHOD="GET">
      <h2> Passer une commande : </h2>

      <div><h3> Date de la commande : <br><br><input type="date" id="start" name="datecmd" value="2021-06-18" min="2021-06-18" max="2022-01-01" required><br> Poster : <br><h3>
      
      <?php
      $res=listerPoster($conn1);
      $resu = $res->fetchAll(); // on fetch le tout dans un tableau. Dans le tableau résultat, la 1ère ligne est associée a chaque ligne qui suit.
      print( '<select name="refposter">'); // envoyé comme paramètre dans le formulaire
      foreach ($resu as $ligne) {
      print( '<option value='.$ligne["idposter"].'>'.$ligne["titre"].'</option>');
      }
        print( "</select>");
  ?> </div>
  <input type="submit" value="Envoyer">
