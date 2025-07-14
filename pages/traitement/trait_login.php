<?php
    ini_set ('display_errors' , '1');
    include("../../INC/fonction.php");

    echo $_POST["name"];

    if(!empty($_POST["email"]) && !empty($_POST["name"]) && !empty($_POST["password"])) {
        
        $sql = dbconnect();
        $email = $_POST["email"];
        $name = $_POST["name"];
        $password = $_POST["password"];

        $sql = "SELECT * FROM s2_membre WHERE email = '%s' and mdp = '%s' and name='%s' ";
        $sql = sprintf($sql, $email, $password, $name);

        $resultat = mysqli_query($bdd, $sql);
        $count = mysqli_num_rows($resultat);
        echo $count;
    }