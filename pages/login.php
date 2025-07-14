<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Connexion - Emprunt</title>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&family=Roboto&display=swap" rel="stylesheet">

  <style>
    * {
      box-sizing: border-box;
      margin: 0;
      padding: 0;
      font-family: 'Poppins', sans-serif;
    }

    body {
      min-height: 100vh;
      background: linear-gradient(135deg, #89f7fe, #66a6ff);
      display: flex;
      justify-content: center;
      align-items: center;
      animation: fadeIn 1s ease-in;
    }

    @keyframes fadeIn {
      from { opacity: 0; transform: translateY(-20px); }
      to { opacity: 1; transform: translateY(0); }
    }

    .login-container {
      backdrop-filter: blur(15px);
      background-color: rgba(255, 255, 255, 0.15);
      border-radius: 16px;
      padding: 40px 30px;
      width: 100%;
      max-width: 420px;
      box-shadow: 0 8px 32px rgba(0, 0, 0, 0.2);
      text-align: center;
      color: #fff;
    }

    .logo {
      font-size: 36px;
      font-weight: 600;
      margin-bottom: 30px;
    }

    form {
      display: flex;
      flex-direction: column;
      gap: 16px;
    }

    input[type="text"],
    input[type="password"] {
      padding: 14px;
      border: none;
      border-radius: 10px;
      font-size: 14px;
      background: rgba(255, 255, 255, 0.2);
      color: #fff;
      outline: none;
      transition: 0.3s;
    }

    input::placeholder {
      color: rgba(255, 255, 255, 0.7);
    }

    input:focus {
      background: rgba(255, 255, 255, 0.3);
      border: 1px solid #fff;
    }

    button {
      padding: 14px;
      background-color: #ffffff;
      color: #007ed6;
      border: none;
      border-radius: 10px;
      font-weight: bold;
      font-size: 15px;
      cursor: pointer;
      transition: 0.3s ease;
    }

    button:hover {
      background-color: #e6e6e6;
    }

    .signup {
      margin-top: 25px;
      font-size: 14px;
      color: #fff;
    }

    .signup a {
      color: #ffe500;
      text-decoration: none;
      font-weight: bold;
    }

    .signup a:hover {
      text-decoration: underline;
    }

    .erreur {
      background-color: rgba(255, 0, 0, 0.2);
      color: #fff;
      padding: 12px;
      border: 1px solid #ff4d4d;
      border-radius: 8px;
      margin-bottom: 20px;
      font-size: 14px;
    }
  </style>
</head>
<body>

  <div class="login-container">

    <div class="logo"> Emprunt</div>

    <?php if (isset($_GET['erreur']) && $_GET['erreur'] == 'true') { ?>
      <div class="erreur"> Identifiants incorrects. Veuillez réessayer.</div>
    <?php } ?>

    <form action="traitement/trait_login.php" method="POST">
      <input type="text" name="email" placeholder="Adresse email" required />
      <input type="text" name="name" placeholder="Nom d'utilisateur" required />
      <input type="password" name="password" placeholder="Mot de passe" required />
      <button type="submit">Se connecter</button>
    </form>

    <p class="signup">Pas encore inscrit ? <a href="inc.php">Créer un compte</a></p>
  </div>

</body>
</html>
