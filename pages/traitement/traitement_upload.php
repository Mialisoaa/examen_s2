<?php
session_start();
include("../inc/function.php");
include("../inc/connection.php");

$uploadDir ='../assets/videos/';

$maxSize = 25 * 1024 * 1024; // 2 Mo

$allowedMimeTypes = ['video/mp4'];

// Vérifie si un fichier est soumis
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_FILES['fichier'])) {
    $file = $_FILES['fichier'];

    if ($file['error'] !== UPLOAD_ERR_OK) {
    die('Erreur lors de l’upload : ' . $file['error']);
    }

    // Vérifie la taille
    if ($file['size'] > $maxSize) {
        die('Le fichier est trop volumineux.');
    }

    $finfo = finfo_open(FILEINFO_MIME_TYPE);
    $mime = finfo_file($finfo, $file['tmp_name']);
    finfo_close($finfo);

    if (!in_array($mime, $allowedMimeTypes)) {
        die('Type de fichier non autorisé : ' . $mime);
    }

    $originalName = pathinfo($file['name'], PATHINFO_FILENAME);
    $extension = pathinfo($file['name'], PATHINFO_EXTENSION);
    $newName = $originalName . '_' . uniqid() . '.' . $extension;
    
    echo $file['tmp_name'];
    $ext = "\uploads";
    echo "<br>";
    echo $originalName;
    echo "<br>";

    // Déplace le fichier
    
    if (move_uploaded_file($file['tmp_name'],$uploadDir . $newName)) {
        echo "Fichier uploadé avec succès : ". $newName;
        insertion($newName, $_SESSION["user"], $dbb);
        header("Location:../pages/upload.php");
    } else {
        echo "Échec du déplacement du fichier.";
    }
}
else {
    echo "Aucun fichier reçu.";
}