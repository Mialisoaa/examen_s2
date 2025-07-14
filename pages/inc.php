<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Page d'Inscription</title>
  <link rel="stylesheet" href="../assets/css/style.css">
    
</head>
<body>

  <div class="login-container">

    <div class="logo">Inscription</div>

    <form action="traitement/trait_inc.php" method="POST">
      <h3>Email</h3>
      <input type="text" name="email" placeholder="Email de l'utilisateur"/>
      <h3>Nom</h3>
      <input type="text" name="name" placeholder="Nom de l'utilisateur"/>
      <h3>date de naissance</h3>
      <input type="date" name="dtn" />
      <h3>Genre</h3>
      <select name="genre" id="">
        <option value="M">homme</option>
        <option value="F">femme</option>
    </select>
      <h3>ville</h3>
      <input type="text" name ="ville" placeholder="ex:Antananarivo" />
      <h3>mot de passe </h3>
      <input type="password" name="psd" placeholder="mot de passe">
      <button type="submit">s'inscrire</button>
    </form>

    <p class="signup"></p><a href="login.php">Déjà inscrit ? Se connecter</a></p>
  </div>

</body>
</html>