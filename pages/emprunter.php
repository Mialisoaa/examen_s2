<?php
include("../INC/fonction.php");
$objs = list_obj();
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Emprunter un objet</title>
</head>
<body>

<h1>Sélection d'objet à emprunter</h1>

<form action="traitement/traitement_umpr.php" method="post">
    <label for="objet">Choisissez un objet :</label>

    <select name="id_objet" required>
        <?php foreach ($objs as $obj) { 
            $dispo = empty($obj["date_retour"]) || strtotime($obj["date_retour"]) < time(); 
            if ($dispo) { ?>
                <option value="<?= $obj["id_objet"] ?>"><?= htmlspecialchars($obj["nom_obj"]) ?></option>
        <?php } } ?>
    </select><br><br>
    

    <label for="duree">Durée de l'emprunt (en jours) :</label>
    <input type="number" name="duree" min="1" max="30" required><br><br>
    <a href="accueil.php">           
    <button type="submit">Valider l'emprunt</button>
    </a>
    

</form>

</body>
</html>
