<?php
session_start();
require_once("assetsdash/db/fonctionSQL.php");
require_once("assetsdash/db/connexionSilent.php");
$conn1=connexionBDD();

if(!isset($_SESSION['pseudo'])) {  //Si un utilisateur malveillant tente de d'acceder via l'url à la page, sans être log, il sera renvoyé a la page 403
  header('Location: ../error.html');

if(!empty($_POST)){

  $refcmd = htmlspecialchars($_POST['refCmd']);
  $refPoster = htmlspecialchars($_POST['refPoster']);
  $quantite = htmlspecialchars($_POST['quantité']);

  $req = $conn1->prepare('INSERT INTO CONTENUCMD (idrefcmd, idrefpstr, qtecmd) VALUES (?,?,?);'); // Insertion dans la table ContenuCMD
  $req->execute([$refcmd, $refPoster,$quantite]);
  header("Location: editCmd.php");
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
      <a href="editCmd.php">Éditer une Commande()</a>
      <a href="Commande.php">Commandes</a>
      <a href="fichiers.php">BDD/MCD/Graphe</a>
      <a style="position: fixed" href="../deco.php">Déconnexion</a>
    </nav>
  </header>
  <main class="main">
  <h1>Bienvenue <?php echo $_SESSION['pseudo']; ?> !</h1>
   
    <h1>Éditer une commande dans la base de donnés ? Vous êtes au bon endroit :)</b></h1>
    <div class="wrapper fadeInDown">
    <div id="formContent">
    <form>
      <h2> Détail des commandes </h2> <br />
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
                <th>ID Commande</th>
                <th>ID Poster</th> 
                <th>Quantité Commandée</th>
            </tr>
      <Table Border=1>
      <?php
        $res=listeEDCmd($conn1);			          // execution de la requête.
        $resu = $res->fetchAll();               // on rrecupere le tout dans un tableau. la 1ère ligne est associcé a chaque ligne qui suit.

				// Debut code pour affichage du resultat :
				//====================================================================
				foreach ($resu as $ligne) {
                    $idc = $ligne["idrefcmd"]; // pour chaque ligne du tableau globale 2D (une ligne est vue comme un tableau 1D)
					$dtc = $ligne["idrefpstr"];
                    $ref = $ligne["qtecmd"]; 
                    echo "<tr><td> ".$idc." &nbsp|&nbsp ".$dtc." &nbsp|&nbsp ".$ref." </td></tr>";

				}

				// fin code affichage du resultat
				?></table>
  
    <div class="wrapper fadeInDown">
    <div id="formContent">

    <form METHOD="POST">
      <h2> Éditer une commande : </h2>
      <div><h3> Identifiant de la commande : </h3>
      <?php
      $res=listeCommandes($conn1);
      $resu = $res->fetchAll();
      print( '<select name="refCmd">');
      foreach ($resu as $ligne) {
      print( '<option value='.$ligne["idcommande"].'>'.$ligne["idcommande"].'</option>');
      }
      print( "</select>");
      ?><h3>Article : <br></h3>
    <div><?php
    $res=listePoster($conn1);
    $resu = $res->fetchAll();
    print( '<select name="refPoster">');
    foreach ($resu as $ligne) {
    print( '<option value='.$ligne["idposter"].'>'.$ligne["titre"].'</option>');
    }
    print( "</select>");
?>
<h3> Quantité </h3>  <input type = "text" name="quantité"> 

      
 </div>
  <input type="submit" value="Envoyer">


  <div>
      </form>

  </main>
</div>

      </div>
   </body>
</html>
