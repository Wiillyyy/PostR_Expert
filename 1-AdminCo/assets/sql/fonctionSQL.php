<?php


function listeUsers($connex) {
     $sql="SELECT * FROM USERS ORDER BY prenom ;";
     $result=$connex->query($sql);
     return $result;
}

function listePoster($connex) {
     $sql="SELECT * FROM POSTERS ORDER BY idposter ;";
     $result=$connex->query($sql);
     return $result;
}

?>