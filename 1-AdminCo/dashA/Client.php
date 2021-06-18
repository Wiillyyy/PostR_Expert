<?php
session_start();
require_once("assetsdash/db/fonctionSQL.php");
require_once("assetsdash/db/connexionSilent.php");
$conn1=connexionBDD();

if(!isset($_SESSION['pseudo'])) {  //Si un utilisateur malveillant tente de d'acceder via l'url à la page, sans être log, il sera renvoyé a la page 403
  header('Location: ../error.html');
}


if(!empty($_GET)){ //Si l'user selectionne le bouton submit execution de la tâche on attribue les variables qu'il a rentré

    $nom = htmlspecialchars($_GET['nom']);   // Formulaire d'inscription client comme existant déjà
    $prenom = htmlspecialchars($_GET['prenom']);
    $email = htmlspecialchars($_GET['email']);
    $mdp = htmlspecialchars($_GET['mdp']);

      $reqemail = $conn1->prepare('SELECT email FROM USERS WHERE email = ? ;');  //On recupere les email de la table utilisateurs 
      $reqemail->execute(array($email));  //mise en tableau des valeurs
      $emailexist = $reqemail->rowCount();
      
      if($emailexist != 0){  //Verifie si l'email est déja utilisé ou non 
        $erreur = "L'adresse E-mail est déjà utilisée !";
      }else {
          $req = $conn1->prepare('INSERT INTO USERS (email, mdp, prenom, nom) VALUES (?,?,?,?);');  // Insert dans la table USERS
          $req->execute([$email, $mdp, $prenom, $nom]); 
          header("Location: Client.php"); 
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
      <a href="Client.php">Clients()</a>
      <a href="Poster.php">Posters</a>
      <a href="editCmd.php">Éditer une Commande</a>
      <a href="Commande.php">Commandes</a>
      <a href="fichiers.php">BDD/MCD/Graphe</a>
      <a style="position: fixed" href="../deco.php">Déconnexion</a>
    </nav>
  </header>
  <main class="main">
  <h1>Bienvenue <?php echo $_SESSION['pseudo']; ?> !</h1>
   
    <h1>Regardons un peu nos clients ...</b></h1>

    <div class="wrapper fadeInDown">
    <div id="formContent">
	<form>
      <h2> Liste des clients </h2> <br />
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
                <th>Prénomㅤ</th>
                <th>Nomㅤㅤ</th> 
                <th>ㅤㅤㅤㅤEmailㅤㅤㅤ</th>
                <th>ㅤMDP</th>
            </tr>
      <Table Border=1>
      <?php
        $res=listeUsers($conn1);				// execution de la requête.
        $resu = $res->fetchAll();               // on recupere le tout dans un tableau. la 1ère ligne est associcé a chaque ligne qui suit.

				// Debut code pour affichage du resultat :
				//====================================================================
				foreach ($resu as $ligne) {
                    $idc = $ligne["iduser"]; // pour chaque ligne du tableau globale 2D (une ligne est vue comme un tableau 1D)
					          $lePr = $ligne["prenom"];
                    $lenom = $ligne["nom"];
                    $mail = $ligne["email"];
                    $mdp = $ligne["mdp"]; // on r�cup�re la variable de la ligne en cours avec le nom de son champ. Ici le champ s'appelle "nomclient" qui est le nom de l'attribut de la table.
					echo "<tr><td> ".$idc." | ".$lePr." | ".$lenom." | ".$mail." | ".$mdp." </td></tr>";

				}

				// fin code affichage du resultat
				?></table></div>
  
  <!-- Début Ajout client -->
  <div>
  <div class="wrapper fadeInDown">
    <div id="formContent">
	<form>
      <h2> Ajouter Client </h2> <br />
      <form METHOD="POST" ACTION="">
      
      <input type="text" id="login" name="nom" placeholder="Nom" 
      pattern="[\w]+" title="Merci d'entrer un nom qui existe !" required>

      <input type="text" id="login"  name="prenom" placeholder="Prénom" 
      pattern="[\w]+" title="Merci d'entrer un prénom qui existe !" required>

      <input type="text" id="login" name="email" placeholder="Email" 
      pattern="^([\w\.\-]+)@([\w\-]+)((\.(\w){2,3})+)$" title="Merci d'entrer un E-mail valide !" required>

      <input type="password" id="password" name="mdp" placeholder="Mot de Passe" pattern="^[a-zA-Z0-9_.-]*$" title="Merci d'entrer un MDP sans espace ou caracteres spéciaux" 
      required>
      <input type="submit" class="fadeIn fourth" value="Inscription"> 
      </form>

      <div>
  <?php
      if(isset($erreur)) {
            echo '<font color="red">'.$erreur."</font>"; } ?> </div>  <!--- Affiche une erreur si le Client existe déjà --->
  </main>
</div>
      </div>
   </body>
</html>
