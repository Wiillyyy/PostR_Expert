<?php



function InscriptionBDD($connex, $leMail, $leMDP) {
  $sql="INSERT INTO USERS (Email, MDP) VALUES ('".$leMail."', '".$leMDP."');";
      $resu=$connex->query($sql);
      return $resu;
}

function listePoster($connex) {
     $sql="SELECT designation FROM ARTICLES ORDER BY designation;";
     $result=$connex->query($sql);
     return $result;
}

?>