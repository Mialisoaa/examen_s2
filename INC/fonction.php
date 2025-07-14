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

function tableau($sql)
{
    $connexion = dbconnect();
    $val = mysqli_query($connexion, $sql);

    $tableau = [];
    while ($row = mysqli_fetch_array($val)) {
        $tableau[] = $row;
    }

    return $tableau;
}

function list_ump() {
    //$dbb = dbconnect();
    $sql = "SELECT * FROM s2_emprunt"; 
    //$result = mysqli_query($dbb, $sql);
    return $sql;
}


function reformater_date($date)
{
    if($date == null){
        return"aucun changement en cours";
    }
    $date = explode("-", $date);
    $annee = $date[0];
    $mois = $date[1];
    $jour = $date[2];
    return "$jour/$mois/$annee";
}
function insertion($newName, $user, $bdd)
{
    $sql = "INSERT INTO s2_img_obj (id_obj, nom_obj) VALUES (%s, '%s');";
    $sql = sprintf($sql, $user, $newName);
    $resultat = mysqli_query($bdd, $sql);
}

function add_user($email, $name, $date_naissance, $genre, $ville, $password){

    $bdd = dbconnect();
    $sql = "insert into s2_membre (nom, dtn, genre, email, ville, mdp) values
    (%s, %s, %s, %s, %s, %s);";
    echo $sql = sprintf($sql, $name, $date_naissance, $genre, $email,  $ville, $password);
    $resultat = mysqli_query($bdd, $sql);
    return $sql;
}

function list_obj(){
    //$bdd = dbconnect();
    $sql = "select * from v_list_obt;";
    return tableau($sql);
}