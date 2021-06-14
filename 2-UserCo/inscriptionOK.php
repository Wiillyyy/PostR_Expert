<?php
require_once("assets/sql/connexionSilent.php");
$conn1=connexionBDD();
require_once("assets/sql/fonctionBDD.php");
 ?>
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
	<form>
      <h3 class="active"> Inscription Réussie ! </h3> <br />
	  <?php
	$leMail= $_GET['P_Email'] ;
	$leMDP= $_GET['P_MDP'] ;


	InscriptionBDD($conn1, $leMail, $leMDP);

	deconnexionBDD($conn1);?>

  <input type="submit" onclick="dashboard.php" class="fadeIn fourth" value="Ok !" href="dashboard.php">
      </form>
