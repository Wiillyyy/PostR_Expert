<?php
session_start();
require_once("assetsdash/db/fonctionSQL.php");
require_once("assetsdash/db/connexionSilent.php");
$conn1=connexionBDD();

if(!isset($_SESSION['pseudo'])) {  //Si un utilisateur malveillant tente de d'acceder via l'url à la page, sans être log, il sera renvoyé a la page 403
  header('Location: ../error.html');
}
?>

<html>
   <head>
      <title>Dashboard Admin</title>
      <link type="text/css" rel="stylesheet" href="assetsdash/list.css">
      <script src="assetsdash/slidejs.js"></script>
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
      <a href="#" id="close">X</a>
      <a href="../dashboardA.php?id=1">Dashboard</a>
      <a href="Client.php">Clients</a>
      <a href="Poster.php">Posters</a>
      <a href="gestionCommande.php">Gestion Commandes</a>
      <a href="Commandes.php">Commandes</a>
      <a href="fichiers.php">BDD/MCD/Graphe()</a>
      <a style="position: fixed" href="../deco.php">Déconnexion</a>
    </nav>
  </header>
  <main class="main">
  <h1>Voici ma liste de fichiers !</h1>
   
  <div class="slideshow-container">

<div class="mySlides fade">
  <div style="color: black class="numbertext">1 / 3</div>
  <img src="assetsdash/img/MCD.png" style="width:100%">
  <div style="color: black" class="text">Graphe MCD</div>
</div>

<div class="mySlides fade">
<div style="color: black class="numbertext">2 / 3</div>
  <img src="assetsdash/img/Graphe.png" style="width:100%">
  <div style="color: black" class="text">Graphe Dessin</div>
</div>

<div class="mySlides fade">
  <div class="numbertext">3 / 3</div>
  <img src="img_mountains_wide.jpg" style="width:100%">
  <div class="text">Caption Three</div>
</div>

<a class="prev" onclick="plusSlides(-1)">&#10094;</a>
<a class="next" onclick="plusSlides(1)">&#10095;</a>

</div>
<br>

<div style="text-align:center">
  <span class="dot" onclick="currentSlide(1)"></span> 
  <span class="dot" onclick="currentSlide(2)"></span> 
  <span class="dot" onclick="currentSlide(3)"></span> 
</div>

<script>
var slideIndex = 1;
showSlides(slideIndex);

function plusSlides(n) {
  showSlides(slideIndex += n);
}

function currentSlide(n) {
  showSlides(slideIndex = n);
}

function showSlides(n) {
  var i;
  var slides = document.getElementsByClassName("mySlides");
  var dots = document.getElementsByClassName("dot");
  if (n > slides.length) {slideIndex = 1}    
  if (n < 1) {slideIndex = slides.length}
  for (i = 0; i < slides.length; i++) {
      slides[i].style.display = "none";  
  }
  for (i = 0; i < dots.length; i++) {
      dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";  
  dots[slideIndex-1].className += " active";
}
</script>

</body>
</html> 
