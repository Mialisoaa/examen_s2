<?php
include("../INC/fonction.php");
$emp = list_ump(); // ← On appelle bien la fonction et stocke dans $emp
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
    </header>

    <div class="container-fluid">
        <section>
            <table border="1">
                <tr>
                    <th>Image de l'objet</th>
                    <th>Nom de l'objet</th>
                    <th>Dernière date d'emprunt</th>
                    <th>Date de retour</th>
                </tr>

                <?php foreach ($emp as $aff_emp) { ?>
                    <tr>
                        <td><img src="../images/<?= htmlspecialchars($aff_emp["image"]) ?>" width="80"></td>
                        <td><?= htmlspecialchars($aff_emp["nom_objet"]) ?></td>
                        <td><?= htmlspecialchars($aff_emp["date_emprunt"]) ?></td>
                        <td><?= htmlspecialchars($aff_emp["date_retour"]) ?></td>
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
