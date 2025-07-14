<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Page d'emprunt</title>
  <style>
    * {
      box-sizing: border-box;
      margin: 0;
      padding: 0;
      font-family: 'Roboto', sans-serif;
    }

    body {
      background-color: #fafafa;
      display: flex;
      justify-content: center;
      align-items: center;
      height: 100vh;
    }

    .login-container {
      background-color: white;
      border: 1px solid #dbdbdb;
      padding: 40px;
      width: 350px;
      text-align: center;
    }

    .logo {
      font-size: 32px;
      font-weight: bold;
      margin-bottom: 20px;
    }

    form {
      display: flex;
      flex-direction: column;
    }

    input[type="text"],
    input[type="password"] {
      padding: 10px;
      margin-bottom: 10px;
      border: 1px solid #dbdbdb;
      border-radius: 5px;
      background-color: #fafafa;
    }

    button {
      padding: 10px;
      background-color: #0095f6;
      color: white;
      border: none;
      border-radius: 5px;
      font-weight: bold;
      cursor: pointer;
    }

    button:hover {
      background-color: #007ed6;
    }

    .separator {
      margin: 20px 0;
      color: #999;
      font-size: 14px;
    }

    .signup {
      margin-top: 20px;
      font-size: 14px;
    }

    .signup a {
      color: #0095f6;
      text-decoration: none;
    }
    .erreur {
      color: red;
      margin-bottom: 20px;
    }
  </style>
</head>
<body>

  <div class="login-container">

    <div class="logo">emprunt</div>

    <?php if (isset($_GET['erreur']) && $_GET['erreur'] == 'true') { ?>
      <div class="erreur"><p>Identification echouée, veuillez réessayer.</p></div>
    <?php }?> 

    <form action="traitement/trait_login.php" method="POST">
      <input type="text" name="email" placeholder="Email de l'utilisateur"/>
      <input type="text" name="name" placeholder="Nom de l'utilisateur"/>
      <input type="password" name="password" placeholder="Mot de passe"/>
      <button type="submit">Connexion</button>
    </form>

    <p class="signup"><a href="inc.php">Inscription</a></p>
  </div>

</body>
</html>