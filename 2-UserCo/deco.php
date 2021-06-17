<?php
session_start();

session_destroy();
header('Location: /RT/1projet27/index.php');
exit;	
?>