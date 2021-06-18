<?php


function listeUsers($connex) {
     $sql="SELECT * FROM USERS ORDER BY iduser ;";
     $result=$connex->query($sql);
     return $result;
}

function listePoster($connex) {
     $sql="SELECT * FROM POSTERS ORDER BY idposter ;";
     $result=$connex->query($sql);
     return $result;
}

function listeCmd($connex) {
     $sql="SELECT * FROM COMMANDES ORDER BY idcommande ;";
     $result=$connex->query($sql);
     return $result;
}

function listeEDCmd($connex) {
     $sql="SELECT * FROM contenucmd ORDER BY idrefcmd ;";
     $result=$connex->query($sql);
     return $result;
}

function listeCommandes($connex) {
     $sql="SELECT idcommande FROM COMMANDES ORDER BY idcommande;";
     $result=$connex->query($sql);
     return $result;
 }

?>