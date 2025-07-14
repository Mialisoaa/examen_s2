<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<h1 class="text-center text-primary">Bienvenue au test de Upload</h1>
    <h2 ></h2>

    <form action="traitement/trait_upload.php" method="post" enctype="multipart/form-data" class="text-center">
        <label for="fichier" class="text-primary">mettez votre fichier ici :</label>
        <input type="file" name="fichier" id="fichier" required>
        <br><br>
        <input type="submit" value="Uploader">
    </form>
    <a href="index.php">retour>></a>
</body>
</html>