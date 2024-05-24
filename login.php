<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login</title>
  <link rel="stylesheet" href="assets/css/loginStyle.css">
</head>
<body>
  <div class="container">
    <div class="left-column">
      <div class ="texte-login-top">
        <h3>TECHEVENT x JOP Paris 2024</h3>
        <h1>Connectez vous à votre compte</h1>
        <p>Heureux de vous revoir !</p>
        <p>Choisissez votre option de connexion :</p>
      </div>
      <div class="option-connexion-auto">
        <div id="olympics" class="option-connexion">
          <img src="assets\images\loginImages\Olympics-Logo.png" alt="Logo Olympics">
          <span>Olympics</span>
        </div>

        <div class="loginGoogleFB">
          <div id="google" class="option-connexion">
            <img src="assets\images\loginImages\Google-logo.png" alt="Logo Google">
            <span>Google</span>
          </div>
          <div id="facebook" class="option-connexion">
            <img src="assets\images\loginImages\Facebook-Logo.png" alt="Logo Facebook">
            <span>Facebook</span>
          </div>
        </div>

        <div id="continueSeparator">
          <div class="separator"></div>

          <p id="continuer">Continuer avec une adresse mail</p>
  
          <div class="separator"></div>
        </div>

        <div class="form-container">
          <form action="#" method="POST">
              <div class="form-group">
                  <input type="email" id="email" name="email" placeholder="Email" required>
              </div>
              <div class="form-group">
                  <input type="password" id="password" name="password" placeholder="Mot de passe" required>
              </div>
              <button type="submit" class="submitBtn">Se connecter</button>
          </form>
      </div>
        
        <div id="creationFullText">
          <p>Pas encore de compte ? <a href="signIn.php" id="creationLink">Créer un compte</a> </p>
        </div>
        
        
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