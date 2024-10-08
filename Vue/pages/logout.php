<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="../Styles/connexion.css" />
    <title>DigiTask - Connexion</title>
  </head>
  <body>
    <div class="connexionForm">
      <div class="partGauche">
        <!-- <img src="./assets/images/fille.png" alt="">
            h² -->
        <span class="logo">
          <img src="../../public/images/logo.png" alt="logo" />
        </span>
        <h1>Bienvenue sur DigiTask!</h1>
        <p>
          
          Entrez vos informations de connexions pour acceder au tableau de bord
        </p>
      </div>

      <div class="partDroite">
        <form action="">
          <h2>connexion</h2>

          <div class="items">
            <span class="item">     
              <label for="">Nom d'utilisateur</label>
              <input type="text" placeholder="Entrez votre nom d'utilisateur" />
            </span>
            <span class="item">
              <label for="">Mot de passe </label>
              <input type="password" placeholder="Entrez votre mot de passe" />
            </span>
          </div>

          <button>
            <a href="./hub.php"> Me connecter </a>
          </button>
        </form>
      </div>
    </div>
    <script src="./js/hub.js"></script>
  </body>
</html>
