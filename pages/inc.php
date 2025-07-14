<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Page d'Inscription</title>
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
  </style>
</head>
<body>

  <div class="login-container">

    <div class="logo">Inscription</div>

    <form action="traitement/trait_login.php" method="POST">
      <h2>Email</h2>
      <input type="text" name="email" placeholder="Email de l'utilisateur"/>
      <h2>Nom</h2>
      <input type="text" name="name" placeholder="Nom de l'utilisateur"/>
      <h2>date de naissance</h2>
      <input type="date" name="dtn" />
      <h2>Genre</h2>
      <select name="genre" id="">
        <option value="M">homme</option>
        <option value="F">femme</option>
    </select>
      <h2>ville</h2>
      <input type="text" name ="ville" placeholder="ex:Antananarivo" />
      <h2>mot de passe </h2>
      <input type="password" name="psd" placeholder="mot de passe">
      <button type="submit">Connexion</button>
    </form>

    <p class="signup"><a href="">Inscription</a></p>
  </div>

</body>
</html>