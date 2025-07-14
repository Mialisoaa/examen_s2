<?php
    ini_set ('display_errors' , '1');
include('../../INC/fonction.php');
    echo $_POST['email']; echo $_POST['name']; echo $_POST['dtn']; echo $_POST['genre']; echo $_POST['ville']; echo $_POST['psd'];
    if (!empty($_POST['email']) && !empty($_POST['name']) && !empty($_POST['dtn']) && !empty($_POST["genre"]) && !empty($_POST['ville']) && !empty($_POST['psd'])) {
        $email = $_POST['email'];
        $name = $_POST['name'];
        $date_naissance = $_POST['dtn'];
        $genre = $_POST['genre'];
        $ville = $_POST['ville'];
        $password = $_POST['psd'];

        add_user($email, $name, $date_naissance, $genre, $ville, $password);

        header('Location:../login.php');
    }
    else {
        header('Location:../inc.php');
    }