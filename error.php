<?php
switch($_GET['code'])
{
case '404':header('Location: https://srv-prj-new.iut-acy.local/RT/1projet27/error404.php');
break;
default:header('Location: https://srv-prj-new.iut-acy.local/RT/1projet27/');
}
?>