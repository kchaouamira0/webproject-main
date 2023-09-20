<?php
 session_start();
 if($_SESSION["autoriser"]!="oui"){
	header("location:login.php");
	exit();
 }
else {
include("connexion.php");
$req="SELECT * FROM groupe";
$reponse = $pdo->query($req);
if($reponse->rowCount()>0) {
	$outputs["groupes"]=array();
while ($row = $reponse ->fetch(PDO::FETCH_ASSOC)) {
        $groupe = array();
        $groupe["Nbre_eleves"] = $row["Nbre_eleves"];
        $groupe["Specialité"] = $row["Specialité"];
        $groupe["emailgrp"] = $row["emailgrp"];
        $groupe["Nom"] = $row["Nom"];
        $groupe["id_groupe"] = $row["id_groupe"];
         array_push($outputs["groupes"], $groupe);
    }
    // success
    $outputs["success"] = 1;
     echo json_encode($outputs);
} else {
    $outputs["success"] = 0;
    $outputs["message"] = "Pas de groupe";
    // echo no users JSON
    echo json_encode($outputs);
}
}
?>