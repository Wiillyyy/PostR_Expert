<?php
function ListerClients($connex) {
// permet de lister les clients
   $sql="SELECT NomClient FROM CLIENTS ORDER BY NomClient;";									// d�claration de la variable appelee $sql.
   $result=$connex->query($sql); 				// execution de la requ�te. Le resultat est dans la variable $res.
   return $result;								// retourne a l'appelant le resultat.
}

function enregistreClient($connex, $local_nomClient) {
// on r�cup�re les param�tres (elles sont dans un tableau sur le serveur) et on cr�e une nouvelle variable pour les appeler ult�rieurement
//(cette op�ration n'est pas obligatoire - on peut acc�der par la suite � la variable par le tableau
// on pr�f�re pour des raisons de claret� de code copier la variable du tableau dans une variable (php)



$sql="INSERT INTO CLIENTS (NomClient) VALUES ('".$local_nomClient."') RETURNING idclient;"; // initialisation de la variable $sql qui contient la commande � �x�cuter
    // � noter la pr�sence de RETURNING idcleint qui permettra de r�cuperer l'id affect� par le syst�me via SERIAL (voir ci-apr�s)
//on peut �galement �crire sous forme moins stricte cette affectation en n'utilisant pas la concat�nation (.). Le php tol�re ce type d'�criture :
//$sql="INSERT INTO CLIENTS (NomClient) VALUES ('$local_nomClient') RETURNING idclient;";
    $resu=$connex->query($sql);				// demande d'execution de la requ�te sur la base via le connecteur $conn1. Le resultat est dans la variable $resu.
    return $resu;
}











function enregistreNouvelArticle($connex, $leNomArticle, $lePrix) {
  $sql="INSERT INTO ARTICLES (designation, prixvente) VALUES ('".$leNomArticle."', '".$lePrix."')";
      $resu=$connex->query($sql);
      return $resu;
}

function listeArticles($connex) {
     $sql="SELECT designation FROM ARTICLES ORDER BY designation;";
     $result=$connex->query($sql);
     return $result;
}
?>
