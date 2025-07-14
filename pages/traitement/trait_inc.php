<?php
    ini_set ('display_errors' , '1');

    if (!empty($_POST['email']) && !empty($_POST['name']) && !empty($_POST['dtn']) && !empty($_POST["genre"]) && !empty($_POST['ville']) && !empty($_POST['psd'])) {
        $email = $_POST['email'];
        $name = $_POST['name'];
        $date_naissance = $_POST['dtn'];
        $genre = $_POST['genre'];
        $ville = $_POST['ville'];
        $password = $_POST['psd'];

        
    }