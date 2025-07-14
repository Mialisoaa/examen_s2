<?php 
    include("../INC/fonction.php");
    $id_actif = $_SESSION["id_mbr"];
    //echo $id_actif;
    $list = list_ump($id_actif);
?> 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>profils utilisateur</title>
</head>
<body>

    <header>
        <h1>profils utilisateur</h1>
    </header>

    <div class="container-fluid">
        <section>
            <h1>liste des objets emprunter</h1>
            <table border=1>
                <tr>
                    <th>nom de l'objet</th>
                    <th>date d'emprunt</th>
                    <th>etat de l'objet avant le retour</th>
                </tr>

                <?php foreach ($list as $aff) { ?>        
                    <tr>
                        <td><?= $aff["nom_obj"] ?></td>
                        <td><?= reformater_date($aff["date_ump"]) ?></td>
                        <td>
                            <form action="trait_retour.php?obj=<?= $aff["id_obj"] ?>">
                                <select name="retour">
                                    <option value="true">ok</option>
                                    <option value="false">abimé</option>
                                </select>
                                <input type="submit" value="valider">
                            </form>
                        </td>
                    </tr>
                <?php } ?> 
            </table>
        </section>
    </div>

</body>
</html>