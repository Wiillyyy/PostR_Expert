<?php
session_start();

session_destroy();  // on détruit la session, puis on redirige vers l'acceuil du site, simple mais efficace
header('Location: index.php');
exit;	
?>