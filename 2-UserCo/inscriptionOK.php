<?php
require_once("assets/sql/connexionSilent.php");
$conn1=connexionBDD();
require_once("assets/sql/fonctionSQL.php");

if(isset($_POST['submit'])){
  header("Location : /RT/1projet27/index.php");
}
 ?>
<!DOCTYPE html>
<html>
    <head>
      <meta http-equiv="refresh" content="5; url=../index.php" /> <!--- Redirection automatique au bout de 5 secondes --->
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
      <meta name="description" content="LoginClient">
      <meta name="author" content="William">
      <link type="text/css" rel="stylesheet" href="assets/css/style.css">

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
      <h1 class="active"> Inscription Réussie ! </h1> <br />
      <input type="submit" name="submit" class="fadeIn fourth" value="Ok !">
  <div>
      </form>
