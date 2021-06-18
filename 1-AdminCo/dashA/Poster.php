<?php
session_start();
require_once("assetsdash/db/fonctionSQL.php");
require_once("assetsdash/db/connexionSilent.php");
$conn1=connexionBDD();

if(!isset($_SESSION['pseudo'])) {  //Si un utilisateur malveillant tente de d'acceder via l'url à la page, sans être log, il sera renvoyé a la page 403
  header('Location: ../error.html');
}

if(!empty($_GET)){ //Si l'user selectionne le bouton submit execution de la tâche on attribue les variables qu'il a rentré

  $titre = htmlspecialchars($_GET['titre']);
  $prix = htmlspecialchars($_GET['prix']);

    $reqposter = $conn1->prepare('SELECT titre FROM POSTERS WHERE titre = ? ;');  //On recupere les email de la table utilisateurs 
    $reqposter->execute(array($titre));  //mise en tableau des valeurs
    $titreexist = $reqposter->rowCount();
    
    if($titreexist != 0){  //Verifie si le poster existe déja ou non 
      $erreur = "Le Poster Existe déjà !";
    }else {
        $req = $conn1->prepare('INSERT INTO POSTERS (titre, prix) VALUES (?,?);');
        $req->execute([$titre, $prix]);
        header("Location: Poster.php"); 
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
      <a href="Poster.php">Posters()</a>
      <a href="editCmd.php">Éditer une Commande</a>
      <a href="Commande.php">Commandes</a>
      <a href="fichiers.php">BDD/MCD/Graphe</a>
      <a style="position: fixed" href="../deco.php">Déconnexion</a>
    </nav>
  </header>
  <main class="main">
  <h1>Bienvenue <?php echo $_SESSION['pseudo']; ?> !</h1>
   
    <h1>Lister tout les Posters de la base de donnés :</b></h1>

    <div class="wrapper fadeInDown">
    <div id="formContent">
	<form>
      <h2> Liste des Posters </h2> <br />
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
                <th>N°Posterㅤㅤㅤ</th>
                <th>ㅤㅤㅤㅤTitreㅤㅤㅤㅤ</th> 
                <th>ㅤㅤㅤㅤPrix (en €)</th>
            </tr>
      <Table table Border=1 >
      <?php
        $res=listePoster($conn1);				// execution de la requête.
        $resu = $res->fetchAll();               // on rrecupere le tout dans un tableau. la 1ère ligne est associcé a chaque ligne qui suit.

				// Debut code pour affichage du resultat :
				//====================================================================
				foreach ($resu as $ligne) { // pour chaque ligne du tableau globale 2D (une ligne est vue comme un tableau 1D)
				          	$id = $ligne["idposter"];
                    $titre = $ligne["titre"];
                    $info = $ligne["infosuppl"];
                    $prix = $ligne["prix"]; // on r�cup�re la variable de la ligne en cours avec le nom de son champ. Ici le champ s'appelle "nomclient" qui est le nom de l'attribut de la table.
					echo "<tr><td> ".$id." | ".$titre." | ".$prix." </td></tr>";

				}

				// fin code affichage du resultat
				//====================================================================
				?></table></div>
  <div>
  <div class="wrapper fadeInDown">
    <div id="formContent">
	<form>
      <h2> Ajouter Poster </h2> <br />
      <form METHOD="POST" ACTION="">
      
      <input type="text" id="login" name="titre" placeholder="Titre du Poster" pattern="^[a-zA-Z0-9_ ]*$" required>

      <input type="text" id="login"  name="prix" placeholder="Prix (sensible casse)" pattern="^\d+(\.\d+)*$" title="Merci d'entrer un prix juste !" required>

      <input type="submit" class="fadeIn fourth" value="Ajout Poster !"> </form>
<div>
  <?php
      if(isset($erreur)) {
            echo '<font color="red">'.$erreur."</font>"; } ?> </div>  <!--- Affiche une erreur si le poster existe déjà --->
      </form>

  </main>
</div>

      </div>
   </body>
</html>
