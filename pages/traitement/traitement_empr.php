<?php
include("../INC/fonction.php");

if (isset($_POST["id_objet"]) && isset($_POST["duree"])) {
    $id_objet = (int) $_POST["id_objet"];
    $duree = (int) $_POST["duree"];

    $id_user = 1; 

    enregistrer_emprunt($id_user, $id_objet, $duree);

   
    header("Location: accueil.php?success=1");
    exit;
} else {
    header("Location:accueil.php?success=0");
    exit;
}
