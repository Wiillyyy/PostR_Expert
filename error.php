<?php
switch($_GET['code'])
{
case '404':header('Location: https://srv-prj-new.iut-acy.local/RT/1projet27/error404.php');
break;
default:header('Location: https://srv-prj-new.iut-acy.local/RT/1projet27/');
}
?>

<!-- Ce fichier doit normalement être une redirection persionnalisée, je m'explique -->
<!-- Si l'user rentre un url qui n'existe pas exemple 1projet27/indez.php au lieu de index.php , il sera automatiquement redirigé vers cette page -->
<!-- néanmoins, pour que cela fonctionne il faut modifier le fichier .htacces et lui ajouter une ligne, ce fichier étant en lecture seule ma redirection ne marche pas :(  -->