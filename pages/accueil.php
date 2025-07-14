<?php
include("../INC/fonction.php");
$emp = list_obj(); 

if (isset($_GET["success"])) {
    if ($_GET["success"] == "1") {
        echo "<p style='color:green;'>Emprunt enregistré avec succès !</p>";
    } else {
        echo "<p style='color:red;'> Échec de l'emprunt.</p>";
    }
}


?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Page d'accueil</title>
</head>
<body>

    <header>
        <h1>Bienvenue sur la page d'accueil</h1>
        <a href="upload.php">ajouter une nouvelle objet</a>
        <a href="emprunter.php">
        <button type="button">Emprunter</button>
        <button><a href="membre.php">profils</a></button>
    </a>

    </header>

    <div class="container-fluid">
        <section>
            <table border="1">
                <tr>
                    <th>Image de l'objet</th>
                    <th>Nom de l'objet</th>
                    <th>Dernière date d'emprunt</th>
                    <th>Date de retour</th>
                    <th>Disponibilité</th>
                </tr>

                <?php foreach ($emp as $aff_emp) {  //echo $aff_emp["image_objet"]; ?>
                    
                    <tr>
                        <td><img src="../assets/img/<?= htmlspecialchars($aff_emp["image_objet"]) ?>" width="80"></td>
                        <td><?= htmlspecialchars($aff_emp["nom_obj"]) ?></td>
                        <td><?= htmlspecialchars(reformater_date($aff_emp["date_emprunt"])) ?></td>
                        <td><?= htmlspecialchars(reformater_date($aff_emp["date_retour"])) ?></td>
                        <td>
                            <?= empty($aff_emp["date_retour"]) || strtotime($aff_emp["date_retour"]) < time() ? "Disponible" : "Indisponible" ?>
                        </td>
                    </tr>
                <?php } ?> 

            </table>
        </section>
    </div>

    <footer>
        <p>Emprunt COPYRIGHT 2025</p>
    </footer>
</body>
</html>
