<?php
    ini_set ('display_errors' , '1');
    include("../../INC/fonction.php");
    
    echo $_POST["name"];

    if(!empty($_POST["email"]) && !empty($_POST["name"]) && !empty($_POST["password"])) {
        
        $dbb = dbconnect();
        $email = $_POST["email"];
        $name = $_POST["name"];
        $password = $_POST["password"];

        $sql = "SELECT * FROM s2_membre WHERE email = '%s' and mdp = '%s' and nom='%s'; ";
        echo $sql = sprintf($sql, $email, $password, $name);

        $resultat = mysqli_query($dbb, $sql);
        $count = mysqli_num_rows($resultat);
        echo $count;
        if ($count==1) {
            $donne = mysqli_fetch_assoc($resultat);//preparation affichage 
           echo $_SESSION["id_mbr"] = $donne["id_mbr"];
           header("Location:../accueil.php");
        }
        else  if($count!=1) {
            header("Location:../login.php?erreur=true");}
    } else {
        header("Location:../login.php?erreur=true");
    }
       