<?php


function listerUser($connex, $leMail, $leMDP, $lePrenom, $leNom) {
  $sql="INSERT INTO USERS (Email, MDP, prenom, nom) VALUES ('".$leMail."', '".$leMDP."', '".$lePrenom."', '".$leNom."');";
      $resu=$connex->query($sql);
      return $resu;
}

function listerPoster($connex) {
     $sql="SELECT designation FROM ARTICLES ORDER BY designation;";
     $result=$connex->query($sql);
     return $result;
}
?>