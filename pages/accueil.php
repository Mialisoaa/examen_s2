<?php
include("../INC/fonction.php");
$liste = list_ump();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Page d'accueil</title>
</head>
<body>

    <header>
        <h1>Bienvenue sur la page d'accueil</h1>
    </header>

    <div class="container-fluid">
        <section>
            <table>

                <tr>
                    <th>Image de l'objet</th>
                    <th>Nom de l'objet</th>
                    <th>Dernière date d'emprunt</th>
                    <th>Date de retour</th>
                </tr>

                <?php
                        foreach ($emp as $aff_emp) { ?>
                            <tr>
                                <td><?= $aff_emp[""]?>"><?= $aff_emp["last_name"]?></td>
                                <td><?= $aff_emp["first_name"]?></td>
                                <td><?= $aff_emp["gender"]?></td>
                                <td><?= reformater_date($aff_emp["birth_date"]) ?></td>
                            </tr>

                        <?php }
                    ?> 

            </table>
        </section>
    </div>

    <footer>
        <p>Emprunt COPYRIGHT 2025</p>
    </footer>
</body>
</html>