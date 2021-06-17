<?php
session_start();
require_once("assets/sql/connexion.php");
$conn1=connexionBDD();

if(!isset($_SESSION['pseudo'])) {  //Si un utilisateur malveillant tente de d'acceder via l'url à la page, sans être log, il sera renvoyé a la page 403
   header('Location: error.html');
}

if(isset($_GET['id']) AND $_GET['id'] > 0) {
   $getid = intval($_GET['id']);
   $requser = $conn1->prepare('SELECT * FROM ADMINS WHERE idadmin = ?');
   $requser->execute(array($getid));
   $userinfo = $requser->fetch();
?>
<html>
   <head>
      <title>Dashboard Admin</title>
      <link type="text/css" rel="stylesheet" href="assets/css/jsquery.css">
      <script src="assets/js/jsquery.js"></script>
      <meta charset="utf-8">
   </head>
   <body>

   <h1>Bienvenue <?php echo $userinfo['pseudo']; ?> !</h1>
<div class="container">
<div class="flex-box"></div>
<div class="flex-box"></div>
<div class="flex-box"></div>

<div class="menu">
  <ul class="menu__list">
    <li class="menu__item">Home</li>
    <li class="menu__item">About</li>
    <li class="menu__item dropdown-holder dropdown-holder1">
      Widgets
      <div class="hover-box">
        <ul class="hover-box__list">
          <li class="hover-box__item">Big Widget</li>
          <li class="hover-box__item">Bigger Widgets</li>
          <li class="hover-box__item">Huge Widget</li>
        </ul>
      </div>

    </li>
    <li class="menu__item dropdown-holder">Kabobs
      <div class="hover-box">
        <ul class="hover-box__list">
          <li class="hover-box__item">Shiskabobs</li>
          <li class="hover-box__item">BBQ kabobs</li>
          <li class="hover-box__item">Summer Kabobs</li>
        </ul>
      </div>

    </li>
    <li class="menu__item">Contact</li>

  </ul>
</div>

<div class="toggle">
  <span class="toggle__span"></span>
  <span class="toggle__span"></span>
  <span class="toggle__span"></span>
</div>

</div>




         
      </div>
   </body>
</html>
<?php   
}
?>