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

function EnrCommandeUser($laDate, $laRef, $connex){                                     //  pour enregistrer une commande depuis le pannel client
     $sql="INSERT INTO COMMANDES (datecmd, refuser) VALUES ('".$laDate."', '".$laRef."')";  // j'ignore pourquoi cela ne fonctionne pas
     $result=$connex->query($sql);
     return $result; 

}

?>