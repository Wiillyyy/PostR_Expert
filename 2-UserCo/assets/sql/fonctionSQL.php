<?php


function listerUser($connex, $leMail, $leMDP, $lePrenom, $leNom) {
  $sql="INSERT INTO USERS (Email, MDP, prenom, nom) VALUES ('".$leMail."', '".$leMDP."', '".$lePrenom."', '".$leNom."');";
      $resu=$connex->query($sql);
      return $resu;
}

function listerPoster($connex) {
     $sql="SELECT * FROM POSTERS ORDER BY idposter;";
     $result=$connex->query($sql);
     return $result;
}

?>