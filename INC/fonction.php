<?php
ini_set ('display_errors' , '1');
session_start();
function dbconnect()
{
    static $connect = null;
    if ($connect == null) {
        //$connect = mysqli_connect('localhost', 'ETU004317', 'eFR4GqMz', 'db_s2_ETU004317');
        $connect = mysqli_connect('localhost', 'root', '', 'db_s2_ETU004317');
        if (!$connect){
            die(''. mysqli_connect_error());
        }
    }
    return $connect;
}

function tableau($table)
{
    $resultat = $table;

    $donne = [];
    while ($row = mysqli_fetch_assoc($resultat)) {
        $donne[] = $row;
    }
    return $donne;
}

function list_ump() {
    $dbb = dbconnect();

    $sql = "SELECT * FROM s2_emprunt"; // ← Vérifie que cette table existe
    $result = mysqli_query($dbb, $sql);

    if (!$result) {
        die("Erreur SQL : " . mysqli_error($dbb));
    }

    $data = [];
    while ($row = mysqli_fetch_assoc($result)) {
        $data[] = $row;
    }

    return $data;
}


function reformater_date($date)
{
    $date = explode("-", $date);
    $annee = $date[0];
    $mois = $date[1];
    $jour = $date[2];
    return "$jour/$mois/$annee";
}
function insertion($newName, $user, $bdd)
{
    $sql = "INSERT INTO videos (id_user, vid_nom) VALUES (%s, '%s');";
    $sql = sprintf($sql, $user, $newName);
    $resultat = mysqli_query($bdd, $sql);
}