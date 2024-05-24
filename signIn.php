<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Sign In</title>
  <link rel="stylesheet" href="assets/css/signInStyle.css">
</head>
<body>
  <div class="container">
    <div class="left-column">
      <div class ="texte-login-top">
        <h3>TECHEVENT x JOP Paris 2024</h3>
        <h1>Création de votre compte</h1>
        <p>Bienvenue !</p>
        <p>Remplissez vos informations d’inscription.</p>
      </div>
  

        <div class="form-container">
          <form action="#" method="POST">
              <div class="form-group">
                <input type="text" id="username" name="username" placeholder="Nom d'utilisateur" required>
              </div>
              <div class="form-group">
                <input type="email" id="email" name="email" placeholder="Adresse mail" required>
              </div>
              <div class="form-group">
                <input type="password" id="password" name="password" placeholder="Mot de passe" required>
              </div>
              <div class="form-group">
                <input type="password" id="confirm-password" name="confirm-password" placeholder="Confirmation du mot de passe" required>
              </div>
              <div class="radio-group">
              <input type="radio" id="homme" name="sexe" value="homme" required> Homme
              <input type="radio" id="femme" name="sexe" value="femme" required> Femme
              <input type="radio" id="autre" name="sexe" value="autre" required> Autre
              </div>

            <select id="langue" name="langue" required>
              <option value="" disabled selected>Langue</option>
              <option value="fr">Français</option>
              <option value="en">Anglais</option>
              <option value="es">Espagnol</option>
              <option value="de">Allemand</option>
            </select>

            <button type="submit" class="submitBtn">S'inscrire</button>
          </form>
      </div>
        
      <div id="loginFullText">
        <p>Vous avez déjà un compte ? <a href="login.html" id="loginLink">Se connecter</a> </p>
      </div>

    </div>

    <div class="right-column">
      <div class="frame-image-droite">
        <img src="assets\images\loginImages\marathon-pour-tous-image 1.png" alt="Image Marathon Pour Tous">
      </div>
    </div>
</div>
  

</body>
</html>
