<?php
session_start();
require_once("assetsdash/db/fonctionSQL.php");
require_once("assetsdash/db/connexionSilent.php");
$conn1=connexionBDD();

if(!isset($_SESSION['pseudo'])) {  //Si un utilisateur malveillant tente de d'acceder via l'url à la page, sans être log, il sera renvoyé a la page 403
  header('Location: ../error.html');

if(!empty($_GET)){

  $date = htmlspecialchars($_GET['datecmd']);  //  Formulaire de commandes comme existant déjà
  $refuser = htmlspecialchars($_GET['refUser']);
  

  $req = $conn1->prepare('INSERT INTO COMMANDES (datecmd, refuser) VALUES (?,?);'); // Insertion dans la table commandes
  $req->execute([$date, $refuser]);
  header("Location: Commande.php");
}
}

?>
<html>
   <head>
      <title>Dashboard Admin</title>
      <link type="text/css" rel="stylesheet" href="assetsdash/list.css">
      <script src="assets/js/jsquery.js"></script>
      <meta charset="utf-8">
   </head>
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
      <a href="#" id="close">×</a>
      <a href="../dashboardA.php?id=1">Dashboard</a>
      <a href="Client.php">Clients</a>
      <a href="Poster.php">Posters</a>
      <a href="editCmd.php">Éditer une Commande</a>
      <a href="Commande.php">Commandes()</a>
      <a href="fichiers.php">BDD/MCD/Graphe</a>
      <a style="position: fixed" href="../deco.php">Déconnexion</a>
    </nav>
  </header>
  <main class="main">
  <h1>Bienvenue <?php echo $_SESSION['pseudo']; ?> !</h1>
   
    <h1>Une envie manuelle d'ajouter une commande ? C'est possible !</b></h1>
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
        $res=listeCmd($conn1);
        $res1=listeUsers($conn1);			          // execution de la requête.
        $resu = $res->fetchAll();               // on recupere le tout dans un tableau. la 1ère ligne est associcé a chaque ligne qui suit.

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
  <div>
    <div class="wrapper fadeInDown">
    <div id="formContent">

    <form METHOD="POST">
      <h2> Enregistrer une commande : </h2>
      <div><h3> Date de la commande : <br><br><input type="date" id="start" name="datecmd" value="2021-06-18" min="2021-06-18" max="2022-01-01" required><br> Client : <br><h3>
      
      <?php
      $res=listeUsers($conn1);
      $resu = $res->fetchAll(); // on fetch le tout dans un tableau. Dans le tableau résultat, la 1ère ligne est associée a chaque ligne qui suit.
      print( '<select name="refUser">'); // envoyé comme paramètre dans le formulaire
      foreach ($resu as $ligne) {
      print( '<option value='.$ligne["iduser"].'>'.$ligne["prenom"].'</option>');
      }
    print( "</select>");
  ?> </div>
  <input type="submit" name="submit" value="Envoyer">


  <div>
      </form>

  </main>
</div>

      </div>
   </body>
</html>
